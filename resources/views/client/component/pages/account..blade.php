@extends('client.master')
@section('content')

<div class="breadcrumb-area bg-gray-2 section-padding-1 pt-200 pb-120">
    <div class="container-fluid">
        <div class="breadcrumb-content text-center">
            <div class="breadcrumb-title">
                <h2>My Account</h2>
            </div>
            <ul>
                <li>
                    <a href="index.html">Home </a>
                </li>
                <li><span> > </span></li>
                <li class="active">My Account</li>
            </ul>
        </div>
    </div>
</div>
<div class="my-account-area pt-100 pb-95">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-12">
                <div class="myaccount-tab-menu nav" role="tablist">
                    <a href="#dashboad" class="active" data-toggle="tab">
                        Dashboard</a>
                    <a href="#orders" data-toggle="tab"> Orders</a>
                    <a href="#download" data-toggle="tab"> Download</a>
                    <a href="#address-edit" data-toggle="tab"> address</a>
                    <a href="#account-info" data-toggle="tab"> Account Details</a>
                    <a href="login-register.html"> Logout</a>
                </div>
                <!-- My Account Tab Menu End -->
                <!-- My Account Tab Content Start -->
                <div class="tab-content" id="myaccountContent">
                    <!-- Single Tab Content Start -->
                    <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                        <div class="myaccount-content">
                            <div class="welcome">
                                <p>Hello, <strong>Alex Tuntuni</strong> (If Not <strong>Alex Tuntuni !</strong><a href="login-register.html" class="logout"> Logout</a>)</p>
                            </div>

                            <p class="mb-0">From your account dashboard. you can view your recent orders, manage your shipping and billing addresses and edit your password and account details.</p>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->
                    <!-- Single Tab Content Start -->
                    <div class="tab-pane fade" id="orders" role="tabpanel">
                        <div class="myaccount-content">
                            <div class="myaccount-table table-responsive text-center">
                                <table class="table table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Order</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Total</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Aug 22, 2018</td>
                                            <td>Pending</td>
                                            <td>$3000</td>
                                            <td><a href="cart.html" class="check-btn sqr-btn ">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>July 22, 2018</td>
                                            <td>Approved</td>
                                            <td>$200</td>
                                            <td><a href="cart.html" class="check-btn sqr-btn ">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>June 12, 2017</td>
                                            <td>On Hold</td>
                                            <td>$990</td>
                                            <td><a href="cart.html" class="check-btn sqr-btn ">View</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->
                    <!-- Single Tab Content Start -->
                    <div class="tab-pane fade" id="download" role="tabpanel">
                        <div class="myaccount-content">
                            <div class="myaccount-table table-responsive text-center">
                                <table class="table table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Product</th>
                                            <th>Date</th>
                                            <th>Expire</th>
                                            <th>Download</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Haven - Free Real Estate PSD Template</td>
                                            <td>Aug 22, 2018</td>
                                            <td>Yes</td>
                                            <td><a href="#" class="check-btn sqr-btn "><i class="fa fa-cloud-download"></i> Download File</a></td>
                                        </tr>
                                        <tr>
                                            <td>HasTech - Profolio Business Template</td>
                                            <td>Sep 12, 2018</td>
                                            <td>Never</td>
                                            <td><a href="#" class="check-btn sqr-btn "><i class="fa fa-cloud-download"></i> Download File</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->
                    <!-- Single Tab Content Start -->
                    <div class="tab-pane fade" id="address-edit" role="tabpanel">
                        <div class="myaccount-content">
                            <address>
                                <p><strong>Alex Tuntuni</strong></p>
                                <p>1355 Market St, Suite 900 <br>
                            San Francisco, CA 94103</p>
                                    <p>Mobile: (123) 456-7890</p>
                            </address>
                            <a href="#" class="check-btn sqr-btn "><i class="fa fa-edit"></i> Edit Address</a>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->
                    <!-- Single Tab Content Start -->
                    <div class="tab-pane fade" id="account-info" role="tabpanel">
                        <div class="myaccount-content">
                            <div class="account-details-form">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="single-input-item">
                                                <label for="first-name" class="required">First Name <span>*</span></label>
                                                <input type="text" id="first-name" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="single-input-item">
                                                <label for="last-name" class="required">Last Name <span>*</span></label>
                                                <input type="text" id="last-name" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-input-item">
                                        <label for="display-name" class="required">Display Name <span>*</span></label>
                                        <input type="text" id="display-name" />
                                    </div>
                                    <div class="single-input-item">
                                        <label for="email" class="required">Email Addres <span>*</span></label>
                                        <input type="email" id="email" />
                                    </div>
                                    <fieldset>
                                        <legend>Password change</legend>
                                        <div class="single-input-item">
                                            <label for="current-pwd" class="required">Current password (leave blank to leave unchanged)</label>
                                            <input type="password" id="current-pwd" />
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="single-input-item">
                                                    <label for="new-pwd" class="required">New password (leave blank to leave unchanged)</label>
                                                    <input type="password" id="new-pwd" />
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="single-input-item">
                                                    <label for="confirm-pwd" class="required">Confirm new password</label>
                                                    <input type="password" id="confirm-pwd" />
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="single-input-item">
                                        <button class="check-btn sqr-btn ">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> <!-- Single Tab Content End -->
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer-area section-padding-1 bg-black pt-70">
    <div class="container-fluid">
        <div class="row">
            <div class="footer-column footer-width-32">
                <div class="footer-widget mb-40">
                    <div class="footer-about">
                        <div class="footer-logo">
                            <a href="index.html"><img src="assets/images/logo/logo-white.png" alt="logo"></a>
                        </div>
                        <div class="footer-info">
                            <ul>
                                <li><a href="#"> info@example.com </a></li>
                                <li> +54.854.854.6666 </li>
                                <li> 035 Virginia Plaza Suite 331 </li>
                            </ul>
                        </div>
                        <div class="footer-social">
                            <ul>
                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="youtube" href="#"><i class="fa fa-youtube"></i></a></li>
                                <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-column footer-width-12">
                <div class="footer-widget mb-40">
                    <div class="footer-title">
                        <h3>COMPANY</h3>
                    </div>
                    <div class="footer-list">
                        <ul>
                            <li><a href="#">Help</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Gift voucher</a></li>
                            <li><a href="#">Affiliate</a></li>
                            <li><a href="#">Work for Payna</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-column footer-width-12">
                <div class="footer-widget mb-40">
                    <div class="footer-title">
                        <h3>USERFUL</h3>
                    </div>
                    <div class="footer-list">
                        <ul>
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Press</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-column footer-width-12">
                <div class="footer-widget mb-40">
                    <div class="footer-title">
                        <h3>QUICKLINKS</h3>
                    </div>
                    <div class="footer-list">
                        <ul>
                            <li><a href="#">The Collections</a></li>
                            <li><a href="#">Size Guide</a></li>
                            <li><a href="compare.html">Compare</a></li>
                            <li><a href="my-account.html">My Account</a></li>
                            <li><a href="wishlist.html">My Account</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-column footer-width-31">
                <div class="footer-widget subscribe-right mb-40">
                    <div class="footer-title">
                        <h3>JOIN OUR NEWSLETTER</h3>
                    </div>
                    <div id="mc_embed_signup" class="subscribe-form mt-20">
                        <form id="mc-embedded-subscribe-form" class="validate subscribe-form-style" novalidate="" target="_blank" name="mc-embedded-subscribe-form" method="post" action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                            <div id="mc_embed_signup_scroll" class="mc-form">
                                <input class="email" type="email" required="" placeholder="Enter your email address..." name="EMAIL" value="">
                                <div class="mc-news" aria-hidden="true">
                                    <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                                </div>
                                <div class="clear">
                                    <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe" value="Subscribe">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright text-center pt-25 pb-10">
            <p>© Payna Store All rights reserved </p>
        </div>
    </div>
</footer>
<div class="support-lists">
    <ul>
        <li><a href="#"><i class=" ti-comments "></i></a></li>
        <li><a href="#"><i class=" ti-headphone-alt "></i></a></li>
        <li><a href="#"><i class=" ti-email "></i></a></li>
    </ul>
</div>
<div class="view-demo-area">
    <a class="view-demo-btn-active" href="#">More Demos</a>
    <div class="view-demo-aside-active">
        <div class="view-demo-wrap">
            <div class="view-demo-tab-list nav">
                <a class="active" href="#view-demo-1" data-toggle="tab">
                    Demo Group 01
                </a>
                <a href="#view-demo-2" data-toggle="tab">
                    Demo Group 02
                </a>
            </div>
            <div class="tab-content jump-2">
                <div id="view-demo-1" class="tab-pane active">
                    <div class="row">
                        <div class="col-md-6 col-12 col-sm-6">
                            <div class="demo-item mb-40">
                                <div class="demo-item-img">
                                    <a href="index.html">
                                        <img src="assets/images/view-demo/h-1.jpg" alt="demo-img">
                                        <span>View Demo</span>
                                    </a>
                                </div>
                                <div class="demo-item-content">
                                    <h4><a href="index.html">Home Demo 01</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 col-sm-6">
                            <div class="demo-item mb-40">
                                <div class="demo-item-img">
                                    <a href="index-2.html">
                                        <img src="assets/images/view-demo/h-2.jpg" alt="demo-img">
                                        <span>View Demo</span>
                                    </a>
                                </div>
                                <div class="demo-item-content">
                                    <h4><a href="index-2.html">Home Demo 02</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 col-sm-6">
                            <div class="demo-item mb-40">
                                <div class="demo-item-img">
                                    <a href="index-3.html">
                                        <img src="assets/images/view-demo/h-3.jpg" alt="demo-img">
                                        <span>View Demo</span>
                                    </a>
                                </div>
                                <div class="demo-item-content">
                                    <h4><a href="index-3.html">Home Demo 03</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 col-sm-6">
                            <div class="demo-item mb-40">
                                <div class="demo-item-img">
                                    <a href="index-4.html">
                                        <img src="assets/images/view-demo/h-4.jpg" alt="demo-img">
                                        <span>View Demo</span>
                                    </a>
                                </div>
                                <div class="demo-item-content">
                                    <h4><a href="index-4.html">Home Demo 04</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 col-sm-6">
                            <div class="demo-item mb-40">
                                <div class="demo-item-img">
                                    <a href="index-5.html">
                                        <img src="assets/images/view-demo/h-5.jpg" alt="demo-img">
                                        <span>View Demo</span>
                                    </a>
                                </div>
                                <div class="demo-item-content">
                                    <h4><a href="index-5.html">Home Demo 05</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 col-sm-6">
                            <div class="demo-item mb-40">
                                <div class="demo-item-img">
                                    <a href="index-6.html">
                                        <img src="assets/images/view-demo/h-6.jpg" alt="demo-img">
                                        <span>View Demo</span>
                                    </a>
                                </div>
                                <div class="demo-item-content">
                                    <h4><a href="index-6.html">Home Demo 06</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 col-sm-6">
                            <div class="demo-item mb-40">
                                <div class="demo-item-img">
                                    <a href="index-7.html">
                                        <img src="assets/images/view-demo/h-7.jpg" alt="demo-img">
                                        <span>View Demo</span>
                                    </a>
                                </div>
                                <div class="demo-item-content">
                                    <h4><a href="index-7.html">Home Demo 07</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 col-sm-6">
                            <div class="demo-item mb-40">
                                <div class="demo-item-img">
                                    <a href="index-8.html">
                                        <img src="assets/images/view-demo/h-8.jpg" alt="demo-img">
                                        <span>View Demo</span>
                                    </a>
                                </div>
                                <div class="demo-item-content">
                                    <h4><a href="index-8.html">Home Demo 08</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 col-sm-6">
                            <div class="demo-item mb-40">
                                <div class="demo-item-img">
                                    <a href="index-9.html">
                                        <img src="assets/images/view-demo/h-9.jpg" alt="demo-img">
                                        <span>View Demo</span>
                                    </a>
                                </div>
                                <div class="demo-item-content">
                                    <h4><a href="index-9.html">Home Demo 09</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 col-sm-6">
                            <div class="demo-item mb-40">
                                <div class="demo-item-img">
                                    <a href="index-10.html">
                                        <img src="assets/images/view-demo/h-10.jpg" alt="demo-img">
                                        <span>View Demo</span>
                                    </a>
                                </div>
                                <div class="demo-item-content">
                                    <h4><a href="index-10.html">Home Demo 10</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="discover-more-btn">
                        <a href="#">Discover More</a>
                    </div>
                </div>
                <div id="view-demo-2" class="tab-pane">
                    <div class="row">
                        <div class="col-md-6 col-12 col-sm-6">
                            <div class="demo-item mb-40">
                                <div class="demo-item-img">
                                    <a href="index-11.html">
                                        <img src="assets/images/view-demo/h-11.jpg" alt="demo-img">
                                        <span>View Demo</span>
                                    </a>
                                </div>
                                <div class="demo-item-content">
                                    <h4><a href="index-11.html">Home Demo 11</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 col-sm-6">
                            <div class="demo-item mb-40">
                                <div class="demo-item-img">
                                    <a href="index-12.html">
                                        <img src="assets/images/view-demo/h-12.jpg" alt="demo-img">
                                        <span>View Demo</span>
                                    </a>
                                </div>
                                <div class="demo-item-content">
                                    <h4><a href="index-12.html">Home Demo 12</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 col-sm-6">
                            <div class="demo-item mb-40">
                                <div class="demo-item-img">
                                    <a href="index-13.html">
                                        <img src="assets/images/view-demo/h-13.jpg" alt="demo-img">
                                        <span>View Demo</span>
                                    </a>
                                </div>
                                <div class="demo-item-content">
                                    <h4><a href="index-13.html">Home Demo 13</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 col-sm-6">
                            <div class="demo-item mb-40">
                                <div class="demo-item-img">
                                    <a href="index-14.html">
                                        <img src="assets/images/view-demo/h-14.jpg" alt="demo-img">
                                        <span>View Demo</span>
                                    </a>
                                </div>
                                <div class="demo-item-content">
                                    <h4><a href="index-14.html">Home Demo 14</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 col-sm-6">
                            <div class="demo-item mb-40">
                                <div class="demo-item-img">
                                    <a href="index-15.html">
                                        <img src="assets/images/view-demo/h-15.jpg" alt="demo-img">
                                        <span>View Demo</span>
                                    </a>
                                </div>
                                <div class="demo-item-content">
                                    <h4><a href="index-15.html">Home Demo 15</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 col-sm-6">
                            <div class="demo-item mb-40">
                                <div class="demo-item-img">
                                    <a href="index-16.html">
                                        <img src="assets/images/view-demo/h-16.jpg" alt="demo-img">
                                        <span>View Demo</span>
                                    </a>
                                </div>
                                <div class="demo-item-content">
                                    <h4><a href="index-16.html">Home Demo 16</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 col-sm-6">
                            <div class="demo-item mb-40">
                                <div class="demo-item-img">
                                    <a href="index-17.html">
                                        <img src="assets/images/view-demo/h-17.jpg" alt="demo-img">
                                        <span>View Demo</span>
                                    </a>
                                </div>
                                <div class="demo-item-content">
                                    <h4><a href="index-17.html">Home Demo 17</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 col-sm-6">
                            <div class="demo-item mb-40">
                                <div class="demo-item-img">
                                    <a href="index-18.html">
                                        <img src="assets/images/view-demo/h-18.jpg" alt="demo-img">
                                        <span>View Demo</span>
                                    </a>
                                </div>
                                <div class="demo-item-content">
                                    <h4><a href="index-18.html">Home Demo 18</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="discover-more-btn">
                        <a href="#">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
