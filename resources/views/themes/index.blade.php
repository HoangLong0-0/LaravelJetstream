<!doctype html>
<html class="no-js" lang="zxx">

<x-user_head></x-user_head>

<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- header-start -->
<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-10 col-lg-10">
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul class="mein_menu_list" id="navigation">
                                    <li><a href="menu.html">About</a></li>
                                    <li><a href="gallery.html">Campaign</a></li>
                                    <div class="logo-img d-none d-lg-block">
                                        <a href="/user">
                                            <img src="{{asset("themes/img/logo.png")}}" alt="">
                                        </a>
                                    </div>
                                    <li><a href="#">News</a>
                                    </li>
                                    <li><a href="#">Management</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                    <div class="logo-img-small d-sm-block d-md-block d-lg-none">
                        <a href="index.html">
                            <img src="{{asset("themes/img/logo.png")}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-end -->

<!-- slider_area-start -->
<div class="slider_area zigzag_bg_2">
    <div class="slider_sctive owl-carousel">
        <div class="single_slider slider_img_1">
            <div class="single_slider-iner">
                <div class="slider_contant text-center">
                    <h3>Healthy Food Blog</h3>
                    <p> This is place where you can find news about healthy food,<br>
                    Search for meaningful campaign <br>
                    And join them for better life of us !</p>
                </div>
            </div>
        </div>
        <div class="single_slider slider_img_1">
            <div class="single_slider-iner">
                <div class="slider_contant text-center">
                    <h3>Healthy Food <br>
                        News</h3>
                    <p>All news will be updated here day-by-day<br>
                    Quickly cover your knowledge about healthy food all over the world</p>
                </div>
            </div>
        </div>
        <div class="single_slider slider_img_1">
            <div class="single_slider-iner">
                <div class="slider_contant text-center">
                    <h3>Healthy Food <br>
                        Campaign.</h3>
                    <p>Where you can looking for and join foods campaign</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider_area-end -->

<!-- service_area-start -->
<div class="service_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title mb-60">
                    <h3>Our Services</h3>
                    <p>Read news, join and manage your campaign here ! </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- service_area-end -->

<!-- video_area_start -->
<div class="video_area video_bg zigzag_bg_1 zigzag_bg_2 ">
    <div class="video_area_inner">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="video_text">
                        <div class="info">
                            <div class="info_inner">
                                <h4>Watch Video</h4>
                                <p>You will love our execution</p>
                            </div>
                            <div class="icon_video">
                                <a class="popup-video" href="https://www.youtube.com/watch?v=HWnXId_Zg4k"><i class="ti-control-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- video_area_end -->

<!-- order_area_start -->
<div class="order_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title mb-70">
                    <h3>Hot News</h3>
                    <p>Remarkable news recently</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($informations as $item)
            <div class="col-xl-4 col-md-6">
                <div class="single_order">
                    <div class="order_thumb">
                        <img src="{{$item->__get("image")}}" alt="">
                    </div>
                    <div class="order_info">
                        <h3><a href="#">{{$item->__get("name")}}</a></h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- order_area_end -->
<!-- order_area_start -->
<div class="order_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title mb-70">
                    <h3>Popular Campaigns</h3>
                    <p>Help us create a healthy food community!</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="single_order">
                    <div class="order_thumb">
                        <img src="{{asset("themes/img/order/order-1.png")}}" alt="">
                        <div class="order_prise">
                            <span>10.00</span>
                        </div>
                    </div>
                    <div class="order_info">
                        <h3><a href="#">Weastern Set Meal 01</a></h3>
                        <p>Chicken Fried Rice   |   Crispy Chicken fry <br>
                            Weastern Pickle   |   Mixed Vegetable <br>
                            Soft Drinks
                        </p>
                        <a href="#" class="boxed_btn">Order Now!</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="single_order">
                    <div class="order_thumb">
                        <img src="{{asset("themes/img/order/order-2.png")}}" alt="">
                        <div class="order_prise">
                            <span>10.00</span>
                        </div>
                    </div>
                    <div class="order_info">
                        <h3><a href="#">Weastern Set Meal 02</a></h3>
                        <p>Chicken Fried Rice   |   Crispy Chicken fry <br>
                            Weastern Pickle   |   Mixed Vegetable <br>
                            Soft Drinks
                        </p>
                        <a href="#" class="boxed_btn">Order Now!</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="single_order">
                    <div class="order_thumb">
                        <img src="{{asset("themes/img/order/order-3.png")}}" alt="">
                        <div class="order_prise">
                            <span>10.00</span>
                        </div>
                    </div>
                    <div class="order_info">
                        <h3><a href="#">Weastern Set Meal 03</a></h3>
                        <p>Chicken Fried Rice   |   Crispy Chicken fry <br>
                            Weastern Pickle   |   Mixed Vegetable <br>
                            Soft Drinks
                        </p>
                        <a href="#" class="boxed_btn">Order Now!</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="single_order">
                    <div class="order_thumb">
                        <img src="{{asset("themes/img/order/order-4.png")}}" alt="">
                        <div class="order_prise">
                            <span>10.00</span>
                        </div>
                    </div>
                    <div class="order_info">
                        <h3><a href="#">Weastern Set Meal 01</a></h3>
                        <p>Chicken Fried Rice   |   Crispy Chicken fry <br>
                            Weastern Pickle   |   Mixed Vegetable <br>
                            Soft Drinks
                        </p>
                        <a href="#" class="boxed_btn">Order Now!</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="single_order">
                    <div class="order_thumb">
                        <img src="{{asset("themes/img/order/order-5.png")}}" alt="">
                        <div class="order_prise">
                            <span>10.00</span>
                        </div>
                    </div>
                    <div class="order_info">
                        <h3><a href="#">Weastern Set Meal 02</a></h3>
                        <p>Chicken Fried Rice   |   Crispy Chicken fry <br>
                            Weastern Pickle   |   Mixed Vegetable <br>
                            Soft Drinks
                        </p>
                        <a href="#" class="boxed_btn">Order Now!</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="single_order">
                    <div class="order_thumb">
                        <img src="{{asset("themes/img/order/order-6.png")}}" alt="">
                        <div class="order_prise">
                            <span>10.00</span>
                        </div>
                    </div>
                    <div class="order_info">
                        <h3><a href="#">Weastern Set Meal 03</a></h3>
                        <p>Chicken Fried Rice   |   Crispy Chicken fry <br>
                            Weastern Pickle   |   Mixed Vegetable <br>
                            Soft Drinks
                        </p>
                        <a href="#" class="boxed_btn">Order Now!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- order_area_end -->

<!-- brand_area-start -->
<div class="brand_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title mb-70">
                    <h3>Brands love to take Our Services</h3>
                    <p>Subscribed company and donors</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-2 col-md-6 col-lg-3">
                <div class="single_brand">
                    <img src="{{asset("themes/img/brand/1.png")}}" alt="">
                </div>
            </div>
            <div class="col-xl-2 col-md-6 col-lg-3">
                <div class="single_brand">
                    <img src="{{asset("themes/img/brand/02.png")}}" alt="">
                </div>
            </div>
            <div class="col-xl-2 col-md-6 col-lg-3">
                <div class="single_brand">
                    <img src="{{asset("themes/img/brand/03.png")}}" alt="">
                </div>
            </div>
            <div class="col-xl-2 col-md-6 col-lg-3">
                <div class="single_brand">
                    <img src="{{asset("themes/img/brand/04.png")}}" alt="">
                </div>
            </div>
            <div class="col-xl-2 col-md-6 col-lg-3">
                <div class="single_brand">
                    <img src="{{asset("themes/img/brand/05.png")}}" alt="">
                </div>
            </div>
            <div class="col-xl-2 col-md-6 col-lg-3">
                <div class="single_brand">
                    <img src="{{asset("themes/img/brand/06.png")}}" alt="">
                </div>
            </div>
            <div class="col-xl-2 col-md-6 col-lg-3">
                <div class="single_brand">
                    <img src="{{asset("themes/img/brand/7.png")}}" alt="">
                </div>
            </div>
            <div class="col-xl-2 col-md-6 col-lg-3">
                <div class="single_brand">
                    <img src="{{asset("themes/img/brand/12.png")}}" alt="">
                </div>
            </div>
            <div class="col-xl-2 col-md-6 col-lg-3">
                <div class="single_brand">
                    <img src="{{asset("themes/img/brand/9.png")}}" alt="">
                </div>
            </div>
            <div class="col-xl-2 col-md-6 col-lg-3">
                <div class="single_brand">
                    <img src="{{asset("themes/img/brand/10.png")}}" alt="">
                </div>
            </div>
            <div class="col-xl-2 col-md-6 col-lg-3">
                <div class="single_brand">
                    <img src="{{asset("themes/img/brand/11.png")}}" alt="">
                </div>
            </div>
            <div class="col-xl-2 col-md-6 col-lg-3">
                <div class="single_brand">
                    <img src="{{asset("themes/img/brand/8.png")}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- brand_area-end -->

<!-- footer-start -->
<x-user_footer></x-user_footer>
<!-- footer-end -->


<!-- JS here -->
{{--<script src="{{asset("themes/js/bootstrap.min.js)}}"></script>--}}
<x-user_scripts></x-user_scripts>

</body>

</html>
