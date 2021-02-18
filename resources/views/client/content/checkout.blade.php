@extends('client.master')
@section('title','trang client')
@section('name_page','Thanh toán')
@section('content')
<style>
    .place_order{
        background-color: black;
        color: #fff;
        width: 170px;
        height: 50px;
    }
    .place_order:hover{
        background-color: #ddd;
        color: #000;
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
<!-- checkout start -->
<div class="checkout-main-area pt-100 pb-100">
    <div class="container">

        <div class="checkout-wrap">
            <div class="row">
                <div class="col-lg-7">
                    <div class="billing-info-wrap mr-100">
                        <h3>Billing Details</h3>
                       <form action="{{route('client.order')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-25">
                                    <label>Tên người nhận hàng <abbr class="required" title="required">*</abbr></label>
                                    <input type="text" name="name" value="{{$client->name}}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-25">
                                    <label>Email <abbr class="required" title="required">*</abbr></label>
                                    <input type="text" name="email" value="{{$client->email}}">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-info mb-25">
                                    <label>Địa chỉ nhận hàng <abbr class="required" title="required">*</abbr></label>
                                    <input class="billing-address" name="address" placeholder="nhập địa chỉ nhận hàng" type="text" value="{{$client->address}}">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="billing-info mb-25">
                                    <label>Số điện thoại nhận hàng<abbr class="required" title="required">*</abbr></label>
                                    <input type="text" name="phone" value="{{$client->phone}}">
                                </div>
                            </div>
                        </div>
                        <div class="additional-info-wrap">
                            <h3>thông tin thêm về đơn hàng</h3>
                            <label>Ghi chú</label>
                            <textarea placeholder="ghi chú về đơn hàng" name="note"></textarea>
                        </div>
                        <div class="Place-order mt-30">
                            <button type="submit" class="place_order">Thanh toán</button>
                        </div>

                       </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="your-order-area">
                        <h3>Your order</h3>
                        <div class="your-order-wrap gray-bg-4">
                            <div class="your-order-info-wrap">
                                <div class="your-order-info">
                                    <ul>
                                        <li>Product <span>Total</span></li>
                                    </ul>
                                </div>
                                <div class="your-order-middle">
                                    @if (isset($cart))
                                    <ul>
                                        @foreach ($cart as $item)
                                        <li>{{$item['name'] . ' X ' .$item['quantity']}} <span>{{number_format($item['price'])}} VND</span></li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </div>
                                <div class="your-order-info order-subtotal">
                                    <ul>
                                        <li>Tổng tiền: <span>{{number_format($cartHelper->total_price)}} VND</span></li>
                                    </ul>
                                </div>
                                <div class="your-order-info order-subtotal">
                                    <ul>
                                        <li>Thuế: <span>{{$cartHelper->tax}}%</span></li>
                                    </ul>
                                </div>
                                <div class="your-order-info order-total">
                                    <ul>
                                        <li>Thanh toán <span>{{number_format($cartHelper->into_money)}} VND</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="condition-wrap">
                                <p>Dữ liệu cá nhân của bạn sẽ được sử dụng để xử lý đơn đặt hàng, hỗ trợ trải nghiệm của bạn trên toàn bộ trang web này </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
