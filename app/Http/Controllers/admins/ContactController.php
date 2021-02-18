<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::paginate('10');
        return view('admin.contact.index',compact('contacts'));
    }

    public function create(){
        return view('admin.contact.add');
    }

    public function store(Request $request){
        $contact = Contact::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'email' => $request->email,
            'status' => $request->status
        ]);
        if($contact){
            return redirect()->route('contact.index')->with('success','thêm mới thành công');
        }
    }

    public function edit($id){
        $contact = Contact::find($id);
        return view('admin.contact.edit',compact('contact'));
    }

    public function update(request $request,$id){
        $contact = Contact::find($id)->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'email' => $request->email,
            'status' => $request->status
        ]);
        if($contact){
            return redirect()->route('contact.index')->with('success','sửa thành công');
        }
    }

    public function delete($id){
        $contact = Contact::find($id)->delete();
        if($contact){
            return response()->json([
                'code' => 200,
                'message'=> 'success'
            ]);
        }
    }
}
