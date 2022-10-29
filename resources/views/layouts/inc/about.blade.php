<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>About us - CP</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/logo/cp-logo.png')}}">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/css-plugins-call.css')}}">
        <link rel="stylesheet" href="{{asset('css/bundle.css')}}">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('css/colors.css')}}">

    </head>

    <body>


        <!-- Body main wrapper -->
        <div class="wrapper about-page home-one">

            <!-- Header -->
            <header class="header-area">

                <!-- Top area -->
                <div class="header-top-area">

                    <div class="container">

                        <div class="row">

                            <div class="col-lg-6 col-sm-6">

                                <div class="top-bar-left">

                                    <div class="contact-link">

                                        <div class="info_box phone">
                                            Call us : <span>(81) 072 721 5108</span>
                                        </div>

                                        <div class="info_box email text-lowercase">
                                            email :
                                            <a class="text-light" href="mailto:info@samsoin.co.jp">
                                                info@samsoin.co.jp
                                            </a>
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-6 col-sm-6">

                                <div class="topbar-nav">

                                    <div class="wpb_wrapper">

                                        <!-- my account -->
                                        <div class="menu-my-account-container">

                     @guest
                                         @if (Route::has('login'))
                                            <a href="{{url('login')}}"><i class="first-icon fa fa-user-circle header-top-icon-color login-padding"></i>
                                                Login
                                            </a>



@else


  <a href="{{url('/Logout')}}"><i class="first-icon fa fa-user-circle header-top-icon-color login-padding"></i>
                                                Logout
                                            </a>
      @endif
                     @endguest


                                        </div>

                                        <div class="switcher">

                                            <!-- language-menu -->
                                            <div class="language">

                                                <a class="inactiveLink unselectable" href="#">
                                                    <img src="{{asset('images/icons/en.png')}}" alt="English"            href="{{url('en')}}">
                                                    English
                                                    <i class="ion-ios-arrow-down header-top-icon-color"></i>
                                                </a>

                                                <ul>
                                                    <li>
                                                        <a href="{{url('cp-about-us')}}">
                                                            <img src="{{asset('images/icons/jp.png')}}"

                                                            href="{{url('jp')}}"
                                                            alt="日本語">
                                                            <span>日本語</span>
                                                        </a>
                                                    </li>
                                                </ul>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Bottom area -->
                <div class="header-bottom-area">

                    <div class="container">

                        <div class="row">

                            <!-- logo -->
                            <div class="header_logo col-left col-lg-2 col-xl-2 col-md-12 col-sm-12 justify-content-center align-self-center d-flex">

                                <!-- <a href="home.html"> -->
                                <a href="{{url('/')}}'">
                                        <img src="{{asset('images/logo/cp-logo.png')}}" alt="CP Logo">
                                </a>

                            </div>

                            <div class="col-right col-xs-12 col-lg-10 col-xl-10 col-md-12 display_top">

                                <!-- main menu -->
                                <div class="main-menu">

                                    <nav>

                                        <ul>
                                            <!-- <li><a href="home.html">Home</a></li> -->
                                            <li><a href="{{url('/')}}">Home</a></li>
                                            <li><a href="{{url('shops')}}">Shop</a></li>
                                            <li><a href="{{url('cp-idea')}}">CP Idea</a></li>
                                            <li class="current"><a href="{{url('cp-about-us')}}">About Us</a></li>
                                            <li><a href="{{url('p-contact-us')}}">Contact</a></li>
                                            <li>
                                                <a href="{{url('itser')}}">Services</a>

                                                <div class="services-sticker">
                                                    <span class="unselectable unselectable-services-sticker">New!</span>
                                                </div>

                                            </li>

                                        </ul>

                                    </nav>

                                </div>

                                <!-- mobile main menu -->
                                <div class="mobile-menu-area">

                                    <div class="mobile-menu">

                                        <nav id="mobile-menu-active">

                                            <ul class="menu-overflow">
                                                <!-- <li><a href="home.html">Home</a></li> -->
                                                <li><a href="{{url('home')}}">Home</a></li>
                                                <li><a href="{{url('shops')}}">Shop</a></li>
                                                <li><a href="{{url('cp-idea')}}">CP Idea</a></li>
                                                <li class="current"><a href="{{url('cp-about-us')}}">About Us</a></li>
                                                <li><a href="{{url('p-contact-us')}}">Contact</a></li>
                                                <li>
                                                    <a href="{{url('itser')}}">Services</a>

                                                    <div class="services-sticker">
                                                        <span class="unselectable unselectable-services-sticker">New!</span>
                                                    </div>

                                                </li>
                                            </ul>

                                        </nav>

                                    </div>

                                </div>

                                             <!-- Cart -->
                                <div class="blockcart cart-preview">

                                    <div class="header">

                                        <a href="#">
                                            <i class="fa fa-shopping-basket"></i>
                                            <span class="item_txt"> Cart <span class="item_count">{{$count}}</span></span>

                                        </a>

                                        <div class="body">

                                            <ul>


@foreach ($cart as $item)
                                                <li>

                                                    <div class="right_block">
                                                        <span class="product-name">{{$item->products->{'name_'.app()->getLocale()} }}</span>

                                                        <a href="#" class="remove-from-cart"><i class="fa fa-remove pull-xs-left"></i></a>
                                                        <div class="attributes_content">
                                                            <span><strong>qty</strong>: {{$item->prod_qty}}</span><br>
                                                        </div>
                                                    </div>
                                                </li>
@endforeach
                                            </ul>


                                            <div class="checkout">
                                                <a href="{{url('checkout')}}" class="btn btn-primary">checkout</a>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </header>


            <!-- Content -->
            <div class="about-page-area" >

                <div class="about__us_page_area">

                    <!-- Welcome -->
                    <section class="welcome_paddings">

                        <div class="container">

                            <div class="row">

                                <div class="col-lg-2 welcome-ceo-img-bg">
                                    <div class="welcome-ceo-img"></div>
                                </div>

                                <div class="col-lg-10 ">

                                    <!-- Welcome blockquote -->
                                    <blockquote class="blockquote blockquote-custom bg-white p-5 shadow rounded">

                                        <div class="blockquote-custom-icon shadow-sm">
                                            <i class="fa fa-quote-left text-white"></i>
                                        </div>

                                        <div class="blockquote-title shadow-sm">
                                            <h2 class="h1-responsive font-weight-bold my-5 main-color">Welcome</h2>
                                        </div>

                                        <p class="mb-0 mt-2 ">
                                            Our philosophy is that "all management starts with the customer
                                            and starts with the creation of a true specialty store.
                                            <br>With advanced counseling that teaches correct cosmetics for the purpose of creating
                                            beauty of bare skin.
                                            <br><br>
                                            We recommend a beauty culture system (facial treatment) based on our own external
                                            and internal beauty, which responds sincerely and accurately to each customer's skin.
                                            We pride ourselves on our ability to develop a full range of new products,
                                            <br>as well as our high quality, effectiveness and safety.
                                            <br><br>
                                            We have a wide range of products, especially commercial products and beauty essences.
                                            <br>Furthermore, we hold substantial training seminars under a consistent education system.
                                            <br><br>
                                        </p>

                                        <footer class="blockquote-footer pt-4 mt-4 welcome-border-top">

                                            <span class="main-color font-weight-bold">
                                                Daisuke Sato
                                            </span>,

                                            <cite title="Source Title" class="blockquote-cite">CP President &amp; Ceo </cite>

                                        </footer>

                                    </blockquote>

                                </div>

                            </div>

                        </div>

                    </section>


                    <!-- Company Profile -->
                    <div class="policy-area">

                        <div class="container">

                            <div>

                                <h2 class="font-weight-bold main-color text-center">
                                    Company Profile
                                </h2>

                            </div>

                            <!-- row 1 -->
                            <div class="policy-area-inner">

                                <div class="row">

                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">

                                        <div class="single-policy">

                                            <div class="icon">

                                                <i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-bookmark-check-fill" viewBox="-9 -9 50  50">
                                                        <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zm8.854-9.646a.5.5 0 0 0-.708-.708L7.5 7.793 6.354 6.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
                                                    </svg>
                                                </i>

                                            </div>

                                            <div class="txt_cms">
                                                <h2>Start Date</h2>
                                                <p>April 10, 1995</p>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">

                                        <div class="single-policy">

                                            <div class="icon">

                                                <i>

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-building" viewBox="-9 -9 50 50">
                                                        <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
                                                        <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
                                                    </svg>

                                                </i>

                                            </div>

                                            <div class="txt_cms">
                                                <h2>Main Activity</h2>
                                                <p>Sale of cosmetics for esthetic salons</p>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">

                                        <div class="single-policy">

                                            <div class="icon">

                                                <i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="-9 -9 50 50">
                                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                                    </svg>
                                                </i>

                                            </div>

                                            <div class="txt_cms">
                                                <h2>Location</h2>
                                                <p>1-19-19 Makiochi, Minoo City, Osaka</p>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <!-- row 2 -->
                            <div class="policy-area-inner">

                                <div class="row">

                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">

                                        <div class="single-policy">

                                            <div class="icon">

                                                <i>

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-boxes" viewBox="-9 -9 50 50">
                                                        <path d="M7.752.066a.5.5 0 0 1 .496 0l3.75 2.143a.5.5 0 0 1 .252.434v3.995l3.498 2A.5.5 0 0 1 16 9.07v4.286a.5.5 0 0 1-.252.434l-3.75 2.143a.5.5 0 0 1-.496 0l-3.502-2-3.502 2.001a.5.5 0 0 1-.496 0l-3.75-2.143A.5.5 0 0 1 0 13.357V9.071a.5.5 0 0 1 .252-.434L3.75 6.638V2.643a.5.5 0 0 1 .252-.434L7.752.066ZM4.25 7.504 1.508 9.071l2.742 1.567 2.742-1.567L4.25 7.504ZM7.5 9.933l-2.75 1.571v3.134l2.75-1.571V9.933Zm1 3.134 2.75 1.571v-3.134L8.5 9.933v3.134Zm.508-3.996 2.742 1.567 2.742-1.567-2.742-1.567-2.742 1.567Zm2.242-2.433V3.504L8.5 5.076V8.21l2.75-1.572ZM7.5 8.21V5.076L4.75 3.504v3.134L7.5 8.21ZM5.258 2.643 8 4.21l2.742-1.567L8 1.076 5.258 2.643ZM15 9.933l-2.75 1.571v3.134L15 13.067V9.933ZM3.75 14.638v-3.134L1 9.933v3.134l2.75 1.571Z"/>
                                                    </svg>

                                                </i>

                                            </div>

                                            <div class="txt_cms" >

                                                <h2>Sales</h2>
                                                <p class="profile-element-details">
                                                    • Samsoin Cosmetics Okinawa Sales<br>
                                                    • Samsoin Cosmetics Kyushu Sales<br>
                                                    • Samsoin Cosmetics Nara Sales<br>
                                                    • Samsoin Cosmetics China Sales<br>
                                                    • Samsoin Cosmetics Kansai Sales<br>
                                                    • Samsoin Cosmetics Taiwan Sales<br>
                                                </p>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">

                                        <div class="single-policy">

                                            <div class="icon">

                                                <i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-bank2" viewBox="-9 -9 50 50">
                                                        <path d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916l-7.5-5zM12.375 6v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM.5 15a.5.5 0 0 0 0 1h15a.5.5 0 1 0 0-1H.5z"/>
                                                    </svg>

                                                </i>

                                            </div>

                                            <div class="txt_cms">

                                                <h2>Trading Banks</h2>
                                                <p class="profile-element-details">
                                                    • Mitsui Sumitomo Bank . Minoh<br>
                                                    • Mitsui Sumitomo Bank . Minami Senri<br>
                                                    • Juso Shinkin Bank . Shin-Osaka<br>
                                                </p>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">

                                        <div class="single-policy">

                                            <div class="icon">

                                                <i>

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-diagram-3-fill" viewBox="-9 -9 50 50">
                                                        <path fill-rule="evenodd" d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H14a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 2 7h5.5V6A1.5 1.5 0 0 1 6 4.5v-1zm-6 8A1.5 1.5 0 0 1 1.5 10h1A1.5 1.5 0 0 1 4 11.5v1A1.5 1.5 0 0 1 2.5 14h-1A1.5 1.5 0 0 1 0 12.5v-1zm6 0A1.5 1.5 0 0 1 7.5 10h1a1.5 1.5 0 0 1 1.5 1.5v1A1.5 1.5 0 0 1 8.5 14h-1A1.5 1.5 0 0 1 6 12.5v-1zm6 0a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1z"/>
                                                    </svg>

                                                </i>

                                            </div>

                                            <div class="txt_cms">

                                                <h2>Affiliates</h2>
                                                <p class="profile-element-details">
                                                    • Procos Co., Ltd.<br>
                                                    • Some Face Co., Ltd.<br>
                                                    • San M Shokai Co., Ltd.<br>
                                                </p>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- Corporate History -->
                    <section class="timeline_area">

                        <div class="container">

                            <div class="row justify-content-center">

                                <div class="col-12 col-sm-8 col-lg-6 mb-5">

                                    <!-- Section Heading-->
                                    <div class="section_heading text-center">
                                        <h2 class="font-weight-bold main-color text-center">Corporate History</h2>
                                    </div>

                                </div>

                            </div>

                            <div class="row">

                                <div class="col-12">

                                    <!-- Timeline Area-->
                                    <div class="apland-timeline-area ">

                                        <!-- Single Timeline Content-->
                                        <div class="single-timeline-area">

                                            <div class="timeline-date">
                                                <p>Now</p>
                                            </div>

                                            <div class="row">

                                                <div class="col-12 col-md-6 col-lg-6">

                                                    <div class="single-timeline-content d-flex ">

                                                        <div class="timeline-icon">
                                                            <i class="fa fa-building-o" aria-hidden="true"></i>
                                                        </div>

                                                        <div class="timeline-text">
                                                            <h6>Number of trading stores</h6>
                                                            <p>Will reach about 360 store</p>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <!-- Single Timeline Content-->
                                        <div class="single-timeline-area">

                                            <div class="timeline-date" >
                                                <p>2005</p>
                                            </div>

                                            <div class="row">

                                                <div class="col-12 col-md-6 col-lg-6">

                                                    <div class="single-timeline-content d-flex">

                                                        <div class="timeline-icon">
                                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                        </div>

                                                        <div class="timeline-text">
                                                            <h6>Taiwan</h6>
                                                            <p>Established Taiwan sales company</p>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <!-- Single Timeline Content-->
                                        <div class="single-timeline-area">

                                            <div class="timeline-date" >
                                                <p>2004</p>
                                            </div>

                                            <div class="row">

                                                <div class="col-12 col-md-6 col-lg-6">

                                                    <div class="single-timeline-content d-flex">
                                                        <div class="timeline-icon">
                                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                        </div>

                                                        <div class="timeline-text">
                                                            <h6>South Korea</h6>
                                                            <p>Major trading store opened</p>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <!-- Single Timeline Content-->
                                        <div class="single-timeline-area">

                                            <div class="timeline-date" >
                                                <p>1999</p>
                                            </div>

                                            <div class="row">

                                                <div class="col-12 col-md-6 col-lg-6">

                                                    <div class="single-timeline-content d-flex" >

                                                        <div class="timeline-icon">
                                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                        </div>

                                                        <div class="timeline-text">
                                                            <h6>Osaka</h6>
                                                            <p>Established Kansai sales Company</p>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <!-- Single Timeline Content-->
                                        <div class="single-timeline-area">

                                            <div class="timeline-date" >
                                                <p>1997</p>
                                            </div>

                                            <div class="row">

                                                <div class="col-12 col-md-6 col-lg-6">

                                                    <div class="single-timeline-content d-flex" >

                                                        <div class="timeline-icon">
                                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                        </div>

                                                        <div class="timeline-text">
                                                            <h6>Kagawa</h6>
                                                            <p>Established Shikoku Sales Company</p>
                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="col-12 col-md-6 col-lg-6">

                                                    <div class="single-timeline-content d-flex">

                                                        <div class="timeline-icon">
                                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                        </div>

                                                        <div class="timeline-text">
                                                            <h6>Yamaguchi</h6>
                                                            <p>Established a Chinese Sales Company</p>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <!-- Single Timeline Content-->
                                        <div class="single-timeline-area">

                                            <div class="timeline-date" >
                                                <p>1996</p>
                                            </div>

                                            <div class="row">

                                                <div class="col-12 col-md-6 col-lg-6">

                                                    <div class="single-timeline-content d-flex" >

                                                        <div class="timeline-icon">
                                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                        </div>

                                                        <div class="timeline-text">
                                                            <h6>Fukuoka</h6>
                                                            <p>Established Kyushu Sales Company</p>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <!-- Single Timeline Content-->
                                        <div class="single-timeline-area">

                                            <div class="timeline-date" >
                                                <p>April, 1995</p>
                                            </div>

                                            <div class="row">

                                                <div class="col-12 col-md-6 col-lg-6">

                                                    <div class="single-timeline-content d-flex" >

                                                        <div class="timeline-icon">

                                                            <i>

                                                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-bookmark-check-fill" viewBox="-10 -10 60 60">
                                                                    <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zm8.854-9.646a.5.5 0 0 0-.708-.708L7.5 7.793 6.354 6.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
                                                                </svg>

                                                            </i>

                                                        </div>

                                                        <div class="timeline-text">
                                                            <h6>Procos Company Formation</h6>
                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="col-12 col-md-6 col-lg-6">

                                                    <div class="single-timeline-content d-flex">

                                                        <div class="timeline-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>

                                                        <div class="timeline-text">
                                                            <h6>Started Trading with 25 Stores in Okinawa</h6>
                                                            <p></p>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </section>

                </div>

            </div>


            <!-- Bottom Page -->
            <div id="bottom-page" class="row">
            </div>


            <!-- FOOTER -->
            <footer id="footer" class="footer-bg">

                <div class="footer-container">

                    <div class="footer-main">

                        <div class="container">

                            <div class="row">

                                <div class="col-sm-12 col-md-12 col-lg-6">

                                    <div class="row">

                                        <!-- Company -->
                                        <div class="col-xs-12 col-md-6 col-lg-6 links footer_block">

                                            <h3 class="hidden-sm-down inactiveLink">company</h3>

                                            <ul class="footer_list">
                                                <li><a href="{{url('cp-about-us')}}">About us</a></li>
                                                <li><a href="{{url('cp-idea')}}">CP Idea</a></li>
                                                <li><a href="{{url('cp-contact-us#privacyPolicy')}}">Privacy Policy</a></li>
                                                <li><a href="{{url('cp-contact-us')}}">Contact</a></li>
                                            </ul>

                                        </div>

                                        <!-- Products -->
                                        <div class="col-xs-12 col-md-6 col-lg-6 links footer_block">

                                            <h3 class="hidden-sm-down inactiveLink">Products</h3>

                                            <ul class="footer_list">
                                                <li><a href="{{url('shop')}}">Facial Cleansing</a></li>
                                                <li><a href="{{url('shop')}}">Skin Lotion</a></li>
                                                <li><a href="{{url('shop')}}">Back Cream</a></li>
                                                <li><a href="{{url('shop')}}">Special Care</a></li>
                                                <li><a href="{{url('shop')}}">Makeup &amp; Health</a></li>
                                            </ul>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-sm-12 col-md-12 col-lg-6">

                                    <div class="row">

                                        <!-- Services -->
                                        <div class="col-xs-12 col-md-6 col-lg-6 links footer_block">

                                            <h3 class="hidden-sm-down inactiveLink">Services
                                                <span class="unselectable unselectable-services-sticker-footer">New!</span>
                                            </h3>

                                            <ul class="footer_list">
                                                <li><a href="{{url('cp-services#webc')}}">Internet of Things</a></li>
                                                <li><a href="{{url('ccp-services#DEV')}}">Software Development</a></li>
                                                <li><a href="{{url('cp-services#AIS')}}">Artificial Intelligence</a></li>
                                            </ul>

                                        </div>

                                        <!-- INFORMATIONS -->
                                        <div class="col-xs-12 col-md-6 col-lg-6 links footer_block">

                                            <h3 class="hidden-sm-down inactiveLink">INFORMATIONS</h3>

                                            <div class="footer-contact">
                                                <p class="address add">1-19-19 Makiochi, Minoo City, Osaka</p>
                                                <p class="phone add">(81) 072 721 5108</p>
                                                <p class="email add"><a href="mailto:info@samsoin.co.jp">info@samsoin.co.jp</a></p>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>


            </footer>


        </div>


        <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <!-- jQuery Local -->
        <script>window.jQuery || document.write('<script src="{{asset('js/jquery-3.2.1.min.js')}}"><\/script>')</script>

        <!-- Popper min js -->
        <script src="{{asset('js/popper.min.js')}}"></script>
        <!-- Bootstrap min js  -->
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
		<!-- nivo slider pack js  -->
        <script src="{{asset('js/jquery.nivo.slider.pack.js')}}"></script>
        <!-- All plugins here -->
        <script src="{{asset('js/plugins.js')}}"></script>
        <!-- Main js  -->
        <script src="{{asset('js/main.js')}}"></script>


    </body>

</html>
