<div id="NavDrawer" class="drawer drawer--right" tabindex="-1">
    <div class="drawer__header">
        <div class="drawer__close js-drawer-close clearfix">
            Menu
            <button type="button" class="icon-fallback-text">
                <svg class="svg-inline--fa fa-times fa-w-12" aria-hidden="true" data-prefix="fas" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                    <path fill="currentColor" d="M323.1 441l53.9-53.9c9.4-9.4 9.4-24.5 0-33.9L279.8 256l97.2-97.2c9.4-9.4 9.4-24.5 0-33.9L323.1 71c-9.4-9.4-24.5-9.4-33.9 0L192 168.2 94.8 71c-9.4-9.4-24.5-9.4-33.9 0L7 124.9c-9.4 9.4-9.4 24.5 0 33.9l97.2 97.2L7 353.2c-9.4 9.4-9.4 24.5 0 33.9L60.9 441c9.4 9.4 24.5 9.4 33.9 0l97.2-97.2 97.2 97.2c9.3 9.3 24.5 9.3 33.9 0z"></path>
                </svg><!-- <i class="fas fa-times"></i> -->
            </button>
        </div>
    </div>
    <!-- begin mobile-nav -->
    <ul class="mobile-nav">
        <li class="mobile-nav__item mobile-nav__item--active">
            <a href="{{route('home')}}" class="mobile-nav__link">Trang chủ</a>
        </li>
        <li class="mobile-nav__item">
            <a href="{{route('about')}}" class="mobile-nav__link">Thủ Tục Trả Góp</a>
        </li>
        <li class="mobile-nav__item" aria-haspopup="true">
            <div class="mobile-nav__has-sublist">
                <a href="{{route('collection_all')}}" class="mobile-nav__link">Sản phẩm</a>
                <div class="mobile-nav__toggle">
                    <button type="button" class="icon-fallback-text mobile-nav__toggle-open">
                        <span class="icon icon-plus" aria-hidden="true"></span>
                        <span class="fallback-text">See More</span>
                    </button>
                    <button type="button" class="icon-fallback-text mobile-nav__toggle-close">
                        <span class="icon icon-minus" aria-hidden="true"></span>
                        <span class="fallback-text">"Đóng"</span>
                    </button>
                </div>
            </div>
            <ul class="mobile-nav__sublist">
                @foreach($productTrees as $tree)
                    <li class="mobile-nav__item" aria-haspopup="true">
                        <div class="mobile-nav__has-sublist">
                            <?php
                                $urlCollection = "#tab_li_$tree->product_type_id";
                                if(count($tree->products) > 0)
                                    $urlCollection = route('product_detail',['slug' => $tree->products[0]->slug, 'id' => $tree->products[0]->id ]);
                                $urlCollection = route('collection_all',['product_type' => $tree->product_type_id]);
                            ?>
                            <a href="{{$urlCollection}}" class="mobile-nav__link">{{$tree->product_type_name}}</a>

                            <div class="mobile-nav__toggle product-menu-item">
                                <button type="button" class="icon-fallback-text mobile-nav__toggle-open">
                                    <span class="icon icon-plus" aria-hidden="true"></span>
                                    <span class="fallback-text">See More</span>
                                </button>
                                <button type="button" class="icon-fallback-text mobile-nav__toggle-close">
                                    <span class="icon icon-minus" aria-hidden="true"></span>
                                    <span class="fallback-text">"Đóng"</span>
                                </button>
                            </div>
                        </div>
                        <ul class="mobile-nav__sublist">
                            @foreach($tree->products as $productMenu)
                                <li class="mobile-nav__item ">
                                    <a href="{{route('product_detail',['slug' => $productMenu->slug, 'id' => $productMenu->id])}}" class="mobile-nav__link">{{$productMenu->product_name}}</a>
                                </li>
                            @endforeach
                        </ul>

                    </li>
                @endforeach
            </ul>
        </li>
        <li class="mobile-nav__item">
            <a href="{{route('blog')}}" class="mobile-nav__link">Tin tức</a>
        </li>
        <li class="mobile-nav__item">
            <a href="{{route('contact')}}" class="mobile-nav__link">Liên hệ</a>
        </li>
        <li class="mobile-nav__item">
            <a href="{{route('cost_estimate')}}" class="mobile-nav__link">Dự toán chi phí</a>
        </li>
        <li class="mobile-nav__item">
            <a href="{{route('cost_estimate')}}" class="mobile-nav__link">Đăng ký lái thử</a>
        </li>
    </ul>
    <!-- //mobile-nav -->
</div>
