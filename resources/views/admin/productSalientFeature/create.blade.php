<?php use App\Common\Constant; ?>

@extends('admin.layouts.master')

@section('head.title','Nhập thông tin tính năng nổi bật sản phẩm')

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