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
                                    <li><a href="{{url("user/campaigns")}}">Campaigns</a></li>
                                    <div class="logo-img d-none d-lg-block">
                                        <a href="/user">
                                            <img src="{{asset("themes/img/logo.png")}}" alt="">
                                        </a>
                                    </div>
                                    <li><a href="{{url("user/informations")}}">News</a>
                                    </li>
                                    <li><a href="{{url("user/management")}}">Management</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                        <div class="custom_order">
                            <a href="{{url("user/logout")}}" class="boxed_btn_white">Logout</a>
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

