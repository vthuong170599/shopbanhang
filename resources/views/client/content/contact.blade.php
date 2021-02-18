@extends('client.master')
@section('title','trang client')
@section('name_page','Contact')
@section('content')
<div class="breadcrumb-area breadcrumb-bg-3 section-padding-1 pt-200 pb-120" >
    <div class="container-fluid">
        <div class="breadcrumb-content text-center">
            <div class="breadcrumb-title">
                <h2>@yield('name_page')</h2>
            </div>
            <ul>
                <li>
                    <a href="{{route('client.index')}}">Home </a>
                </li>
                <li><span> > </span></li>
                <li class="active"> @yield('name_page')</li>
            </ul>
        </div>
    </div>
</div>
<!-- cart start -->
<div class="contact-us-area pt-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 ml-auto mr-auto">
                <div class="row">
                    <div class="col-xl-9 col-lg-8 col-md-7">
                        <div class="contact-form-area">
                            <h2>Get a quote</h2>
                            @if (session()->has('message'))
                                <p class="text-danger">{{session('message')}}</p>
                            @endif
                            <form id="contact-form" action="{{route('client.contact_post')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <input name="name" type="text" placeholder="Your Name... *" value="{{isset($client)?$client->name:''}}">
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12">
                                        <input name="email" type="email" placeholder="Your Email... *" value="{{isset($client)?$client->email:''}}">
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12">
                                        <input name="phone" type="text" placeholder="Enter your phone..." value="{{isset($client)?$client->phone:''}}">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <textarea name="content" placeholder="content"></textarea>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <button class="submit" type="submit">Send</button>
                                    </div>
                                </div>
                            </form>
                            <p class="form-messege"></p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-5">
                        <div class="contact-info-area">
                            <h2>Get Info</h2>
                            <div class="contact-info-top">
                                <div class="sin-contact-info-wrap mb-25">
                                    <div class="contact-address">
                                        <i class="ti-home"></i>
                                        <span>{{$contact->address}}</span>
                                    </div>

                                </div>
                            </div>
                            <div class="contact-info-bottom">
                                <ul>
                                    <li><i class=" ti-email "></i>{{$contact->email}}</li>
                                    <li><i class="ti-mobile"></i>{{$contact->phone}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-page-map pt-100">
        <div id="contact-2"></div>
    </div>
</div>
@endsection
