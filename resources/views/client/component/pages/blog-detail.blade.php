@extends('client.master')
@section('content')


<div class="main-wrapper main-wrapper-2">
    <div class="blog-details-area pt-90 pb-100 border-top-3">
        <div class="custom-container-9">
            <div class="row">
                <div class="col-md-12">
                    <div class="b-details-content-social">
                        <div class="blog-details-top-wrap"><img src="{{asset($blog_detail->img_blog)}}" alt="" />
                            <h2>Emu Oil For Anti Wrinkle</h2>
                            <div class="blog-details-meta">
                            <ul>
                            <li><a href="#">{{$blog_detail->created_at}}</a></li>
                            <li>By <a href="#">{{$blog->admins->name}}</a></li>
                            </ul>
                        {!! $blog_detail->content !!}
                        {{-- <div class="blog-details-top-wrap">
                            <img src="assets/images/blog/blog-details-1.jpg" alt="">
                            <div class="blog-details-wrap2">
                                <h2>Emu Oil For Anti Wrinkle</h2>
                                <div class="blog-details-meta">
                                    <ul>
                                        <li><a href="#">February 21, 2019</a></li>
                                        <li>By <a href="#">John Snow</a></li>
                                    </ul>
                                </div>
                                <p>Praesent sed ex vel mauris eleifend mollis. Vestibulum dictum sodales ante, ac pulvinar urna sollicitudin in. Suspendisse sodales dolor nec mattis convallis. Quisque ut nulla viverra, posuere lorem eget, ultrices metus. Nulla facilisi. Duis aliquet, eros in auctor aliquam, tortor justo laoreet nisi, nec pulvinar lectus diam nec libero. Nullam sit amet dia</p>
                                <p>Cras porta posuere lectus, vitae consectetur dolor elementum id. Ut interdum, sem eget varius eleifend, ex risus gravida purus, sed finibus tortor nisi maximus orci. Etiam vel sollicitudin nisi. In ipsum tortor, vulputate nec est in, pharetra malesuada diam. Praesent ullamcorper lacinia ultrices. Etiam semper cursus mi, id tempor neque porta non. Praesent nec faucibus risus. Morbi aliquam hendrerit felis, eu cursus orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et ante a felis egestas varius quis eget urna. Mauris blandit, sem venenatis blandit vehicula, neque leo eleifend ante, id porta enim odio sit amet dolor. Duis finibus magna id justo egestas tincidunt. Aliquam eu tristique lorem. Morbi rutrum accumsan sem, ut rhoncus tortor tincidunt eget. Phasellus eros massa, molestie id molestie a, maximus id tortor. Aenean sit amet arcu varius, elementum sapien ut, tristique est.</p>
                                <div class="b-details-content-middle">
                                    <h3>7 Reason why you need to work for a big company</h3>
                                    <div class="row">
                                        <div class="col-lg-7 col-md-7">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et ante a felis egestas varius quis eget urna. Mauris blandit, sem venenatis blandit vehicula, neque leo eleifend ante, id porta enim odio sit amet dolor. Duis finibus magna id justo egestas tincidunt. Aliquam eu tristique lorem. Morbi rutrum accumsan sem, ut</p>
                                            <ul>
                                                <li>Praesent sed ex vel mauris eleifend mollis. Vestibulum dictum sodales ante, ac pulvinar urna sollicitudin in. Suspendisse sodales dolor nec mattis conva.</li>
                                                <li>Cras porta posuere lectus, vitae consectetur dolor elementum id. Ut interdum, sem eget varius eleifend</li>
                                            </ul>
                                            <p>Porta enim odio sit amet dolor. Duis finibus magna id justo egestas tincidunt. Aliquam eu tristique lorem. Morbi rutrum accumsan sem, ut</p>
                                        </div>
                                        <div class="col-lg-5 col-md-5">
                                            <div class="blog-details-img">
                                                <img src="assets/images/blog/blog-details-2.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <p class="blog-details-mrg">Praesent sed ex vel mauris eleifend mollis. Vestibulum dictum sodales ante, ac pulvinar urna sollicitudin in. Suspendisse sodales dolor nec mattis convallis. Quisque ut nulla viverra, posuere lorem eget, ultrices metus. Nulla facilisi. Duis aliquet, eros in auctor aliquam, tortor justo laoreet nisi, nec pulvinar lectus diam nec libero. Nullam sit amet dia</p>
                                    <p>Cras porta posuere lectus, vitae consectetur dolor elementum id. Ut interdum, sem eget varius eleifend, ex risus gravida purus, sed finibus tortor nisi maximus orci. Etiam vel sollicitudin nisi. In ipsum tortor, vulputate nec est in, pharetra malesuada diam. Praesent ullamcorper lacinia ultrices. Etiam semper cursus mi, id tempor neque porta non. Praesent nec faucibus risus. Morbi aliquam hendrerit felis, eu cursus orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et ante a felis egestas varius quis eget urna. Mauris blandit, sem venenatis blandit vehicula, neque leo eleifend ante, id porta enim odio sit amet dolor. Duis finibus magna id justo egestas tincidunt. Aliquam eu tristique lorem. Morbi rutrum accumsan sem, ut rhoncus tortor tincidunt eget.</p>
                                </div>
                                <div class="blog-details-tag">
                                    <ul>
                                        <li>Tags : </li>
                                        <li><a href="#">bag,</a></li>
                                        <li><a href="#">dress,</a></li>
                                        <li><a href="#">fashion,</a></li>
                                        <li><a href="#">man,</a></li>
                                        <li><a href="#">slim-fit,</a></li>
                                        <li><a href="#">sweater,</a></li>
                                        <li><a href="#">trend</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
