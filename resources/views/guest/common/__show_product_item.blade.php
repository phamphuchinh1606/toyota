<?php use App\Common\ImageCommon; use App\Common\AppCommon; ?>
<div class="item_sm_header item_sm"
     data-image="{{ImageCommon::showImage($productMenu->product_image)}}" data-price="{{AppCommon::formatMoney($productMenu->product_price)}}"
     data-name="{{$productMenu->product_name}}" data-desc=" <span>• Số chỗ ngồi : {{$productMenu->product_number_of_seat}} </span>
                                            <br />
                                            <span>• Kiểu dáng : {{$productMenu->product_design}} </span>
                                            <br />
                                            <span>• Nhiên liệu : {{$productMenu->product_fuel}} </span>
                                            <br />
                                            <span>• Xuất xứ : {{$productMenu->product_origin}} </span>
                                            <br />
                                        <span>• Thông tin khác: {!! $productMenu->product_other_information !!}} </span>
                            " data-url="wigo-g-1-2-mt">
    <div class="row">
        <div class="col l6 m6 s12">
            <p class="img_sm">
                <a href="{{route('product_detail',['slug' => $productMenu->slug, 'id' => $productMenu->id])}}">
                    <img src="{{ImageCommon::showImage($productMenu->product_image)}}"
                        alt="{{$productMenu->product_name}}">
                </a>
            </p>
        </div>
        <div class="col l6 m6 s12">
            <div class="info_sm">
                <p class="name_sm ">
                    <a href="{{route('product_detail',['slug' => $productMenu->slug, 'id' => $productMenu->id])}}" class="product-title">{{$productMenu->product_name}}</a>
                </p>
                <p class="price_sm">
                    Giá từ: {{AppCommon::formatMoney($productMenu->product_price)}} <sup>VND</sup>
                </p>
            </div>
        </div>
    </div>
</div>