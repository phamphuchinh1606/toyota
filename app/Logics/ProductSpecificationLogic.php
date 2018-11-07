<?php

namespace App\Logics;

use App\Common\Constant;
use App\Models\ProductSpecification;
use App\Models\TableNameDB;

class ProductSpecificationLogic extends BaseLogic{
    public function getAll(){

    }

    public function findId($specificationId){
        return ProductSpecification::find($specificationId);
    }

    public function insert($param = []){
        return ProductSpecification::insert($param);
    }

    public function update($colorId, $param = []){
//        $productColor = ProductColor::find($colorId);
//        if(isset($productColor)){
//            $productColor->color_name = $param['colorName'];
//            $productColor->product_id = $param['productId'];
//            $productColor->color_code = $param['colorCode'];
//            $productColor->color_sort = $param['colorSort'];
//            if($param['imageName'] != null){
//                $productColor->color_image = $param['imageName'];
//            }
//            $productColor->save();
//        }
    }
}
