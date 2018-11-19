<?php

namespace App\Logics;

use App\Common\Constant;
use App\Models\Blog;

class BlogLogic extends BaseLogic{
    public function getAll($params = ['limit' => 20]){
        $query = Blog::where('is_delete',Constant::$DELETE_FLG_OFF);
        if(isset($params['isPublic'])){
            $query->where('is_public', $params['isPublic']);
        }
        if(isset($params['blogType']) && $params['blogType'] != null){
            $query->where('blog_type', $params['blogType']);
        }
        $limit = 20;
        if(isset($params['limit'])){
            $limit = $params['limit'];
        }
        $blogs = $query->orderBy('post_date','desc')->paginate($limit);
        return $blogs;
    }

    public function getBlogNews($limit, $blogType = null){
        $query = Blog::where('is_delete',Constant::$DELETE_FLG_OFF)
            ->where('is_public',Constant::$PUBLIC_FLG_ON);
        if($blogType != null){
            $query->where('blog_type',$blogType);
        }
        return $query->orderBy('post_date','desc')->limit($limit)->get();
    }

    public function create($params = []){
        $blog = new Blog();
        $blog->blog_title = $params['blogTitle'];
        $blog->blog_type = $params['blogType'];
        $blog->slug = $params['slug'];
        $blog->post_date = $params['postDate'];
        $blog->blog_description = $params['blogDescription'];
        $blog->blog_content = $params['blogContent'];
        $blog->is_public = $params['isPublic'];
        $blog->save();
        return $blog;
    }

    public function update($blogId, $params = []){
        $blog = Blog::find($blogId);
        if(isset($blog)){
            $blog->blog_title = $params['blogTitle'];
            $blog->blog_type = $params['blogType'];
            $blog->slug = $params['slug'];
            $blog->post_date = $params['postDate'];
            $blog->blog_description = $params['blogDescription'];
            $blog->blog_content = $params['blogContent'];
            $blog->is_public = $params['isPublic'];
            if(isset($params['blogImage'])){
                $blog->blog_image = $params['blogImage'];
            }
            $blog->save();
        }
    }

    public function findId($blogId){
        return Blog::find($blogId);
    }

    public function getByBlogTitle($blogTitle){
        return Blog::where('blog_title',$blogTitle)->first();
    }

    public function delete($blogId){
        $blog = Blog::find($blogId);;
        if(isset($blog)){
            $blog->is_delete = Constant::$DELETE_FLG_ON;
            $blog->save();
        }
    }
}
