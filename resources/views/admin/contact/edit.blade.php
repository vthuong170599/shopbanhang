@extends('admin.master')
@section('content')
@section('title','Sửa contact')
@section('name_page','Edit contact')
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
                    <form action="{{route('contact.update',$contact->id)}}" method="POST" role="form" enctype="multipart/form-data">
                        @csrf
                        <legend>Thêm mới contact</legend>

                        <div class="form-group">
                            <label for="">Tên contact</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                value="{{$contact->name}}">
                            @error('name')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Địa chỉ</label>
                            <input type="text" class="form-control @error('address') is-invalid @enderror" name="address"
                                value="{{$contact->address}}">
                            @error('address')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{$contact->email}}">
                            @error('email')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone"
                            value="{{$contact->phone}}">
                            @error('phone')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
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

                        <button type="submit" class="btn btn-primary">Thêm mới</button>
                    </form>
                </div>

            </div>


        </div>
        <!-- container-fluid -->

    </div>
    @endsection
