<?php use App\Common\Constant; ?>

@extends('admin.layouts.master')

@section('head.title','Hình ảnh sản phẩm')

@section('body.js')
    <script>
        $(document).ready(function(){
            $('a.update-image').on('click',function(){
                let parent = $(this).closest('div');
                let productImageId = parent.find('input[name=product_image_id]').val();
                let srcImage = parent.find('input[name=src_image]').val();
                let imageContent = parent.find('input[name=image_content]').val();
                let imageType = parent.find('input[name=image_type]').val();
                let form = $('#form');
                form.find('input[name=product_image_id]').val(productImageId);
                form.find('#imgAdd').attr('src',srcImage);
                form.find('textarea[name=image_content]').val(imageContent);
                form.find('select[name=image_type]').val(imageType);
                form.attr('action',parent.find('input[name=action_update]').val());

                $('#btn_update_image').show();
                $('#btn_add_image').hide();
                if($( "#form #collapseAddImage" ).is( ":hidden" )){
                    $('.show-add-update-image').click();
                }
            });

            $('button#btn-cancel').on('click',function(){
                let form = $('#form');
                form.find('input[name=product_image_id]').val('');
                form.find('#imgAdd').attr('src','http://beats-city.amagumolabs.io/images/upload/no_image_available.jpg');
                form.find('input[name=image_content]').val('');
                form.find('input[name=image_type]').val('');
                form.attr('action','{{route('admin.setting.topBanner.create')}}');
                $('#btn_update_image').hide();
                $('#btn_add_image').show();
                if($( "#form #collapseAddImage" ).is( ":visible" )){
                    $('.show-add-update-image').click();
                }
            });
        })
    </script>
@endsection

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
                                <button class="btn btn-primary show-add-update-image" type="button" data-toggle="collapse" data-target="#collapseAddImage" aria-expanded="true" aria-controls="collapseExample" data-placement="top" title="" data-original-title="Them Hinh">
                                    <i class="fa fa-upload fa-lg"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="carousel slide" data-ride="carousel">
                                <form action="{{route('admin.product_image.create')}}" method="post"  enctype="multipart/form-data" id="form">
                                    @csrf
                                    <input type="hidden" id="product_image_id" name="product_image_id" value=""/>
                                    <div class="form-group row collapse" id="collapseAddImage">
                                        <div class="col-md-4">
                                            <input type="hidden" name="product_id" value="{{$productId}}">
                                            <div class="text-right p-sm-1" id="btn_add_image" style="display: none">
                                                <button type="submit" class="btn btn-primary" id="btn_add_image">Thêm hình</button>
                                            </div>
                                            <div class="text-right p-sm-1" id="btn_update_image" style="display: none">
                                                <button type="button" id="btn-cancel" class="btn btn-danger">Hủy</button>
                                                <button type="submit" id="btn-update" class="btn btn-primary">Cập Nhật</button>
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
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label text-right" for="text-input">Mô tả nội dung</label>
                                                <div class="col-md-10">
                                                    <textarea class="form-control" name="image_content" rows="9" placeholder="Nhập mô tả nội dung hình ảnh"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <a data-toggle="modal" class="nav-link delete-image anchorClick" data-url="{{route('admin.product_image.delete',['id' => $productImage->id, 'productId' => $productId])}}" data-name="Hình ảnh" href="#deleteModal">
                                                                    Xóa Ảnh
                                                                </a>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <a href="#" data-toggle="modal" class="nav-link update-image"  data-name="Hình ảnh">
                                                                    Cập Nhật
                                                                </a>
                                                                <input type="hidden" name="product_image_id" value="{{$productImage->id}}"/>
                                                                <input type="hidden" name="action_update" value="{{route('admin.product_image.update')}}"/>
                                                                <input type="hidden" name="src_image" value="{{\App\Common\ImageCommon::showImage($productImage->image_src)}}"/>
                                                                <input type="hidden" name="image_content" value="{{$productImage->image_content}}"/>
                                                                <input type="hidden" name="image_type" value="{{$productImage->image_type}}"/>
                                                            </div>
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
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <a data-toggle="modal" class="nav-link delete-image anchorClick" data-url="{{route('admin.product_image.delete',['id' => $productImage->id, 'productId' => $productId])}}" data-name="Hình ảnh" href="#deleteModal">
                                                                        Xóa Ảnh
                                                                    </a>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <a href="#" data-toggle="modal" class="nav-link update-image"  data-name="Hình ảnh">
                                                                        Cập Nhật
                                                                    </a>
                                                                    <input type="hidden" name="product_image_id" value="{{$productImage->id}}"/>
                                                                    <input type="hidden" name="action_update" value="{{route('admin.product_image.update')}}"/>
                                                                    <input type="hidden" name="src_image" value="{{\App\Common\ImageCommon::showImage($productImage->image_src)}}"/>
                                                                    <input type="hidden" name="image_content" value="{{$productImage->image_content}}"/>
                                                                    <input type="hidden" name="image_type" value="{{$productImage->image_type}}"/>
                                                                </div>
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
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <a data-toggle="modal" class="nav-link delete-image anchorClick" data-url="{{route('admin.product_image.delete',['id' => $productImage->id, 'productId' => $productId])}}" data-name="Hình ảnh" href="#deleteModal">
                                                                        Xóa Ảnh
                                                                    </a>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <a href="#" data-toggle="modal" class="nav-link update-image"  data-name="Hình ảnh">
                                                                        Cập Nhật
                                                                    </a>
                                                                    <input type="hidden" name="product_image_id" value="{{$productImage->id}}"/>
                                                                    <input type="hidden" name="action_update" value="{{route('admin.product_image.update')}}"/>
                                                                    <input type="hidden" name="src_image" value="{{\App\Common\ImageCommon::showImage($productImage->image_src)}}"/>
                                                                    <input type="hidden" name="image_content" value="{{$productImage->image_content}}"/>
                                                                    <input type="hidden" name="image_type" value="{{$productImage->image_type}}"/>
                                                                </div>
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
