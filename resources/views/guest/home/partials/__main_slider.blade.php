<div id="main-slider">
    <form id="search-collection-form" accept-charset="UTF-8" action="/search" class="search-form" method="get">
        <select class="mobile-select-collection">
            <option value="0">Tất cả</option>


            <option value="1001373418">Phụ kiện xe hơi</option>


            <option value="1001373419">Đồ chơi xe hơi</option>


            <option value="1001373421">Nội thất xe hơi</option>


            <option value="1001373422">Các sản phẩm khác</option>


            <option value="1001358763">Sản phẩm khuyến mãi</option>


            <option value="1001365286">Sản phẩm mới về</option>

        </select>
        <div class="input-group">
            <input type="text" value="" placeholder="Tìm kiếm ..." name="q">
            <input type="hidden" value="product" name="type">
            <span class="input-group-btn">
			<button type="submit"><svg class="svg-inline--fa fa-search fa-w-16" aria-hidden="true" data-prefix="fas"
                                       data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg"
                                       viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor"
                                                                                    d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path></svg>
                <!-- <i class="fas fa-search"></i> --></button>
		</span>
        </div>
    </form>

    <script>
        $('#search-collection-form').submit(function (e) {
            e.preventDefault();
            if ($('.mobile-select-collection').val() == 0) {
                window.location = '/search?q=filter=(' + '(collectionid:product>=' + $('.mobile-select-collection').val() + ')' + '&&(title:product**' + $(this).find('input[name="q"]').val() + '))';
            } else {
                window.location = '/search?q=filter=(' + '(collectionid:product=' + $('.mobile-select-collection').val() + ')' + '&&(title:product**' + $(this).find('input[name="q"]').val() + '))';
            }
        })
    </script>
    <div id="owl-main-slider" class="owl-carousel owl-theme owl-loaded">
        @foreach($banners as $banner)
            <div class="item">
                <div class="ms-img">
                    <a href="{{$banner->link_url}}" target="_blank">
                        <img src="{{asset(\App\Common\Constant::$PATH_URL_UPLOAD_IMAGE.$banner->src_image)}}"
                             alt="{{$appInfo->app_name}}"/>
                    </a>

                    {{--<div class="ms-desc">--}}
                        {{--<div class="line-1 wow fadeInLeft animated" data-wow-duration="0.75s"--}}
                             {{--data-wow-delay="0.5s"--}}
                             {{--style="visibility: visible; animation-duration: 0.75s; animation-delay: 0.5s; animation-name: fadeInLeft;">--}}
                            {{--Các mẫu xe thể thao--}}
                        {{--</div>--}}
                        {{--<div class="line-2 wow fadeInRight animated" data-wow-duration="0.75s"--}}
                             {{--data-wow-delay="0.5s"--}}
                             {{--style="visibility: visible; animation-duration: 0.75s; animation-delay: 0.5s; animation-name: fadeInRight;">--}}
                            {{--Bằng tất cả tâm huyết, năng lực vượt trội và quy mô không ngừng phát triển, Suplo--}}
                            {{--cam kết nỗ lực hết mình nhằm cung cấp sản phẩm và dịch vụ đúng với những giá trị mà--}}
                            {{--khách hàng mong đợi.--}}
                        {{--</div>--}}
                        {{--<a href="/collections/all" class="wow fadeInUp animated" data-wow-duration="0.5s"--}}
                           {{--data-wow-delay="1.5s"--}}
                           {{--style="visibility: visible; animation-duration: 0.5s; animation-delay: 1.5s; animation-name: fadeInUp;">Xem--}}
                            {{--thêm</a>--}}
                    {{--</div>--}}
                </div>
            </div>
        @endforeach
    </div>
</div>
