<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\admin;
use Illuminate\Support\Facades\DB;

class Blog extends Model
{
    protected $guarded =[];
    use HasFactory;

    public static function get_admin(){
        $admins = DB::table('admins')
        ->join('blogs', 'admins.id', '=', 'blogs.id_admin')
        ->select('blogs.*',  'admins.name as AdminName')
        ->paginate(10);
        return $admins;
    }

    public function admins(){
        return $this->belongsTo(admin::class, 'id_admin', 'id');
   }
}
