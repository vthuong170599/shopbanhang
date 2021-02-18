<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Logo extends Model
{
    protected $guarded = [];
    use HasFactory;
    public static function get_logo(){
        return DB::table('logos')->where('status',1)->limit(1)->get();
    }
    public static function delete_image($id){
        return DB::table('logos')->where('id',$id)->delete();
    }
}
