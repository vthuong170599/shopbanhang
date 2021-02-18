<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index($id,Request $request){
        // dd($request->all());
        $client = session()->get('client');
        $demo = 'feedback';
        if($client){
            Feedback::create([
                'id_pro'=>$id,
                'id_user'=>$client->id,
                'content'=>$request->content
            ]);
            return redirect()->back()->with('message','ok');
        }else{
            return view('client.content.login',compact('demo'));
        }
    }

}
