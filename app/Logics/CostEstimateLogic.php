<?php

namespace App\Logics;

use App\Models\CostEstimate;

class CostEstimateLogic extends BaseLogic{
    public function getInfo(){
        return CostEstimate::first();
    }

    public function create(){
        $costEstimate = new CostEstimate();
        $costEstimate->save();
        return $costEstimate;
    }

    public function update($params = []){
        if(isset($params['costEstimateId'])){
            $costEstimate = CostEstimate::find($params['costEstimateId']);
            if(isset($costEstimate)){
                $costEstimate->registration_of_owner_ship_fee = $params['registrationOfOwnerShipFee'];
                $costEstimate->plate_number_fee = $params['plateNumberFee'];
                $costEstimate->cost_for_using_road = $params['costForUsingRoad'];
                $costEstimate->civil_insurance_for_the_liability_fee = $params['civilInsuranceForTheLiabilityFee'];
                $costEstimate->insurance_two_way = $params['insuranceTwoWay'];
                $costEstimate->registrantion_fee_all = $params['registrationFeeAll'];
                $costEstimate->registrantion_fee_hcm = $params['registrationFeeHcm'];
                $costEstimate->registrantion_fee_hn = $params['registrationFeeHn'];
                $costEstimate->registrantion_fee_dn = $params['registrationFeeDn'];
                $costEstimate->save();
            }
        }
    }
}
