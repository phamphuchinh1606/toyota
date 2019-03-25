@extends('guest.layouts.master')

@section('head.description', $blog->blog_description)

@section('head.og.title',$blog->blog_title)
@section('head.og.description',$blog->blog_description)
@section('head.og.image',\App\Common\ImageCommon::showImage($blog->blog_image))
@section('head.og.url',route('blog.detail',['id' => $blog->id, 'slug' => $blog->slug]))

@section('head.title')
    {{$blog->blog_title}}
@endsection

@section('body.content')
    <main class="main-content" role="main" style="margin-top: 10px;">
        <section id="blog-wrapper">
            <div class="wrapper">
                <div class="inner">
                    <div class="grid">
                        <article class=" grid__item large--three-quarters medium--one-whole small--one-whole" itemscope="" itemtype="http://schema.org/Article">
                            <div class="article-content">
                                <div class="article-head">
                                    <h1>{{$blog->blog_title}}</h1>
                                    <div class="grid mg-left-15">
                                        <div class="grid__item large--one-half medium--one-half small--one-half pd-left15">
                                            <div class="article-date-comment">
                                                <div class="date">
                                                    <svg class="svg-inline--fa fa-calendar fa-w-14" aria-hidden="true" data-prefix="fa" data-icon="calendar" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                        <path fill="currentColor" d="M12 192h424c6.6 0 12 5.4 12 12v260c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V204c0-6.6 5.4-12 12-12zm436-44v-36c0-26.5-21.5-48-48-48h-48V12c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v52H160V12c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v52H48C21.5 64 0 85.5 0 112v36c0 6.6 5.4 12 12 12h424c6.6 0 12-5.4 12-12z"></path>
                                                    </svg>
                                                    {{$blog->str_post_date}}
                                                </div>
                                                {{--<div class="comment"><svg class="svg-inline--fa fa-comment fa-w-18" aria-hidden="true" data-prefix="far" data-icon="comment" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M288 32C129 32 0 125.1 0 240c0 49.3 23.7 94.5 63.3 130.2-8.7 23.3-22.1 32.7-37.1 43.1C15.1 421-6 433 1.6 456.5c5.1 15.4 20.9 24.7 38.1 23.3 57.7-4.6 111.2-19.2 157-42.5 28.7 6.9 59.4 10.7 91.2 10.7 159.1 0 288-93 288-208C576 125.1 447.1 32 288 32zm0 368c-32.5 0-65.4-4.4-97.3-14-32.3 19-78.7 46-134.7 54 32-24 56.8-61.6 61.2-88.4C79.1 325.6 48 286.7 48 240c0-70.9 86.3-160 240-160s240 89.1 240 160c0 71-86.3 160-240 160z"></path></svg><!-- <i class="far fa-comment"></i> --><span class="fb-comments-count fb_comments_count_zero" data-href="https://suplo-car-accesories.myharavan.com/blogs/news/bmw-i8-ham-ho-cua-xuong-do-ac-schnitzer" fb-xfbml-state="rendered"><span class="fb_comments_count">0</span></span></div>--}}
                                                {{--<div class="author">--}}
                                                    {{--<svg class="svg-inline--fa fa-user fa-w-16" aria-hidden="true" data-prefix="fa" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 0c88.366 0 160 71.634 160 160s-71.634 160-160 160S96 248.366 96 160 167.634 0 256 0zm183.283 333.821l-71.313-17.828c-74.923 53.89-165.738 41.864-223.94 0l-71.313 17.828C29.981 344.505 0 382.903 0 426.955V464c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48v-37.045c0-44.052-29.981-82.45-72.717-93.134z"></path></svg><!-- <i class="fa fa-user" aria-hidden="true"></i> --> Suplo Bạc--}}
                                                {{--</div>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="article-tldr clearfix">

                                </div>

                                <div class="article-body">
                                    {!! $blog->blog_content !!}
                                </div>

                                <div class="article-tags clearfix">
                                    <span>Từ khóa:</span>
                                    @foreach($tagListOne as $tag)
                                        <a href="{{$tag->link_url}}">{{$tag->tag_name}}</a>
                                    @endforeach
                                </div>
                            </div>
                            <div class="social-network-actions-outside text-right">
                                <div class="fb-send" data-href="{{route('blog.detail',['id' => $blog->id, 'slug' => $blog->slug])}}"></div>
                                <div class="fb-like fb_iframe_widget" data-href="{{route('blog.detail',['id' => $blog->id, 'slug' => $blog->slug])}}" data-layout="button" data-action="like" data-size="small" data-show-faces="true" data-share="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=&amp;container_width=878&amp;href=https%3A%2F%2Fsuplo-car-accesories.myharavan.com%2Fblogs%2Fnews%2Fbmw-i8-ham-ho-cua-xuong-do-ac-schnitzer&amp;layout=button&amp;locale=vi_VN&amp;sdk=joey&amp;share=true&amp;show_faces=true&amp;size=small"><span style="vertical-align: bottom; width: 112px; height: 20px;"><iframe name="fafa557dd5207" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/v2.11/plugins/like.php?action=like&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2F__Bz3h5RzMx.js%3Fversion%3D42%23cb%3Df1bbe78af8f256c%26domain%3Dsuplo-car-accesories.myharavan.com%26origin%3Dhttps%253A%252F%252Fsuplo-car-accesories.myharavan.com%252Ff10e79027873e7%26relation%3Dparent.parent&amp;container_width=878&amp;href=https%3A%2F%2Fsuplo-car-accesories.myharavan.com%2Fblogs%2Fnews%2Fbmw-i8-ham-ho-cua-xuong-do-ac-schnitzer&amp;layout=button&amp;locale=vi_VN&amp;sdk=joey&amp;share=true&amp;show_faces=true&amp;size=small" style="border: none; visibility: visible; width: 112px; height: 20px;" class=""></iframe></span></div>
                            </div>
                            <div id="section-fbcomment" class="fb-comments-wrapper">
                                <div class="fb-comments fb_iframe_widget fb_iframe_widget_fluid_desktop" data-href="{{route('blog.detail',['id' => $blog->id, 'slug' => $blog->slug])}}" data-width="100%" data-numposts="5" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;container_width=893&amp;height=100&amp;href=https%3A%2F%2Fsuplo-car-accesories.myharavan.com%2Fblogs%2Fnews%2Fbmw-i8-ham-ho-cua-xuong-do-ac-schnitzer&amp;locale=vi_VN&amp;numposts=5&amp;sdk=joey&amp;version=v2.11" style="width: 100%;">
                                    <span style="vertical-align: bottom; width: 100%; height: 178px;">
                                        <iframe name="fc88dfe73bf6f4" width="1000px" height="100px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:comments Facebook Social Plugin" src="https://www.facebook.com/v2.11/plugins/comments.php?app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2F__Bz3h5RzMx.js%3Fversion%3D42%23cb%3Df24ee2e1406414%26domain%3Dsuplo-car-accesories.myharavan.com%26origin%3Dhttps%253A%252F%252Fsuplo-car-accesories.myharavan.com%252Ff10e79027873e7%26relation%3Dparent.parent&amp;container_width=893&amp;height=100&amp;href=https%3A%2F%2Fsuplo-car-accesories.myharavan.com%2Fblogs%2Fnews%2Fbmw-i8-ham-ho-cua-xuong-do-ac-schnitzer&amp;locale=vi_VN&amp;numposts=5&amp;sdk=joey&amp;version=v2.11" style="border: none; visibility: visible; width: 100%; height: 178px;" class=""></iframe></span></div>
                            </div>
                        </article>

                        <div class="grid__item large--one-quarter medium--one-whole small--one-whole">
                            <div class="blog-sb-wrapper">

                                <div class="blog-sidebar">
                                    <h3>Bài viết gần đây</h3>
                                    <div class="panel">
                                        <ul class="recent-blogs no-bullets">
                                            <div class="grid md-mg-left-5">
                                                @foreach($blogNews as $blogItem)
                                                    <li class="grid__item md-pd-left5 large--one-whole medium--one-half small--one-whole">
                                                        <div class="grid mg-left-15">
                                                            <div class="grid__item large--five-twelfths medium--six-twelfths small--six-twelfths pd-left15">
                                                                <div class="bs-recent-article-img">
                                                                    <a href="{{route('blog.detail',['slug' => $blogItem->slug, 'id' => $blogItem->id])}}">
                                                                        <img src="{{\App\Common\ImageCommon::showImage($blogItem->blog_image)}}" alt="{{$blogItem->blog_title}}">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="grid__item large--seven-twelfths medium--six-twelfths small--six-twelfths pd-left15">
                                                                <div class="bs-recent-article-title">
                                                                    <a href="{{route('blog.detail',['slug' => $blogItem->slug, 'id' => $blogItem->id])}}">{{$blogItem->dot_blog_title}}</a>
                                                                </div>
                                                                <div class="bs-recent-article-date">
                                                                    <svg class="svg-inline--fa fa-calendar fa-w-14" aria-hidden="true" data-prefix="fa" data-icon="calendar" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M12 192h424c6.6 0 12 5.4 12 12v260c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V204c0-6.6 5.4-12 12-12zm436-44v-36c0-26.5-21.5-48-48-48h-48V12c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v52H160V12c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v52H48C21.5 64 0 85.5 0 112v36c0 6.6 5.4 12 12 12h424c6.6 0 12-5.4 12-12z"></path></svg>
                                                                    {{$blogItem->str_post_date}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </div>

                                        </ul>
                                    </div>
                                </div>

                                <div class="blog-sidebar bs-all-tags">
                                    <h3>Từ khóa</h3>
                                    <div class="panel">

                                        <ul class="no-bullets clearfix">
                                            @foreach($tagListOne as $tag)
                                                <li>
                                                    <a href="{{$tag->link_url}}">{{$tag->tag_name}}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                {{--Plugin Facebook--}}
                                @include('both.common.__plugin_fan_facebook')

                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <script type=”text/javascript” src=”http://apis.google.com/js/plusone.js”> {lang: ‘vi’} </script>
            <g:plusone></g:plusone>
        </section>

    </main>
@endsection
