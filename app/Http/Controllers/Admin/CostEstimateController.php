<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class CostEstimateController extends Controller
{
    public function index(){
        $costEstimate = $this->costEstimateService->getInfo();
        return $this->viewAdmin('costEstimate.estimate',['costEstimate' => $costEstimate]);
    }

    public function update(Request $request){
        $this->costEstimateService->update($request);
        return redirect()->route('admin.cost_estimate.estimate');
    }
}
