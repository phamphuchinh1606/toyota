<?php

namespace App\Logics;

use App\Common\Constant;
use App\Models\{SettingSpecificationItem,SettingSpecificationType, SettingSpecificationGroup};
use App\Models\TableNameDB;
use Illuminate\Support\Facades\DB;

class SettingSpecificationLogic extends BaseLogic{
    public function createSpecificationGroup($groupName, $sort){
        $group = new SettingSpecificationGroup();
        $group->specification_group_name = $groupName;
        $group->specification_sort = $sort;
        $group->save();
        return $group;
    }

    public function createSpecificationType($groupId, $typeName, $typeSort){
        $type = new SettingSpecificationType();
        $type->specification_group_id = $groupId;
        $type->specification_type_name = $typeName;
        $type->specification_type_sort = $typeSort;
        $type->save();
        return $type;
    }

    public function createSpecificationItem($typeId, $itemName, $itemSort){
        $item = new SettingSpecificationItem();
        $item->specification_type_id = $typeId;
        $item->item_name = $itemName;
        $item->item_sort = $itemSort;
        $item->save();
        return $item;
    }

    public function getSettingSpecificationInfo(){
        $tableNameSpecificationGroup = TableNameDB::$TableSettingSpecificationGroup;
        $tableNameSpecificationType = TableNameDB::$TableSettingSpecificationType;
        $tableNameSpecificationItem = TableNameDB::$TableSettingSpecificationItem;
        return SettingSpecificationItem::join($tableNameSpecificationType,"$tableNameSpecificationType.id",'=',"$tableNameSpecificationItem.specification_type_id")
                ->join($tableNameSpecificationGroup,"$tableNameSpecificationGroup.id",'=',"$tableNameSpecificationType.specification_group_id")
                ->orderByRaw("cast($tableNameSpecificationGroup.specification_sort as unsigned) asc")
                ->orderByRaw("cast($tableNameSpecificationType.specification_type_sort as unsigned) asc")
                ->orderByRaw("cast($tableNameSpecificationItem.item_sort as unsigned) asc")
                ->select([
                    "$tableNameSpecificationItem.id as item_id",
                    "$tableNameSpecificationItem.item_name as item_name",
                    "$tableNameSpecificationType.id as type_id",
                    "$tableNameSpecificationType.specification_type_name as type_name",
                    "$tableNameSpecificationGroup.id as group_id",
                    "$tableNameSpecificationGroup.specification_group_name as group_name",
                ])->get();
    }
}
