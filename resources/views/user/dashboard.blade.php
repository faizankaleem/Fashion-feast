@extends('layouts.main-app')

@section('title',trans('translations.fashion_feast'))

@section('content')
    {{--    main picture of bride--}}
    <div class="slider-area">
        <div class="container-fluid p-0">
            <div class="main-slider-active-3 owl-carousel slider-dot-position-3 slider-dot-style-2">
                <div class="landing-page-main-pic-hight align-items-center custom-d-flex landing-page-main-pic" style="background-image:url({{asset("assets/images/landing_page/bridal.jpg")}});">
                </div>

            </div>
        </div>
    </div>
    <div class="banner-area section-padding-1 banner-area-hm11 pt-130 pb-100">
        <div class="container-fluid padding-70-row-col">
            <div class="section-title-12 text-center">
                <h2>Fashion Feast</h2>
                <h3>Your Trusted Online Store</h3>
                <h4>Collections of stiched and unstiched collections of summer 2022</h4>
            </div>



            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="banner-wrap default-overlay-2 banner-zoom mb-30">
                        <div class="banner-img">
                            {{--                            <a href="{{route('user.product_detail/3')}}"><img src="{{asset('assets/images/landing_page/1.png')}}" alt="banner"></a>--}}
                            <a href="{{url('product_detail/3')}}"><img src="{{asset('assets/images/landing_page/1.png')}}" alt="banner"></a>

                        </div>
                        <div class="banner-content-11 text-center">
                            <h3><a href="#">Beautiful 3 piecs </a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="banner-wrap default-overlay-2 banner-zoom mb-30">
                        <div class="banner-img">
                            <a href="#"><img src="{{asset('assets/images/landing_page/6.jpg')}}" alt="banner"></a>
                        </div>
                        <div class="banner-content-11 text-center">
                            <h3><a href="product-details.html">Scandinavian Style</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="banner-wrap default-overlay-2 banner-zoom mb-30">
                        <div class="banner-img">
                            <a href="#"><img src="{{asset('assets/images/landing_page/3.png')}}" alt="banner"></a>
                        </div>
                        <div class="banner-content-11 text-center">
                            <h3><a href="product-details.html">Beautiful Bedroom</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="product-area section-padding-1 pb-125">
        <div class="container-fluid">
            <div class="section-title-12 text-center mb-65">
                <h2>New arrival</h2>
                <h4>New collection of lawn of summer 2022</h4>
            </div>
            <div class="row">
                <div class="custom-col-5">
                    <div class="product-wrap mb-50">
                        <div class="product-img default-overlay mb-25">
                            {{--                            <a href="{{route('user.product_detail/3')}}">--}}
                            <a href="{{url('product_detail/3')}}">
                                <img class="default-img" src="{{asset('assets/images/landing_page/7.png')}}" alt="">
                            </a>
                            <div class="product-action product-action-sky product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                            <h3><a href="product-details.html">Dapibus ac mi shoes</a></h3>
                            <div class="product-price product-price-red">
                                <span class="new-price">$42.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="custom-col-5">
                    <div class="product-wrap mb-50">
                        <div class="product-img default-overlay mb-25">
                            <a href="#">
                                <img class="default-img" src="{{asset('assets/images/landing_page/8.png')}}" alt="">
                                {{--                                <span class="badge-black-before badge-right-0 badge-top-0 badge-pr badge-pt">sale!</span>--}}
                            </a>
                            <div class="product-action product-action-sky product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                            <h3><a href="product-details.html">Dapibus ac mi shoes</a></h3>
                            <div class="product-price product-price-red">
                                <span class="old-price">$49.00</span>
                                <span class="new-price">$42.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="custom-col-5">
                    <div class="product-wrap mb-50">
                        <div class="product-img default-overlay mb-25">
                            <a href="#">
                                <img class="default-img" src="{{asset('assets/images/landing_page/9.png')}}" alt="">
                            </a>
                            <div class="product-action product-action-sky product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                            <h3><a href="product-details.html">Dapibus ac mi shoes</a></h3>
                            <div class="product-price product-price-red">
                                <span class="new-price">$42.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="custom-col-5">
                    <div class="product-wrap mb-50">
                        <div class="product-img default-overlay mb-25">
                            <a href="#">
                                <img class="default-img" src="{{asset('assets/images/landing_page/10.png')}}" alt="">
                                {{--                                <span class="badge-red badge-right-20 badge-top-20 badge-width-height-2 badge-border-radius-100">sale!</span>--}}
                            </a>
                            <div class="product-action product-action-sky product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                            <h3><a href="product-details.html">Dapibus ac mi shoes</a></h3>
                            <div class="product-price product-price-red">
                                <span class="new-price">$42.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="custom-col-5">
                    <div class="product-wrap mb-50">
                        <div class="product-img default-overlay mb-25">
                            <a href="#">
                                <img class="default-img" src="{{asset('assets/images/landing_page/11.png')}}" alt="">
                            </a>
                            <div class="product-action product-action-sky product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                            <h3><a href="product-details.html">Dapibus ac mi shoes</a></h3>
                            <div class="product-price product-price-red">
                                <span class="new-price">$42.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="custom-col-5">
                    <div class="product-wrap mb-50">
                        <div class="product-img default-overlay mb-25">
                            <a href="#">
                                <img class="default-img" src="{{asset('assets/images/landing_page/12.png')}}" alt="">
                                {{--                                <span class="badge-black-before badge-right-0 badge-top-0 badge-pr badge-pt">-7.7%</span>--}}
                            </a>
                            <div class="product-action product-action-sky product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                            <h3><a href="product-details.html">Dapibus ac mi shoes</a></h3>
                            <div class="product-price product-price-red">
                                <span class="new-price">$42.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="custom-col-5">
                    <div class="product-wrap mb-50">
                        <div class="product-img default-overlay mb-25">
                            <a href="#">
                                <img class="default-img" src="{{asset('assets/images/landing_page/13.png')}}" alt="">
                            </a>
                            <div class="product-action product-action-sky product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                            <h3><a href="product-details.html">Mid – Augue et eleifend tincidunt</a></h3>
                            <div class="product-price product-price-red">
                                <span class="new-price">$42.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="custom-col-5">
                    <div class="product-wrap mb-50">
                        <div class="product-img default-overlay mb-25">
                            <a href="#">
                                <img class="default-img" src="{{asset('assets/images/landing_page/14.png')}}" alt="">
                            </a>
                            <div class="product-action product-action-sky product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                            <h3><a href="product-details.html">Home sofa ante a elit</a></h3>
                            <div class="product-price product-price-red">
                                <span class="new-price">$42.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="custom-col-5">
                    <div class="product-wrap mb-50">
                        <div class="product-img default-overlay mb-25">
                            <a href="#">
                                <img class="default-img" src="{{asset('assets/images/landing_page/15.png')}}" alt="">
                            </a>
                            <div class="product-action product-action-sky product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                            <h3><a href="product-details.html">Century sofa auctor iaculis</a></h3>
                            <div class="product-price product-price-red">
                                <span class="new-price">$42.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="custom-col-5">
                    <div class="product-wrap mb-50">
                        <div class="product-img default-overlay mb-25">
                            <a href="#">
                                <img class="default-img" src="{{asset('assets/images/landing_page/16.png')}}" alt="">
                            </a>
                            <div class="product-action product-action-sky product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                            <h3><a href="product-details.html">Mid – Century Sofa</a></h3>
                            <div class="product-price product-price-red">
                                <span class="new-price">$42.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="custom-col-5">
                    <div class="product-wrap mb-50">
                        <div class="product-img default-overlay mb-25">
                            <a href="#">
                                <img class="default-img" src="{{asset('assets/images/landing_page/17.png')}}" alt="">
                            </a>
                            <div class="product-action product-action-sky product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                            <h3><a href="product-details.html">Mid – Century Sofa</a></h3>
                            <div class="product-price product-price-red">
                                <span class="new-price">$42.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="custom-col-5">
                    <div class="product-wrap mb-50">
                        <div class="product-img default-overlay mb-25">
                            <a href="#">
                                <img class="default-img" src="{{asset('assets/images/landing_page/18.png')}}" alt="">
                            </a>
                            <div class="product-action product-action-sky product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                            <h3><a href="product-details.html">Mid – Century Sofa</a></h3>
                            <div class="product-price product-price-red">
                                <span class="new-price">$42.00</span>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="pro-view-all-3 text-center">
                <a href="#">View all product</a>
            </div>
        </div>
    </div>
    <div class=" jarallax parallax-img section-padding-1 pt-130 pb-100" style="background-image:url(assets/images/landing_page/bridal-2.jpg);">
        <div class="container-fluid">
            <div class="section-title-12 title-12-white text-center mb-65">
                <h2>Why Choose Us</h2>
                <p>Class aptent taciti sociosqu ad litora torquent per con</p>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-choose mb-30">
                        <div class="choose-icon">
                            <i class="dlicon shopping_cart"></i>
                        </div>
                        <div class="choose-content">
                            <h3>Freeship Order Over $100</h3>
                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer condimentum sed mi</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-choose mb-30">
                        <div class="choose-icon">
                            <i class="dlicon education_award-55"></i>
                        </div>
                        <div class="choose-content">
                            <h3>Long-term warranty policy</h3>
                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer condimentum sed mi</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-choose mb-30">
                        <div class="choose-icon">
                            <i class="dlicon envir_home"></i>
                        </div>
                        <div class="choose-content">
                            <h3>Environmental friendliness</h3>
                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer condimentum sed mi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--    Yahan per hum nay top trending ka show karana hai --}}
    <div class="product-area section-padding-1 pt-130 pb-125">
        <div class="container-fluid">
            <div class="section-title-12 text-center mb-65">
                <h2>Hot Items Of Summer 2022</h2>
                <h3>The most trending or running items Hot Items</h3>
            </div>
            <div class="row">
                <div class="custom-col-5">
                    <div class="product-wrap mb-50">
                        <div class="product-img default-overlay mb-25">
                            <a href="#">
                                <img class="default-img" src="{{asset('assets/images/landing_page/19.png')}}" alt="">
                            </a>
                            <div class="product-action product-action-sky product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                            <h3><a href="product-details.html">Dapibus ac mi shoes</a></h3>
                            <div class="product-price product-price-red">
                                <span class="new-price">$47.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="custom-col-5">
                    <div class="product-wrap mb-50">
                        <div class="product-img default-overlay mb-25">
                            <a href="#">
                                <img class="default-img" src="{{asset('assets/images/landing_page/20.png')}}" alt="">
                                {{--                                <span class="badge-black-before badge-right-0 badge-top-0 badge-pr badge-pt">sale!</span>--}}
                            </a>
                            <div class="product-action product-action-sky product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                            <h3><a href="product-details.html">Dapibus ac mi shoes</a></h3>
                            <div class="product-price product-price-red">
                                <span class="old-price">$49.00</span>
                                <span class="new-price">$42.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="custom-col-5">
                    <div class="product-wrap mb-50">
                        <div class="product-img default-overlay mb-25">
                            <a href="#">
                                <img class="default-img" src="{{asset('assets/images/landing_page/37.png')}}" alt="">
                            </a>
                            <div class="product-action product-action-sky product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                            <h3><a href="product-details.html">Dapibus ac mi shoes</a></h3>
                            <div class="product-price product-price-red">
                                <span class="new-price">$42.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="custom-col-5">
                    <div class="product-wrap mb-50">
                        <div class="product-img default-overlay mb-25">
                            <a href="#">
                                <img class="default-img" src="{{asset('assets/images/landing_page/22.png')}}" alt="">
                                {{--                                <span class="badge-red badge-right-20 badge-top-20 badge-width-height-2 badge-border-radius-100">sale!</span>--}}
                            </a>
                            <div class="product-action product-action-sky product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                            <h3><a href="product-details.html">Dapibus ac mi shoes</a></h3>
                            <div class="product-price product-price-red">
                                <span class="new-price">$42.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="custom-col-5">
                    <div class="product-wrap mb-50">
                        <div class="product-img default-overlay mb-25">
                            <a href="#">
                                <img class="default-img" src="{{asset('assets/images/landing_page/23.png')}}" alt="">
                            </a>
                            <div class="product-action product-action-sky product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                            <h3><a href="product-details.html">Dapibus ac mi shoes</a></h3>
                            <div class="product-price product-price-red">
                                <span class="new-price">$42.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="custom-col-5">
                    <div class="product-wrap mb-50">
                        <div class="product-img default-overlay mb-25">
                            <a href="#">
                                <img class="default-img" src="{{asset('assets/images/landing_page/31.png')}}" alt="">
                                <span class="badge-black-before badge-right-0 badge-top-0 badge-pr badge-pt">-7.7%</span>
                            </a>
                            <div class="product-action product-action-sky product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                            <h3><a href="product-details.html">Dapibus ac mi shoes</a></h3>
                            <div class="product-price product-price-red">
                                <span class="new-price">$42.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="custom-col-5">
                    <div class="product-wrap mb-50">
                        <div class="product-img default-overlay mb-25">
                            <a href="#">
                                <img class="default-img" src="{{asset('assets/images/landing_page/23.png')}}" alt="">
                            </a>
                            <div class="product-action product-action-sky product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                            <h3><a href="product-details.html">Mid – Augue et eleifend tincidunt</a></h3>
                            <div class="product-price product-price-red">
                                <span class="new-price">$42.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="custom-col-5">
                    <div class="product-wrap mb-50">
                        <div class="product-img default-overlay mb-25">
                            <a href="#">
                                <img class="default-img" src="{{asset('assets/images/landing_page/28.png')}}" alt="">
                            </a>
                            <div class="product-action product-action-sky product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                            <h3><a href="product-details.html">Home sofa ante a elit</a></h3>
                            <div class="product-price product-price-red">
                                <span class="new-price">$42.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="custom-col-5">
                    <div class="product-wrap mb-50">
                        <div class="product-img default-overlay mb-25">
                            <a href="#">
                                <img class="default-img" src="{{asset('assets/images/landing_page/29.png')}}" alt="">
                            </a>
                            <div class="product-action product-action-sky product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                            <h3><a href="product-details.html">Century sofa auctor iaculis</a></h3>
                            <div class="product-price product-price-red">
                                <span class="new-price">$42.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="custom-col-5">
                    <div class="product-wrap mb-50">
                        <div class="product-img default-overlay mb-25">
                            <a href="#">
                                <img class="default-img" src="{{asset('assets/images/landing_page/30.png')}}" alt="">
                            </a>
                            <div class="product-action product-action-sky product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                            <h3><a href="product-details.html">Mid – Century Sofa</a></h3>
                            <div class="product-price product-price-red">
                                <span class="new-price">$42.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="custom-col-5">
                    <div class="product-wrap mb-50">
                        <div class="product-img default-overlay mb-25">
                            <a href="#">
                                <img class="default-img" src="{{asset('assets/images/landing_page/41.png')}}" alt="">
                            </a>
                            <div class="product-action product-action-sky product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                            <h3><a href="product-details.html">Mid – Century Sofa</a></h3>
                            <div class="product-price product-price-red">
                                <span class="new-price">$42.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="custom-col-5">
                    <div class="product-wrap mb-50">
                        <div class="product-img default-overlay mb-25">
                            <a href="#">
                                <img class="default-img" src="{{asset('assets/images/landing_page/42.png')}}" alt="">
                            </a>
                            <div class="product-action product-action-sky product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                            <h3><a href="product-details.html">Mid – Century Sofa</a></h3>
                            <div class="product-price product-price-red">
                                <span class="new-price">$42.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pro-view-all-3 text-center">
                <h4><a href="#">View all product</a></h4>
            </div>
        </div>
    </div>


    {{--    mens Collections--}}
    <div class="banner-area" style="margin-top: -100px">
        <div class="banner-slider-active-3 owl-carousel">
            <div class="single-banner-slider bg-img pt-180 pb-180" style="background-image:url(assets/images/landing_page/mens/1.png);">
                <div class="single-banner-slider-wrap">
                    <div class="single-banner-slider-content slider-animated-1">
                        {{--                        <span>Popular Projects</span>--}}
                        <h3 class="slider-animated-1">Mens Collections</h3>
                        <p> <b>New Mens Summer Collection Of 2022</b> </p>
                        <div class="banner-slider-btn">
                            <a href="#">DISCOVER MORE</a>
                        </div>
                    </div>
                </div>
            </div>
            {{--            <div class="single-banner-slider bg-img pt-180 pb-180" style="background-image:url(assets/images/banner/banner-26.jpg);">--}}
            {{--                <div class="single-banner-slider-wrap">--}}
            {{--                    <div class="single-banner-slider-content slider-animated-1">--}}
            {{--                        <span>Popular Projects</span>--}}
            {{--                        <h3>Kitchen Decoration</h3>--}}
            {{--                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer condimentum sed mi</p>--}}
            {{--                        <div class="banner-slider-btn">--}}
            {{--                            <a href="#">DISCOVER</a>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            {{--            <div class="single-banner-slider bg-img pt-180 pb-180" style="background-image:url(assets/images/banner/banner-27.jpg);">--}}
            {{--                <div class="single-banner-slider-wrap">--}}
            {{--                    <div class="single-banner-slider-content slider-animated-1">--}}
            {{--                        <span>Popular Projects</span>--}}
            {{--                        <h3>Beautiful Bathroom</h3>--}}
            {{--                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer condimentum sed mi</p>--}}
            {{--                        <div class="banner-slider-btn">--}}
            {{--                            <a href="#">DISCOVER</a>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
        </div>
    </div>


    <div class= "product-area section-padding-1 pt-130 pb-125" style="margin-top: -80px;">
        <div class="container-fluid">
            <div class="row" style="margin-bottom: 20px">
                <div class ="col-lg-12 text-center">
                    <h2> <b><u>Mens Summer Collection Of 2022</u></b></h2>
                </div>

            </div>

            <div class="row">
                <div class="custom-col-5">
                    <div class="product-wrap mb-50">
                        <div class="product-img default-overlay mb-25">
                            <a href="#">
                                <img class="default-img" src="{{asset('assets/images/landing_page/mens/m1.png')}}" alt="">
                            </a>
                            <div class="product-action product-action-sky product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                            <h3><a href="product-details.html">Dapibus ac mi shoes</a></h3>
                            <div class="product-price product-price-red">
                                <span class="new-price">$47.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="custom-col-5">
                    <div class="product-wrap mb-50">
                        <div class="product-img default-overlay mb-25">
                            <a href="#">
                                <img class="default-img" src="{{asset('assets/images/landing_page/mens/m2.png')}}" alt="">
                                {{--                                <span class="badge-black-before badge-right-0 badge-top-0 badge-pr badge-pt">sale!</span>--}}
                            </a>
                            <div class="product-action product-action-sky product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                            <h3><a href="product-details.html">Dapibus ac mi shoes</a></h3>
                            <div class="product-price product-price-red">
                                <span class="old-price">$49.00</span>
                                <span class="new-price">$42.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="custom-col-5">
                    <div class="product-wrap mb-50">
                        <div class="product-img default-overlay mb-25">
                            <a href="#">
                                <img class="default-img" src="{{asset('assets/images/landing_page/mens/m3.png')}}" alt="">
                            </a>
                            <div class="product-action product-action-sky product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                            <h3><a href="product-details.html">Dapibus ac mi shoes</a></h3>
                            <div class="product-price product-price-red">
                                <span class="new-price">$42.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="custom-col-5">
                    <div class="product-wrap mb-50">
                        <div class="product-img default-overlay mb-25">
                            <a href="#">
                                <img class="default-img" src="{{asset('assets/images/landing_page/mens/m4.png')}}" alt="">
                                {{--                                <span class="badge-red badge-right-20 badge-top-20 badge-width-height-2 badge-border-radius-100">sale!</span>--}}
                            </a>
                            <div class="product-action product-action-sky product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                            <h3><a href="product-details.html">Dapibus ac mi shoes</a></h3>
                            <div class="product-price product-price-red">
                                <span class="new-price">$42.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="custom-col-5">
                    <div class="product-wrap mb-50">
                        <div class="product-img default-overlay mb-25">
                            <a href="#">
                                <img class="default-img" src="{{asset('assets/images/landing_page/mens/m5.png')}}" alt="">
                            </a>
                            <div class="product-action product-action-sky product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                            <h3><a href="product-details.html">Dapibus ac mi shoes</a></h3>
                            <div class="product-price product-price-red">
                                <span class="new-price">$42.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="custom-col-5">
                    <div class="product-wrap mb-50">
                        <div class="product-img default-overlay mb-25">
                            <a href="#">
                                <img class="default-img" src="{{asset('assets/images/landing_page/mens/m6.png')}}" alt="">
                                <span class="badge-black-before badge-right-0 badge-top-0 badge-pr badge-pt">-7.7%</span>
                            </a>
                            <div class="product-action product-action-sky product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                            <h3><a href="product-details.html">Dapibus ac mi shoes</a></h3>
                            <div class="product-price product-price-red">
                                <span class="new-price">$42.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="custom-col-5">
                    <div class="product-wrap mb-50">
                        <div class="product-img default-overlay mb-25">
                            <a href="#">
                                <img class="default-img" src="{{asset('assets/images/landing_page/mens/m7.png')}}" alt="">
                            </a>
                            <div class="product-action product-action-sky product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                            <h3><a href="product-details.html">Mid – Augue et eleifend tincidunt</a></h3>
                            <div class="product-price product-price-red">
                                <span class="new-price">$42.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="custom-col-5">
                    <div class="product-wrap mb-50">
                        <div class="product-img default-overlay mb-25">
                            <a href="#">
                                <img class="default-img" src="{{asset('assets/images/landing_page/mens/m8.png')}}" alt="">
                            </a>
                            <div class="product-action product-action-sky product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                            <h3><a href="product-details.html">Home sofa ante a elit</a></h3>
                            <div class="product-price product-price-red">
                                <span class="new-price">$42.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="custom-col-5">
                    <div class="product-wrap mb-50">
                        <div class="product-img default-overlay mb-25">
                            <a href="#">
                                <img class="default-img" src="{{asset('assets/images/landing_page/mens/m9.png')}}" alt="">
                            </a>
                            <div class="product-action product-action-sky product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                            <h3><a href="product-details.html">Century sofa auctor iaculis</a></h3>
                            <div class="product-price product-price-red">
                                <span class="new-price">$42.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="custom-col-5">
                    <div class="product-wrap mb-50">
                        <div class="product-img default-overlay mb-25">
                            <a href="#">
                                <img class="default-img" src="{{asset('assets/images/landing_page/mens/m10.png')}}" alt="">
                            </a>
                            <div class="product-action product-action-sky product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                            <h3><a href="product-details.html">Mid – Century Sofa</a></h3>
                            <div class="product-price product-price-red">
                                <span class="new-price">$42.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="custom-col-5">
                    <div class="product-wrap mb-50">
                        <div class="product-img default-overlay mb-25">
                            <a href="#">
                                <img class="default-img" src="{{asset('assets/images/landing_page/mens/m11.png')}}" alt="">
                            </a>
                            <div class="product-action product-action-sky product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                            <h3><a href="product-details.html">Mid – Century Sofa</a></h3>
                            <div class="product-price product-price-red">
                                <span class="new-price">$42.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="custom-col-5">
                    <div class="product-wrap mb-50">
                        <div class="product-img default-overlay mb-25">
                            <a href="#">
                                <img class="default-img" src="{{asset('assets/images/landing_page/mens/m12.png')}}" alt="">
                            </a>
                            <div class="product-action product-action-sky product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                            <h3><a href="product-details.html">Mid – Century Sofa</a></h3>
                            <div class="product-price product-price-red">
                                <span class="new-price">$42.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="custom-col-5">
                    <div class="product-wrap mb-50">
                        <div class="product-img default-overlay mb-25">
                            <a href="#">
                                <img class="default-img" src="{{asset('assets/images/landing_page/mens/m13.png')}}" alt="">
                            </a>
                            <div class="product-action product-action-sky product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                            <h3><a href="product-details.html">Century sofa auctor iaculis</a></h3>
                            <div class="product-price product-price-red">
                                <span class="new-price">$42.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="custom-col-5">
                    <div class="product-wrap mb-50">
                        <div class="product-img default-overlay mb-25">
                            <a href="#">
                                <img class="default-img" src="{{asset('assets/images/landing_page/mens/m14.png')}}" alt="">
                            </a>
                            <div class="product-action product-action-sky product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                            <h3><a href="product-details.html">Mid – Century Sofa</a></h3>
                            <div class="product-price product-price-red">
                                <span class="new-price">$42.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="custom-col-5">
                    <div class="product-wrap mb-50">
                        <div class="product-img default-overlay mb-25">
                            <a href="#">
                                <img class="default-img" src="{{asset('assets/images/landing_page/mens/m15.png')}}" alt="">
                            </a>
                            <div class="product-action product-action-sky product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                            <h3><a href="product-details.html">Mid – Century Sofa</a></h3>
                            <div class="product-price product-price-red">
                                <span class="new-price">$42.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="custom-col-5">
                    <div class="product-wrap mb-50">
                        <div class="product-img default-overlay mb-25">
                            <a href="#">
                                <img class="default-img" src="{{asset('assets/images/landing_page/mens/m16.png')}}" alt="">
                            </a>
                            <div class="product-action product-action-sky product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                            <h3><a href="product-details.html">Mid – Century Sofa</a></h3>
                            <div class="product-price product-price-red">
                                <span class="new-price">$42.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="custom-col-5">
                    <div class="product-wrap mb-50">
                        <div class="product-img default-overlay mb-25">
                            <a href="#">
                                <img class="default-img" src="{{asset('assets/images/landing_page/mens/m17.png')}}" alt="">
                            </a>
                            <div class="product-action product-action-sky product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                            <h3><a href="product-details.html">Century sofa auctor iaculis</a></h3>
                            <div class="product-price product-price-red">
                                <span class="new-price">$42.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="custom-col-5">
                    <div class="product-wrap mb-50">
                        <div class="product-img default-overlay mb-25">
                            <a href="#">
                                <img class="default-img" src="{{asset('assets/images/landing_page/mens/m18.png')}}" alt="">
                            </a>
                            <div class="product-action product-action-sky product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                            <h3><a href="product-details.html">Mid – Century Sofa</a></h3>
                            <div class="product-price product-price-red">
                                <span class="new-price">$42.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="custom-col-5">
                    <div class="product-wrap mb-50">
                        <div class="product-img default-overlay mb-25">
                            <a href="#">
                                <img class="default-img" src="{{asset('assets/images/landing_page/mens/m19.png')}}" alt="">
                            </a>
                            <div class="product-action product-action-sky product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                            <h3><a href="product-details.html">Mid – Century Sofa</a></h3>
                            <div class="product-price product-price-red">
                                <span class="new-price">$42.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="custom-col-5">
                    <div class="product-wrap mb-50">
                        <div class="product-img default-overlay mb-25">
                            <a href="#">
                                <img class="default-img" src="{{asset('assets/images/landing_page/mens/m20.png')}}" alt="">
                            </a>
                            <div class="product-action product-action-sky product-action-position-1">
                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                            <h3><a href="product-details.html">Mid – Century Sofa</a></h3>
                            <div class="product-price product-price-red">
                                <span class="new-price">$42.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
