@extends('admin.layouts.master')
@section('head.title','Tạo mới màu sắc sản phẩm')
@section('head.css')
    <link href="{{asset('css/admin/product.css')}}" rel="stylesheet">
@endsection

@section('body.js')
    {{--<script src="{{asset('js/admin/switch.plugin.js')}}"></script>--}}
    <script src="{{asset('js/admin/plugins/jscolor.js')}}"></script>
@endsection
@section('body.breadcrumb')
    {{ Breadcrumbs::render('admin.productType.create') }}
@endsection
@section('body.content')
    <div class="container-fluid product_type">
        <div id="ui-view">
            <div>
                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Tạo Mới Danh Mục</strong>
                                    <div class="card-header-actions">
                                        <a class="btn btn-block btn-outline-secondary active" href="{{route('admin.product_color.index')}}">
                                            Quay Lại
                                        </a>
                                    </div>
                                </div>
                                <form class="form-horizontal" action="{{route('admin.product_color.create')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="text-input">Tên màu sắc</label>
                                            <div class="col-md-9">
                                                <input class="form-control" id="text-input" type="text" name="color_name" placeholder="Tên màu sắc" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="text-input">Sản phẩm</label>
                                            <div class="col-md-9">
                                                @include('both.common.__select_product',['selectName' => 'product_id'])
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="text-input">Thứ tự</label>
                                            <div class="col-md-9">
                                                <input class="form-control" value="1" id="text-input" min="0" type="number" name="color_name" placeholder="Thứ tự">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="text-input">Màu sắc</label>
                                            <div class="col-md-9">
                                                <input class="form-control jscolor" value="FFFFFF" autocomplete="off" style="background-image: none; background-color: #FFFFFF; color: rgb(0, 0, 0);"
                                                    name="color_code">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-lable" for="">Icon Image</label>
                                            <div class="col-md-9">
                                                <div class="upload__area-image">
                                                <span>
                                                    <img id="imgAdd" src="http://beats-city.amagumolabs.io/images/upload/no_image_available.jpg" style="width: 100%;height: auto">
                                                    <label for="imageFileAdd">Upload image</label>
                                                </span>
                                                    <p><small>( width: 600px , height: 249px)</small></p>
                                                </div>
                                                <div class="form__upload image_icon">
                                                    <div class="form-inline-simple">
                                                        <input type="file" name="image_icon" class="form-control imgAnchorInput" id="imageFileAdd" onchange="loadFileImage(event)"
                                                            style="width: 100%;height: auto">
                                                    </div>
                                                    <script>
                                                        var loadFileImage = function(event) {
                                                            var output = document.getElementById('imgAdd');
                                                            output.src = URL.createObjectURL(event.target.files[0]);
                                                        };
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-right">
                                        <button class="btn btn-sm btn-primary" type="submit">
                                            <i class="fa fa-dot-circle-o"></i>Tạo mới</button>
                                        <a class="btn btn-sm btn-danger" href="{{route('admin.product_type.index')}}">
                                            <i class="fa fa-ban"></i>Hủy</a>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
