@extends('guest.layouts.master')

@section('body.content')
    <main class="main-content" role="main">
        <section id="blog-wrapper" class="in-blog">
            <div class="wrapper">
                <div class="inner">

                    <h1 class="hide">
                        Tất cả tin tức
                    </h1>

                    <div class="grid">

                        <div class="grid__item large--three-quarters medium--one-whole small--one-whole ">
                            <div class="blog-content">

                                <!--- Loop all blogs --->
                                <div class="blog-single-item">
                                    <div class="section-title clearfix">
                                        <div class="title">
                                            <h2>Công nghệ ô tô</h2>
                                        </div>
                                        <div class="viewmore small--hide" style="margin-right: 90px;">
                                            <a href="/blogs/news">Xem tất cả </a>
                                        </div>
                                        <div class="viewmore large--hide medium--hide" style="margin-right: 90px;">
                                            <a href="/blogs/news">Xem tất cả </a>
                                        </div>
                                    </div>
                                    <div class="blog-single-slider">

                                        <div id="owl-blog-single-slider1"
                                             class="owl-carousel owl-theme owl-loaded owl-drag">

                                            <div class="owl-stage-outer">
                                                <div class="owl-stage"
                                                     style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 3161px;">
                                                    <div class="owl-item active"
                                                         style="width: 441.5px; margin-right: 10px;">
                                                        <div class="item">
                                                            <div class="article-item">
                                                                <div class="grid mg-left-10">
                                                                    <div
                                                                        class="grid__item large--one-half medium--one-whole small--one-whole pd-left10">
                                                                        <div class="article-img">
                                                                            <a href="/blogs/news/sieu-xe-nua-trieu-usd-co-nguy-co-roi-banh-ra-duong">
                                                                                <img
                                                                                    src="//file.hstatic.net/1000305059/article/article_img711_large.jpg"
                                                                                    alt="Siêu xe nửa triệu USD có nguy cơ rơi bánh ra đường">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="grid__item large--one-half medium--one-whole small--whole pd-left10">
                                                                        <div class="article-info-wrapper">
                                                                            <div class="article-info">
                                                                                <div class="article-date">
                                                                                    <span class="article-day">17</span>/
                                                                                    <span>08</span>/
                                                                                    <span>2018</span>
                                                                                </div>
                                                                                <div class="article-title">
                                                                                    <a href="/blogs/news/sieu-xe-nua-trieu-usd-co-nguy-co-roi-banh-ra-duong">Siêu
                                                                                        xe nửa triệu USD có nguy cơ rơi
                                                                                        bánh ra đường</a>
                                                                                </div>
                                                                                <div class="article-author">
                                                                                    <svg
                                                                                        class="svg-inline--fa fa-edit fa-w-18"
                                                                                        aria-hidden="true"
                                                                                        data-prefix="far"
                                                                                        data-icon="edit" role="img"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 576 512"
                                                                                        data-fa-i2svg="">
                                                                                        <path fill="currentColor"
                                                                                              d="M402.3 344.9l32-32c5-5 13.7-1.5 13.7 5.7V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h273.5c7.1 0 10.7 8.6 5.7 13.7l-32 32c-1.5 1.5-3.5 2.3-5.7 2.3H48v352h352V350.5c0-2.1.8-4.1 2.3-5.6zm156.6-201.8L296.3 405.7l-90.4 10c-26.2 2.9-48.5-19.2-45.6-45.6l10-90.4L432.9 17.1c22.9-22.9 59.9-22.9 82.7 0l43.2 43.2c22.9 22.9 22.9 60 .1 82.8zM460.1 174L402 115.9 216.2 301.8l-7.3 65.3 65.3-7.3L460.1 174zm64.8-79.7l-43.2-43.2c-4.1-4.1-10.8-4.1-14.8 0L436 82l58.1 58.1 30.9-30.9c4-4.2 4-10.8-.1-14.9z"></path>
                                                                                    </svg>
                                                                                    <!-- <i class="far fa-edit"></i> -->
                                                                                    Đăng bởi: <span>Suplo Bạc</span>
                                                                                </div>
                                                                                <div class="article-comment">
                                                                                    <svg
                                                                                        class="svg-inline--fa fa-comments fa-w-18"
                                                                                        aria-hidden="true"
                                                                                        data-prefix="far"
                                                                                        data-icon="comments" role="img"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 576 512"
                                                                                        data-fa-i2svg="">
                                                                                        <path fill="currentColor"
                                                                                              d="M574.507 443.86c-5.421 21.261-24.57 36.14-46.511 36.14-32.246 0-66.511-9.99-102.1-29.734-50.64 11.626-109.151 7.877-157.96-13.437 41.144-2.919 80.361-12.339 116.331-28.705 16.322-1.22 32.674-4.32 48.631-9.593C454.404 412.365 490.663 432 527.996 432c-32-17.455-43.219-38.958-46.159-58.502 25.443-18.848 46.159-47.183 46.159-81.135 0-10.495-2.383-21.536-7.041-32.467 7.405-25.93 8.656-50.194 5.185-73.938 32.164 30.461 49.856 69.128 49.856 106.405 0 33.893-12.913 65.047-34.976 91.119 2.653 2.038 5.924 4.176 9.962 6.378 19.261 10.508 28.947 32.739 23.525 54zM240.002 80C117.068 80 48.004 152.877 48.004 210.909c0 38.196 24.859 70.072 55.391 91.276-3.527 21.988-16.991 46.179-55.391 65.815 44.8 0 88.31-22.089 114.119-37.653 25.52 7.906 51.883 11.471 77.879 11.471C362.998 341.818 432 268.976 432 210.909 432 152.882 362.943 80 240.002 80m0-48C390.193 32 480 126.026 480 210.909c0 22.745-6.506 46.394-18.816 68.391-11.878 21.226-28.539 40.294-49.523 56.674-21.593 16.857-46.798 30.045-74.913 39.197-29.855 9.719-62.405 14.646-96.746 14.646-24.449 0-48.34-2.687-71.292-8.004C126.311 404.512 85.785 416 48.004 416c-22.18 0-41.472-15.197-46.665-36.761-5.194-21.563 5.064-43.878 24.811-53.976 7.663-3.918 13.324-7.737 17.519-11.294-7.393-7.829-13.952-16.124-19.634-24.844C8.09 264.655.005 238.339.005 210.909.005 126.259 89.508 32 240.002 32z"></path>
                                                                                    </svg>
                                                                                    <!-- <i class="far fa-comments"></i> -->
                                                                                    <span
                                                                                        class="fb-comments-count fb_comments_count_zero"
                                                                                        data-href="https://suplo-car-accesories.myharavan.com/blogs/news/sieu-xe-nua-trieu-usd-co-nguy-co-roi-banh-ra-duong"
                                                                                        fb-xfbml-state="rendered"><span
                                                                                            class="fb_comments_count">0</span></span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="article-desc medium--hide small--hide">

                                                                                Thông thường những mẫu xe thương mại sẽ
                                                                                dựa trên một bản concept khi sản xuất,
                                                                                tuy nhiên một số khác lại có gốc gác là
                                                                                những chiếc xe đua...

                                                                            </div>
                                                                            <a href="/blogs/news/sieu-xe-nua-trieu-usd-co-nguy-co-roi-banh-ra-duong"
                                                                               class="article-btn">Xem thêm</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="owl-item active"
                                                         style="width: 441.5px; margin-right: 10px;">
                                                        <div class="item">
                                                            <div class="article-item">
                                                                <div class="grid mg-left-10">
                                                                    <div
                                                                        class="grid__item large--one-half medium--one-whole small--one-whole pd-left10">
                                                                        <div class="article-img">
                                                                            <a href="/blogs/news/bmw-i8-ham-ho-cua-xuong-do-ac-schnitzer">
                                                                                <img
                                                                                    src="//file.hstatic.net/1000305059/article/article_img6111_large.jpg"
                                                                                    alt="BMW i8 hầm hố của xưởng độ AC Schnitzer">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="grid__item large--one-half medium--one-whole small--whole pd-left10">
                                                                        <div class="article-info-wrapper">
                                                                            <div class="article-info">
                                                                                <div class="article-date">
                                                                                    <span class="article-day">17</span>/
                                                                                    <span>08</span>/
                                                                                    <span>2018</span>
                                                                                </div>
                                                                                <div class="article-title">
                                                                                    <a href="/blogs/news/bmw-i8-ham-ho-cua-xuong-do-ac-schnitzer">BMW
                                                                                        i8 hầm hố của xưởng độ AC
                                                                                        Schnitzer</a>
                                                                                </div>
                                                                                <div class="article-author">
                                                                                    <svg
                                                                                        class="svg-inline--fa fa-edit fa-w-18"
                                                                                        aria-hidden="true"
                                                                                        data-prefix="far"
                                                                                        data-icon="edit" role="img"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 576 512"
                                                                                        data-fa-i2svg="">
                                                                                        <path fill="currentColor"
                                                                                              d="M402.3 344.9l32-32c5-5 13.7-1.5 13.7 5.7V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h273.5c7.1 0 10.7 8.6 5.7 13.7l-32 32c-1.5 1.5-3.5 2.3-5.7 2.3H48v352h352V350.5c0-2.1.8-4.1 2.3-5.6zm156.6-201.8L296.3 405.7l-90.4 10c-26.2 2.9-48.5-19.2-45.6-45.6l10-90.4L432.9 17.1c22.9-22.9 59.9-22.9 82.7 0l43.2 43.2c22.9 22.9 22.9 60 .1 82.8zM460.1 174L402 115.9 216.2 301.8l-7.3 65.3 65.3-7.3L460.1 174zm64.8-79.7l-43.2-43.2c-4.1-4.1-10.8-4.1-14.8 0L436 82l58.1 58.1 30.9-30.9c4-4.2 4-10.8-.1-14.9z"></path>
                                                                                    </svg>
                                                                                    <!-- <i class="far fa-edit"></i> -->
                                                                                    Đăng bởi: <span>Suplo Bạc</span>
                                                                                </div>
                                                                                <div class="article-comment">
                                                                                    <svg
                                                                                        class="svg-inline--fa fa-comments fa-w-18"
                                                                                        aria-hidden="true"
                                                                                        data-prefix="far"
                                                                                        data-icon="comments" role="img"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 576 512"
                                                                                        data-fa-i2svg="">
                                                                                        <path fill="currentColor"
                                                                                              d="M574.507 443.86c-5.421 21.261-24.57 36.14-46.511 36.14-32.246 0-66.511-9.99-102.1-29.734-50.64 11.626-109.151 7.877-157.96-13.437 41.144-2.919 80.361-12.339 116.331-28.705 16.322-1.22 32.674-4.32 48.631-9.593C454.404 412.365 490.663 432 527.996 432c-32-17.455-43.219-38.958-46.159-58.502 25.443-18.848 46.159-47.183 46.159-81.135 0-10.495-2.383-21.536-7.041-32.467 7.405-25.93 8.656-50.194 5.185-73.938 32.164 30.461 49.856 69.128 49.856 106.405 0 33.893-12.913 65.047-34.976 91.119 2.653 2.038 5.924 4.176 9.962 6.378 19.261 10.508 28.947 32.739 23.525 54zM240.002 80C117.068 80 48.004 152.877 48.004 210.909c0 38.196 24.859 70.072 55.391 91.276-3.527 21.988-16.991 46.179-55.391 65.815 44.8 0 88.31-22.089 114.119-37.653 25.52 7.906 51.883 11.471 77.879 11.471C362.998 341.818 432 268.976 432 210.909 432 152.882 362.943 80 240.002 80m0-48C390.193 32 480 126.026 480 210.909c0 22.745-6.506 46.394-18.816 68.391-11.878 21.226-28.539 40.294-49.523 56.674-21.593 16.857-46.798 30.045-74.913 39.197-29.855 9.719-62.405 14.646-96.746 14.646-24.449 0-48.34-2.687-71.292-8.004C126.311 404.512 85.785 416 48.004 416c-22.18 0-41.472-15.197-46.665-36.761-5.194-21.563 5.064-43.878 24.811-53.976 7.663-3.918 13.324-7.737 17.519-11.294-7.393-7.829-13.952-16.124-19.634-24.844C8.09 264.655.005 238.339.005 210.909.005 126.259 89.508 32 240.002 32z"></path>
                                                                                    </svg>
                                                                                    <!-- <i class="far fa-comments"></i> -->
                                                                                    <span
                                                                                        class="fb-comments-count fb_comments_count_zero"
                                                                                        data-href="https://suplo-car-accesories.myharavan.com/blogs/news/bmw-i8-ham-ho-cua-xuong-do-ac-schnitzer"
                                                                                        fb-xfbml-state="rendered"><span
                                                                                            class="fb_comments_count">0</span></span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="article-desc medium--hide small--hide">

                                                                                Thông thường những mẫu xe thương mại sẽ
                                                                                dựa trên một bản concept khi sản xuất,
                                                                                tuy nhiên một số khác lại có gốc gác là
                                                                                những chiếc xe đua...

                                                                            </div>
                                                                            <a href="/blogs/news/bmw-i8-ham-ho-cua-xuong-do-ac-schnitzer"
                                                                               class="article-btn">Xem thêm</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="owl-item" style="width: 441.5px; margin-right: 10px;">
                                                        <div class="item">
                                                            <div class="article-item">
                                                                <div class="grid mg-left-10">
                                                                    <div
                                                                        class="grid__item large--one-half medium--one-whole small--one-whole pd-left10">
                                                                        <div class="article-img">
                                                                            <a href="/blogs/news/lexus-lc-co-them-ban-gioi-han-se-xuat-hien-tai-paris-motor-show">
                                                                                <img
                                                                                    src="//file.hstatic.net/1000305059/article/article_img511_large.jpg"
                                                                                    alt="Lexus LC có thêm bản giới hạn, sẽ xuất hiện tại Paris Motor Show Thông thường những mẫu xe thương mại sẽ dựa trên một bản concept">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="grid__item large--one-half medium--one-whole small--whole pd-left10">
                                                                        <div class="article-info-wrapper">
                                                                            <div class="article-info">
                                                                                <div class="article-date">
                                                                                    <span class="article-day">16</span>/
                                                                                    <span>08</span>/
                                                                                    <span>2018</span>
                                                                                </div>
                                                                                <div class="article-title">
                                                                                    <a href="/blogs/news/lexus-lc-co-them-ban-gioi-han-se-xuat-hien-tai-paris-motor-show">Lexus
                                                                                        LC có thêm bản giới hạn, sẽ xuất
                                                                                        hiện tại Paris Motor Show Thông
                                                                                        thườ...</a>
                                                                                </div>
                                                                                <div class="article-author">
                                                                                    <svg
                                                                                        class="svg-inline--fa fa-edit fa-w-18"
                                                                                        aria-hidden="true"
                                                                                        data-prefix="far"
                                                                                        data-icon="edit" role="img"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 576 512"
                                                                                        data-fa-i2svg="">
                                                                                        <path fill="currentColor"
                                                                                              d="M402.3 344.9l32-32c5-5 13.7-1.5 13.7 5.7V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h273.5c7.1 0 10.7 8.6 5.7 13.7l-32 32c-1.5 1.5-3.5 2.3-5.7 2.3H48v352h352V350.5c0-2.1.8-4.1 2.3-5.6zm156.6-201.8L296.3 405.7l-90.4 10c-26.2 2.9-48.5-19.2-45.6-45.6l10-90.4L432.9 17.1c22.9-22.9 59.9-22.9 82.7 0l43.2 43.2c22.9 22.9 22.9 60 .1 82.8zM460.1 174L402 115.9 216.2 301.8l-7.3 65.3 65.3-7.3L460.1 174zm64.8-79.7l-43.2-43.2c-4.1-4.1-10.8-4.1-14.8 0L436 82l58.1 58.1 30.9-30.9c4-4.2 4-10.8-.1-14.9z"></path>
                                                                                    </svg>
                                                                                    <!-- <i class="far fa-edit"></i> -->
                                                                                    Đăng bởi: <span>Suplo Bạc</span>
                                                                                </div>
                                                                                <div class="article-comment">
                                                                                    <svg
                                                                                        class="svg-inline--fa fa-comments fa-w-18"
                                                                                        aria-hidden="true"
                                                                                        data-prefix="far"
                                                                                        data-icon="comments" role="img"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 576 512"
                                                                                        data-fa-i2svg="">
                                                                                        <path fill="currentColor"
                                                                                              d="M574.507 443.86c-5.421 21.261-24.57 36.14-46.511 36.14-32.246 0-66.511-9.99-102.1-29.734-50.64 11.626-109.151 7.877-157.96-13.437 41.144-2.919 80.361-12.339 116.331-28.705 16.322-1.22 32.674-4.32 48.631-9.593C454.404 412.365 490.663 432 527.996 432c-32-17.455-43.219-38.958-46.159-58.502 25.443-18.848 46.159-47.183 46.159-81.135 0-10.495-2.383-21.536-7.041-32.467 7.405-25.93 8.656-50.194 5.185-73.938 32.164 30.461 49.856 69.128 49.856 106.405 0 33.893-12.913 65.047-34.976 91.119 2.653 2.038 5.924 4.176 9.962 6.378 19.261 10.508 28.947 32.739 23.525 54zM240.002 80C117.068 80 48.004 152.877 48.004 210.909c0 38.196 24.859 70.072 55.391 91.276-3.527 21.988-16.991 46.179-55.391 65.815 44.8 0 88.31-22.089 114.119-37.653 25.52 7.906 51.883 11.471 77.879 11.471C362.998 341.818 432 268.976 432 210.909 432 152.882 362.943 80 240.002 80m0-48C390.193 32 480 126.026 480 210.909c0 22.745-6.506 46.394-18.816 68.391-11.878 21.226-28.539 40.294-49.523 56.674-21.593 16.857-46.798 30.045-74.913 39.197-29.855 9.719-62.405 14.646-96.746 14.646-24.449 0-48.34-2.687-71.292-8.004C126.311 404.512 85.785 416 48.004 416c-22.18 0-41.472-15.197-46.665-36.761-5.194-21.563 5.064-43.878 24.811-53.976 7.663-3.918 13.324-7.737 17.519-11.294-7.393-7.829-13.952-16.124-19.634-24.844C8.09 264.655.005 238.339.005 210.909.005 126.259 89.508 32 240.002 32z"></path>
                                                                                    </svg>
                                                                                    <!-- <i class="far fa-comments"></i> -->
                                                                                    <span
                                                                                        class="fb-comments-count fb_comments_count_zero"
                                                                                        data-href="https://suplo-car-accesories.myharavan.com/blogs/news/lexus-lc-co-them-ban-gioi-han-se-xuat-hien-tai-paris-motor-show"
                                                                                        fb-xfbml-state="rendered"><span
                                                                                            class="fb_comments_count">0</span></span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="article-desc medium--hide small--hide">

                                                                                Thông thường những mẫu xe thương mại sẽ
                                                                                dựa trên một bản concept khi sản xuất,
                                                                                tuy nhiên một số khác lại có gốc gác là
                                                                                những chiếc xe đua...

                                                                            </div>
                                                                            <a href="/blogs/news/lexus-lc-co-them-ban-gioi-han-se-xuat-hien-tai-paris-motor-show"
                                                                               class="article-btn">Xem thêm</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="owl-item" style="width: 441.5px; margin-right: 10px;">
                                                        <div class="item">
                                                            <div class="article-item">
                                                                <div class="grid mg-left-10">
                                                                    <div
                                                                        class="grid__item large--one-half medium--one-whole small--one-whole pd-left10">
                                                                        <div class="article-img">
                                                                            <a href="/blogs/news/xe-dua-dien-spice-x-sx1-gia-binh-dan-tu-italy">
                                                                                <img
                                                                                    src="//file.hstatic.net/1000305059/article/article_img4111_large.jpg"
                                                                                    alt="Xe đua điện Spice-X SX1 giá bình dân từ Italy">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="grid__item large--one-half medium--one-whole small--whole pd-left10">
                                                                        <div class="article-info-wrapper">
                                                                            <div class="article-info">
                                                                                <div class="article-date">
                                                                                    <span class="article-day">16</span>/
                                                                                    <span>08</span>/
                                                                                    <span>2018</span>
                                                                                </div>
                                                                                <div class="article-title">
                                                                                    <a href="/blogs/news/xe-dua-dien-spice-x-sx1-gia-binh-dan-tu-italy">Xe
                                                                                        đua điện Spice-X SX1 giá bình
                                                                                        dân từ Italy</a>
                                                                                </div>
                                                                                <div class="article-author">
                                                                                    <svg
                                                                                        class="svg-inline--fa fa-edit fa-w-18"
                                                                                        aria-hidden="true"
                                                                                        data-prefix="far"
                                                                                        data-icon="edit" role="img"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 576 512"
                                                                                        data-fa-i2svg="">
                                                                                        <path fill="currentColor"
                                                                                              d="M402.3 344.9l32-32c5-5 13.7-1.5 13.7 5.7V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h273.5c7.1 0 10.7 8.6 5.7 13.7l-32 32c-1.5 1.5-3.5 2.3-5.7 2.3H48v352h352V350.5c0-2.1.8-4.1 2.3-5.6zm156.6-201.8L296.3 405.7l-90.4 10c-26.2 2.9-48.5-19.2-45.6-45.6l10-90.4L432.9 17.1c22.9-22.9 59.9-22.9 82.7 0l43.2 43.2c22.9 22.9 22.9 60 .1 82.8zM460.1 174L402 115.9 216.2 301.8l-7.3 65.3 65.3-7.3L460.1 174zm64.8-79.7l-43.2-43.2c-4.1-4.1-10.8-4.1-14.8 0L436 82l58.1 58.1 30.9-30.9c4-4.2 4-10.8-.1-14.9z"></path>
                                                                                    </svg>
                                                                                    <!-- <i class="far fa-edit"></i> -->
                                                                                    Đăng bởi: <span>Suplo Bạc</span>
                                                                                </div>
                                                                                <div class="article-comment">
                                                                                    <svg
                                                                                        class="svg-inline--fa fa-comments fa-w-18"
                                                                                        aria-hidden="true"
                                                                                        data-prefix="far"
                                                                                        data-icon="comments" role="img"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 576 512"
                                                                                        data-fa-i2svg="">
                                                                                        <path fill="currentColor"
                                                                                              d="M574.507 443.86c-5.421 21.261-24.57 36.14-46.511 36.14-32.246 0-66.511-9.99-102.1-29.734-50.64 11.626-109.151 7.877-157.96-13.437 41.144-2.919 80.361-12.339 116.331-28.705 16.322-1.22 32.674-4.32 48.631-9.593C454.404 412.365 490.663 432 527.996 432c-32-17.455-43.219-38.958-46.159-58.502 25.443-18.848 46.159-47.183 46.159-81.135 0-10.495-2.383-21.536-7.041-32.467 7.405-25.93 8.656-50.194 5.185-73.938 32.164 30.461 49.856 69.128 49.856 106.405 0 33.893-12.913 65.047-34.976 91.119 2.653 2.038 5.924 4.176 9.962 6.378 19.261 10.508 28.947 32.739 23.525 54zM240.002 80C117.068 80 48.004 152.877 48.004 210.909c0 38.196 24.859 70.072 55.391 91.276-3.527 21.988-16.991 46.179-55.391 65.815 44.8 0 88.31-22.089 114.119-37.653 25.52 7.906 51.883 11.471 77.879 11.471C362.998 341.818 432 268.976 432 210.909 432 152.882 362.943 80 240.002 80m0-48C390.193 32 480 126.026 480 210.909c0 22.745-6.506 46.394-18.816 68.391-11.878 21.226-28.539 40.294-49.523 56.674-21.593 16.857-46.798 30.045-74.913 39.197-29.855 9.719-62.405 14.646-96.746 14.646-24.449 0-48.34-2.687-71.292-8.004C126.311 404.512 85.785 416 48.004 416c-22.18 0-41.472-15.197-46.665-36.761-5.194-21.563 5.064-43.878 24.811-53.976 7.663-3.918 13.324-7.737 17.519-11.294-7.393-7.829-13.952-16.124-19.634-24.844C8.09 264.655.005 238.339.005 210.909.005 126.259 89.508 32 240.002 32z"></path>
                                                                                    </svg>
                                                                                    <!-- <i class="far fa-comments"></i> -->
                                                                                    <span
                                                                                        class="fb-comments-count fb_comments_count_zero"
                                                                                        data-href="https://suplo-car-accesories.myharavan.com/blogs/news/xe-dua-dien-spice-x-sx1-gia-binh-dan-tu-italy"
                                                                                        fb-xfbml-state="rendered"><span
                                                                                            class="fb_comments_count">0</span></span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="article-desc medium--hide small--hide">

                                                                                Thông thường những mẫu xe thương mại sẽ
                                                                                dựa trên một bản concept khi sản xuất,
                                                                                tuy nhiên một số khác lại có gốc gác là
                                                                                những chiếc xe đua...

                                                                            </div>
                                                                            <a href="/blogs/news/xe-dua-dien-spice-x-sx1-gia-binh-dan-tu-italy"
                                                                               class="article-btn">Xem thêm</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="owl-item" style="width: 441.5px; margin-right: 10px;">
                                                        <div class="item">
                                                            <div class="article-item">
                                                                <div class="grid mg-left-10">
                                                                    <div
                                                                        class="grid__item large--one-half medium--one-whole small--one-whole pd-left10">
                                                                        <div class="article-img">
                                                                            <a href="/blogs/news/ban-mot-chiec-sieu-xe-ferrari-thu-loi-80-000-usd">
                                                                                <img
                                                                                    src="//file.hstatic.net/1000305059/article/article_img311_large.jpg"
                                                                                    alt="Bán một chiếc siêu xe, Ferrari thu lời 80.000 USD">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="grid__item large--one-half medium--one-whole small--whole pd-left10">
                                                                        <div class="article-info-wrapper">
                                                                            <div class="article-info">
                                                                                <div class="article-date">
                                                                                    <span class="article-day">16</span>/
                                                                                    <span>08</span>/
                                                                                    <span>2018</span>
                                                                                </div>
                                                                                <div class="article-title">
                                                                                    <a href="/blogs/news/ban-mot-chiec-sieu-xe-ferrari-thu-loi-80-000-usd">Bán
                                                                                        một chiếc siêu xe, Ferrari thu
                                                                                        lời 80.000 USD</a>
                                                                                </div>
                                                                                <div class="article-author">
                                                                                    <svg
                                                                                        class="svg-inline--fa fa-edit fa-w-18"
                                                                                        aria-hidden="true"
                                                                                        data-prefix="far"
                                                                                        data-icon="edit" role="img"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 576 512"
                                                                                        data-fa-i2svg="">
                                                                                        <path fill="currentColor"
                                                                                              d="M402.3 344.9l32-32c5-5 13.7-1.5 13.7 5.7V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h273.5c7.1 0 10.7 8.6 5.7 13.7l-32 32c-1.5 1.5-3.5 2.3-5.7 2.3H48v352h352V350.5c0-2.1.8-4.1 2.3-5.6zm156.6-201.8L296.3 405.7l-90.4 10c-26.2 2.9-48.5-19.2-45.6-45.6l10-90.4L432.9 17.1c22.9-22.9 59.9-22.9 82.7 0l43.2 43.2c22.9 22.9 22.9 60 .1 82.8zM460.1 174L402 115.9 216.2 301.8l-7.3 65.3 65.3-7.3L460.1 174zm64.8-79.7l-43.2-43.2c-4.1-4.1-10.8-4.1-14.8 0L436 82l58.1 58.1 30.9-30.9c4-4.2 4-10.8-.1-14.9z"></path>
                                                                                    </svg>
                                                                                    <!-- <i class="far fa-edit"></i> -->
                                                                                    Đăng bởi: <span>Suplo Bạc</span>
                                                                                </div>
                                                                                <div class="article-comment">
                                                                                    <svg
                                                                                        class="svg-inline--fa fa-comments fa-w-18"
                                                                                        aria-hidden="true"
                                                                                        data-prefix="far"
                                                                                        data-icon="comments" role="img"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 576 512"
                                                                                        data-fa-i2svg="">
                                                                                        <path fill="currentColor"
                                                                                              d="M574.507 443.86c-5.421 21.261-24.57 36.14-46.511 36.14-32.246 0-66.511-9.99-102.1-29.734-50.64 11.626-109.151 7.877-157.96-13.437 41.144-2.919 80.361-12.339 116.331-28.705 16.322-1.22 32.674-4.32 48.631-9.593C454.404 412.365 490.663 432 527.996 432c-32-17.455-43.219-38.958-46.159-58.502 25.443-18.848 46.159-47.183 46.159-81.135 0-10.495-2.383-21.536-7.041-32.467 7.405-25.93 8.656-50.194 5.185-73.938 32.164 30.461 49.856 69.128 49.856 106.405 0 33.893-12.913 65.047-34.976 91.119 2.653 2.038 5.924 4.176 9.962 6.378 19.261 10.508 28.947 32.739 23.525 54zM240.002 80C117.068 80 48.004 152.877 48.004 210.909c0 38.196 24.859 70.072 55.391 91.276-3.527 21.988-16.991 46.179-55.391 65.815 44.8 0 88.31-22.089 114.119-37.653 25.52 7.906 51.883 11.471 77.879 11.471C362.998 341.818 432 268.976 432 210.909 432 152.882 362.943 80 240.002 80m0-48C390.193 32 480 126.026 480 210.909c0 22.745-6.506 46.394-18.816 68.391-11.878 21.226-28.539 40.294-49.523 56.674-21.593 16.857-46.798 30.045-74.913 39.197-29.855 9.719-62.405 14.646-96.746 14.646-24.449 0-48.34-2.687-71.292-8.004C126.311 404.512 85.785 416 48.004 416c-22.18 0-41.472-15.197-46.665-36.761-5.194-21.563 5.064-43.878 24.811-53.976 7.663-3.918 13.324-7.737 17.519-11.294-7.393-7.829-13.952-16.124-19.634-24.844C8.09 264.655.005 238.339.005 210.909.005 126.259 89.508 32 240.002 32z"></path>
                                                                                    </svg>
                                                                                    <!-- <i class="far fa-comments"></i> -->
                                                                                    <span
                                                                                        class="fb-comments-count fb_comments_count_zero"
                                                                                        data-href="https://suplo-car-accesories.myharavan.com/blogs/news/ban-mot-chiec-sieu-xe-ferrari-thu-loi-80-000-usd"
                                                                                        fb-xfbml-state="rendered"><span
                                                                                            class="fb_comments_count">0</span></span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="article-desc medium--hide small--hide">

                                                                                Thông thường những mẫu xe thương mại sẽ
                                                                                dựa trên một bản concept khi sản xuất,
                                                                                tuy nhiên một số khác lại có gốc gác là
                                                                                những chiếc xe đua...

                                                                            </div>
                                                                            <a href="/blogs/news/ban-mot-chiec-sieu-xe-ferrari-thu-loi-80-000-usd"
                                                                               class="article-btn">Xem thêm</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="owl-item" style="width: 441.5px; margin-right: 10px;">
                                                        <div class="item">
                                                            <div class="article-item">
                                                                <div class="grid mg-left-10">
                                                                    <div
                                                                        class="grid__item large--one-half medium--one-whole small--one-whole pd-left10">
                                                                        <div class="article-img">
                                                                            <a href="/blogs/news/anh-mitsubishi-xpander-gia-tot-thiet-ke-dep-dong-co-nho-1">
                                                                                <img
                                                                                    src="//file.hstatic.net/1000305059/article/article_img2_large.jpg"
                                                                                    alt="Ảnh Mitsubishi Xpander: Giá tốt, thiết kế đẹp, động cơ nhỏ">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="grid__item large--one-half medium--one-whole small--whole pd-left10">
                                                                        <div class="article-info-wrapper">
                                                                            <div class="article-info">
                                                                                <div class="article-date">
                                                                                    <span class="article-day">10</span>/
                                                                                    <span>08</span>/
                                                                                    <span>2018</span>
                                                                                </div>
                                                                                <div class="article-title">
                                                                                    <a href="/blogs/news/anh-mitsubishi-xpander-gia-tot-thiet-ke-dep-dong-co-nho-1">Ảnh
                                                                                        Mitsubishi Xpander: Giá tốt,
                                                                                        thiết kế đẹp, động cơ nhỏ</a>
                                                                                </div>
                                                                                <div class="article-author">
                                                                                    <svg
                                                                                        class="svg-inline--fa fa-edit fa-w-18"
                                                                                        aria-hidden="true"
                                                                                        data-prefix="far"
                                                                                        data-icon="edit" role="img"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 576 512"
                                                                                        data-fa-i2svg="">
                                                                                        <path fill="currentColor"
                                                                                              d="M402.3 344.9l32-32c5-5 13.7-1.5 13.7 5.7V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h273.5c7.1 0 10.7 8.6 5.7 13.7l-32 32c-1.5 1.5-3.5 2.3-5.7 2.3H48v352h352V350.5c0-2.1.8-4.1 2.3-5.6zm156.6-201.8L296.3 405.7l-90.4 10c-26.2 2.9-48.5-19.2-45.6-45.6l10-90.4L432.9 17.1c22.9-22.9 59.9-22.9 82.7 0l43.2 43.2c22.9 22.9 22.9 60 .1 82.8zM460.1 174L402 115.9 216.2 301.8l-7.3 65.3 65.3-7.3L460.1 174zm64.8-79.7l-43.2-43.2c-4.1-4.1-10.8-4.1-14.8 0L436 82l58.1 58.1 30.9-30.9c4-4.2 4-10.8-.1-14.9z"></path>
                                                                                    </svg>
                                                                                    <!-- <i class="far fa-edit"></i> -->
                                                                                    Đăng bởi: <span>Suplo Bạc</span>
                                                                                </div>
                                                                                <div class="article-comment">
                                                                                    <svg
                                                                                        class="svg-inline--fa fa-comments fa-w-18"
                                                                                        aria-hidden="true"
                                                                                        data-prefix="far"
                                                                                        data-icon="comments" role="img"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 576 512"
                                                                                        data-fa-i2svg="">
                                                                                        <path fill="currentColor"
                                                                                              d="M574.507 443.86c-5.421 21.261-24.57 36.14-46.511 36.14-32.246 0-66.511-9.99-102.1-29.734-50.64 11.626-109.151 7.877-157.96-13.437 41.144-2.919 80.361-12.339 116.331-28.705 16.322-1.22 32.674-4.32 48.631-9.593C454.404 412.365 490.663 432 527.996 432c-32-17.455-43.219-38.958-46.159-58.502 25.443-18.848 46.159-47.183 46.159-81.135 0-10.495-2.383-21.536-7.041-32.467 7.405-25.93 8.656-50.194 5.185-73.938 32.164 30.461 49.856 69.128 49.856 106.405 0 33.893-12.913 65.047-34.976 91.119 2.653 2.038 5.924 4.176 9.962 6.378 19.261 10.508 28.947 32.739 23.525 54zM240.002 80C117.068 80 48.004 152.877 48.004 210.909c0 38.196 24.859 70.072 55.391 91.276-3.527 21.988-16.991 46.179-55.391 65.815 44.8 0 88.31-22.089 114.119-37.653 25.52 7.906 51.883 11.471 77.879 11.471C362.998 341.818 432 268.976 432 210.909 432 152.882 362.943 80 240.002 80m0-48C390.193 32 480 126.026 480 210.909c0 22.745-6.506 46.394-18.816 68.391-11.878 21.226-28.539 40.294-49.523 56.674-21.593 16.857-46.798 30.045-74.913 39.197-29.855 9.719-62.405 14.646-96.746 14.646-24.449 0-48.34-2.687-71.292-8.004C126.311 404.512 85.785 416 48.004 416c-22.18 0-41.472-15.197-46.665-36.761-5.194-21.563 5.064-43.878 24.811-53.976 7.663-3.918 13.324-7.737 17.519-11.294-7.393-7.829-13.952-16.124-19.634-24.844C8.09 264.655.005 238.339.005 210.909.005 126.259 89.508 32 240.002 32z"></path>
                                                                                    </svg>
                                                                                    <!-- <i class="far fa-comments"></i> -->
                                                                                    <span
                                                                                        class="fb-comments-count fb_comments_count_zero"
                                                                                        data-href="https://suplo-car-accesories.myharavan.com/blogs/news/anh-mitsubishi-xpander-gia-tot-thiet-ke-dep-dong-co-nho-1"
                                                                                        fb-xfbml-state="rendered"><span
                                                                                            class="fb_comments_count">0</span></span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="article-desc medium--hide small--hide">

                                                                                Thông thường những mẫu xe thương mại sẽ
                                                                                dựa trên một bản concept khi sản xuất,
                                                                                tuy nhiên một số khác lại có gốc gác là
                                                                                những chiếc xe đua...

                                                                            </div>
                                                                            <a href="/blogs/news/anh-mitsubishi-xpander-gia-tot-thiet-ke-dep-dong-co-nho-1"
                                                                               class="article-btn">Xem thêm</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="owl-item" style="width: 441.5px; margin-right: 10px;">
                                                        <div class="item">
                                                            <div class="article-item">
                                                                <div class="grid mg-left-10">
                                                                    <div
                                                                        class="grid__item large--one-half medium--one-whole small--one-whole pd-left10">
                                                                        <div class="article-img">
                                                                            <a href="/blogs/news/bo-doi-peugeot-5008-3008-tang-thoi-han-bao-hanh-chinh-hang-len-5-nam">
                                                                                <img
                                                                                    src="//file.hstatic.net/1000305059/article/article_img1_large.jpg"
                                                                                    alt="10 mẫu xe thương mại có xuất thân từ xe đua">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="grid__item large--one-half medium--one-whole small--whole pd-left10">
                                                                        <div class="article-info-wrapper">
                                                                            <div class="article-info">
                                                                                <div class="article-date">
                                                                                    <span class="article-day">10</span>/
                                                                                    <span>08</span>/
                                                                                    <span>2018</span>
                                                                                </div>
                                                                                <div class="article-title">
                                                                                    <a href="/blogs/news/bo-doi-peugeot-5008-3008-tang-thoi-han-bao-hanh-chinh-hang-len-5-nam">10
                                                                                        mẫu xe thương mại có xuất thân
                                                                                        từ xe đua</a>
                                                                                </div>
                                                                                <div class="article-author">
                                                                                    <svg
                                                                                        class="svg-inline--fa fa-edit fa-w-18"
                                                                                        aria-hidden="true"
                                                                                        data-prefix="far"
                                                                                        data-icon="edit" role="img"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 576 512"
                                                                                        data-fa-i2svg="">
                                                                                        <path fill="currentColor"
                                                                                              d="M402.3 344.9l32-32c5-5 13.7-1.5 13.7 5.7V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h273.5c7.1 0 10.7 8.6 5.7 13.7l-32 32c-1.5 1.5-3.5 2.3-5.7 2.3H48v352h352V350.5c0-2.1.8-4.1 2.3-5.6zm156.6-201.8L296.3 405.7l-90.4 10c-26.2 2.9-48.5-19.2-45.6-45.6l10-90.4L432.9 17.1c22.9-22.9 59.9-22.9 82.7 0l43.2 43.2c22.9 22.9 22.9 60 .1 82.8zM460.1 174L402 115.9 216.2 301.8l-7.3 65.3 65.3-7.3L460.1 174zm64.8-79.7l-43.2-43.2c-4.1-4.1-10.8-4.1-14.8 0L436 82l58.1 58.1 30.9-30.9c4-4.2 4-10.8-.1-14.9z"></path>
                                                                                    </svg>
                                                                                    <!-- <i class="far fa-edit"></i> -->
                                                                                    Đăng bởi: <span>Suplo Bạc</span>
                                                                                </div>
                                                                                <div class="article-comment">
                                                                                    <svg
                                                                                        class="svg-inline--fa fa-comments fa-w-18"
                                                                                        aria-hidden="true"
                                                                                        data-prefix="far"
                                                                                        data-icon="comments" role="img"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 576 512"
                                                                                        data-fa-i2svg="">
                                                                                        <path fill="currentColor"
                                                                                              d="M574.507 443.86c-5.421 21.261-24.57 36.14-46.511 36.14-32.246 0-66.511-9.99-102.1-29.734-50.64 11.626-109.151 7.877-157.96-13.437 41.144-2.919 80.361-12.339 116.331-28.705 16.322-1.22 32.674-4.32 48.631-9.593C454.404 412.365 490.663 432 527.996 432c-32-17.455-43.219-38.958-46.159-58.502 25.443-18.848 46.159-47.183 46.159-81.135 0-10.495-2.383-21.536-7.041-32.467 7.405-25.93 8.656-50.194 5.185-73.938 32.164 30.461 49.856 69.128 49.856 106.405 0 33.893-12.913 65.047-34.976 91.119 2.653 2.038 5.924 4.176 9.962 6.378 19.261 10.508 28.947 32.739 23.525 54zM240.002 80C117.068 80 48.004 152.877 48.004 210.909c0 38.196 24.859 70.072 55.391 91.276-3.527 21.988-16.991 46.179-55.391 65.815 44.8 0 88.31-22.089 114.119-37.653 25.52 7.906 51.883 11.471 77.879 11.471C362.998 341.818 432 268.976 432 210.909 432 152.882 362.943 80 240.002 80m0-48C390.193 32 480 126.026 480 210.909c0 22.745-6.506 46.394-18.816 68.391-11.878 21.226-28.539 40.294-49.523 56.674-21.593 16.857-46.798 30.045-74.913 39.197-29.855 9.719-62.405 14.646-96.746 14.646-24.449 0-48.34-2.687-71.292-8.004C126.311 404.512 85.785 416 48.004 416c-22.18 0-41.472-15.197-46.665-36.761-5.194-21.563 5.064-43.878 24.811-53.976 7.663-3.918 13.324-7.737 17.519-11.294-7.393-7.829-13.952-16.124-19.634-24.844C8.09 264.655.005 238.339.005 210.909.005 126.259 89.508 32 240.002 32z"></path>
                                                                                    </svg>
                                                                                    <!-- <i class="far fa-comments"></i> -->
                                                                                    <span
                                                                                        class="fb-comments-count fb_comments_count_zero"
                                                                                        data-href="https://suplo-car-accesories.myharavan.com/blogs/news/bo-doi-peugeot-5008-3008-tang-thoi-han-bao-hanh-chinh-hang-len-5-nam"
                                                                                        fb-xfbml-state="rendered"><span
                                                                                            class="fb_comments_count">0</span></span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="article-desc medium--hide small--hide">

                                                                                Thông thường những mẫu xe thương mại sẽ
                                                                                dựa trên một bản concept khi sản xuất,
                                                                                tuy nhiên một số khác lại có gốc gác là
                                                                                những chiếc xe đua...

                                                                            </div>
                                                                            <a href="/blogs/news/bo-doi-peugeot-5008-3008-tang-thoi-han-bao-hanh-chinh-hang-len-5-nam"
                                                                               class="article-btn">Xem thêm</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-nav">
                                                <div class="owl-prev">
                                                    <svg class="svg-inline--fa fa-angle-left fa-w-8" aria-hidden="true"
                                                         data-prefix="fa" data-icon="angle-left" role="img"
                                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                         data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                              d="M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z"></path>
                                                    </svg><!-- <i class="fa fa-angle-left" aria-hidden="true"></i> -->
                                                </div>
                                                <div class="owl-next">
                                                    <svg class="svg-inline--fa fa-angle-right fa-w-8" aria-hidden="true"
                                                         data-prefix="fa" data-icon="angle-right" role="img"
                                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                         data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                              d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path>
                                                    </svg><!-- <i class="fa fa-angle-right" aria-hidden="true"></i> -->
                                                </div>
                                            </div>
                                            <div class="owl-dots disabled"></div>
                                        </div>

                                    </div>
                                </div>


                                <div class="blog-single-item">

                                    <div class="blog-single-slider">

                                        <div id="owl-blog-single-slider2"
                                             class="owl-carousel owl-theme owl-loaded owl-drag">


                                            <div class="owl-stage-outer">
                                                <div class="owl-stage"
                                                     style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 903px;">
                                                    <div class="owl-item active"
                                                         style="width: 441.5px; margin-right: 10px;">
                                                        <div class="item">
                                                            <div class="article-item">
                                                                <div class="grid mg-left-10">
                                                                    <div
                                                                        class="grid__item large--one-half medium--one-whole small--one-whole pd-left10">
                                                                        <div class="article-img">
                                                                            <a href="/blogs/tin-sieu-xe/anh-mitsubishi-xpander-gia-tot-thiet-ke-dep-dong-co-nho">
                                                                                <img
                                                                                    src="//file.hstatic.net/1000305059/article/article_img2_7825224222f8481d9ea927497d67b116_large.jpg"
                                                                                    alt="Ảnh Mitsubishi Xpander: Giá tốt, thiết kế đẹp, động cơ nhỏ">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="grid__item large--one-half medium--one-whole small--whole pd-left10">
                                                                        <div class="article-info-wrapper">
                                                                            <div class="article-info">
                                                                                <div class="article-date">
                                                                                    <span class="article-day">17</span>/
                                                                                    <span>08</span>/
                                                                                    <span>2018</span>
                                                                                </div>
                                                                                <div class="article-title">
                                                                                    <a href="/blogs/tin-sieu-xe/anh-mitsubishi-xpander-gia-tot-thiet-ke-dep-dong-co-nho">Ảnh
                                                                                        Mitsubishi Xpander: Giá tốt,
                                                                                        thiết kế đẹp, động cơ nhỏ</a>
                                                                                </div>
                                                                                <div class="article-author">
                                                                                    <svg
                                                                                        class="svg-inline--fa fa-edit fa-w-18"
                                                                                        aria-hidden="true"
                                                                                        data-prefix="far"
                                                                                        data-icon="edit" role="img"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 576 512"
                                                                                        data-fa-i2svg="">
                                                                                        <path fill="currentColor"
                                                                                              d="M402.3 344.9l32-32c5-5 13.7-1.5 13.7 5.7V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h273.5c7.1 0 10.7 8.6 5.7 13.7l-32 32c-1.5 1.5-3.5 2.3-5.7 2.3H48v352h352V350.5c0-2.1.8-4.1 2.3-5.6zm156.6-201.8L296.3 405.7l-90.4 10c-26.2 2.9-48.5-19.2-45.6-45.6l10-90.4L432.9 17.1c22.9-22.9 59.9-22.9 82.7 0l43.2 43.2c22.9 22.9 22.9 60 .1 82.8zM460.1 174L402 115.9 216.2 301.8l-7.3 65.3 65.3-7.3L460.1 174zm64.8-79.7l-43.2-43.2c-4.1-4.1-10.8-4.1-14.8 0L436 82l58.1 58.1 30.9-30.9c4-4.2 4-10.8-.1-14.9z"></path>
                                                                                    </svg>
                                                                                    <!-- <i class="far fa-edit"></i> -->
                                                                                    Đăng bởi: <span>Suplo Bạc</span>
                                                                                </div>
                                                                                <div class="article-comment">
                                                                                    <svg
                                                                                        class="svg-inline--fa fa-comments fa-w-18"
                                                                                        aria-hidden="true"
                                                                                        data-prefix="far"
                                                                                        data-icon="comments" role="img"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 576 512"
                                                                                        data-fa-i2svg="">
                                                                                        <path fill="currentColor"
                                                                                              d="M574.507 443.86c-5.421 21.261-24.57 36.14-46.511 36.14-32.246 0-66.511-9.99-102.1-29.734-50.64 11.626-109.151 7.877-157.96-13.437 41.144-2.919 80.361-12.339 116.331-28.705 16.322-1.22 32.674-4.32 48.631-9.593C454.404 412.365 490.663 432 527.996 432c-32-17.455-43.219-38.958-46.159-58.502 25.443-18.848 46.159-47.183 46.159-81.135 0-10.495-2.383-21.536-7.041-32.467 7.405-25.93 8.656-50.194 5.185-73.938 32.164 30.461 49.856 69.128 49.856 106.405 0 33.893-12.913 65.047-34.976 91.119 2.653 2.038 5.924 4.176 9.962 6.378 19.261 10.508 28.947 32.739 23.525 54zM240.002 80C117.068 80 48.004 152.877 48.004 210.909c0 38.196 24.859 70.072 55.391 91.276-3.527 21.988-16.991 46.179-55.391 65.815 44.8 0 88.31-22.089 114.119-37.653 25.52 7.906 51.883 11.471 77.879 11.471C362.998 341.818 432 268.976 432 210.909 432 152.882 362.943 80 240.002 80m0-48C390.193 32 480 126.026 480 210.909c0 22.745-6.506 46.394-18.816 68.391-11.878 21.226-28.539 40.294-49.523 56.674-21.593 16.857-46.798 30.045-74.913 39.197-29.855 9.719-62.405 14.646-96.746 14.646-24.449 0-48.34-2.687-71.292-8.004C126.311 404.512 85.785 416 48.004 416c-22.18 0-41.472-15.197-46.665-36.761-5.194-21.563 5.064-43.878 24.811-53.976 7.663-3.918 13.324-7.737 17.519-11.294-7.393-7.829-13.952-16.124-19.634-24.844C8.09 264.655.005 238.339.005 210.909.005 126.259 89.508 32 240.002 32z"></path>
                                                                                    </svg>
                                                                                    <!-- <i class="far fa-comments"></i> -->
                                                                                    <span
                                                                                        class="fb-comments-count fb_comments_count_zero"
                                                                                        data-href="https://suplo-car-accesories.myharavan.com/blogs/tin-sieu-xe/anh-mitsubishi-xpander-gia-tot-thiet-ke-dep-dong-co-nho"
                                                                                        fb-xfbml-state="rendered"><span
                                                                                            class="fb_comments_count">0</span></span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="article-desc medium--hide small--hide">

                                                                                Thông thường những mẫu xe thương mại sẽ
                                                                                dựa trên một bản concept khi sản xuất,
                                                                                tuy nhiên một số khác lại có gốc gác là
                                                                                những chiếc xe đua...

                                                                            </div>
                                                                            <a href="/blogs/tin-sieu-xe/anh-mitsubishi-xpander-gia-tot-thiet-ke-dep-dong-co-nho"
                                                                               class="article-btn">Xem thêm</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="owl-item active"
                                                         style="width: 441.5px; margin-right: 10px;">
                                                        <div class="item">
                                                            <div class="article-item">
                                                                <div class="grid mg-left-10">
                                                                    <div
                                                                        class="grid__item large--one-half medium--one-whole small--one-whole pd-left10">
                                                                        <div class="article-img">
                                                                            <a href="/blogs/tin-sieu-xe/sieu-xe-nua-trieu-usd-co-nguy-co-roi-banh-ra-duong">
                                                                                <img
                                                                                    src="//file.hstatic.net/1000305059/article/article_img1_b513636a95a44c3c881b3cb962687b7b_large.jpg"
                                                                                    alt="Siêu xe nửa triệu USD có nguy cơ rơi bánh ra đường">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="grid__item large--one-half medium--one-whole small--whole pd-left10">
                                                                        <div class="article-info-wrapper">
                                                                            <div class="article-info">
                                                                                <div class="article-date">
                                                                                    <span class="article-day">17</span>/
                                                                                    <span>08</span>/
                                                                                    <span>2018</span>
                                                                                </div>
                                                                                <div class="article-title">
                                                                                    <a href="/blogs/tin-sieu-xe/sieu-xe-nua-trieu-usd-co-nguy-co-roi-banh-ra-duong">Siêu
                                                                                        xe nửa triệu USD có nguy cơ rơi
                                                                                        bánh ra đường</a>
                                                                                </div>
                                                                                <div class="article-author">
                                                                                    <svg
                                                                                        class="svg-inline--fa fa-edit fa-w-18"
                                                                                        aria-hidden="true"
                                                                                        data-prefix="far"
                                                                                        data-icon="edit" role="img"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 576 512"
                                                                                        data-fa-i2svg="">
                                                                                        <path fill="currentColor"
                                                                                              d="M402.3 344.9l32-32c5-5 13.7-1.5 13.7 5.7V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h273.5c7.1 0 10.7 8.6 5.7 13.7l-32 32c-1.5 1.5-3.5 2.3-5.7 2.3H48v352h352V350.5c0-2.1.8-4.1 2.3-5.6zm156.6-201.8L296.3 405.7l-90.4 10c-26.2 2.9-48.5-19.2-45.6-45.6l10-90.4L432.9 17.1c22.9-22.9 59.9-22.9 82.7 0l43.2 43.2c22.9 22.9 22.9 60 .1 82.8zM460.1 174L402 115.9 216.2 301.8l-7.3 65.3 65.3-7.3L460.1 174zm64.8-79.7l-43.2-43.2c-4.1-4.1-10.8-4.1-14.8 0L436 82l58.1 58.1 30.9-30.9c4-4.2 4-10.8-.1-14.9z"></path>
                                                                                    </svg>
                                                                                    <!-- <i class="far fa-edit"></i> -->
                                                                                    Đăng bởi: <span>Suplo Bạc</span>
                                                                                </div>
                                                                                <div class="article-comment">
                                                                                    <svg
                                                                                        class="svg-inline--fa fa-comments fa-w-18"
                                                                                        aria-hidden="true"
                                                                                        data-prefix="far"
                                                                                        data-icon="comments" role="img"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 576 512"
                                                                                        data-fa-i2svg="">
                                                                                        <path fill="currentColor"
                                                                                              d="M574.507 443.86c-5.421 21.261-24.57 36.14-46.511 36.14-32.246 0-66.511-9.99-102.1-29.734-50.64 11.626-109.151 7.877-157.96-13.437 41.144-2.919 80.361-12.339 116.331-28.705 16.322-1.22 32.674-4.32 48.631-9.593C454.404 412.365 490.663 432 527.996 432c-32-17.455-43.219-38.958-46.159-58.502 25.443-18.848 46.159-47.183 46.159-81.135 0-10.495-2.383-21.536-7.041-32.467 7.405-25.93 8.656-50.194 5.185-73.938 32.164 30.461 49.856 69.128 49.856 106.405 0 33.893-12.913 65.047-34.976 91.119 2.653 2.038 5.924 4.176 9.962 6.378 19.261 10.508 28.947 32.739 23.525 54zM240.002 80C117.068 80 48.004 152.877 48.004 210.909c0 38.196 24.859 70.072 55.391 91.276-3.527 21.988-16.991 46.179-55.391 65.815 44.8 0 88.31-22.089 114.119-37.653 25.52 7.906 51.883 11.471 77.879 11.471C362.998 341.818 432 268.976 432 210.909 432 152.882 362.943 80 240.002 80m0-48C390.193 32 480 126.026 480 210.909c0 22.745-6.506 46.394-18.816 68.391-11.878 21.226-28.539 40.294-49.523 56.674-21.593 16.857-46.798 30.045-74.913 39.197-29.855 9.719-62.405 14.646-96.746 14.646-24.449 0-48.34-2.687-71.292-8.004C126.311 404.512 85.785 416 48.004 416c-22.18 0-41.472-15.197-46.665-36.761-5.194-21.563 5.064-43.878 24.811-53.976 7.663-3.918 13.324-7.737 17.519-11.294-7.393-7.829-13.952-16.124-19.634-24.844C8.09 264.655.005 238.339.005 210.909.005 126.259 89.508 32 240.002 32z"></path>
                                                                                    </svg>
                                                                                    <!-- <i class="far fa-comments"></i> -->
                                                                                    <span
                                                                                        class="fb-comments-count fb_comments_count_zero"
                                                                                        data-href="https://suplo-car-accesories.myharavan.com/blogs/tin-sieu-xe/sieu-xe-nua-trieu-usd-co-nguy-co-roi-banh-ra-duong"
                                                                                        fb-xfbml-state="rendered"><span
                                                                                            class="fb_comments_count">0</span></span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="article-desc medium--hide small--hide">

                                                                                Thông thường những mẫu xe thương mại sẽ
                                                                                dựa trên một bản concept khi sản xuất,
                                                                                tuy nhiên một số khác lại có gốc gác là
                                                                                những chiếc xe đua...

                                                                            </div>
                                                                            <a href="/blogs/tin-sieu-xe/sieu-xe-nua-trieu-usd-co-nguy-co-roi-banh-ra-duong"
                                                                               class="article-btn">Xem thêm</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-nav disabled">
                                                <div class="owl-prev">
                                                    <svg class="svg-inline--fa fa-angle-left fa-w-8" aria-hidden="true"
                                                         data-prefix="fa" data-icon="angle-left" role="img"
                                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                         data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                              d="M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z"></path>
                                                    </svg><!-- <i class="fa fa-angle-left" aria-hidden="true"></i> -->
                                                </div>
                                                <div class="owl-next">
                                                    <svg class="svg-inline--fa fa-angle-right fa-w-8" aria-hidden="true"
                                                         data-prefix="fa" data-icon="angle-right" role="img"
                                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                         data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                              d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path>
                                                    </svg><!-- <i class="fa fa-angle-right" aria-hidden="true"></i> -->
                                                </div>
                                            </div>
                                            <div class="owl-dots disabled"></div>
                                        </div>

                                    </div>
                                </div>


                                <div class="blog-single-item">
                                    <div class="blog-single-slider">

                                        <div id="owl-blog-single-slider3"
                                             class="owl-carousel owl-theme owl-loaded owl-drag">


                                            <div class="owl-stage-outer">
                                                <div class="owl-stage"
                                                     style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 903px;">
                                                    <div class="owl-item active"
                                                         style="width: 441.5px; margin-right: 10px;">
                                                        <div class="item">
                                                            <div class="article-item">
                                                                <div class="grid mg-left-10">
                                                                    <div
                                                                        class="grid__item large--one-half medium--one-whole small--one-whole pd-left10">
                                                                        <div class="article-img">
                                                                            <a href="/blogs/hoi-choi-xe/bmw-i8-ham-ho-cua-xuong-do-ac-schnitzer">
                                                                                <img
                                                                                    src="//file.hstatic.net/1000305059/article/article_img4_a4e33663af7c4dad9a9a7b485e4a635f_large.jpg"
                                                                                    alt="BMW i8 hầm hố của xưởng độ AC Schnitzer">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="grid__item large--one-half medium--one-whole small--whole pd-left10">
                                                                        <div class="article-info-wrapper">
                                                                            <div class="article-info">
                                                                                <div class="article-date">
                                                                                    <span class="article-day">17</span>/
                                                                                    <span>08</span>/
                                                                                    <span>2018</span>
                                                                                </div>
                                                                                <div class="article-title">
                                                                                    <a href="/blogs/hoi-choi-xe/bmw-i8-ham-ho-cua-xuong-do-ac-schnitzer">BMW
                                                                                        i8 hầm hố của xưởng độ AC
                                                                                        Schnitzer</a>
                                                                                </div>
                                                                                <div class="article-author">
                                                                                    <svg
                                                                                        class="svg-inline--fa fa-edit fa-w-18"
                                                                                        aria-hidden="true"
                                                                                        data-prefix="far"
                                                                                        data-icon="edit" role="img"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 576 512"
                                                                                        data-fa-i2svg="">
                                                                                        <path fill="currentColor"
                                                                                              d="M402.3 344.9l32-32c5-5 13.7-1.5 13.7 5.7V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h273.5c7.1 0 10.7 8.6 5.7 13.7l-32 32c-1.5 1.5-3.5 2.3-5.7 2.3H48v352h352V350.5c0-2.1.8-4.1 2.3-5.6zm156.6-201.8L296.3 405.7l-90.4 10c-26.2 2.9-48.5-19.2-45.6-45.6l10-90.4L432.9 17.1c22.9-22.9 59.9-22.9 82.7 0l43.2 43.2c22.9 22.9 22.9 60 .1 82.8zM460.1 174L402 115.9 216.2 301.8l-7.3 65.3 65.3-7.3L460.1 174zm64.8-79.7l-43.2-43.2c-4.1-4.1-10.8-4.1-14.8 0L436 82l58.1 58.1 30.9-30.9c4-4.2 4-10.8-.1-14.9z"></path>
                                                                                    </svg>
                                                                                    <!-- <i class="far fa-edit"></i> -->
                                                                                    Đăng bởi: <span>Suplo Bạc</span>
                                                                                </div>
                                                                                <div class="article-comment">
                                                                                    <svg
                                                                                        class="svg-inline--fa fa-comments fa-w-18"
                                                                                        aria-hidden="true"
                                                                                        data-prefix="far"
                                                                                        data-icon="comments" role="img"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 576 512"
                                                                                        data-fa-i2svg="">
                                                                                        <path fill="currentColor"
                                                                                              d="M574.507 443.86c-5.421 21.261-24.57 36.14-46.511 36.14-32.246 0-66.511-9.99-102.1-29.734-50.64 11.626-109.151 7.877-157.96-13.437 41.144-2.919 80.361-12.339 116.331-28.705 16.322-1.22 32.674-4.32 48.631-9.593C454.404 412.365 490.663 432 527.996 432c-32-17.455-43.219-38.958-46.159-58.502 25.443-18.848 46.159-47.183 46.159-81.135 0-10.495-2.383-21.536-7.041-32.467 7.405-25.93 8.656-50.194 5.185-73.938 32.164 30.461 49.856 69.128 49.856 106.405 0 33.893-12.913 65.047-34.976 91.119 2.653 2.038 5.924 4.176 9.962 6.378 19.261 10.508 28.947 32.739 23.525 54zM240.002 80C117.068 80 48.004 152.877 48.004 210.909c0 38.196 24.859 70.072 55.391 91.276-3.527 21.988-16.991 46.179-55.391 65.815 44.8 0 88.31-22.089 114.119-37.653 25.52 7.906 51.883 11.471 77.879 11.471C362.998 341.818 432 268.976 432 210.909 432 152.882 362.943 80 240.002 80m0-48C390.193 32 480 126.026 480 210.909c0 22.745-6.506 46.394-18.816 68.391-11.878 21.226-28.539 40.294-49.523 56.674-21.593 16.857-46.798 30.045-74.913 39.197-29.855 9.719-62.405 14.646-96.746 14.646-24.449 0-48.34-2.687-71.292-8.004C126.311 404.512 85.785 416 48.004 416c-22.18 0-41.472-15.197-46.665-36.761-5.194-21.563 5.064-43.878 24.811-53.976 7.663-3.918 13.324-7.737 17.519-11.294-7.393-7.829-13.952-16.124-19.634-24.844C8.09 264.655.005 238.339.005 210.909.005 126.259 89.508 32 240.002 32z"></path>
                                                                                    </svg>
                                                                                    <!-- <i class="far fa-comments"></i> -->
                                                                                    <span
                                                                                        class="fb-comments-count fb_comments_count_zero"
                                                                                        data-href="https://suplo-car-accesories.myharavan.com/blogs/hoi-choi-xe/bmw-i8-ham-ho-cua-xuong-do-ac-schnitzer"
                                                                                        fb-xfbml-state="rendered"><span
                                                                                            class="fb_comments_count">0</span></span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="article-desc medium--hide small--hide">

                                                                                Thông thường những mẫu xe thương mại sẽ
                                                                                dựa trên một bản concept khi sản xuất,
                                                                                tuy nhiên một số khác lại có gốc gác là
                                                                                những chiếc xe đua...

                                                                            </div>
                                                                            <a href="/blogs/hoi-choi-xe/bmw-i8-ham-ho-cua-xuong-do-ac-schnitzer"
                                                                               class="article-btn">Xem thêm</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="owl-item active"
                                                         style="width: 441.5px; margin-right: 10px;">
                                                        <div class="item">
                                                            <div class="article-item">
                                                                <div class="grid mg-left-10">
                                                                    <div
                                                                        class="grid__item large--one-half medium--one-whole small--one-whole pd-left10">
                                                                        <div class="article-img">
                                                                            <a href="/blogs/hoi-choi-xe/lexus-lc-co-them-ban-gioi-han-se-xuat-hien-tai-paris-motor-show">
                                                                                <img
                                                                                    src="//file.hstatic.net/1000305059/article/article_img5_8250f6fab4124684be76e857a0de94ca_large.jpg"
                                                                                    alt="Lexus LC có thêm bản giới hạn, sẽ xuất hiện tại Paris Motor Show Thông thường những mẫu xe thương mại sẽ dựa trên một bản concept">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="grid__item large--one-half medium--one-whole small--whole pd-left10">
                                                                        <div class="article-info-wrapper">
                                                                            <div class="article-info">
                                                                                <div class="article-date">
                                                                                    <span class="article-day">17</span>/
                                                                                    <span>08</span>/
                                                                                    <span>2018</span>
                                                                                </div>
                                                                                <div class="article-title">
                                                                                    <a href="/blogs/hoi-choi-xe/lexus-lc-co-them-ban-gioi-han-se-xuat-hien-tai-paris-motor-show">Lexus
                                                                                        LC có thêm bản giới hạn, sẽ xuất
                                                                                        hiện tại Paris Motor Show Thông
                                                                                        thườ...</a>
                                                                                </div>
                                                                                <div class="article-author">
                                                                                    <svg
                                                                                        class="svg-inline--fa fa-edit fa-w-18"
                                                                                        aria-hidden="true"
                                                                                        data-prefix="far"
                                                                                        data-icon="edit" role="img"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 576 512"
                                                                                        data-fa-i2svg="">
                                                                                        <path fill="currentColor"
                                                                                              d="M402.3 344.9l32-32c5-5 13.7-1.5 13.7 5.7V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h273.5c7.1 0 10.7 8.6 5.7 13.7l-32 32c-1.5 1.5-3.5 2.3-5.7 2.3H48v352h352V350.5c0-2.1.8-4.1 2.3-5.6zm156.6-201.8L296.3 405.7l-90.4 10c-26.2 2.9-48.5-19.2-45.6-45.6l10-90.4L432.9 17.1c22.9-22.9 59.9-22.9 82.7 0l43.2 43.2c22.9 22.9 22.9 60 .1 82.8zM460.1 174L402 115.9 216.2 301.8l-7.3 65.3 65.3-7.3L460.1 174zm64.8-79.7l-43.2-43.2c-4.1-4.1-10.8-4.1-14.8 0L436 82l58.1 58.1 30.9-30.9c4-4.2 4-10.8-.1-14.9z"></path>
                                                                                    </svg>
                                                                                    <!-- <i class="far fa-edit"></i> -->
                                                                                    Đăng bởi: <span>Suplo Bạc</span>
                                                                                </div>
                                                                                <div class="article-comment">
                                                                                    <svg
                                                                                        class="svg-inline--fa fa-comments fa-w-18"
                                                                                        aria-hidden="true"
                                                                                        data-prefix="far"
                                                                                        data-icon="comments" role="img"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 576 512"
                                                                                        data-fa-i2svg="">
                                                                                        <path fill="currentColor"
                                                                                              d="M574.507 443.86c-5.421 21.261-24.57 36.14-46.511 36.14-32.246 0-66.511-9.99-102.1-29.734-50.64 11.626-109.151 7.877-157.96-13.437 41.144-2.919 80.361-12.339 116.331-28.705 16.322-1.22 32.674-4.32 48.631-9.593C454.404 412.365 490.663 432 527.996 432c-32-17.455-43.219-38.958-46.159-58.502 25.443-18.848 46.159-47.183 46.159-81.135 0-10.495-2.383-21.536-7.041-32.467 7.405-25.93 8.656-50.194 5.185-73.938 32.164 30.461 49.856 69.128 49.856 106.405 0 33.893-12.913 65.047-34.976 91.119 2.653 2.038 5.924 4.176 9.962 6.378 19.261 10.508 28.947 32.739 23.525 54zM240.002 80C117.068 80 48.004 152.877 48.004 210.909c0 38.196 24.859 70.072 55.391 91.276-3.527 21.988-16.991 46.179-55.391 65.815 44.8 0 88.31-22.089 114.119-37.653 25.52 7.906 51.883 11.471 77.879 11.471C362.998 341.818 432 268.976 432 210.909 432 152.882 362.943 80 240.002 80m0-48C390.193 32 480 126.026 480 210.909c0 22.745-6.506 46.394-18.816 68.391-11.878 21.226-28.539 40.294-49.523 56.674-21.593 16.857-46.798 30.045-74.913 39.197-29.855 9.719-62.405 14.646-96.746 14.646-24.449 0-48.34-2.687-71.292-8.004C126.311 404.512 85.785 416 48.004 416c-22.18 0-41.472-15.197-46.665-36.761-5.194-21.563 5.064-43.878 24.811-53.976 7.663-3.918 13.324-7.737 17.519-11.294-7.393-7.829-13.952-16.124-19.634-24.844C8.09 264.655.005 238.339.005 210.909.005 126.259 89.508 32 240.002 32z"></path>
                                                                                    </svg>
                                                                                    <!-- <i class="far fa-comments"></i> -->
                                                                                    <span
                                                                                        class="fb-comments-count fb_comments_count_zero"
                                                                                        data-href="https://suplo-car-accesories.myharavan.com/blogs/hoi-choi-xe/lexus-lc-co-them-ban-gioi-han-se-xuat-hien-tai-paris-motor-show"
                                                                                        fb-xfbml-state="rendered"><span
                                                                                            class="fb_comments_count">0</span></span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="article-desc medium--hide small--hide">

                                                                                Thông thường những mẫu xe thương mại sẽ
                                                                                dựa trên một bản concept khi sản xuất,
                                                                                tuy nhiên một số khác lại có gốc gác là
                                                                                những chiếc xe đua...

                                                                            </div>
                                                                            <a href="/blogs/hoi-choi-xe/lexus-lc-co-them-ban-gioi-han-se-xuat-hien-tai-paris-motor-show"
                                                                               class="article-btn">Xem thêm</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-nav disabled">
                                                <div class="owl-prev">
                                                    <svg class="svg-inline--fa fa-angle-left fa-w-8" aria-hidden="true"
                                                         data-prefix="fa" data-icon="angle-left" role="img"
                                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                         data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                              d="M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z"></path>
                                                    </svg><!-- <i class="fa fa-angle-left" aria-hidden="true"></i> -->
                                                </div>
                                                <div class="owl-next">
                                                    <svg class="svg-inline--fa fa-angle-right fa-w-8" aria-hidden="true"
                                                         data-prefix="fa" data-icon="angle-right" role="img"
                                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                         data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                              d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path>
                                                    </svg><!-- <i class="fa fa-angle-right" aria-hidden="true"></i> -->
                                                </div>
                                            </div>
                                            <div class="owl-dots disabled"></div>
                                        </div>

                                    </div>
                                </div>


                                <div class="blog-single-item">
                                    <div class="blog-single-slider">

                                        <div id="owl-blog-single-slider4"
                                             class="owl-carousel owl-theme owl-loaded owl-drag">


                                            <div class="owl-stage-outer">
                                                <div class="owl-stage"
                                                     style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 903px;">
                                                    <div class="owl-item active"
                                                         style="width: 441.5px; margin-right: 10px;">
                                                        <div class="item">
                                                            <div class="article-item">
                                                                <div class="grid mg-left-10">
                                                                    <div
                                                                        class="grid__item large--one-half medium--one-whole small--one-whole pd-left10">
                                                                        <div class="article-img">
                                                                            <a href="/blogs/huong-dan-bao-quan-xe/10-mau-xe-thuong-mai-co-xuat-than-tu-xe-dua">
                                                                                <img
                                                                                    src="//file.hstatic.net/1000305059/article/article_img6_461e45e538e74bf5b592975064ce57ad_large.jpg"
                                                                                    alt="10 mẫu xe thương mại có xuất thân từ xe đua">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="grid__item large--one-half medium--one-whole small--whole pd-left10">
                                                                        <div class="article-info-wrapper">
                                                                            <div class="article-info">
                                                                                <div class="article-date">
                                                                                    <span class="article-day">17</span>/
                                                                                    <span>08</span>/
                                                                                    <span>2018</span>
                                                                                </div>
                                                                                <div class="article-title">
                                                                                    <a href="/blogs/huong-dan-bao-quan-xe/10-mau-xe-thuong-mai-co-xuat-than-tu-xe-dua">10
                                                                                        mẫu xe thương mại có xuất thân
                                                                                        từ xe đua</a>
                                                                                </div>
                                                                                <div class="article-author">
                                                                                    <svg
                                                                                        class="svg-inline--fa fa-edit fa-w-18"
                                                                                        aria-hidden="true"
                                                                                        data-prefix="far"
                                                                                        data-icon="edit" role="img"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 576 512"
                                                                                        data-fa-i2svg="">
                                                                                        <path fill="currentColor"
                                                                                              d="M402.3 344.9l32-32c5-5 13.7-1.5 13.7 5.7V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h273.5c7.1 0 10.7 8.6 5.7 13.7l-32 32c-1.5 1.5-3.5 2.3-5.7 2.3H48v352h352V350.5c0-2.1.8-4.1 2.3-5.6zm156.6-201.8L296.3 405.7l-90.4 10c-26.2 2.9-48.5-19.2-45.6-45.6l10-90.4L432.9 17.1c22.9-22.9 59.9-22.9 82.7 0l43.2 43.2c22.9 22.9 22.9 60 .1 82.8zM460.1 174L402 115.9 216.2 301.8l-7.3 65.3 65.3-7.3L460.1 174zm64.8-79.7l-43.2-43.2c-4.1-4.1-10.8-4.1-14.8 0L436 82l58.1 58.1 30.9-30.9c4-4.2 4-10.8-.1-14.9z"></path>
                                                                                    </svg>
                                                                                    <!-- <i class="far fa-edit"></i> -->
                                                                                    Đăng bởi: <span>Suplo Bạc</span>
                                                                                </div>
                                                                                <div class="article-comment">
                                                                                    <svg
                                                                                        class="svg-inline--fa fa-comments fa-w-18"
                                                                                        aria-hidden="true"
                                                                                        data-prefix="far"
                                                                                        data-icon="comments" role="img"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 576 512"
                                                                                        data-fa-i2svg="">
                                                                                        <path fill="currentColor"
                                                                                              d="M574.507 443.86c-5.421 21.261-24.57 36.14-46.511 36.14-32.246 0-66.511-9.99-102.1-29.734-50.64 11.626-109.151 7.877-157.96-13.437 41.144-2.919 80.361-12.339 116.331-28.705 16.322-1.22 32.674-4.32 48.631-9.593C454.404 412.365 490.663 432 527.996 432c-32-17.455-43.219-38.958-46.159-58.502 25.443-18.848 46.159-47.183 46.159-81.135 0-10.495-2.383-21.536-7.041-32.467 7.405-25.93 8.656-50.194 5.185-73.938 32.164 30.461 49.856 69.128 49.856 106.405 0 33.893-12.913 65.047-34.976 91.119 2.653 2.038 5.924 4.176 9.962 6.378 19.261 10.508 28.947 32.739 23.525 54zM240.002 80C117.068 80 48.004 152.877 48.004 210.909c0 38.196 24.859 70.072 55.391 91.276-3.527 21.988-16.991 46.179-55.391 65.815 44.8 0 88.31-22.089 114.119-37.653 25.52 7.906 51.883 11.471 77.879 11.471C362.998 341.818 432 268.976 432 210.909 432 152.882 362.943 80 240.002 80m0-48C390.193 32 480 126.026 480 210.909c0 22.745-6.506 46.394-18.816 68.391-11.878 21.226-28.539 40.294-49.523 56.674-21.593 16.857-46.798 30.045-74.913 39.197-29.855 9.719-62.405 14.646-96.746 14.646-24.449 0-48.34-2.687-71.292-8.004C126.311 404.512 85.785 416 48.004 416c-22.18 0-41.472-15.197-46.665-36.761-5.194-21.563 5.064-43.878 24.811-53.976 7.663-3.918 13.324-7.737 17.519-11.294-7.393-7.829-13.952-16.124-19.634-24.844C8.09 264.655.005 238.339.005 210.909.005 126.259 89.508 32 240.002 32z"></path>
                                                                                    </svg>
                                                                                    <!-- <i class="far fa-comments"></i> -->
                                                                                    <span
                                                                                        class="fb-comments-count fb_comments_count_zero"
                                                                                        data-href="https://suplo-car-accesories.myharavan.com/blogs/huong-dan-bao-quan-xe/10-mau-xe-thuong-mai-co-xuat-than-tu-xe-dua"
                                                                                        fb-xfbml-state="rendered"><span
                                                                                            class="fb_comments_count">0</span></span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="article-desc medium--hide small--hide">

                                                                                Thông thường những mẫu xe thương mại sẽ
                                                                                dựa trên một bản concept khi sản xuất,
                                                                                tuy nhiên một số khác lại có gốc gác là
                                                                                những chiếc xe đua...

                                                                            </div>
                                                                            <a href="/blogs/huong-dan-bao-quan-xe/10-mau-xe-thuong-mai-co-xuat-than-tu-xe-dua"
                                                                               class="article-btn">Xem thêm</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="owl-item active"
                                                         style="width: 441.5px; margin-right: 10px;">
                                                        <div class="item">
                                                            <div class="article-item">
                                                                <div class="grid mg-left-10">
                                                                    <div
                                                                        class="grid__item large--one-half medium--one-whole small--one-whole pd-left10">
                                                                        <div class="article-img">
                                                                            <a href="/blogs/huong-dan-bao-quan-xe/ban-mot-chiec-sieu-xe-ferrari-thu-loi-80-000-usd">
                                                                                <img
                                                                                    src="//file.hstatic.net/1000305059/article/article_img7_b7922126a2dc48bb8137db3aa7018c83_large.jpg"
                                                                                    alt="Bán một chiếc siêu xe, Ferrari thu lời 80.000 USD">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="grid__item large--one-half medium--one-whole small--whole pd-left10">
                                                                        <div class="article-info-wrapper">
                                                                            <div class="article-info">
                                                                                <div class="article-date">
                                                                                    <span class="article-day">17</span>/
                                                                                    <span>08</span>/
                                                                                    <span>2018</span>
                                                                                </div>
                                                                                <div class="article-title">
                                                                                    <a href="/blogs/huong-dan-bao-quan-xe/ban-mot-chiec-sieu-xe-ferrari-thu-loi-80-000-usd">Bán
                                                                                        một chiếc siêu xe, Ferrari thu
                                                                                        lời 80.000 USD</a>
                                                                                </div>
                                                                                <div class="article-author">
                                                                                    <svg
                                                                                        class="svg-inline--fa fa-edit fa-w-18"
                                                                                        aria-hidden="true"
                                                                                        data-prefix="far"
                                                                                        data-icon="edit" role="img"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 576 512"
                                                                                        data-fa-i2svg="">
                                                                                        <path fill="currentColor"
                                                                                              d="M402.3 344.9l32-32c5-5 13.7-1.5 13.7 5.7V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h273.5c7.1 0 10.7 8.6 5.7 13.7l-32 32c-1.5 1.5-3.5 2.3-5.7 2.3H48v352h352V350.5c0-2.1.8-4.1 2.3-5.6zm156.6-201.8L296.3 405.7l-90.4 10c-26.2 2.9-48.5-19.2-45.6-45.6l10-90.4L432.9 17.1c22.9-22.9 59.9-22.9 82.7 0l43.2 43.2c22.9 22.9 22.9 60 .1 82.8zM460.1 174L402 115.9 216.2 301.8l-7.3 65.3 65.3-7.3L460.1 174zm64.8-79.7l-43.2-43.2c-4.1-4.1-10.8-4.1-14.8 0L436 82l58.1 58.1 30.9-30.9c4-4.2 4-10.8-.1-14.9z"></path>
                                                                                    </svg>
                                                                                    <!-- <i class="far fa-edit"></i> -->
                                                                                    Đăng bởi: <span>Suplo Bạc</span>
                                                                                </div>
                                                                                <div class="article-comment">
                                                                                    <svg
                                                                                        class="svg-inline--fa fa-comments fa-w-18"
                                                                                        aria-hidden="true"
                                                                                        data-prefix="far"
                                                                                        data-icon="comments" role="img"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 576 512"
                                                                                        data-fa-i2svg="">
                                                                                        <path fill="currentColor"
                                                                                              d="M574.507 443.86c-5.421 21.261-24.57 36.14-46.511 36.14-32.246 0-66.511-9.99-102.1-29.734-50.64 11.626-109.151 7.877-157.96-13.437 41.144-2.919 80.361-12.339 116.331-28.705 16.322-1.22 32.674-4.32 48.631-9.593C454.404 412.365 490.663 432 527.996 432c-32-17.455-43.219-38.958-46.159-58.502 25.443-18.848 46.159-47.183 46.159-81.135 0-10.495-2.383-21.536-7.041-32.467 7.405-25.93 8.656-50.194 5.185-73.938 32.164 30.461 49.856 69.128 49.856 106.405 0 33.893-12.913 65.047-34.976 91.119 2.653 2.038 5.924 4.176 9.962 6.378 19.261 10.508 28.947 32.739 23.525 54zM240.002 80C117.068 80 48.004 152.877 48.004 210.909c0 38.196 24.859 70.072 55.391 91.276-3.527 21.988-16.991 46.179-55.391 65.815 44.8 0 88.31-22.089 114.119-37.653 25.52 7.906 51.883 11.471 77.879 11.471C362.998 341.818 432 268.976 432 210.909 432 152.882 362.943 80 240.002 80m0-48C390.193 32 480 126.026 480 210.909c0 22.745-6.506 46.394-18.816 68.391-11.878 21.226-28.539 40.294-49.523 56.674-21.593 16.857-46.798 30.045-74.913 39.197-29.855 9.719-62.405 14.646-96.746 14.646-24.449 0-48.34-2.687-71.292-8.004C126.311 404.512 85.785 416 48.004 416c-22.18 0-41.472-15.197-46.665-36.761-5.194-21.563 5.064-43.878 24.811-53.976 7.663-3.918 13.324-7.737 17.519-11.294-7.393-7.829-13.952-16.124-19.634-24.844C8.09 264.655.005 238.339.005 210.909.005 126.259 89.508 32 240.002 32z"></path>
                                                                                    </svg>
                                                                                    <!-- <i class="far fa-comments"></i> -->
                                                                                    <span
                                                                                        class="fb-comments-count fb_comments_count_zero"
                                                                                        data-href="https://suplo-car-accesories.myharavan.com/blogs/huong-dan-bao-quan-xe/ban-mot-chiec-sieu-xe-ferrari-thu-loi-80-000-usd"
                                                                                        fb-xfbml-state="rendered"><span
                                                                                            class="fb_comments_count">0</span></span>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="article-desc medium--hide small--hide">

                                                                                Thông thường những mẫu xe thương mại sẽ
                                                                                dựa trên một bản concept khi sản xuất,
                                                                                tuy nhiên một số khác lại có gốc gác là
                                                                                những chiếc xe đua...

                                                                            </div>
                                                                            <a href="/blogs/huong-dan-bao-quan-xe/ban-mot-chiec-sieu-xe-ferrari-thu-loi-80-000-usd"
                                                                               class="article-btn">Xem thêm</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-nav disabled">
                                                <div class="owl-prev">
                                                    <svg class="svg-inline--fa fa-angle-left fa-w-8" aria-hidden="true"
                                                         data-prefix="fa" data-icon="angle-left" role="img"
                                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                         data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                              d="M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z"></path>
                                                    </svg><!-- <i class="fa fa-angle-left" aria-hidden="true"></i> -->
                                                </div>
                                                <div class="owl-next">
                                                    <svg class="svg-inline--fa fa-angle-right fa-w-8" aria-hidden="true"
                                                         data-prefix="fa" data-icon="angle-right" role="img"
                                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                         data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                              d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path>
                                                    </svg><!-- <i class="fa fa-angle-right" aria-hidden="true"></i> -->
                                                </div>
                                            </div>
                                            <div class="owl-dots disabled"></div>
                                        </div>

                                    </div>
                                </div>


                                <!--- End loop all blogs --->

                            </div>
                        </div>

                        <div class="grid__item large--one-quarter medium--one-whole small--one-whole">
                            <div class="blog-sb-wrapper">

                                <div class="grid">


                                    <div class="grid__item large--one-whole medium--one-half small--one-whole">
                                        <div class="blog-sidebar">
                                            <a href="/collections/all" class="bs-banner"><img
                                                    src="//theme.hstatic.net/1000305059/1000394224/14/blog_banner_1.png?v=3615"
                                                    alt="Suplo Car | Cửa hàng phụ kiện,đồ chơi, nội thất xe hơi chính hãng"></a>
                                        </div>
                                    </div>


                                    <div class="grid__item large--one-whole medium--one-half small--one-whole">
                                        <div class="blog-sidebar">
                                            <a href="/collections/all" class="bs-banner"><img
                                                    src="//theme.hstatic.net/1000305059/1000394224/14/blog_banner_2.png?v=3615"
                                                    alt="Suplo Car | Cửa hàng phụ kiện,đồ chơi, nội thất xe hơi chính hãng"></a>
                                        </div>
                                    </div>


                                </div>

                                <div class="fb-page medium--hide small--hide fb_iframe_widget"
                                     data-href="https://www.facebook.com/SuploTeam/" data-tabs="timeline"
                                     data-small-header="false" data-adapt-container-width="true" data-hide-cover="false"
                                     data-show-facepile="true" fb-xfbml-state="rendered"
                                     fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=&amp;container_width=254&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FSuploTeam%2F&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline">
                                    <span style="vertical-align: bottom; width: 254px; height: 500px;"><iframe
                                            name="f1e49e20fd4d5e" width="1000px" height="1000px" frameborder="0"
                                            allowtransparency="true" allowfullscreen="true" scrolling="no"
                                            allow="encrypted-media" title="fb:page Facebook Social Plugin"
                                            src="https://www.facebook.com/v2.11/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2F__Bz3h5RzMx.js%3Fversion%3D42%23cb%3Df63c5e46ada39%26domain%3Dsuplo-car-accesories.myharavan.com%26origin%3Dhttps%253A%252F%252Fsuplo-car-accesories.myharavan.com%252Ff3b155eaaf872f8%26relation%3Dparent.parent&amp;container_width=254&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FSuploTeam%2F&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline"
                                            style="border: none; visibility: visible; width: 254px; height: 500px;"
                                            class=""></iframe></span></div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
