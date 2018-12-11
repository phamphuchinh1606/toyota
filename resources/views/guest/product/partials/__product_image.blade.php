<?php use App\Common\ImageCommon; ?>
<style>
    li.item{
        border: 2px solid #ebebeb;
        overflow: hidden;
    }
    .active-image {
        background-color: #c8102e !important;
        color: #fff !important;
    }
    .fancybox-content{
        top: 100px;
    }
    .fancybox-caption h6{
        font-weight: bold;
        font-size: 18px;
    }
    figcaption {
        display: none;
    }
    .fancybox-caption{
        padding: 5px;
        bottom: 35px;
    }
    .open_popup_pc .inner .txt1{
        max-height: 35px;
        text-transform: inherit;
    }
    @media (max-width: 767.98px) {
        .isPhone .box_tabs .tabs.title-product-image{
            display: none !important;
        }
        .title-product-image {
            display: none !important;
        }
        .products{
            padding: 0;
        }
        .fancybox-caption{
            padding: 5px;
            /*padding-top: 60px;*/
            bottom: 120px;
        }
        .fancybox-content{
            margin-top: -160px;
        }
    }
</style>
<div id="sec_dt_06" class="scrollspy hide-mb" style="">
    <div class="inner_scrollspy">
        <div itemscope="" itemtype="http://schema.org/Product">
            <section id="related-products">
                <div class="home-section-head clearfix">
                    <h2>
                        <span>Thư viện ảnh</span>
                    </h2>
                </div>
                <div class="box_tabs">
                    <div class="inner">
                        <div class="products">
                            <ul class="owl-carousel slide-product-image owl-loaded owl-drag" id="ulProductImage">
                                @foreach($product->furniture_images as $image)
                                    <div class="item">
                                        <figure>
                                            <a data-fancybox="images" class="d-block mb-4" data-fancybox="images" href="{{ImageCommon::showImage($image->image_src)}}">
                                                <img class="img-fluid"
                                                     alt="{{$appInfo->app_name}}"
                                                     src="{{ImageCommon::showImage($image->image_src)}}">
                                            </a>
                                            <figcaption>
                                                <h6>{{$image->image_title}}</h6>
                                                {{$image->image_content}}
                                            </figcaption>
                                        </figure>
                                    </div>
                                @endforeach
                                @foreach($product->images as $image)
                                    <div class="item">
                                        <figure>
                                            <a data-fancybox="images" class="d-block mb-4" data-fancybox="images" href="{{ImageCommon::showImage($image->image_src)}}">
                                                <img class="img-fluid"
                                                     alt="{{$appInfo->app_name}}"
                                                     src="{{ImageCommon::showImage($image->image_src)}}">
                                            </a>
                                            <figcaption>
                                                <h6>{{$image->image_title}}</h6>
                                                {{$image->image_content}}
                                            </figcaption>
                                        </figure>
                                    </div>
                                @endforeach
                                @foreach($product->exterlor_images as $image)
                                    <div class="item">
                                        <figure>
                                            <a data-fancybox="images" class="d-block mb-4" data-fancybox="images" href="{{ImageCommon::showImage($image->image_src)}}">
                                                <img class="img-fluid"
                                                     alt="{{$appInfo->app_name}}"
                                                     src="{{ImageCommon::showImage($image->image_src)}}">
                                            </a>
                                            <figcaption>
                                                <h6>{{$image->image_title}}</h6>
                                                {{$image->image_content}}
                                            </figcaption>
                                        </figure>
                                    </div>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $("#ulProductImage").owlCarousel({
            smartSpeed: 1000,
            nav: false,
            dots: false,
            loop: false,
            autoplay: false,
            autoplayHoverPause: true,
            responsiveRefreshRate: 200,
            margin: 5,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 2
                },
                768: {
                    items: 3,
                    margin: 5,
                },
                1000: {
                    items: 4,
                    margin: 10,
                }
            }
        });
    });
</script>



