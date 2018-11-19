@extends('admin.layouts.master')

@section('body.content')
    <div class="container-fluid">
        <div id="ui-view">
            <div class="row">
                <div class="col-sm-12 col-xl-12">
                    <form action="{{route('admin.cost_estimate.estimate.update')}}" method="post"  enctype="multipart/form-data" id="form">
                        @csrf
                        <input type="hidden" value="{{$costEstimate->id}}" name="cost_estimate_id"/>
                        <div class="card list-image">
                            <div class="card-header">
                                <i class="fa fa-align-justify"></i>Cài đặt thông tin dự toán chi phí
                            </div>
                            <div class="card-body">
                                <div class="carousel slide" data-ride="carousel">

                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="registration_of_owner_ship_fee">Lệ phí trước bạ (%)</label>
                                        <div class="col-md-5">
                                            <div class="input-group">
                                                <input class="form-control form-control text-right number" id="registration_of_owner_ship_fee" type="number" name="registration_of_owner_ship_fee" placeholder="Lệ phí trước bạ (%)"
                                                       value="{{$costEstimate->registration_of_owner_ship_fee}}">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="plate_number_fee">Phí đăng kiểm</label>
                                        <div class="col-md-5">
                                            <div class="input-group">
                                                <input class="form-control text-right number" id="plate_number_fee" type="text" name="plate_number_fee" placeholder="Phí đăng kiểm"
                                                       value="{{$costEstimate->plate_number_fee}}">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">VNĐ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="cost_for_using_road">Phí bảo trì đường bộ</label>
                                        <div class="col-md-5">
                                            <div class="input-group">
                                                <input class="form-control text-right number" id="cost_for_using_road" type="text" name="cost_for_using_road" placeholder="Phí bảo trì đường bộ"
                                                       value="{{$costEstimate->cost_for_using_road}}">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">VNĐ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="civil_insurance_for_the_liability_fee">Phí bảo hiểm nhân sự</label>
                                        <div class="col-md-5">
                                            <div class="input-group">
                                                <input class="form-control text-right number" id="civil_insurance_for_the_liability_fee" type="text" name="civil_insurance_for_the_liability_fee" placeholder="Phí bảo hiểm nhân sự"
                                                       value="{{$costEstimate->civil_insurance_for_the_liability_fee}}">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">VNĐ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="insurance_two_way">Phí bảo hiểm 2 chiều</label>
                                        <div class="col-md-5">
                                            <div class="input-group">
                                                <input class="form-control text-right" id="insurance_two_way" type="number" step="0.01" name="insurance_two_way" placeholder="Phí bảo hiểm 2 chiều"
                                                       value="{{$costEstimate->insurance_two_way}}">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="registrantion_fee_hcm">Phí biển số TP.Hồ Chí Minh</label>
                                        <div class="col-md-5">
                                            <div class="input-group">
                                                <input class="form-control text-right number" id="registrantion_fee_hcm" type="text" name="registrantion_fee_hcm" placeholder="Phí biển số TP.Hồ Chí Minh"
                                                       value="{{$costEstimate->registrantion_fee_hcm}}">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">VNĐ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="registrantion_fee_hn">Phí biển số TP.Hà Nội</label>
                                        <div class="col-md-5">
                                            <div class="input-group">
                                                <input class="form-control text-right number" id="registrantion_fee_hn" type="text" name="registrantion_fee_hn" placeholder="Phí biển số TP.Hà Nội"
                                                       value="{{$costEstimate->registrantion_fee_hn}}">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">VNĐ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="registrantion_fee_dn">Phí biển số TP.Đà Nẵng</label>
                                        <div class="col-md-5">
                                            <div class="input-group">
                                                <input class="form-control text-right number" id="registrantion_fee_dn" type="text" name="registrantion_fee_dn" placeholder="Phí biển số TP.Đà Nẵng"
                                                       value="{{$costEstimate->registrantion_fee_dn}}">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">VNĐ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="registrantion_fee_all">Phí biển số những nơi khác</label>
                                        <div class="col-md-5">
                                            <div class="input-group">
                                                <input class="form-control text-right number" id="registrantion_fee_all" type="text" name="registrantion_fee_all" placeholder="Phí biển số những nơi khác"
                                                       value="{{$costEstimate->registrantion_fee_all}}">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">VNĐ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-sm btn-primary pull-right" type="submit">
                                    <i class="fa fa-dot-circle-o"></i> Cập Nhật
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection