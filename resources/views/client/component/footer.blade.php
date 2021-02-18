{{-- @dd($contact) --}}
<footer class="footer-area section-padding-1 bg-black pt-70">
    <div class="container-fluid">
        <div class="row">
            <div class="footer-column footer-width-32">
                <div class="footer-widget mb-40">
                    <div class="footer-about">
                        <div class="footer-logo">
                            <a href="index.html"><img src="{{asset('clients/images/logo/logo-white.png')}}" alt="logo"></a>
                        </div>
                        <div class="footer-info">
                            <ul>
                                <li><a href="#">{{$contact->email}}</a></li>
                                <li>{{$contact->phone}}</li>
                                <li>{{$contact->address}}</li>
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
                            <li><a href="wishlist.html">Wishlist</a></li>
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
<!-- Modal end -->
</div>

<!-- JS
============================================ -->

<!-- Modernizer JS -->
<script src="{{asset('clients/js/vendor/modernizr-3.6.0.min.js')}}"></script>
<!-- Modernizer JS -->
<script src="{{asset('clients/js/vendor/jquery-3.3.1.min.js')}}"></script>
<!-- Popper JS -->
<script src="{{asset('clients/js/vendor/popper.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('clients/js/vendor/bootstrap.min.js')}}"></script>
<!-- Revolution Slider JS -->
<script src="{{asset('clients/js/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('clients/js/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('clients/js/revolution/revolution-active.js')}}"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="{{asset('clients/js/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('clients/js/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('clients/js/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('clients/js/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('clients/js/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('clients/js/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('clients/js/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('clients/js/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('clients/js/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<!-- Others JS -->
<script src="{{asset('clients/js/plugins/instafeed.js')}}"></script>
<script src="{{asset('clients/js/plugins/jquery-ui.js')}}"></script>
<script src="{{asset('clients/js/plugins/jquery-ui-touch-punch.js')}}"></script>
<script src="{{asset('clients/js/plugins/magnific-popup.js')}}"></script>
<script src="{{asset('clients/js/plugins/owl-carousel.js')}}"></script>
<script src="{{asset('clients/js/plugins/slick.js')}}"></script>
<script src="{{asset('clients/js/plugins/parallax.js')}}"></script>
<script src="{{asset('clients/js/plugins/paraxify.js')}}"></script>
<script src="{{asset('clients/js/plugins/countdown.js')}}"></script>
<script src="{{asset('clients/js/plugins/scrollup.js')}}"></script>
<script src="{{asset('clients/js/plugins/images-loaded.js')}}"></script>
<script src="{{asset('clients/js/plugins/isotope.js')}}"></script>
<script src="{{asset('clients/js/plugins/easyzoom.js')}}"></script>
<script src="{{asset('clients/js/plugins/sticky-sidebar.js')}}"></script>
<script src="{{asset('clients/js/plugins/tilt.js')}}"></script>
<script src="{{asset('clients/js/plugins/select2.min.js')}}"></script>
<script src="{{asset('clients/js/plugins/wow.js')}}"></script>
<!-- Main JS -->
<script src="{{asset('clients/js/main.js')}}"></script>

</body>


<!-- Mirrored from demo.hasthemes.com/payna-preview/payna/shop-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Nov 2020 08:23:58 GMT -->
</html>
