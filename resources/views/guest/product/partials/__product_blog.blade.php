<?php use App\Common\ImageCommon; use App\Common\AppCommon;?>
<style>
    li.item{
        border: 2px solid #ebebeb;
        overflow: hidden;
    }
</style>
@if(isset($product->blog) && isset($product->blog->id))
    <div id="sec_dt_06" class="scrollspy hide-mb" style="">
        <div class="inner_scrollspy">
            <div>
                <section id="related-products">
                    <div class="home-section-head clearfix">
                        <h2>
                            <span>Tin Khuyến Mãi</span>
                        </h2>
                    </div>
                    <div class="box_tabs">
                        <div class="inner">
                            <div class="products">
                                <ul class="owl-carousel slide-product-blog owl-loaded owl-drag" id="ulProductBlog">
                                    <div class="item">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="{{route('blog.detail',['slug' => $product->blog->slug, 'id' => $product->blog->id])}}">
                                                    <img id="{{$product->blog->id}}" class="lazyload"
                                                         src="{{ImageCommon::showImage($product->blog->blog_image)}}"
                                                         data-src="{{ImageCommon::showImage($product->blog->blog_image)}}"
                                                         alt="{{$product->blog->blog_title}}}">

                                                    <img id="{{$product->blog->id}}" class="lazyload"
                                                         src="{{ImageCommon::showImage($product->blog->blog_image)}}"
                                                         data-src="{{ImageCommon::showImage($product->blog->blog_image)}}"
                                                         alt="{{$product->blog->blog_title}}">
                                                </a>
                                            </div>
                                            <div class="product-item-info">
                                                <div class="product-title">
                                                    <a href="{{route('blog.detail',['slug' => $product->blog->slug, 'id' => $product->blog->id])}}">
                                                        {{AppCommon::showTextDot($product->blog->blog_title,80)}}
                                                    </a>
                                                </div>
                                                <div class="product-desc">
                                                    {{AppCommon::showTextDot($product->blog->blog_title,126)}}
                                                </div>
                                            </div>
                                            <div class="product-buynow">
                                                <button type="button" class="btnAddToCart add-to-cart  medium--hide small--hide"
                                                        onclick="window.location='{{route('blog.detail',['slug' => $product->blog->slug, 'id' => $product->blog->id])}}'">
                                                    <span>Xem thêm</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
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
            $("#ulProductBlog").owlCarousel({
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
@endif

