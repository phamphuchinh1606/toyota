@extends('guest.layouts.master')

@section('head.title')
    Dự Toán Chi Phí -
@endsection

@section('body.js')
    <script>
        $(document).ready(function(){
            $('.btnEstimateSubmit').on('click',function(){
                let form = $(this).closest('form');
                let url = $(form).attr('action');
                let productId = $(form).find('select[name=product_id]').val();
                let location = $(form).find('select[name=location]').val();
                let data = {product_id : productId, location : location}
                var params = {
                    type: 'POST',
                    url: url,
                    data: data,
                    dataType: 'json',
                    success: function(data) {
                        $('#productQuickView').find('.modal_product_name').html(data.product_name);
                        $('#productQuickView').find('.product_price').html(data.product_price);
                        $('#productQuickView').find('.registration_of_owner_ship_fee').html(data.registration_of_owner_ship_fee);
                        $('#productQuickView').find('.plate_number_fee').html(data.plate_number_fee);
                        $('#productQuickView').find('.cost_for_using_road').html(data.cost_for_using_road);
                        $('#productQuickView').find('.civil_insurance_for_the_liability_fee').html(data.civil_insurance_for_the_liability_fee);
                        $('#productQuickView').find('.insurance_two_way').html(data.insurance_two_way);
                        $('#productQuickView').find('.registrantion_fee').html(data.registrantion_fee);
                        $('#productQuickView').find('.total_amount').html(data.total_amount);
                        $('#productQuickView').show();
                    }
                };
                jQuery.ajax(params);
            });
            $('#close').click(function(){
                $('#productQuickView').hide();
            })
        });
    </script>
@endsection

@section('body.content')
    <main class="main-content" role="main">
        <section id="collection-wrapper">
            <div class="wrapper">
                <div class="inner">
                    <div class="grid">
                        <div class="grid__item large--three-quarters medium--one-whole small--one-whole float-right">
                            <div class="collection-content-wrapper">
                                <div class="collection-head">
                                    <div class="grid">
                                        <div class="grid__item">
                                            <div class="collection-title">
                                                <h1>Dự toán chi phí xe ( Chưa bao gồm khuyến mãi )</h1>
                                            </div>
                                        </div>
                                        <div class="grid__item" style="padding-top:30px">
                                            <form action="{{route('cost_estimate.estimate')}}" method="post" id="form-estimate">
                                                @csrf
                                                <div class="row">
                                                    <div class="col l3 m3 s12 ">
                                                        <h5 style="line-height: 40px;">
                                                            <b>Chọn mẫu xe</b>
                                                            <span style="color:red">( * )</span>
                                                        </h5>
                                                    </div>
                                                    <div class="col l9 m9 s12 ">
                                                        @include('both.common.__select_product',['selectName' => 'product_id'])
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col l3 m3 s12 ">
                                                        <h5 style="line-height: 40px;">
                                                            <b>Nơi đăng ký trước bạ</b>
                                                            <span style="color:red">( * )</span>
                                                        </h5>
                                                    </div>
                                                    <div class="col l9 m9 s12 ">
                                                        <select class="form-control" name="location">
                                                            <option value="hcm">TP.Hồ Chí Minh</option>
                                                            <option value="hn">TP.Hà Nội</option>
                                                            <option value="dn">TP.Đà Nẵng</option>
                                                            <option value="all">Địa điểm khác</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="text-center">
                                                        <input type="button" class="btn center btnEstimateSubmit" value="Tính Chi Phí">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="collection-body">
                                    <div class="grid__item large--seven-twelfths medium--one-half small--one-whole">
                                        <div class="grid-uniform product-list md-mg-left-5">


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid__item large--one-quarter medium--one-whole small--one-whole">
                            <div class="collection-sidebar-wrapper">
                                <div class="grid-uniform mg-left-10">
                                    <div class="grid__item large--one-whole medium--one-half small--one-whole pd-left10">
                                        <div class="collection-categories">
                                            <button class="accordion cs-title col-sb-trigger active">
                                                <span>Sản Phẩm Của Chúng Tôi</span>
                                            </button>
                                            <div class="panel" style="max-height: 1000px;">
                                                <ul class="no-bullets">
                                                    @foreach($productTrees as $tree)
                                                        <li>
                                                            <?php
                                                            $urlCollection = "#tab_li_$tree->product_type_id";
                                                            if (count($tree->products) > 0)
                                                                $urlCollection = route('product_detail', ['slug' => $tree->products[0]->slug, 'id' => $tree->products[0]->id]);
                                                            ?>
                                                            <a href="{{$urlCollection}}">{{$tree->product_type_name}}</a>

                                                            <ul class="no-bullets">
                                                                @foreach($tree->products as $product)
                                                                    <li>
                                                                        <a href="{{route('product_detail',['slug' => $product->slug, 'id' => $product->id])}}">- {{$product->product_name}}</a>
                                                                    </li>
                                                                @endforeach

                                                            </ul>

                                                        </li>
                                                    @endforeach

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('body.modal')
    <link href="{{asset('css/guest/modal.css')}}" rel="stylesheet" type="text/css" media="all">
    @include('guest.costEstimate.__modal_estimate')
@endsection
