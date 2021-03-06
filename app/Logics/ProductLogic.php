<?php

namespace App\Logics;

use App\Common\Constant;
use App\Common\DateUtils;
use App\Models\Product;
use DB;
use App\Models\TableNameDB;
use Slug;

class ProductLogic extends BaseLogic{

    public function findProduct($productId){
        return Product::find($productId);
    }

    public function getAllLProduct(){
        $productTypeNameTable = TableNameDB::$TableProductType;
        $listProducts = Db::table(TableNameDB::$TableProduct.' as product')
                            ->join(TableNameDB::$TableProductType.' as type', 'product.product_type_id','=','type.id')
                            ->where('product.is_delete', Constant::$DELETE_FLG_OFF)
                            ->select('product.*', 'type.product_type_name')
                            ->orderBy("type.id",'asc')
                            ->paginate(20);
        return $listProducts;
    }

    public function getAllProductByTree(){
        $select = [
            'product.id',
            'product.product_name',
            'product.product_type_id',
            'product.product_name',
            'product.product_number_of_seat',
            'product.product_design',
            'product.product_fuel',
            'product.product_origin',
            'product.product_other_information',
            'product.product_price',
            'product.product_image',
            'product.slug',
            'type.product_type_name'
        ];

        $listProducts = Db::table(TableNameDB::$TableProduct.' as product')
            ->join(TableNameDB::$TableProductType.' as type', 'product.product_type_id','=','type.id')
            ->where('product.is_delete', Constant::$DELETE_FLG_OFF)
            ->where('product.is_public', Constant::$PUBLIC_FLG_ON)
            ->select($select)
            ->orderBy('product.product_type_id')
            ->get();
        return $listProducts;
    }

    public function getAllProductBySearchInfo($searchInfo = null, $sortBy = null){
        $query = Db::table(TableNameDB::$TableProduct.' as product')
            ->join(TableNameDB::$TableProductType.' as type', 'product.product_type_id','=','type.id')
            ->where('product.is_delete', Constant::$DELETE_FLG_OFF)
            ->where('product.is_public', Constant::$PUBLIC_FLG_ON);
        $delimiter = '-';

        if(isset($searchInfo)){
            if(isset($searchInfo->product_type)){
                $productTypes = explode($delimiter,$searchInfo->product_type);
                $query->where(function($query) use ($productTypes) {
                    foreach ($productTypes as $productTypeId){
                        if($productTypeId != ''){
                            $query->orWhere('type.id',$productTypeId)
                                ->orWhere('type.parent_id',$productTypeId);
                        }
                    }
                });
            }
            if(isset($searchInfo->product_price) && $searchInfo->product_price != ''){
                $productPrices = explode($delimiter,$searchInfo->product_price);
                $query->where(function($query) use ($productPrices) {
                    foreach ($productPrices as $productPrice){
                        switch ($productPrice){
                            case 'less_500t':
                                $query->orWhere('product.product_price','<',500000000);
                                break;
                            case '500t_1ti':
                                $query->orWhereBetween('product.product_price',array(500000000, 1000000000));
                                break;
                            case '1ti_2ti':
                                $query->orWhereBetween('product.product_price',array(1000000000, 2000000000));
                                break;
                            case '2ti_3ti':
                                $query->orWhereBetween('product.product_price',array(2000000000, 3000000000));
                                break;
                            case '3ti_4ti':
                                $query->orWhereBetween('product.product_price',array(3000000000, 4000000000));
                                break;
                            case 'bigger_4ti':
                                $query->orWhere('product.product_price','>',4000000000);
                                break;
                        }
                    }
                });
            }
            if(isset($searchInfo->product_fuel) && $searchInfo->product_fuel != ''){
                $productFuels = explode($delimiter,$searchInfo->product_fuel);
                $query->where(function($query) use ($productFuels) {
                    foreach ($productFuels as $productFuel){
                        switch ($productFuel){
                            case 'dau':
                                $query->orWhere('product.product_fuel','like','%Dầu%');
                                break;
                            case 'xang':
                                $query->orWhere('product.product_fuel','like','%Xăng%');
                                break;
                        }
                    }
                });
            }
            if(isset($searchInfo->product_number_of_seat) && $searchInfo->product_number_of_seat != ''){
                $productNumberOfSeat = explode($delimiter,$searchInfo->product_number_of_seat);
                $query->where(function($query) use ($productNumberOfSeat) {
                    foreach ($productNumberOfSeat as $productNumberOfSeat){
                        switch ($productNumberOfSeat){
                            case '5cho':
                                $query->orWhere('product.product_number_of_seat','like','5 chỗ%');
                                break;
                            case '7cho':
                                $query->orWhere('product.product_number_of_seat','like','%7 chỗ%');
                                break;
                            case '8cho':
                                $query->orWhere('product.product_number_of_seat','like','%8 chỗ%');
                                break;
                            case '15cho':
                                $query->orWhere('product.product_number_of_seat','like','%15 chỗ%');
                                break;
                        }
                    }
                });
            }
        }
        if($sortBy != null){
            switch ($sortBy){
                case Constant::$SORT_BY_PRODUCT_CREATED_ASCENDING:
                    $query->orderBy('created_at','asc');
                    break;
                case Constant::$SORT_BY_PRODUCT_CREATED_DESCENDING:
                    $query->orderBy('created_at','desc');
                    break;
                case Constant::$SORT_BY_PRODUCT_PRICE_ASCENDING:
                    $query->orderBy('product_price','asc');
                    break;
                case Constant::$SORT_BY_PRODUCT_PRICE_DESCENDING:
                    $query->orderBy('product_price','desc');
                    break;
                case Constant::$SORT_BY_PRODUCT_TITLE_ASCENDING:
                    $query->orderBy('product_name','asc');
                    break;
                case Constant::$SORT_BY_PRODUCT_TITLE_DESCENDING:
                    $query->orderBy('product_name','desc');
                    break;
                case Constant::$SORT_BY_PRODUCT_BEST_SELLING:
                    $query->orderBy('qty_sale_order','desc');
                    break;
                default:
                    $query->orderBy('created_at','desc');
                    break;
            }
        }else{
            $query->orderBy('created_at','desc');
        }
        $listProducts = $query->select('product.*', 'type.product_type_name')
            ->paginate(18);
        return $listProducts;
    }

    public function searchProductByName($productName){
        $listProducts = Db::table(TableNameDB::$TableProduct.' as product')
            ->join(TableNameDB::$TableProductType.' as type', 'product.product_type_id','=','type.id')
            ->where('product.is_delete', Constant::$DELETE_FLG_OFF)
            ->whereRaw('LOWER(product.product_name) like \'%'.strtolower($productName).'%\'')
            ->select('product.*', 'type.product_type_name')
            ->paginate(20);
        return $listProducts;
    }

    public function getProductNews($limit = 8){
        $listProducts = Db::table(TableNameDB::$TableProduct.' as product')
            ->join(TableNameDB::$TableProductType.' as type', 'product.product_type_id','=','type.id')
            ->where('product.is_delete', Constant::$DELETE_FLG_OFF)
            ->where('product.is_public',Constant::$PUBLIC_FLG_ON)
            ->orderBy('created_at', 'desc')
            ->select('product.*', 'type.product_type_name')
            ->limit($limit)->get();
        return $listProducts;
    }

    public function getProductByVendor(){
        $productTable = TableNameDB::$TableProduct;
        $productSubTable = "productSub";
        $productSub = Db::table($productTable)
                        ->where("$productTable.is_delete", Constant::$DELETE_FLG_OFF)
                        ->where("$productTable.is_public",Constant::$PUBLIC_FLG_ON)
                        ->groupBy("$productTable.product_design")
                        ->groupBy("$productTable.product_type_id")
                        ->selectRaw("MIN($productTable.id) as id");
        $listProducts = Db::table($productTable)
            ->joinSub($productSub,$productSubTable,function($join) use ($productSubTable,$productTable){
                $join->on("$productSubTable.id", '=', "$productTable.id");})
            ->where("$productTable.is_delete", Constant::$DELETE_FLG_OFF)
            ->where("$productTable.is_public",Constant::$PUBLIC_FLG_ON)
            ->orderBy("$productTable.product_type_id",'asc')
            ->orderBy("$productTable.created_at", 'desc')
            ->select("$productTable.*")
            ->get();
        return $listProducts;
    }

    public function getProduct($productId){
        return Product::find($productId);
    }

    public function getProductByName($productName, $productCode = null){
        if(isset($productCode) && !empty($productCode)){
            return Product::where('product_code',$productCode)->first();
        }
        return Product::where('product_name',$productName)->first();
    }

    public function getProductByProductCode($productCode){
        return Product::where('product_code',$productCode)->first();
    }

    public function getProductInfo($productId){
        $product = Db::table(TableNameDB::$TableProduct.' as product')
            ->leftjoin(TableNameDB::$TableProductType.' as type', 'product.product_type_id','=','type.id')
            ->leftjoin(TableNameDB::$TableVendor.' as vendor', 'product.vendor_id' ,'=' ,'vendor.id')
            ->where('product.id', $productId)
            ->select('product.*', 'type.product_type_name', 'vendor.vendor_name')
            ->first();
        return $product;
    }

    public function getProductInfoBySlug($slug){
        $product = Db::table(TableNameDB::$TableProduct.' as product')
            ->leftjoin(TableNameDB::$TableProductType.' as type', 'product.product_type_id','=','type.id')
            ->leftjoin(TableNameDB::$TableVendor.' as vendor', 'product.vendor_id' ,'=' ,'vendor.id')
            ->where('product.is_delete',Constant::$DELETE_FLG_OFF)
            ->where('product.slug', $slug)
            ->where('product.is_public',Constant::$PUBLIC_FLG_ON)
            ->select('product.*', 'type.product_type_name', 'vendor.vendor_name')
            ->first();
        return $product;
    }

    public function getListProductSameType($productId,$productTypeId, $productDesign = null, $limit = 20){
        $query = Product::where('id','<>',$productId)->where('is_public', Constant::$PUBLIC_FLG_ON);

        if(isset($productDesign)){
            $query->where(function ($querySub) use ($productTypeId, $productDesign) {
                $querySub->where('product_type_id',$productTypeId)
                    ->orWhere('product_design',$productDesign);
            });
        }else{
            $query->where('product_type_id',$productTypeId);
        }
        return $query->limit($limit)->get();
    }

    public function getListProductHot($limit = 5){
        $products = Product::where('products.is_delete', Constant::$DELETE_FLG_OFF)
            ->where('products.is_public',Constant::$PUBLIC_FLG_ON)
            ->orderBy('qty_sale_order','desc')
            ->limit($limit)->get();
        return $products;
    }

    public function createProduct($params = []){
        if(count($params) > 0){
            $product = new Product();
            if(isset($params['productCode'])){
                $product->product_code = $params['productCode'];
            }
            $product->product_name = $params['productName'];
            $product->product_type_id = $params['productTypeId'];
            $product->product_price = $params['productPrice'];
            if(isset($params['productCostPrice'])){
                $product->product_cost_price = $params['productCostPrice'];
            }
            if(isset($params['productComparePrice'])){
                $product->product_compare_price = $params['productComparePrice'];
            }
            $product->product_sale_percent = $params['productSalePercent'];
            $product->is_public = $params['isPublic'];
            $product->product_qty = 0;
            $product->product_description = $params['productDescription'];
            $product->product_content = $params['productContent'];
            if(isset($params['slug'])){
                $product->slug = $params['slug'];
            }
            if(isset($params['productName']) && !isset($params['slug'])){
                $product->slug = Slug::createSlug(Product::class,'slug',$params['productName']);
            }
            $product->product_title = $params['productTitle'];
            if(isset($params['title'])){
                $product->title = $params['title'];
            }else{
                $product->title = $params['productTitle'];
            }
            if(isset($params['metaKeyword'])){
                $product->meta_keyword = $params['metaKeyword'];
            }else{
                $product->meta_keyword = $params['productDescription'];
            }
            $product->product_number_of_seat = $params['productNumberOfSeat'];
            $product->product_design = $params['productDesign'];
            $product->product_fuel = $params['productFuel'];
            $product->product_origin = $params['productOrigin'];
            $product->product_other_information = $params['productOtherInformation'];
            if(isset($params['productImage'])){
                $product->product_image = $params['productImage'];
            }
            if(isset($params['contentPromotion']) && trim($params['contentPromotion']) != ''){
                $product->content_promotion = $params['contentPromotion'];
            }
            $product->save();
            return $product;
        }
        return null;
    }

    public function updateProduct($productId, $params = []){
        if(count($params) > 0){
            $product = Product::find($productId);
            if(isset($product)){
                if(isset($params['productCode'])){
                    $product->product_code = $params['productCode'];
                }
                $product->product_name = $params['productName'];
                $product->product_type_id = $params['productTypeId'];
                $product->product_price = $params['productPrice'];
                if(isset($params['productCostPrice'])){
                    $product->product_cost_price = $params['productCostPrice'];
                }
                if(isset($params['productComparePrice'])){
                    $product->product_compare_price = $params['productComparePrice'];
                }
                $product->product_sale_percent = $params['productSalePercent'];
                $product->is_public = $params['isPublic'];
                $product->product_qty = 0;
                $product->product_description = $params['productDescription'];
                $product->product_content = $params['productContent'];
                if(isset($params['productImage'])){
                    $product->product_image = $params['productImage'];
                }
                if(isset($params['slug'])){
                    $product->slug = $params['slug'];
                }
                if(isset($params['productName']) && !isset($params['slug'])){
                    $product->slug = Slug::createSlug(Product::class,'slug',$params['productName']);
                }
                $product->product_title = $params['productTitle'];
                $product->title = $params['title'];
                $product->meta_keyword = $params['metaKeyword'];
                $product->product_number_of_seat = $params['productNumberOfSeat'];
                $product->product_design = $params['productDesign'];
                $product->product_fuel = $params['productFuel'];
                $product->product_origin = $params['productOrigin'];
                $product->product_other_information = $params['productOtherInformation'];
                if(isset($params['blogId'])){
                    $product->blog_id = $params['blogId'];
                }
                if(isset($params['contentPromotion']) && trim($params['contentPromotion']) != ''){
                    $product->content_promotion = $params['contentPromotion'];
                }
                $product->updated_at = DateUtils::now();
                $product->save();
            }
            return $product;
        }
        return null;
    }

    public function save(Product $product){
        if(isset($product)){
            $product->save();
        }
    }

    public function updateImage(Product $product, $imageName){
        if(isset($product)){
            $product->product_image = $imageName;
            $product->save();
            return $product;
        }
    }

    public function delete($productId){
        $product = Product::find($productId);
        if(isset($product)){
            $product->is_delete = Constant::$DELETE_FLG_ON;
            $product->save();
        }
    }

    public function destroy($productId){
        Product::destroy($productId);
    }

    //Logic Guest
    public function getListProductByProductType($productTypeId, $sortBy, $limitPage = 12){
        $query = Db::table(TableNameDB::$TableProduct.' as product')
            ->where('is_delete',Constant::$DELETE_FLG_OFF)
            ->where('is_public', Constant::$PUBLIC_FLG_ON)
            ->whereIn('product_type_id',function($query) use ($productTypeId){
                $query->select('id')
                    ->from(TableNameDB::$TableProductType)
                    ->where('id',$productTypeId)
                    ->orWhere('parent_id',$productTypeId);
            });
        if($sortBy != null){
            switch ($sortBy){
                case Constant::$SORT_BY_PRODUCT_CREATED_ASCENDING:
                    $query->orderBy('created_at','asc');
                    break;
                case Constant::$SORT_BY_PRODUCT_CREATED_DESCENDING:
                    $query->orderBy('created_at','desc');
                    break;
                case Constant::$SORT_BY_PRODUCT_PRICE_ASCENDING:
                    $query->orderBy('product_price','asc');
                    break;
                case Constant::$SORT_BY_PRODUCT_PRICE_DESCENDING:
                    $query->orderBy('product_price','desc');
                    break;
                case Constant::$SORT_BY_PRODUCT_TITLE_ASCENDING:
                    $query->orderBy('product_name','asc');
                    break;
                case Constant::$SORT_BY_PRODUCT_TITLE_DESCENDING:
                    $query->orderBy('product_name','desc');
                    break;
                case Constant::$SORT_BY_PRODUCT_BEST_SELLING:
                    $query->orderBy('qty_sale_order','desc');
                    break;
                default:
                    $query->orderBy('created_at','desc');
                    break;
            }
        }else{
            $query->orderBy('created_at','desc');
        }
        $products = $query->paginate($limitPage);
        return $products;
    }
}
