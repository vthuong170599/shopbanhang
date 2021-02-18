<?php

namespace App\Http\Controllers\admins;

use App\Helper\Date;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Order_detail;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index(){
        $order = Order::all();
        $order_detail = Order_detail::get_max();
        // dd($order_detail);
        $test= '';
        $total = 0;
        foreach($order as $value){
            $total += $value['total_price'];
        }

        if(session()->get('admin')){
            return view('home-admin',compact('total','order_detail'));
        }else{
            return view('admin.login.login_admin');
        }
    }
}
