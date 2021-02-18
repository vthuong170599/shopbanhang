@extends('admin.master')
@section('content')
@section('title','trang quản trị')
@section('name_page','trang quản trị')
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
                            <li class="breadcrumb-item"><a href="javascript:void(0);">shop bán hàng</a></li>
                            <li class="breadcrumb-item active">@yield('name_page')</li>
                        </ol>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end page-title -->

            <div class="row">
                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-heading p-4">
                            <div class="mini-stat-icon float-right">
                                <i class="mdi mdi-briefcase-check bg-success text-white"></i>
                            </div>
                            <div>
                                <h5 class="font-16">Tổng doanh thu</h5>
                            </div>
                            <h3 class="mt-4">{{number_format($total)}} VND</h3>
                            <div class="progress mt-4" style="height: 4px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 88%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
               @if (isset($order_detail))
               <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-heading p-4">
                        <div class="mini-stat-icon float-right">
                            <i class="mdi mdi-buffer bg-danger text-white"></i>
                        </div>
                        <div>
                            <h5 class="font-16">sản phẩm bán chạy</h5>
                        </div>
                        <h3 class="mt-4">{{$order_detail->proName?$order_detail->proName:''}}</h3>
                        <p class="mt-4">{{$order_detail->sku?$order_detail->sku:'0'}}</p>
                        <p class="mt-4">{{$order_detail->quantity?$order_detail->quantity:'0'}} sản phẩm</p>
                        <div class="progress mt-4" style="height: 4px;">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
               @endif
            </div>


        </div>
        <!-- container-fluid -->

    </div>
@endsection
