<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Feedback extends Model
{
    use HasFactory;
    protected $fillable = ['id_pro','id_user','content'];

    public static function get_feedback($id){
        return DB::table('feedback')
        ->join('products', 'feedback.id_pro', '=', 'products.id')
        ->join('users', 'feedback.id_user', '=', 'users.id')
        ->select('feedback.*', 'products.name', 'users.name as username')
        ->where('id_pro',$id)
        ->get();
    }
}
