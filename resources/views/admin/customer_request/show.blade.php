@extends('admin.layouts.master')

@section('head.css')
    <style>
        @media (max-width: 600px) {
            .hidden-xs{
                display: none;
            }
            .main .container-fluid{
                padding: 0;
            }
        }
    </style>
@endsection

@section('body.js')
@endsection

@section('body.breadcrumb')
    {{ Breadcrumbs::render('admin.contact.show') }}
@endsection

@section('body.content')
    <div class="container-fluid product_type">
        <div id="ui-view">
            <div>
                <div class="animated fadeIn">
                    <div class="card">
                        <div class="card-header">
                            <strong>Thông tin yêu cầu tư vấn của khách hàng</strong>
                            <div class="card-header-actions">
                                <a class="btn btn-block btn-outline-secondary active" href="{{route('admin.customer_request.index')}}">
                                    Quay Lại
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <lable class="col-md-3">
                                            <i class="fa fa-user"></i>
                                            Tên khách hàng
                                        </lable>
                                        <div class="col-md-9">
                                            <p class="form-control-static font-weight-bold">
                                                {{$item->name}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <lable class="col-md-3">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            Số điện thoại
                                        </lable>
                                        <div class="col-md-9">
                                            <p class="form-control-static font-weight-bold">
                                                {{$item->phone}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <lable class="col-md-3">
                                            <i class="fa fa-envelope"></i>
                                            Email
                                        </lable>
                                        <div class="col-md-9">
                                            <p class="form-control-static font-weight-bold">
                                                {{$item->email}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <lable class="col-md-3">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            Địa chỉ
                                        </lable>
                                        <div class="col-md-9">
                                            <p class="form-control-static font-weight-bold">
                                                {{$item->address}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <lable class="col-md-3">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            Trạng thái
                                        </lable>
                                        <div class="col-md-9">
                                            <p class="form-control-static font-weight-bold">
                                                <span class="badge {{$item->status_class}}">{{$item->status_name}}</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <lable class="col-md-3">
                                            <i class="fa fa-product-hunt" aria-hidden="true"></i>
                                            Sản phẩm
                                        </lable>
                                        <div class="col-md-9">
                                            <p class="form-control-static font-weight-bold">
                                                {{$item->product->product_name}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <lable class="col-md-3">
                                            <i class="fa fa-calendar-o" aria-hidden="true"></i>
                                            Ngày dự định
                                        </lable>
                                        <div class="col-md-9">
                                            <p class="form-control-static font-weight-bold">
                                                {{ App\Common\DateUtils::dateFormat($item->time_plan,'Y-m-d')}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <lable class="col-md-3">
                                            <i class="fa fa-money" aria-hidden="true"></i>
                                            Ngân sách hiện có
                                        </lable>
                                        <div class="col-md-9">
                                            <p class="form-control-static font-weight-bold">
                                                {{App\Common\AppCommon::formatMoney($item->amount_current)}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <lable class="col-md-3">
                                            <i class="fa fa-credit-card" aria-hidden="true"></i>
                                            Hình thức mua
                                        </lable>
                                        <div class="col-md-9">
                                            <p class="form-control-static font-weight-bold">
                                                {{$item->payment_name}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <form class="btn" action="{{route('admin.customer_request.update_status', ['id' => $item->id, 'status' => App\Common\Constant::$CUSTOMER_REQUEST_STATUS_NEW_CODE])}}"
                                  method="post">
                                @csrf
                                <button class="btn btn-sm btn-danger" {{($item->status == App\Common\Constant::$CUSTOMER_REQUEST_STATUS_NEW_CODE) ? 'disabled="disabled"':''}} type="submit">Yêu cầu mới</button>
                            </form>
                            <form class="btn" action="{{route('admin.customer_request.update_status', ['id' => $item->id, 'status' => App\Common\Constant::$CUSTOMER_REQUEST_STATUS_PROCESS_CODE])}}"
                                  method="post">
                                @csrf
                                <button class="btn btn-sm btn-success" {{($item->status == App\Common\Constant::$CUSTOMER_REQUEST_STATUS_PROCESS_CODE) ? 'disabled="disabled"':''}} type="submit">Đang xử lý</button>
                            </form>
                            <form class="btn" action="{{route('admin.customer_request.update_status', ['id' => $item->id, 'status' => App\Common\Constant::$CUSTOMER_REQUEST_STATUS_DONE_CODE])}}"
                                  method="post">
                                @csrf
                                <button class="btn btn-sm btn-dark" {{($item->status == App\Common\Constant::$CUSTOMER_REQUEST_STATUS_DONE_CODE) ? 'disabled="disabled"':''}} type="submit">Hoàn thành</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
