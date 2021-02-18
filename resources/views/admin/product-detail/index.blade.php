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
                    <form action="{{route('product_detail.store',$product->id)}}" method="POST" role="form">
                        @csrf
                        <legend>thêm sản phẩm mới</legend>
                        <div class="row">
                            <div class="form-group col">
                                <label for="">Mã sản phẩm</label>
                                <input type="text" class="form-control @error('sku') is-invalid @enderror" name="sku" value="{{$product->sku}}"
                                    placeholder="nhập mã sản phẩm">
                                    @error('sku')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                            </div>
                            <div class="form-group col">
                                <label for="">giá</label>
                                <input type="number" class="form-control @error('price') is-invalid @enderror" name="price"  value=""
                                    placeholder="nhập giá sản phẩm">
                                    @error('price')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                            </div>
                            <div class="form-group col">
                                <label for="">discount</label>
                                <input type="number" class="form-control @error('discount') is-invalid @enderror" name="discount"
                                    placeholder="discount">
                                    @error('discount')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                            </div>
                            <div class="form-group col">
                                <label for="">Số lượng</label>
                                <input type="number" class="form-control" name="quantity" placeholder="nhập số lượng">
                            </div>
                            <div class="form-group col">
                                <label for="">Size</label>
                                <select name="id_size" id="input" class="form-control">
                                    @foreach ($size as $value)
                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="form-group col">
                                <label for="">Trạng thái</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="status" id="input" value="1" checked="checked">
                                        Hiện
                                    </label>
                                    <label>
                                        <input type="radio" name="status" id="input" value="0">
                                        Ẩn
                                    </label>
                                </div>
                            </div>
                        </div>



                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>
            <div class="row">

                <table class="table table-hover ">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>mã sản phẩm</th>
                            <th>giá sản phẩm</th>
                            <th>discount</th>
                            <th>giá khuyến mại</th>
                            <th>số lượng</th>
                            <th>trạng thái</th>
                            <th>size</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($product_detail as $value)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$value->sku}}</td>
                            <td>{{$value->price}}</td>
                            <td>{{$value->discount}}%</td>
                            <td>{{$value->sale_price}}</td>
                            <td>{{$value->quantity}}</td>
                            <td>{{$value->status==1?'hiện':'ẩn'}}</td>
                            <td>
                                @switch($value->id_size)
                                @case(1)
                                L
                                @break
                                @case(2)
                                M
                                @break
                                @case(3)
                                X
                                @break
                                @default
                                XL
                                @endswitch
                            </td>
                            <td>
                                <a href="{{route('product_detail.edit',$value->id)}}" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                <a href="" data-url="{{route('product_detail.delete',$value->id)}}"
                                    class="btn btn-danger action_delete"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            <div class="d-felx justify-content-center">

                {{-- {{ $cate->links() }} --}}

            </div>

        </div>
        <!-- container-fluid -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script src="{{asset('admins/query/delete.js')}}"></script>
    </div>
    @endsection
