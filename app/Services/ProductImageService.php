<?php

namespace App\Services;

use App\Common\AppCommon;
use App\Common\Constant;
use Illuminate\Http\Request;

class ProductImageService extends BaseService{

    public function getImageByProduct($productId){
        return $this->productImageLogic->getListImageByProductId($productId);
    }

    public function getImageTypeByProduct($productId){
        $productImage = new \StdClass();
        $productImage->product_images = $this->productImageLogic->getListImageTypeByProductId($productId, Constant::$PRODUCT_IMAGE_TYPE_IMAGE);
        $productImage->product_furniture_images = $this->productImageLogic->getListImageTypeByProductId($productId, Constant::$PRODUCT_IMAGE_TYPE_FURNITURE);
        $productImage->product_exterior_images = $this->productImageLogic->getListImageTypeByProductId($productId, Constant::$PRODUCT_IMAGE_TYPE_EXTERIOR);
        return $productImage;
    }

    public function create(Request $request){
        $product = $this->productLogic->getProduct($request->product_id);
        if(isset($product)){
            $fileImage = $request->file('src_image');
            if(isset($fileImage)){
                $srcImage = AppCommon::moveImageProduct($fileImage, $product->id);
                $this->productImageLogic->create($product->id, $srcImage, $request->image_type);
            }
        }
    }

    public function delete($imageId){
        $this->productImageLogic->delete($imageId);
    }

}
