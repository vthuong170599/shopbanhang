@extends('client.master')
@section('title','trang client')
@section('name_page','')
@section('content')
<style>
    .breadcrumb-area {
        margin-top: 150px
    }

    .add-cart {
        background-color: #000;
        padding: 5px 10px;
        color: #fff;
        margin: 0
    }

    .add-cart:hover {
        background-color: #fff;
        color: #000;
    }

    .quantity {
        width: 50%;
        margin-bottom: 5px
    }

    .btn-size {
        background-color: #ddd;
        padding: 10px 15px
    }

    .btn-active {
        background-color: #e6ac50;
        padding: 10px 15px
    }

    .pro-details-banner img {
        width: 250px !important;
        height: 300px;
    }

    .pro-details-banner {
        width: 250px !important
    }

    i.ti-heart.wishlist {
        color: #e77878 !important;
    }
</style>

<div class="breadcrumb-area border-top-2 pt-50 pb-50">

</div>
<div class="product-details-area pb-90">
    <div class="custom-container-6">
        <div class="row">
            <div class="col-pro-60">
                <div class="product-details-tab">
                    <div class="product-dec-right pro-dec-big-img-slider">
                        <div class="easyzoom-style">
                            <div class="easyzoom easyzoom--overlay">
                                <a href="{{asset($product->avatar)}}">
                                    <img src="{{asset($product->avatar)}}" alt="">
                                </a>
                            </div>
                            <a class="easyzoom-pop-up img-popup" href="{{asset($product->avatar)}}"><i
                                    class=" ti-fullscreen "></i></a>
                        </div>
                        @foreach ($img_pro as $item)
                        <div class="easyzoom-style">
                            <div class="easyzoom easyzoom--overlay">
                                <a href="{{(asset($item->image))}}">
                                    <img src="{{(asset($item->image))}}" alt="">
                                </a>
                            </div>
                            <a class="easyzoom-pop-up img-popup" href="{{(asset($item->image))}}"><i
                                    class=" ti-fullscreen "></i></a>
                        </div>
                        @endforeach
                    </div>
                    <div class="product-dec-slider product-dec-left">
                        <div class="product-dec-small active">
                            <img src="{{asset($product->avatar)}}" alt="">
                        </div>
                        @foreach ($img_pro as $item)
                        <div class="product-dec-small">
                            <img src="{{asset($item->image)}}" alt="">
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="col-pro-40">
                <div class="pl-35 product-details-content quickview-content">
                    <h2>{{$product->name}}</h2>
                    @if ($detail->discount)
                    <h3>Giá: <span>{{number_format($detail->price)}} VND</span></h3>
                    <p>discount: -{{$detail->discount}}%</p>
                    <h3>Giá khuyến mại: {{number_format($detail->sale_price)}} VND</h3>
                    @else
                    <h3>Giá: {{number_format($detail->sale_price)}} VND</h3>
                    @endif
                    <p>Còn lại: {{$detail->quantity}}sp</p>
                    {{-- @dd($details); --}}
                    <div class="quickview-size">
                        @foreach ($details as $item)
                        <a href="{{route('client.product-detail',[$item->slug,$item->id])}}"
                            class="{{$item->id_size == $detail->id_size ? 'btn-active': 'btn-size'}}">{{$item->nameSize}}</a>
                        @endforeach
                    </div>
                    <div class="quickview-action-wrap">
                        <form action="{{route('client.update-quantity')}}" method="POST">
                            <div class="quickview-quality">
                                @csrf
                                <input type="hidden" name="id" value="{{$detail->id}}">
                                {{-- <input type="hidden" name="name" value="{{$item->name}}"> --}}
                                <input class="quantity" type="number" name="quantity" value="2"><br>
                                <button class="add-cart" title="Add to cart" type="submit">Add to cart</button>
                            </div>
                        </form>
                        <div class="quickview-wishlist">
                            @if ($wishlist)
                            <a title="Add to wishlist" href="{{route('client.delete-wishlist',$wishlist->id)}}"><i
                                    class=" ti-heart {{$wishlist->id_pro == $detail->id ? 'wishlist': ''}}"></i></a>
                            @else
                            <a title="Add to wishlist" href="{{route('client.wishlist_add',$detail->id)}}"><i
                                    class=" ti-heart "></i></a>
                            @endif
                        </div>
                        <div class="quickview-compare">
                            <a title="Add to compare" href="#"><i class="ti-bar-chart-alt"></i></a>
                        </div>
                    </div>
                    <div class="quickview-meta">
                        <span>code: <span>{{$product->sku}}</span></span>
                        <span>danh mục: <a
                                href="{{route('client.category',[$product->cateSlug,$product->cateId])}}">{{$product->cateName}}</a></span>
                        <span>thương hiệu: <a
                                href="{{route('client.brand',[$product->brandSlug,$product->brandId])}}">{{$product->brandName}}</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="description-review-area pb-100">
    <div class="custom-container-6">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="description-review-wrapper">
                    <div class="description-review-topbar nav">
                        <a class="active" data-toggle="tab" href="#des-details1">Description</a>
                        <a data-toggle="tab" href="#des-details2">Reviews</a>
                    </div>
                    <div class="tab-content description-review-bottom">
                        <div id="des-details1" class="tab-pane active">
                            <div class="product-description-wrapper">
                                <div class="row">
                                    <div class="col-30">
                                        <div class="pro-details-banner banner-zoom default-overlay">
                                            <a href="#"><img src="{{asset($product->avatar)}}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-62">
                                        <div class="product-dec-content">
                                            <p>{{$product->desc}}</p>
                                            <img src="assets/images/icon-img/pro-dec-icon.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="des-details2" class="tab-pane ">
                            <div class="review-wrapper">
                                <h2>1 review for High Collar Jacket</h2>
                                <div class="single-review">
                                    <div class="review-img">
                                        <img src="assets/images/product-details/client-1.jpg" alt="">
                                    </div>
                                    <div class="review-content">
                                        @foreach ($feedback as $item)
                                        <div class="review-top-wrap">
                                            <div class="review-name">
                                                <h5><span>{{$item->username}}</span> - {{$item->created_at}}</h5>
                                            </div>
                                        </div>
                                        <p>{{$item->content}}</p>
                                        <hr>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="ratting-form-wrapper">
                                <div class="ratting-form">
                                    <form action="{{route('client.feedback',$product->id)}}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="rating-form-style mb-20">
                                                    <label>Nhận xét <span>*</span></label>
                                                    <textarea name="content"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-submit">
                                                    <input type="submit" value="Submit">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="related-product-area bg-gray-2 section-padding-8 pt-100 pb-95">
    <div class="container-fluid">
        <div class="section-title-12 mb-50">
            <h2>Sản phẩm liên quan</h2>
        </div>
        <div class="related-slider-active owl-carousel">
            @foreach ($products as $item)
            <div class="product-wrap">
                <div class="product-img default-overlay mb-20">
                    <a href="product-details.html">
                        <img class="default-img" src="{{asset($item->avatar)}}" alt="">
                        @if ($item->discount>0)
                        <span class="price-dec">-{{$item->discount}}%</span>
                        @endif
                    </a>
                    <div class="product-action-2">
                        <a title="Add To Cart" href="{{route('client.cart',$item->id_detail)}}">Mua hàng</a>
                    </div>
                </div>
                <div class="product-content pro-content-pro-details">
                    <h3><a href="product-details.html">{{$item->name}}</a></h3>
                    <div class="product-price">
                        @if (isset($item->discount))
                        <span class="old">{{number_format($item->price)}} VND</span>
                        <span>{{number_format($item->sale_price)}} VND</span>
                        @else
                        <span>{{number_format($item->sale_price)}} VND</span>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<script src="{{asset('clients/js/vendor/jquery-3.3.1.min.js')}}"></script>
<script>
    $(function(){
        $('.quantity').on('change',function(){
            quantity = $(this).val();
            // alert(quantity);
            if(quantity < 1){
                $(this).val(1);
            }else if(quantity>{{$detail->quantity}}){
                $(this).val({{$detail->quantity}})
            }
        })
    });
</script>
@if (session()->has('message'))
<script>
    alert('nhận xét của bạn đã được gửi đến quản trị viên')
</script>
@endif
@endsection
