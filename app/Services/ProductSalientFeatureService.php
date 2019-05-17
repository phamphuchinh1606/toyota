<?php

namespace App\Services;

use App\Common\AppCommon;
use App\Common\Constant;
use Illuminate\Http\Request;

class ProductSalientFeatureService extends BaseService{

    private function getInfoFromRequest(Request $request){
        $params['featureTitle'] = $request->feature_title;
        $params['featureContent'] = $request->feature_content;
        $params['productId'] = $request->product_id;
        $params['featureType'] = $request->feature_type;
        return $params;
    }
    public function create(Request $request){
        $params = $this->getInfoFromRequest($request);
        $featureImage = $request->feature_image;
        $params['featureImage'] = null;
        if(isset($featureImage)){
            $params['featureImage'] = AppCommon::moveImageProduct($featureImage,$params['productId']);
        }
        return $this->productSalientFeatureLogic->create($params);
    }

    public function update($featureId, Request $request){
        $feature = $this->productSalientFeatureLogic->find($featureId);
        if(isset($feature)){
            $feature->feature_title = $request->feature_title;
            $feature->feature_content = $request->feature_content;
            $feature->product_id = $request->product_id;
            $feature->feature_type = $request->feature_type;

            $featureImage = $request->feature_image;
            if(isset($featureImage)){
                AppCommon::deleteImage($feature->feature_image);
                $feature->feature_image = AppCommon::moveImageProduct($featureImage,$featureId);
            }
            return $this->productSalientFeatureLogic->save($feature);
        }

    }

    public function getListProductFeature($productId, $featureTypeId){
        return $this->productSalientFeatureLogic->geetFeatureByFeatureTypeProduct($productId,$featureTypeId);
    }

    public function delete($featureId){
        $this->productSalientFeatureLogic->destroy($featureId);
    }

}
