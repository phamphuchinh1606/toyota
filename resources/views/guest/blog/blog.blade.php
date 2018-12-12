@extends('guest.layouts.master')

@section('head.css')
    <link href="{{asset('css/guest/blog.css')}}" rel="stylesheet" type="text/css" media="all">
@endsection

@section('body.content')
    <main class="main-content" role="main">
        <section id="blog-wrapper" class="in-blog">
            <div class="wrapper">
                <div class="inner">
                    <h1 class="hide">
                        Tin tức chung
                    </h1>
                    <div class="grid">
                        <div class="grid__item large--three-quarters medium--one-whole small--one-whole ">
                            <div class="blog-content">
                                <!--- Loop all blogs --->
                                <div class="blog-single-item">
                                    <div class="section-title clearfix box_tabs no-blur">
                                        <ul class="tabs" id="tabNewsHome" style="width: 100%;">
                                            <li class="tab" data-id="2">
                                                <a href="{{route('blog',['type' => \App\Common\Constant::$BLOG_TYPE_GENERAL_ID])}}" class="@if( !\Request::get('type') || \Request::get('type') == '1') active @endif">Tin tức chung</a>
                                            </li>
                                            <li class="tab" data-id="1">
                                                <a href="{{route('blog',['type' => \App\Common\Constant::$BLOG_TYPE_PROMOTION_ID])}}" class="@if(\Request::get('type') == '2') active @endif">Khuyến mãi</a>
                                            </li>
                                            <li class="tab" data-id="3">
                                                <a href="{{route('blog',['type' => \App\Common\Constant::$BLOG_TYPE_EVENT_ID])}}" class="@if(\Request::get('type') == '3') active @endif">Sự kiện</a>
                                            </li>
                                            <div class="indicator" style="right: 582px; left: 0px;"></div><div class="indicator" style="right: 582px; left: 0px;"></div></ul>
                                    </div>
                                    <div class="blog-single-slider">
                                        <div class="grid-uniform md-mg-left-15">
                                            @foreach($blogs as $blog)
                                                <div class="grid__item large--two-quarters medium--one-third small--one-half md-pd-left15">
                                                    @include('guest.blog.partials.__show_blog_item',['blog' => $blog])
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <!--- End loop all blogs --->
                                @if($blogs->total() > 8)
                                    <div class="">
                                        {{$blogs->links('both.common.view_pageging')}}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="grid__item large--one-quarter medium--one-whole small--one-whole">
                            <div class="blog-sb-wrapper">
                                <div class="blog-sidebar bs-categories">
                                    <h3>Danh mục tin tức</h3>
                                    <div class="panel">
                                        <ul class="blog-types no-bullets">
                                            <li class="@if( !\Request::get('type') || \Request::get('type') == '1') active @endif">
                                                <a href="{{route('blog',['type' => \App\Common\Constant::$BLOG_TYPE_GENERAL_ID])}}">Tin tức chung</a>
                                            </li>
                                            <li class="@if(\Request::get('type') == '2') active @endif">
                                                <a href="{{route('blog',['type' => \App\Common\Constant::$BLOG_TYPE_PROMOTION_ID])}}">Khuyến mãi</a>
                                            </li>
                                            <li class="@if(\Request::get('type') == '3') active @endif">
                                                <a href="{{route('blog',['type' => \App\Common\Constant::$BLOG_TYPE_EVENT_ID])}}">Sự kiện</a>
                                            </li>
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
        </section>
    </main>
@endsection
