<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginAdminRequest;
use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{


    public function login(){
        return view('admin.login.login_admin');
    }

    public function signin(LoginAdminRequest $request){
        $check_email = admin::get_email($request->email);
        if($check_email){
            if(Hash::check($request->password, $check_email->password)){
                session()->put('admin',$check_email);
                // dd(session()->get('admin'));
                return redirect()->route('admin.dashboard');
            }else{
                return redirect()->back()->with('password_err','mật khẩu không chính xác');
            }
        }else{
            return redirect()->back()->with('email_err','email không tồn tại');
        }
    }

    public function logout(){
        session()->pull('admin');
        return redirect()->route('admin.login');
    }

    public function register(){
        return view('admin.login.register');
    }

    public function signup(Request $request){
        $check_email = admin::get_email($request->email);
        if($check_email){
            return redirect()->back()->with('err_email','email đã tồn tại');
        }else{
            $data = [
                'email' => $request->email,
                'name' => $request->name,
                'phone' => $request->phone,
                'password' => Hash::make($request->password)
            ];
            admin::create($data);
            return redirect()->route('admin.login');
        }
    }
}
