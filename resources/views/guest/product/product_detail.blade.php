@extends('guest.layouts.master')

@section('head.description', $product->product_description)

@section('head.og.title',$product->product_name)
@section('head.og.description',$product->product_description)
@section('head.og.image',\App\Common\ImageCommon::showImage($product->product_image))
@section('head.og.url',route('product_detail',['id' => $product->id, 'slug' => $product->slug]))


@section('head.title')
    {{$product->product_name}} -
@endsection

@section('head.css')
    <link rel="stylesheet prefetch" href="{{asset('css/guest/plugin/product.css')}}">
    <link rel="stylesheet prefetch" href="{{asset('css/guest/toyota/main-content.css')}}">
    <link rel="stylesheet prefetch" href="{{asset('css/guest/toyota/css.css')}}">
    <link rel="stylesheet prefetch" href="{{asset('css/guest/toyota/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/guest/plugin/jquery.fancybox.min.css')}}">
@endsection

@section('body.class_body',"body-other template-product")

@section('body.js')
    <script src="{{asset('js/guest/product_detail.js')}}" type='text/javascript'></script>
    <script src="{{asset('js/guest/plugin/jquery.fancybox.min.js')}}"></script>
    <script>

        // Clone defaults
        var imgOpts = $.extend(true, {}, $.fancybox.defaults, {
            caption : function( instance, item ) {
                return $(this).next('figcaption').html();
            },
            loop : true
        });

        // Shortcut to apply options to image gallery
        function applyImgOpts() {
            $('[data-fancybox="images"],[data-fancybox="images1"],[data-fancybox="images2"]').fancybox(imgOpts);
        }

        $("#imgOpts select").change(function () {
            var opt = $(this).attr("id");
            var val = $(this).val();

            imgOpts[opt] = val === "" ? false : val;

            // Make "fade" transiton faster than others
            if (opt === 'transitionEffect') {
                imgOpts['transitionDuration'] = opt === 'fade' ? 330 : 550;
            }

            applyImgOpts();
        });

        $("#imgOpts input[type=radio][name=lang]").on("change", function () {
            imgOpts.lang = $(this).val();

            applyImgOpts();
        });

        $("#imgOpts .toggle").change(function () {
            if (this.id === 'thumbs') {
                imgOpts.thumbs.autoStart = this.checked ? true : false;
            } else {
                imgOpts[this.id] = this.checked ? true : false;
            }

            applyImgOpts();
        });

        $("#imgOpts .buttons").change(function () {
            var buttonArr = $('input:checkbox:checked.buttons').map(function () {
                return this.value;
            }).get();

            buttonArr.push('close');

            imgOpts.buttons = buttonArr;

            applyImgOpts();
        });

        applyImgOpts();

    </script>

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

                            @include('guest.product.partials.__product_promotion')

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
