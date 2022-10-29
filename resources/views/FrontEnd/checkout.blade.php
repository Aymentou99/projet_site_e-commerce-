<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Harosa || Checkout </title>
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
</head>

<!-- <body class="checkout-body-gb-color"> -->

<body class="body-bg">

    <!-- Body main wrapper -->
    <div class="wrapper home-one">

        <!-- HEADER -->
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

                                        @if (Route::has('login'))
                                            <a href="{{ url('login') }}"><i
                                                    class="first-icon fa fa-user-circle header-top-icon-color login-padding"></i>
                                                Login
                                            </a>
                                        @endif
                                        @if (Route::has('/register1'))
                                            <a href="{{ url('/register1') }}"><i
                                                    class="first-icon fa fa-user-circle header-top-icon-color login-padding"></i>
                                                Register
                                            </a>



                                            <a href="{{ url('/Logout') }}"><i
                                                    class="first-icon fa fa-user-circle header-top-icon-color login-padding"></i>
                                                Logout
                                            </a>
                                        @endif

                                    </div>

                                    <div class="switcher">

                                        <!-- language-menu -->
                                        <div class="language">

                                            <a class="inactiveLink unselectable" href="{{ url('/en') }}">
                                                <img src="{{ asset('images/icons/en.png') }}" alt="English">
                                                English
                                                <i class="ion-ios-arrow-down header-top-icon-color"></i>
                                            </a>

                                            <ul>
                                                <li>
                                                    <a href={{ url('/ja') }}>
                                                        <img src="{{ asset('images/icons/jp.png') }}" alt="日本語">
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

                        <div
                            class="header_logo col-left col-lg-2 col-xl-2 col-md-12 col-sm-12 justify-content-center align-self-center d-flex">

                            <a href="{{ url('/') }}">
                                <img src="{{ asset('images/logo/cp-logo.png') }}" alt="CP Logo">
                            </a>

                        </div>

                        <div class="col-right col-sm-12 col-lg-10 col-xl-10 col-md-12 display_top">

                            <!-- main-menu -->
                            <div class="main-menu">

                                <nav>

                                    <ul>
                                        <li><a href="{{ url('/') }}">Home</a></li>
                                        <li><a href="{{ url('shop') }}">Shop</a></li>
                                        <li><a href="{{ url('cp-idea') }}">CP Idea</a></li>
                                        <li><a href="{{ url('cp-about-us') }}">About Us</a></li>
                                        <li><a href="{{ url('cp-contact-us') }}">Contact</a></li>
                                        <li>
                                            <a href="{{ url('itservices') }}">Services</a>

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
                                            <li><a href="{{ url('/') }}">Home</a></li>
                                            <li><a href="{{ url('shop') }}">Shop</a></li>
                                            <li><a href="{{ url('cp-idea') }}">CP Idea</a></li>
                                            <li><a href="{{ url('cp-about-us') }}">About Us</a></li>
                                            <li><a href="{{ url('cp-contact-us') }}">Contact</a></li>
                                            <li>

                                                <a href="{{ url('itservices') }}">Services</a>

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


                                    @livewire('counter')


                                    <div class="body">

                                        <ul>


                                            @foreach ($cart as $item)
                                                <li>

                                                    <div class="right_block">
                                                        <span
                                                            class="product-name">{{ $item->products->{'name_' . app()->getLocale()} }}</span>

                                                        <a href="#" class="remove-from-cart"><i
                                                                class="fa fa-remove pull-xs-left"></i></a>
                                                        <div class="attributes_content">
                                                            <span><strong>qty</strong>:
                                                                {{ $item->prod_qty }}</span><br>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>


                                        <div class="checkout">
                                            <a href="{{ url('checkout') }}" class="btn btn-primary">checkout</a>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </header>


        <!-- CONTENT -->
        <div class="checkout-page-area">

            <!-- checkout area -->
            <div class="checkout-area ">

                <div class="container">


                    <form action="{{ url('place-order') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <!-- Personal Informations -->
                            <div class="col-lg-6 col-md-6">

                                <div class="checkbox-form">

                                    <h3>Personal Informations</h3>

                                    <div class="row">

                                        <!-- Country -->
                                        <div class="col-md-12">

                                            <div class="country-select mt-20 mb-20">

                                                <select name="country">
                                                    <option value="volvo" name="option">Bangladesh</option>
                                                    <option value="" disabled selected>Country</option>
                                                    <option value="saab">Algeria</option>
                                                    <option value="mercedes">Afghanistan</option>
                                                    <option value="audi">Ghana</option>
                                                    <option value="audi2">Albania</option>
                                                    <option value="audi3">Bahrain</option>
                                                    <option value="audi4">Colombia</option>
                                                    <option value="audi5">Dominican Republic</option>
                                                </select>

                                            </div>

                                        </div>

                                        <!-- First Name -->
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <input type="text" placeholder="First Name" name="fname" required>
                                            </div>
                                        </div>

                                        <!-- Last Name -->
                                        <div class="col-md-6">
                                            <div class="checkout-form-list mb-20">
                                                <input type="text" placeholder="Last Name" name="lname" required>
                                            </div>
                                        </div>

                                        <!-- Email -->
                                        <div class="col-md-6">
                                            <div class="checkout-form-list mb-20">
                                                <input type="email" placeholder="Email" name="email" required>
                                            </div>
                                        </div>

                                        <!-- Phone -->
                                        <div class="col-md-6">
                                            <div class="checkout-form-list mb-20">
                                                <input type="text" placeholder="Phone" name="phone" required>
                                            </div>
                                        </div>

                                        <!-- Address -->
                                        <div class="col-md-12">
                                            <div class="checkout-form-list mb-30">
                                                <input type="text" placeholder="Address" name="address" required>
                                            </div>
                                        </div>

                                        <!-- Additional notes -->
                                        <div class="col-md-12 order-notes mb-30">
                                            <div class="checkout-form-list">
                                                <textarea type="text" placeholder="Additional notes.." name="note"
                                                    required></textarea>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <!-- Shopping Cart -->
                            <div class="col-lg-6 col-md-6 your-order-bg-color">

                                <div class="your-order">

                                    <h3>Shopping Cart</h3>

                                    <div class="your-order-table table-responsive">

                                        <table>

                                            <thead>

                                                <tr>
                                                    <th class="product-name">Product</th>
                                                    <th class="product-total">Quantity</th>
                                                </tr>

                                            </thead>

                                            <tbody>
                                                @foreach ($cart as $item)
                                                    @if ($item->products->qty >= $item->prod_qty)
                                                        <tr class="cart_item">

                                                            <td class="product-name">
                                                                {{ $item->products->{'name_' . app()->getLocale()} }}
                                                            </td>
                                                            <td class="product-total">
                                                                <span class="amount"><strong
                                                                        class="product-quantity">1</strong>
                                                            <td>{{ $item->prod_qty }}</td></span>
                                                            </td>

                                                        </tr>
                                                    @endif
                                                @endforeach
                                            </tbody>

                                        </table>

                                    </div>

                                    <div class="payment-method">

                                        <div class="payment-accordion">

                                            <div class="order-button-payment mb-30">
                                                <input type="submit" value="Place order">
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

            <!-- Bottom Page -->
            <div id="bottom-page" class="row">
            </div>

        </div>


    </div>


    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <!-- jQuery Local -->
    <script>
        window.jQuery || document.write('<script src="{{ asset('js/jquery-3.2.1.min.js') }}"><\/script>')
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

    <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
