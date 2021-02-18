@extends('admin.master')
@section('content')
@section('title','Thêm blog')
@section('name_page','Add blog')
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
                    <form action="{{route('blog.store')}}" method="POST" role="form" enctype="multipart/form-data">
                        @csrf
                        <legend>Thêm mới blog</legend>

                        <div class="form-group">
                            <label for="">Tên blog</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                placeholder="nhập tên blog">
                            @error('name')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Tiêu đề</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                                placeholder="nhập tiêu đề blog">
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
                        <div class="form-group">
                            <label for="">Người đăng</label>
                            <input type="text" class="form-control @error('id_admin') is-invalid @enderror" name="id_admin"
                                value={{$admin->name}} readonly>
                            @error('id_admin')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="radio">
                            <label>
                                <input type="radio" name="status" id="input" value="1" checked="checked">
                                Hiện
                            </label>
                            <label>
                                <input type="radio" name="status" id="input" value="0">
                                Ẩn
                            </label>
                        </div>

                        <button type="submit" class="btn btn-primary">Thêm mới</button>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group">
                            <label for="">Nội dung</label>
                            <textarea type="text" class="form-control @error('content') is-invalid @enderror" id="content" name="content"
                            placeholder="nhập nội dung blog" rows="20"></textarea>
                            @error('content')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
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
