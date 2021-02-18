<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Wishlist extends Model
{   protected $guarded = [];
    use HasFactory;
    public static function get_wishlists(){
        return DB::table('wishlists')
        ->join('product_details', 'wishlists.id_pro', '=', 'product_details.id')
        ->join('products', 'product_details.id_pro', '=', 'products.id')
        ->select('wishlists.*', 'product_details.price','products.slug','products.name','products.avatar')
        ->get();
    }

    public static function get_wishlist($id){
        return DB::table('wishlists')->where('id_pro',$id)->first();
    }


}
