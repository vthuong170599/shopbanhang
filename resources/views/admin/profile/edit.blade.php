@extends('admin.master')
@section('content')
@section('title','chỉnh sửa thông tin')
@section('name_page','edit profile')
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

                <form action="{{route('profile.update',$admin->id)}}" method="POST" role="form">
                    @csrf
                    <legend>Chỉnh sửa thông tin cá nhân</legend>

                    <div class="form-group">
                        <label for="">Tên tài khoản</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                            value="{{$admin->name}}" name="name" placeholder="nhập tên tài khoản">
                        @error('name')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{$admin->email}}" name="email"
                            placeholder="nhập email">
                            @error('email')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Số điện thoại</label>
                        <input type="tel" class="form-control @error('phone') is-invalid @enderror" value="{{$admin->phone}}" name="phone"
                            placeholder="nhập số điện thoại">
                            @error('phone')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                </form>

            </div>


        </div>
        <!-- container-fluid -->

    </div>
    @endsection
