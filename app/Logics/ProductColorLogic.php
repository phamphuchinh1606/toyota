<?php

namespace App\Logics;

use App\Common\Constant;
use App\Models\ProductColor;
use App\Models\TableNameDB;

class ProductColorLogic extends BaseLogic{
    public function getAll(){
        $tableProduct = TableNameDB::$TableProduct;
        $tableProductColor = TableNameDB::$TableProductColor;
        return ProductColor::join("$tableProduct","$tableProductColor.product_id",'=',"$tableProduct.id")
            ->orderBy('product_id','asc')
            ->select("$tableProductColor.*", "$tableProduct.product_name")
            ->get();
    }

    public function findId($colorId){
        return ProductColor::find($colorId);
    }

    public function create($param = []){
        $productColor = new ProductColor();
        $productColor->color_name = $param['colorName'];
        $productColor->product_id = $param['productId'];
        $productColor->color_code = $param['colorCode'];
        $productColor->color_sort = $param['colorSort'];
        if($param['imageName'] != null){
            $productColor->color_image = $param['imageName'];
        }
        $productColor->save();
        return $productColor;
    }

    public function update($colorId, $param = []){
        $productColor = ProductColor::find($colorId);
        if(isset($productColor)){
            $productColor->color_name = $param['colorName'];
            $productColor->product_id = $param['productId'];
            $productColor->color_code = $param['colorCode'];
            $productColor->color_sort = $param['colorSort'];
            if($param['imageName'] != null){
                $productColor->color_image = $param['imageName'];
            }
            $productColor->save();
        }
    }
}
