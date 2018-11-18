<?php use App\Common\{ImageCommon,AppCommon}; ?>
<section id="home-flash-sale">
    <div class="wrapper">
        <div class="inner">
            <div class="home-section-head">
                <h2 class="section-title">
                    <span>Khuyến mãi</span>
                </h2>
            </div>
            <div class="home-section-body">
                <div class="section-desc">
                    Tất cả các sản phẩm khuyến mãi của cửa hàng chúng tôi
                </div>

                <div class="hfs-product-wrapper">

                    <div id="owl-home-flash-sale" class="owl-carousel owl-theme owl-loaded owl-drag">
                        @foreach($blogPromotionNews as $blogPromotion)
                            <div class="item">
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="{{route('blog.detail',['slug' => $blogPromotion->slug, 'id' => $blogPromotion->id])}}">
                                            <img id="{{$blogPromotion->id}}" class="lazyload"
                                                 src="{{ImageCommon::showImage($blogPromotion->blog_image)}}"
                                                 data-src="{{ImageCommon::showImage($blogPromotion->blog_image)}}"
                                                 alt="{{$blogPromotion->blog_title}}}">

                                            <img id="{{$blogPromotion->id}}" class="lazyload"
                                                 src="{{ImageCommon::showImage($blogPromotion->blog_image)}}"
                                                 data-src="{{ImageCommon::showImage($blogPromotion->blog_image)}}"
                                                 alt="{{$blogPromotion->blog_title}}">
                                        </a>
                                        {{--<div class="product-actions medium--hide small--hide">--}}
                                            {{--<div>--}}
                                                {{--<button type="button"--}}
                                                        {{--class="btnQuickView quick-view medium--hide small--hide"--}}
                                                        {{--data-handle="{{route('blog.detail',['slug' => $blogPromotion->slug, 'id' => $blogPromotion->id])}}">--}}
                                                            {{--<span><svg class="svg-inline--fa fa-search-plus fa-w-16"--}}
                                                                       {{--aria-hidden="true" data-prefix="fa"--}}
                                                                       {{--data-icon="search-plus" role="img"--}}
                                                                       {{--xmlns="http://www.w3.org/2000/svg"--}}
                                                                       {{--viewBox="0 0 512 512" data-fa-i2svg=""><path--}}
                                                                        {{--fill="currentColor"--}}
                                                                        {{--d="M304 192v32c0 6.6-5.4 12-12 12h-56v56c0 6.6-5.4 12-12 12h-32c-6.6 0-12-5.4-12-12v-56h-56c-6.6 0-12-5.4-12-12v-32c0-6.6 5.4-12 12-12h56v-56c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v56h56c6.6 0 12 5.4 12 12zm201 284.7L476.7 505c-9.4 9.4-24.6 9.4-33.9 0L343 405.3c-4.5-4.5-7-10.6-7-17V372c-35.3 27.6-79.7 44-128 44C93.1 416 0 322.9 0 208S93.1 0 208 0s208 93.1 208 208c0 48.3-16.4 92.7-44 128h16.3c6.4 0 12.5 2.5 17 7l99.7 99.7c9.3 9.4 9.3 24.6 0 34zM344 208c0-75.2-60.8-136-136-136S72 132.8 72 208s60.8 136 136 136 136-60.8 136-136z"></path></svg>--}}
                                                                {{--<!-- <i class="fa fa-search-plus" aria-hidden="true"></i> --></span>--}}
                                                {{--</button>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}

                                    </div>
                                    <div class="product-item-info">
                                        <div class="product-title">
                                            <a href="{{route('blog.detail',['slug' => $blogPromotion->slug, 'id' => $blogPromotion->id])}}">
                                                {{AppCommon::showTextDot($blogPromotion->blog_title,80)}}
                                            </a>
                                        </div>
                                        <div class="product-desc">
                                            {{AppCommon::showTextDot($blogPromotion->blog_title,126)}}
                                        </div>
                                    </div>
                                    <div class="product-buynow">
                                        <button type="button" class="btnAddToCart add-to-cart  medium--hide small--hide"
                                                onclick="window.location='{{route('blog.detail',['slug' => $blogPromotion->slug, 'id' => $blogPromotion->id])}}'">
                                            <span>Xem thêm</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
