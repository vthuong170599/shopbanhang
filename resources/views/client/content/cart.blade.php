@extends('client.master')
@section('title','trang client')
@section('name_page','giỏ hàng')
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

    .product-img img {
        width: 70%
    }

    .quantity {
        width: 50%
    }
</style>
<div class="wrapper">
@include('client.component.pages.blade-child.cart-component')
</div>

<script src="{{asset('clients/js/vendor/jquery-3.3.1.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    function updateCart(event){
        event.preventDefault();
        $button = $('.qtybutton');
        url = $('.update-cart-url').data('url');
        let quantity =$(this).parents('tr').find('input').val();
        // alert(quantity);

        id = $(this).data('id');
        $.ajax({
            type: "GET",
            url: url,
            data: {quantity:quantity,id:id},
            success: function (data) {
                if(data.code === 200){
                    // console.log(data.content);
                    $('.wrapper').html(data.content);
                    alert('cap nhat thanh cong');
                }
            }
        });
    }

    function deleteCart(event){
        event.preventDefault();
        let url = $('.table-content').data('url');
        let id = $(this).data('id');
        // alert(id);
        $.ajax({
            type: "GET",
            url: url,
            data: {id:id},
            success: function (data) {
                if(data.code === 200){
                    // console.log(data.content);
                    $('.wrapper').html(data.content);
                    alert('xoa thanh cong');
                }
            }
        });
    }

    function deleteAll(event){
        event.preventDefault();
        let url = $('.cart-main-area').data('url');
        $.ajax({
            type: "GET",
            url: url,
            success: function (data) {
                if(data.code === 200){
                    // console.log(data.content);
                    $('.wrapper').html(data.content);
                    alert('xoa thanh cong');
                }
            }
        });
    }
    $(function(){
        $(document).on('click','.update',updateCart);
        $(document).on('click','.delete',deleteCart);
        $(document).on('click','.deleteAll',deleteAll);
    });
</script>
@endsection
