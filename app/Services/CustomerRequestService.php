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
        $customerRequest = $this->customerRequestPriceLogic->create($inputs);
        if(isset($customerRequest)){
            //Send mail
            try{
                $mailInfo = new CustomerRequestPriceMail($customerRequest);
                Mail::to($customerRequest->email)->send($mailInfo);
            }catch (\Exception $ex){
                dd($ex);
            }

        }
    }

    public function update($id,Request $request){
        $productTypeName = $request->product_type_name;
    }
}
