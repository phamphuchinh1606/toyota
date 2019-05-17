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
        <div>
            <section id="related-products">
                <div class="home-section-head clearfix">
                    <h2>
                        <span>THƯ VIỆN ẢNH XE OTO TOYOTA</span>
                    </h2>
                </div>
                <div class="box_tabs">
                    <ul class="tabs_vanhanh unrequire_tabs tabs" style="width: 100%;">
                        <li class="tab selectTabImage">
                            <button id="defaultOpenImageTabs" class="image-tablinks active"
                                    onclick="openImageTabs(event, 'tab_image_03')">Thư Viện Ảnh
                            </button>
                        </li>
                        <li class="tab selectTabImage">
                            <button id="image2" class="image-tablinks"
                                    onclick="openImageTabs(event, 'tab_image_01')">Ngoại Thất
                            </button>
                        </li>
                        <li class="tab selectTabImage">
                            <button id="image3" class="image-tablinks"
                                    onclick="openImageTabs(event, 'tab_image_02')">Nội Thất
                            </button>
                        </li>
                        <div class="indicator" style="right: 0px; left: 585px;"></div>
                    </ul>
                    <div id="tab_image_03" class="image-content-tab" style="display: none;">
                        <div class="inner">
                            <div class="products">
                                <ul class="owl-carousel slide-product-image owl-loaded owl-drag" id="ulProductImage">
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
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="tab_image_01" class="image-content-tab" style="display: none;">
                        <div class="inner">
                            <div class="products">
                                <ul class="owl-carousel slide-product-image owl-loaded owl-drag" id="ulProductFurnitureImage">
                                    @foreach($product->furniture_images as $image)
                                        <div class="item">
                                            <figure>
                                                <a data-fancybox="images1" class="d-block mb-4" data-fancybox="images1" href="{{ImageCommon::showImage($image->image_src)}}">
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
                    <div id="tab_image_02" class="image-content-tab" style="display: none;">
                        <div class="inner">
                            <div class="products">
                                <ul class="owl-carousel slide-product-image owl-loaded owl-drag" id="ulProductExterlorImage">
                                    @foreach($product->exterlor_images as $image)
                                        <div class="item">
                                            <figure>
                                                <a data-fancybox="images2" class="d-block mb-4" data-fancybox="images2" href="{{ImageCommon::showImage($image->image_src)}}">
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
        document.getElementById("defaultOpenImageTabs").click();
    });
    function openImageTabs(evt, cityName) {
        var i, pro_tabcontent, pro_tablinks;
        pro_tabcontent = document.getElementsByClassName("image-content-tab");
        for (i = 0; i < pro_tabcontent.length; i++) {
            pro_tabcontent[i].style.display = "none";
        }
        pro_tablinks = document.getElementsByClassName("image-tablinks");
        for (i = 0; i < pro_tablinks.length; i++) {
            pro_tablinks[i].className = pro_tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
        return false;
    }
</script>



