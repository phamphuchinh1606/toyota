<?php use App\Common\AppCommon; use App\Common\ImageCommon; ?>
<div class="row">
    <div class="col s12 m5 l5">
        <h1 class="hide">{{$product->title}}</h1>
        <h2 class="name_dt animated fadeInDownShort go">
            <span id="spTitleCar">{{$product->product_name}}</span>
        </h2>
        <input type="hidden" id="hdCatId" value="821">
        <input type="hidden" id="hdCarId" value="1758">
        <p class="txt_dt animated fadeInLeftShort go">{{$product->product_title}}</p>
        <p class="price_dt animated fadeInUpShort go price_detail">{{AppCommon::formatMoney($product->product_price)}}
            <sup>VND</sup></p>
        <p class="txt_dt_2 animated fadeInUpShort go">
            <span>• Số chỗ ngồi : {{$product->product_number_of_seat}} </span>
            <br>
            <span>• Kiểu dáng : {{$product->product_design}} </span>
            <br>
            <span>• Nhiên liệu : {{$product->product_fuel}} </span>
            <br>
            <span>• Xuất xứ : {{$product->product_origin}} </span>
            <br>
            <span>• Thông tin khác: <br>{{$product->product_other_information}} </span>
        </p>
        {{--<div class="rowbtn hide-mb" style="margin-top: 30px;">--}}
        {{--<div class="btn_wrap" style="margin-right: 10px" id="btnTestDrive">--}}
        {{--<a class="btnc btn-primary" data-text="Đăng ký lái thử" href="/dang-ky-lai-thu?cat=corolla-altis">--}}
        {{--<span class="btn_overlay"> </span><span class="btn_text">Đăng ký lái thử</span>--}}
        {{--</a>--}}
        {{--</div>--}}
        {{--<div class="btn_wrap">--}}
        {{--<a class="btnc btn-primary bg-light-grey" id="btnCompare" data-text="So sánh" href="/so-sanh?car=corolla-altis-1-8e-mt">--}}
        {{--<span class="btn_overlay"></span>--}}
        {{--<span class="btn_text">So sánh</span>--}}
        {{--</a>--}}
        {{--</div>--}}
        {{--</div>--}}

    </div>
    <div class="col l7 m7 s12">
        <div class="chk_color_box">
            <div class="img_box">
                @if(count($product->colors) > 0)
                    <img class="lazy" data-original="{{ImageCommon::showImage(($product->colors)[0]->color_image)}}" alt="{{($product->colors)[0]->color_name}}"
                         src="{{ImageCommon::showImage(($product->colors)[0]->color_image)}}" style="display: inline;">
                @else
                    <img class="lazy" data-original="{{ImageCommon::showImage($product->product_image)}}" alt="Đen 218"
                         src="{{ImageCommon::showImage($product->product_image)}}" style="display: inline;">
                @endif

            </div>
            <div class="list-color">
                <ul>
                    @foreach($product->colors as $index => $productColor)
                        @if($index == 0)
                            <p class="txt-color">{{$productColor->color_name}}</p>
                        @endif
                        <li class=" @if($index == 0) active @endif">
                            <span data-img="{{ImageCommon::showImage($productColor->color_image)}}"
                                  data-cl="{{$productColor->color_name}}" data-price="697.000.000 <sup>VND</sup>"
                                  style="background-color: {{$productColor->color_code}}">
                            </span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
