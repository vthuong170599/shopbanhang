<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Traits\UploadFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    use UploadFile;
    public function index(Blog $blog){
        $blog = $blog->get_admin();
        // dd($blog);
        // $admin = Session::get('admin');
        return view('admin.blog.index',compact('blog'));
    }

    public function create(){
        $admin = Session::get('admin');
        return view('admin.blog.add',compact('admin'));
    }

    public function store(Request $request){
        $admin = Session::get('admin');
        $dataUpload = $this->uploadImage($request, 'blog', 'img_blog');
        $blog_insert =[
            'name' => $request->name,
            'title' => $request->title,
            'content' => $request->content,
            'status' => $request->status,
            'slug' => Str::slug($request->name, '-'),
            'id_admin' => $admin->id
        ];
        $blog_insert['img_blog'] = $dataUpload;
        // dd($blog_insert);
        $blog = Blog::create($blog_insert);
        if($blog){
            return redirect()->route('blog.index')->with('success','thêm mới thành công');
        }

    }

    public function edit($id){
        $blog = Blog::find($id);
        return view('admin.blog.edit',compact('blog'));
    }

    public function update($id, Request $request){
        // $admin = Session::get('admin');
        $dataUpload = $this->uploadImage($request, 'blog', 'img_blog');
        $blog = Blog::find($id);
        $dataUpdate = [
            'name' => $request->name,
            'title' => $request->title,
            'content' => $request->content,
            'status' => $request->status,
            'slug' => Str::slug($request->name, '-')
        ];
        if($request->file('img_blog')==null){
            $dataUpdate['img_blog'] = $blog->img_blog;
        }else{
            File::delete($blog->img_blog);
            $dataUpdate['img_blog'] = $dataUpload;
        }
        Blog::find($id)->update($dataUpdate);
            return redirect()->route('blog.index')->with('success','sửa thành công');
    }

    public function delete($id){
        $blog = Blog::find($id)->delete();
        return response()->json([
            'code'=>200,
            'message'=>'success'
        ]);
    }
}
