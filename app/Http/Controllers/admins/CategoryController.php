<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddCategoryRequest;
use App\Http\Requests\EditCategoryController;
use App\Models\Category;
use Error;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index(){
        $cate = Category::paginate(10);
        return view('admin.category.index',compact('cate'));
    }

    public function create(){
        return view('admin.category.add');
    }

    public function store(AddCategoryRequest $request){
        $cate = Category::create([
            'name'=>$request->name,
            'desc'=>$request->desc,
            'status'=>$request->status,
            'slug'=> Str::slug($request->name, '-')
        ]);
        if($cate){
            return redirect()->route('category.index')->with('success','thêm mới thành công');
        }
    }

    public function edit($id){
        $cate = Category::find($id);
        return view('admin.category.edit',compact('cate'));
    }

    public function update(EditCategoryController $request,$id){
        $cate = Category::find($id)->update([
            'name'=>$request->name,
            'desc'=>$request->desc,
            'status'=>$request->status,
            'slug'=> Str::slug($request->name, '-')
        ]);
        if($cate){
            return redirect()->route('category.index')->with('success','sửa thành công');
        }
    }

    public function delete($id){
        try{
            $cate = Category::find($id)->delete();
            if($cate){
                return response()->json([
                    'code'=>200,
                    'message'=>'success'
                ],200);
            }
        }catch(Exception $exception){
            Log::error('message '.$exception->getMessage(). ' line '.$exception->getLine());
            return response()->json([
                'code'=>500,
                'message'=>'err'
            ],500);
        }
    }
}
