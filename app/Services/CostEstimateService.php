<?php

namespace App\Services;
use Illuminate\Http\Request;
use DB;

class CostEstimateService extends BaseService{
    public function getInfo(){
        $costEstimate = $this->costEstimateLogic->getInfo();
        if(!isset($costEstimate)){
            $costEstimate = $this->costEstimateLogic->create();
        }
        return $costEstimate;
    }

    public function update(Request $request){
        try{
            DB::beginTransaction();
            $params['costEstimateId'] = $request->cost_estimate_id;
            $params['registrationOfOwnerShipFee'] = $request->registration_of_owner_ship_fee;
            $params['plateNumberFee'] = $request->plate_number_fee;
            $params['costForUsingRoad'] = $request->cost_for_using_road;
            $params['civilInsuranceForTheLiabilityFee'] = $request->civil_insurance_for_the_liability_fee;
            $params['insuranceTwoWay'] = $request->insurance_two_way;
            $params['registrationFeeAll'] = $request->registrantion_fee_all;
            $params['registrationFeeHcm'] = $request->registrantion_fee_hcm;
            $params['registrationFeeHn'] = $request->registrantion_fee_hn;
            $params['registrationFeeDn'] = $request->registrantion_fee_dn;
            $this->costEstimateLogic->update($params);
            DB::commit();
        }catch (\Exception $ex){
            DB::rollBack();
        }

    }

}
