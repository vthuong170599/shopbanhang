<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class Product_image extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function delete_image($id){
        return DB::table('product_images')->where('id_pro',$id)->delete();
    }

    public static function get_image_detail($id){
        return DB::table('product_images')->where('id_pro',$id)->get();
    }

}
