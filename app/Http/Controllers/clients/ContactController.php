<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\Contact_user;
use App\Models\Contactt;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('client.content.contact');
    }

    public function index_post(Request $request){
        $contact = Contact_user::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'content'=>$request->content
        ]);
        return redirect()->back()->with('message','ý kiến của bạn đã được gửi đến quản trị viên');
    }
}
