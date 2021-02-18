<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class product_detail extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function insert_size($data_insert, $request, $id)
    {
        $insert = [];
        foreach ($data_insert as $value) {
            $insert = [
                'id_pro' => $id,
                'price' => $request->price,
                'discount' => (!empty($request->discount)) ? $request->discount : 0,
                'sale_price' => $request->price - ($request->price * ($request->discount / 100)),
                'quantity' => $request->quantity,
                'status' => $request->status,
                'id_size' => $value
            ];
            $pro_detail = product_detail::create($insert);
        };
        return $insert;
        // dd($insert);
        // DB::table('product_details')->insert($insert);
    }

    public static function get_info_product($id)
    {
        return DB::table('product_details')
            ->join('sizes', 'product_details.id_size', '=', 'sizes.id')
            ->join('products', 'product_details.id_pro', '=', 'products.id')
            ->select('product_details.*', 'sizes.name as nameSize', 'products.slug')
            ->where('product_details.id_pro', $id)
            ->get();
    }

    public static function get_to_cart($id)
    {
        return DB::table('products')
            ->join('product_details', 'products.id', '=', 'product_details.id_pro')
            ->join('sizes', 'product_details.id_size', '=', 'sizes.id')
            ->select('products.*', 'sizes.name as nameSize', 'product_details.*')
            ->where('product_details.id',$id)
            ->first();
    }

    public static function get_product_detail($id)
    {
        return DB::table('product_details')->where('id_pro', $id)->get();
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'id_pro', 'id');
    }
}
