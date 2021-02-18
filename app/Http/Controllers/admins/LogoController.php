<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Models\Logo;
use App\Traits\UploadFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LogoController extends Controller
{
    Use UploadFile;
    public function index(){
        $get = Logo::get_logo();

        // $logo = $get[0];
        // dd($get);
        $getlogo = Logo::paginate(5);
        // return view('admin.logo.index',compact('getlogo','get'));
        $getlogo = Logo::paginate(5);
        return view('admin.logo.index',compact('getlogo'));
    }

    public function create(){
        return view('admin.logo.add');
    }

    public function store(Request $request){
        $dataUpload = $this->uploadImage($request, 'logo', 'image');
        $dataInsert = [
            'name' => $request->name,
            'image' => $request->image,
            'status' => $request->status,
        ];
        $dataInsert['image'] = $dataUpload;
        $logo = Logo::create($dataInsert);
        if($logo){
            return redirect()->route('logo.index')->with('success','thêm mới thành công');
        }
    }

    public function edit($id){
        $logo = Logo::find($id);
        return view('admin.logo.edit', compact('logo'));
    }

    public function update(Request $request,$id){
        $logo = Logo::find($id);
        $dataUpload = $this->uploadImage($request, 'logo', 'image');
        $dataUpdate = [
            'name' => $request->name,
            'image' => $request->image,
            'status' => $request->status,
        ];
        if ($request->file('image') == null) {
            $dataUpdate['image'] = $logo->image;
        } else {
            File::delete($logo->image);
            $dataUpdate['image'] = $dataUpload;
        };
        $Logo = Logo::find($id)->update($dataUpdate);
        return redirect()->route('logo.index')->with('success','sửa thành công');
    }

    public function delete($id){
        $logo = Logo::find($id)->delete();
        return response()->json([
            'code'=>200,
            'message'=>'success'
        ]);
    }
}
