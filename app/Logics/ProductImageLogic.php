<?php

namespace App\Logics;

use App\Models\ProductImage;

class ProductImageLogic extends BaseLogic{

    public function getListImageByProductId($productId){
        return ProductImage::where('product_id',$productId)->get();
    }

    public function getListImageTypeByProductId($productId, $imageType){
        return ProductImage::where('product_id',$productId)->where('image_type',$imageType)->get();
    }

    public function create($productId, $srcImage, $imageType, $imageTitle, $imageContent){
        $productImage = new ProductImage();
        $productImage->product_id = $productId;
        $productImage->image_src = $srcImage;
        $productImage->image_type = $imageType;
        $productImage->image_title = $imageTitle;
        $productImage->image_content = $imageContent;
        $productImage->save();
        return $productImage;
    }

    public function delete($imageId){
        ProductImage::destroy($imageId);
    }

    public function deleteByProduct($productId){
        ProductImage::whereProductId($productId)->delete();
    }
}
