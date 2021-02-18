@extends('admin.master')
@section('content')
@section('title','Banner')
@section('name_page','Banner')
<style>
    .getcontent p{
    white-space: nowrap;
    margin: 0;
    width: 200px;
    height: 100%;
    text-overflow: ellipsis;
    overflow: hidden;
    }
</style>
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">@yield('name_page')</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Shop bán hàng</a></li>
                            <li class="breadcrumb-item active">@yield('name_page')</li>
                        </ol>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end page-title -->
            @if (session()->has('success'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>{{session('success')}}</strong>
            </div>
            @endif
            <div class="row">

                <a href="{{route('banner.create')}}" class="btn btn-success m-2">Thêm banner</a>
                <table class="table table-hover ">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tên</th>
                            <th>Tiêu đề</th>
                            <th>Nội dung</th>
                            <th>Ảnh</th>
                            <th>Trạng thái</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($banners as $value)
                        <tr class="getcontent">
                            <td>{{$loop->iteration}}</td>
                            <td>{{$value->name}}</td>
                            <td><p>{{$value->title}}</p></td>
                            <td><p>{{$value->content}}</p></td>
                            <td><img src="{{asset($value->img_banner)}}" alt="" style="width:100px"></td>
                            <td>{{$value->status==1?'hiện':'ẩn'}}</td>
                            <td>
                                <a href="{{route('banner.edit',$value->id)}}" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                <a href="" data-url="{{route('banner.delete',$value->id)}}" class="btn btn-danger action_delete"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            <div class="d-felx justify-content-center">

            {{-- {{ $banner->links() }} --}}

            </div>

        </div>
        <!-- container-fluid -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script src="{{asset('admins/query/delete.js')}}"></script>
    </div>
    @endsection
