@extends('guest.layouts.master')

@section('head.css')
    <link rel="stylesheet prefetch" href="{{asset('css/guest/plugin/product.css')}}">
    <link rel="stylesheet prefetch" href="{{asset('css/guest/toyota/main-content.css')}}">
    <link rel="stylesheet prefetch" href="{{asset('css/guest/toyota/css.css')}}">
    <link rel="stylesheet prefetch" href="{{asset('css/guest/toyota/main.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.css">
@endsection

@section('body.class_body',"body-other template-product")

@section('body.js')
    <script src="{{asset('js/guest/product_detail.js')}}" type='text/javascript'></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.js"></script>
    {{--<script src="https://fancyapps.com/fancybox/3/examples.js?v=1543590464"></script>--}}

@endsection

@section('body.content')
    <main class="main-content" role="main">
        <section id="product-wrapper">
            <div class="wrapper">
                <div class="inner">
                    {{--isPhone--}}
                    <div class="page_productdt">
                        <div id="sec_dt_01">
                            @include('guest.product.partials.__product_main_info')

                            @include('guest.product.partials.__product_image')

                            @include('guest.product.partials.__product_blog')

                            @include('guest.product.partials.__product_highlight_function')

                            @include('guest.product.partials.__product_specification')
                        </div>
                    </div>
                    @if(count($productSameTypes) > 0)
                        <div itemscope="" itemtype="http://schema.org/Product">
                            @include('guest.product.partials.__product_type_same')
                        </div>
                    @endif
                </div>
            </div>
        </section>
    </main>
@endsection
