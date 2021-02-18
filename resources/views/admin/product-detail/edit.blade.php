@extends('admin.master')
@section('content')
@section('title','Danh sách sản phẩm')
@section('name_page','Product')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">@yield('name_page')</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Shop bán hàng</a></li>
                            <li class="breadcrumb-item active">@yield('name_page')</li>
                        </ol>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end page-title -->
            @if (session()->has('success'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>{{session('success')}}</strong>
            </div>
            @endif
            <div class="card">

                <div class="card-body">
                    <h4>Tên sản phẩm: {{$product->name}}</h4>
                    <h4>Mã sản phẩm: {{$product->sku}}</h4>
                    <hr>
                    <form action="{{route('product_detail.update',$product_detail->id)}}" method="POST" role="form">
                        @csrf
                        <legend>Thêm sản phẩm mới</legend>
                        <div class="row">
                            <div class="form-group col">
                                <label for="">Mã sản phẩm</label>
                                <input type="text" class="form-control" name="sku" value="{{$product_detail->sku}}"
                                    placeholder="nhập mã sản phẩm">
                            </div>
                            <div class="form-group col">
                                <label for="">Giá</label>
                                <input type="number" class="form-control" name="price"  value="{{$product_detail->price}}"
                                    placeholder="nhập giá sản phẩm">
                            </div>
                            <div class="form-group col">
                                <label for="">Discount</label>
                                <input type="number" class="form-control" name="discount" value="{{$product_detail->discount}}"
                                    placeholder="discount">
                            </div>
                            <div class="form-group col">
                                <label for="">Số lượng</label>
                                <input type="number" class="form-control" name="quantity" placeholder="nhập số lượng" value="{{$product_detail->quantity}}">
                            </div>
                            <div class="form-group col">
                                <label for="">Size</label>
                                <select name="id_size" id="input" class="form-control">
                                    @foreach ($size as $value)
                                    <option value="{{$value->id}}" {{$product_detail->id_size==$value->id?'selected':''}}>{{$value->name}}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="form-group col">
                                <label for="">Trạng thái</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="status" id="input" value="1" checked="checked" {{$product_detail->status==1?'checked':''}}>
                                        Hiện
                                    </label>
                                    <label>
                                        <input type="radio" name="status" id="input" value="0" {{$product_detail->status==0?'checked':''}}>
                                        Ẩn
                                    </label>
                                </div>
                            </div>
                        </div>



                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>
        </div>
        <!-- container-fluid -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script src="{{asset('admins/query/delete.js')}}"></script>
    </div>
    @endsection
