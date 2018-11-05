@extends('guest.layouts.master')

@section('body.js')
    <script src="{{asset('js/guest/home.js')}}" type='text/javascript'></script>
@endsection

@section('body.content')
    {{--Slider--}}
    @include('guest.home.partials.__main_slider')

    {{--Product--}}
    @include('guest.home.partials.__product')

    {{--Promotion product--}}
    @include('guest.home.partials.__promotion_product')

    {{--Blog New--}}
    @include('guest.home.partials.__blog_new')
@endsection

