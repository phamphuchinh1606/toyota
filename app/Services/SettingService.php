<?php

namespace App\Services;

use App\Common\AppCommon;
use App\Common\Constant;
use App\Common\ImageCommon;
use App\Models\SettingAppInfo;
use Illuminate\Http\Request;
use DB;

class SettingService extends BaseService{

    public function getBannerAll(){
        return $this->settingLogic->getBannerAll();
    }

    public function createBanner(Request $request){
        $fileImage = $request->file('src_image');
        if(isset($fileImage)){
            $srcImage = AppCommon::moveImage($fileImage, Constant::$PATH_FOLDER_UPLOAD_IMAGE_BANNER);
            $linkUrl = $request->link_url;
            $sortNum = $request->sort_num;
            return $this->settingLogic->createBanner($srcImage,$linkUrl,$sortNum);
        }
        return null;
    }

    public function updateBanner(Request $request){
        $fileImage = $request->file('src_image');
        $bannerId = $request->banner_id;
        if(isset($bannerId)){
            $srcImage = null;
            if(isset($fileImage)){
                $srcImage = AppCommon::moveImage($fileImage, Constant::$PATH_FOLDER_UPLOAD_IMAGE_BANNER);
            }
            $linkUrl = $request->link_url;
            $sortNum = $request->sort_num;
            return $this->settingLogic->updateBanner($bannerId,$srcImage,$linkUrl,$sortNum);
        }
        return null;
    }

    public function deleteBanner($bannerId){
        $this->settingLogic->deleteBanner($bannerId);
    }

    //Start Top Banner
    public function getTopBannerAll(){
        return $this->settingLogic->getTopBannerAll();
    }

    public function createTopBanner(Request $request){
        $fileImage = $request->file('src_image');
        if(isset($fileImage)){
            $srcImage = AppCommon::moveImage($fileImage, Constant::$PATH_FOLDER_UPLOAD_IMAGE_TOP_BANNER);
            return $this->settingLogic->createTopBanner($srcImage);
        }
        return null;
    }

    public function deleteTopBanner($bannerId){
        $this->settingLogic->deleteTopBanner($bannerId);
    }
    //End Top banner

    //Start Tag Key
    public function getTagAll(){
        return $this->settingLogic->getTagAll();
    }

    public function getTagByTagType($tagTypeId){
        return $this->settingLogic->getTagByTagType($tagTypeId);
    }

    public function createTag(Request $request){
        $tagName = $request->tag_name;
        $productTypeId = $request->product_type_id;
        $linkUrl = $request->link_url;
        $sortNumber = $request->sort_number;
        if(!isset($sortNumber)){
            $sortNumber = 1;
        }
        $tabTypeId = $request->tab_type;
        $this->settingLogic->createTag($tabTypeId,$productTypeId,$tagName,$sortNumber,$linkUrl);
        return null;
    }

    public function updateTag($tagId, Request $request){
        $tag = $this->settingLogic->getTag($tagId);
        if(isset($tag)){
            $tag->tag_name = $request->tag_name;
            $tag->product_type_id = $request->product_type_id;
            $tag->link_url = $request->link_url;
            $tag->sort_number = $request->sort_number;
            $this->settingLogic->saveTag($tag);
        }
    }

    public function deleteTag($tagId){
        $this->settingLogic->deleteTag($tagId);
    }
    //End Tag Key

    //Start App Info
    public function getAppInfo(){
        $appInfo = $this->settingLogic->getAppInfo();
        if(!isset($appInfo)){
            $appInfo = $this->settingLogic->createAppInfo();
        }
        return $appInfo;
    }

    public function updateAppInfo(Request $request){
        try{
            DB::beginTransaction();
            $params['appId'] = $request->app_id;
            $params['appName'] = $request->app_name;
            $params['appPhone'] = $request->app_phone;
            $params['appFax'] = $request->app_fax;
            $params['appEmail'] = $request->app_email;
            $params['appSystemEmail'] = $request->app_system_email;
            $params['appTimerShowModalCustomerRequest'] = $request->app_timer_show_modal_customer_request;
            $params['appFacebook'] = $request->app_facebook;
            $params['appAddress'] = $request->app_address;
            $params['appAddressGoogleMap'] = $request->app_address_google_map;
            $params['appTitleChatBox'] = $request->app_title_chat_box;
            $params['appLinkFacebookFanpage'] = $request->app_link_facebook_fanpage;
            $params['appLinkTwitter'] = $request->app_link_twitter;
            $params['appLinkYoutube'] = $request->app_link_youtube;
            $params['appLinkInstagram'] = $request->app_link_instagram;
            $params['appMakeProductVideoOne'] = $request->app_make_product_video_one;
            $params['appMakeProductVideoTwo'] = $request->app_make_product_video_two;
            $params['appContent'] = $request->app_content;
            if(isset($request->app_icon)){
                if(isset($request->app_src_icon)){
                    ImageCommon::deleteImageLogo($request->app_src_icon);
                }
                $params['imageIcon'] = ImageCommon::moveImageLogo($request->app_icon);
            }
            $this->settingLogic->updateAppInfo($params);
            DB::commit();
        }catch (\Exception $ex){
            DB::rollBack();
        }

    }

    public function updateAppAboutContent($aboutContent){
        $appInfo = $this->settingLogic->getAppInfo();
        if(!isset($appInfo)){
            $appInfo = $this->settingLogic->createAppInfo();
        }
        $appInfo->about_content = $aboutContent;
        $this->settingLogic->save($appInfo);
    }
    //End App Info
}
