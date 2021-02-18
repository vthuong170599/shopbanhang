@extends('client.master')
@section('title','trang client')
@section('name_page','Đăng ký')
@section('content')
<style>
    .register {
        padding: 50px
    }

    .register h3 {
        text-align: center
    }
</style>
<div class="breadcrumb-area breadcrumb-bg-3 section-padding-1 pt-200 pb-120" >
    <div class="container-fluid">
        <div class="breadcrumb-content text-center">
            <div class="breadcrumb-title">
                <h2>@yield('name_page')</h2>
            </div>
            <ul>
                <li>
                    <a href="{{route('client.index')}}">Home </a>
                </li>
                <li><span> > </span></li>
                <li class="active"> @yield('name_page')</li>
            </ul>
        </div>
    </div>
</div>
<div class="login-register-area section-padding-1 pt-100 pb-100 register">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-10">
                <div class="login-register-wrap register-wrap">
                    <h3> <i class="fa fa-user-o"></i> Register</h3>
                    <div class="login-register-form form-register">
                        <form action="{{route('client.dang_ky')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="sin-login-register col">
                                    <label>Email <span>*</span></label>
                                    <input type="email" name="email" placeholder="nhập email">
                                    @if (session()->has('err_email'))
                                        <p class="text-danger">{{session('err_email')}}</p>
                                    @endif
                                </div>
                                <div class="sin-login-register col">
                                    <label>Họ tên <span>*</span></label>
                                    <input type="text" name="name" placeholder="nhập họ tên">
                                </div>
                            </div>
                            <div class="row">
                                <div class="sin-login-register col">
                                    <label>địa chỉ <span>*</span></label>
                                    <input type="text" name="address" placeholder="nhập địa chỉ">
                                </div>
                                <div class="sin-login-register col">
                                    <label>Số điện thoại <span>*</span></label>
                                    <input type="text" name="phone" placeholder="nhập số điện thoại">
                                </div>
                            </div>
                            <div class="row">
                                <div class="sin-login-register col">
                                    <label>mật khẩu <span>*</span></label>
                                    <input type="password" name="password" placeholder="nhập mật khẩu">
                                </div>
                                <div class="sin-login-register col">
                                    <label>nhập lại mật khẩu <span>*</span></label>
                                    <input type="password" name="rpass" placeholder="nhập lại mật khẩu">
                                    @if (session()->has('err_password'))
                                    <p class="text-danger">{{session('err_password')}}</p>
                                @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="sin-login-register col-md-6">
                                    <label>giới tính <span>*</span></label>
                                    <select name="gender" id="input" class="form-control">
                                        <option value="1">nam</option>
                                        <option value="0">nữ</option>
                                    </select>
                                </div>
                            </div>
                            <div class="login-register-btn">
                                <button type="submit">đăng ký</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
