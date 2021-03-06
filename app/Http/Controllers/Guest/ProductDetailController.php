<?php

namespace App\Http\Controllers\Guest;

use App\Common\Constant;
use Illuminate\Http\Request;
use StdClass;

class ProductDetailController extends Controller
{
    public function index($slug = null, $id = 1){
        $product = $this->productService->getInfoProduct($id,$slug);
        $productSameTypes = new StdClass();
        if(isset($product)){
            $productSameTypes = $this->productService->getListProductSameType($product->id,$product->product_type_id, $product->product_design);
            $product->specifications = $this->productSpecificationService->getProductSpecificationInfo($product->id);
        }
        return view('guest.product.product_detail',[
            'product' => $product,
            'productSameTypes' => $productSameTypes
        ]);
//        return view('guest.product.test',[
//            'product' => $product,
//            'productSameTypes' => $productSameTypes
//        ]);
    }

    public function quickViewProduct($slug = null,$id){
        $product = $this->productService->getInfoProduct($id,$slug);
        return response()->json($this->parseProductJson($product));
    }

    private function parseProductJson($product){
        $productJson = new StdClass();
        if(isset($product)){
            $productJson->title = $product->product_name;
            $productJson->metadescription = $product->product_description;
            $productJson->options = [];
            $productJson->vendor = $product->vendor_name;
            $productJson->price = $product->product_price;
            $productJson->compare_at_price = $product->product_cost_price;
            $productJson->description = $product->product_description;
            $productJson->url = route('product_detail',['id' => $product->id]);
            $images = [];
            array_push($images,asset(Constant::$PATH_URL_UPLOAD_IMAGE.$product->product_image));
            foreach ($product->images as $imageItem){
                array_push($images,asset(Constant::$PATH_URL_UPLOAD_IMAGE.$imageItem->image_src));
            }
            $productJson->images = $images;
            $productJson->featured_image = asset(Constant::$PATH_URL_UPLOAD_IMAGE.$product->product_image);
            $variant = new StdClass();
            $variant->available = true;
            $variant->compare_at_price = $product->product_cost_price;
            $variant->inventory_quantity = "1";
            $variant->price = $product->product_price;
            $variant->sku = $product->product_code;
            $variant->id = $product->id;
            $variant->title = $product->product_name;
            $productJson->variants = [$variant];
        }
        return $productJson;
    }

    private function createDataProductTemp(){
        $product = new stdClass();
        $product->title = "Ví da khắc tên cao cấp 01";
        $product->metadescription = "Mẫu giày cao gót CG09030 là lựa chọn hàng đầu của các cô gái yêu thích phong cách sang trọng và thanh lịch, cùng nàng tỏa sáng mọi lúc mọi nơi.";
        $product->options = [];
        $product->vendor = "vendor";
        $product->price = "43500000";
        $product->compare_at_price = "50000000";
        $product->description = "Bạn đang quan tâm đến ví da khắc tên! Thế bạn có biết những gì người ta thường hay khắc trên ví da không? Có vô số thứ người ta có thể khắc lên ví, vậy thì nên khắc chữ gì lên ví da? Nào là tên, ảnh chân dung, 12 con giáp, logo công an,… đều khắc được cả.";
        $product->url = route('product_detail',['id' => 1]);
        $product->images = [asset('images/guest/product/vinam/product_1.jpg'),
            asset('images/guest/product/vinam/product_2.jpg'),
            asset('images/guest/product/vinam/product_3.jpg'),
            asset('images/guest/product/vinam/product_4.jpg'),
            asset('images/guest/product/vinam/product_5.jpg')
        ];
        $product->featured_image = asset('images/guest/product/vinam/product_1.jpg');
        $variant = new StdClass();
        $variant->available = true;
        $variant->compare_at_price = "51000000";
        $variant->inventory_quantity = "1";
        $variant->price = "43500000";
        $variant->sku = "CG09030";
        $variant->id = "1019623681";
        $variant->title = "Ví da khắc tên cao cấp 01";
        $product->variants = [$variant];
        return $product;
    }
}
