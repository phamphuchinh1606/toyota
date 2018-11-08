<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class ProductSpecificationController extends Controller
{

    public function showCreate(Request $request){
        $productId = "";
        if(isset($request->id)){
            $productId = $request->id;
            $specificationInfo = $this->productSpecificationService->getProductSpecificationInfo($request->id);
            if(count($specificationInfo) <= 0){
                $specificationInfo = $this->settingSpecificationService->getSettingSpecificationInfo();
            }
        }else{
            $specificationInfo = $this->settingSpecificationService->getSettingSpecificationInfo();
        }
        return $this->viewAdmin('productSpecification.create',[
            'specificationInfo' => $specificationInfo,
            'productId' => $productId
        ]);
    }

    public function store(Request $request){
        $this->productSpecificationService->create($request);
        return redirect()->route('admin.product.index');
    }
}
