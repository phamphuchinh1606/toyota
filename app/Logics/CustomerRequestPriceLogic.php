<?php

namespace App\Logics;

use App\Common\Constant;
use App\Models\Contact;
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
            $customerRequest->email = isset($params['email']) ? $params['email'] : '';
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

    public function countCustomerRequestNew(){
        return CustomerRequestPrice::whereStatus(Constant::$CUSTOMER_REQUEST_STATUS_NEW_CODE)->count();
    }

    public function getAll(){
        return CustomerRequestPrice::orderBy('created_at','asc')->paginate();
    }

    public function findId($requestId){
        return CustomerRequestPrice::find($requestId);
    }

    public function delete($requestId){
        $request = CustomerRequestPrice::find($requestId);;
        if(isset($request)){
            $request->delete();
        }
    }

    public function updateModel(CustomerRequestPrice $model){
        if(isset($model)){
            $model->save();
        }
    }
}
