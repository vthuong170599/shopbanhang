<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themesdesign.in/stexo/layouts/vertical/pages-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Dec 2020 08:08:45 GMT -->
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Stexo - Responsive Admin & Dashboard Template | Themesdesign</title>
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
                                <a href="index.html" class="logo logo-admin"><img src="assets/images/logo-dark.png" alt="" height="24"></a>
                        </div>
                        <h5 class="font-18 text-center">Register</h5>

                        <form class="form-horizontal m-t-30" action="{{route('admin.signup')}}" method="POST">
                            @csrf
                                <div class="form-group">
                                        <div class="col-12">
                                                <label>Email</label>
                                            <input class="form-control" type="text" name="email" required="" placeholder="Email">
                                        </div>
                                    </div>
                                    @if (session()->has('err_email'))
                                    <p class="text-danger">{{session('err_email')}}</p>
                                    @endif
                            <div class="form-group">
                                <div class="col-12">
                                        <label>Username</label>
                                    <input class="form-control" type="text" name="name" required="" placeholder="Username">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-12">
                                        <label>Phone</label>
                                    <input class="form-control" type="text" name="phone" required="" placeholder="phone">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-12">
                                        <label>Password</label>
                                    <input class="form-control" type="password" name="password" required="" placeholder="Password">
                                </div>
                            </div>


                            <div class="form-group text-center m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit">Register</button>
                                </div>
                            </div>

                            <div class="form-group mb-0 row">
                                    <div class="col-12 m-t-10 text-center">
                                        <a href="{{route('admin.login')}}" class="text-muted">Already have account?</a>
                                    </div>
                                </div>
                        </form>
                    </div>

                </div>
            </div>
        <!-- END wrapper -->

        <script src="{{asset('admins/js/jquery.min.js')}}"></script>
        <script src="{{asset('admins/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('admins/js/metismenu.min.js')}}"></script>
        <script src="{{asset('admins/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('admins/js/waves.min.js')}}"></script>
        {{-- <script src="{{asset('admins/query/check_login.js')}}"></script> --}}
        <!-- App js -->
        <script src="{{asset('admins/js/app.js')}}"></script>


    </body>


<!-- Mirrored from themesdesign.in/stexo/layouts/vertical/pages-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Dec 2020 08:08:45 GMT -->
</html>
