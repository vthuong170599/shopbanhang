@extends('admin.master')
@section('content')
@section('title','Sửa sản phẩm')
@section('name_page','Edit product')
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

            <div class="row">

                <div class="col-md-6">
                    <form action="{{route('product.update',$product->id)}}" method="POST" role="form" enctype="multipart/form-data">
                        @csrf
                        <legend>Sửa sản phẩm</legend>

                        <div class="form-group">
                            <label for="">Tên sản phẩm</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                placeholder="nhập tên sản phâm" value="{{$product->name}}">
                            @error('name')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Mã sản phẩm</label>
                            <input type="text" class="form-control @error('sku') is-invalid @enderror" name="sku"
                                placeholder="nhập tên sản phâm" value="{{$product->sku}}">
                            @error('sku')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="">Danh mục sản phẩm</label>
                            <select name="cat_id" id="input" class="form-control" required="required">
                                @foreach ($cate as $value)
                                <option value="{{$value->id}}" {{($value->id==$product->cat_id)?'selected':''}}>{{$value->name}}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="">Thương hiệu</label>
                            <select name="brand_id" id="input" class="form-control" required="required">
                                @foreach ($brand as $value)
                                <option value="{{$value->id}}" {{($value->id==$product->brand_id)?'selected':''}}>{{$value->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Ảnh đại diện</label>
                            <input type="file" class="form-control @error('avatar') is-invalid @enderror"
                                name="avatar">
                            @error('avatar')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <img src="{{asset($product->avatar)}}" alt="" style="width: 100px">

                        <div class="form-group">
                            <label for="">Ảnh mô tả</label>
                            <input type="file" multiple class="form-control @error('image') is-invalid @enderror"
                                name="image[]">
                            @error('image')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        @foreach ($img_pro as $value)
                            <img src="{{asset($value->image)}}" style="width:120px;height:150px" alt="">
                        @endforeach

                        <div class="form-group">
                            <label for="">Mô tả</label>
                            <textarea type="text" class="form-control @error('desc') is-invalid @enderror" name="desc"
                                placeholder="mô tả" rows="4">{{$product->desc}}</textarea>
                            @error('desc')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Trạng thái</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="status" id="input" value="1" {{$product->status==1?'checked':''}}>
                                    Hiện
                                </label>
                                <label>
                                    <input type="radio" name="status" id="input" value="0" {{$product->status==0?'checked':''}}>
                                    Ẩn
                                </label>
                            </div>
                        <button type="submit" class="btn btn-primary">Thêm mới</button>
                    </form>
                </div>

            </div>


        </div>
        <!-- container-fluid -->

    </div>
    @endsection
