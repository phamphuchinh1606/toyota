<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){
        $banners = $this->settingService->getBannerAll();
        $topBanners = $this->settingService->getTopBannerAll();
        $productVendors = $this->productService->getProductByVendor();
//        $productNews = $this->productService->getProductNews(8);
//        $productHots = $this->productService->getListProductHot(8);
        return view('guest.home.index',[
            'banners' => $banners,
            'topBanners' => $topBanners,
            'productVendors' => $productVendors
        ]);
    }

    public function requestInfoPrice(Request $request){
        $this->customerRequestService->create($request);
        return redirect()->route('home.thank_you');
    }

    public function thankYou(){
        return view(
            'guest.home.thank_you',
            ['message' => 'Cám ơn bạn đã gửi thông báo giá.']
        );
    }
}
