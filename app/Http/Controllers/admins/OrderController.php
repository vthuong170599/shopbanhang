<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Order_detail;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $order = Order::paginate(10);
        return view('admin.order.index',compact('order'));
    }

    public function update($id,$status){
        // dd($status);
        $order = Order::find($id)->update(['status'=>$status]);
        // $order = Order::find($id);
        return response()->json([
            'code'=>200,
            'content'=>$order
        ],200);
    }

    public function OrderDetail($id){
        // dd($id);
        $orders = Order::get_order($id);
        // dd($orders);
        $order_detail = Order_detail::get_order_detail($id);
        // dd($order_detail);
        return view('admin.order.order-detail',compact('order_detail','orders'));
    }
}
