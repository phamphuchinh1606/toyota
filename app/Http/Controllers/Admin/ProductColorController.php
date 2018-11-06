<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class ProductColorController extends Controller
{
    public function index(){
        $productColors = $this->productColorService->getAll();
        return $this->viewAdmin('productColor.index',[
            'productColors' => $productColors
        ]);
    }

    public function showCreate(){
        return $this->viewAdmin('productColor.create');
    }

    public function store(Request $request){
        $productType = $this->productColorService->create($request);
        return redirect()->route('admin.product_color.index');
    }
}
