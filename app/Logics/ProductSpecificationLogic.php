<?php

namespace App\Logics;

use App\Common\Constant;
use App\Models\ProductSpecification;
use App\Models\TableNameDB;

class ProductSpecificationLogic extends BaseLogic{
    public function getInfoByProduct($productId){
        $tableNameSpecificationGroup = TableNameDB::$TableSettingSpecificationGroup;
        $tableNameSpecificationType = TableNameDB::$TableSettingSpecificationType;
        $tableNameSpecificationItem = TableNameDB::$TableSettingSpecificationItem;
        $tableNameProductSpecification = TableNameDB::$TableProductSpecification;
        return ProductSpecification::join($tableNameSpecificationItem,"$tableNameSpecificationItem.id",'=',"$tableNameProductSpecification.specification_item_id")
            ->join($tableNameSpecificationType,"$tableNameSpecificationType.id",'=',"$tableNameSpecificationItem.specification_type_id")
            ->join($tableNameSpecificationGroup,"$tableNameSpecificationGroup.id",'=',"$tableNameSpecificationType.specification_group_id")
            ->where("$tableNameProductSpecification.product_id",$productId)
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
                "$tableNameProductSpecification.specification_content as content"
            ])->get();
    }

    public function countSpecificationByProduct($productId){
        return ProductSpecification::whereProductId($productId)->count();
    }

    public function findId($specificationId){
        return ProductSpecification::find($specificationId);
    }

    public function insert($param = []){
        return ProductSpecification::insert($param);
    }

    public function destroyByProduct($productId){
        $deletedRows = ProductSpecification::whereProductId($productId)->delete();
        return $deletedRows;
    }
}
