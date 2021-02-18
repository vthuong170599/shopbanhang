<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order_detail extends Model
{
    use HasFactory;
    protected $fillable = ['id_order','id_pro_detail','price','quantity'];

    public static function get_order_detail($id){
        return DB::table('order_details')
        ->join('product_details', 'order_details.id_pro_detail', '=', 'product_details.id')
        ->join('products', 'product_details.id_pro', '=', 'products.id')
        ->join('sizes', 'product_details.id_size', '=', 'sizes.id')
        ->join('orders', 'order_details.id_order', '=', 'orders.id')
        ->select('order_details.*', 'product_details.sku', 'orders.name','products.name as proName','sizes.name as sizeName')
        ->where('order_details.id_order',$id)
        ->get();
    }

    public static function get_order(){
        return DB::table('order_details')
        ->join('product_details', 'order_details.id_pro_detail', '=', 'product_details.id')
        ->join('orders', 'order_details.id_order', '=', 'orders.id')
        ->select('order_details.*', 'product_details.sku', 'orders.name','orders.status','orders.total_price')
        ->get();
    }

    public static function get_max(){
        return DB::table('order_details')
        ->join('product_details', 'order_details.id_pro_detail', '=', 'product_details.id')
        ->join('products', 'product_details.id_pro', '=', 'products.id')
        ->join('sizes', 'product_details.id_size', '=', 'sizes.id')
        ->join('orders', 'order_details.id_order', '=', 'orders.id')
        ->select('order_details.*', 'product_details.sku', 'orders.name','orders.status','orders.total_price','products.name as proName','sizes.name as sizeName')
        ->orderBy('order_details.quantity','desc')
        ->first();
    }
}
