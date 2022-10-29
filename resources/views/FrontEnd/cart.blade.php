<!doctype html>

<html class="no-js" lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Harosa || Cart </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/logo/cp-logo.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css-plugins-call.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/colors.css') }}">
    @livewireStyles
</head>

<body class="body-bg">



    <div class="wrapper home-one">

        <!-- Breadcrumb -->
        <div class="top_breadcrumb">

            <div class="breadcrumb_container ">

                <div class="container">

                    <nav data-depth="3" class="breadcrumb">

                        <ol>

                            <li>
                                <a href="{{ url('/') }}">
                                    <span>Home</span>
                                </a>
                            </li>

                            <li>
                                <a href="" class="inactiveLink">
                                    <span>Shopping Cart</span>
                                </a>
                            </li>

                        </ol>

                    </nav>

                </div>

            </div>

        </div>


        <!-- Content -->
        <div class="cart-page-area">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <!-- Table -->
                        <div class="table-content table-responsive mb-0">

                            <table>

                                <thead>

                                    <tr>
                                        <th class="product-thumbnail">Image</th>
                                        <th class="product-name">Product</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @livewire('carts')
                                </tbody>
                            </table>

                        </div>


                        <div class="row">
                            <div class="col-sm-12 text-right">
                                <div id="btnSearch" class="continue-shopping">
                                    <a href="{{ url('shops') }}">Continue Shopping</a>
                                </div>

                                <div id="btnClear" class="wc-proceed-to-checkout">
                                    <a href="{{ url('checkout') }}">Proceed to Checkout</a>
                                </div>

                            </div>
                        </div>


                        <!-- Buttons -->
                        <div class="d-none row">

                            <div class="col-xs-6 mr-3">
                                <div class="wc-proceed-to-checkout">
                                    <a href="{{ url('shops') }}">Continue Shopping</a>
                                </div>
                            </div>

                            <div class="col-xs-6" style="">
                                <div class="wc-proceed-to-checkout">
                                    <a href="{{ url('checkout') }}">Proceed to Checkout</a>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    @livewireScripts
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

</body>

</html>
