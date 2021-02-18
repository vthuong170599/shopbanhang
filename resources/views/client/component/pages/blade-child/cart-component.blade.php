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
<!-- cart start -->
@if ($cart)
<div class="cart-main-area pt-95 pb-100" data-url="{{route('client.delete-all')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="table-content table-responsive cart-table-content" data-url="{{route('client.delete-cart')}}">
                            <table id="tb" class="update-cart-url" data-url="{{route('client.update-cart')}}">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th>Product</th>
                                        <th>Mã sản phẩm</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>total</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="body">
                                    @csrf
                                    @foreach ($cart as $id => $item)
                                    <tr>
                                        <td class="product-remove">
                                            <a href="" data-id="{{$id}}" class="delete"><i class=" ti-close"></i></a>
                                        </td>
                                        <td class="product-img">
                                            <a href="#"><img src="{{asset($item['image'])}}" alt=""></a>
                                        </td>
                                        <td class="product-name"><a href="#">{{$item['name']}}</a></td>
                                        <td class="product-name"><a href="#">{{$item['sku']}}</a></td>
                                        <td class="product-price"><span class="amount">{{number_format($item['price'])}}
                                                VND</span></td>
                                                <td class="cart-quality">
                                                    <div class="quickview-quality quality-height-dec2">
                                                        <div class="cart-plus-minus">
                                                            <div class="dec qtybutton">-</div>
                                                            <input class="cart-plus-minus-box" type="text" name="quantity" value="{{$item['quantity']}}">
                                                            <div class="inc qtybutton" data-qty="{{$item['total_quantity']}}">+</div>
                                                        </div>
                                                    </div>
                                                </td>
                                        <td class="product-total">
                                            <span>{{number_format($item['price']*$item['quantity'])}} VND</span></td>
                                            <td><a href="" class="update" data-id="{{$id}}">Update cart</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="cart-shiping-update-wrapper">
                            <div class="cart-clear">
                                <a href="" class="deleteAll">Clear Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="grand-total-wrap">
                            <h4>Cart totals</h4>
                            <div class="grand-total-content">
                                <ul>
                                    <li>tổng tiền: <span>{{number_format($cartHelper->total_price)}} VND</span></li>
                                    <li>thuế: <span> {{$cartHelper->tax}}</span></li>
                                    <li>thanh toán: <span>{{number_format($cartHelper->into_money)}} VND</span> </li>
                                </ul>
                            </div>
                            <div class="grand-btn">
                                <a href="{{route('client.checkout')}}">Proceed to checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@else
<div class="not-cart">
    <p>Không có sản phẩm nào trong giỏ hàng của bạn.</p>
    <a href="{{route('client.index')}}">Tiếp tục mua sắm</a>
</div>
@endif
