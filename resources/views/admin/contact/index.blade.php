@extends('admin.master')
@section('content')
@section('title','contact')
@section('name_page','contact')
<style>
    .getcontent p{
    white-space: nowrap;
    margin: 0;
    width: 200px;
    height: 100%;
    text-overflow: ellipsis;
    overflow: hidden;
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
                            <li class="breadcrumb-item"><a href="javascript:void(0);">shop bán hàng</a></li>
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
            <div class="row">

                {{-- <a href="{{route('contact.create')}}" class="btn btn-success m-2">thêm contact</a> --}}
                <table class="table table-hover ">
                    <thead>
                        <tr>
                            {{-- <th>#</th> --}}
                            <th>Tên</th>
                            <th>Điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
<<<<<<< HEAD
                        @foreach ($contacts as $value)
=======
                        {{-- @foreach ($contact as $value) --}}
                        {{-- @dd($contact) --}}
>>>>>>> cc6d9ee700bb5c9f54354e6d53c1c166d3d0c6bc
                        <tr class="getcontent">
                            <td>{{$contact->index+1}}</td>
                            <td>{{$contact->name}}</td>
                            <td>{{$contact->phone}}</td>
                            <td><p>{{$contact->address}}</p></td>
                            <td>{{$contact->email}}</td>
                            <td>{{$contact->status==1?'hiện':'ẩn'}}</td>
                            <td>
<<<<<<< HEAD
                                <a href="{{route('contact.edit',$value->id)}}" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                <a href="" data-url="{{route('contact.delete',$value->id)}}" class="btn btn-danger action_delete"><i class="fas fa-trash-alt"></i></a>
=======
                                <a href="{{route('contact.edit',$contact->id)}}" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                <a href="" data-url="{{route('contact.delete',$contact->id)}}" class="btn btn-danger action_delete"><i class="fas fa-trash-alt"></i></a>
>>>>>>> cc6d9ee700bb5c9f54354e6d53c1c166d3d0c6bc
                            </td>
                        </tr>
                        {{-- @endforeach --}}
                    </tbody>
                </table>

            </div>
            <div class="d-felx justify-content-center">

            {{-- {{ $contact->links() }} --}}

            </div>

        </div>
        <!-- container-fluid -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script src="{{asset('admins/query/delete.js')}}"></script>
    </div>
    @endsection
