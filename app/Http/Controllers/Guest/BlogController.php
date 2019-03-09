<?php

namespace App\Http\Controllers\Guest;

use App\Common\Constant;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request){
        $blogType = $request->type;
        if(!isset($blogType)){
            $blogType = Constant::$BLOG_TYPE_PROMOTION_ID;
        }
        $blogs = $this->blogService->getAll(['isPublic' => Constant::$PUBLIC_FLG_ON, 'blogType' => $blogType, 'limit' => 8]);
        return view('guest.blog.blog',[
            'blogs' => $blogs
        ]);
    }

    public function detail($slug = null, $id){
        $blog = $this->blogService->findId($id);
        $blogNews = $this->blogService->getBlogNews(3,Constant::$BLOG_TYPE_GENERAL_ID);
        return view('guest.blog.blog_detail',[
            'blog' => $blog,
            'blogNews' => $blogNews
        ]);
    }
}
