<?php

namespace App\Http\Controllers\clients;

use App\Helper\CartHelper;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(){
        $client = session()->get('client');
        $cart = session()->get('cart');
        // dd($cart);
        $cartHelper = new CartHelper;
        $demo = 'check';
        if($client){
            if($cart){
                return view('client.content.checkout',compact('client','cart','cartHelper'));
            }else{
                return view('client.content.cart',compact('cart'));
            }
        }else{
            return view('client.content.login',compact('demo'));
        }
    }

    public function order(Order $order,Request $request){
        $order->add($request);
        return redirect()->route('client.show_cart');
    }
}
