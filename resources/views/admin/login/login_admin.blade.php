<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themesdesign.in/stexo/layouts/vertical/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Dec 2020 08:08:45 GMT -->
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Đăng nhập hệ thống</title>
        <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
        <meta content="Themesdesign" name="author" />
        <link rel="shortcut icon" href="{{asset('admins/images/favicon.ico')}}">

        <link href="{{asset('admins/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('admins/css/metismenu.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('admins/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('admins/css/style.css')}}" rel="stylesheet" type="text/css">

    </head>

    <body>

        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="home-btn d-none d-sm-block">
                <a href="index.html" class="text-white"><i class="fas fa-home h2"></i></a>
            </div>
        <div class="wrapper-page">
                <div class="card card-pages shadow-none">

                    <div class="card-body">
                        <div class="text-center m-t-0 m-b-15">
                                <a href="index.html" class="logo logo-admin"><img src="{{asset('admins/images/logo-dark.png')}}" alt="" height="24"></a>
                        </div>
                        <h5 class="font-18 text-center">Đăng nhập hệ thống</h5>

                        <form class="form-horizontal m-t-30 login_form" action="{{route('admin.signin')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <div class="col-12">
                                        <label>Email</label>
                                    <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="email">
                                    @if (session()->has('email_err'))
                                    <p class="text-danger">{{session('email_err')}}</p>
                                    @endif
                                    @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-12">
                                        <label>Password</label>
                                    <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password">
                                    @if (session()->has('password_err'))
                                    <p class="text-danger">{{session('password_err')}}</p>
                                @endif
                                @error('password')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-12">
                                    <div class="checkbox checkbox-primary">
                                            <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1"> Remember me</label>
                                                  </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group text-center m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-primary btn-block btn-lg waves-effect waves-light action_login" type="submit">Đăng nhập</button>
                                </div>
                            </div>

                            <div class="form-group row m-t-30 m-b-0">
                                <div class="col-sm-7">
                                    <a href="pages-recoverpw.html" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                                </div>
                                <div class="col-sm-5 text-right">
                                    <a href="pages-register.html" class="text-muted">Create an account</a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        <!-- END wrapper -->

        <!-- jQuery  -->
        <script src="{{asset('admins/js/jquery.min.js')}}"></script>
        <script src="{{asset('admins/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('admins/js/metismenu.min.js')}}"></script>
        <script src="{{asset('admins/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('admins/js/waves.min.js')}}"></script>
        {{-- <script src="{{asset('admins/query/check_login.js')}}"></script> --}}
        <!-- App js -->
        <script src="{{asset('admins/js/app.js')}}"></script>

    </body>


<!-- Mirrored from themesdesign.in/stexo/layouts/vertical/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Dec 2020 08:08:45 GMT -->
</html>
