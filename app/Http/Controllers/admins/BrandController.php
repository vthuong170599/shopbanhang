<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddBrandRequest;
use App\Http\Requests\EditBrandRequest;
use App\Models\brand;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    public function index(){
        $brands = brand::paginate(5);
        return view('admin.brand.index',compact('brands'));
    }

    public function create(){
        return view('admin.brand.add');
    }

    public function store(AddBrandRequest $request){
        $brand = brand::create([
            'name'=>$request->name,
            'desc'=>$request->desc,
            'stauts'=>$request->status,
            'slug'=> Str::slug($request->name, '-')
        ]);
        if($brand){
            return redirect()->route('brand.index')->with('success','thêm mới thành công');
        }
    }

    public function edit($id){
        $brands = brand::find($id);
        return view('admin.brand.edit',compact('brands'));
    }

    public function update(EditBrandRequest $request,$id){
        $brand = brand::find($id)->update([
            'name'=>$request->name,
            'desc'=>$request->desc,
            'stauts'=>$request->status,
            'slug'=> Str::slug($request->name, '-')
        ]);
        if($brand){
            return redirect()->route('brand.index')->with('success','sửa thành công');
        }
    }

    public function delete($id){
        try{
            $brand = brand::find($id)->delete();
            if($brand){
                return response()->json([
                    'code'=>200,
                    'message'=>'success'
                ],200);
            }
        }catch(Exception $exception){
            Log::error('message '.$exception->getMessage(). ' line '.$exception->getLine());
            return response()->json([
                'code'=>500,
                'message'=>'success'
            ],500);
        }
    }
}
