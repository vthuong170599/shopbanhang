<?php

namespace App\Http\Controllers\clients;

use App\Helper\CartHelper;
use App\Http\Controllers\Controller;
use App\Models\product_detail;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addCart($id,CartHelper $cart){
        $product_detail = product_detail::get_to_cart($id);
        // dd($product_detail);
        $cart->add($product_detail);
        return redirect()->route('client.show_cart');
    }

    public function showCart(CartHelper $cartHelper){
        // dd($cartHelper);
        $cart = session()->get('cart');
        // dd($cart);
        return view('client.content.cart',compact('cart','cartHelper'));
    }

    public function updateQuantity(Request $request,CartHelper $cartHelper){
        // dd(session()->get('cart'));
        $product = product_detail::get_to_cart($request->id);
        $cart = $cartHelper->add($product,$request->quantity);
        return redirect()->route('client.show_cart');
    }

    public function updateCart(Request $request,CartHelper $cartHelper){
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]['quantity'] = $request->quantity;
            // $product_detail = product_detail::find($request->id);
            session()->put('cart',$cart);
            // dd($product_detail);
            $cartComponent = view('client.component.pages.blade-child.cart-component',compact('cart','cartHelper'))->render();
            return response()->json([
                'code'=>200,
                'content'=>$cartComponent
            ],200);
        }
    }

    public function deleteCart(Request $request,CartHelper $cartHelper){
        if($request->id){
            $cart = session()->get('cart');
            unset($cart[$request->id]);
            session()->put('cart',$cart);
            $cart = session()->get('cart');
            $cartComponent = view('client.component.pages.blade-child.cart-component',compact('cart','cartHelper'))->render();
            return response()->json([
                'code'=>200,
                'content'=>$cartComponent
            ],200);
        }
    }

    public function deleteAll(CartHelper $cartHelper){
        $cart = session()->get('cart');
        unset($cart);
        $cart = [];
        session()->put('cart',$cart);
        $cartComponent = view('client.component.pages.blade-child.cart-component',compact('cart','cartHelper'))->render();
        return response()->json([
            'code'=>200,
            'content'=>$cartComponent
        ],200);
    }
}
