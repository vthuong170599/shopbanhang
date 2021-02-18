<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themesdesign.in/stexo/layouts/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Dec 2020 08:08:10 GMT -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>@yield('title')</title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesdesign" name="author" />
    {{-- <link rel="shortcut icon" href="assets/images/favicon.ico"> --}}

    <!--Morris Chart CSS -->
    {{-- <link rel="stylesheet" href="{{/plugins/morris/morris.css}}"> --}}
    <link href="{{asset('admins/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admins/css/metismenu.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admins/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admins/css/style.css')}}" rel="stylesheet" type="text/css">
    <script src="https://cdn.tiny.cloud/1/7n911a9591bkn5pif0epywc9rve5lcsebttcp927m18ebabh/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="index.html" class="logo">
                    <span class="logo-light">
                            <i class="mdi mdi-camera-control"></i> Stexo
                        </span>
                    <span class="logo-sm">
                            <i class="mdi mdi-camera-control"></i>
                        </span>
                </a>
            </div>

            <nav class="navbar-custom">
                <ul class="navbar-right list-inline float-right mb-0">

                    <!-- language-->
                    <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{asset('admins/images/flags/us_flag.jpg')}}" class="mr-2" height="12" alt="" /> English <span class="mdi mdi-chevron-down"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated language-switch">
                            <a class="dropdown-item" href="#"><img src="{{asset('admins/images/flags/french_flag.jpg')}}" alt="" height="16" /><span> French </span></a>
                            <a class="dropdown-item" href="#"><img src="{{asset('admins/images/flags/spain_flag.jpg')}}" alt="" height="16" /><span> Spanish </span></a>
                            <a class="dropdown-item" href="#"><img src="{{asset('admins/images/flags/russia_flag.jpg')}}" alt="" height="16" /><span> Russian </span></a>
                            <a class="dropdown-item" href="#"><img src="{{asset('admins/images/flags/germany_flag.jpg')}}" alt="" height="16" /><span> German </span></a>
                            <a class="dropdown-item" href="#"><img src="{{asset('admins/images/flags/italy_flag.jpg')}}" alt="" height="16" /><span> Italian </span></a>
                        </div>
                    </li>

                    <!-- full screen -->
                    <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                        <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                            <i class="mdi mdi-arrow-expand-all noti-icon"></i>
                        </a>
                    </li>

                    <!-- notification -->
                    <li class="dropdown notification-list list-inline-item">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="far fa-comment-dots"></i>
                            <span class="badge badge-pill badge-danger noti-icon-badge">{{count($contact_user)}}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg px-1">
                            <!-- item-->
                            <h6 class="dropdown-item-text">
                                    Notifications
                                </h6>
                            <div class="slimscroll notification-item-list">

                                @foreach ($contact_user as $item)
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details"><b>{{$item->name}}</b><span class="text-muted">send message</span></p>
                                </a>
                                @endforeach

                            </div>
                            <!-- All-->
                            <a href="{{route('contact-user.index')}}" class="dropdown-item text-center notify-all text-primary">
                                    View all <i class="fi-arrow-right"></i>
                                </a>
                        </div>
                    </li>
                    <li class="dropdown notification-list list-inline-item">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="mdi mdi-bell-outline noti-icon"></i>
                            <span class="badge badge-pill badge-danger noti-icon-badge">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg px-1">
                            <!-- item-->
                            <h6 class="dropdown-item-text">
                                    Notifications
                                </h6>
                            <div class="slimscroll notification-item-list">

                                @foreach ($order as $item)
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details"><b>{{$item->name}}</b><span class="text-muted">{{$item->note}}</span></p>
                                </a>
                                @endforeach

                            </div>
                            <!-- All-->
                            <a href="{{route('order.index')}}" class="dropdown-item text-center notify-all text-primary">
                                    View all <i class="fi-arrow-right"></i>
                                </a>
                        </div>
                    </li>

                    <li class="dropdown notification-list list-inline-item">
                        <div class="dropdown notification-list nav-pro-img">
                            <a class="dropdown-toggle nav-link arrow-none nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="{{asset('admins/images/users/user-4.jpg')}}" alt="user" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <a class="dropdown-item" href="{{route('profile.index')}}"><i class="mdi mdi-account-circle"></i> Profile</a>
                                <a class="dropdown-item" href="{{route('profile.edit_password',(session()->get('admin')->id))}}"><i class="mdi mdi-settings"></i> đổi mật khẩu</a>
                                <a class="dropdown-item text-danger" href="{{route('admin.logout')}}"><i class="mdi mdi-power text-danger"></i> đăng xuất</a>
                            </div>
                        </div>
                    </li>

                </ul>

                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left waves-effect">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>
                    <li class="d-none d-md-inline-block">
                        <form role="search" class="app-search">
                            <div class="form-group mb-0">
                                <input type="text" class="form-control" placeholder="Search..">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </li>
                </ul>

            </nav>

        </div>
        <!-- Top Bar End -->
