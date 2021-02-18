<?php

namespace App\Helper;

class CartHelper{

    public $total_price = 0;
    public $total_quantity = 0;
    public $into_money = 0;
    public $tax = 10;

    public function __construct()
    {
        $this->items = session('cart')?session('cart'):[];
        $this->total_price = $this->get_total_price();
        // $this->tax = $tax;
        $this->into_money = $this->getIntoMoney();
    }

    public function add($product,$quantity = 1){
        // dd($product);
        // session()->forget('cart');
        // dd(session()->get('cart'));
        $item = [
            'id'=>$product->id,
            'name'=>$product->name,
            'sku'=>$product->sku,
            'price'=>$product->sale_price,
            'image'=>$product->avatar,
            'size'=>$product->nameSize,
            'quantity'=>$quantity,
            'total_quantity'=>$product->quantity
        ];
        if(isset($this->items[$product->id])){
            $this->items[$product->id]['quantity'] += $quantity;
        }else{
            $this->items[$product->id] = $item;
        }
        session()->put('cart',$this->items);
    }

    public function get_total_price(){
        $total_price = 0;
        foreach($this->items as $value){
            $total_price += $value['quantity'] * $value['price'];
        }
        return $total_price;
    }

    public function getIntoMoney(){
        $into_money = 0;
       foreach($this->items as $value){
        $into_money += ($value['quantity'] * $value['price']);
       }
       $into_money += ($into_money * ($this->tax / 100));
        return $into_money;
    }

    public function update_cart($id,$quantity){
        $cart =  session()->get('cart');
        $cart[$id]['quantity'] = $quantity;
        session()->put('cart',$cart);
    }
}
