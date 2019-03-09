<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class ProductImageController extends Controller
{
    public function showCreate(Request $request){
        $productId = $request->productId;
        if(!isset($productId)){
            return redirect()->route('admin.product.index');
        }
        $listProductImage = $this->productImageService->getImageTypeByProduct($productId);
        return $this->viewAdmin('productImage.product_image',[
            'productId' => $productId,
            'listProductImage' => $listProductImage
        ]);
    }

    public function store(Request $request){
        $productId = $request->product_id;
        if(!isset($productId)){
            return redirect()->route('admin.product.index');
        }
        $this->productImageService->create($request);
        return redirect()->route('admin.product_image.create',['productId' => $productId]);
    }

    public function update(Request $request){
        $productId = $request->product_id;
        if(!isset($productId)){
            return redirect()->route('admin.product.index');
        }
        $productImageId = $request->product_image_id;
        if(isset($productImageId)){
            $this->productImageService->update($request);
        }
        return redirect()->route('admin.product_image.create',['productId' => $productId]);
    }

    public function delete($id,$productId){
        $this->productImageService->delete($id);
        return redirect()->route('admin.product_image.create',['productId' => $productId]);
    }
}
