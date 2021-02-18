<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Http\Requests\EditAdminRequest;
use App\Http\Requests\EditProfileRequest;
use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index(){
        $admin = session()->get('admin');
        // dd(session()->get('admin'));
        return view('admin.profile.index',compact('admin'));
    }

    public function edit($id){
        $admin = admin::find($id);
        return view('admin.profile.edit',compact('admin'));
    }

    public function update(EditAdminRequest $request,$id){
        admin::find($id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone
        ]);
        $admin = admin::find($id);
        session()->put('admin',$admin);
        // dd(session()->get('admin'));
        return redirect()->route('profile.index')->with('success','sửa thành công');
    }

    public function edit_password($id){
        $admin = admin::find($id);
        return view('admin.profile.change_password',compact('admin'));
    }

    public function update_password(Request $request,$id){
        $admin = admin::find($id);
        $password = $admin->password;
        if($request->new_pass === $request->r_pass){
            if(Hash::check($request->password, $password)){
                admin::find($id)->update(['password'=>Hash::make($request->new_pass)]);
                $admin = admin::find($id);
                session()->put('admin',$admin);
            }else{
                return redirect()->back()->with('err_pass','mật khẩu không đúng');
            }
        }else{
            return redirect()->back()->with('err_rpass','mật khẩu không khớp');
        }
        return redirect()->route('profile.index')->with('success','đổi mật khẩu thành công');
    }
}
