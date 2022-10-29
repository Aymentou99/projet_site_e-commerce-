<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home - CP</title>
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

    <!-- Products Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('products-carousel-assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('products-carousel-assets/css/carousel.css') }}">

    <!-- Animate On Scroll -->
    <link rel="stylesheet" href="{{ asset('aos-by-red.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />






    <link rel="stylesheet" href="{{ asset('FrontEnd/language-switcher-master/style.css') }}">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('FrontEnd/templatemo_546_sixteen_clothing/vendor/bootstrap/css/bootstrap.min.css') }}"
        rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Additional CSS Files -->

    @livewireStyles



</head>

<body>

    <div class="wrapper home-two">


        <!-- HEADER -->
        <!-- HEADER -->



        <header class="header-area" style="height: 152px; padding :0 ;">

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


                                    </div>

                                    @php $locale = session()->get('locale'); @endphp
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            @switch($locale)
                                                @case('en')
                                                    <img src="{{ asset('images/icons/en.png') }}" width="25px"> English
                                                @break

                                                @case('ja')
                                                    <img src="{{ asset('images/icons/jp.png') }}" width="25px"> japonais
                                                @break

                                                @default
                                                    <img src="{{ asset('images/icons/en.png') }}" width="25px"> English
                                            @endswitch
                                            <span class="caret"></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="lang/en"><img
                                                    src="{{ asset('images/icons/en.png') }}" width="25px">
                                                English</a>
                                            <a class="dropdown-item" href="lang/ja"><img
                                                    src="{{ asset('images/icons/jp.png') }}" width="25px">
                                                japonais</a>
                                        </div>
                                    </li>




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


                                        @if(Session::has('user'))
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown">{{ Session::get('user')['name'] }}</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="{{ url('logout') }}">
                                                            logout</a></li>

                                                </ul>
                                            </li>
                                        @else
                                            <a href="{{ url('login') }}"><i
                                                    class="first-icon fa fa-user-circle header-top-icon-color login-padding"></i>
                                                Login

                                            </a>
                                        @endif

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

                            <!-- Cart -->
                            <div class="blockcart cart-preview">

                                <div class="header">


                                    <a href="#">
                                        @livewire('counter')

                                    </a>



                                    <div class="body">


                                        @livewire('menu')

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </header>
        <!-- SLIDER -->
        <div class="slider-area">

            <div class="slider-inner">

                <div id="mainSlider" class="nivoSlider nivo-slider">
                    <img src="images/banner/banner-1.jpg" title="#htmlcaption1" />
                    <img src="images/banner/banner-2.jpg" title="#htmlcaption2" />

                </div>

                <!-- banner 1 -->
                <div id="htmlcaption1" class="nivo-html-caption slider-caption">

                    <div class="slider-progress"></div>

                    <div class="container">

                        <div class="row">

                            <div class="col-sm-12">

                                <div class="slider-content slider-content-2 slider-animated-2 pull-left">

                                    <p class="hp1">

                                        <span class="banner1-text-gradient">
                                            Because beauty should
                                        </span>

                                        <span class="banner1-text-gradient">
                                            <br>never be a compromise
                                        </span>

                                    </p>

                                    <h1 class="hone banner1-text2-font-size">

                                        <span class="banner1-text-gradient">
                                            OEM of original cosmetics
                                        </span>

                                        <span class="banner1-text-gradient">
                                            <br>and overseas cosmetics
                                        </span>

                                    </h1>

                                    <div class="button-1 hover-btn-2">
                                        <a href="{{ url('shops') }}">SHOP NOW</a>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- Scroll Down -->
                    <a href="#categories" data-toggle="tooltip" title="Scroll Down">
                        <div class="scroll-down"></div>
                    </a>

                </div>

                <!-- banner 2 -->
                <div id="htmlcaption2" class="nivo-html-caption slider-caption">

                    <div class="slider-progress"></div>

                    <div class="container">

                        <div class="row">

                            <div class="col-sm-12">

                                <div class="slider-content slider-content-2 slider-animated-2 pull-left">

                                    <p class="hp1">

                                        <span class="banner2-text-gradient banner2-text1-font-size">
                                            We know perfectly
                                        </span>

                                        <span class="banner2-text-gradient banner2-text1-font-size">
                                            <br>your needs
                                        </span>

                                    </p>

                                    <h1 class="hone banner2-h1">

                                        <span class="banner2-text-gradient banner2-text2-font-size">
                                            Join our BEAUTY SALONS
                                        </span>

                                    </h1>

                                    <div class="button-1 hover-btn-2"><a href="{{ url('shops') }}">SHOP NOW</a>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- Scroll Down -->
                    <a href="javascript:void(0)" onclick="location.href='#categories'" data-toggle="tooltip"
                        title="Scroll Down">
                        <div class="scroll-down"></div>
                    </a>

                </div>

            </div>

        </div>


        <!-- CATEGORIES Header -->
        <div id="categories" class="container">

            <div class="shop-section-title row centered">

                <div class="col col-12-desktop col-12-tablet col-6-mobile section-title-separator-hr">

                    <hr class="section-top-left-hr">
                    <h2 class="section-title-text text-center text-uppercase"> Categories </h2>
                    <hr class="section-top-right-hr">

                </div>

            </div>

        </div>
        <!-- CATEGORIES Content -->


        <div class="cats ">



            <div class="cats-container">

                <!-- Category 1: Facial Cleansing -->
                @foreach ($trending_Category as $item)
                    <div class="card">

                        <div class="face face1">

                            <div class="content">

                                <p class="description-list text-center category-description">

                                    {{ $item->{'description_' . app()->getLocale()} }}
                                </p>

                            </div>

                        </div>

                        <div class="face face2">

                            <a href="{{ url('shops') }}">
                                <h2 class="text-center">
                                    {{ $item->{'name_' . app()->getLocale()} }}
                                </h2>
                            </a>

                        </div>

                    </div>
                @endforeach



            </div>

        </div>


        <!-- PRODUCTS Header -->
        <div class="container">

            <div class="shop-section-title row centered">

                <div class="col col-12-desktop col-12-tablet col-6-mobile section-title-separator-hr">

                    <hr class="section-top-left-hr">
                    <h2 class="section-title-text text-center text-uppercase"> Products </h2>
                    <hr class="section-top-right-hr">

                </div>

            </div>

        </div>
        <!-- PRODUCTS Content -->
        <div class="products-container">

            <div class="container-fluid">

                <div id="carousel-example" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner row listbox-style" role="listbox">

                        <!-- CATEGORY #1 -->
                        <!-- Prod 1.1 -->
                        @foreach ($featured_products as $item)
                            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">

                                <div class="product-carousel-inner-center">

                                    <a type="no-decoration" external="false" linkappearance="false" target=""
                                        anchor="false" href="{{ url('shops') }}">

                                        <img src="{{ asset('Admin/images/Products/' . $item->image) }}"
                                            class="img-fluid mx-auto d-block bordering" alt="img1">

                                        <div class="product-description-section text-left">

                                            <div class="product-description-text product-description-name">
                                                {{ $item->{'name_' . app()->getLocale()} }}
                                            </div>
                                            <div class="product-description-text product-description-category">
                                                {{ $item->{'name_' . app()->getLocale()} }}</div>
                                            <div class="product-description-text product-description-stock-number">
                                                {{ $item->Stock_number }} </div>
                                            <div class="product-description-text product-description-volume"><span
                                                    class="business-use">{{ $item->{'Volume_' . app()->getLocale()} }}
                                                </span> </div>




                                    </a>

                                </div>

                            </div>
                        @endforeach









                    </div>

                    <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>

                    <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                </div>

            </div>

        </div>


        <!-- INFORMATIONS Header -->
        <div class="d-none container">

            <div class="shop-section-title row centered">

                <div class="col col-12-desktop col-12-tablet col-6-mobile section-title-separator-hr">

                    <hr class="section-top-left-hr">
                    <h2 class="section-title-text text-center text-uppercase"> Title here </h2>
                    <hr class="section-top-right-hr">

                </div>

            </div>

        </div>
        <!-- INFORMATIONS Content -->
        <!-- Contact -->
        <div id="parent">

            <div id="child-right">

                <div class="child-right-content">

                    <h2 class="text-center text-light contact-section-header">Where and How to buy?</h2>

                    <p class="text-center text-light contact-section-p">

                        If you are looking for

                        <span class="text-light font-weight-bold text-inbetween">
                            proposals for beauty and health
                        </span>
                        <br>
                        that will please our customers,<br>please feel free to contact us.

                    </p>

                    <div class="center-button">

                        <button type="button" class="button icon-container contact-us-button lock"
                            onclick="location.href='cp-contact-us.html#form'">
                            <i class="fa fa-envelope contact-icon-font-size" aria-hidden="true"></i>
                            <i class="fa fa-envelope-open contact-icon-font-size" aria-hidden="true"></i>
                            <span class="contact-button-text">Contact us</span>
                        </button>

                    </div>

                </div>

            </div>

        </div>
        <!-- General -->
        <div id="general" class="row">

            <div class="col-md-6 section-color" data-aos="fade" data-aos-duration="2000" data-aos-once="true">

                <div class="m-40">

                    <h2 class="text-left font-weight-bold home-general-header">For Those Who Want To Make Original
                        Cosmetics</h2>

                    <p class="text-left home-general-p ">
                        At Samsoin Cosmetics, we do not only develop,
                        <br>manufacture and sell our own cosmetics,
                        <br>but also carry out OEM/ODM production
                        <br>that gives shape to customer feedback.
                        <br><br>
                        We can manufacture products not only for domestic use
                        <br>but also for overseas use.
                    </p>

                    <button type="button" class="btn btn-outline-info float-left read-more-button"
                        onclick="location.href='cp-idea.html#oem'">
                        Read More
                    </button>

                </div>
            </div>

            <div class="home-general-img-bg col-md-6" data-aos="fade" data-aos-duration="2000" data-aos-once="true">
            </div>

        </div>
        <!-- Beauty -->
        <div id="beauty" class="row">

            <div class="img-bg col-md-6" data-aos="fade" data-aos-duration="2000" data-aos-once="true"></div>

            <div class="col-md-6 section-color" data-aos="fade" data-aos-duration="2000" data-aos-once="true">

                <div class="m-40">

                    <h2 class="text-left font-weight-bold our-thoughts-section-header">Beauty, health and healing for
                        all our customers</h2>
                    <p class="text-left our-thoughts-section-p">
                        The "beauty and health" of our customers, and the "healing"
                        <br>that results from comfort and results are the most important things
                        <br>for Samsoin cosmetics.
                        <br><br>
                        To that end, we not only make cosmetics that are reasonably priced
                        <br>and can experience the effects firmly, but we are also enhancing
                        <br>salon store education and expanding the circle of salons.
                    </p>

                    <button type="button" class="btn btn-outline-info float-left our-thoughts-button"
                        onclick="location.href='cp-idea.html#thoughts'">
                        Our Thoughts
                    </button>

                </div>

            </div>

        </div>
        <!-- Company -->
        <div id="company" class="row">

            <div class="col-md-6 section-color" data-aos="fade" data-aos-duration="2000" data-aos-once="true">

                <div class="m-40">

                    <h2 class="text-left font-weight-bold company-section-header">Company Profile</h2>
                    <p class="text-left company-section-p">
                        This is the company profile of Samsoin Cosmetics.
                        <br>
                        Please have a look at the greetings from our representatives.
                        <br><br>
                        <!-- TODO -->
                        <span style="color: grey;">
                            It is a long established fact that a reader will be distracted
                            <br>by the readable content of a page when looking at its layout.
                            <br>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
                            letters..
                        </span>

                    </p>

                    <button type="button" class="btn btn-outline-info float-left read-more-button"
                        onclick="location.href='cp-about-us.html'">
                        Read More
                    </button>

                </div>

            </div>

            <div class="company-img-bg col-md-6" data-aos="fade" data-aos-duration="2000" data-aos-once="true"></div>

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
                                            <li><a href="{{ url('cp-idea') }}">CP Idea</a></li>
                                            <li><a href="{{ url('cp-contact-us.html#privacyPolicy') }}">Privacy
                                                    Policy</a></li>
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
                                            <li><a href="{{ url('cp-services#AIS') }}">Artificial Intelligence</a>
                                            </li>
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
        window.jQuery || document.write('<script src="js/jquery-3.2.1.min.js"><\/script>')
    </script>

    <!-- Popper min js -->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <!-- Bootstrap min js  -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- nivo slider pack js  -->
    <script src="{{ asset('js/jquery.nivo.slider.pack.js') }}"></script>
    <!-- All plugins here -->
    <script src="{{ asset('js/plugins.js') }}"></script>
    <!-- Main js  -->
    <script src="{{ asset('js/main.js') }}"></script>

    <!-- Products Carousel Javascript -->
    <script src="{{ asset('products-carousel-assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('products-carousel-assets/js/jquery-migrate-3.0.0.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script> -->
    <script src="{{ asset('products-carousel-assets/js/jquery.backstretch.min.js') }}"></script>
    <script src="{{ asset('products-carousel-assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('products-carousel-assets/js/scripts.js') }}"></script>

    <!-- Animate On Scroll -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 3000,
            once: true,
        });
    </script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>





    <script language="text/Javascript">
        cleared[0] = cleared[1] = cleared[2] = 0;

        function clearField(t) {
            if (!cleared[t.id]) {
                cleared[t.id] = 1;
                t.value = '';
                t.style.color = '#fff';
            }
        }
    </script>
    @livewireScripts
</body>

</html>
