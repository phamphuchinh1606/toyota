<div class="sidebar">
    <nav class="sidebar-nav ps ps--active-y">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.home')}}">
                    <i class="nav-icon icon-speedometer"></i> Trang chủ
                </a>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#">
                    <i class="nav-icon icon-settings"></i>Sản Phẩm
                </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.product.index')}}">
                            <i class="nav-icon icon-layers"></i>
                            Sản phẩm
                        </a>
                        <a class="nav-link" href="{{route('admin.product_color.index')}}">
                            <i class="nav-icon icon-layers"></i>
                            Màu sản phẩm
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.product_type.index')}}">
                    <i class="nav-icon icon-grid"></i>
                    Danh mục sản phẩm
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.vendor.index')}}">
                    <i class="nav-icon icon-badge"></i>
                    Thương hiệu
                </a>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#">
                    <i class="nav-icon icon-settings"></i>Cài Đặt
                </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.setting.banner')}}">
                            <i class="nav-icon icon-picture"></i>
                            Banner Slider
                        </a>
                    </li>
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link" href="{{route('admin.setting.topBanner')}}">--}}
                            {{--<i class="nav-icon icon-map"></i>--}}
                            {{--Top Banner--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.setting.tag')}}">
                            <i class="nav-icon icon-tag"></i>
                            Tags Key
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.setting.app')}}">
                            <i class="nav-icon icon-note"></i>
                            App Info
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.setting.app_about.show')}}">
                            <i class="nav-icon icon-wallet"></i>
                            Thông tin giới thiệu
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.blog.index')}}">
                    <i class="nav-icon icon-calendar"></i>
                    Tin Tức
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.contact.index')}}">
                    <i class="nav-icon icon-envelope-open"></i>
                    Liên Hệ
                    @if(isset($countContact) && $countContact > 0)
                        <span class="badge badge-danger">{{$countContact}}</span>
                    @endif
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.customer_request.index')}}">
                    <i class="nav-icon icon-envelope-open"></i>
                    Yêu cầu tư vấn
                    @if(isset($countCustomerRequest) && $countCustomerRequest > 0)
                        <span class="badge badge-danger">{{$countCustomerRequest}}</span>
                    @endif
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.cost_estimate.estimate')}}">
                    <i class="nav-icon icon-calendar"></i>
                    Thiết Lặp Chi Phí
                </a>
            </li>
        </ul>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 708px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 422px;"></div>
        </div>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
