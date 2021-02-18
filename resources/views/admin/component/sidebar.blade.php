<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                    <a href="{{route('admin.dashboard')}}" class="waves-effect">
                        <i class="icon-accelerator"></i><span class="badge badge-success badge-pill float-right"></span> <span> Dashboard </span>
                    </a>
                </li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-book"></i><span> Danh mục sản phẩm <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="{{route('category.index')}}"><i class="far fa-list-alt"></i> Danh sách danh mục</a></li>
                        <li><a href="{{route('category.create')}}"><i class="fas fa-plus-square"></i> Thêm danh mục</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="icon-mail-open"></i><span> Thương hiệu <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="{{route('brand.index')}}"><i class="far fa-list-alt"></i> Danh sách thương hiệu</a></li>
                        <li><a href="{{route('brand.create')}}"><i class="fas fa-plus-square"></i> Thêm thương hiệu</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="fab fa-product-hunt"></i><span> Sản phẩm <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="{{route('product.index')}}"><i class="far fa-list-alt"></i> Danh sách sản phẩm</a></li>
                        <li><a href="{{route('product.create')}}"><i class="fas fa-plus-square"></i> Thêm sản phẩm</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-truck"></i><span> Đơn hàng <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="{{route('order.index')}}"><i class="far fa-list-alt"></i> Danh sách đơn hàng</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="fab fa-slideshare"></i><span> Banner <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="{{route('banner.index')}}"><i class="far fa-list-alt"></i> Danh sách Banner</a></li>
                        <li><a href="{{route('banner.create')}}"><i class="fas fa-plus-square"></i> Thêm Banner</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-id-card"></i><span> Contact <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="{{route('contact.index')}}"><i class="far fa-list-alt"></i> Danh sách Contact</a></li>
                        <li><a href="{{route('contact.edit',$contact->id)}}"><i class="fas fa-plus-square"></i> Thêm Contact</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-id-card"></i><span> Contact_user <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="{{route('contact-user.index')}}"><i class="far fa-list-alt"></i> Danh sách Contact_user</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-biohazard"></i><span> Logo <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="{{route('logo.index')}}"><i class="far fa-list-alt"></i> Danh sách Logo</a></li>
                        <li><a href="{{route('logo.create')}}"><i class="fas fa-plus-square"></i> Thêm Logo</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-blog"></i><span> Blog <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="{{route('blog.index')}}"><i class="far fa-list-alt"></i> Danh sách Blog</a></li>
                        <li><a href="{{route('blog.create')}}"><i class="fas fa-plus-square"></i> Thêm Blog</a></li>
                    </ul>
                </li>
            </ul>

        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
