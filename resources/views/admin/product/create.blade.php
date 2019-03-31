@extends('admin.layouts.master')

@section('head.title','Tạo mới sản phẩm')

@section('head.css')
    <link href="{{asset('css/admin/plugins/quill.snow.css')}}" rel="stylesheet">
    {{--<link href="https://cdn.quilljs.com/1.0.0/quill.snow.css" rel="stylesheet">--}}
    <link rel="stylesheet" href="{{asset('css/admin/plugins/dropzone.css')}}">
    <link href="{{asset('css/admin/dropzon_custom.css')}}" rel="stylesheet">
@endsection

@section('body.js')
    <script src="{{asset('js/admin/plugins/quill.min.js')}}"></script>
    <script src="{{asset('js/admin/plugins/image-resize.min.js')}}"></script>
    <script src="{{asset('js/admin/plugins/text-editor.js')}}"></script>
    <script src="{{asset('js/admin/plugins/dropzone.js')}}"></script>
    <script src="{{asset('js/admin/dropzone-config.js')}}"></script>
    <script src="{{asset('js/admin/product.js')}}"></script>
@endsection

@section('body.breadcrumb')
    {{ Breadcrumbs::render('admin.product.create') }}
@endsection

@section('body.content')
    <div class="container-fluid">
        <div id="ui-view">
            <div>
                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-md-8">
                            <form method="post" action="{{route('admin.product.create')}}" enctype="multipart/form-data" id="form">
                                @csrf
                                <div class="card">
                                    <div class="card-header">
                                        <i class="icon-note"></i> Tạo Mới Sản Phẩm
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label" for="text-input">Tên Sản Phẩm</label>
                                            <div class="col-md-10">
                                                <input class="form-control" id="text-input" type="text" name="product_name" placeholder="Tên sản phẩm" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label" for="text-input">Tiều đề sản phẩm</label>
                                            <div class="col-md-10">
                                                <input class="form-control" id="text-input" type="text" name="product_title" placeholder="Tiêu đề sản phẩm" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label" for="text-input">Title</label>
                                            <div class="col-md-10">
                                                <input class="form-control" id="text-input" type="text" name="title" placeholder="Title">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label" for="text-input">Meta Keyword</label>
                                            <div class="col-md-10">
                                                <input class="form-control" id="text-input" type="text" name="meta_keyword" placeholder="Meta Keyword">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label" for="text-input">Loại Sản Phẩm</label>
                                            <div class="col-md-10">
                                                @include('admin.common.__select_product_type',['selectName' => 'product_type'])
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label" for="text-input">Giá sản phẩm</label>
                                            <div class="col-md-10">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="input-group">
                                                            <input class="form-control product-price text-right number" id="product_price" type="text" name="product_price">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">VNĐ</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label" for="text-input">Công khai sản phẩm</label>
                                            <div class="col-md-10">
                                                <label class="switch switch-label switch-outline-primary-alt">
                                                    <input class="switch-input" type="checkbox" checked="" name="is_public">
                                                    <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label" for="text-input">Số chỗ ngồi</label>
                                            <div class="col-md-10">
                                                <input class="form-control" id="text-input" type="text" name="product_number_of_seat" placeholder="Số chỗ ngồi">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label" for="text-input">Kiểu dáng</label>
                                            <div class="col-md-10">
                                                <input class="form-control" id="text-input" type="text" name="product_design" placeholder="Kiểu dáng">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label" for="text-input">Nhiên liệu</label>
                                            <div class="col-md-10">
                                                <input class="form-control" id="text-input" type="text" name="product_fuel" placeholder="Nhiên liệu">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label" for="text-input">Xuất xứ</label>
                                            <div class="col-md-10">
                                                <input class="form-control" id="text-input" type="text" name="product_origin" placeholder="Xuất xứ">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label" for="text-input">Thông tin khác</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control" id="text-input" rows="3" name="product_other_information" placeholder="Thông tin khác"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label" for="text-input">Mô tả ngắn sản phẩm</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control" name="product_description" rows="9" placeholder="Nhập mô tả ngắn thông tin sản phẩm"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label" for="text-input">Nội dung sản phẩm</label>
                                            <div class="col-md-10">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input type="hidden" value="" class="editor" name="product_content"/>
                                                        <div id="editor" class="ql-container ql-snow editor_quill product_content">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label" for="text-input">Thông tin khuyến mãi</label>
                                            <div class="col-md-10">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input type="hidden" value="" class="editor" name="content_promotion"/>
                                                        <div id="editor-promotion" class="ql-container ql-snow editor_quill content_promotion">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-none">
                                            <input type="file" class="'form-control" id="product_main_image" name="product_main_image"/>
                                            <div class="root_product_images">
                                                <input type="hidden" class="'form-control product_images" name="product_images[]" value=""/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-right">
                                        <button class="btn btn-sm btn-primary" type="submit">
                                            <i class="fa fa-dot-circle-o"></i> Tạo mới</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fa fa-align-justify"></i> Hình Ảnh Chính
                                    <small>slides only</small>
                                </div>
                                <div class="card-body">
                                    <div class="box box-warning">
                                        <div class="box-body">
                                            <div class="upload__area-image">
                                                <span>
                                                    <img id="imgHandle" src="http://beats-city.amagumolabs.io/images/upload/no_image_available.jpg">
                                                    <label for="imgAnchorInput">Upload image</label>
                                                </span>
                                                <p><small>(Please upload a file of type: jpeg, png, jpg, gif, svg.)</small></p>
                                            </div>
                                            <div class="form__upload">

                                                <div class="form-inline-simple">
                                                    <input type="file" class="'form-control" id="imgAnchorInput" onchange="loadFile(event)">
                                                </div>
                                                <script>
                                                    var loadFile = function(event) {
                                                        var output = document.getElementById('imgHandle');
                                                        output.src = URL.createObjectURL(event.target.files[0]);
                                                        document.getElementById('product_main_image').files = event.target.files;
                                                    };
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
