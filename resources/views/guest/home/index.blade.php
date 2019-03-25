@extends('guest.layouts.master')

@section('head.og.image')@if(count($banners) > 0){{asset(\App\Common\Constant::$PATH_URL_UPLOAD_IMAGE.$banners[0]->src_image)}}@endif @endsection

@section('head.title',$appInfo->app_name)

@section('body.js')
    <script src="{{asset('js/guest/home.js')}}" type='text/javascript'></script>
@endsection

@section('body.content')
    <h1 class="hide">{{$appInfo->app_name}}</h1>
    {{--Slider--}}
    @include('guest.home.partials.__main_slider')

    {{--Product--}}
    @include('guest.home.partials.__product')

    {{--Promotion product--}}
    @include('guest.home.partials.__promotion_product')

    {{--Blog New--}}
    {{--@include('guest.home.partials.__blog_new')--}}
@endsection

