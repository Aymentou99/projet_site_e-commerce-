<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Contact - CP </title>
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
        <div class="wrapper home-one">


            <header class="header-area" >

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
                                            <a href="{{url('login')}}"><i class="first-icon fa fa-user-circle header-top-icon-color login-padding"></i>
                                                Login


@else




  <a href="{{url('/Logout')}}"><i class="first-icon fa fa-user-circle header-top-icon-color login-padding"></i>
                                                Logout
                                            </a>
                                                                                       </a>
      @endif
                     @endguest

                                        </div>

                                        <div class="switcher">

                                            <!-- language-menu -->
                                            <div class="language">
@foreach($available_locales as $locale_name => $available_locale)
        @if($available_locale === $current_locale)
                                                <a class="inactiveLink unselectable"  href="language/{{ $available_locale }}">
                                                    <img src="{{asset('images/icons/en.png')}}" alt="English">
                                                    English
                                                    <i class="ion-ios-arrow-down header-top-icon-color"></i>
                                                </a>
 @else
                                                <ul>
                                                    <li>
                                                        <a class=" " href="language/{{ $available_locale }}">
                                                            <img src="images/icons/jp.png" alt="日本語" >
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

                            <div class="header_logo col-left col-lg-2 col-xl-2 col-md-12 col-sm-12 justify-content-center align-self-center d-flex">


                            </div>

                            <div class="col-right col-sm-12 col-lg-10 col-xl-10 col-md-12 display_top">

                                <!-- main-menu -->
                                <div class="main-menu">

                                    <nav>

                                        <ul>

                                            <li> <a href="{{asset('/')}}">
                                    <img src="images/logo/cp-logo.png" alt="CP Logo">
                                </a></li>
                                            <li><a href="{{url('/')}}">Home</a></li>
                                            <li class="current"><a href="{{url('shops')}}">Shop</a></li>
                                            <li><a href="{{url('cp-idea')}}">CP Idea</a></li>
                                            <li><a href="{{url('cp-about-us')}}">About Us</a></li>
                                            <li><a href="{{url('p-contact-us')}}">Contact</a></li>
                                            <li>
                                                <a href="{{url('itser')}}">Services</a>

                                                <div class="services-sticker">
                                                    <span class="unselectable unselectable-services-sticker">New!</span>
                                                </div>

                                            </li>



           <div class="blockcart cart-preview">

                                    <div class="header">

                                        <a href="#">
                                            <i class="fa fa-shopping-basket"></i>
                                            <span class="item_txt"> Cart <span class="item_count">{{$count}}</span></span>
                                            <!-- - <span class="item_total">$57.99</span> -->
                                        </a>

                                        <div class="body">



     @livewire('menu', ['cart ' => $cart ])

                                    </nav>

                                </div>

                                <!-- mobile main menu -->
                                <div class="mobile-menu-area">

                                    <div class="mobile-menu">

                                        <nav id="mobile-menu-active">

                                            <ul class="menu-overflow">
                                                <li><a href="{{url('/')}}">Home</a></li>
                                                <li class="current"><a href="{{url('shop')}}">Shop</a></li>
                                                <li><a href="{{url('cp-idea')}}">CP Idea</a></li>
                                                <li><a href="{{url('cp-about-us')}}">About Us</a></li>
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


                            </div>

                        </div>

                    </div>

                </div>

            </header>

            <!-- Slider -->
            <div class="slider-area">

				<div class="slider-inner">

					<div id="monoSlider" class="nivoSlider nevo-slider">
						<img src="{{asset('images/contact/contact_banner.jpg')}}" alt="contact slider" title="#htmlcaption1"/>
					</div>

					<div id="htmlcaption1" class="nivo-html-caption slider-caption">

						<div class="slider-progress"></div>

						<div class="container">

							<div class="row">

								<div class="col-md-12">

									<div class="col-sm-12">

										<div class="slider-content slider-content-1 slider-animated-1 pull-right">
											<p class="hp1 contact-slider-hp1">How can we help you?</p>
											<h1 class="hone contact-slider-hone">Let's Get The Conversation Started</h1>
										</div>

									</div>

								</div>

							</div>

						</div>

                        <!-- Scroll Down -->
                        <a href="#form" data-toggle="tooltip" title="Scroll Down">
                            <div class="contact-page-scroll-down"></div>
                        </a>

					</div>

				</div>

            </div>


            <!-- Content -->
            <div class="contact-page-area">

                <div class="contact-form-area">

                    <div class="container">

                        <div class="row">

                            <!-- Contact us -->
                            <div id="form" class="col-sm-12 col-md-12 col-lg-6 col-xs-12">

                                <div class="contact-form-inner">

                                    <h2>Contact us</h2>

                                    <p class="mb-6">
                                        Please be sure to read the <a href="#privacyPolicy" class="text-monospace">Privacy Policy</a> firstly. <br>
                                        If you agree with the contents, please fill in the required items in the form below and click the "Enter confirmation screen" button.<br>
                                        <span class="text-muted font-size-12">
                                            Depending on the content of your inquiry, your reply may be delayed. note that.
                                        </span>
                                    </p>

                                    <form action="mail.php" method="get">

                                        <div class="row">

                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="First name*" required>
                                            </div>

                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="Last name*" required>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="Email*" required>
                                            </div>

                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="Phone*" required>
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="Company Name*" required>
                                            </div>

                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="Subject*" required>
                                            </div>

                                            <!--
                                                <div class="col">
                                                    <div class="dropdown">
                                                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            About cosmetics transactions
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="javascript:void(0)">About cosmetics transactions</a>
                                                        <a class="dropdown-item" href="javascript:void(0)">About overseas cosmetics OEM/ODM</a>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown mt-1 mb-1">
                                                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            About salon opening
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="javascript:void(0)">About salon opening</a>
                                                        <a class="dropdown-item" href="javascript:void(0)">About training seminars</a>
                                                        <a class="dropdown-item" href="javascript:void(0)">Consultation</a>
                                                        </div>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Others">
                                                </div>
                                            -->

                                        </div>

                                        <div class="row">

                                            <div class="col">

                                                <textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true"
                                                    aria-invalid="false" placeholder="Message *" required></textarea>

                                            </div>

                                        </div>

                                        <div class="form-check mt-20">

                                            <input type="checkbox" class="form-check-input" id="check">
                                            <label class="form-check-label" for="check">I Agree to Privacy Policy</label>

                                        </div>

                                        <div class="contact-submit">
                                            <input type="submit" id="btncheck" value="Send Email" class="wpcf7-form-control wpcf7-submit button btn-disabled">
                                        </div>

                                    </form>

                                </div>

                            </div>

                            <!-- Get in touch -->
                            <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">

                                <div class="contact-address-area">

                                    <h2>Get in touch</h2>

                                    <p>
                                        We will continue to pursue the beauty and health of everyone. Please feel free to contact us if you have any questions about cosmetics, wish to participate in training / seminars, or have any questions about original cosmetics planning.
                                    </p>

                                    <ul>
                                        <li>
                                            <i class="fa fa-map-marker">&nbsp;</i> 1-19-19 Makiochi, Minoo City, Osaka
                                        </li>
                                        <li>
                                            <i class="fa fa-phone">&nbsp;</i>(81) 072 721 5108
                                        </li>
                                        <li>
                                            <i class="fa fa-fax">&nbsp;</i>(81) 072 721 5107
                                        </li>
                                        <li class="pb-5">
                                            <i class="fa fa-envelope-o"></i>&nbsp;</i>info@samsoin.co.jp
                                        </li>
                                    </ul>

                                </div>

                            </div>

                        </div>

                        <!-- Privacy Policy -->
                        <section id="privacyPolicy" class="text-center pt-0 mt-5">

                            <!-- Heading -->
                            <h2 class="privacy-policy-header">Privacy Policy</h2>
                            <img src="{{asset('images/contact/privacy-policy.png')}}" width="40" height="40">

                            <!-- Text -->
                            <div class="row">

                                <div class="single-blog page-content blog-page blog-sidebar right-sidebar">

                                    <article class="text-center">

                                            <div class="postinfo-wrapper">

                                                <blockquote>

                                                    <p class="text-muted mb-5">
                                                        When operating this site, we respect the privacy of our customers, give due consideration
                                                        to personal information, carefully protect it, and strive to manage it appropriately.
                                                    </p>

                                                    <h4 class="mb-2 mt-0 text_black">Purpose of using personal information</h4>
                                                    <p class="mb-0 text-muted">a- Various contacts to provide services that meet the needs of our customers.</p>
                                                    <p class="mb-30 text-muted">b- Contact us with answers to your inquiries.</p>

                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">The acquired personal information will not be used for any purpose other than the purpose without the consent of the individual</li>
                                                        <li class="list-group-item">We take measures to prevent information leakage and supervise not only employees but also contractors</li>
                                                        <li class="list-group-item">We will not provide information to third parties without the consent of the individual</li>
                                                        <li class="list-group-item">We will disclose information at the request of the person</li>
                                                        <li class="list-group-item">If the disclosed personal information is not true, we will correct or delete it</li>
                                                        <li class="list-group-item">We will respond appropriately and promptly to complaints regarding the handling of personal information</li>
                                                    </ul>

                                                </blockquote>

                                            </div>

                                    </article>

                                </div>

                            </div>

                        </section>

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
                                                <li><a href="{{url('cp-about-us')}}">About us</a></li>
                                                <li><a href="{{url('cp-idea')}}">CP Idea</a></li>
                                                <li><a href="{{url('cp-contact-us')}}">Privacy Policy</a></li>
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
                                                <li><a href="{{url('cp-services#DEV')}}">Software Development</a></li>
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
