<?php

namespace App\Http\Controllers\Admin;

use App\Common\Constant;
use App\Common\CurlCommon;
use Illuminate\Http\Request;
use Storage;

class ProductController extends Controller
{
    public function index(){
        $products = $this->productService->getAllLProduct();
        return view('admin.product.index')->with('products',$products);
    }

    public function showCreate(){
        return view('admin.product.create');
    }

    public function store(Request $request){
        $this->productService->createProduct($request);
        return redirect()->route('admin.product.index');

    }

    public function showUpdate($id){
        $product = $this->productService->getInfoProduct($id);
        $blogPromotion = $this->blogService->getBlogByType(Constant::$BLOG_TYPE_PROMOTION_ID);
        return view('admin.product.update',[
            'product' => $product,
            'blogPromotion' => $blogPromotion
        ]);
    }

    public function update($id, Request $request){
        $this->productService->updateProduct($id, $request);
        return redirect()->route('admin.product.index');
    }

    public function delete($id){
        $this->productService->delete($id);
        return redirect()->route('admin.product.index');
    }

    public function addProductImage($productId, Request $request){
        $image = $request->file('image_add') ;
        if(isset($image)){
            $this->productService->addImage($productId,$image);
        }
        return redirect()->route('admin.product.update',['id' => $productId]);
    }

    public function deleteProductImage($productId, $id){
        $this->productService->deleteImage($id);
        return redirect()->route('admin.product.update',['id' => $productId]);
    }

    public function loadAllProduct(){
        ini_set('max_execution_time', 300);
        $urlProductAll = "http://www.toyota.com.vn/xe-moi";
        $urlHostToyota = "http://www.toyota.com.vn";
        $finder = CurlCommon::curl_get_page_to_dom_xpath($urlProductAll);
        $nodePagings = $finder->query("//ul[@id='PaggingSection']");
        $listProductInfo = [];
        if(count($nodePagings) > 0){
            $nodePaging = $nodePagings[0];
            $listPages = $nodePaging->getElementsByTagName('li');
            $listPageNumber = [];
            foreach ($listPages as $liPage){
                $pageNumber = $liPage->getAttribute('data-page');
                $classPage = $liPage->getAttribute('class');
                if(isset($pageNumber) && !empty($pageNumber) && !str_contains($classPage,'next') && !str_contains($classPage,'prev')){
                    $listPageNumber[] = $pageNumber;
                }
            }
            foreach ($listPageNumber as $pageNumber){
                if($pageNumber != "1"){
                    $finder = CurlCommon::curl_get_page_to_dom_xpath($urlProductAll."?page=$pageNumber");
                }
                $nodeUlProducts = $finder->query("//ul[@id='ulProduct']");
                if(count($nodeUlProducts) > 0){
                    $nodeUlProduct = $nodeUlProducts[0];
                    $listLiProduct = $nodeUlProduct->getElementsByTagName('li');
                    foreach ($listLiProduct as $liProduct){
                        $productInfo = new \StdClass();
                        $productInfo->product_id = $liProduct->getAttribute('data-id');
                        $productInfo->product_price = explode('.',str_replace(' VND','',$liProduct->getAttribute('value')))[0];
                        $nodeImages = $liProduct->getElementsByTagName('img');
                        if(count($nodeImages) > 0){
                            $productInfo->product_image = $urlHostToyota.$nodeImages[0]->getAttribute('data-original');
                        }
                        $nodeLinks = $liProduct->getElementsByTagName('a');
                        if(count($nodeLinks) > 0){
                            $linkProduct = $urlHostToyota.'/'.$nodeLinks[0]->getAttribute('href');
                        }
                        if(isset($linkProduct)){
                            $productInfo = $this->toyotaService->getProductInfo($linkProduct,$productInfo);
                            $listProductInfo[] = $productInfo;
                        }
                    }
                }
            }
        }
        $this->productService->createListProductApi($listProductInfo);
        return redirect()->route('admin.product.index');
    }

}
