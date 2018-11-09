<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Curl;

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

    public function loadInfo(Request $request){
        $productId = $request->product_id;
        $urlProduct = "http://www.toyota.com.vn/wigo-g-1-2-mt";
        $response = Curl::to($urlProduct)->get();

        $dom = new \DOMDocument('1.0', 'UTF-8');
        // set error level
        $internalErrors = libxml_use_internal_errors(true);
        $dom->loadHTML($response);
        $finder = new \DOMXPath($dom);
        $classname="thong_so_ky_thuat";
        $nodes = $finder->query("//*[contains(@class, '$classname')]");
        if(count($nodes) > 0){
            $listDivIds = [
                'tab_dt_2' => 'Động cơ & Khkung xe',
                'tab_dt_3' => 'Ngoại thất',
                'tab_dt_4'=> 'Nội thất',
                'tab_dt_203' => 'Ghế',
                'tab_dt_5' => 'Tiện nghi',
                'tab_dt_8' => 'An ninh',
                'tab_dt_6' => 'An toàn chủ động',
                'tab_dt_7' => 'An toàn bị động'
            ];
            $listGroupValue = [];
            foreach ($listDivIds as $key => $value){
                $div = $finder->query("//div[@id='$key']");
                foreach ($div as $item){
                    $listTr = $item->getElementsByTagName('tr');
                    foreach ($listTr as $tr){
                        $className = $tr->getAttribute('class');
                        if(!str_contains($className,'lv1')){
                            continue;
                        }
                        $listTd = $tr->getElementsByTagName('td');
                        $typeName = "";
                        $itemName = "";
                        $itemContent = "";
                        foreach ($listTd as $index => $td){
                            switch ($index){
                                case 0:
                                    $typeName = $td->nodeValue;
                                    break;
                                case 1:
                                    $itemName = $td->nodeValue;
                                    break;
                                case 3:
                                    $tdContent = $td->getElementsByTagName('td');
                                    if(count($tdContent) > 0){
                                        $itemContent = $tdContent[0]->nodeValue;
                                    }else{
                                        $itemContent = "";
                                    }
                            }
                        }
                        if(empty($typeName)){
                            $typeName = $listGroupValue[count($listGroupValue) - 1]->type_name;
                        }
                        $specificationInfo = new \StdClass();
                        $specificationInfo->group_name = $value;
                        $specificationInfo->type_name = $typeName;
                        $specificationInfo->item_name = $itemName;
                        $specificationInfo->item_content = $itemContent;
                        $listGroupValue[] = $specificationInfo;
                    }
                }
            }
            dd($listGroupValue);
        }
    }
}
