<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Curl;
use tests\Mockery\Adapter\Phpunit\EmptyTestCase;

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

    private function apiGetBlogInfoDetail($url){
        $blogDetail = new \StdClass();
        $responseBlogInfo = Curl::to($url)->get();
        $dom = new \DOMDocument('1.0', 'UTF-8');
        $dom->loadHTML($responseBlogInfo);
        $internalErrors = libxml_use_internal_errors(true);
        $finder = new \DOMXPath($dom);
        $key = "content_news_page";
        $divContent = $finder->query("//div[@id='$key']");
        if(count($divContent) > 0){
            $blogDetail->body = $this->innerHTML($divContent[0]);
        }
        $spanPostDate = $finder->query("//span[@class='txt2']");
        if(count($spanPostDate) > 0){
            $blogDetail->postDate = $spanPostDate[0]->nodeValue;
        }
        return $blogDetail;
    }

    function innerHTML(\DOMElement $element)
    {
        $doc = $element->ownerDocument;

        $html = '';

        foreach ($element->childNodes as $node) {
            $html .= $doc->saveHTML($node);
        }

        return $html;
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
            $urlHostToyota = "http://www.toyota.com.vn";
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
                            $blog->link = $urlHostToyota.$link;
                            $blog->image = $urlHostToyota.$imageLink;
                            $blogDetail = $this->apiGetBlogInfoDetail($blog->link);
                            if(isset($blogDetail->body)){
//                                dump($blogDetail->body);
//                                dd(str_replace('src="',"src=\"$urlHostToyota/",$blogDetail->body));
                                $blog->blog_content = str_replace('src="',"src=\"$urlHostToyota/",$blogDetail->body) ;
                            }
                            if(isset($blogDetail->postDate)){
                                $blog->post_date = $blogDetail->postDate;
                            }
                            if(!is_null($title) && !empty($title)){
                                $listBlog[] = $blog;
                            }
                        }
                    }
                }
            }

            foreach ($listBlog as $blogDetail){
                $this->blogService->createFromApi($blogDetail);
            }
        }
    }
}
