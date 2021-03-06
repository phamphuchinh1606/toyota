@extends('admin.layouts.master')

@section('head.title','Danh Sách Tin Tức')

@section('head.css')
    <link href="{{asset('css/admin/plugins/dataTables.bootstrap4.css')}}" rel="stylesheet">
@endsection

@section('body.js')
    <script type="text/javascript" src="{{asset('js/admin/plugins/jquery.dataTables.js')}}" class="view-script"></script>
    <script type="text/javascript" src="{{asset('js/admin/plugins/dataTables.bootstrap4.js')}}" class="view-script"></script>
    {{--<script type="text/javascript" src="{{asset('js/admin/plugins/datatables.js')}}" class="view-script"></script>--}}
@endsection
@section('body.breadcrumb')
    {{ Breadcrumbs::render('admin.blog') }}
@endsection

@section('body.content')
    <div class="container-fluid">
        <div id="ui-view">
            <div>
                <div class="animated fadeIn">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-edit"></i> Danh Sách Tin Tức
                            <div class="card-header-actions">
                                <a class="btn btn-sm btn-primary" href="{{route('admin.blog.create')}}">
                                    Tạo mới
                                </a>
                                <a class="btn btn-sm btn-primary" href="{{route('admin.blog.load_info')}}">
                                    Lấy Tin Tức
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
                                                <th>
                                                    STT
                                                </th>
                                                <th>
                                                    Hình ảnh
                                                </th>
                                                <th>
                                                    Loại tin
                                                </th>
                                                <th>
                                                    Tiêu đề
                                                </th>
                                                <th>
                                                    Ngày đăng
                                                </th>
                                                <th>
                                                    Tình trạng
                                                </th>
                                                <th>
                                                    Actions
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($blogs as $index => $blog)
                                                    <tr>
                                                        <td>
                                                            {{$index + 1}}
                                                        </td>
                                                        <td>
                                                            <img src="{{\App\Common\ImageCommon::showImage($blog->blog_image)}}" style="width: 150px;height: auto"/>
                                                        </td>
                                                        <td>
                                                            {{$blog->blog_type_name}}
                                                        </td>
                                                        <td>
                                                            {{$blog->blog_title}}
                                                        </td>
                                                        <td>
                                                            {{$blog->str_post_date}}
                                                        </td>
                                                        <td class="text-center">
                                                            <span class="badge {{$blog->public_class}}">{{$blog->public_name}}</span>
                                                        </td>
                                                        <td class="text-center">
                                                            {{--<a class="btn btn-success" href="#">--}}
                                                                {{--<i class="fa fa-search-plus"></i>--}}
                                                            {{--</a>--}}
                                                            <a class="btn btn-info" href="{{route('admin.blog.update',['id' => $blog->id])}}">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                            <a data-toggle="modal" class="btn btn-danger anchorClick"
                                                               data-url="{{route('admin.blog.delete',['id' => $blog->id]) }}"
                                                               data-name="{{$blog->blog_title}}" href="#deleteModal">
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
