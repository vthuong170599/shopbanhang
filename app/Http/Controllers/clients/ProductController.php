<?php

namespace App\Http\Controllers\clients;

use App\Helper\CartHelper;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\product_detail;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function get_cate($slug,$id){
        $products = Product::where('cat_id',$id)->where('status',1)->paginate(10);
        $product =  Product:: add_attr_pro($products);
        return view('client.content.category',compact('product'));
    }
    public function get_brand($slug,$id){
        $products = Product::where('brand_id',$id)->where('status',1)->paginate(10);
        $product =  Product:: add_attr_pro($products);
        return view('client.content.category',compact('product'));
    }

    public function sort_date(){
        $products = Product::where('status',1)->orderBy('created_at','desc')->paginate(10);
        $product =  Product:: add_attr_pro($products);
        return view('client.content.category',compact('product'));
    }

    public function sort_low_to_high(){
        $products = Product::where('status',1)->get();
        $product =  Product:: add_attr_pro($products);
        $product = $product->sortBy(function($product){
            return $product->price;
        });
        return view('client.content.category',compact('product'));
    }

    public function sort_high(){
        $products = Product::where('status',1)->get();
        $product =  Product:: add_attr_pro($products);
        $product = $product->sortByDesc(function($product){
            return $product->price;
        });
        return view('client.content.category',compact('product'));
    }

    public function search(Request $request){
        $product = Product::where('name', 'LIKE',"%$request->search%")->where('status',1)->get();
        $product = Product::add_attr_pro($product);
        return view('client.content.category',compact('product'));
    }
}
