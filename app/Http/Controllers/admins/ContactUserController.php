<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Models\Contact_user;
use Illuminate\Http\Request;

class ContactUserController extends Controller
{
    public function index(){
        $contact_user = Contact_user::all();
        return view('admin.contact-user.index',compact('contact_user'));
    }
}
