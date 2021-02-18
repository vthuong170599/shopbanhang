@extends('client.master')
@section('content')

<div class="breadcrumb-area bg-gray-2 section-padding-1 pt-200 pb-120">
    <div class="container-fluid">
        <div class="breadcrumb-content text-center">
            <div class="breadcrumb-title">
                <h2>Login / Register</h2>
            </div>
            <ul>
                <li>
                    <a href="index.html">Home </a>
                </li>
                <li><span> > </span></li>
                <li class="active">Login / Register</li>
            </ul>
        </div>
    </div>
</div>
<div class="login-register-area section-padding-1 pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="login-register-wrap mr-70">
                    <h3><i class="fa fa-user-o"></i> Login</h3>
                    <div class="login-register-form">
                        <form action="#">
                            <div class="sin-login-register">
                                <label>Username or email address <span>*</span></label>
                                <input type="text" name="user-name">
                            </div>
                            <div class="sin-login-register">
                                <label>Password <span>*</span></label>
                                <input type="password">
                            </div>
                            <div class="login-register-btn-remember">
                                <div class="login-register-btn">
                                    <button type="submit">Log in</button>
                                </div>
                                <div class="login-register-remember">
                                    <input type="checkbox">
                                    <label>Remember me</label>
                                </div>
                            </div>
                            <a href="#">Lost your password?</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="login-register-wrap register-wrap">
                    <h3> <i class="fa fa-user-o"></i> Register</h3>
                    <div class="login-register-form">
                        <form action="#">
                            <div class="sin-login-register">
                                <label>Email address <span>*</span></label>
                                <input type="email" name="user-name">
                            </div>
                            <p>Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="#">privacy policy</a></p>
                            <div class="login-register-btn">
                                <button type="submit">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
