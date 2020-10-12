<?php

namespace App\Http\Controllers\Admin;

use App\Common\Constant;
use Illuminate\Http\Request;

class CustomerRequestPriceController extends Controller
{
    public function index(){
        $list = $this->customerRequestService->getAll();
        return $this->viewAdmin('customer_request.index',[
            'list' => $list
        ]);
    }

    public function show($id){
        $item = $this->customerRequestService->findId($id);
        if(!isset($item)) return redirect()->route('admin.customer_request.index');
        return $this->viewAdmin('customer_request.show',[
            'item' => $item
        ]);
    }

    public function delete($id){
        $this->customerRequestService->delete($id);
        return redirect()->route('admin.customer_request.index');
    }

    public function updateStatus($id, $status){
        $this->customerRequestService->updateStatus($id,$status);
        return redirect()->route('admin.customer_request.index');
    }
}
