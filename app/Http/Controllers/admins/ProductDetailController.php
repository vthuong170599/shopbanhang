<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddProDetailRequest;
use App\Http\Requests\AddProductDetailRequest;
use App\Models\Order;
use App\Models\Order_detail;
use App\Models\Product;
use App\Models\product_detail;
use App\Models\Size;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    public function index($id){
        $product = Product::find($id);
        $size = Size::all();
        $product_detail = product_detail::get_product_detail($id);
        return view('admin.product-detail.index',compact('product_detail','product','size'));
    }

    public function store(AddProDetailRequest $request,$id){
        $discount = $request->discount;
        if($discount<=0){
            $discount = 0;
        }else if($discount>=100){
            $discount = 100;
        }else{
            $discount = $request->discount;
        }
        // dd($discount);
        product_detail::create([
            'id_pro'=>$id,
            'sku'=>$request->sku,
            'price'=>$request->price,
            'discount'=> $discount,
            'sale_price'=>$request->price-($request->price*($discount/100)),
            'quantity'=>$request->quantity,
            'status'=>$request->status,
            'id_size'=>$request->id_size
        ]);
        return redirect()->route('product_detail.index',$id)->with('success', 'thêm mới thành công');
    }

    public function edit($id){
        $product_detail = product_detail::find($id);
        $product = Product::find($product_detail->id_pro);
        $size = Size::all();
        return view('admin.product-detail.edit',compact('product_detail','product','size'));
    }

    public function update($id,Request $request){
        $discount = $request->discount;
        if($discount<=0){
            $discount = 0;
        }else if($discount>=100){
            $discount = 100;
        }else{
            $discount = $request->discount;
        }
        $product_detail = product_detail::find($id);
        product_detail::find($id)->update([
            'id_pro'=>$product_detail->id_pro,
            'sku'=>$request->sku,
            'price'=>$request->price,
            'discount'=> $discount,
            'sale_price'=>$request->price-($request->price*($discount/100)),
            'quantity'=>$request->quantity,
            'status'=>$request->status,
            'id_size'=>$request->id_size
        ]);
        return redirect()->route('product_detail.index',$product_detail->id_pro)->with('success', 'sửa thành công');
    }

    public function delete($id){
        Order_detail::where('id_pro_detail',$id)->delete();
        product_detail::find($id)->delete();
        return response()->json([
            'code'=>200,
            'message'=>'success'
        ],200);
    }
}
