<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shop - CP</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo/cp-logo.png') }}">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css-plugins-call.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/colors.css') }}">
    <link href="{{ asset('Admin/css/number.css') }}" rel='stylesheet'>
    @livewireStyles

</head>

<body class="body-bg">
    <div class="wrapper home-one">
        <header class="header-area">

            <!-- Top area -->
            <div class="header-top-area">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-6 col-sm-6">

                            <div class="top-bar-left">

                                <div class="contact-link">

                                    <div class="info_box phone">
                                        Call us : <span>(012) 800 456 789</span>
                                    </div>

                                    <div class="info_box email text-lowercase">
                                        email :
                                        <a href="mailto:info@samsoin.co.jp" class="text-light">
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
                                                <a href="{{ url('login') }}"><i
                                                        class="first-icon fa fa-user-circle header-top-icon-color login-padding"></i>
                                                    Login
                                                @elseif (Route::has('Logout'))
                                                    <a href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();                                                   document.getElementById('logout-form').submit();">
                                                        <i
                                                            class="first-icon fa fa-user-circle header-top-icon-color login-padding"></i>
                                                        logout
                                                    </a>
                                            @endif
                                        @endguest

                                    </div>

                                    <div class="switcher">

                                        <!-- language-menu -->
                                        <div class="language">
                                            @foreach ($available_locales as $locale_name => $available_locale)
                                                @if ($available_locale === $current_locale)
                                                    <a class="inactiveLink unselectable"
                                                        href="language/{{ $available_locale }}">
                                                        <img src="{{ asset('images/icons/en.png') }}" alt="English">
                                                        English
                                                        <i class="ion-ios-arrow-down header-top-icon-color"></i>
                                                    </a>
                                                @else
                                                    <ul>
                                                        <li>
                                                            <a class=" "
                                                                href="language/{{ $available_locale }}">
                                                                <img src="images/icons/jp.png" alt="日本語">
                                                                <span>日本語</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                @endif
                                            @endforeach
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Bottom area -->
            <!-- Bottom area -->
            <div class="header-bottom-area">

                <div class="container">

                    <div class="row">

                        <div
                            class="header_logo col-left col-lg-2 col-xl-2 col-md-12 col-sm-12 justify-content-center align-self-center d-flex">


                        </div>

                        <div class="col-right col-sm-12 col-lg-10 col-xl-10 col-md-12 display_top">

                            <!-- main-menu -->
                            <div class="main-menu">

                                <nav>

                                    <ul>

                                        <li> <a href="{{ asset('/') }}">
                                                <img src="images/logo/cp-logo.png" alt="CP Logo">
                                            </a></li>
                                        <li><a href="{{ url('/') }}">Home</a></li>
                                        <li class="current"><a href="{{ url('shops') }}">Shop</a></li>
                                        <li><a href="{{ url('cp-idea') }}">CP Idea</a></li>
                                        <li><a href="{{ url('cp-about-us') }}">About Us</a></li>
                                        <li><a href="{{ url('p-contact-us') }}">Contact</a></li>
                                        <li>
                                            <a href="{{ url('itser') }}">Services</a>

                                            <div class="services-sticker">
                                                <span class="unselectable unselectable-services-sticker">New!</span>
                                            </div>

                                        </li>



                                        <div class="blockcart cart-preview">

                                            <div class="header">
                                                <a href="#">
                                                    @livewire('counter')


                                                </a>




                                                <div class="body">

                                                    @livewire('menu')
                                                </div>

                                </nav>

                            </div>

                            <!-- mobile main menu -->
                            <div class="mobile-menu-area">

                                <div class="mobile-menu">

                                    <nav id="mobile-menu-active">

                                        <ul class="menu-overflow">
                                            <li><a href="{{ url('/') }}">Home</a></li>
                                            <li class="current"><a href="{{ url('shop') }}">Shop</a></li>
                                            <li><a href="{{ url('cp-idea') }}">CP Idea</a></li>
                                            <li><a href="{{ url('cp-about-us') }}">About Us</a></li>
                                            <li><a href="{{ url('p-contact-us') }}">Contact</a></li>
                                            <li>

                                                <a href="{{ url('itser') }}">Services</a>

                                                <div class="services-sticker">
                                                    <span class="unselectable unselectable-services-sticker">New!</span>
                                                </div>











                                            </li>

                                        </ul>

                                    </nav>

                                </div>

                            </div>



                        </div>

                    </div>

                </div>

            </div>

        </header>
        <div class="wrapper home-one">


            @livewire('selectcomponent')

            <!-- Pagination -->
            <nav class="woocommerce-pagination">

                <ul class="page-numbers">




                    {{ $products->appends(request()->input())->links('FrontEnd.paginationlinks') }}


                </ul>

            </nav>

        </div>

    </div>

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
                                        <li><a href="{{ url('cp-about-us') }}">About us</a></li>
                                        <li><a href="cp-idea')}}">CP Idea</a></li>
                                        <li><a href="{{ url('cp-contact-us#privacyPolicy') }}">Privacy Policy</a>
                                        </li>
                                        <li><a href="{{ url('cp-contact-us') }}">Contact</a></li>
                                    </ul>

                                </div>

                                <!-- Products -->
                                <div class="col-xs-12 col-md-6 col-lg-6 links footer_block">

                                    <h3 class="hidden-sm-down inactiveLink">Products</h3>

                                    <ul class="footer_list">
                                        <li><a href="{{ url('shop') }}">Facial Cleansing</a></li>
                                        <li><a href="{{ url('shop') }}">Skin Lotion</a></li>
                                        <li><a href="{{ url('shop') }}">Back Cream</a></li>
                                        <li><a href="{{ url('shop') }}">Special Care</a></li>
                                        <li><a href="{{ url('shop') }}">Makeup &amp; Health</a></li>
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
                                        <li><a href="{{ url('cp-services#webc') }}">Internet of Things</a></li>
                                        <li><a href="{{ url('cp-services#DEV') }}">Software Development</a></li>
                                        <li><a href="{{ url('cp-services#AIS') }}">Artificial Intelligence</a></li>
                                    </ul>

                                </div>

                                <!-- INFORMATIONS -->
                                <div class="col-xs-12 col-md-6 col-lg-6 links footer_block">

                                    <h3 class="hidden-sm-down inactiveLink">INFORMATIONS</h3>

                                    <div class="footer-contact">
                                        <p class="address add">1-19-19 Makiochi, Minoo City, Osaka</p>
                                        <p class="phone add">(81) 072 721 5108</p>
                                        <p class="email add"><a
                                                href="mailto:info@samsoin.co.jp">info@samsoin.co.jp</a></p>
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
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <!-- jQuery Local -->
    <script>
        window.jQuery || document.write('<script src="{{ asset('js/jquery-3.2.1.min.js') }}"><\/script>')
    </script>

    <!-- Popper min js -->
    <script src="{{ asset('Admin/js/number2.js') }}"></script>

    <script src="{{ asset('js/popper.min.js') }}"></script>
    <!-- Bootstrap min js  -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- nivo slider pack js  -->
    <script src="{{ asset('js/jquery.nivo.slider.pack.js') }}"></script>
    <!-- All plugins here -->
    <script src="{{ asset('js/plugins.js') }}"></script>
    <!-- Main js  -->
    <script src="{{ asset('js/main.js') }}"></script>

    <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    @livewireScripts
</body>

</html>
