<?php

namespace App\Services;

use App\Common\AppCommon;
use App\Common\Constant;
use Illuminate\Http\Request;

class ProductSpecificationService extends BaseService{

    private function getInfoProductFromRequest(Request $request){
        $listParams = $request->except(['_token','product_id']);
        $data = [];
        foreach ($listParams as $key => $value){
            $listKey = explode("_",$key);
            if(count($listKey) > 2){
                $dataItem = new \StdClass();
                $dataItem->group_id = $listKey[0];
                $dataItem->type_id = $listKey[1];
                $dataItem->item_id = $listKey[2];
                $dataItem->content = $value;
                $data[] = $dataItem;
            }
        }
        return $data;
    }

    public function create(Request $request){
        $productId = $request->product_id;
        $listData = $this->getInfoProductFromRequest($request);
        if(count($listData) > 0 && isset($productId)){
            $productSpecifications = [];
            foreach ($listData as $dataItem){
                $productSpecifications[] = [
                    'product_id' => $productId,
                    'specification_item_id' => $dataItem->item_id,
                    'specification_type_id' => $dataItem->type_id,
                    'specification_group_id' => $dataItem->group_id,
                    'specification_content' => $dataItem->content
                ];
            }
            if(count($productSpecifications) > 0){
                $this->productSpecificationLogic->insert($productSpecifications);
            }
        }
    }

    public function update($colorId, Request $request){
    }
}
