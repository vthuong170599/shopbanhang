@extends('client.master')
@section('content')
<style>
    .table-wishlist{
        width: 100%;
    }
    .table-wishlist td{
        width: 100px;
    }

</style>
<div class="breadcrumb-area bg-gray-2 section-padding-1 pt-200 pb-120">
    <div class="container-fluid">
        <div class="breadcrumb-content text-center">
            <div class="breadcrumb-title">
                <h2>Wishlist</h2>
            </div>
            <ul>
                <li>
                    <a href="index.html">Home </a>
                </li>
                <li><span> > </span></li>
                <li class="active">Wishlist</li>
            </ul>
        </div>
    </div>
</div>
<!-- cart start -->
<div class="cart-main-area pt-95 pb-100">
    <div class="container">
        <div class="row">
            <div class="ml-auto mr-auto col-lg-8 col-md-12 col-sm-12 col-12">
                <form action="#">
                    <div class="table-content table-responsive cart-table-content">
                        <table class="table-wishlist">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th>Product</th>
                                    <th> Price</th>
                                    <th>Add To Cart</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($wishlist as $value)

                                {{-- @dd($a->name) --}}
                                <tr>
                                    <td class="product-remove">
                                        <a href="{{route('client.delete-wishlist',$value->id)}}"><i class=" ti-close"></i></a>
                                    </td>
                                    <td class="product-img">
                                        <a href="#"><img src="{{asset($value->avatar)}}" width="100px" alt=""></a>
                                    </td>

                                    <td class="product-name"><a href="{{route('client.product-detail',[$value->slug,$value->id])}}">{{$value->name}}</a></td>

                                    <td class="product-price"><span class="amount">{{number_format($value->price)}} VND</span></td>
                                    <td class="product-wishlist-cart"><a href="{{route('client.cart',$value->id)}}">add to cart</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- cart end -->
@endsection
