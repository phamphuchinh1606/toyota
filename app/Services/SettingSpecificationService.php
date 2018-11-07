<?php

namespace App\Services;

use App\Common\AppCommon;
use App\Common\Constant;
use Illuminate\Http\Request;

class SettingSpecificationService extends BaseService{
    public function createSpecificationGroup($groupName, $sort){
        return $this->settingSpecificationLogic->createSpecificationGroup($groupName, $sort);
    }

    public function createSpecificationType($groupId, $typeName, $typeSort){
        return $this->settingSpecificationLogic->createSpecificationType($groupId, $typeName, $typeSort);
    }

    public function createSpecificationItem($typeId, $itemName, $itemSort){
        return $this->settingSpecificationLogic->createSpecificationItem($typeId, $itemName, $itemSort);
    }

    public function getSettingSpecificationInfo(){
        $listSettingSpecification = $this->settingSpecificationLogic->getSettingSpecificationInfo();
        $listGroup = [];
        if(count($listSettingSpecification) > 0){
            $groupIdOld = $listSettingSpecification[0]->group_id;
            $typeIdOld = $listSettingSpecification[0]->type_id;
            $listType = [];
            $listItem = [];
            $group = new \StdClass();
            $type = new \StdClass();
            foreach ($listSettingSpecification as $settingSpecification){
                if($typeIdOld != $settingSpecification->type_id){
                    $type->items = $listItem;
                    $listType[] = $type;
                    $listItem = [];
                    $type = new \StdClass();
                }
                $type->type_id = $settingSpecification->type_id;
                $type->type_name = $settingSpecification->type_name;

                if($groupIdOld != $settingSpecification->group_id){
                    $group->types = $listType;
                    $listGroup[] = $group;
                    $listType = [];
                    $group = new \StdClass();
                }
                $group->group_id = $settingSpecification->group_id;
                $group->group_name = $settingSpecification->group_name;

                $item = new \StdClass();
                $item->item_id = $settingSpecification->item_id;
                $item->item_name = $settingSpecification->item_name;
                $listItem[] = $item;

                $groupIdOld = $settingSpecification->group_id;
                $typeIdOld = $settingSpecification->type_id;
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
}
