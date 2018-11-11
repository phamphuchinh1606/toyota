<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Curl;

class BlogController extends Controller
{
    public function index(){
        $blogs = $this->blogService->getAll();
        return $this->viewAdmin('blog.index',[
            'blogs' => $blogs
        ]);
    }

    public function showCreate(){
        return $this->viewAdmin('blog.create');
    }

    public function store(Request $request){
        $this->blogService->create($request);
        return redirect()->route('admin.blog.index');
    }

    public function showUpdate($id){
        $blog = $this->blogService->findId($id);
        return $this->viewAdmin('blog.update',[
            'blog' => $blog
        ]);
    }

    public function update($id, Request $request){
        $this->blogService->update($id, $request);
        return redirect()->route('admin.blog.index');
    }

    public function loadInfo(){
        $urlBlog = "http://www.toyota.com.vn/tin-tuc/tin-tuc-chung";
        $response = Curl::to($urlBlog)->get();
        $dom = new \DOMDocument('1.0', 'UTF-8');
        $internalErrors = libxml_use_internal_errors(true);
        $dom->loadHTML($response);
        $finder = new \DOMXPath($dom);
        $classname="tab-content-tmv";
        $nodes = $finder->query("//*[contains(@class, '$classname')]");
        if(count($nodes) > 0){
            $listDivIds = [
                'tab02' => 'Tin tức chung',
                'tab01' => 'Khuyến mãi',
                'tab03'=> 'Sự kiện'
            ];
            $listBlog = [];
            foreach ($listDivIds as $key => $value){
                $div = $finder->query("//div[@id='$key']");
                foreach ($div as $item){
                    $listLi = $item->getElementsByTagName('li');
                    foreach ($listLi as $li){
                        $tagLinka = $li->getElementsByTagName('a');
                        if(count($tagLinka) > 0){
                            $linkImage = $tagLinka[0];
                            $title = $linkImage->getAttribute('title');
                            $link = $linkImage->getAttribute('href');
                            $image = $linkImage->getElementsByTagName('img');
                            $imageLink = '';
                            if(count($image)){
                                $imageLink = $image[0]->getAttribute('data-original');
                            }
                            $blog = new \StdClass();
                            $blog->title = $title;
                            $blog->link = $link;
                            $blog->image = $imageLink;
                            $listBlog[] = $blog;
                        }
                    }
                }
            }
            dd($listBlog);
        }
    }
}
