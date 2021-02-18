@extends('client.master')
@section('title','trang client')
@section('name_page','Thông tin tài khoản')
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
@if ($client)
<div class="my-account-area pt-100 pb-95">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-12">
                <div class="myaccount-tab-menu nav" role="tablist">
                    <a href="#dashboad" class="active" data-toggle="tab">
                        Dashboard</a>
                    <a href="#orders" data-toggle="tab"> Orders</a>
                    <a href="#account-info" data-toggle="tab"> Account Details</a>
                    <a href="#change-pass" data-toggle="tab">đổi mật khẩu</a>
                </div>
                <!-- My Account Tab Menu End -->
                <!-- My Account Tab Content Start -->
                <div class="tab-content" id="myaccountContent">
                    <!-- Single Tab Content Start -->
                    <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                        <div class="myaccount-content">
                            <div class="welcome">
                                <p>Xin chào, <strong>{{$client->name}}</strong>
                            </div>

                            <p class="mb-0">Bạn có thế xem các thông tin tài khoản và lịch sử mua hàng tại đây!!!</p>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->
                    <!-- Single Tab Content Start -->
                    <div class="tab-pane fade" id="orders" role="tabpanel">
                        <div class="myaccount-content">
                            <div class="myaccount-table table-responsive text-center">
                                <table class="table table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Order</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Total</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($order as $item)
                                        <tr>
                                            <td></td>
                                            <td>{{$item->created_at}}</td>
                                            <td>
                                                @switch($item->status)
                                                    @case(0)
                                                        đang chờ
                                                        @break
                                                    @case(1)
                                                        đã duyệt
                                                        @break
                                                    @case(2)
                                                        đang giao hàng
                                                        @break
                                                    @case(3)
                                                        đã giao hàng
                                                        @break
                                                    @case(4)
                                                        hủy đơn hàng
                                                        @break
                                                @endswitch
                                            </td>
                                            <td>{{number_format($item->total_price)}} VND</td>
                                            <td>
                                                <a href="{{route('client.order_detail',$item->id)}}" class="check-btn sqr-btn ">Xem chi tiết</a>
                                                @if ($item->status != 4)
                                                <a href="{{route('client.cancel',$item->id)}}">| hủy đơn hàng</a>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->
                    <!-- Single Tab Content Start -->
                    <div class="tab-pane fade" id="account-info" role="tabpanel">
                        <div class="myaccount-content">
                            <div class="account-details-form">
                                <form action="{{route('client.change_info_client',$client->id)}}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="single-input-item">
                                                <label for="" class="required">Họ tên <span>*</span></label>
                                                <input type="text" value="{{$client->name}}" name="name" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="single-input-item">
                                                <label for="last-name" class="required">Email <span>*</span></label>
                                                <input type="text" value="{{$client->email}}" name="email" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="single-input-item">
                                                <label for="" class="required">Số điện thoại
                                                    <span>*</span></label>
                                                <input type="text" value="{{$client->phone}}" name="phone" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="single-input-item">
                                                <label for="last-name" class="required">Địa chỉ <span>*</span></label>
                                                <input type="text" value="{{$client->address}}" name="address" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="single-input-item">
                                                <label for="first-name" class="required">Số điện thoại
                                                    <span>*</span></label>
                                                <select name="gender" id="input" class="form-control">
                                                    <option value="1" {{$client->gender==1?'selected':''}}>nam</option>
                                                    <option value="0" {{$client->gender==0?'selected':''}}>nữ</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-input-item">
                                        <button class="check-btn sqr-btn change_info">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> <!-- Single Tab Content End -->
                    <div class="tab-pane fade" id="change-pass" role="tabpanel">
                        <div class="myaccount-content">
                            <div class="account-details-form">
                                <form method="POST">
                                    @csrf
                                    <legend>Password change</legend>
                                    <div class="single-input-item">
                                        <label for="current-pwd" class="required">Current password (leave blank to leave
                                            unchanged)</label>
                                        <input type="password" id="current-pwd" name="password" />
                                        <p class="text-danger password" style="display: none">mật khẩu không trùng khớp
                                        </p>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="single-input-item">
                                                <label for="new-pwd" class="required">New password (leave blank to leave
                                                    unchanged)</label>
                                                <input type="password" id="new-pwd" name="newPass" />

                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="single-input-item">
                                                <label for="confirm-pwd" class="required">Confirm new password</label>
                                                <input type="password" id="confirm-pwd" name="confirm" />
                                                <p class="text-danger confirm">mật khẩu nhập lại không chính xác</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-input-item">
                                        <button class="check-btn sqr-btn change_pass" type="submit"
                                            data-id="{{$client->id}}">Save Changes</button>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div> <!-- Single Tab Content End -->
            </div>
        </div>
    </div>
</div>
@else
<div class="not-cart">
    <p>vui lòng đăng nhập để sử dụng chức năng này :)</p>
    <a href="{{route('client.login')}}">đăng nhập</a>
</div>

@endif


<script src="{{asset('clients/js/vendor/jquery-3.3.1.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
 function changePass(event){
    event.preventDefault();
    let id = $(this).data('id');
    // alert(id);
    let token = $(this).parents('#change-pass').find('input[name=_token]').val();
    let password = $(this).parents('#change-pass').find('input[name=password]').val();
    let newPass = $(this).parents('#change-pass').find('input[name=newPass]').val();
    let confirm = $(this).parents('#change-pass').find('input[name=confirm]').val();
    // alert(password);
    $.ajax({
        type: "POST",
        url: "{{route('client.change_info')}}",
        data: {_token:token,id:id,password:password,newPass:newPass,confirm:confirm},
        success: function (response) {
            if(response.code === 200){
                if(response.status === 200){
                    $('.password').hide();
                    $('.confirm').show();
                }else if(response.status === 100){
                    $('.password').show();
                    $('.confirm').hide();
                }else{
                    $('.password').hide();
                    $('.confirm').hide();
                    Swal.fire(
                    'Good job!',
                    'You clicked the button!',
                    'success'
                    )
                }
            }
        }
    });
}

$(function(){
    $(document).on('click','.change_pass',changePass)
});

</script>
@endsection
