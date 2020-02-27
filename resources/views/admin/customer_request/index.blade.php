<?php use App\Common\Constant; ?>

@extends('admin.layouts.master')

@section('head.title','Yêu cầu từ khách hàng')

@section('head.css')
    <link href="{{asset('css/admin/plugins/dataTables.bootstrap4.css')}}" rel="stylesheet">
    <style>

        @media (min-width: 610px) {
            .hidden-lg{
                display: none;
            }
        }
        @media (max-width: 600px) {
            .hidden-xs{
                display: none;
            }
            .main .container-fluid{
                padding: 0;
            }
        }
    </style>
@endsection

@section('body.js')
    <script type="text/javascript" src="{{asset('js/admin/plugins/jquery.dataTables.js')}}" class="view-script"></script>
    <script type="text/javascript" src="{{asset('js/admin/plugins/dataTables.bootstrap4.js')}}" class="view-script"></script>
    {{--<script type="text/javascript" src="{{asset('js/admin/plugins/datatables.js')}}" class="view-script"></script>--}}
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
                            <i class="fa fa-edit"></i> Danh sách yêu cầu từ khách hàng
                        </div>
                        <div class="card-body">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-striped table-bordered datatable dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="border-collapse: collapse !important">
                                            <thead>
                                                <tr role="row">
                                                    <th>
                                                        STT
                                                    </th>
                                                    <th>
                                                        Họ Tên
                                                    </th>
                                                    <th class="hidden-xs">
                                                        Email
                                                    </th>
                                                    <th>
                                                        Số điện thoại
                                                    </th>
                                                    <th class="hidden-xs">
                                                        Sản phẩm
                                                    </th>
                                                    <th class="hidden-xs">
                                                        Ngân sách
                                                    </th>
                                                    <th class="hidden-xs">
                                                        Ngày dự định
                                                    </th>
                                                    <th class="hidden-xs">
                                                        Tình Trạng
                                                    </th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($list as $index => $item)
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1">
                                                            {{$index + 1}}
                                                        </td>
                                                        <td>
                                                            {{$item->name}}<br/>
                                                            <span class="hidden-lg">{{$item->product->product_name}}</span>
                                                        </td>
                                                        <td class="hidden-xs">
                                                            {{$item->email}}
                                                        </td>
                                                        <td>
                                                            {{$item->phone}}
                                                            <span class="hidden-lg badge {{$item->status_class}}">{{$item->status_name}}</span>
                                                        </td>
                                                        <td class="hidden-xs">
                                                            {{$item->product->product_name}}
                                                        </td>
                                                        <td class="hidden-xs">
                                                            {{App\Common\AppCommon::formatMoney($item->amount_current)}}
                                                        </td>
                                                        <td class="hidden-xs">
                                                            {{ App\Common\DateUtils::dateFormat($item->time_plan,'Y-m-d')}}
                                                        </td>
                                                        <td class="text-center hidden-xs">
                                                            <span class="badge {{$item->status_class}}">{{$item->status_name}}</span>
                                                        </td>
                                                        <td class="text-center">
                                                            <a class="btn btn-success" href="{{route('admin.customer_request.show',['id' => $item->id])}}">
                                                                <i class="fa fa-search-plus"></i>
                                                            </a>
                                                            <a data-toggle="modal" class="btn btn-danger anchorClick"
                                                               data-url="{{route('admin.customer_request.delete',['id' => $item->id]) }}"
                                                               data-name="{{$item->name}}" href="#deleteModal">
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
                            <div class="row">
                                {{$list->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
