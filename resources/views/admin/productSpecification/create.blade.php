@extends('admin.layouts.master')
@section('head.title','Tạo mới thông tin sản phẩm')
@section('head.css')
    <link href="{{asset('css/admin/product.css')}}" rel="stylesheet">
@endsection

@section('body.js')
    {{--<script src="{{asset('js/admin/switch.plugin.js')}}"></script>--}}
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
                        <div class="col-md-12">
                            <form method="post" action="{{route('admin.product_specification.create')}}">
                                @csrf
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Tạo mới thông tin sản phẩm</strong>
                                        <div class="card-header-actions">
                                            <a class="btn btn-block btn-outline-secondary active"
                                               href="{{route('admin.product.update',['id' => $productId])}}">
                                                Quay Lại
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        @if(isset($message))
                                            <div class="alert alert-warning" role="alert">{{$message}}</div>
                                        @endif
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label font-weight-bold" for="text-input">Chọn Sản Phẩm</label>
                                            <div class="col-md-8">
                                                @include('both.common.__select_product',['selectName' => 'product_id','defaultValue' => $productId])
                                            </div>
                                            {{--<div class="col-md-2">--}}
                                                {{--@if(!isset($message))--}}
                                                    {{--<a class="btn btn-block btn-outline-primary active" href="{{route('admin.product_specification.load_info',['productId' => $productId])}}">--}}
                                                        {{--Lấy thông tin sản phẩm--}}
                                                    {{--</a>--}}
                                                {{--@endif--}}
                                            {{--</div>--}}
                                        </div>
                                        <ul class="nav nav-tabs" role="tablist">
                                            @foreach($specificationInfo as $index => $group)
                                                <li class="nav-item">
                                                    <a class="nav-link @if($index == 0) active show @endif"
                                                       data-toggle="tab" href="#tab_{{$group->group_id}}" role="tab"
                                                       aria-controls="tab_{{$group->group_id}}"
                                                       aria-selected="true">{{$group->group_name}}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                        <div class="tab-content padding-10">
                                            @foreach($specificationInfo as $index => $group)
                                                <div class="tab-pane @if($index == 0) active show @endif"
                                                     id="tab_{{$group->group_id}}" role="tabpanel">
                                                    @foreach($group->types as $indexType => $type)
                                                        <div class="row @if($indexType %2==0) odd @endif">
                                                            <div class="col-md-3 border-solid line-height-40 font-weight-bold">
                                                                {{$type->type_name}}
                                                            </div>
                                                            <div class="col-md-9">
                                                                @foreach($type->items as $item)
                                                                    <div class="row">
                                                                        <div
                                                                            class="col-md-6 border-solid line-height-40">
                                                                            @if($item->item_name == '')
                                                                                &nbsp;
                                                                            @else
                                                                                {{$item->item_name}}
                                                                            @endif
                                                                        </div>
                                                                        <div
                                                                            class="col-md-6 border-solid padding-top-5">
                                                                            <input class="form-control" id="text-input"
                                                                                   type="text"
                                                                                   name="{{$group->group_id.'_'.$type->type_id.'_'.$item->item_id}}"
                                                                                   placeholder="..." value="{{$item->content}}">
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="card-footer text-center">
                                        <button class="btn btn-sm btn-primary" type="submit">
                                            <i class="fa fa-dot-circle-o"></i> Lưu Thông Tin
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
