@extends('admin.master')
@section('content')
@section('title','Sửa blog')
@section('name_page','Edit blog')
<style>
    .thuonglone{
        width: 240px;
    }
</style>
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">@yield('name_page')</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Shop bán hàng</a></li>
                            <li class="breadcrumb-item active">@yield('name_page')</li>
                        </ol>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end page-title -->

            <div class="row">

                <div class="col-md-3">
                    <form action="{{route('blog.update',$blog->id)}}" method="POST" role="form" enctype="multipart/form-data">
                        @csrf
                        <legend>Sửa blog</legend>

                        <div class="form-group">
                            <label for="">tên blog</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                value="{{$blog->name}}">
                            @error('name')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Tiêu đề</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                                value="{{$blog->title}}">
                            @error('title')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Ảnh</label>
                            <input type="file" class="form-control @error('img_blog') is-invalid @enderror" name="img_blog"> @error('img_blog')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <img class="thuonglone" src="{{asset($blog->img_blog)}}" alt="">
                        <div class="radio">
                            <label>
                                <input type="radio" name="status" id="input" value="{{$blog->status}}" {{($blog->status==1)?'checked':''}}>
                                Hiện
                            </label>
                            <label>
                                <input type="radio" name="status" id="input" value="{{$blog->status}}" {{($blog->status==0)?'checked':''}}>
                                Ẩn
                            </label>
                        </div>

                    </div>
                    <div class="col-md-9">
                        <div class="form-group">
                            <label for="">Nội dung</label>
                            <textarea type="text" class="form-control @error('content') is-invalid @enderror" id="content" name="content"
                             rows="20">{{$blog->content}}</textarea>
                            @error('content')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                </form>

            </div>


        </div>
        <!-- container-fluid -->

    </div>
    <script src="/bower/tinymce/tinymce.min.js"></script>
  <script type="text/javascript">
  tinymce.init({
    selector: '#content',
    plugins: "image code",
    image_title: true,
    automatic_uploads: true,
    file_picker_types: 'image',
    file_picker_callback: function(cb, value, meta) {
        var input = document.createElement('input');
        input.setAttribute('type', 'file');
        input.setAttribute('accept', 'image/*');
        input.onchange = function () {
            var file = this.files[0];
            var reader = new FileReader();

            reader.onload = function () {
                var id = 'blobid' + (new Date()).getTime();
                var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                var base64 = reader.result.split(',')[1];
                var blobInfo = blobCache.create(id, file, base64);
                blobCache.add(blobInfo);
                cb(blobInfo.blobUri(), {title: file.name});
            };
            reader.readAsDataURL(file);
        };
        input.click();
    }
  });
  </script>
    @endsection
