<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class admin extends Model
{
    use HasFactory;
    protected $fillable = ['name','email','phone','password'];

    public static function get_email($email){
        return DB::table('admins')->where('email',$email)->first();
    }
    public function blogs(){
    	return $this->hasMany(Blog::class, 'id_admin', 'id');
    }

}
