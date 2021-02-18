@extends('admin.master')
@section('content')
@section('title','đổi mật khẩu')
@section('name_page','edit password')
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

                <div class="col-md-6">
                    <form action="{{route('profile.update_password',$admin->id)}}" method="POST" role="form">
                        @csrf
                        <legend>Đổi mật khẩu</legend>

                        <div class="form-group">
                            <label for="">Mật khẩu hiện tại</label>
                            <input type="password" class="form-control @error('name') is-invalid @enderror"
                                name="password" placeholder="nhập mật khẩu hiện tại">
                            @if (Session::has('err_pass'))
                            <p class="text-danger">{{session('err_pass')}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Mật khẩu mới</label>
                            <input type="password" class="form-control @error('email') is-invalid @enderror"
                                name="new_pass" placeholder="nhập mật khẩu mới">
                            @error('email')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Nhập lại mật khẩu mới</label>
                            <input type="password" class="form-control @error('phone') is-invalid @enderror"
                                name="r_pass" placeholder="mật khẩu mới">
                            @if (Session::has('err_rpass'))
                            <p class="text-danger">{{session('err_rpass')}}</p>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary">Đổi mật khẩu</button>
                    </form>
                </div>

            </div>


        </div>
        <!-- container-fluid -->

    </div>
    @endsection
