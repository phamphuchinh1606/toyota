<?php

namespace App\Services;

use App\Common\AppCommon;
use App\Common\Constant;
use App\Mail\CustomerRequestPriceMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CustomerRequestService extends BaseService{

    public function create(Request $request){
        $inputs = $request->all();
        if( empty(trim($inputs['name'])) || empty(trim($inputs['phone']))){
            return;
        }
        $customerRequest = $this->customerRequestPriceLogic->create($inputs);
        if(isset($customerRequest)){
            //Send mail
            try{
                $appInfo = $this->settingLogic->getAppInfo();
                $customerRequest->request_ip = $request->getClientIp();
                $customerRequest->link_admin = route('admin.customer_request.show',['id' => $customerRequest->id]);
                $product = $this->productLogic->findProduct($customerRequest->product_id);
                $customerRequest->product_name = '';
                if(isset($product)){
                    $customerRequest->product_name = $product->product_name;
                }
                $mailInfo = new CustomerRequestPriceMail($customerRequest);
                if(isset($appInfo->app_system_email) && !empty($appInfo->app_system_email)){
                    Mail::to($appInfo->app_system_email)->send($mailInfo);
                }
            }catch (\Exception $ex){
            }
        }
    }

    public function updateStatus($id,$status){
        $item = $this->customerRequestPriceLogic->findId($id);
        if(isset($item)){
            $item->status = $status;
            $this->customerRequestPriceLogic->updateModel($item);
        }
    }

    public function delete($id){
        $this->customerRequestPriceLogic->delete($id);
    }

    public function findId($requestId){
        $item = $this->customerRequestPriceLogic->findId($requestId);
        if(isset($item)){
            $item->status_name = AppCommon::nameCustomerRequestStatusIsRead($item->status);
            $item->status_class = AppCommon::classCustomerRequestStatusIsRead($item->status);
        }
        return $item;
    }

    public function getAll(){
        $list = $this->customerRequestPriceLogic->getAll();
        foreach ($list as $item){
            $item->status_name = AppCommon::nameCustomerRequestStatusIsRead($item->status);
            $item->status_class = AppCommon::classCustomerRequestStatusIsRead($item->status);
        }
        return $list;
    }

    public function countCustomerRequestNew(){
        return $this->customerRequestPriceLogic->countCustomerRequestNew();
    }
}
