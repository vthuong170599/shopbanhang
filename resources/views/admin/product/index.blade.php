@extends('admin.master')
@section('content')
@section('title','Danh sách sản phẩm')
@section('name_page','Product')
<style>
    .getcontent p{
    white-space: nowrap;
    width: 150px;
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

                <a href="{{route('product.create')}}" class="btn btn-success m-2">Thêm sản phẩm</a>
                <table class="table table-hover ">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tên sản phẩm</th>
                            <th>Mã sản phẩm</th>
                            <th>Danh mục</th>
                            <th>Thương hiệu</th>
                            <th>Ảnh đại diện</th>
                            <th>Mô tả</th>
                            <th>Trạng thái</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($product as $value)
                        <tr class="getcontent">
                            <td>{{$loop->iteration}}</td>
                            <td><p>{{$value->name}}</p></td>
                            <td>{{$value->sku}}</td>
                            <td>{{$value->cateName}}</td>
                            <td>{{$value->brandName}}</td>
                            <td><img src="{{asset($value->avatar)}}" alt="" style="width:50px"></td>
                            <td><p>{{$value->desc}}</p></td>
                            <td>{{$value->status==1?'hiện':'ẩn'}}</td>
                            <td>
                                <a href="{{route('product_detail.index',$value->id)}}"><i class="mdi mdi-eye btn-info btn"></i></a>
                                <a href="{{route('product.edit',$value->id)}}" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                <a href="" data-url="{{route('product.delete',$value->id)}}" class="btn btn-danger action_delete"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            <div class="d-felx justify-content-center">

                {{ $product->links() }}

            </div>

        </div>
        <!-- container-fluid -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script src="{{asset('admins/query/delete.js')}}"></script>
    </div>
    @endsection
