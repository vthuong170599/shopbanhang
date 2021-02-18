@extends('admin.master')
@section('content')
@section('title','Quản lý đơn hàng')
@section('name_page','order')
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
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Shop bán hàng</a></li>
                            <li class="breadcrumb-item active">@yield('name_page')</li>
                        </ol>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end page-title -->
            <div class="row">
                <table class="table table-hover ">
                    <thead>
                        <tr>
                            <th>#</th>
                            {{-- <th>Tên người đặt hàng</th> --}}
                            <th>Tên người nhận</th>
                            <th>Địa chỉ nhận hàng</th>
                            <th>Số điện thoại</th>
                            <th>Trạng thái</th>
                            <th>Ghi chú</th>
                            <th>Ngày đặt</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order as $value)
                        <tr class="getcontent">
                            <td>{{$loop->iteration}}</td>
                            {{-- <td>{{$value->get_username->name}}</td> --}}
                            <td>{{$value->name}}</td>
                            <td><p>{{$value->address}}</p></td>
                            <td>{{$value->phone}}</td>
                            <td>
                                <select name="" id="input" class="form-control input" required="required"
                                    data-id="{{$value->id}}">
                                    <option value="0" {{$value->status == 0 ? 'selected': ''}}
                                        {{$value->status == 3 || $value->status == 4 ? 'disabled': ''}}>Đang chờ
                                    </option>
                                    <option value="1" {{$value->status == 1 ? 'selected': ''}}
                                        {{$value->status == 3 || $value->status == 4 ? 'disabled': ''}}>Đã duyệt</option>
                                    <option value="2" {{$value->status == 2 ? 'selected': ''}}
                                        {{$value->status == 3 || $value->status == 4 ? 'disabled': ''}}>Đang giao hàng</option>
                                    <option value="3" {{$value->status == 3 ? 'selected': ''}}
                                        {{$value->status == 3 || $value->status == 4 ? 'disabled': ''}}>Giao hàng thành công
                                    </option>
                                    <option value="4" {{$value->status == 4 ? 'selected': ''}}
                                        {{$value->status == 3 || $value->status == 4 ? 'disabled': ''}}>Hủy đơn hàng</option>
                                </select>
                            </td>
                            <td><p>{{$value->note}}</p></td>
                            <td>{{$value->created_at}}</td>
                            <td>
                                <a href="{{route('order_detail.index',$value->id)}}"><i class="mdi mdi-eye btn-info btn"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


        </div>
        <!-- container-fluid -->

    </div>
    <script src="{{asset('clients/js/vendor/jquery-3.3.1.min.js')}}"></script>
    <script>
        function updateOrder(event){
            // event.preventDefault();
            url = "{{url('/admin/order/update_order')}}";
            id = $(this).data('id');
            status = $(this).val();
            $.ajax({
                type: "GET",
                url: url+'/'+id+'/'+status,
                success: function (data) {
                    console.log(data);
                }
            });
        }
        $(function(){
           $(document).on('change','.input',updateOrder);
        });
    </script>
    @endsection
