@extends('admin.master')
@section('content')
@section('title','Trang Contact-user')
@section('name_page','Contact-user')
<style>
    .getcontent p{
    white-space: nowrap;
    margin: 0;
    width: 200px;
    height: 100%;
    text-overflow: ellipsis;
    overflow: hidden;
    }
    .col-md-8{
        text-align: center;
    }
    .col-md-8 p{
        text-align: right;
    }
</style>
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

            {{-- <div class="row"> --}}
                <table class="table table-hover col-md-8" >
                    <thead>
                        <tr>
                            <th></th>
                            <th>Tên người gửi</th>
                            <th>Nội dung</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($contact_user as $item)
                        <tr class="getcontent">
                            <td>{{$loop->index+1}}</td>
                            <td>{{$item->name}}</td>
                            <td><p>{{$item->content}}</p></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- container-fluid -->
    </div>
@endsection
