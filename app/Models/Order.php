<?php

namespace App\Models;

use App\Helper\CartHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['id_user','address','name','phone','total_price','note','status'];

    public function add($request){
        // dd($request->all());
        $cartHelper = new CartHelper;
        $client = session()->get('client');
        $cart = session()->get('cart');
        $order = Order::create([
            'id_user'=>$client->id,
            'name'=>$request->name,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'total_price'=>$cartHelper->into_money,
            'note'=>$request->note
        ]);

        foreach($cartHelper->items as $value){
            Order_detail::create([
                'id_order'=> $order->id,
                'id_pro_detail'=>$value['id'],
                'price'=>$value['price'],
                'quantity'=>$value['quantity']
            ]);

            $pro_detail = product_detail::find($value['id']);
            $pro_detail->update(['quantity'=>($pro_detail->quantity - $value['quantity'])]);
        }
        session()->pull('cart');
    }

    public function get_username(){
        return $this->BelongsTo(User::class,'id_user','id');
    }

    public static function get_order($id){
        return DB::table('orders')->where('id',$id)->first();
    }
}
