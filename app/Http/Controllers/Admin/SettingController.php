<?php

namespace App\Http\Controllers\Admin;

use App\Common\Constant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class SettingController extends Controller
{
    //Start Controller Banner
    public function bannerList(){
        $banners = $this->settingService->getBannerAll();
        return $this->viewAdmin('setting.banner_slider',[
            'banners' => $banners
        ]);
    }

    public function bannerCreate(Request $request){
        $this->settingService->createBanner($request);
        return redirect()->route('admin.setting.banner');
    }

    public function bannerUpdate(Request $request){
        $this->settingService->updateBanner($request);
        return redirect()->route('admin.setting.banner');
    }

    public function bannerDestroy($id){
        $this->settingService->deleteBanner($id);
        return redirect()->route('admin.setting.banner');
    }
    //End Controller Banner

    //Start Controller Top Banner
    public function topBannerList(){
        $banners = $this->settingService->getTopBannerAll();
        return $this->viewAdmin('setting.top_banner',[
            'banners' => $banners
        ]);
    }

    public function topBannerCreate(Request $request){
        $this->settingService->createTopBanner($request);
        return redirect()->route('admin.setting.topBanner');
    }

    public function topBannerDestroy($id){
        $this->settingService->deleteTopBanner($id);
        return redirect()->route('admin.setting.topBanner');
    }
    //End Controller Top Banner

    //Start Controller Tag Key
    public function tagList(){
        $tagOneList = $this->settingService->getTagByTagType(Constant::$TAG_KEY_ONE);
        $tagTwoList = $this->settingService->getTagByTagType(Constant::$TAG_KEY_TWO);
        return $this->viewAdmin('setting.tag',[
            'tagOneList' => $tagOneList,
            'tagTwoList' => $tagTwoList
        ]);
    }

    public function tagCreate(Request $request){
        $this->settingService->createTag($request);
        return redirect()->route('admin.setting.tag');
    }

    public function tagUpdate($id, Request $request){
        $this->settingService->updateTag($id,$request);
        return redirect()->route('admin.setting.tag');
    }

    public function tagDestroy($id){
        $this->settingService->deleteTag($id);
        return redirect()->route('admin.setting.tag');
    }
    //End Controller Tag Key

    //Start Controller App Info
    public function appInfo(){
        $appInfo = $this->settingService->getAppInfo();
        return $this->viewAdmin('setting.app_info',['appInfo' => $appInfo]);
    }

    public function updateAppInfo(Request $request){
        $this->settingService->updateAppInfo($request);
        return redirect()->route('admin.setting.app');
    }
    //End Controller App Info

    public function appAboutUpdate(){
        $appInfo = $this->settingService->getAppInfo();
        return $this->viewAdmin('setting.app_about',['appInfo' => $appInfo]);
//        return $this->viewAdmin('setting.test');
    }

    public function updateAboutAppInfo(Request $request){
        $aboutContent = $request->about_content;
        if(isset($aboutContent)){
            $this->settingService->updateAppAboutContent($aboutContent);
        }
        return redirect()->route('admin.setting.app_about.show');
    }

    public function storeLink(){
        Artisan::call('storage:link');
    }

    public function cache(){
        Artisan::call('config:cache');
        Artisan::call('route:cache');
        Artisan::call('view:cache');
    }

    public function clear(){
        Artisan::call('config:clear');
        Artisan::call('route:clear');
        Artisan::call('view:clear');
    }
}
