<?php use App\Common\Constant; ?>

@extends('admin.layouts.master')

@section('head.title','Nhập thông tin tính năng nổi bật sản phẩm')


@section('body.js')
    <script>
        $(document).ready(function(){
            $('a.update-feature').on('click',function(){
                let parent = $(this).closest('tr');
                let featureId = parent.find('input[name=feature_id]').val();
                let productId = parent.find('input[name=product_id]').val();
                let featureTitle = parent.find('input[name=feature_title]').val();
                let featureContent = parent.find('input[name=feature_content]').val();
                let featureImage = parent.find('input[name=feature_image]').val();
                let featureType = parent.find('input[name=feature_type]').val();
                let form = $('#form_'+ featureType);
                form.find('input[name=feature_id]').val(featureId);
                form.find('select[name=product_id]').val(productId);
                form.find('input[name=feature_title]').val(featureTitle);
                form.find('textarea[name=feature_content]').val(featureContent);
                form.find('#imgAdd_'+featureType).attr('src',featureImage);

                form.attr('action',parent.find('input[name=action_update]').val());

                $('#btn_update_image'+featureType).show();
                $('#btn_add_image'+featureType).hide();
                if($( "#form_"+featureType).is( ":hidden" )){
                    $('.show-add-update-image'+ featureType).click();
                }
            });

            $('button#btn-cancel').on('click',function(){
                let form = $(this).closest('form');
                let featureType = form.find("input[name=feature_type]").val();
                form.find('input[name=feature_id]').val('');
                form.find('input[name=product_id]').val('');
                form.find('input[name=feature_title]').val('');
                form.find('textarea[name=feature_content]').val('');
                form.find('#imgAdd_'+featureType).attr('src','http://beats-city.amagumolabs.io/images/upload/no_image_available.jpg');
                form.attr('action','{{route('admin.product_feature.create')}}');

                $('#btn_update_image'+featureType).hide();
                $('#btn_add_image'+featureType).show();
                if($( "#form_"+featureType).is( ":visible" )){
                    $('.show-add-update-image'+ featureType).click();
                }
            });
        })
    </script>
@endsection

@section('body.content')
    <div class="container-fluid">
        <div id="ui-view">
            <div class="row">
                <div class="col-sm-12 col-xl-6">
                    @include('admin.productSalientFeature.__feature_template',[
                        'featureType' => Constant::$FEATURE_TYPE_OPERATE,
                        'featureTitleGroup' => 'Vận Hành',
                        'featureTitleInput' => 'Nhập thông tin vận hành',
                        'listFeature' => $listFeatureOperate
                    ])
                </div>

                <div class="col-sm-12 col-xl-6">
                    @include('admin.productSalientFeature.__feature_template',[
                        'featureType' => Constant::$FEATURE_TYPE_SAFE,
                        'featureTitleGroup' => 'An Toàn',
                        'featureTitleInput' => 'Nhập thông tin an toàn',
                        'listFeature' => $listFeatureSafe
                    ])
                </div>

            </div>

        </div>
    </div>

@endsection