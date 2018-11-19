
<header id="header">
    <div class="header-desktop">
        <div class="inner">
            <div class="header-logo">
                <h1>
                    <a href="/">
                        {{$appInfo->app_name}}<img src="{{asset($appInfo->app_src_icon)}}" alt="{{$appInfo->app_name}}">
                    </a>
                </h1>
            </div>
            <div class="header-navbar-wrapper">
                <div class="header-navbar text-right">
                    <ul class="no-bullets">
                        <li class="active ">
                            <a href="{{route('home')}}" class="text-center">
                                <span>Trang Chủ</span>
                            </a>
                        </li>
                        <li class=" megamenu">
                            <a href="{{route('collection_all')}}" class="text-center menu-collection">
                                <span>Sản Phẩm</span>
                                <svg class="svg-inline--fa fa-caret-down fa-w-10" aria-hidden="true" data-prefix="fas" data-icon="caret-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"></path></svg><!-- <i class="fas fa-caret-down"></i> -->
                            </a>
                            @include('guest.layouts.partials.__menu_show_product')
                        </li>
                        <li class="">
                            <a href="{{route('blog')}}" class="text-center">
                                <span>Tin Tức</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="{{route('contact')}}" class="text-center">
                                <span>Liên hệ</span>
                            </a>
                        </li>

                        <li class=" ">
                            <a href="{{route('cost_estimate')}}" class="text-center">
                                <span>Dự toán chi phí</span>

                            </a>
                        </li>
                        <li class=" ">
                            <a href="#" class="text-center">
                                <span>Đăng lý lái thử</span>
                            </a>

                        </li>
                    </ul>
                </div>
            </div>
            <div class="header-right">
                <div class="header-search text-right">
                    <a href="javascript:void(0)" class="text-center" id="search-btn">
                        <span id="btn-s"><svg class="svg-inline--fa fa-search fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path></svg><!-- <i class="fas fa-search"></i> --></span><span class="hide" id="btn-t"><svg class="svg-inline--fa fa-times fa-w-12" aria-hidden="true" data-prefix="fas" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M323.1 441l53.9-53.9c9.4-9.4 9.4-24.5 0-33.9L279.8 256l97.2-97.2c9.4-9.4 9.4-24.5 0-33.9L323.1 71c-9.4-9.4-24.5-9.4-33.9 0L192 168.2 94.8 71c-9.4-9.4-24.5-9.4-33.9 0L7 124.9c-9.4 9.4-9.4 24.5 0 33.9l97.2 97.2L7 353.2c-9.4 9.4-9.4 24.5 0 33.9L60.9 441c9.4 9.4 24.5 9.4 33.9 0l97.2-97.2 97.2 97.2c9.3 9.3 24.5 9.3 33.9 0z"></path></svg><!-- <i class="fas fa-times"></i> --></span>
                    </a>
                    <div class="dropdown-menu" id="search-dropdown">
                        <div class="search-form-wrapper">
                            <form id="searchauto" action="/search" class="searchform-categoris ultimate-search">

                                <div class="wpo-search">

                                    <div class="wpo-search-inner">

                                        <select class="select-collection" id="select-collection">
                                            <option value="0">Tất cả</option>



                                            <option value="1001373418">Phụ kiện xe hơi</option>


                                            <option value="1001373419">Đồ chơi xe hơi</option>


                                            <option value="1001373421">Nội thất xe hơi</option>


                                            <option value="1001373422">Các sản phẩm khác</option>


                                            <option value="1001358763">Sản phẩm khuyến mãi</option>


                                            <option value="1001365286">Sản phẩm mới về</option>

                                        </select>

                                        <div class="input-group">

                                            <input type="hidden" name="type" value="product">

                                            <input id="searchtext" name="q" maxlength="40" class="form-control input-search" type="text" size="20" placeholder="Tìm kiếm ..." autocomplete="off">

                                            <span class="input-group-btn">
						<button type="submit" id="searchsubmit"><svg class="svg-inline--fa fa-search fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path></svg><!-- <i class="fas fa-search"></i> --></button>
					</span>
                                        </div>

                                    </div>

                                    <input type="hidden" class="collection_id" value="(collectionid:product>=0)">

                                    <input type="hidden" class="collection_handle" value="all">

                                    <input type="hidden" class="collection_name" value="all">

                                </div>

                            </form>
                        </div>

                        <script>
                            $('#searchauto').submit(function(e){
                                e.preventDefault();
                                if($('.select-collection').val() == 0){
                                    window.location = '/search?q=filter=('+'(collectionid:product>='+ $('.select-collection').val() +')'+'&&(title:product**' + $(this).find('input[name="q"]').val() + '))';
                                }else{
                                    window.location = '/search?q=filter=('+'(collectionid:product='+ $('.select-collection').val() +')'+'&&(title:product**' + $(this).find('input[name="q"]').val() + '))';
                                }
                            })
                        </script>

                        <script>

                            function selectSuggest(act){

                                cur = $('.smart-search-wrapper > .select').index();

                                length = $('.smart-search-wrapper > a').length;

                                if (act == 38)
                                {

                                    if (cur == -1 || cur == 0)

                                        cur = length - 1;

                                    else

                                        cur = cur - 1;

                                }


                                if (act == 40)
                                {

                                    if (cur == -1 || cur == length - 1)

                                        cur = 0;

                                    else

                                        cur = cur + 1;
                                }

                                $('.smart-search-wrapper>a').removeClass('select');

                                $('.smart-search-wrapper>a:nth-child('+ ( cur + 1)+')').addClass('select');


                                $('.ultimate-search input[name=q]').val($('.smart-search-wrapper>.select').attr('data-title'));
                                return false;
                            }


                            (function($) {
                                $.fn.smartSearch = function(_option) {


                                    var o, issending = false,

                                        timeout = null;

                                    var option = {
                                        smartoffset: true, //auto calc offset

                                        searchoperator: '**', //** contain, *= begin with, =* end with

                                        searchfield: "title",

                                        searchwhen: 'keyup', //0: after keydown, 1: after keypress, after space

                                        searchdelay: 500, //delay time before load data

                                    };

                                    if (typeof(_option) !== 'undefined') {

                                        $.each(_option, function(i, v) {

                                            if (typeof(_option[i]) !== 'undefined') option[i] = _option[i];

                                        })
                                    }

                                    o = $(this);

                                    o.attr('autocomplete', 'off');

                                    this.bind(option.searchwhen, function(event) {

                                        if (event.keyCode == 38 || event.keyCode == 40) {

                                            return selectSuggest(event.keyCode);

                                        } else {

                                            $(".smart-search-wrapper." + option.wrapper).remove();

                                            clearTimeout(timeout);

                                            timeout = setTimeout(l, option.searchdelay, $(this).val());

                                        }

                                    });

                                    var l = function(t) {

                                        if (issending) return this;

                                        issending = true;

                                        coll=''

                                        if(option.collection != null)

                                            coll= $(option.collection).val() + "&&";

                                        $.ajax({

                                            url: "/search?q=filter=(" + coll + "(" + option.searchfield + ":product" + option.searchoperator + t + "))&view=ultimate-search",

                                            dataType: "JSON",

                                            async: false,

                                            success: function(data) {

                                                if( $('.smart-search-wrapper.' + option.wrapper).length == 0 ) {

                                                    $('.search-form-wrapper').append("<div class='smart-search-wrapper "  + option.wrapper + "'></div>");

                                                }

                                                p();

                                                $.each(data, function(i, v) {

                                                    $(".smart-search-wrapper." + option.wrapper).append("<a data-title='"+ v.title + "'class='thumbs' href='" + v.url + "'> <img src='"+Haravan.resizeImage(v.featured_image, 'icon')+"'/></a><a data-title='"+ v.title + "' href='" + v.url + "'>" + v.title + "<span class='price-search'>"+Haravan.formatMoney(v.price, '')+"đ</span></a>");

                                                });

                                                issending = false;

                                            },

                                            error: function (xhr, ajaxOptions, thrownError) {

                                                //alert(xhr.status);

                                                //alert(thrownError);

                                            }

                                        });

                                    }

                                    $(window).resize(function() {

                                        p();

                                    });

                                    $(window).scroll(function() {

                                        p();

                                    });

                                    $(this).blur(function(){

                                        $('.smart-search-wrapper.' + option.wrapper).slideUp();

                                    });

                                    var p = function() {

                                        if( ! o.offset() ) {

                                            return;

                                        }


                                        $(".smart-search-wrapper." + option.wrapper).css("width", "100%");

                                        $(".smart-search-wrapper." + option.wrapper).css("left", o.offset().left + "px");

                                        if (option.smartoffset) {


                                            h = $(".smart-search-wrapper." + option.wrapper).height();

                                            if (h + o.offset().top - $(window).scrollTop() + o.outerHeight() > $(window).height()) {

                                                $(".smart-search-wrapper." + option.wrapper).css('top', '');


                                                $(".smart-search-wrapper." + option.wrapper).css('bottom', ($(window).scrollTop() + $(window).height() - o.offset().top) + "px");

                                            } else {

                                                $(".smart-search-wrapper." + option.wrapper).css('bottom', '');

                                                $(".smart-search-wrapper." + option.wrapper).css('top', (o.offset().top - $(window).scrollTop() + o.outerHeight()) + "px");

                                            }

                                        } else {

                                            $(".smart-search-wrapper." + option.wrapper).css('top', h + o.offset().top );

                                        }

                                    }

                                    return this;

                                };
                            }(jQuery));



                            jQuery('.ultimate-search input[name=q]').smartSearch({searchdelay:400, wrapper: 'search-wrapper', collection:'.collection_id'});


                        </script>

                        <style>

                            .smart-search-wrapper>a.thumbs{
                                width: 32px;
                                display: inline-block;
                                padding: 5px 0px;
                            }



                            .smart-search-wrapper>a.thumbs img {
                                position: absolute;
                                top: 0px;
                                width: 32px;
                                height: 35px;
                                left: 0px;
                            }
                            .smart-search-wrapper{
                                position: absolute;
                                left: 0 !important;
                                right: 0 !important;
                                top: 100% !important;
                                background: #fff;
                                border: 1px solid rgb(215, 215, 215);
                                border-top: none;
                                z-index: 999;
                            }

                            .smart-search-wrapper>a {
                                width: calc(100% - 32px);
                                float: left;
                                text-overflow: ellipsis;
                                overflow: hidden;
                                white-space: pre;
                                color: #686767 !important;
                                text-decoration: none;
                                line-height: 29px;
                                font-size: 13px;
                                font-family: sans-serif;
                                padding: 5px 160px 5px 5px;
                                position: relative;
                                height: 35px;
                            }

                            .smart-search-wrapper>a.select, .smart-search-wrapper>a:hover {
                                background: -webkit-linear-gradient(left, #fff,#EAEAEA); /* For Safari 5.1 to 6.0 */
                                background: -o-linear-gradient(left, #fff,#EAEAEA); /* For Opera 11.1 to 12.0 */
                                background: -moz-linear-gradient(left, #fff,#EAEAEA ); /* For Firefox 3.6 to 15 */
                                background: linear-gradient(left, #fff,#EAEAEA ); /* Standard syntax (must be last) */
                                color: #000;
                            }

                            .smart-search-wrapper>a>span.price-search {
                                position: absolute;
                                right: 5px;
                                top:0px;
                            }

                        </style>




                    </div>
                </div>
                <div class="header-account">
                    <a href="javascript:void(0)" class="text-center" id="account-btn">
                        <svg class="svg-inline--fa fa-user fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 0c88.366 0 160 71.634 160 160s-71.634 160-160 160S96 248.366 96 160 167.634 0 256 0zm183.283 333.821l-71.313-17.828c-74.923 53.89-165.738 41.864-223.94 0l-71.313 17.828C29.981 344.505 0 382.903 0 426.955V464c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48v-37.045c0-44.052-29.981-82.45-72.717-93.134z"></path></svg><!-- <i class="fas fa-user"></i> -->
                    </a>
                    <div class="dropdown-menu" id="account-dropdown">
                        <ul class="no-bullets">

                            <li><a href="/account/login">Đăng nhập</a></li>
                            <li><a href="/account/register">Đăng kí</a></li>

                        </ul>
                    </div>
                </div>
                <div class="desktop-cart-wrapper">
                    <a href="javascript:void(0)" class="hd-cart">
                        <svg class="svg-inline--fa fa-shopping-cart fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="shopping-cart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z"></path></svg><!-- <i class="fas fa-shopping-cart"></i> -->
                        <span class="hd-cart-count">1</span>
                    </a>
                    <div class="quickview-cart">
                        <h3>

                            Giỏ hàng của tôi (1 sản phẩm)

                            <span class="btnCloseQVCart"><svg class="svg-inline--fa fa-times fa-w-12" aria-hidden="true" data-prefix="fa" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M323.1 441l53.9-53.9c9.4-9.4 9.4-24.5 0-33.9L279.8 256l97.2-97.2c9.4-9.4 9.4-24.5 0-33.9L323.1 71c-9.4-9.4-24.5-9.4-33.9 0L192 168.2 94.8 71c-9.4-9.4-24.5-9.4-33.9 0L7 124.9c-9.4 9.4-9.4 24.5 0 33.9l97.2 97.2L7 353.2c-9.4 9.4-9.4 24.5 0 33.9L60.9 441c9.4 9.4 24.5 9.4 33.9 0l97.2-97.2 97.2 97.2c9.3 9.3 24.5 9.3 33.9 0z"></path></svg><!-- <i class="fa fa-times" aria-hidden="true"></i> --></span>
                        </h3>
                        <ul class="no-bullets">


                            <li class="cart-item">
                                <a href="/cart/change?line=1&amp;quantity=0" class="cart__remove"><svg class="svg-inline--fa fa-times fa-w-12" aria-hidden="true" data-prefix="fa" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M323.1 441l53.9-53.9c9.4-9.4 9.4-24.5 0-33.9L279.8 256l97.2-97.2c9.4-9.4 9.4-24.5 0-33.9L323.1 71c-9.4-9.4-24.5-9.4-33.9 0L192 168.2 94.8 71c-9.4-9.4-24.5-9.4-33.9 0L7 124.9c-9.4 9.4-9.4 24.5 0 33.9l97.2 97.2L7 353.2c-9.4 9.4-9.4 24.5 0 33.9L60.9 441c9.4 9.4 24.5 9.4 33.9 0l97.2-97.2 97.2 97.2c9.3 9.3 24.5 9.3 33.9 0z"></path></svg><!-- <i class="fa fa-times" aria-hidden="true"></i> --></a>
                                <div class="grid mg-left-15">
                                    <div class="grid__item large--four-twelfths medium--four-twelfths small--four-twelfths pd-left15">
                                        <div class="cart-item-img text-center">
                                            <a href="/products/suplo-smart-gravity-holder-cute-mount-10w-fast-wireless-car-charger-bracket-car-accessories-9">

                                                <img src="//product.hstatic.net/1000305059/product/suplo-012a-01_b4073d98b6534c619a361549e0b2f118_small.jpg" alt="SUPLO Smart Gravity Holder Cute Mount 10W Fast Wireless Car Charger Bracket Car Accessories">

                                            </a>
                                        </div>
                                    </div>
                                    <div class="grid__item large--eight-twelfths medium--eight-twelfths small--eight-twelfths pd-left15">
                                        <div class="cart-item-info text-left">
                                            <a href="/products/suplo-smart-gravity-holder-cute-mount-10w-fast-wireless-car-charger-bracket-car-accessories-9">SUPLO Smart Gravity Holder Cute Mount 10W Fast ...</a>

                                            <small>Nâu</small>

                                        </div>
                                        <div class="cart-item-price-quantity text-left">
                                            <span class="quantity">Số lượng: 1</span>
                                            <span class="current-price">Giá/sp: 150,000₫</span>
                                        </div>
                                    </div>
                                </div>
                            </li>


                        </ul>

                        <div class="qv-cart-total">
                            Tạm tính: <span>150,000₫</span>
                        </div>
                        <div class="quickview-cartactions clearfix">
                            <a href="/cart">Xem giỏ hàng</a>
                            <a href="/checkout">Thanh toán</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-mobile">
        <div class="wrapper">
            <div class="inner">
                <div class="grid">
                    <div class="grid__item large--one-third medium--one-third small--one-third">
                        <div class="hd-logo text-left">

                            <a href="/">
                                <img src="//theme.hstatic.net/1000305059/1000394224/14/mb_logo.png?v=3615" alt="Suplo Car | Cửa hàng phụ kiện,đồ chơi, nội thất xe hơi chính hãng">
                            </a>

                        </div>
                    </div>
                    <div class="clearfix grid__item large--two-thirds medium--two-thirds small--two-thirds clearfix text-right">
                        <div class="hd-btnMenu">
                            <a href="javascript:void(0)" class="icon-fallback-text site-nav__link js-drawer-open-right" aria-controls="NavDrawer" aria-expanded="false">
                                <svg class="svg-inline--fa fa-bars fa-w-14" aria-hidden="true" data-prefix="fas" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg><!-- <i class="fas fa-bars"></i> -->
                            </a>
                        </div>
                        <div class="desktop-cart-wrapper1">
                            <a href="javascript:void(0)" class="hd-cart">
                                <svg class="svg-inline--fa fa-shopping-cart fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="shopping-cart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z"></path></svg><!-- <i class="fas fa-shopping-cart"></i> -->
                                <span class="hd-cart-count">1</span>
                            </a>
                            <div class="quickview-cart">
                                <h3>

                                    Giỏ hàng của tôi (1 sản phẩm)

                                    <span class="btnCloseQVCart"><svg class="svg-inline--fa fa-times fa-w-12" aria-hidden="true" data-prefix="fa" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M323.1 441l53.9-53.9c9.4-9.4 9.4-24.5 0-33.9L279.8 256l97.2-97.2c9.4-9.4 9.4-24.5 0-33.9L323.1 71c-9.4-9.4-24.5-9.4-33.9 0L192 168.2 94.8 71c-9.4-9.4-24.5-9.4-33.9 0L7 124.9c-9.4 9.4-9.4 24.5 0 33.9l97.2 97.2L7 353.2c-9.4 9.4-9.4 24.5 0 33.9L60.9 441c9.4 9.4 24.5 9.4 33.9 0l97.2-97.2 97.2 97.2c9.3 9.3 24.5 9.3 33.9 0z"></path></svg><!-- <i class="fa fa-times" aria-hidden="true"></i> --></span>
                                </h3>
                                <ul class="no-bullets">


                                    <li class="cart-item">
                                        <a href="/cart/change?line=1&amp;quantity=0" class="cart__remove"><svg class="svg-inline--fa fa-times fa-w-12" aria-hidden="true" data-prefix="fa" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M323.1 441l53.9-53.9c9.4-9.4 9.4-24.5 0-33.9L279.8 256l97.2-97.2c9.4-9.4 9.4-24.5 0-33.9L323.1 71c-9.4-9.4-24.5-9.4-33.9 0L192 168.2 94.8 71c-9.4-9.4-24.5-9.4-33.9 0L7 124.9c-9.4 9.4-9.4 24.5 0 33.9l97.2 97.2L7 353.2c-9.4 9.4-9.4 24.5 0 33.9L60.9 441c9.4 9.4 24.5 9.4 33.9 0l97.2-97.2 97.2 97.2c9.3 9.3 24.5 9.3 33.9 0z"></path></svg><!-- <i class="fa fa-times" aria-hidden="true"></i> --></a>
                                        <div class="grid mg-left-15">
                                            <div class="grid__item large--four-twelfths medium--four-twelfths small--four-twelfths pd-left15">
                                                <div class="cart-item-img text-center">
                                                    <a href="/products/suplo-smart-gravity-holder-cute-mount-10w-fast-wireless-car-charger-bracket-car-accessories-9">

                                                        <img src="//product.hstatic.net/1000305059/product/suplo-012a-01_b4073d98b6534c619a361549e0b2f118_small.jpg" alt="SUPLO Smart Gravity Holder Cute Mount 10W Fast Wireless Car Charger Bracket Car Accessories">

                                                    </a>
                                                </div>
                                            </div>
                                            <div class="grid__item large--eight-twelfths medium--eight-twelfths small--eight-twelfths pd-left15">
                                                <div class="cart-item-info text-left">
                                                    <a href="/products/suplo-smart-gravity-holder-cute-mount-10w-fast-wireless-car-charger-bracket-car-accessories-9">SUPLO Smart Gravity Holder Cute Mount 10W Fast ...</a>

                                                    <small>Nâu</small>

                                                </div>
                                                <div class="cart-item-price-quantity text-left">
                                                    <span class="quantity">Số lượng: 1</span>
                                                    <span class="current-price">Giá/sp: 150,000₫</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                                <div class="qv-cart-total">
                                    Tạm tính: <span>150,000₫</span>
                                </div>
                                <div class="quickview-cartactions clearfix">
                                    <a href="/cart">Xem giỏ hàng</a>
                                    <a href="/checkout">Thanh toán</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Header Fixed ----->
<script>
    jQuery(document).ready(function() {
        window.onscroll = changePos;

        function changePos() {
            var header = $("#header");
            var headerheight = $("#header").height() + 200;
            if (window.pageYOffset > headerheight) {
                header.addClass('scrolldown');
            } else {
                header.removeClass('scrolldown');
            }
        }
    });
</script>
