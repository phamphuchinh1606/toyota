<?php

namespace App\Http\Controllers\Admin;

use App\Common\Constant;
use Illuminate\Http\Request;

class ProductSalientFeatureController extends Controller
{
    public function showCreate(Request $request){
        $productId = $request->productId;
        if(!isset($productId)){
            return redirect()->route('admin.product.index');
        }
        $listFeatureOperate = $this->productSalientFeatureService->getListProductFeature($productId, Constant::$FEATURE_TYPE_OPERATE);
        $listFeatureSafe = $this->productSalientFeatureService->getListProductFeature($productId, Constant::$FEATURE_TYPE_SAFE);
        return $this->viewAdmin('productSalientFeature.create',[
            'productId' => $productId,
            'listFeatureOperate' => $listFeatureOperate,
            'listFeatureSafe' => $listFeatureSafe
        ]);
    }

    public function store(Request $request){
        $productId = $request->product_id;
        $this->productSalientFeatureService->create($request);
        return redirect()->route('admin.product_feature.create',['productId' => $productId]);
    }

    public function delete($id, Request $request){
        $productId = $request->productId;
        $this->productSalientFeatureService->delete($id);
        return redirect()->route('admin.product_feature.create',['productId' => $productId]);
    }

    public function update( Request $request){
        $featureId = $request->feature_id;
        $productId = $request->product_id;
        if(isset($featureId)){
            $this->productSalientFeatureService->update($featureId,$request);
        }
        return redirect()->route('admin.product_feature.create',['productId' => $productId]);
    }
}
