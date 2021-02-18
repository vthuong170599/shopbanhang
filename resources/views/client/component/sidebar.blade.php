<div class="col-lg-3">
    <div class="shop-sidebar-style mt-25 mr-35">
        <div class="sidebar-widget mb-70">
            <h4 class="pro-sidebar-title">Danh Mục</h4>
            <div class="sidebar-widget-list mt-50">
                <ul>
                    @foreach ($category as $value)

                    <li><a href="{{route('client.category',[$value->slug,$value->id])}}">{{$value->name}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="sidebar-widget mb-60">
            <h4 class="pro-sidebar-title">Thương Hiệu</h4>
            <div class="sidebar-widget-brand mt-50">
                <ul>
                    @foreach ($brand as $value)
                    <li><a href="{{route('client.brand',[$value->slug,$value->id])}}">{{$value->name}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="sidebar-widget">
            <div class="shop-sidebar-banner default-overlay">
                <a href="#"><img alt="" src="{{asset('clients/images/banner/shop-sidebar.jpg')}}"></a>
                <div class="shop-sidebar-content">
                    <h5>NEW ARRIVAL</h5>
                    <h3>PARIS WEEK 2019</h3>
                    <a href="#">info@la-studioweb.com</a>
                </div>
            </div>
        </div>
    </div>
</div>
