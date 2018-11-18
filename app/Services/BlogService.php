<?php

namespace App\Services;
use App\Common\AppCommon;
use App\Common\Constant;
use Illuminate\Http\Request;

class BlogService extends BaseService{

    public function getAll($params = []){
        $blogs = $this->blogLogic->getAll($params);
        foreach ($blogs as $blog){
            $blog->public_name = AppCommon::namePublicProductType($blog->is_public);
            $blog->public_class = AppCommon::classPublicProductType($blog->is_public);
            $blog->str_post_date = AppCommon::dateFormat($blog->post_date,'d/m/Y');
            $blog->str_day_post_date = AppCommon::dateFormat($blog->post_date,'d');
            $blog->str_month_post_date = AppCommon::dateFormat($blog->post_date,'m');
            $blog->str_year_post_date = AppCommon::dateFormat($blog->post_date,'Y');
            $blog->dot_blog_title = AppCommon::showTextDot($blog->blog_title,70);
            $blog->dot_blog_description = AppCommon::showTextDot($blog->blog_description,140);
            $blog->blog_type_name = AppCommon::nameBlogType($blog->blog_type);
        }
        return $blogs;
    }

    public function getBlogNews($limit = 6, $blogType = null){
        $blogs = $this->blogLogic->getBlogNews($limit,$blogType);
        foreach ($blogs as $blog){
            $blog->str_post_date = AppCommon::dateFormat($blog->post_date,'d/m/Y');
            $blog->str_day_post_date = AppCommon::dateFormat($blog->post_date,'d');
            $blog->str_month_post_date = AppCommon::dateFormat($blog->post_date,'m');
            $blog->str_year_post_date = AppCommon::dateFormat($blog->post_date,'Y');
            $blog->dot_blog_title = AppCommon::showTextDot($blog->blog_title,30);
            $blog->dot_blog_description = AppCommon::showTextDot($blog->blog_description,140);
        }
        return $blogs;
    }

    public function create(Request $request){
        $params['blogTitle'] = $request->blog_title;
        $params['blogType'] = $request->blog_type;
        $params['slug'] = $request->slug;
        $params['postDate'] = AppCommon::createFromFormat($request->post_date);
        $params['isPublic'] = AppCommon::getIsPublic($request->is_public);
        $params['blogDescription'] = $request->blog_description;
        $params['blogContent'] = $request->blog_content;
        $blog = $this->blogLogic->create($params);
        if(isset($blog)){
            $blogImage = $request->blog_image;
            if(isset($blogImage)){
                $imageName = AppCommon::moveImage($blogImage,Constant::$PATH_FOLDER_UPLOAD_IMAGE_BLOG.'/'.$blog->id);
                $blog->blog_image = $imageName;
                $blog->save();
            }
        }
        return $blog;
    }

    public function createFromApi($blogDetail){
        $params['blogTitle'] = $blogDetail->title;
        $params['blogType'] = $blogDetail->blog_type;
        $params['slug'] = null;
        $params['postDate'] = AppCommon::createFromFormat($blogDetail->post_date,'d.m.Y');
        $params['isPublic'] = Constant::$PUBLIC_FLG_ON;
        $params['blogDescription'] = $blogDetail->blog_description;
        $params['blogContent'] = $blogDetail->blog_content;
        $blog = $this->blogLogic->create($params);
        if(isset($blog)){
            $blog->blog_image = $blogDetail->image;
            $blog->save();
        }
        return $blog;
    }

    public function update($blogId, Request $request){
        $params['blogTitle'] = $request->blog_title;
        $params['blogType'] = $request->blog_type;
        $params['slug'] = $request->slug;
        $params['postDate'] = AppCommon::createFromFormat($request->post_date);
        $params['isPublic'] = AppCommon::getIsPublic($request->is_public);
        $params['blogDescription'] = $request->blog_description;
        $params['blogContent'] = $request->blog_content;
        $blogImage = $request->blog_image;
        if(isset($blogImage)){
            $blogDb = $this->blogLogic->findId($blogId);
            if(isset($blogDb)){
                AppCommon::deleteImage($blogDb->blog_image);
            }
            $imageName = AppCommon::moveImage($blogImage,Constant::$PATH_FOLDER_UPLOAD_IMAGE_BLOG.'/'.$blogDb->id);
            $params['blogImage'] = $imageName;
        }
        $this->blogLogic->update($blogId, $params);
    }

    public function findId($blogId){
        $blog = $this->blogLogic->findId($blogId);
        if(isset($blog)){
            $blog->post_date = AppCommon::dateFormat($blog->post_date,'m/d/Y');
            $blog->str_post_date = AppCommon::dateFormat($blog->post_date,'d/m/Y');
            if($blog->is_public == Constant::$PUBLIC_FLG_ON){
                $blog->is_check_public = "checked='checked'";
            }
        }
        return $blog;
    }

    public function delete($blogId){
        $this->blogLogic->delete($blogId);
    }
}
