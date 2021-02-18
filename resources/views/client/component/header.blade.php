<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from demo.hasthemes.com/payna-preview/payna/shop-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Nov 2020 08:23:57 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Payna - Minimal eCommerce HTML Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('clients/images/favicon.png')}}">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('clients/css/vendor/bootstrap.min.css')}}">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{asset('clients/css/vendor/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('clients/css/vendor/themify.css')}}">
    <!-- othres CSS -->
    <link rel="stylesheet" href="{{asset('clients/css/plugins/animate.css')}}">
    <link rel="stylesheet" href="{{asset('clients/css/plugins/owl-carousel.css')}}">
    <link rel="stylesheet" href="{{asset('clients/css/plugins/slick.css')}}">
    <link rel="stylesheet" href="{{asset('clients/css/plugins/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('clients/css/plugins/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('clients/css/plugins/easyzoom.css')}}">
    <link rel="stylesheet" href="{{asset('clients/css/plugins/select2.min.css')}}">
    <!-- Revolution Slider CSS -->
    <link rel="stylesheet" href="{{asset('clients/js/revolution/css/settings.css')}}">
    <link rel="stylesheet" href="{{asset('clients/js/revolution/css/navigation.css')}}">
    <link rel="stylesheet" href="{{asset('clients/js/revolution/custom-setting.css')}}">

    <link rel="stylesheet" href="{{asset('clients/css/style.css')}}">

</head>

<body>
    <div class="main-wrapper main-wrapper-2">
        <header class="header-area header-padding-1">
            <div class="main-header-wrap transparent-bar">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <div class="logo-header-about-wrap">
                                <div class="logo logo-width">
                                    <a href="{{route('client.index')}}"><img src="{{asset($logo->image)}}" alt="logo"></a>
                                </div>
                                <div class="header-about-icon ml-35">
                                    <a class="quickinfo-button-active" href="#"><i class=" ti-align-left "></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex justify-content-center">
                            <div class="main-menu menu-lh-1">
                                <nav>
                                    <ul>
                                        <li><a class="active" href="{{route('client.index')}}">Home</i></a>
                                        </li>
                                        <li><a href="#">Shop <i class="fa fa-angle-down"></i></a>
                                            <ul class="mega-menu mega-menu-width2 menu-negative-mrg2">
                                                <li class="mega-menu-sub-width20">Shop
                                                    Page
                                                    <ul>
                                                        <li><a href="{{route('client.show_cart')}}">Shopping Cart</a>
                                                        </li>
                                                        <li><a href="{{route('client.checkout')}}">Check Out</a></li>
                                                        <li><a href="{{route('client.info')}}">My Account</a></li>
                                                        <li><a href="{{route('client.wishlist')}}">Wishlist</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="{{route('client.contact')}}">Contact</i></a>
                                        </li>
                                        <li><a href="{{route('client.blog')}}">Blog</a>
                                        </li>

                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="lang-cart-search-wrap">
                                <div class="language mr-55">
                                    <ul>
                                        <li><a class="active" href="#">English</a></li>
                                        <li><a href="#">Vietnamese</a></li>
                                    </ul>
                                </div>
                                <div class="same-style header-search">
                                    <a class="search-active" href="#"><i class="ti-search"></i></a>
                                </div>
                                <div class="same-style cart-wrap ml-20">
                                    <a href="#" class="cart-active">
                                        <i class=" ti-shopping-cart "></i>
                                        <span class="count-style">2</span>
                                    </a>
                                </div>
                                <div class="same-style dropdown cart-wrap ml-20" style="float:right;">
                                        <a class="dropbtn"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
                                        <div class="dropdown-content">
                                           @if (session()->has('client'))
                                            <a href="{{route('client.info')}}" class="drop-item">Thông tin tài khoản</a>
                                            <a href="{{route('client.logout')}}" class="drop-item">Đăng xuất</a>
                                           @else
                                           <a href="{{route('client.login')}}" class="drop-item">Đăng nhập</a>
                                           <a href="{{route('client.register')}}" class="drop-item">Đăng ký</a>
                                           @endif
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-small-mobile header-small-mobile-ptb">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="mobile-logo logo-width">
                                <a href="index.html">
                                    <img alt="" src="{{asset('clients/images/logo/logo.png')}}">
                                </a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mobile-header-right-wrap">
                                <div class="same-style cart-wrap">
                                    <a href="#" class="cart-active">
                                        <i class=" ti-shopping-cart "></i>
                                        <span class="count-style">2</span>
                                    </a>
                                </div>
                                <div class="mobile-off-canvas">
                                    <a class="mobile-aside-button" href="#"><i class=" ti-align-left "></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="quickinfo-wrapper-active quickinfo-toggle-left">
            <a class="quickinfo-close"><i class=" ti-close"></i></a>
            <div class="quickinfo-wrap">
                <div class="quickinfo-menu">
                    <nav>
                        <ul>
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="">Help Center</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="{{route('client.contact')}}">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="quickinfo-banner default-overlay">
                    <a href="#"><img src="{{asset('clients/images/banner/quick-info-banner.jpg')}}" alt="quick-info"></a>
                    <div class="quickinfo-banner-content">
                        <h3>new</h3>
                    </div>
                </div>
                <div class="quickinfo-address">
                    <ul>
                        <li>(+612) 2531 5600 </li>
                        <li><a href="#">info@example.com </a></li>
                        <li>PO Box 1622 Colins Street West <br>Victoria 8077 Australia</li>
                    </ul>
                </div>
                <div class="quickinfo-map-link">
                    <a href="#">Google map</a>
                </div>
                <div class="quickinfo-social">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="quickinfo-payment">
                    <img src="{{asset('clients/images/icon-img/payment-info.png')}}" alt="payment">
                </div>
                <div class="quickinfo-copyright">
                    <p>© 2019 <a href="#">Payna</a> Shop. All rights reserved</p>
                </div>
            </div>
        </div>
        <div class="mobile-off-canvas-active">
            <a class="mobile-aside-close"><i class="ti-close"></i></a>
            <div class="header-mobile-aside-wrap">
                <div class="mobile-search">
                    <form class="search-form" action="{{route('client.search')}}" method="POST">
                        @csrf
                        <input type="text" placeholder="Search entire store…" name="search">
                        <button  type="submit"><i class="ti-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu-wrap">
                    <!-- mobile menu start -->
                    <div class="mobile-navigation">
                        <!-- mobile menu navigation start -->
                        <nav>
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children"><a href="index.html">Home</a>
                                </li>
                                <li class="menu-item-has-children "><a href="shop-fullwide.html">shop</a>
                                    <ul class="dropdown">
                                        <li class="menu-item-has-children"><a href="#">Shop Layout</a>
                                            <ul class="dropdown">
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#">Product Layout</a>
                                            <ul class="dropdown">
                                                <li><a href="product-details.html">Simple 01</a></li>
                                                <li><a href="product-details-2.html">Simple 02</a></li>
                                                <li><a href="product-details-3.html">Simple 03</a></li>
                                                <li><a href="product-details-carousel.html">Product Carousel</a></li>
                                                <li><a href="product-details-grouped.html">Product Grouped</a></li>
                                                <li><a href="product-details-affiliate.html">Product Affiliate</a></li>
                                                <li><a href="product-details-configurable.html">Product Configurable</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#">Shop Page </a>
                                            <ul class="dropdown">
                                                <li><a href="cart.html">Shopping Cart</a></li>
                                                <li><a href="checkout.html">Check Out</a></li>
                                                <li><a href="my-account.html">My Account</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="compare.html">Compare</a></li>
                                                <li><a href="order-tracking.html">Order Tracking</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="contact-us.html">Contact Us</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="comming-soon.html">Comming Soon</a></li>
                                        <li><a href="404.html">Page 404</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children "><a href="blog.html">Blog</a>
                                    <ul class="dropdown">
                                        <li><a href="blog.html">Blog Sidebar</a></li>
                                        <li><a href="blog-no-sidebar.html">Blog No Sidebar</a></li>
                                        <li><a href="blog-3col.html">Blog 03 Columns</a></li>
                                        <li><a href="blog-masonry.html">Blog Mansory</a></li>
                                        <li class="menu-item-has-children"><a href="#">Single Post</a>
                                            <ul class="dropdown">
                                                <li><a href="blog-details.html">Single Post 01</a></li>
                                                <li><a href="blog-details-2.html">Single Post 02</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="contact-us.html">Contact us</a></li>
                            </ul>
                        </nav>
                        <!-- mobile menu navigation end -->
                    </div>
                    <!-- mobile menu end -->
                </div>
                <div class="mobile-curr-lang-wrap">
                    <div class="single-mobile-curr-lang">
                        <a class="mobile-language-active" href="#">Language <i class="fa fa-angle-down"></i></a>
                        <div class="lang-curr-dropdown lang-dropdown-active">
                            <ul>
                                <li><a href="#">English (US)</a></li>
                                <li><a href="#">English (UK)</a></li>
                                <li><a href="#">Spanish</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-mobile-curr-lang">
                        <a class="mobile-currency-active" href="#">Currency <i class="fa fa-angle-down"></i></a>
                        <div class="lang-curr-dropdown curr-dropdown-active">
                            <ul>
                                <li><a href="#">USD</a></li>
                                <li><a href="#">EUR</a></li>
                                <li><a href="#">Real</a></li>
                                <li><a href="#">BDT</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-mobile-curr-lang">
                        <a class="mobile-account-active" href="#">My Account <i class="fa fa-angle-down"></i></a>
                        <div class="lang-curr-dropdown account-dropdown-active">
                            <ul>
                                <li><a href="#">Login</a></li>
                                <li><a href="#">Creat Account</a></li>
                                <li><a href="my-account.html">My Account</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mobile-social-wrap">
                    <a class="facebook" href="#"><i class="ti-facebook"></i></a>
                    <a class="twitter" href="#"><i class="ti-twitter-alt"></i></a>
                    <a class="pinterest" href="#"><i class="ti-pinterest"></i></a>
                    <a class="instagram" href="#"><i class="ti-instagram"></i></a>
                    <a class="google" href="#"><i class="ti-google"></i></a>
                </div>
            </div>
        </div>
        <!-- search start -->
        <div class="search-content-wrap main-search-active">
            <a class="search-close"><i class=" ti-close "></i></a>
            <div class="search-content">
                <p>Start typing and press Enter to search</p>
<<<<<<< HEAD
                <form class="search-form" action="{{route('client.search')}}" method="POST">
                    @csrf
                    <input type="text" placeholder="Search" name="search">
                    <button class="button-search" type="submit"><i class="ti-search"></i></button>
=======
                <form class="search-form" action="">
                {{-- <form class="search-form" action="{{route('client.search')}}"> --}}
                    <input type="text" placeholder="Search" name="keyword" class="form-control">
                    <button class="button-search"><i class="ti-search"></i></button>
>>>>>>> cc6d9ee700bb5c9f54354e6d53c1c166d3d0c6bc
                </form>
            </div>
        </div>
        <!-- mini cart start -->
        <div class="sidebar-cart-active">
            <div class="sidebar-cart-all">
                <a class="cart-close" href="#"><i class=" ti-close"></i></a>
                @if (session()->has('cart'))
                <div class="cart-content">
                    <h3>Shopping Cart</h3>
                    <ul>
                        @foreach (session()->get('cart') as $item)
                        <li class="single-product-cart">
                            <div class="cart-img">
                                <a href="#"><img src="{{asset($item['image'])}}" alt=""></a>
                            </div>
                            <div class="cart-title">
                                <h4><a href="#">{{$item['name']}}</a></h4>
                                <span>{{$item['quantity'] .' x '. number_format($item['price'])}} VND</span>
                            </div>
                            <div class="cart-delete">
                                <a href="#">×</a>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    <div class="cart-total">
                        <h4>Subtotal: <span>{{number_format($cartHelper->into_money)}} VND</span></h4>
                    </div>
                    <div class="cart-checkout-btn">
                        <a class="btn-hover cart-btn-style" href="{{route('client.show_cart')}}">view cart</a>
                        <a class="no-mrg btn-hover cart-btn-style" href="checkout.html">checkout</a>
                    </div>
                </div>
                @else
                <h3>Shopping Cart</h3>
                <div class="not-cart">
                    <p>Không có sản phẩm nào trong giỏ hàng của bạn.</p>
                </div>
                @endif

            </div>
        </div>
