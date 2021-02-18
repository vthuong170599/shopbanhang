@extends('admin.master')
@section('content')
@section('title','Sửa logo')
@section('name_page','Edit logo')
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
                    <form action="{{route('logo.update',$logo->id)}}" method="POST" role="form" enctype="multipart/form-data">
                        @csrf
                        <legend>Sửa logo</legend>

                        <div class="form-group">
                            <label for="">Tên logo</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                value="{{$logo->name}}">
                            @error('name')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Ảnh</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image"> @error('image')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <img src="{{asset($logo->image)}}" style="width: 300px" alt="">
                        <div class="radio">
                            <label>
                                <input type="radio" name="status" id="input" value="{{$logo->status}}" {{$logo->status==1?'checked':''}}>
                                Hiện
                            </label>
                            <label>
                                <input type="radio" name="status" id="input" value="{{$logo->status}}" {{$logo->status==0?'checked':''}}>
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
