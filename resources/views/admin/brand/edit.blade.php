@extends('admin.master')
@section('content')
@section('title','Sửa thương hiệu')
@section('name_page','Edit brand')
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
                    <form action="{{route('brand.update',$brands->id)}}" method="POST" role="form">
                        @csrf
                        <legend>Chỉnh sửa thương hiệu</legend>

                        <div class="form-group">
                            <label for="">Tên thương hiệu</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                placeholder="nhập tên thương hiệu" value="{{$brands->name}}">
                            @error('name')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Mô tả</label>
                            <textarea type="text" class="form-control @error('desc') is-invalid @enderror" name="desc"
                                placeholder="mô tả" rows="4">{{$brands->desc}}</textarea>
                            @error('desc')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="radio">
                            <label>
<<<<<<< HEAD
                                <input type="radio" name="status" id="input" value="1" {{$brands->status==1?'checked':''}}>
                                hiện
                            </label>
                            <label>
                                <input type="radio" name="status" id="input" value="0" {{$brands->status==0?'checked':''}}>
                                ẩn
                            </label>
                        </div>

                        <button type="submit" class="btn btn-primary">Sửa</button>
=======
                                <input type="radio" name="status" id="input" value="1" {{$brand->status==1?'checked':''}}>
                                Hiện
                            </label>
                            <label>
                                <input type="radio" name="status" id="input" value="0" {{$brand->status==0?'checked':''}}>
                                Ẩn
                            </label>
                        </div>

                        <button type="submit" class="btn btn-primary">Thêm mới</button>
>>>>>>> cc6d9ee700bb5c9f54354e6d53c1c166d3d0c6bc
                    </form>
                </div>

            </div>


        </div>
        <!-- container-fluid -->

    </div>
    @endsection
