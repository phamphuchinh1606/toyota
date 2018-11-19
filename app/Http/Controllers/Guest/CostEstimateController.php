<?php

namespace App\Http\Controllers\Guest;

use App\Common\AppCommon;
use Illuminate\Http\Request;

class CostEstimateController extends Controller
{
    public function index(){
        return view('guest.costEstimate.estimate');
    }

    public function estimate(Request $request){
        $productId = $request->product_id;
        $location = $request->location;
        $data = new \StdClass();
        if(isset($productId) && isset($location)){
            $product = $this->productService->findProduct($productId);
            if(isset($product)){
                $costEstimate = $this->costEstimateService->getInfo();
                if(isset($costEstimate)){
                    $price = $product->product_price;
                    $data->product_price = $price;
                    $data->product_name = $product->product_name;
                    $data->registration_of_owner_ship_fee = $price*$costEstimate->registration_of_owner_ship_fee/100;
                    $data->plate_number_fee = $costEstimate->plate_number_fee;
                    $data->cost_for_using_road = $costEstimate->cost_for_using_road;
                    $data->civil_insurance_for_the_liability_fee = $costEstimate->civil_insurance_for_the_liability_fee;
                    $data->insurance_two_way = $price*$costEstimate->insurance_two_way/100;
                    switch ($location){
                        case 'hcm':
                            $data->registrantion_fee = $costEstimate->registrantion_fee_hcm;
                            break;
                        case 'hn':
                            $data->registrantion_fee = $costEstimate->registrantion_fee_hn;
                            break;
                        case 'dn':
                            $data->registrantion_fee = $costEstimate->registrantion_fee_dn;
                            break;
                        case 'all':
                            $data->registrantion_fee = $costEstimate->registrantion_fee_all;
                            break;
                        default:
                            $data->registrantion_fee = $costEstimate->registrantion_fee_all;
                            break;
                    }
                    $data->total_amount = $this->calculatorTotalEstimate($data);
                    $data->product_price =  AppCommon::formatMoney($data->product_price);
                    $data->registration_of_owner_ship_fee =  AppCommon::formatMoney($data->registration_of_owner_ship_fee);
                    $data->plate_number_fee =  AppCommon::formatMoney($data->plate_number_fee);
                    $data->cost_for_using_road =  AppCommon::formatMoney($data->cost_for_using_road);
                    $data->civil_insurance_for_the_liability_fee =  AppCommon::formatMoney($data->civil_insurance_for_the_liability_fee);
                    $data->insurance_two_way =  AppCommon::formatMoney($data->insurance_two_way);
                    $data->registrantion_fee =  AppCommon::formatMoney($data->registrantion_fee);
                    $data->total_amount = AppCommon::formatMoney($data->total_amount);
                }
            }
        }
        if(!isset($data->totalAmount)){
            $data->status = 1;
            $data->message = "Có lỗi trong quá trình dự toán chi phí . Vui lòng thử lại.";
        }
        return response()->json($data);
    }

    private function calculatorTotalEstimate($datEstimate){
        if(isset($datEstimate)){
            return $datEstimate->product_price +
                $datEstimate->registration_of_owner_ship_fee +
                $datEstimate->plate_number_fee +
                $datEstimate->cost_for_using_road +
                $datEstimate->civil_insurance_for_the_liability_fee +
                $datEstimate->insurance_two_way +
                $datEstimate->registrantion_fee;
        }
        return 0;
    }
}
