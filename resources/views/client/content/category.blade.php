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
    .breadcrumb-area{
        margin-top: 150px
    }
</style>


<div class="breadcrumb-area border-top-2 pt-50 pb-50">

</div>
<div class="shop-area section-padding-1 pt-25 pb-80">
    <div class="container-fluid">
        <div class="row flex-row-reverse">
            <div class="col-lg-9">
                <div class="shop-top-bar">
                    <div class="shop-top-bar-right">
                        <div class="shop-short-by ml-30">
                            <span>Sort by <i class="fa fa-angle-down angle-down"></i> <i class="fa fa-angle-up angle-up"></i></span>
                            <ul>
                                <li class="active"><a href="#">Default sorting</a></li>
                                <li><a href="{{route('client.sort_date')}}">Sort by date</a></li>
                                <li><a href="{{route('client.sort_low')}}">Sort by price: low to high</a></li>
                                <li><a href="{{route('client.sort_high')}}">Sort by price: high to low</a></li>
                            </ul>
                        </div>
                        <div class="shop-tab nav ml-30">
                            <a href="#shop-1" class="active" data-toggle="tab"><i class=" ti-view-grid "></i></a>
                            <a href="#shop-2" data-toggle="tab"><i class=" ti-view-list-alt "></i></a>
                        </div>
                    </div>
                </div>
                <div class="tab-content jump">
                    <div id="shop-1" class="tab-pane active">
                        <div class="row">
                            @foreach ($product as $value)
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                <div class="product-wrap mb-40">
                                    <div class="product-img default-overlay mb-20">
                                        <a href="{{route('client.product-detail',[$value->slug,$value->id_detail])}}">
                                            <img class="default-img" src="{{asset($value->avatar)}}" alt="">
                                            <img class="hover-img" src="assets/images/product/hm-4-pro-1-2.jpg" alt="">
                                            @if ($value->discount>0)
                                            <span class="price-dec">{{$value->discount}}%</span>
                                            @endif
                                        </a>
                                        <div class="product-action-2">
                                            <a title="Buy on Themeforest" href="{{route('client.cart',$value->id_detail)}}">mua hàng</a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="{{route('client.cart',$value->id)}}">{{$value->name}}</a></h3>
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
                    <div id="shop-2" class="tab-pane ">
                        <div class="shop-list-wrap mb-70">
                            <div class="row">
                                <div class="col-32">
                                    <div class="product-wrap">
                                        <div class="product-img default-overlay">
                                            <a href="product-details.html">
                                                <img class="default-img" src="assets/images/product/hm-1-pro-1.jpg" alt="">
                                                <img class="hover-img" src="assets/images/product/hm-1-pro-1-2.jpg" alt="">
                                            </a>
                                            <div class="shop-list-quickview">
                                                <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-zoom-in"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-68">
                                    <div class="shop-list-content ml-20">
                                        <h3><a href="#">Long shirt dress</a></h3>
                                        <div class="pro-list-rating">
                                            <i class="yellow fa fa-star"></i>
                                            <i class="yellow fa fa-star"></i>
                                            <i class="yellow fa fa-star"></i>
                                            <i class="yellow fa fa-star"></i>
                                            <i class="yellow fa fa-star"></i>
                                        </div>
                                        <div class="pro-list-price">
                                            <span>$50.00</span>
                                        </div>
                                        <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices…</p>
                                        <div class="product-list-action">
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-files-o"></i></a>
                                            <div class="pro-list-actioncart">
                                                <a title="Add to cart" href="#">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shop-list-wrap mb-70">
                            <div class="row">
                                <div class="col-32">
                                    <div class="product-wrap">
                                        <div class="product-img default-overlay">
                                            <a href="product-details.html">
                                                <img class="default-img" src="assets/images/product/hm-1-pro-2.jpg" alt="">
                                                <img class="hover-img" src="assets/images/product/hm-1-pro-2-2.jpg" alt="">
                                            </a>
                                            <div class="shop-list-quickview">
                                                <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-zoom-in"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-68">
                                    <div class="shop-list-content ml-20">
                                        <h3><a href="#">Wrap soft fabric blouse</a></h3>
                                        <div class="pro-list-rating">
                                            <i class="yellow fa fa-star"></i>
                                            <i class="yellow fa fa-star"></i>
                                            <i class="yellow fa fa-star"></i>
                                            <i class="yellow fa fa-star"></i>
                                            <i class=" fa fa-star"></i>
                                        </div>
                                        <div class="pro-list-price">
                                            <span class="old">$60.00</span>
                                            <span>$50.00</span>
                                        </div>
                                        <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices…</p>
                                        <div class="product-list-action">
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-files-o"></i></a>
                                            <div class="pro-list-actioncart">
                                                <a title="Add to cart" href="#">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shop-list-wrap mb-70">
                            <div class="row">
                                <div class="col-32">
                                    <div class="product-wrap">
                                        <div class="product-img default-overlay">
                                            <a href="product-details.html">
                                                <img class="default-img" src="assets/images/product/hm-1-pro-3.jpg" alt="">
                                                <img class="hover-img" src="assets/images/product/hm-1-pro-3-2.jpg" alt="">
                                            </a>
                                            <div class="shop-list-quickview">
                                                <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-zoom-in"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-68">
                                    <div class="shop-list-content ml-20">
                                        <h3><a href="#">Camp-collar blouse</a></h3>
                                        <div class="pro-list-rating">
                                            <i class="yellow fa fa-star"></i>
                                            <i class="yellow fa fa-star"></i>
                                            <i class="yellow fa fa-star"></i>
                                            <i class="yellow fa fa-star"></i>
                                            <i class="yellow fa fa-star"></i>
                                        </div>
                                        <div class="pro-list-price">
                                            <span>$70.00</span>
                                        </div>
                                        <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices…</p>
                                        <div class="product-list-action">
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-files-o"></i></a>
                                            <div class="pro-list-actioncart">
                                                <a title="Add to cart" href="#">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shop-list-wrap mb-70">
                            <div class="row">
                                <div class="col-32">
                                    <div class="product-wrap">
                                        <div class="product-img default-overlay">
                                            <a href="product-details.html">
                                                <img class="default-img" src="assets/images/product/hm-1-pro-1.jpg" alt="">
                                                <img class="hover-img" src="assets/images/product/hm-1-pro-1-2.jpg" alt="">
                                            </a>
                                            <div class="shop-list-quickview">
                                                <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-zoom-in"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-68">
                                    <div class="shop-list-content ml-20">
                                        <h3><a href="#">Soho skinny jeans</a></h3>
                                        <div class="pro-list-rating">
                                            <i class="yellow fa fa-star"></i>
                                            <i class="yellow fa fa-star"></i>
                                            <i class="yellow fa fa-star"></i>
                                            <i class="yellow fa fa-star"></i>
                                            <i class=" fa fa-star"></i>
                                        </div>
                                        <div class="pro-list-price">
                                            <span class="old">$40.00</span>
                                            <span>$30.00</span>
                                        </div>
                                        <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices…</p>
                                        <div class="product-list-action">
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-files-o"></i></a>
                                            <div class="pro-list-actioncart">
                                                <a title="Add to cart" href="#">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shop-list-wrap mb-70">
                            <div class="row">
                                <div class="col-32">
                                    <div class="product-wrap">
                                        <div class="product-img default-overlay">
                                            <a href="product-details.html">
                                                <img class="default-img" src="assets/images/product/hm-1-pro-4.jpg" alt="">
                                                <img class="hover-img" src="assets/images/product/hm-1-pro-4-2.jpg" alt="">
                                            </a>
                                            <div class="shop-list-quickview">
                                                <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-zoom-in"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-68">
                                    <div class="shop-list-content ml-20">
                                        <h3><a href="#">Satin floral dress</a></h3>
                                        <div class="pro-list-rating">
                                            <i class="yellow fa fa-star"></i>
                                            <i class="yellow fa fa-star"></i>
                                            <i class="yellow fa fa-star"></i>
                                            <i class="yellow fa fa-star"></i>
                                            <i class="yellow fa fa-star"></i>
                                        </div>
                                        <div class="pro-list-price">
                                            <span>$50.00</span>
                                        </div>
                                        <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices…</p>
                                        <div class="product-list-action">
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-files-o"></i></a>
                                            <div class="pro-list-actioncart">
                                                <a title="Add to cart" href="#">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                {{-- paginate --}}
                    {{-- {{$product->links()}} --}}
                </div>
            </div>
            @include('client.component.sidebar')
        </div>
    </div>
</div>
@endsection
