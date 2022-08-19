<!DOCTYPE HTML>
<html lang="en">


<!-- Mirrored from wp.alithemes.com/html/evara/evara-backend/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Aug 2021 15:32:35 GMT -->
<head>
    <meta charset="utf-8">
    <title>
        @yield('title')
    </title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">


    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('admin/assets/imgs/theme/favicon.svg')}}">
    <!-- Template CSS -->
    <link href="{{asset('admin/assets/css/main.css')}}" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="screen-overlay"></div>
<aside class="navbar-aside" id="offcanvas_aside">
    <div class="aside-top">
        <a href="index.html" class="brand-wrap">
            <img src="{{asset('admin/assets/imgs/logo/logo.png')}}" class="logo">
        </a>
        <div>
            <button class="btn btn-icon btn-aside-minimize">
                <i class="text-muted material-icons md-menu_open"></i>
            </button>
        </div>
    </div>
    <nav>
        <ul class="menu-aside">
            <li class="menu-item">
                <a class="menu-link" href="{{route('dashboard')}}"> <i class="icon material-icons md-home"></i>
                    <span class="text">
                        {{trans('translations.dashboard')}}
                    </span>
                </a>
            </li>
            <li class="menu-item has-submenu">
                <a class="menu-link" href="#">
                    <i class="icon material-icons md-add_box"></i>
                    <span class="text">
                        {{trans('translations.admin.admin_app.add_product')}}

                    </span>
                </a>
                <div class="submenu">
                    <a href="#">
                        {{trans('translations.admin.admin_app.add_category')}}

                    </a>
                    <a href="#">
                        {{trans('translations.admin.admin_app.add_sub_category')}}

                    </a>
                    <a href="#">
                        {{trans('translations.admin.admin_app.add_product')}}
                    </a>
                    <a href="#">
                        Add product 4
                    </a>
                </div>
            </li>



            <li class="menu-item has-submenu">
                <a class="menu-link" href="#">
                    <i class="icon material-icons md-shopping_bag"></i>
                    <span class="text">
                        {{trans('translations.admin.admin_app.product')}}
                    </span>
                </a>
                <div class="submenu">
                    <a href="#">
                        {{trans('translations.admin.admin_app.product_list_view')}}
                    </a>
                    <a href="#">
                        {{trans('translations.admin.admin_app.product_grid_view')}}

                    </a>

                </div>
            </li>

            <li class="menu-item has-submenu">
{{--                <a class="menu-link" href="page-orders-1.html"> <i class="icon material-icons md-shopping_cart"></i>--}}
{{--                    <span class="text">Orders</span>--}}
{{--                </a>--}}
{{--                <div class="submenu">--}}
{{--                    <a href="page-orders-1.html">Order list 1</a>--}}
{{--                    <a href="page-orders-2.html">Order list 2</a>--}}
{{--                    <a href="page-orders-detail.html">Order detail</a>--}}
{{--                </div>--}}
{{--            </li>--}}

{{--            <li class="menu-item has-submenu">--}}
{{--                <a class="menu-link" href="page-sellers-cards.html"> <i class="icon material-icons md-store"></i>--}}
{{--                    <span class="text">Sellers</span>--}}
{{--                </a>--}}
{{--                <div class="submenu">--}}
{{--                    <a href="page-sellers-cards.html">Sellers cards</a>--}}
{{--                    <a href="page-sellers-list.html">Sellers list</a>--}}
{{--                    <a href="page-seller-detail.html">Seller profile</a>--}}
{{--                </div>--}}
{{--            </li>--}}

{{--            <li class="menu-item has-submenu">--}}
{{--                <a class="menu-link" href="page-transactions-1.html"> <i class="icon material-icons md-monetization_on"></i>--}}
{{--                    <span class="text">Transactions</span>--}}
{{--                </a>--}}
{{--                <div class="submenu">--}}
{{--                    <a href="page-transactions-1.html">Transaction 1</a>--}}
{{--                    <a href="page-transactions-2.html">Transaction 2</a>--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            <li class="menu-item has-submenu">--}}
{{--                <a class="menu-link" href="#"> <i class="icon material-icons md-person"></i>--}}
{{--                    <span class="text">Account</span>--}}
{{--                </a>--}}
{{--                <div class="submenu">--}}
{{--                    <a href="page-account-login.html">User login</a>--}}
{{--                    <a href="page-account-register.html">User registration</a>--}}
{{--                    <a href="page-error-404.html">Error 404</a>--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            <li class="menu-item">--}}
{{--                <a class="menu-link" href="page-reviews.html"> <i class="icon material-icons md-comment"></i>--}}
{{--                    <span class="text">Reviews</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="menu-item">--}}
{{--                <a class="menu-link" href="page-brands.html"> <i class="icon material-icons md-stars"></i>--}}
{{--                    <span class="text">Brands</span> </a>--}}
{{--            </li>--}}
{{--            <li class="menu-item">--}}
{{--                <a class="menu-link" disabled href="#"> <i class="icon material-icons md-pie_chart"></i>--}}
{{--                    <span class="text">Statistics</span>--}}
{{--                </a>--}}
            </li>
        </ul>
        <hr>
{{--        <ul class="menu-aside">--}}
{{--            <li class="menu-item has-submenu">--}}
{{--                <a class="menu-link" href="#"> <i class="icon material-icons md-settings"></i>--}}
{{--                    <span class="text">Settings</span>--}}
{{--                </a>--}}
{{--                <div class="submenu">--}}
{{--                    <a href="page-settings-1.html">Setting sample 1</a>--}}
{{--                    <a href="page-settings-2.html">Setting sample 2</a>--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            <li class="menu-item">--}}
{{--                <a class="menu-link" href="page-blank.html"> <i class="icon material-icons md-local_offer"></i>--}}
{{--                    <span class="text"> Starter page </span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--        </ul>--}}
        <br>
        <br>
    </nav>
</aside>

@yield('content')

<footer class="main-footer font-xs">
    <div class="row pb-30 pt-15">
        <div class="col-sm-6">
            <script>
                document.write(new Date().getFullYear())
            </script>

        </div>
        <div class="col-sm-6">
            <div class="text-sm-end">
                {{trans('translations.admin.admin_app.footer')}}

            </div>
        </div>
    </div>
</footer>

<script src="{{asset('admin/assets/js/vendors/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('admin/assets/js/vendors/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('admin/assets/js/vendors/select2.min.js')}}"></script>
<script src="{{asset('admin/assets/js/vendors/perfect-scrollbar.js')}}"></script>
<script src="{{asset('admin/assets/js/vendors/jquery.fullscreen.min.js')}}"></script>
<script src="{{asset('admin/assets/js/vendors/chart.js')}}"></script>
<!-- Main Script -->
<script src="{{asset('admin/assets/js/main.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/assets/js/custom-chart.js')}}" type="text/javascript"></script>

</body>


<!-- Mirrored from wp.alithemes.com/html/evara/evara-backend/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Aug 2021 15:32:57 GMT -->
</html>