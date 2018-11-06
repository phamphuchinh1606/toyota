<?php use App\Common\Constant; ?>

@extends('admin.layouts.master')

@section('head.title','Thiết lặp hình ảnh sản phẩm')

@section('head.css')
    <link href="{{asset('css/admin/plugins/dataTables.bootstrap4.css')}}" rel="stylesheet">
@endsection

@section('body.js')
    <script type="text/javascript" src="{{asset('js/admin/plugins/jquery.dataTables.js')}}" class="view-script"></script>
    <script type="text/javascript" src="{{asset('js/admin/plugins/dataTables.bootstrap4.js')}}" class="view-script"></script>
@endsection

@section('body.breadcrumb')
    {{ Breadcrumbs::render('admin.productType') }}
@endsection

@section('body.content')
    <div class="container-fluid">
        <div id="ui-view">
            <div>
                <div class="animated fadeIn">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-edit"></i> Danh sách màu của sản phẩm
                            <div class="card-header-actions">
                                <a class="btn btn-block btn-outline-primary active" href="{{route('admin.product_color.create')}}">
                                    Tạo mới
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-striped table-bordered datatable dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="border-collapse: collapse !important">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc">
                                                        Số Thứ Tự
                                                    </th>
                                                    <th class="sorting">
                                                        Tên Sản Phẩm
                                                    </th>
                                                    <th class="sorting">
                                                        Tên Màu Sắc
                                                    </th>
                                                    <th class="sorting">
                                                        Hình Ảnh
                                                    </th>
                                                    <th class="sorting">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($productColors as $index => $productColor)
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1">
                                                            {{$index + 1}}
                                                        </td>
                                                        <td>
                                                            {{$productColor->product_name}}
                                                        </td>
                                                        <td>
                                                            {{$productColor->color_name}}
                                                        </td>
                                                        <td>
                                                            <img src="{{asset(Constant::$PATH_URL_UPLOAD_IMAGE.$productColor->color_image)}}" style="width: 100px;height:auto;"/>
                                                        </td>

                                                        <td class="text-center">
                                                            {{--<a class="btn btn-success" href="#">--}}
                                                                {{--<i class="fa fa-search-plus"></i>--}}
                                                            {{--</a>--}}
                                                            <a class="btn btn-info" href="{{route('admin.product_color.update',['id' => $productColor->id])}}">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                            <a class="btn btn-danger" href="#">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
