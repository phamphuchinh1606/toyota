<?php use App\Common\Constant; ?>
<div class="card list-image">
    <div class="card-header">
        <i class="fa fa-align-justify"></i> {{$featureTitleGroup}}
        <div class="card-header-actions">
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseAddImage{{$featureType}}" aria-expanded="true" aria-controls="collapseExample" data-placement="top" title="" data-original-title="Them Hinh">
                <i class="fa fa-tag fa-lg"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        <div class="carousel slide" data-ride="carousel">
            <div class="form-group row">
                <div class="col-md-12 collapse" id="collapseAddImage{{$featureType}}">
                    <form action="{{route('admin.product_feature.create')}}" method="post"  enctype="multipart/form-data" id="form">
                        @csrf
                        <input type="hidden" name="feature_type" value="{{$featureType}}" />
                        <div class="card">
                            <div class="card-header">{{$featureTitleInput}}
                            </div>
                            <form action="" method="post">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="text-input">Chọn sản phẩm</label>
                                        <div class="col-md-9">
                                            @include('both.common.__select_product',['selectName' => 'product_id', 'defaultValue' => $productId])
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="text-input">Tiêu đề</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="text-input" type="text" name="feature_title" placeholder="Tiêu đề">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="text-input">Nội dung</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" name="feature_content" rows="4" placeholder="Nội dung"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-lable" for="text-input">Hình ảnh</label>
                                        <div class="col-md-9">
                                            <div class="upload__area-image">
                                                <span>
                                                    <img id="imgAdd_{{$featureType}}" src="http://beats-city.amagumolabs.io/images/upload/no_image_available.jpg">
                                                    <label for="imageFileAdd{{$featureType}}">Upload image</label>
                                                </span>
                                                <p>
                                                    <small>(Please upload a file of type: jpeg, png, jpg, gif, svg. ( width: 600px , height: 600px)</small>
                                                </p>
                                            </div>
                                            <div class="form__upload">
                                                <div class="form-inline-simple">
                                                    <input type="file" name="feature_image" class="form-control imgAnchorInput" id="imageFileAdd{{$featureType}}" onchange="loadFileImage{{$featureType}}(event)">
                                                </div>
                                                <script>
                                                    var loadFileImage{{$featureType}} = function(event) {
                                                        var output = document.getElementById('imgAdd_{{$featureType}}');
                                                        output.src = URL.createObjectURL(event.target.files[0]);
                                                    };
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="card-footer">
                                <div class="form-group form-actions">
                                    <button class="btn btn-primary pull-right" type="submit">Thêm</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <table class="table table-responsive-sm table-striped">
                    <thead>
                    <tr>
                        <th style="width: 10%">STT</th>
                        <th>Tiêu đề</th>
                        <th style="width: 20%">Hình ảnh</th>
                        <th style="width: 20%">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($listFeature as $index => $feature)
                        <tr>
                            <td>{{$index + 1}}</td>
                            <td>{{$feature->feature_title}}</td>
                            <td>
                                <img src="{{asset(\App\Common\Constant::$PATH_URL_UPLOAD_IMAGE.$feature->feature_image)}}" style="width:100px;height:auto"/>
                            </td>
                            <td class="">
                                <a data-toggle="modal" class="btn btn-danger anchorClick"
                                   data-url="{{route('admin.product_feature.delete',['id' => $feature->id,'productId' => $productId]) }}"
                                   data-name="{{$feature->feature_title}}" href="#deleteModal">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>