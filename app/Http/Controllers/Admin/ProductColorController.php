<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class ProductColorController extends Controller
{
    public function index(Request $request){
        $productId = $request->get('product_id');;
        $productColors = $this->productColorService->getAll($productId);
        return $this->viewAdmin('productColor.index',[
            'productColors' => $productColors
        ]);
    }

    public function showCreate(){
        return $this->viewAdmin('productColor.create');
    }

    public function store(Request $request){
        $this->productColorService->create($request);
        return redirect()->route('admin.product_color.index');
    }

    public function showUpdate($id){
        $productColor = $this->productColorService->findId($id);
        return $this->viewAdmin('productColor.update',['productColor' => $productColor]);
    }

    public function update($id, Request $request){
        $this->productColorService->update($id, $request);
        return redirect()->route('admin.product_color.index');
    }

    public function delete($id){
        $this->productColorService->delete($id);
        return redirect()->route('admin.product_color.index');
    }
}
