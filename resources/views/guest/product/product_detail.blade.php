@extends('guest.layouts.master')

@section('head.css')
    <link rel="stylesheet prefetch" href="{{asset('css/guest/plugin/product.css')}}">
    <link rel="stylesheet prefetch" href="{{asset('css/guest/toyota/main-content.css')}}">
    <link rel="stylesheet prefetch" href="{{asset('css/guest/toyota/css.css')}}">
    <link rel="stylesheet prefetch" href="{{asset('css/guest/toyota/main.css')}}">

@endsection

@section('body.class_body',"body-other template-product")

@section('body.js')
    <script src="{{asset('js/guest/product_detail.js')}}" type='text/javascript'></script>
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

                            @include('guest.product.partials.__product_highlight_function')

                            @include('guest.product.partials.__product_specification')
                        </div>
                    </div>

                    <div itemscope="" itemtype="http://schema.org/Product">
                        <section id="related-products">
                            <div class="home-section-head clearfix">
                                <h2>
                                    <span>Sản phẩm tương tự</span>
                                </h2>

                            </div>
                            <div class="home-section-body">
                                <div class="section-desc">
                                    Các sản phẩm mà bạn cũng có thể bạn muốn xem
                                </div>
                                <div id="owl-related-products-slider" class="owl-carousel owl-theme owl-loaded owl-drag">
                                        <div class="item">
                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="/collections/cac-san-pham-khac/products/suplo-gas-gasoline-petrol-fuel-filter-oe-23300-31100-186100-4730-replacement-parts-for-toyota-prado-4700-2700-3400-land-cruiser-2">


                                                        <img id="1090712683" class="lazyload"
                                                             src="//theme.hstatic.net/1000305059/1000394224/14/lazyload.jpg?v=3615"
                                                             data-src="//product.hstatic.net/1000305059/product/suplo-004a-02_1e327fc3290e43e9a6b5e36bdf11678a_large.jpg"
                                                             alt="SUPLO Gas Gasoline Petrol Fuel Filter OE 23300-31100, 186100-4730 Replacement Parts for Toyota Prado 4700/2700/3400 Land Cruiser">


                                                        <img id="1090712684" class="lazyload"
                                                             src="//theme.hstatic.net/1000305059/1000394224/14/lazyload.jpg?v=3615"
                                                             data-src="//product.hstatic.net/1000305059/product/suplo-006a-01_0f6f585791194a5b8e7a2577bdc1b466_large.jpg"
                                                             alt="SUPLO Gas Gasoline Petrol Fuel Filter OE 23300-31100, 186100-4730 Replacement Parts for Toyota Prado 4700/2700/3400 Land Cruiser">


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

                                                    <div class="tag-saleoff-img text-center">
                                                        -28%
                                                    </div>

                                                </div>
                                                <div class="product-item-info">
                                                    <div class="product-title">
                                                        <a href="/products/suplo-gas-gasoline-petrol-fuel-filter-oe-23300-31100-186100-4730-replacement-parts-for-toyota-prado-4700-2700-3400-land-cruiser-2">SUPLO
                                                            Gas Gasoline Petrol Fuel Filter OE 23300-31100,
                                                            186...</a>
                                                    </div>
                                                    <div class="product-desc">
                                                        Bọc vô lăng Sparco chính hãng SPC1111RS lấy cảm hứng thể
                                                        thao từ các dòng xe đua kết hợp với công nghệ sản xuất
                                                        tiên tiến. Các mẫu bọc vô lăng SPARCO đều có kích thước
                                                        đường kín...
                                                    </div>
                                                    <div class="product-price clearfix">
                                                        <span class="current-price">30,000,000₫</span>

                                                        <span class="original-price"><s>41,500,000₫</s></span>

                                                    </div>
                                                </div>
                                                <div class="product-buynow">
                                                    <button type="button"
                                                            class="btnAddToCart add-to-cart  medium--hide small--hide"
                                                            data-id="1031637974"><span><svg
                                                                class="svg-inline--fa fa-cart-plus fa-w-18"
                                                                aria-hidden="true" data-prefix="fa"
                                                                data-icon="cart-plus" role="img"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 576 512" data-fa-i2svg=""><path
                                                                    fill="currentColor"
                                                                    d="M504.717 320H211.572l6.545 32h268.418c15.401 0 26.816 14.301 23.403 29.319l-5.517 24.276C523.112 414.668 536 433.828 536 456c0 31.202-25.519 56.444-56.824 55.994-29.823-.429-54.35-24.631-55.155-54.447-.44-16.287 6.085-31.049 16.803-41.548H231.176C241.553 426.165 248 440.326 248 456c0 31.813-26.528 57.431-58.67 55.938-28.54-1.325-51.751-24.385-53.251-52.917-1.158-22.034 10.436-41.455 28.051-51.586L93.883 64H24C10.745 64 0 53.255 0 40V24C0 10.745 10.745 0 24 0h102.529c11.401 0 21.228 8.021 23.513 19.19L159.208 64H551.99c15.401 0 26.816 14.301 23.403 29.319l-47.273 208C525.637 312.246 515.923 320 504.717 320zM408 168h-48v-40c0-8.837-7.163-16-16-16h-16c-8.837 0-16 7.163-16 16v40h-48c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h48v40c0 8.837 7.163 16 16 16h16c8.837 0 16-7.163 16-16v-40h48c8.837 0 16-7.163 16-16v-16c0-8.837-7.163-16-16-16z"></path></svg>
                                                            <!-- <i class="fa fa-cart-plus" aria-hidden="true"></i> --> Thêm vào giỏ</span>
                                                    </button>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="item">


                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="/collections/cac-san-pham-khac/products/suplo-gas-gasoline-petrol-fuel-filter-oe-23300-31100-186100-4730-replacement-parts-for-toyota-prado-4700-2700-3400-land-cruiser-1">


                                                        <img id="1090710553" class="lazyload"
                                                             src="//theme.hstatic.net/1000305059/1000394224/14/lazyload.jpg?v=3615"
                                                             data-src="//product.hstatic.net/1000305059/product/suplo-002a-04_3c78db8101a649d98079d01e7522c8e2_large.jpg"
                                                             alt="SUPLO Gas Gasoline Petrol Fuel Filter OE 23300-31100, 186100-4730 Replacement Parts for Toyota Prado 4700/2700/3400 Land Cruiser">


                                                        <img id="1090710554" class="lazyload"
                                                             src="//theme.hstatic.net/1000305059/1000394224/14/lazyload.jpg?v=3615"
                                                             data-src="//product.hstatic.net/1000305059/product/suplo-006a-01_2b0ee81db92549da876c4774883ae536_large.jpg"
                                                             alt="SUPLO Gas Gasoline Petrol Fuel Filter OE 23300-31100, 186100-4730 Replacement Parts for Toyota Prado 4700/2700/3400 Land Cruiser">


                                                    </a>
                                                    <div class="product-actions medium--hide small--hide">
                                                        <div>
                                                            <button type="button"
                                                                    class="btnQuickView quick-view medium--hide small--hide"
                                                                    data-handle="/products/suplo-gas-gasoline-petrol-fuel-filter-oe-23300-31100-186100-4730-replacement-parts-for-toyota-prado-4700-2700-3400-land-cruiser-1">
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

                                                    <div class="tag-saleoff-img text-center">
                                                        -15%
                                                    </div>

                                                </div>
                                                <div class="product-item-info">
                                                    <div class="product-title">
                                                        <a href="/products/suplo-gas-gasoline-petrol-fuel-filter-oe-23300-31100-186100-4730-replacement-parts-for-toyota-prado-4700-2700-3400-land-cruiser-1">SUPLO
                                                            Gas Gasoline Petrol Fuel Filter OE 23300-31100,
                                                            186...</a>
                                                    </div>
                                                    <div class="product-desc">
                                                        Bọc vô lăng Sparco chính hãng SPC1111RS lấy cảm hứng thể
                                                        thao từ các dòng xe đua kết hợp với công nghệ sản xuất
                                                        tiên tiến. Các mẫu bọc vô lăng SPARCO đều có kích thước
                                                        đường kín...
                                                    </div>
                                                    <div class="product-price clearfix">
                                                        <span class="current-price">50,000,000₫</span>

                                                        <span class="original-price"><s>59,000,000₫</s></span>

                                                    </div>
                                                </div>
                                                <div class="product-buynow">
                                                    <button type="button"
                                                            class="btnAddToCart add-to-cart  medium--hide small--hide"
                                                            data-id="1031637468"><span><svg
                                                                class="svg-inline--fa fa-cart-plus fa-w-18"
                                                                aria-hidden="true" data-prefix="fa"
                                                                data-icon="cart-plus" role="img"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 576 512" data-fa-i2svg=""><path
                                                                    fill="currentColor"
                                                                    d="M504.717 320H211.572l6.545 32h268.418c15.401 0 26.816 14.301 23.403 29.319l-5.517 24.276C523.112 414.668 536 433.828 536 456c0 31.202-25.519 56.444-56.824 55.994-29.823-.429-54.35-24.631-55.155-54.447-.44-16.287 6.085-31.049 16.803-41.548H231.176C241.553 426.165 248 440.326 248 456c0 31.813-26.528 57.431-58.67 55.938-28.54-1.325-51.751-24.385-53.251-52.917-1.158-22.034 10.436-41.455 28.051-51.586L93.883 64H24C10.745 64 0 53.255 0 40V24C0 10.745 10.745 0 24 0h102.529c11.401 0 21.228 8.021 23.513 19.19L159.208 64H551.99c15.401 0 26.816 14.301 23.403 29.319l-47.273 208C525.637 312.246 515.923 320 504.717 320zM408 168h-48v-40c0-8.837-7.163-16-16-16h-16c-8.837 0-16 7.163-16 16v40h-48c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h48v40c0 8.837 7.163 16 16 16h16c8.837 0 16-7.163 16-16v-40h48c8.837 0 16-7.163 16-16v-16c0-8.837-7.163-16-16-16z"></path></svg>
                                                            <!-- <i class="fa fa-cart-plus" aria-hidden="true"></i> --> Thêm vào giỏ</span>
                                                    </button>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="item">


                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="/collections/cac-san-pham-khac/products/suplo-gas-gasoline-petrol-fuel-filter-oe-23300-31100-186100-4730-replacement-parts-for-toyota-prado-4700-2700-3400-land-cruiser">


                                                        <img id="1090047797" class="lazyload"
                                                             src="//theme.hstatic.net/1000305059/1000394224/14/lazyload.jpg?v=3615"
                                                             data-src="//product.hstatic.net/1000305059/product/suplo-001a-03_large.jpg"
                                                             alt="SUPLO Gas Gasoline Petrol Fuel Filter OE 23300-31100, 186100-4730 Replacement Parts for Toyota Prado 4700/2700/3400 Land Cruiser">


                                                        <img id="1090047815" class="lazyload"
                                                             src="//theme.hstatic.net/1000305059/1000394224/14/lazyload.jpg?v=3615"
                                                             data-src="//product.hstatic.net/1000305059/product/suplo-001a-04_large.jpg"
                                                             alt="SUPLO Gas Gasoline Petrol Fuel Filter OE 23300-31100, 186100-4730 Replacement Parts for Toyota Prado 4700/2700/3400 Land Cruiser">


                                                    </a>
                                                    <div class="product-actions medium--hide small--hide">
                                                        <div>
                                                            <button type="button"
                                                                    class="btnQuickView quick-view medium--hide small--hide"
                                                                    data-handle="/products/suplo-gas-gasoline-petrol-fuel-filter-oe-23300-31100-186100-4730-replacement-parts-for-toyota-prado-4700-2700-3400-land-cruiser">
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

                                                    <div class="tag-saleoff-img text-center">
                                                        -2%
                                                    </div>

                                                </div>
                                                <div class="product-item-info">
                                                    <div class="product-title">
                                                        <a href="/products/suplo-gas-gasoline-petrol-fuel-filter-oe-23300-31100-186100-4730-replacement-parts-for-toyota-prado-4700-2700-3400-land-cruiser">SUPLO
                                                            Gas Gasoline Petrol Fuel Filter OE 23300-31100,
                                                            186...</a>
                                                    </div>
                                                    <div class="product-desc">
                                                        Bọc vô lăng Sparco chính hãng SPC1111RS lấy cảm hứng thể
                                                        thao từ các dòng xe đua kết hợp với công nghệ sản xuất
                                                        tiên tiến. Các mẫu bọc vô lăng SPARCO đều có kích thước
                                                        đường kín...
                                                    </div>
                                                    <div class="product-price clearfix">
                                                        <span class="current-price">5,300,000₫</span>

                                                        <span class="original-price"><s>5,400,000₫</s></span>

                                                    </div>
                                                </div>
                                                <div class="product-buynow">
                                                    <button type="button"
                                                            class="btnAddToCart add-to-cart  medium--hide small--hide"
                                                            data-id="1031634559"><span><svg
                                                                class="svg-inline--fa fa-cart-plus fa-w-18"
                                                                aria-hidden="true" data-prefix="fa"
                                                                data-icon="cart-plus" role="img"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 576 512" data-fa-i2svg=""><path
                                                                    fill="currentColor"
                                                                    d="M504.717 320H211.572l6.545 32h268.418c15.401 0 26.816 14.301 23.403 29.319l-5.517 24.276C523.112 414.668 536 433.828 536 456c0 31.202-25.519 56.444-56.824 55.994-29.823-.429-54.35-24.631-55.155-54.447-.44-16.287 6.085-31.049 16.803-41.548H231.176C241.553 426.165 248 440.326 248 456c0 31.813-26.528 57.431-58.67 55.938-28.54-1.325-51.751-24.385-53.251-52.917-1.158-22.034 10.436-41.455 28.051-51.586L93.883 64H24C10.745 64 0 53.255 0 40V24C0 10.745 10.745 0 24 0h102.529c11.401 0 21.228 8.021 23.513 19.19L159.208 64H551.99c15.401 0 26.816 14.301 23.403 29.319l-47.273 208C525.637 312.246 515.923 320 504.717 320zM408 168h-48v-40c0-8.837-7.163-16-16-16h-16c-8.837 0-16 7.163-16 16v40h-48c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h48v40c0 8.837 7.163 16 16 16h16c8.837 0 16-7.163 16-16v-40h48c8.837 0 16-7.163 16-16v-16c0-8.837-7.163-16-16-16z"></path></svg>
                                                            <!-- <i class="fa fa-cart-plus" aria-hidden="true"></i> --> Thêm vào giỏ</span>
                                                    </button>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="item">


                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="/collections/cac-san-pham-khac/products/suplo-smart-gravity-holder-cute-mount-10w-fast-wireless-car-charger-bracket-car-accessories-9">


                                                        <img id="1090801495" class="lazyload"
                                                             src="//theme.hstatic.net/1000305059/1000394224/14/lazyload.jpg?v=3615"
                                                             data-src="//product.hstatic.net/1000305059/product/suplo-012a-01_b4073d98b6534c619a361549e0b2f118_large.jpg"
                                                             alt="SUPLO Smart Gravity Holder Cute Mount 10W Fast Wireless Car Charger Bracket Car Accessories">


                                                        <img id="1090801496" class="lazyload"
                                                             src="//theme.hstatic.net/1000305059/1000394224/14/lazyload.jpg?v=3615"
                                                             data-src="//product.hstatic.net/1000305059/product/suplo-007a-01_0f20da25349d4464bcb9e87104b92602_large.jpg"
                                                             alt="SUPLO Smart Gravity Holder Cute Mount 10W Fast Wireless Car Charger Bracket Car Accessories">


                                                    </a>
                                                    <div class="product-actions medium--hide small--hide">
                                                        <div>
                                                            <button type="button"
                                                                    class="btnQuickView quick-view medium--hide small--hide"
                                                                    data-handle="/products/suplo-smart-gravity-holder-cute-mount-10w-fast-wireless-car-charger-bracket-car-accessories-9">
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

                                                </div>
                                                <div class="product-item-info">
                                                    <div class="product-title">
                                                        <a href="/products/suplo-smart-gravity-holder-cute-mount-10w-fast-wireless-car-charger-bracket-car-accessories-9">SUPLO
                                                            Smart Gravity Holder Cute Mount 10W Fast Wireless
                                                            C...</a>
                                                    </div>
                                                    <div class="product-desc">
                                                        Bọc vô lăng Sparco chính hãng SPC1111RS lấy cảm hứng thể
                                                        thao từ các dòng xe đua kết hợp với công nghệ sản xuất
                                                        tiên tiến. Các mẫu bọc vô lăng SPARCO đều có kích thước
                                                        đường kín...
                                                    </div>
                                                    <div class="product-price clearfix">
                                                        <span class="current-price">150,000₫</span>

                                                    </div>
                                                </div>
                                                <div class="product-buynow">
                                                    <button type="button"
                                                            class="btnAddToCart add-to-cart  medium--hide small--hide"
                                                            data-id="1031664345"><span><svg
                                                                class="svg-inline--fa fa-cart-plus fa-w-18"
                                                                aria-hidden="true" data-prefix="fa"
                                                                data-icon="cart-plus" role="img"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 576 512" data-fa-i2svg=""><path
                                                                    fill="currentColor"
                                                                    d="M504.717 320H211.572l6.545 32h268.418c15.401 0 26.816 14.301 23.403 29.319l-5.517 24.276C523.112 414.668 536 433.828 536 456c0 31.202-25.519 56.444-56.824 55.994-29.823-.429-54.35-24.631-55.155-54.447-.44-16.287 6.085-31.049 16.803-41.548H231.176C241.553 426.165 248 440.326 248 456c0 31.813-26.528 57.431-58.67 55.938-28.54-1.325-51.751-24.385-53.251-52.917-1.158-22.034 10.436-41.455 28.051-51.586L93.883 64H24C10.745 64 0 53.255 0 40V24C0 10.745 10.745 0 24 0h102.529c11.401 0 21.228 8.021 23.513 19.19L159.208 64H551.99c15.401 0 26.816 14.301 23.403 29.319l-47.273 208C525.637 312.246 515.923 320 504.717 320zM408 168h-48v-40c0-8.837-7.163-16-16-16h-16c-8.837 0-16 7.163-16 16v40h-48c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h48v40c0 8.837 7.163 16 16 16h16c8.837 0 16-7.163 16-16v-40h48c8.837 0 16-7.163 16-16v-16c0-8.837-7.163-16-16-16z"></path></svg>
                                                            <!-- <i class="fa fa-cart-plus" aria-hidden="true"></i> --> Thêm vào giỏ</span>
                                                    </button>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="item">


                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="/collections/cac-san-pham-khac/products/suplo-smart-gravity-holder-cute-mount-10w-fast-wireless-car-charger-bracket-car-accessories-8">


                                                        <img id="1090800284" class="lazyload"
                                                             src="//theme.hstatic.net/1000305059/1000394224/14/lazyload.jpg?v=3615"
                                                             data-src="//product.hstatic.net/1000305059/product/suplo-011a-01_2985b98a85c64d96b1825f3943fa1b94_large.jpg"
                                                             alt="SUPLO Smart Gravity Holder Cute Mount 10W Fast Wireless Car Charger Bracket Car Accessories">


                                                        <img id="1090800285" class="lazyload"
                                                             src="//theme.hstatic.net/1000305059/1000394224/14/lazyload.jpg?v=3615"
                                                             data-src="//product.hstatic.net/1000305059/product/suplo-008a-01_55e427e3130944029c0b03adcb2aa347_large.jpg"
                                                             alt="SUPLO Smart Gravity Holder Cute Mount 10W Fast Wireless Car Charger Bracket Car Accessories">


                                                    </a>
                                                    <div class="product-actions medium--hide small--hide">
                                                        <div>
                                                            <button type="button"
                                                                    class="btnQuickView quick-view medium--hide small--hide"
                                                                    data-handle="/products/suplo-smart-gravity-holder-cute-mount-10w-fast-wireless-car-charger-bracket-car-accessories-8">
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

                                                </div>
                                                <div class="product-item-info">
                                                    <div class="product-title">
                                                        <a href="/products/suplo-smart-gravity-holder-cute-mount-10w-fast-wireless-car-charger-bracket-car-accessories-8">SUPLO
                                                            Smart Gravity Holder Cute Mount 10W Fast Wireless
                                                            C...</a>
                                                    </div>
                                                    <div class="product-desc">
                                                        Bọc vô lăng Sparco chính hãng SPC1111RS lấy cảm hứng thể
                                                        thao từ các dòng xe đua kết hợp với công nghệ sản xuất
                                                        tiên tiến. Các mẫu bọc vô lăng SPARCO đều có kích thước
                                                        đường kín...
                                                    </div>
                                                    <div class="product-price clearfix">
                                                        <span class="current-price">1,750,000₫</span>

                                                    </div>
                                                </div>
                                                <div class="product-buynow">
                                                    <button type="button"
                                                            class="btnAddToCart add-to-cart  medium--hide small--hide"
                                                            data-id="1031664184"><span><svg
                                                                class="svg-inline--fa fa-cart-plus fa-w-18"
                                                                aria-hidden="true" data-prefix="fa"
                                                                data-icon="cart-plus" role="img"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 576 512" data-fa-i2svg=""><path
                                                                    fill="currentColor"
                                                                    d="M504.717 320H211.572l6.545 32h268.418c15.401 0 26.816 14.301 23.403 29.319l-5.517 24.276C523.112 414.668 536 433.828 536 456c0 31.202-25.519 56.444-56.824 55.994-29.823-.429-54.35-24.631-55.155-54.447-.44-16.287 6.085-31.049 16.803-41.548H231.176C241.553 426.165 248 440.326 248 456c0 31.813-26.528 57.431-58.67 55.938-28.54-1.325-51.751-24.385-53.251-52.917-1.158-22.034 10.436-41.455 28.051-51.586L93.883 64H24C10.745 64 0 53.255 0 40V24C0 10.745 10.745 0 24 0h102.529c11.401 0 21.228 8.021 23.513 19.19L159.208 64H551.99c15.401 0 26.816 14.301 23.403 29.319l-47.273 208C525.637 312.246 515.923 320 504.717 320zM408 168h-48v-40c0-8.837-7.163-16-16-16h-16c-8.837 0-16 7.163-16 16v40h-48c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h48v40c0 8.837 7.163 16 16 16h16c8.837 0 16-7.163 16-16v-40h48c8.837 0 16-7.163 16-16v-16c0-8.837-7.163-16-16-16z"></path></svg>
                                                            <!-- <i class="fa fa-cart-plus" aria-hidden="true"></i> --> Thêm vào giỏ</span>
                                                    </button>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="item">


                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="/collections/cac-san-pham-khac/products/suplo-smart-gravity-holder-cute-mount-10w-fast-wireless-car-charger-bracket-car-accessories-7">

                                                        <img id="1016605819" class="only-one lazyload"
                                                             src="//theme.hstatic.net/1000305059/1000394224/14/lazyload.jpg?v=3615"
                                                             data-src="//product.hstatic.net/1000305059/product/suplo-010a-01_9c5acf2a9eea4973bc832b421847d665_large.jpg"
                                                             alt="SUPLO Smart Gravity Holder Cute Mount 10W Fast Wireless Car Charger Bracket Car Accessories">

                                                    </a>
                                                    <div class="product-actions medium--hide small--hide">
                                                        <div>
                                                            <button type="button"
                                                                    class="btnQuickView quick-view medium--hide small--hide"
                                                                    data-handle="/products/suplo-smart-gravity-holder-cute-mount-10w-fast-wireless-car-charger-bracket-car-accessories-7">
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

                                                </div>
                                                <div class="product-item-info">
                                                    <div class="product-title">
                                                        <a href="/products/suplo-smart-gravity-holder-cute-mount-10w-fast-wireless-car-charger-bracket-car-accessories-7">SUPLO
                                                            Smart Gravity Holder Cute Mount 10W Fast Wireless
                                                            C...</a>
                                                    </div>
                                                    <div class="product-desc">
                                                        Bọc vô lăng Sparco chính hãng SPC1111RS lấy cảm hứng thể
                                                        thao từ các dòng xe đua kết hợp với công nghệ sản xuất
                                                        tiên tiến. Các mẫu bọc vô lăng SPARCO đều có kích thước
                                                        đường kín...
                                                    </div>
                                                    <div class="product-price clearfix">
                                                        <span class="current-price">500,000₫</span>

                                                    </div>
                                                </div>
                                                <div class="product-buynow">
                                                    <button type="button" disabled=""
                                                            class="btnAddToCart  medium--hide small--hide"
                                                            data-id=""><span>Hết hàng</span></button>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="item">


                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="/collections/cac-san-pham-khac/products/suplo-smart-gravity-holder-cute-mount-10w-fast-wireless-car-charger-bracket-car-accessories-6">


                                                        <img id="1090799919" class="lazyload"
                                                             src="//theme.hstatic.net/1000305059/1000394224/14/lazyload.jpg?v=3615"
                                                             data-src="//product.hstatic.net/1000305059/product/suplo-009a-01_large.jpg"
                                                             alt="SUPLO Smart Gravity Holder Cute Mount 10W Fast Wireless Car Charger Bracket Car Accessories">


                                                        <img id="1090799920" class="lazyload"
                                                             src="//theme.hstatic.net/1000305059/1000394224/14/lazyload.jpg?v=3615"
                                                             data-src="//product.hstatic.net/1000305059/product/suplo-010a-01_large.jpg"
                                                             alt="SUPLO Smart Gravity Holder Cute Mount 10W Fast Wireless Car Charger Bracket Car Accessories">


                                                    </a>
                                                    <div class="product-actions medium--hide small--hide">
                                                        <div>
                                                            <button type="button"
                                                                    class="btnQuickView quick-view medium--hide small--hide"
                                                                    data-handle="/products/suplo-smart-gravity-holder-cute-mount-10w-fast-wireless-car-charger-bracket-car-accessories-6">
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

                                                    <div class="tag-saleoff-img text-center">
                                                        -19%
                                                    </div>

                                                </div>
                                                <div class="product-item-info">
                                                    <div class="product-title">
                                                        <a href="/products/suplo-smart-gravity-holder-cute-mount-10w-fast-wireless-car-charger-bracket-car-accessories-6">SUPLO
                                                            Smart Gravity Holder Cute Mount 10W Fast Wireless
                                                            C...</a>
                                                    </div>
                                                    <div class="product-desc">
                                                        Bọc vô lăng Sparco chính hãng SPC1111RS lấy cảm hứng thể
                                                        thao từ các dòng xe đua kết hợp với công nghệ sản xuất
                                                        tiên tiến. Các mẫu bọc vô lăng SPARCO đều có kích thước
                                                        đường kín...
                                                    </div>
                                                    <div class="product-price clearfix">
                                                        <span class="current-price">1,210,000₫</span>

                                                        <span class="original-price"><s>1,500,000₫</s></span>

                                                    </div>
                                                </div>
                                                <div class="product-buynow">
                                                    <button type="button"
                                                            class="btnAddToCart add-to-cart  medium--hide small--hide"
                                                            data-id="1031663692"><span><svg
                                                                class="svg-inline--fa fa-cart-plus fa-w-18"
                                                                aria-hidden="true" data-prefix="fa"
                                                                data-icon="cart-plus" role="img"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 576 512" data-fa-i2svg=""><path
                                                                    fill="currentColor"
                                                                    d="M504.717 320H211.572l6.545 32h268.418c15.401 0 26.816 14.301 23.403 29.319l-5.517 24.276C523.112 414.668 536 433.828 536 456c0 31.202-25.519 56.444-56.824 55.994-29.823-.429-54.35-24.631-55.155-54.447-.44-16.287 6.085-31.049 16.803-41.548H231.176C241.553 426.165 248 440.326 248 456c0 31.813-26.528 57.431-58.67 55.938-28.54-1.325-51.751-24.385-53.251-52.917-1.158-22.034 10.436-41.455 28.051-51.586L93.883 64H24C10.745 64 0 53.255 0 40V24C0 10.745 10.745 0 24 0h102.529c11.401 0 21.228 8.021 23.513 19.19L159.208 64H551.99c15.401 0 26.816 14.301 23.403 29.319l-47.273 208C525.637 312.246 515.923 320 504.717 320zM408 168h-48v-40c0-8.837-7.163-16-16-16h-16c-8.837 0-16 7.163-16 16v40h-48c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h48v40c0 8.837 7.163 16 16 16h16c8.837 0 16-7.163 16-16v-40h48c8.837 0 16-7.163 16-16v-16c0-8.837-7.163-16-16-16z"></path></svg>
                                                            <!-- <i class="fa fa-cart-plus" aria-hidden="true"></i> --> Thêm vào giỏ</span>
                                                    </button>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="item">


                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="/collections/cac-san-pham-khac/products/suplo-smart-gravity-holder-cute-mount-10w-fast-wireless-car-charger-bracket-car-accessories-5">


                                                        <img id="1090719996" class="lazyload"
                                                             src="//theme.hstatic.net/1000305059/1000394224/14/lazyload.jpg?v=3615"
                                                             data-src="//product.hstatic.net/1000305059/product/suplo-007a-01_0a2ce72402ab45bcb8bdd8d35730ca32_large.jpg"
                                                             alt="SUPLO Smart Gravity Holder Cute Mount 10W Fast Wireless Car Charger Bracket Car Accessories">


                                                        <img id="1090719997" class="lazyload"
                                                             src="//theme.hstatic.net/1000305059/1000394224/14/lazyload.jpg?v=3615"
                                                             data-src="//product.hstatic.net/1000305059/product/suplo-008a-01_0db9335e7eb54e86bca4916efccda559_large.jpg"
                                                             alt="SUPLO Smart Gravity Holder Cute Mount 10W Fast Wireless Car Charger Bracket Car Accessories">


                                                    </a>
                                                    <div class="product-actions medium--hide small--hide">
                                                        <div>
                                                            <button type="button"
                                                                    class="btnQuickView quick-view medium--hide small--hide"
                                                                    data-handle="/products/suplo-smart-gravity-holder-cute-mount-10w-fast-wireless-car-charger-bracket-car-accessories-5">
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

                                                    <div class="tag-saleoff-img text-center">
                                                        -2%
                                                    </div>

                                                </div>
                                                <div class="product-item-info">
                                                    <div class="product-title">
                                                        <a href="/products/suplo-smart-gravity-holder-cute-mount-10w-fast-wireless-car-charger-bracket-car-accessories-5">SUPLO
                                                            Smart Gravity Holder Cute Mount 10W Fast Wireless
                                                            C...</a>
                                                    </div>
                                                    <div class="product-desc">
                                                        Bọc vô lăng Sparco chính hãng SPC1111RS lấy cảm hứng thể
                                                        thao từ các dòng xe đua kết hợp với công nghệ sản xuất
                                                        tiên tiến. Các mẫu bọc vô lăng SPARCO đều có kích thước
                                                        đường kín...
                                                    </div>
                                                    <div class="product-price clearfix">
                                                        <span class="current-price">31,500,000₫</span>

                                                        <span class="original-price"><s>32,000,000₫</s></span>

                                                    </div>
                                                </div>
                                                <div class="product-buynow">
                                                    <button type="button"
                                                            class="btnAddToCart add-to-cart  medium--hide small--hide"
                                                            data-id="1031640086"><span><svg
                                                                class="svg-inline--fa fa-cart-plus fa-w-18"
                                                                aria-hidden="true" data-prefix="fa"
                                                                data-icon="cart-plus" role="img"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 576 512" data-fa-i2svg=""><path
                                                                    fill="currentColor"
                                                                    d="M504.717 320H211.572l6.545 32h268.418c15.401 0 26.816 14.301 23.403 29.319l-5.517 24.276C523.112 414.668 536 433.828 536 456c0 31.202-25.519 56.444-56.824 55.994-29.823-.429-54.35-24.631-55.155-54.447-.44-16.287 6.085-31.049 16.803-41.548H231.176C241.553 426.165 248 440.326 248 456c0 31.813-26.528 57.431-58.67 55.938-28.54-1.325-51.751-24.385-53.251-52.917-1.158-22.034 10.436-41.455 28.051-51.586L93.883 64H24C10.745 64 0 53.255 0 40V24C0 10.745 10.745 0 24 0h102.529c11.401 0 21.228 8.021 23.513 19.19L159.208 64H551.99c15.401 0 26.816 14.301 23.403 29.319l-47.273 208C525.637 312.246 515.923 320 504.717 320zM408 168h-48v-40c0-8.837-7.163-16-16-16h-16c-8.837 0-16 7.163-16 16v40h-48c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h48v40c0 8.837 7.163 16 16 16h16c8.837 0 16-7.163 16-16v-40h48c8.837 0 16-7.163 16-16v-16c0-8.837-7.163-16-16-16z"></path></svg>
                                                            <!-- <i class="fa fa-cart-plus" aria-hidden="true"></i> --> Thêm vào giỏ</span>
                                                    </button>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="item">


                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="/collections/cac-san-pham-khac/products/suplo-smart-gravity-holder-cute-mount-10w-fast-wireless-car-charger-bracket-car-accessories-4">


                                                        <img id="1090718647" class="lazyload"
                                                             src="//theme.hstatic.net/1000305059/1000394224/14/lazyload.jpg?v=3615"
                                                             data-src="//product.hstatic.net/1000305059/product/suplo-008a-01_large.jpg"
                                                             alt="SUPLO Smart Gravity Holder Cute Mount 10W Fast Wireless Car Charger Bracket Car Accessories">


                                                        <img id="1090718648" class="lazyload"
                                                             src="//theme.hstatic.net/1000305059/1000394224/14/lazyload.jpg?v=3615"
                                                             data-src="//product.hstatic.net/1000305059/product/suplo-007a-01_large.jpg"
                                                             alt="SUPLO Smart Gravity Holder Cute Mount 10W Fast Wireless Car Charger Bracket Car Accessories">


                                                    </a>
                                                    <div class="product-actions medium--hide small--hide">
                                                        <div>
                                                            <button type="button"
                                                                    class="btnQuickView quick-view medium--hide small--hide"
                                                                    data-handle="/products/suplo-smart-gravity-holder-cute-mount-10w-fast-wireless-car-charger-bracket-car-accessories-4">
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

                                                    <div class="tag-saleoff-img text-center">
                                                        -4%
                                                    </div>

                                                </div>
                                                <div class="product-item-info">
                                                    <div class="product-title">
                                                        <a href="/products/suplo-smart-gravity-holder-cute-mount-10w-fast-wireless-car-charger-bracket-car-accessories-4">SUPLO
                                                            Smart Gravity Holder Cute Mount 10W Fast Wireless
                                                            C...</a>
                                                    </div>
                                                    <div class="product-desc">
                                                        Bọc vô lăng Sparco chính hãng SPC1111RS lấy cảm hứng thể
                                                        thao từ các dòng xe đua kết hợp với công nghệ sản xuất
                                                        tiên tiến. Các mẫu bọc vô lăng SPARCO đều có kích thước
                                                        đường kín...
                                                    </div>
                                                    <div class="product-price clearfix">
                                                        <span class="current-price">51,000,000₫</span>

                                                        <span class="original-price"><s>53,000,000₫</s></span>

                                                    </div>
                                                </div>
                                                <div class="product-buynow">
                                                    <button type="button"
                                                            class="btnAddToCart add-to-cart  medium--hide small--hide"
                                                            data-id="1031639469"><span><svg
                                                                class="svg-inline--fa fa-cart-plus fa-w-18"
                                                                aria-hidden="true" data-prefix="fa"
                                                                data-icon="cart-plus" role="img"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 576 512" data-fa-i2svg=""><path
                                                                    fill="currentColor"
                                                                    d="M504.717 320H211.572l6.545 32h268.418c15.401 0 26.816 14.301 23.403 29.319l-5.517 24.276C523.112 414.668 536 433.828 536 456c0 31.202-25.519 56.444-56.824 55.994-29.823-.429-54.35-24.631-55.155-54.447-.44-16.287 6.085-31.049 16.803-41.548H231.176C241.553 426.165 248 440.326 248 456c0 31.813-26.528 57.431-58.67 55.938-28.54-1.325-51.751-24.385-53.251-52.917-1.158-22.034 10.436-41.455 28.051-51.586L93.883 64H24C10.745 64 0 53.255 0 40V24C0 10.745 10.745 0 24 0h102.529c11.401 0 21.228 8.021 23.513 19.19L159.208 64H551.99c15.401 0 26.816 14.301 23.403 29.319l-47.273 208C525.637 312.246 515.923 320 504.717 320zM408 168h-48v-40c0-8.837-7.163-16-16-16h-16c-8.837 0-16 7.163-16 16v40h-48c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h48v40c0 8.837 7.163 16 16 16h16c8.837 0 16-7.163 16-16v-40h48c8.837 0 16-7.163 16-16v-16c0-8.837-7.163-16-16-16z"></path></svg>
                                                            <!-- <i class="fa fa-cart-plus" aria-hidden="true"></i> --> Thêm vào giỏ</span>
                                                    </button>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="item">


                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="/collections/cac-san-pham-khac/products/suplo-smart-gravity-holder-cute-mount-10w-fast-wireless-car-charger-bracket-car-accessories-3">


                                                        <img id="1090716010" class="lazyload"
                                                             src="//theme.hstatic.net/1000305059/1000394224/14/lazyload.jpg?v=3615"
                                                             data-src="//product.hstatic.net/1000305059/product/suplo-005a-02_5d3b786d8a17438f928a3c84ee7e71fa_large.jpg"
                                                             alt="SUPLO Smart Gravity Holder Cute Mount 10W Fast Wireless Car Charger Bracket Car Accessories">


                                                        <img id="1090716011" class="lazyload"
                                                             src="//theme.hstatic.net/1000305059/1000394224/14/lazyload.jpg?v=3615"
                                                             data-src="//product.hstatic.net/1000305059/product/suplo-003a-01_f494c194a73f4f8fa6d9787d29d3ff27_large.jpg"
                                                             alt="SUPLO Smart Gravity Holder Cute Mount 10W Fast Wireless Car Charger Bracket Car Accessories">


                                                    </a>
                                                    <div class="product-actions medium--hide small--hide">
                                                        <div>
                                                            <button type="button"
                                                                    class="btnQuickView quick-view medium--hide small--hide"
                                                                    data-handle="/products/suplo-smart-gravity-holder-cute-mount-10w-fast-wireless-car-charger-bracket-car-accessories-3">
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

                                                </div>
                                                <div class="product-item-info">
                                                    <div class="product-title">
                                                        <a href="/products/suplo-smart-gravity-holder-cute-mount-10w-fast-wireless-car-charger-bracket-car-accessories-3">SUPLO
                                                            Smart Gravity Holder Cute Mount 10W Fast Wireless
                                                            C...</a>
                                                    </div>
                                                    <div class="product-desc">
                                                        Bọc vô lăng Sparco chính hãng SPC1111RS lấy cảm hứng thể
                                                        thao từ các dòng xe đua kết hợp với công nghệ sản xuất
                                                        tiên tiến. Các mẫu bọc vô lăng SPARCO đều có kích thước
                                                        đường kín...
                                                    </div>
                                                    <div class="product-price clearfix">
                                                        <span class="current-price">21,000,000₫</span>

                                                    </div>
                                                </div>
                                                <div class="product-buynow">
                                                    <button type="button"
                                                            class="btnAddToCart add-to-cart  medium--hide small--hide"
                                                            data-id="1031639038"><span><svg
                                                                class="svg-inline--fa fa-cart-plus fa-w-18"
                                                                aria-hidden="true" data-prefix="fa"
                                                                data-icon="cart-plus" role="img"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 576 512" data-fa-i2svg=""><path
                                                                    fill="currentColor"
                                                                    d="M504.717 320H211.572l6.545 32h268.418c15.401 0 26.816 14.301 23.403 29.319l-5.517 24.276C523.112 414.668 536 433.828 536 456c0 31.202-25.519 56.444-56.824 55.994-29.823-.429-54.35-24.631-55.155-54.447-.44-16.287 6.085-31.049 16.803-41.548H231.176C241.553 426.165 248 440.326 248 456c0 31.813-26.528 57.431-58.67 55.938-28.54-1.325-51.751-24.385-53.251-52.917-1.158-22.034 10.436-41.455 28.051-51.586L93.883 64H24C10.745 64 0 53.255 0 40V24C0 10.745 10.745 0 24 0h102.529c11.401 0 21.228 8.021 23.513 19.19L159.208 64H551.99c15.401 0 26.816 14.301 23.403 29.319l-47.273 208C525.637 312.246 515.923 320 504.717 320zM408 168h-48v-40c0-8.837-7.163-16-16-16h-16c-8.837 0-16 7.163-16 16v40h-48c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h48v40c0 8.837 7.163 16 16 16h16c8.837 0 16-7.163 16-16v-40h48c8.837 0 16-7.163 16-16v-16c0-8.837-7.163-16-16-16z"></path></svg>
                                                            <!-- <i class="fa fa-cart-plus" aria-hidden="true"></i> --> Thêm vào giỏ</span>
                                                    </button>
                                                </div>
                                            </div>

                                        </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
