<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class banner extends Model
{
    protected $guarded = [];
    use HasFactory;

    public static function delete_image($id){
        return DB::table('banners')->where('id',$id)->delete();
    }
}
