<?php

namespace App\Logics;

use App\Models\ProductSalientFeature;

class ProductSalientFeatureLogic extends BaseLogic{

    public function find($id){
        return ProductSalientFeature::find($id);
    }

    public function getFeatureByProduct($productId){
        return ProductSalientFeature::whereProductId($productId)->get();
    }

    public function geetFeatureByFeatureTypeProduct($productId, $featureTypeId){
        return ProductSalientFeature::whereProductId($productId)->whereFeatureType($featureTypeId)->get();
    }

    public function create($param = []){
        $feature = new ProductSalientFeature();
        $feature->product_id = $param['productId'];
        $feature->feature_type =$param['featureType'];
        $feature->feature_title = $param['featureTitle'];
        $feature->feature_content = $param['featureContent'];
        $feature->feature_image = $param['featureImage'];
//        $feature->feature_sort = $param['feature_sort'];
        $feature->save();
    }

    public function save($feature){
        if(isset($feature)){
            $feature->save();
        }
    }

    public function destroy($featureId){
        return ProductSalientFeature::whereId($featureId)->delete();
    }

    public function destroyByProduct($productId){
        ProductSalientFeature::whereProductId($productId)->delete();
    }
}
