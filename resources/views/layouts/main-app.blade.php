<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> @yield('title')</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset("assets/images/favicon.png")}}">

    <!-- All CSS is here
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href= "{{asset('assets/css/vendor/bootstrap.min.css')}}">


    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/vendor/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/dlicon.css')}}">
    <!-- Others CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/owl-carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/jarallax.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/easyzoom.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/fullpage.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">




    <!-- Icon Font CSS ")}}-->
    <link rel="stylesheet" href="{{asset("assets/css/vendor/font-awesome.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/vendor/dlicon.css")}}">
    <!-- Others CSS -->
    <link rel="stylesheet" href="{{asset("assets/css/plugins/owl-carousel.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/plugins/slick.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/plugins/magnific-popup.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/plugins/jarallax.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/plugins/easyzoom.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/plugins/animate.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/plugins/fullpage.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/plugins/jquery-ui.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/plugins/select2.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/style.css")}}">

</head>

<body>
@if(session('success'))
    <div class="row" id="alert_success">
        <div class="col-lg-12">
            <button type="button" class="close" onclick="close_box()" data-dismiss="alert" aria-label="Close" style="float: right">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="row" style="background: #4299e1 ;color: black">
                <h2 class="text-center">{{session('success')}}</h2>
            </div>
        </div>
    </div>

@endif
<div class="main-wrapper">
    <header class="header-area section-padding-1">
        <div class="header-top bg-gray pt-10 pb-10">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-4">
                        <div class="social-icon-style-4">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <!--             <a href="#"><i class="fa fa-dribbble"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a> -->
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <!--                                 <a href="#"><i class="fa fa-pinterest"></i></a> -->
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="header-offter text-center">
                            <a href="#">New Collection Of This Week <span> Check it now</span></a>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="header-contact-info">
                            <ul>
                                <li><i class="dlicon ui-1_email-83"></i> fashionfeast@gmail.com</li>
                                <li>
                                    <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                    <span>0322-4616687</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </header>


    <header class="header-area section-padding-1">
        <div class="header-bottom">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-3">
                        <div class="logo logo-width">
                            <a href="{{url('/')}}">
                                <img src="{{asset('assets/images/landing_page/logo.png')}}" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-8 d-flex justify-content-center position-static">
                        <div class="main-menu menu-lh-1 main-menu-light-black menu-padding-li-none menu-padding-a main-menu-border-none">
                            <nav>
                                <ul>
                                    <li class="position-static"><a class="active" href="{{url('/')}}">Home</a>

                                    </li>
                                    <li><a href="#">Pages</a>
                                        <ul class="sub-menu-width">
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="contact-us.html">Contact Page</a></li>
                                            <li><a href="404.html">404 Page</a></li>
                                            <li><a href="comming-soon.html">Comming Soon 01</a></li>
                                            <li><a href="comming-soon-2.html">Comming Soon 02</a></li>
                                            <li><a href="faq.html">FAQ</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop-fullwide.html">Shop</a>
                                        <ul class="mega-menu-style-2 mega-menu-width2 menu-negative-mrg1">
                                            <li class="mega-menu-sub-width20"><a class="menu-title" href="#">Shop Layout</a>
                                                <ul>
                                                    <li><a href="shop-fullwide.html">Shop Fullwidth</a></li>
                                                    <li><a href="shop-sidebar.html">Shop Sidebar</a></li>
                                                    <li><a href="shop-metro.html">Shop Metro Layout</a></li>
                                                    <li><a href="shop-3-col.html">Shop 03 Columns</a></li>
                                                    <li><a href="shop-2-col.html">Shop 02 Columns</a></li>
                                                    <li><a href="shop-collection-1.html">Shop Collection 01</a></li>
                                                    <li><a href="shop-collection-2.html">Shop Collection 02</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-sub-width22"><a class="menu-title" href="#">Product Layout</a>
                                                <ul>
                                                    <li><a href="product-details.html">Single 01</a></li>
                                                    <li><a href="product-details-2.html">Single 02</a></li>
                                                    <li><a href="product-details-group.html">Grouped</a></li>
                                                    <li><a href="product-details-sticky.html">Sticky Info</a></li>
                                                    <li><a href="product-details-configurable.html">Configurable</a></li>
                                                    <li><a href="product-details-thumbnail.html">Thumbnail</a></li>
                                                    <li><a href="product-details-video.html">Video</a></li>
                                                    <li><a href="product-details-affiliate.html">Affiliate</a></li>
                                                    <li><a href="product-details-sidebar.html">Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-sub-width20"><a class="menu-title" href="#">Shop Pages</a>
                                                <ul>
                                                    <li><a href="my-account.html">My Account</a></li>
                                                    <li><a href="checkout.html">Check Out</a></li>
                                                    <li><a href="cart.html">Shopping Cart</a></li>
                                                    <li><a href="wishlist.html">Wishlist</a></li>
                                                    <li><a href="order-tracking.html">Order Tracking</a></li>
                                                    <li><a href="compare.html">Compare</a></li>
                                                    <li><a href="login-register.html">login / register</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-sub-width37">
                                                <div class="banner-menu-content-wrap default-overlay">
                                                    <a href="product-details.html"><img src="assets/images/menu/banner-header.jpg" alt="banner"></a>
                                                    <div class="banner-menu-content">
                                                        <h2>Bikini <br>Collections</h2>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="shop-collection-1.html">Collections </a>
                                        <ul class="sub-menu-width">
                                            <li><a href="shop-collection-1.html">Shop Collection 01</a></li>
                                            <li><a href="shop-collection-2.html">Shop Collection 02</a></li>
                                            <li><a href="shop-metro.html">Shop Metro Layout</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog.html">Blog</a>
                                        <ul class="sub-menu-width">
                                            <li><a href="blog.html">Blog Style 01</a></li>
                                            <li><a href="blog-2.html">Blog Style 02</a></li>
                                            <li><a href="blog-3.html">Blog Style 03</a></li>
                                            <li><a href="#">Single Posts <i class="fa fa-angle-right"></i></a>
                                                <ul class="lavel-menu">
                                                    <li><a href="blog-details.html">Single Post Style 01</a></li>
                                                    <li><a href="blog-details-2.html">Single Post Style 02</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="shop-instagram.html">Instagram Shop </a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    @if(Auth::check())
                    @else
                    <div class="col-xl-3 col-lg-2">
                        <div class="header-right-wrap header-right-flex">
                            <div class="same-style cart-wrap">
                                <a href="{{route('login')}}" class="cart-active"> Login </a>

                            </div>

                            <div class="same-style header-wishlist">
                                <a href="{{route('register')}}"> Register </a>

                            </div>

                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </header>
    @yield('content')

    {{--    Footer--}}
    <footer class="footer-area section-padding-1 bg-black-3">
        <div class="container-fluid">
            <div class="footer-top pt-100">
                <div class="row">
                    <div class="footer-column footer-width-24-2">
                        <div class="footer-widget footer-info-list-2 footer-contect logo-width footer-info-font-inc mb-30">
                            <a href="index.html">
                                <img src="{{asset('assets/images/landing_page/footer_logo.png')}}" alt="logo">
                            </a>
                            <ul>
                                <li><i class="dlicon ui-2_time-clock"></i> 24/7 Availibility</li>
                                <li><i class="dlicon ui-1_email-83"></i> fashionfeast@gmail.com</li>
                                <li><i class="fa fa-whatsapp"></i> 0322-4616687</li>
                                <li><i class="fa fa-facebook"></i> Fashion Feast </li>
                                <li><i class="fa fa-instagram"></i> Fashion Feast</li>
                                <li><i class="dlicon ui-1_home-simple"></i> All Over Pakistan</li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-column footer-width-13 mt-120">
                        <div class="footer-widget footer-info-list mb-30 fi-sky-color">
                            <h3 class="footer-title ft-letter-space-inc">Company Link</h3>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Help Center</a></li>
                                <li><a href="#">Our Team</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">The Blog</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-column footer-width-27">
                        <div class="instagram-feed-thumb">
                            <div id="instafeed" data-limit="6" class="instagram-wrap-3"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-botoom">
                <div class="row">
                    <div class="col-12">
                        <div class="copyright-2 copyright-sky text-center">
                            <p>© 2021 <a href="https://hasthemes.com/">Toro.</a> All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="dlicon ui-1_simple-remove" aria-hidden="true"></span></button>
                </div>
                <div class="modal-body">
                    <div class="row no-gutters">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="quickview-slider-active owl-carousel">
                                <a class="img-popup" href="assets/images/product/quickview-1.jpg"><img src="assets/images/product/quickview-1.jpg" alt=""><span>sold uot</span></a>
                                <a class="img-popup" href="assets/images/product/quickview-2.jpg"><img src="assets/images/product/quickview-2.jpg" alt=""><span>sold uot</span></a>
                            </div>
                            <!-- Thumbnail Large Image End -->
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="product-details-content">
                                <div class="pro-dec-next-prev">
                                    <a class="prev" href="#"><i class="dlicon arrows-1_tail-left"></i></a>
                                    <a class="next" href="#"><i class="dlicon arrows-1_tail-right"></i></a>
                                </div>
                                <h2 class="uppercase">Quilted parka with hood</h2>
                                <h3>$49.00</h3>
                                <div class="product-details-peragraph">
                                    <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam libero ac turpis pharetra, in vehicula scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu.</p>
                                </div>
                                <div class="product-details-action-wrap">
                                    <div class="product-details-quality">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                        </div>
                                    </div>
                                    <div class="product-details-cart">
                                        <a title="Add to cart" href="#">Add to cart</a>
                                    </div>
                                    <div class="product-details-wishlist">
                                        <a title="Add to wishlist" href="#"><i class="fa fa-heart"></i></a>
                                    </div>
                                    <div class="product-details-compare">
                                        <a title="Add to compare" href="#"><i class="dlicon arrows-4_compare"></i></a>
                                    </div>
                                </div>
                                <div class="product-details-info">
                                    <a href="#"><i class="dlicon location_pin"></i>Store availability</a>
                                    <a href="#"><i class="dlicon envir_car"></i>Delivery and return</a>
                                    <a href="#"><i class="dlicon design_measure-17"></i>Size Guide</a>
                                </div>
                                <div class="product-details-meta">
                                    <span>SKU: REF. LA-140</span>
                                    <span>Categories: <a href="#">Fashions</a>, <a href="#">Main 01</a>, <a href="#">Main 02</a></span>
                                    <span>Tags: <a href="#">Blazer</a>, <a href="#">chair</a>, <a href="#">Coat</a>, <a href="#">dress</a>, <a href="#">light</a>, <a href="#">Living</a>, <a href="#">Main 01</a></span>
                                </div>
                                <div class="social-icon-style-3">
                                    <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                                    <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                    <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                    <a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a>
                                    <a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->
</div>

<!-- All JS is here
============================================ -->

<!-- Modernizer JS -->
<script src="{{asset("assets/js/vendor/modernizr-3.11.7.min.js")}}></script>
<!-- jquery -->
<script src="{{asset("assets/js/vendor/jquery-v3.6.0.min.js")}}></script>
<!-- Popper JS -->
<script src="{{asset("assets/js/vendor/popper.js")}}></script>
<!-- Bootstrap JS -->
<script src="{{asset("assets/js/vendor/bootstrap.min.js")}}></script>
<script src="{{asset("assets/js/plugins/owl-carousel.js")}}></script>
<script src="{{asset("assets/js/plugins/slick.js")}}></script>
<script src="{{asset("assets/js/plugins/jarallax.min.js")}}></script>
<script src="{{asset("assets/js/plugins/countdown.js")}}></script>
<script src="{{asset("assets/js/plugins/magnific-popup.js")}}></script>
<script src="{{asset("assets/js/plugins/instafeed.js")}}></script>
<script src="{{asset("assets/js/plugins/tilt.js")}}></script>
<script src="{{asset("assets/js/plugins/images-loaded.js")}}></script>
<script src="{{asset("assets/js/plugins/isotope.js")}}></script>
<script src="{{asset("assets/js/plugins/scrolloverflow-fullpage.js")}}></script>
<script src="{{asset("assets/js/plugins/fullpage.js")}}></script>
<script src="{{asset("assets/js/plugins/jquery-ui.js")}}></script>
<script src="{{asset("assets/js/plugins/jquery-ui-touch-punch.js")}}></script>
<script src="{{asset("assets/js/plugins/easyzoom.js")}}></script>
<script src="{{asset("assets/js/plugins/resizesensor.js")}}></script>
<script src="{{asset("assets/js/plugins/sticky-sidebar.js")}}></script>
<script src="{{asset("assets/js/plugins/scrollup.js")}}></script>
<script src="{{asset("assets/js/plugins/select2.min.js")}}></script>
<script src="{{asset("assets/js/plugins/cookie.js")}}></script>
<script src="{{asset("assets/js/plugins/bpopup.js")}}></script>
<script src="{{asset("assets/js/plugins/wow.js")}}></script>
<script src="{{asset("assets/js/plugins/ajax-mail.js")}}></script>
<!-- Main JS -->
<script src="assets/js/main.js"></script>

<script>
    function close_box()
    {
        $('#alert_success').hide();
    }
</script>

</body>

</html>
