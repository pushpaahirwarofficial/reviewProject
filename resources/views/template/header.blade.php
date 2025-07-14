    <!--  Preloader  -->
    <div class="preloader">
        <span class="loader"></span>
    </div>

    <!--header-section start-->
    <header class="header-section index ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-xl nav-shadow" id="#navbar">
                        <a class="navbar-brand" href="{{ route('index') }}"><img src="{{asset('assets/images/new_logo.png')}}" class="logo" alt="logo"></a>
                        <a class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <i class="bi bi-list"></i>
                        </a>

                        <div class="collapse navbar-collapse ms-auto " id="navbar-content">
                            <div class="main-menu index-page">
                                <ul class="navbar-nav mb-lg-0 mx-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('index') }}"> Home </a>
                                    </li> 
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('review') }}">Reviews</a>
                                    </li> 
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('comparison') }}">Comparison</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Pages </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{ route('aboutUs') }}">About Us</a></li>
                                            <li><a class="dropdown-item" href="{{ route('service') }}">Category</a></li>
                                            <li><a class="dropdown-item" href="{{ route('blog') }}">Blog</a></li>
                                            <li><a class="dropdown-item" href="{{ route('faq') }}">FAQs</a></li>
                                            @if(empty(session('userData')))
                                            <li><a class="dropdown-item" href="{{ route('signup') }}">Sign Up</a></li>
                                            @endif
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('contactUs') }}">Contact us</a>
                                    </li>
                                </ul>
                                <div class="nav-right d-none d-xl-block">
                                    <div class="nav-right__search">
                                        <a href="javascript:void(0)" class="nav-right__search-icon btn_theme icon_box btn_bg_white"> <i class="bi bi-search"></i> <span></span> </a>    
                                        @if(empty(session('userData')))
                                        <a href="{{ route('signin') }}" class="btn_theme btn_theme_active">Sign In <i class="bi bi-arrow-up-right"></i><span></span></a>
                                        @else
                                        <a href="{{ route('userDashboard') }}" class="btn_theme btn_theme_active">{{ strtoupper(session('userData')->name) }} <span></span></a>
                                        @endif
                                    </div>
                                    <div class="nav-right__search-inner">
                                        <div class="nav-search-inner__form">
                                            <form method="POST" id="search" class="inner__form">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Search" required>
                                                    <button type="submit" class="search_icon"><i class="bi bi-search"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- Offcanvas More info-->
    <div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasRight">
        <div class="offcanvas-body custom-nevbar">
            <div class="row">
                <div class="col-md-7 col-xl-8">
                    <div class="custom-nevbar__left">
                        <button type="button" class="close-icon d-md-none ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x"></i></button>
                        <ul class="custom-nevbar__nav mb-lg-0">
                            <li class="menu_item">
                                <a class="menu_link" href="{{ route('index') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Home </a>
                            </li>
                            <li class="menu_item">
                                <a class="menu_link " href="{{ route('review') }}" >Reviews</a>
                            </li>
                            <li class="menu_item">
                                <a class="menu_link" href="{{ route('comparison') }}">Comparison</a>
                            </li>
                            <li class="menu_item dropdown">
                                <a class="menu_link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Pages </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('aboutUs') }}">About us</a></li>
                                    <li><a class="dropdown-item" href="{{ route('service') }}">Service</a></li>
                                    <li><a class="dropdown-item" href="{{ route('blog') }}">Blog</a></li>
                                    <li><a class="dropdown-item" href="{{ route('faq') }}">FAQs</a></li>
                                    @if(empty(session('userData')))
                                    <li><a class="dropdown-item" href="{{ route('signup') }}">Sign Up</a></li>
                                    @endif
                                </ul>
                            </li>
                            <li class="menu_item">
                                <a class="menu_link" href="{{ route('contactUs') }}">Contact Us</a>
                            </li>
                            @if(empty(session('userData')))
                            <li class="menu_item">
                                <a class="menu_link" href="{{ route('signin') }}">Sign In</a>
                            </li>
                            @else
                            <li class="menu_item">
                                <a class="menu_link" href="{{ route('userDashboard') }}">{{ strtoupper(session('userData')->name) }}</a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-md-5 col-xl-4">
                    <div class="custom-nevbar__right">
                        <div class="custom-nevbar__top d-none d-md-block">
                            <button type="button" class="close-icon ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x"></i></button>
                            <div class="custom-nevbar__right-thumb mb-auto">
                                <img src="assets/images/logo.png" alt="logo">
                            </div>
                        </div>
                        <ul class="custom-nevbar__right-location">
                            <li>
                                <p class="mb-2">Phone: </p>
                                <a href="tel:+123456789" class="fs-4 contact">+123 456 789</a>
                            </li>
                            <li class="location">
                                <p class="mb-2">Email: </p>
                                <a href="https://pixner.net/cdn-cgi/l/email-protection#8ec7e0e8e1cee9e3efe7e2a0ede1e3" class="fs-4 contact"><span class="__cf_email__" data-cfemail="a3eacdc5cce3c4cec2cacf8dc0ccce">[email&#160;protected]</span></a>
                            </li>
                            <li class="location">
                                <p class="mb-2">Location: </p>
                                <p class="fs-4 contact">6391 Celina, Delaware 10299</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--header-section end-->
