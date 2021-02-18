{{-- @dd($wishlist) --}}
@extends('client.master')
@section('title','trang client')
@section('name_page','')
@section('content')
<style>
    .pagination li{
        margin: 0 5px;
        width: 40px;
        text-align: center
    }
    .page-item.active .page-link{
        background-color: #000;
        border-color: #fff
    }
    .default-img{
        max-width: 200px;
    }
    .product{
        width: 200px !important;
        height: 280px;
    }
    .product-wrap .product-img .product-action .Wishlist {
        background-color: #e77878;
    }
    .title{
        text-transform: uppercase;
        margin-top: 10px
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
                    <a href="{{route('client.index')}}">HOME</a>
                </li>
            </ul>
            <h1 class="title">{{$banner->content}}</h1>
        </div>
    </div>
</div>

<div class="shop-area section-padding-1 pt-25 pb-80">
    <div class="container-fluid">
        <div class="row flex-row-reverse">
            <div class="col-lg-9">
                <div class="shop-top-bar">
                    <div class="shop-top-bar-right">
                        <div class="shop-short-by ml-30">
                            <span>Sort by<i class="fa fa-angle-down angle-down"></i> <i class="fa fa-angle-up angle-up"></i></span>
                            <ul>
                                <li class="active"><a href="{{route('client.index')}}">Default sorting</a></li>
                                <li><a href="{{route('client.sort_date')}}">Sort by date</a></li>
                                <li><a href="{{route('client.sort_low')}}">Sort by price: low to high</a></li>
                                <li><a href="{{route('client.sort_high')}}">Sort by price: high to low</a></li>
                            </ul>
                        </div>
                        <div class="shop-tab nav ml-30">
                            <a href="#shop-1" class="active" data-toggle="tab"><i class=" ti-view-grid "></i></a>
                        </div>
                    </div>
                </div>
                <div class="tab-content jump">
                    <div id="shop-1" class="tab-pane active">
                        <div class="row">
                            @foreach ($product as $value)
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img default-overlay mb-20 product" >
                                        <a href="{{route('client.product-detail',[$value->slug,$value->id_detail])}}">
                                            <img class="default-img" src="{{asset($value->avatar)}}" alt="">
                                            <img class="hover-img" src="assets/images/product/hm-4-pro-1-2.jpg" alt="">
                                            @if ($value->discount>0)
                                            <span class="price-dec">-{{$value->discount}}%</span>
                                            @endif
                                        </a>
                                        {{-- @dd($wishlist) --}}
                                        <div class="product-action-2">
                                            <a title="Buy on Themeforest" href="{{route('client.cart',$value->id_detail)}}">mua hàng</a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="product-details.html">{{$value->name}}</a></h3>
                                        <div class="product-price">
                                            @if ($value->discount>0)
                                            <span >đ {{number_format($value->sale_price)}}</span>
                                            <span class="old">đ {{number_format($value->price)}}</span>
                                            @else
                                            <span>đ {{number_format($value->sale_price)}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endforeach
                        </div>
                    </div>
                {{-- paginate --}}
                    {{$product->links()}}
                </div>
            </div>
            @include('client.component.sidebar')
        </div>
    </div>
</div>
@if (session()->has('success'))
    <script>
        alert('thay đổi thành công');
    </script>
@endif
@endsection
