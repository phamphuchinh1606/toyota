<?php

namespace App\Logics;

use App\Common\Constant;
use App\Models\CustomerRequestPrice;
use App\Models\ProductType;
use App\Models\TableNameDB;
use Slug;

class CustomerRequestPriceLogic extends BaseLogic{

    /**
     * @param $params
     * @return CustomerRequestPrice | null
     */
    public function create($params){
        if(count($params) > 0){
            $customerRequest = new CustomerRequestPrice();
            $customerRequest->name = $params['name'];
            $customerRequest->email = $params['email'];
            $customerRequest->phone = $params['phone'];
            $customerRequest->address = $params['address'];
            $customerRequest->product_id = $params['product_id'];
            $customerRequest->time_plan = $params['time_plan'];
            $customerRequest->amount_current = $params['amount_current'];
            $customerRequest->payment_id = $params['payment_id'];
            $customerRequest->save();
            return $customerRequest;
        }
        return null;
    }
}
