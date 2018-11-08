<?php

namespace App\Services;

use App\Common\AppCommon;
use App\Common\Constant;
use Illuminate\Http\Request;

class ProductSpecificationService extends BaseService{

    public function getProductSpecificationInfo($productId){
        $list = $this->productSpecificationLogic->getInfoByProduct($productId);
        $listGroup = [];
        if(isset($list) && count($list) > 0){
            $groupIdOld = $list[0]->group_id;
            $typeIdOld = $list[0]->type_id;
            $listType = [];
            $listItem = [];
            $group = new \StdClass();
            $type = new \StdClass();
            foreach ($list as $productSpecification){
                if($typeIdOld != $productSpecification->type_id){
                    $type->items = $listItem;
                    $listType[] = $type;
                    $listItem = [];
                    $type = new \StdClass();
                }
                $type->type_id = $productSpecification->type_id;
                $type->type_name = $productSpecification->type_name;

                if($groupIdOld != $productSpecification->group_id){
                    $group->types = $listType;
                    $listGroup[] = $group;
                    $listType = [];
                    $group = new \StdClass();
                }
                $group->group_id = $productSpecification->group_id;
                $group->group_name = $productSpecification->group_name;

                $item = new \StdClass();
                $item->item_id = $productSpecification->item_id;
                $item->item_name = $productSpecification->item_name;
                $item->content = $productSpecification->content;
                $listItem[] = $item;

                $groupIdOld = $productSpecification->group_id;
                $typeIdOld = $productSpecification->type_id;
            }
            if(count($listItem) > 0){
                $type->items = $listItem;
                $listType[] = $type;
                $group->types = $listType;
                $listGroup[] = $group;
            }
        }
        return $listGroup;
    }

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
                $countData = $this->productSpecificationLogic->countSpecificationByProduct($productId);
                if($countData > 0){
                    $this->productSpecificationLogic->destroyByProduct($productId);
                }
                $this->productSpecificationLogic->insert($productSpecifications);
            }
        }
    }

    public function update($colorId, Request $request){
    }
}
