<?php

namespace App\Logics;

use App\Common\Constant;
use App\Models\{SettingSpecificationItem,SettingSpecificationType, SettingSpecificationGroup};
use App\Models\TableNameDB;

class SettingSpecificationLogic extends BaseLogic{
    public function createSpecificationGroup($groupName, $sort){
        $group = new SettingSpecificationGroup();
        $group->specification_group_name = $groupName;
        $group->specification_sort = $sort;
        return $group;
    }

    public function createSpecificationType(){

    }
}
