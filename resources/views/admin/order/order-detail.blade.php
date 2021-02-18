@extends('admin.master')
@section('content')
@section('title','Quản lý đơn hàng')
@section('name_page','Order')
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
            <div class="row">

                <div class="panel panel-info">
                      <div class="panel-heading">
                            <h3 class="panel-title">Người mua hàng: {{$orders->name}}</h3>
                      </div>
                      <div class="panel-body">
                            <p>Mã đơn hàng: {{$orders->id}}</p>
                            <p>ghi chú: {{$orders->note}}</p>
                      </div>
                </div>

                <table class="table table-hover " style="margin-top: 10px;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tên sản phẩm</th>
                            <th>Mã sản phẩm</th>
                            <th>size</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order_detail as $value)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$value->proName}}</td>
                            <td>{{$value->sku}}</td>
                            <td>{{$value->sizeName}}</td>
                            <td>{{number_format($value->price)}} VND</td>
                            <td>{{$value->quantity}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


        </div>
        <!-- container-fluid -->

    </div>

    @endsection
