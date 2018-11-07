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
        return $this->settingSpecificationLogic->getSettingSpecificationInfo();
    }
}
