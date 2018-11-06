<?php

namespace App\Services;

use App\Common\AppCommon;
use App\Common\Constant;
use Illuminate\Http\Request;

class ProductColorService extends BaseService{

    public function getAll(){
        $productColors = $this->productColorLogic->getAll();
        return $productColors;
    }

    private function getRequestInfo(Request $request){
        $param['colorName'] = $request->color_name;
        $param['productId'] = $request->product_id;
        $param['colorSort'] = $request->color_sort;
        $param['colorCode'] = $request->color_code;
        return $param;
    }

    public function create(Request $request){
        $param = $this->getRequestInfo($request);
        $colorImage = $request->color_image;
        $param['imageName'] = null;
        if(isset($colorImage)){
            $param['imageName'] = AppCommon::moveImageProduct($colorImage,$param['productId']);
        }
        return $this->productColorLogic->create($param);
    }

    public function update($colorId, Request $request){
        $param = $this->getRequestInfo($request);
        $colorImage = $request->color_image;
        $param['imageName'] = null;
        if(isset($colorImage)){
            $productColor = $this->productColorLogic->findId($colorId);
            if(isset($productColor)){
                AppCommon::deleteImage($productColor->color_image);
            }
            $param['imageName'] = AppCommon::moveImageProduct($colorImage,$param['productId']);
        }
        $this->productColorLogic->update($colorId,$param);
    }
}
