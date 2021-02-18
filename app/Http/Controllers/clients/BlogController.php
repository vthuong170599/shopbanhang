<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class BlogController extends Controller
{
    public function index(Blog $blog){
        $blog = $blog->get_admin();
        // $blog=Blog::where('status','=','1')->paginate(4);
        // dd($blog->created_at);
        return view('client.component.pages.blog',compact('blog'));
    }

    public function show(Blog $blog,$slug,$id){
        $blog=Blog::where('slug','=',$slug)->first();
        $blog_detail = Blog::find($id);
        // $admin = $blog->get_admin();
        // foreach($admin as $value){
        //     if($value[0])
        // }
        // dd($blog->admins->name);
        // dd($admin);
        return view('client.component.pages.blog-detail',compact('blog','blog_detail'));
    }
}
