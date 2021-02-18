<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Feedback;
use App\Models\Product;
use App\Models\product_detail;
use App\Models\Product_image;
use App\Models\Size;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    public function index($slug,$id){
        $pro = Product::where('slug',$slug)->first();
        // dd($pro);
        $details = product_detail::get_info_product($pro->id);
        // dd($details);
        $pro_detail = product_detail::get_product_detail($pro->id);
        $product = Product::get_cate($pro->brand_id,$pro->cat_id);
        $img_pro = Product_image::get_image_detail($pro->id);
        $size = Size::all();
        $detail = product_detail::find($id);
        // dd($detail);
        $products = Product::where('cat_id',$pro->cat_id)->paginate(10);
        Product::add_attr_pro($products);
        // dd($products);
        $feedback = Feedback::get_feedback($pro->id);
        $wishlist = Wishlist::get_wishlist($id);
        // dd($feedback);
        return view('client.content.product-detail',compact('product','pro_detail','img_pro','detail','size','details','feedback','wishlist','products'));
    }

}
