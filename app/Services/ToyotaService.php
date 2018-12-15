<?php

namespace App\Services;

use App\Common\Constant;
use App\Logics\AddressLogic;
use App\Logics\BlogLogic;
use App\Logics\ContactLogic;
use App\Logics\CustomerLogic;
use App\Logics\OrderAddressLogic;
use App\Logics\OrderDetailLogic;
use App\Logics\OrderLogic;
use App\Logics\ProductColorLogic;
use App\Logics\ProductImageLogic;
use App\Logics\ProductLogic;
use App\Logics\ProductSalientFeatureLogic;
use App\Logics\ProductSpecificationLogic;
use App\Logics\ProductTypeLogic;
use App\Logics\SettingLogic;
use App\Logics\SettingSpecificationLogic;
use App\Logics\VendorLogic;
use Curl;
use Storage;
use App\Common\CurlCommon;

class ToyotaService extends BaseService{

    protected $urlHostToyota =  "http://www.toyota.com.vn";

    protected $settingSpecificationService;

    public function __construct(SettingSpecificationService $settingSpecificationService)
    {
        $this->settingSpecificationService = $settingSpecificationService;
    }

    private function getProductContent($finder, $productInfo){
        $nodeTitle = $finder->query("//span[@id='spTitleCar']");
        if(count($nodeTitle)){
            $productInfo->product_name = $nodeTitle[0]->nodeValue;
        }
        $nodeContents = $finder->query("//div[@id='sec_dt_01']");
        if(count($nodeContents) > 0){
            $nodeContent = $nodeContents[0];
            $nodePs = $nodeContent->getElementsByTagName('p');
            foreach ($nodePs as $nodeP){
                $className = $nodeP->getAttribute('class');
                if(str_contains($className,'txt_dt ')){
                    $productInfo->product_title = trim($nodeP->nodeValue);
                }
//                if(str_contains($className,'price_dt')){
//                    $productInfo->product_price = explode('.',str_replace(' VND','',trim($nodeP->nodeValue)))[0];;
//                }
                if(str_contains($className,'txt_dt_2')){
                    $nodeSpans = $nodeP->getElementsByTagName('span');
                    foreach ($nodeSpans as $nodeSpan){
                        $valueSpan = $nodeSpan->nodeValue;
                        if(str_contains($valueSpan,'Số chỗ ngồi')){
                            $productInfo->product_number_of_seat = trim(explode(':',$valueSpan)[1]);
                        }
                        if(str_contains($valueSpan,'Kiểu dáng')){
                            $productInfo->product_design = trim(explode(':',$valueSpan)[1]);
                        }
                        if(str_contains($valueSpan,'Nhiên liệu')){
                            $productInfo->product_fuel = trim(explode(':',$valueSpan)[1]);
                        }
                        if(str_contains($valueSpan,'Xuất xứ')){
                            $productInfo->product_origin = trim(explode(':',$valueSpan)[1]);
                        }
                        if(str_contains($valueSpan,'Thông tin khác')){
                            $productInfo->product_other_information = trim(explode(':',$valueSpan)[1]);
                        }
                    }
                }
            }
        }
        return $productInfo;
    }

    private function getProductColorInfo($finder, $productInfo){
        $nodeColors = $finder->query("//div[@class='list-color']");
        $productColors = [];
        if(count($nodeColors) > 0){
            $nodeColor = $nodeColors[0];
            $nodeLis = $nodeColor->getElementsByTagName('li');
            foreach ($nodeLis as $nodeLi){
                $nodeSpan = $nodeLi->firstChild;
                $productColor = new \StdClass();
                $productColor->color_image = $this->urlHostToyota.$nodeSpan->getAttribute('data-img');
                $productColor->color_name = $nodeSpan->getAttribute('data-cl');
                $style = $nodeSpan->getAttribute('style');
                $backGroundColors = explode('background-color:',$style);
                if(count($backGroundColors) > 1){
                    $productColor->color_code = $backGroundColors[1];
                }
                $productColors[] = $productColor;
            }
        }
        $productInfo->product_colors = $productColors;
        return $productInfo;
    }

    private function getProductListImage($finder, $productInfo){
        //Get List Image
        $nodeImages = $finder->query("//div[@class='thuvien clearfix hide-mb']");
        $productImages = [];
        if(count($nodeImages) > 0){
            $nodeImage = $nodeImages[0];
            $nodeDivs = $nodeImage->getElementsByTagName('div');
            foreach ($nodeDivs as $nodeDiv){
                $className = $nodeDiv->getAttribute('class');
                if(str_contains($className,'item animated fadeInRightShort')){
                    $nodeSrcImage = $nodeDiv->getElementsByTagName('img');
                    if(count($nodeSrcImage) > 0){
                        $productImages[] = $this->urlHostToyota.$nodeSrcImage[0]->getAttribute('data-original');
                    }
                }
            }
        }
        $productInfo->product_images = $productImages;

        //Get List Image Furniture
        $nodeImages = $finder->query("//div[@class='ngoaithat clearfix rows dpflex']");
        $productFurnitureImages = [];
        if(count($nodeImages) > 0){
            $nodeImage = $nodeImages[0];
            $nodeParent = $nodeImage->parentNode;
            $nodeDivs = $nodeParent->getElementsByTagName('div');
            foreach ($nodeDivs as $nodeDiv){
                $className = $nodeDiv->getAttribute('class');
                if(str_contains($className, 'owl-carousel slide_img_sm')){
                    $nodeSrcImages = $nodeDiv->getElementsByTagName('img');
                    if(count($nodeSrcImages) > 0){
                        foreach ($nodeSrcImages as $nodeSrcImage){
                            $productFurnitureImages[] = $this->urlHostToyota.$nodeSrcImage->getAttribute('data-src');
                        }
                    }
                }
            }
        }
        $productInfo->product_furniture_images = $productFurnitureImages;

        //Get List Image Exterior
        $nodeImages = $finder->query("//div[@class='noithat clearfix rows dpflex']");
        $productExteriorImages = [];
        if(count($nodeImages) > 0){
            $nodeImage = $nodeImages[0];
            $nodeParent = $nodeImage->parentNode;
            $nodeDivs = $nodeParent->getElementsByTagName('div');
            foreach ($nodeDivs as $nodeDiv){
                $className = $nodeDiv->getAttribute('class');
                if(str_contains($className, 'owl-carousel slide_img_sm')){
                    $nodeSrcImages = $nodeDiv->getElementsByTagName('img');
                    if(count($nodeSrcImages) > 0){
                        foreach ($nodeSrcImages as $nodeSrcImage){
                            $productExteriorImages[] = $this->urlHostToyota.$nodeSrcImage->getAttribute('data-src');
                        }
                    }
                }
            }
        }
        $productInfo->product_exterior_images = $productExteriorImages;
        return $productInfo;
    }

    private function getProductListImageBig($finder, $productInfo){
        //Get List Image
        $nodeImages = $finder->query("//div[@id='popup_pc_gallery']");
        $productImages = [];
        if(count($nodeImages) > 0){
            $nodeImage = $nodeImages[0];
            $nodeDivs = $nodeImage->getElementsByTagName('div');
            foreach ($nodeDivs as $nodeDiv){
                $className = $nodeDiv->getAttribute('class');
                if($className == 'inner_item'){
                    $nodeSrcImage = $nodeDiv->getElementsByTagName('img');
                    $image = new \StdClass();
                    if(count($nodeSrcImage) > 0){
                        $image->image = $this->urlHostToyota.$nodeSrcImage[0]->getAttribute('src');
                    }
                    $noteTitles = $nodeDiv->getElementsByTagName('p');
                    foreach ($noteTitles as $noteTitle){
                        $className = $noteTitle->getAttribute('class');
                        if($className == "txt_p_1"){
                            $image->title = $noteTitle->nodeValue;
                        }
                    }
                    $noteContents = $nodeDiv->getElementsByTagName('div');
                    foreach ($noteContents as $noteContent){
                        $className = $noteContent->getAttribute('class');
                        if($className == "txt_p_2"){
                            $image->content = trim($noteContent->nodeValue);
                        }
                    }
                    if(isset($image->image)){
                        $productImages[] = $image;
                    }
                }
            }
        }
        $productInfo->product_images = $productImages;

        //Get List Image Furniture
        $nodeImages = $finder->query("//div[@id='popup_pc_ex']");
        $productFurnitureImages = [];
        if(count($nodeImages) > 0){
            $nodeImage = $nodeImages[0];
            $nodeDivs = $nodeImage->getElementsByTagName('div');
            foreach ($nodeDivs as $nodeDiv){
                $className = $nodeDiv->getAttribute('class');
                if($className == 'inner_item'){
                    $nodeSrcImage = $nodeDiv->getElementsByTagName('img');
                    $image = new \StdClass();
                    if(count($nodeSrcImage) > 0){
                        $image->image = $this->urlHostToyota.$nodeSrcImage[0]->getAttribute('src');
                    }
                    $noteTitles = $nodeDiv->getElementsByTagName('p');
                    foreach ($noteTitles as $noteTitle){
                        $className = $noteTitle->getAttribute('class');
                        if($className == "txt_p_1"){
                            $image->title = $noteTitle->nodeValue;
                        }
                    }
                    $noteContents = $nodeDiv->getElementsByTagName('div');
                    foreach ($noteContents as $noteContent){
                        $className = $noteContent->getAttribute('class');
                        if($className == "txt_p_2"){
                            $image->content = trim($noteContent->nodeValue);
                        }
                    }
                    if(isset($image->image)){
                        $productFurnitureImages[] = $image;
                    }
                }
            }
        }
        $productInfo->product_furniture_images = $productFurnitureImages;

        //Get List Image Exterior
        $nodeImages = $finder->query("//div[@id='popup_pc_inter']");
        $productExteriorImages = [];
        if(count($nodeImages) > 0){
            $nodeImage = $nodeImages[0];
            $nodeDivs = $nodeImage->getElementsByTagName('div');
            foreach ($nodeDivs as $nodeDiv){
                $className = $nodeDiv->getAttribute('class');
                if($className == 'inner_item'){
                    $nodeSrcImage = $nodeDiv->getElementsByTagName('img');
                    $image = new \StdClass();
                    if(count($nodeSrcImage) > 0){
                        $image->image = $this->urlHostToyota.$nodeSrcImage[0]->getAttribute('src');
                    }
                    $noteTitles = $nodeDiv->getElementsByTagName('p');
                    foreach ($noteTitles as $noteTitle){
                        $className = $noteTitle->getAttribute('class');
                        if($className == "txt_p_1"){
                            $image->title = $noteTitle->nodeValue;
                        }
                    }
                    $noteContents = $nodeDiv->getElementsByTagName('div');
                    foreach ($noteContents as $noteContent){
                        $className = $noteContent->getAttribute('class');
                        if($className == "txt_p_2"){
                            $image->content = trim($noteContent->nodeValue);
                        }
                    }
                    if(isset($image->image)){
                        $productExteriorImages[] = $image;
                    }
                }
            }
        }
        $productInfo->product_exterior_images = $productExteriorImages;
        return $productInfo;
    }

    private function getProductSalientFeature($finder, $productInfo){
        $nodeTabVHs = $finder->query("//div[@id='popup_pc_operate']");
        $productFeatures = [];
        if(count($nodeTabVHs) > 0){
            $nodeTag = $nodeTabVHs[0];
            foreach ($nodeTag->getElementsByTagName('div') as $tagDiv){
                if($tagDiv->getAttribute('class') == 'inner_item'){
                    $productSalientFeature = new \StdClass();
                    $productSalientFeature->feature_type = Constant::$FEATURE_TYPE_OPERATE;
                    $productSalientFeature->feature_image = $this->urlHostToyota.$tagDiv->getElementsByTagName('img')[0]->getAttribute('src');
                    foreach ($tagDiv->getElementsByTagName('div') as $tagDivItem){
                        if($tagDivItem->getAttribute('class') == 'txt_p_2'){
                            $productSalientFeature->feature_content = trim($tagDivItem->nodeValue);
                        }
                    }
                    foreach ($tagDiv->getElementsByTagName('p') as $tagPItem){
                        if($tagPItem->getAttribute('class') == 'txt_p_1'){
                            $productSalientFeature->feature_title = trim($tagPItem->nodeValue);
                        }
                    }
                    $productFeatures[] = $productSalientFeature;
                }
            }
        }
        $nodeTabVHs = $finder->query("//div[@id='popup_pc_safe']");
        if(count($nodeTabVHs) > 0){
            $nodeTag = $nodeTabVHs[0];
            foreach ($nodeTag->getElementsByTagName('div') as $tagDiv){
                if($tagDiv->getAttribute('class') == 'inner_item'){
                    $productSalientFeature = new \StdClass();
                    $productSalientFeature->feature_type = Constant::$FEATURE_TYPE_SAFE;
                    $productSalientFeature->feature_image = $this->urlHostToyota.$tagDiv->getElementsByTagName('img')[0]->getAttribute('src');
                    foreach ($tagDiv->getElementsByTagName('div') as $tagDivItem){
                        if($tagDivItem->getAttribute('class') == 'txt_p_2'){
                            $productSalientFeature->feature_content = trim($tagDivItem->nodeValue);
                        }
                    }
                    foreach ($tagDiv->getElementsByTagName('p') as $tagPItem){
                        if($tagPItem->getAttribute('class') == 'txt_p_1'){
                            $productSalientFeature->feature_title = trim($tagPItem->nodeValue);
                        }
                    }
                    $productFeatures[] = $productSalientFeature;
                }
            }
        }
        $productInfo->product_salient_features = $productFeatures;
        return $productInfo;
    }

    private function getProductSpecification($finder, $productInfo){
        $classname="thong_so_ky_thuat";
        $nodes = $finder->query("//*[contains(@class, '$classname')]");
        $specificationInfoSetting = $this->settingSpecificationService->getSettingSpecificationInfo();

        if(count($nodes) > 0){
            $listDivIds = [
                'tab_dt_2' => 'Động cơ & Khung xe',
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
                        $specificationInfo->group_name = trim($value);
                        $specificationInfo->type_name = trim($typeName);
                        $specificationInfo->item_name = trim($itemName);
                        $specificationInfo->item_content = trim($itemContent);
                        $listGroupValue[] = $specificationInfo;
                    }
                }
            }
            $mapData = [];
            foreach ($listGroupValue as $itemValue){
                $key = trim($itemValue->group_name.'_'.$itemValue->type_name.'_'.$itemValue->item_name);
                $mapData[$key] = $itemValue->item_content;
            }
            foreach ($specificationInfoSetting as $group){
                foreach ($group->types as $type){
                    foreach ($type->items as $item){
                        $key = trim($group->group_name.'_'.$type->type_name.'_'.$item->item_name);
                        if(isset($mapData[$key])){
                            $item->content = $mapData[$key];
                            unset($mapData[$key]);
                        }
                    }
                }
            }
        }
        $productInfo->specification_info = $specificationInfoSetting;
        return $productInfo;
    }

    public function getProductInfo($urlProduct, $productInfo){
        $finder = CurlCommon::curl_get_page_to_dom_xpath($urlProduct);
        //Get product content
        $this->getProductContent($finder, $productInfo);
        //Get info color Product
        $productInfo = $this->getProductColorInfo($finder,$productInfo);
        //Get product image
        $productInfo = $this->getProductListImageBig($finder, $productInfo);
        //Get SalientFeature
        $productInfo = $this->getProductSalientFeature($finder, $productInfo);
        //Get Specification
        $productInfo = $this->getProductSpecification($finder, $productInfo);
        return $productInfo;
    }

}
