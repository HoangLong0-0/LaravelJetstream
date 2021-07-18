@extends("themes.layout")
@section("content")
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

    <!-- inf_area_start -->
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
                                <h3><a href="{{url("user/informations/detail",["id"=>$item->id])}}">{{$item->__get("name")}}</a></h3>
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
@endsection
