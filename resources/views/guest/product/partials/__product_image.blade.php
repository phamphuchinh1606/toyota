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
    }
</style>
<div id="sec_dt_06" class="scrollspy hide-mb" style="">
    <div class="inner_scrollspy">
        <div itemscope="" itemtype="http://schema.org/Product">
            <section id="related-products">
                <div class="home-section-head clearfix">
                    <h2>
                        <span>Hình ảnh sản phẩm</span>
                    </h2>
                </div>
                <div class="box_tabs">
                    <ul class="tabs title-product-image" style="width: 100%;">
                        <li class="tab">
                            <button class="active-image">
                                Thư viện ảnh
                            </button>
                        </li>
                        <div class="indicator" style="right: 0px; left: 585px;"></div>
                    </ul>
                    <div class="inner">
                        <div class="products">
                            <ul class="owl-carousel slide-product-image owl-loaded owl-drag" id="ulProductImage">
                                @foreach($product->images as $image)
                                    <div class="item">
                                        <a class="open_popup_pc" data-index="0" data-href="#popup_pc_inter">
                                            <img class="owl-lazy" data-src="{{ImageCommon::showImage($image->image_src)}}" alt="Yaris G CVT Đầu DVD" src="{{ImageCommon::showImage($image->image_src)}}" style="opacity: 1;">
                                        </a>
                                    </div>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="box_tabs">
                    <ul class="tabs title-product-image" style="width: 100%;">
                        <li class="tab">
                            <button class="active-image">
                                Ngoại Thất
                            </button>
                        </li>
                        <div class="indicator" style="right: 0px; left: 585px;"></div>
                    </ul>
                    <div class="inner">
                        <div class="products">
                            <ul class="owl-carousel slide-product-image owl-loaded owl-drag" id="ulProductFurnitureImage">
                                @foreach($product->furniture_images as $image)
                                    <div class="item">
                                        <a class="open_popup_pc" data-index="0" data-href="#popup_pc_inter">
                                            <img class="owl-lazy" data-src="{{ImageCommon::showImage($image->image_src)}}" alt="Yaris G CVT Đầu DVD" src="{{ImageCommon::showImage($image->image_src)}}" style="opacity: 1;">
                                        </a>
                                    </div>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="box_tabs">
                    <ul class="tabs title-product-image" style="width: 100%;">
                        <li class="tab">
                            <button class="active-image">
                                Nội Thất
                            </button>
                        </li>
                        <div class="indicator" style="right: 0px; left: 585px;"></div>
                    </ul>
                    <div class="inner">
                        <div class="products">
                            <ul class="owl-carousel slide-product-image owl-loaded owl-drag" id="ulProductExterlorImage">
                                @foreach($product->exterlor_images as $image)
                                    <div class="item">
                                        <a class="open_popup_pc" data-index="0" data-href="#popup_pc_inter">
                                            <img class="owl-lazy" data-src="{{ImageCommon::showImage($image->image_src)}}" alt="Yaris G CVT Đầu DVD" src="{{ImageCommon::showImage($image->image_src)}}" style="opacity: 1;">
                                        </a>
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

        $("#ulProductFurnitureImage").owlCarousel({
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

        $("#ulProductExterlorImage").owlCarousel({
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

