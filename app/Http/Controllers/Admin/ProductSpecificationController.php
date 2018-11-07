<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class ProductSpecificationController extends Controller
{
    public function index(){
//        $productColors = $this->productColorService->getAll();
//        return $this->viewAdmin('productColor.index',[
//            'productColors' => $productColors
//        ]);
    }

    public function showCreate(){
        $specificationInfo = $this->settingSpecificationService->getSettingSpecificationInfo();
        return $this->viewAdmin('productSpecification.create',[
            'specificationInfo' => $specificationInfo
        ]);
    }

    public function store(Request $request){
        $this->productColorService->create($request);
        return redirect()->route('admin.product_specification.index');
    }

    public function showUpdate($id){
        $productColor = $this->productColorService->findId($id);
        return $this->viewAdmin('productColor.update',['productColor' => $productColor]);
    }

    public function update($id, Request $request){
        $this->productColorService->update($id, $request);
        return redirect()->route('admin.product_color.index');
    }
}
