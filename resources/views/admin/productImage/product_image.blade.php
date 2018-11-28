<?php use App\Common\Constant; ?>

@extends('admin.layouts.master')

@section('head.title','Hình ảnh sản phẩm')

@section('body.content')
    <div class="container-fluid">
        <div id="ui-view">
            <div class="row">
                <div class="col-sm-12 col-xl-12">
                    <div class="card list-image">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i> Danh Sách Hình Ảnh Sản Phẩm
                            <div class="card-header-actions">
                                <a class="btn btn-block btn-outline-secondary active"
                                   href="{{route('admin.product.update',['id' => $productId])}}">
                                    Quay Lại
                                </a>
                            </div>
                            <div class="card-header-actions" style="padding-right: 30px">
                                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseAddImage" aria-expanded="true" aria-controls="collapseExample" data-placement="top" title="" data-original-title="Them Hinh">
                                    <i class="fa fa-upload fa-lg"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="carousel slide" data-ride="carousel">
                                <div class="form-group row">
                                    <div class="col-md-4 collapse" id="collapseAddImage">
                                        <form action="{{route('admin.product_image.create')}}" method="post"  enctype="multipart/form-data" id="form">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{$productId}}">
                                            <div class="text-right p-sm-1" id="btn_add_image" style="display: none">
                                                <button type="submit" class="btn btn-primary">Thêm hình</button>
                                            </div>
                                            <div class="upload__area-image">
                                                    <span>
                                                        <img id="imgAdd" src="http://beats-city.amagumolabs.io/images/upload/no_image_available.jpg">
                                                        <label for="imageFileAdd">Upload image</label>
                                                    </span>
                                                <p><small>(Please upload a file of type: jpeg, png, jpg, gif, svg. ( width: 395px , height: 198px)</small></p>
                                            </div>
                                            <div>
                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <select class="form-control form-control-lg" id="image_type" name="image_type" required>
                                                            <option value="">Chọn loại hình ảnh</option>
                                                            <option value="{{\App\Common\Constant::$PRODUCT_IMAGE_TYPE_IMAGE}}">Thư viện ảnh</option>
                                                            <option value="{{\App\Common\Constant::$PRODUCT_IMAGE_TYPE_FURNITURE}}">Ngoại thất</option>
                                                            <option value="{{\App\Common\Constant::$PRODUCT_IMAGE_TYPE_EXTERIOR}}">Nội thất</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form__upload">
                                                <div class="form-inline-simple">
                                                    <input type="file" name="src_image" class="form-control imgAnchorInput" id="imageFileAdd" onchange="loadFileImage(event)">
                                                </div>
                                                <script>
                                                    var loadFileImage = function(event) {
                                                        var output = document.getElementById('imgAdd');
                                                        output.src = URL.createObjectURL(event.target.files[0]);
                                                        document.getElementById('btn_add_image').style.display = 'block';
                                                    };
                                                </script>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="card">
                                        <div class="card-header">
                                            <i class="fa fa-align-justify"></i> Thư viện ảnh
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                @foreach($listProductImage->product_images as $productImage)
                                                    <div class="col-md-2">
                                                        <img src="{{\App\Common\ImageCommon::showImage($productImage->image_src)}}">
                                                        <div>
                                                            <a data-toggle="modal" class="nav-link delete-image anchorClick" data-url="{{route('admin.product_image.delete',['id' => $productImage->id, 'productId' => $productId])}}" data-name="Hình ảnh" href="#deleteModal">
                                                                Xóa Ảnh
                                                            </a>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                @if(isset($listProductImage->product_furniture_images))
                                    <div class="row">
                                        <div class="card">
                                            <div class="card-header">
                                                <i class="fa fa-align-justify"></i> Ngoại Thất
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    @foreach($listProductImage->product_furniture_images as $productImage)
                                                        <div class="col-md-2">
                                                            <img src="{{\App\Common\ImageCommon::showImage($productImage->image_src)}}">
                                                            <div>
                                                                <a data-toggle="modal" class="nav-link delete-image anchorClick" data-url="{{route('admin.product_image.delete',['id' => $productImage->id, 'productId' => $productId])}}" data-name="Hình ảnh" href="#deleteModal">
                                                                    Xóa Ảnh
                                                                </a>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endif

                                @if(isset($listProductImage->product_exterior_images))
                                    <div class="row">
                                        <div class="card">
                                            <div class="card-header">
                                                <i class="fa fa-align-justify"></i> Nội Thất
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    @foreach($listProductImage->product_exterior_images as $productImage)
                                                        <div class="col-md-2">
                                                            <img src="{{\App\Common\ImageCommon::showImage($productImage->image_src)}}">
                                                            <div>
                                                                <a data-toggle="modal" class="nav-link delete-image anchorClick" data-url="{{route('admin.product_image.delete',['id' => $productImage->id, 'productId' => $productId])}}" data-name="Hình ảnh" href="#deleteModal">
                                                                    Xóa Ảnh
                                                                </a>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
