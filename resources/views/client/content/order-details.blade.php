@extends('client.master')
@section('title','trang client')
@section('name_page','chi tiết sản phẩm')
@section('content')
<style>
     .not-cart {
        padding: 50px 100px;
        text-align: center;
        font-weight: 500;
    }

    .not-cart p {
        margin-bottom: 50px
    }

    .not-cart a {
        background-color: rgb(253, 216, 53);
        color: rgb(74, 74, 74);
        padding: 10px 55px;
        display: inline-block;
        border-radius: 4px;
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
<div class="my-account-area pt-100 pb-95">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-12">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>Order</th>
                            <th>Date</th>
                            <th>Tên sản phẩm</th>
                            <th>Mã đơn hàng</th>
                            <th>Số lượng</th>
                            <th>size</th>
                            <th>Giá</th>
                            <th>tên người nhận</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $item)
                        <tr>
                            <td></td>
                            <td>{{$item->created_at}}</td>
                            <td>{{$item->proName}}</td>
                            <td>{{$item->sku}}</td>
                            <td>{{$item->quantity}}</td>
                            <td>{{$item->sizeName}}</td>
                            <td>{{number_format($item->price)}} VND</td>
                            <td>{{$item->name}}</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
