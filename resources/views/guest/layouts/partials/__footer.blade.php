<footer id="footer">
    <div class="footer-content">
        <div class="wrapper">
            <div class="inner">
                <div class="grid-uniform mg-left-0">
                    <div class="grid__item large--one-third medium--one-whole small--one-whole pd-left0">
                        <div class="ft-contact">
                            <div class="ft-logo">
                                <a href="{{route('home')}}">
                                    <h2>
                                        <img src="{{asset($appInfo->app_src_icon)}}" alt="{{$appInfo->app_content}}">
                                    </h2>
                                </a>
                            </div>
                            <div class="ft-contact-desc">
                                {{$appInfo->app_content}}
                            </div>
                            <div class="ft-contact-address">
                                <span class="ft-contact-icon"><svg class="svg-inline--fa fa-map-marker-alt fa-w-12" aria-hidden="true" data-prefix="fas" data-icon="map-marker-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path></svg><!-- <i class="fas fa-map-marker-alt"></i> --></span>
                                <div class="ft-contact-detail">
                                    Địa chỉ: <span>{{$appInfo->app_address}}</span>
                                </div>
                            </div>
                            <div class="ft-contact-tel">
                                <span class="ft-contact-icon"><svg class="svg-inline--fa fa-phone fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M493.397 24.615l-104-23.997c-11.314-2.611-22.879 3.252-27.456 13.931l-48 111.997a24 24 0 0 0 6.862 28.029l60.617 49.596c-35.973 76.675-98.938 140.508-177.249 177.248l-49.596-60.616a24 24 0 0 0-28.029-6.862l-111.997 48C3.873 366.516-1.994 378.08.618 389.397l23.997 104C27.109 504.204 36.748 512 48 512c256.087 0 464-207.532 464-464 0-11.176-7.714-20.873-18.603-23.385z"></path></svg><!-- <i class="fas fa-phone"></i> --></span>
                                <div class="ft-contact-detail">
                                    Số điện thoại: <a href="tel:{{$appInfo->app_phone}}">{{$appInfo->app_phone}}</a>
                                </div>
                            </div>
                            <div class="ft-contact-email">
                                <span class="ft-contact-icon"><svg class="svg-inline--fa fa-envelope fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"></path></svg><!-- <i class="fas fa-envelope"></i> --></span>
                                <div class="ft-contact-detail">
                                    Email:  <a href="mailto:{{$appInfo->app_email}}">{{$appInfo->app_email}}</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid__item large--one-sixth medium--one-quarter small--one-half pd-left0">
                        <div class="ft-nav first ">
                            <h3 class="ft-title">
                                Liên kết nhanh
                            </h3>
                            <ul class="no-bullets">
                                <li>
                                    <a href="{{route('home')}}">Trang chủ</a>
                                </li>

                                <li>
                                    <a href="{{route('collection_all')}}">Sản phẩm</a>
                                </li>

                                <li>
                                    <a href="{{route('blog')}}">Tin tức</a>
                                </li>

                                <li>
                                    <a href="{{route('contact')}}">Liên hệ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="grid__item large--one-sixth medium--one-quarter small--one-half pd-left0">
                        <div class="ft-nav ">
                            <h3 class="ft-title">
                                Dịch vụ
                            </h3>
                            <ul class="no-bullets">

                                <li>
                                    <a href="/pages/about-us">Dự toán chi phí</a>
                                </li>

                                <li>
                                    <a href="/pages/about-us">Đăng ký lái thử</a>
                                </li>

                                <li>
                                    <a href="{{route('collection_all')}}">Sản phẩm</a>
                                </li>

                                <li>
                                    <a href="{{route('blog')}}">Tin tức</a>
                                </li>

                                <li>
                                    <a href="{{route('contact')}}">Liên hệ</a>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="grid__item large--one-sixth medium--one-quarter small--one-half pd-left0">
                        @include('both.common.__plugin_fan_facebook',['height' => "300px"])
                    </div>

                </div>
            </div>
        </div>
    </div>
</footer>
