<?php use App\Common\ImageCommon; ?>
<div class="item">
    <div class="product-item">
        <div class="product-img">
            <a href="{{route('product_detail',['slug' => $productItem->slug, 'id' => $productItem->id])}}">
                <img id="{{$productItem->id}}" class="lazyload"
                     src="{{ImageCommon::showImage($productItem->product_image)}}"
                     data-src="{{ImageCommon::showImage($productItem->product_image)}}"
                     alt="{{$productItem->product_title}}">

                <img id="{{$productItem->id}}" class="lazyload"
                     src="{{ImageCommon::showImage($productItem->product_image)}}"
                     data-src="{{ImageCommon::showImage($productItem->product_image)}}"
                     alt="{{$productItem->product_title}}">

            </a>
            <div class="product-actions medium--hide small--hide">
                <div>
                    <button type="button"
                            class="btnQuickView quick-view medium--hide small--hide"
                            data-handle="/products/suplo-gas-gasoline-petrol-fuel-filter-oe-23300-31100-186100-4730-replacement-parts-for-toyota-prado-4700-2700-3400-land-cruiser-2">
                                                                <span><svg
                                                                        class="svg-inline--fa fa-search-plus fa-w-16"
                                                                        aria-hidden="true" data-prefix="fa"
                                                                        data-icon="search-plus" role="img"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 512 512" data-fa-i2svg=""><path
                                                                            fill="currentColor"
                                                                            d="M304 192v32c0 6.6-5.4 12-12 12h-56v56c0 6.6-5.4 12-12 12h-32c-6.6 0-12-5.4-12-12v-56h-56c-6.6 0-12-5.4-12-12v-32c0-6.6 5.4-12 12-12h56v-56c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v56h56c6.6 0 12 5.4 12 12zm201 284.7L476.7 505c-9.4 9.4-24.6 9.4-33.9 0L343 405.3c-4.5-4.5-7-10.6-7-17V372c-35.3 27.6-79.7 44-128 44C93.1 416 0 322.9 0 208S93.1 0 208 0s208 93.1 208 208c0 48.3-16.4 92.7-44 128h16.3c6.4 0 12.5 2.5 17 7l99.7 99.7c9.3 9.4 9.3 24.6 0 34zM344 208c0-75.2-60.8-136-136-136S72 132.8 72 208s60.8 136 136 136 136-60.8 136-136z"></path></svg>
                                                                    <!-- <i class="fa fa-search-plus" aria-hidden="true"></i> --></span>
                    </button>
                </div>
            </div>

            {{--<div class="tag-saleoff-img text-center">--}}
                {{---28%--}}
            {{--</div>--}}

        </div>
        <div class="product-item-info">
            <div class="product-title">
                <a href="{{route('product_detail',['slug' => $productItem->slug, 'id' => $productItem->id])}}">
                    {{$productItem->product_name}}
                </a>
            </div>
            <div class="product-desc">
                {{$productItem->product_title}}
            </div>
            <div class="product-price clearfix text-center">
                <span class="current-price">Giá : {{\App\Common\AppCommon::formatMoney($productItem->product_price)}} VNĐ</span>
                {{--<span class="original-price"><s>41,500,000</s></span>--}}
            </div>
            <div class="product-description clearfix">
                <span style="display: flex;">•5 chỗ ngồi</span>
                <span style="display: flex;">•Hộp số tự động vô cấp</span>
                <span style="display: flex;">•Động cơ xăng - 1496 cc</span>
            </div>
        </div>
        {{--<div class="product-buynow">--}}
            {{--<button type="button"--}}
                    {{--class="btnAddToCart add-to-cart  medium--hide small--hide"--}}
                    {{--data-id="1031637974"><span><svg--}}
                        {{--class="svg-inline--fa fa-cart-plus fa-w-18"--}}
                        {{--aria-hidden="true" data-prefix="fa"--}}
                        {{--data-icon="cart-plus" role="img"--}}
                        {{--xmlns="http://www.w3.org/2000/svg"--}}
                        {{--viewBox="0 0 576 512" data-fa-i2svg=""><path--}}
                            {{--fill="currentColor"--}}
                            {{--d="M504.717 320H211.572l6.545 32h268.418c15.401 0 26.816 14.301 23.403 29.319l-5.517 24.276C523.112 414.668 536 433.828 536 456c0 31.202-25.519 56.444-56.824 55.994-29.823-.429-54.35-24.631-55.155-54.447-.44-16.287 6.085-31.049 16.803-41.548H231.176C241.553 426.165 248 440.326 248 456c0 31.813-26.528 57.431-58.67 55.938-28.54-1.325-51.751-24.385-53.251-52.917-1.158-22.034 10.436-41.455 28.051-51.586L93.883 64H24C10.745 64 0 53.255 0 40V24C0 10.745 10.745 0 24 0h102.529c11.401 0 21.228 8.021 23.513 19.19L159.208 64H551.99c15.401 0 26.816 14.301 23.403 29.319l-47.273 208C525.637 312.246 515.923 320 504.717 320zM408 168h-48v-40c0-8.837-7.163-16-16-16h-16c-8.837 0-16 7.163-16 16v40h-48c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h48v40c0 8.837 7.163 16 16 16h16c8.837 0 16-7.163 16-16v-40h48c8.837 0 16-7.163 16-16v-16c0-8.837-7.163-16-16-16z"></path></svg>--}}
                    {{--<!-- <i class="fa fa-cart-plus" aria-hidden="true"></i> --> Thêm vào giỏ</span>--}}
            {{--</button>--}}
        {{--</div>--}}
    </div>

</div>
