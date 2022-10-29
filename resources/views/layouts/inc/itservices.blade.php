<!DOCTYPE html>
<html lang="en">

<head>

    <!-- important meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>IT Services</title>

    <!-- Basic SEO -->
    <meta name="description" content="">
    <meta name="keywords"
        content="AI, IoT, DEV,
                Android, mobile, iOS, web development, desktop applications, software development,
                AI automation, AI Data analytics, AI Consulting
                PCB Design, Embedded System Development, Wireless Technologies">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('images/it/img/logo/favicon.ico')}}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{asset('css/it/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/it/bootstrap/bootstrap.min.css')}}">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{asset('css/it/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/it/owl-carousel/owl.theme.default.min.css')}}">

    <!-- Responsive Tabs CSS -->
    <link rel="stylesheet" href="{{asset('css/it/responsive-tabs/responsive-tabs.min.css')}}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('css/it/magnific-popup/magnific-popup.min.css')}}">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('css/it/animate/animate.min.css')}}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/it/style.css')}}">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('css/it/responsive.css')}}">

</head>

<body >

    <!-- Header -->
    <header>
        <div class="custom-navbar">

            <nav class="navbar white-nav-top">

                <div class="container-fluid">

                    <div class="site-nav-wrapper">
                        <div  class="contain">
                            <div class="navbar-header" style="flex:5;">

                                <!-- Mobile Menu Open Button -->
                                <span id="mobile-nav-open-btn" style="padding: 18px;">&#9776;</span>

                                <a href="{{url('/')}}">
                                    <img src="{{asset('images/logo/cp-logo.png')}}" alt="CP Logo">
                                </a>


                            </div>

                            <!-- Main Menu -->
                            <div class="container" style="flex:1;">
                                <div class="collapse navbar-collapse">
                                    <div class="cc">
                                        <ul class="nav navbar-nav pull-right">
                                            <li>
                                                <a style="white-space: pre;" href="{{url('/')}}" id="home">Home</a>
                                            </li>
                                        </ul>

                                        <div class="dropdown">

                                            <a class="en dropbtn inactiveLink"  id="res">EN</a>

                                            <div class="dropdown-content">
                                                <a href="" id="jp" class="de">
                                                    <img src="{{asset('images/icons/jp.png')}}" alt="日本語">
                                                    <span>日本語</span>
                                                </a>
                                                <a href="" class="en" id="eng">
                                                    <img src="{{asset('images/icons/en.png')}}" alt="English">
                                                    <span>English</span>
                                                </a>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <!-- Mobile Menu -->
                        <div id="mobile-nav">

                            <!-- Mobile Menu Close Button -->
                            <span id="mobile-nav-close-btn">&times;</span>

                            <div id="mobile-nav-content">
                                <ul class="nav">
                                    <li><a class="smooth-scroll" href="#home" id="homes">Home</a></li>
                                    <li><a class="smooth-scroll" href="#" id="jpp">JP</a></li>
                                    <li><a class="smooth-scroll" href="#" id="enss">EN</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

            </nav>

        </div>

    </header>


    <nav class="navmenuk">
        <ul>
            <li><a class="group-sec" href="#group-sec" class="smooth-scroll" id="se">Services</a></li>
            <li><a class="webc" href="#webc" class="smooth-scroll" id="io">IoT</a></li>
            <li><a class="DEV" href="#DEV" class="smooth-scroll" id="dev">Dev</a></li>
            <li><a class="AIS" href="#AIS" class="smooth-scroll" id="ai">AI</a></li>
        </ul>
    </nav>

    <section class="cards-section" id="group-sec"  data="group-sec">

        <header class="cards-header">
            <img id="gr-image" src="{{asset('images/it/group-section2.png')}}" alt="Group Section" class="gr-image-group">
        </header>

        <div class="box-c">
            <header>
                <h3><a href="#webc">IoT</a></h3>
            </header>

            <header>
                <h3><a href="#DEV">Dev</a></h3>
            </header>

            <header>
                <h3><a href="#AIS">AI</a></h3>
            </header>
        </div>

        <div class="cards">
            <!-- changed: rename pp to iot-bg-card, in style.css also. add </br> in p tag -->

            <div class="card iot-bg-card wow fadeIn" data-wow-duration="3s">
                <div class="black">
                    <!-- <p class="number position1">1</p> -->

                    <p class="position" id="par1">
                        Develop an efficient IoT solution for</br> your enterprise
                    </p>

                    <p class="button-explore position2 has-outline pos ">
                        <a href="#webc">
                            <img src="{{asset('images/it/group_section/icons/iot-icon-white.png')}}">
                            <span id="explore1">
                                Explore
                            </span>
                        </a>
                    </p>
                </div>
            </div>

            <!-- changed: rename pp to dev-bg-card, in style.css also. add </br> in p tag -->
            <div class="card dev-bg-card wow fadeIn" data-wow-duration="3s">
                <div class="black">
                    <!-- <p class="number position1">2</p> -->

                    <p class="position" id="par2">
                        Create responsive software/website</br> to grow your business online
                    </p>

                    <p class="button-explore position2 has-outline pos ">
                        <a href="#DEV">
                            <img src="{{asset('iimages/it/group_section/icons/dev-icon-white.png')}}">
                            <span id="explore2">
                                Explore
                            </span>
                        </a>
                    </p>
                </div>

            </div>

            <!-- changed: rename pp to ai-bg-card, in style.css also -->
            <div class="card ai-bg-card wow fadeIn" data-wow-duration="3s">
                <div class="black">
                    <!-- <p class="number position1">3</p> -->

                    <!-- Added: padding to center paragraph -->
                    <p class="position" id="par3" style="padding: 1.5rem;">
                        Automate your business with AI
                    </p>

                    <p class="button-explore position2 has-outline pos ">
                        <a href="#AIS">
                            <img src="{{asset('images/it/group_section/icons/ai-icon-white.png')}}">
                            <span id="explore3">
                                Explore
                            </span>
                        </a>
                    </p>
                </div>
            </div>
        </div>

    </section>

    <section class="app iot-back" data="webc" id="webc" >

        <div class="cards-im">

            <div class="card-im1 iot-card wow fadeIn" data-wow-duration="3s">
                <div class="overlay1">
                    <div class="ggg" >
                        <h2 id="head1">
                            Embedded System Development
                        </h2>

                        <p id="par1-head1">
                            FPGA/MCU/DSP development, RF Design, and Test &amp; Measurement.
                            <a href="#home-start" class="smooth-scroll" style="text-transform: capitalize;text-align: center; color: #01caff;">
                                More >>
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="card-im1 iot-card  active  wow fadeIn" data-wow-duration="3s">

                <div class="overlay1">

                    <div class="ggg ">
                        <h2 id="head2">
                            Wireless Technologies
                        </h2>

                        <p id="par2-head2">
                            PoC and prototyping of IoT, LTE/4G, 5G solutions.
                            <a href="#home2g" class="smooth-scroll" style="text-transform: capitalize;text-align: center;color: #01caff;">
                                More >>
                            </a>
                        </p>
                    </div>


                </div>
            </div>


            <div class="card-im1 iot-card wow fadeIn" data-wow-duration="3s">
                <div class="overlay1">

                    <div class="ggg">
                        <h2 id="head3">
                            PCB Design
                        </h2>

                        <p id="par3-head3">
                            Design idea, block diagram, power estimate, Schematic capture, and BOM cost estimate.
                            <a href="#home3g" class="smooth-scroll" style="text-transform: capitalize;text-align: center; color: #01caff;">
                                More >>
                            </a>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="services " data="webc">

        <div id="home-start">

            <!-- Services 01 -->
            <div id="services-01">

                <div class="content-box-lg">

                    <div class="container">

                        <!-- Service 01 Header -->
                        <div class="row">
                            <div class="col-md-12 text-center wow fadeIn" data-wow-duration="3s">
                                <div class="horizontal-heading" id="head1_1">
                                    <h2>Embedded System Development</h2>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-duration="3s" style="margin-top:-36px;">
                                <img src=" {{asset('images/it/iot/embedded_systems_development/embedded-system-image.jpg')}} "alt="laptop"
                                    class="img-responsive" style="width: 90%;height: 90%;margin-left: 30px;border-radius: 0.6rem;
                                        box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.1), 0px 20px 20px rgba(0, 0, 0, 0.1);">
                            </div>

                            <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-duration="3s">

                                <!-- Service 01 -->
                                <div class="service" style="margin-top: 28px; ">

                                    <div class="row">

                                        <div class="col-md-2 col-sm-2" >
                                            <div class="icon text-right">
                                                <img src="{{asset('images/it/iot/embedded_systems_development/embedded-system-icon-2.png')}}"
                                                    alt="laptop" class="resp-image">
                                            </div>
                                        </div>

                                        <div class="col-md-10 col-sm-10">
                                            <h4 id="h_service1"> We Help You Build Your Embedded System</h4>
                                            <p id="p_service1" > Our goal is to provide highly technical resources to
                                                help companies with their embedded system problems and design requirements.</p>
                                        </div>

                                    </div>
                                </div>

                                <!-- Service 02 -->
                                <div class="service" style="margin-top: 0px;">
                                    <div class="row">

                                        <div class="col-md-2 col-sm-2">
                                            <div class="icon text-right">
                                                <img src="{{asset('images/it/iot/embedded_systems_development/our-services-icon.png')}}"
                                                    alt="laptop" class="resp-image">
                                            </div>
                                        </div>

                                        <div class="col-md-10 col-sm-10">
                                            <!-- <h5>Service 02</h5> -->
                                            <h4 id="h_service2">Our Services</h4>
                                            <p id="p_service2"> We have solid expertise in both hardware and software
                                                design. <br><br>
                                                We have participated in projects involving FPGA/MCU/DSP development, RF
                                                Design, and Test &amp; Measurement.
                                            </p>
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

    <section id="services " data="webc">

        <div id="home-start2">

            <!-- Services 01 -->
            <div id="services-01">

                <div class="content-box-lg" id="home2g">

                    <div class="container">

                        <!-- Service 01 Header -->
                        <div class="row">

                            <div class="col-md-12 text-center wow fadeIn data-wow-duration="3s"">
                                <div class="horizontal-heading" id="head1_2">
                                    <h2>Wireless Technologies</h2>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-duration="3s">

                                <!-- Service 01 -->
                                <div class="service" style="margin-top: -7px;">

                                    <div class="row">

                                        <div class="col-md-2 col-sm-2">

                                            <div class="icon text-right">
                                                <img src="{{asset('images/it/iot/wireless_technologies/wireless-technologies-icon.png')}}"
                                                    alt="laptop" class="resp-image">
                                            </div>

                                        </div>

                                        <div class="col-md-10 col-sm-10">

                                            <h4 id="h_service3">Intelligent Solutions</h4>
                                            <p id="p_service3">We provide innovative solutions for businesses looking
                                                to create a complete software ecosystem for novel connected
                                                devices and sensors.
                                            </p>

                                        </div>

                                    </div>

                                </div>

                                <!-- Service 02 -->
                                <div class="service" style="margin-top: 0px;">

                                    <div class="row">

                                        <div class="col-md-2 col-sm-2">

                                            <div class="icon text-right">

                                                <img src="{{asset('images/it/iot/wireless_technologies/our-services-icon.png')}}" alt="laptop" class="resp-image">
                                            </div>

                                        </div>

                                        <div class="col-md-10 col-sm-10">

                                            <h4 id="h_service4">Our Services</h4>

                                            <p id="p_service4"> We craft "proof of concepts" and prototypes of custom
                                                intelligent devices to help you verify your ideas before moving
                                                to the development phase.<br><br>Moreover, we have expertise in communication
                                                technologies, e.g., LTE/4G, 5G solutions.
                                            </p>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-duration="3s" style="margin-top: -10px;">
                                <img src="{{asset('images/it/iot/wireless_technologies/wireless-technologies-image.jpg')}}" alt="laptop"
                                     class="img-responsive" style="width: 90%;height: 90%;border-radius: 0.6rem;
                                        box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.1), 0px 20px 20px rgba(0, 0, 0, 0.1);margin-top: -10px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Services 01 Ends -->
        </div>
    </section>

    <section id="services " data="webc">
        <div id="home-start3">
            <!-- Services 01 -->
            <div id="services-01">
                <div class="content-box-lg" id="home3g">
                    <div class="container">
                        <!-- Service 01 Header -->
                        <div class="row">
                            <div class="col-md-12 text-center wow fadeIn" data-wow-duration="3s">
                                <div class="horizontal-heading" id="head1_3">
                                    <h2>PCB Design</h2>
                                </div>
                            </div>
                        </div>
                        <!-- Service 01 Header Ends-->

                        <div class="row">
                            <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-duration="3s">
                                <img src="{{asset('images/it/iot/pcb_design/pcb-design-image.jpg')}}" alt="laptop"
                                style="width: 90%;height: 90%;margin-left: 30px;border-radius: 0.6rem;
                                    box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.1), 0px 20px 20px rgba(0, 0, 0, 0.1); margin-top: -10px;"
                                    class="img-responsive">
                            </div>

                            <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-duration="3s">
                                <!-- Service 01 -->
                                <div class="service" style="margin-top: -7px;">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-2">
                                            <div class="icon text-right">
                                                <img src="{{asset('images/it/iot/pcb_design/pcb-design-icon.png')}} " alt="laptop"
                                               class="resp-image">
                                            </div>
                                        </div>

                                        <div class="col-md-10 col-sm-10">
                                            <!-- <h5>Service 01</h5> -->
                                            <h4 id="h_service5"> Design &amp; Manufacturing</h4>
                                            <p id="p_service5"> Our IoT development company will help you transform
                                                your idea into a functioning PCB system.<br><br>
                                                We have expertise in schematic capture and PCB Layout.
                                            </p>
                                        </div>

                                    </div>
                                </div>

                                <!-- Service 02 -->
                                <div class="service" style="margin-top:-7px">
                                    <div class="row">

                                        <div class="col-md-2 col-sm-2">
                                            <div class="icon text-right">
                                                <img src="{{asset('images/it/iot/pcb_design/our-services-icon.png')}}" alt="laptop"
                                             class="resp-image">
                                            </div>
                                        </div>
                                        <div class="col-md-10 col-sm-10">
                                            <!-- <h5>Service 02</h5> -->
                                            <h4 id="h_service6">Our Services</h4>
                                            <p id="p_service6"> We provide a range of PCB Services. We have expertise
                                                in crafting efficient PCB that meets all your requirements and
                                                designs.
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Services 01 Ends -->

            <!-- Services 02 -->
        </div>
    </section>

    <section class="app imagedv" data="DEV" id="DEV">
        <div class="cards-im">
            <div class="card-im1 card-imgdev wow fadeIn" data-wow-duration="3s">
                <div class="overlay1">
                    <div class="ggg ">
                        <h2 id="par-dev-h1">
                            Websites
                        </h2>

                        <p id="par-dev-1">
                            We build sites that work for your business and your users. Be it a complex
                            intranet platform, a progressive web app, or a marketing website
                            <a href="#dd" class="smooth-scroll" style="text-transform: capitalize;text-align: center; color: #01caff;">
                                More >>
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="card-im1 card-imgdev active wow fadeIn" data-wow-duration="3s">
                <div class="overlay1">
                    <div class="ggg ">
                        <h2 id="par-dev-h2">
                            Desktop Applications
                        </h2>

                        <p id="par-dev-2">We develop software that helps you scale your business
                            <a href="#desk" class="smooth-scroll" style="text-transform: capitalize;text-align: center; color: #01caff;">
                                More >>
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="card-im1 card-imgdev wow fadeIn" data-wow-duration="3s">
                <div class="overlay1">
                    <div class="ggg ">
                        <h2 id="par-dev-h3">
                            Android &amp; iOS Applications
                        </h2>

                        <p id="par-dev-3">
                            With expertise in native and hybrid mobile development, we help you connect
                            with your users wherever they are.
                            <a href="#Android" class="smooth-scroll" style="text-transform: capitalize;text-align: center; color: #01caff;">
                                More >>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services " data="DEV">

        <!-- Services 01 -->
        <div id="services-01">
            <div class="content-box-lg " id="dd">
                <div class="container">
                    <!-- Service 01 Header -->
                    <div class="row">
                        <div class="col-md-12 text-center wow fadeIn" data-wow-duration="3s">
                            <div class="horizontal-heading" id="ser-l1">
                                <h2>Websites</h2>
                            </div>
                        </div>
                    </div>
                    <!-- Service 01 Header Ends-->

                    <div class="row">
                        <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-duration="3s">
                            <img src="{{asset('images/it/dev/websites/websites-image.jpg')}}" alt="laptop"
                            class="img-responsive" style="width: 90%;height: 90%;margin-left: 30px;border-radius: 0.6rem;
                                box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.1), 0px 20px 20px rgba(0, 0, 0, 0.1);
                             margin-top: -10px;
                                ">
                        </div>
                        <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-duration="3s">

                            <!-- Service 01 -->
                            <div class="service" style="margin-top: -7px;">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2">
                                        <div class="icon text-right">
                                            <img src="{{asset('images/it/dev/websites/websites-icon.png')}}" alt="laptop"
                                          class="resp-image">
                                        </div>
                                    </div>

                                    <div class="col-md-10 col-sm-10">
                                        <!-- <h5>Service 01</h5> -->
                                        <h4 id="h-s-1">Web Development</h4>
                                        <p id="p-s-1">Leverage advanced web development technologies, we
                                            bring front-end, back-end, and architecture together
                                            to meet your business needs.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Service 02 -->
                            <div class="service" style="margin-top: 0px;">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2">
                                        <div class="icon text-right">
                                            <img src="{{asset('images/it/dev/websites/our-services-icon.png')}}" alt="laptop"
                                         class="resp-image">
                                        </div>
                                    </div>

                                    <div class="col-md-10 col-sm-10">
                                        <!-- <h5>Service 02</h5> -->
                                        <h4 id="h-s-2">Our Services</h4>
                                        <p id="p-s-2"> We design and create websites that help you grow your business.
                                            <br><br>
                                            Whether it’s a complex enterprise platform
                                            and data storage, a responsive web app, or an e-commerce site, our solutions
                                            work smoothly and deliver the best user
                                            experience that reflects your business values.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services 01 Ends -->
    </section>

    <section id="services" data="DEV">
        <div id="desk">
            <!-- Services 01 -->
            <div id="services-01">
                <div class="content-box-lg" >
                    <div class="container">
                        <!-- Service 01 Header -->
                        <div class="row">
                            <div class="col-md-12 text-center wow fadeIn" data-wow-duration="3s">
                                <div class="horizontal-heading" id="d_big">
                                    <h2>Desktop Applications</h2>
                                </div>
                            </div>
                        </div>
                        <!-- Service 01 Header Ends-->

                        <div class="row">
                            <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-duration="3s">
                                <!-- Service 01 -->
                                <div class="service" style="margin-top: -7px;">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-2">
                                            <div class="icon text-right">
                                                <img src="{{asset('images/it/dev/desktop/desktop-applications-icon.png')}}"
                                             class="resp-image">
                                            </div>
                                        </div>

                                        <div class="col-md-10 col-sm-10">
                                            <!-- <h5>Service 01</h5> -->
                                            <h4  id="d_h1">Native &amp; Cross-Platform Software</h4>
                                            <p id="d_p1">We help our customers use technologies
                                                to drive innovation and make a transition into
                                                digitally mature organizations. <br><br>
                                                We design and develop high-quality
                                                enterprise software which meets your need.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Service 02 -->
                                <div class="service"    style="margin-top: 0px;">
                                    <div id="desk">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2">
                                                <div class="icon text-right">
                                                    <img src="{{asset('images/it/dev/desktop/example-icon.png')}}" class="resp-image">
                                                </div>
                                            </div>

                                            <div class="col-md-10 col-sm-10">
                                                <!-- <h5>Service 02</h5> -->
                                                <h4 id="d_h2">Example: Client Management</h4>
                                                <p id="d_p2">The solution helps business owners to manage,
                                                    organize, and track workplace activity, production, and
                                                    performance.
                                                    <br><br>The solution contains digital contact management,
                                                    reporting, and email tools.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-duration="3s">
                                <img src="{{asset('images/it/dev/desktop/desktop-applications-image.jpg')}}" alt="laptop"
                                    class="img-responsive" style="width: 90%;height: 90%;  border-radius: 0.6rem;
                                        box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.1), 0px 20px 20px rgba(0, 0, 0, 0.1);
                                        margin-top: -10px;">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Services 01 Ends -->
            </div>
        </div>
    </section>

    <section id="services" data="DEV">
        <div id="Android">
            <!-- Services 01 -->
            <div id="services-01">
                <div class="content-box-lg   ">
                    <div class="container">
                        <!-- Service 01 Header -->
                        <div class="row">
                            <div class="col-md-12 text-center wow fadeIn" data-wow-duration="3s">
                                <div class="horizontal-heading" id="A_big">
                                    <h2>Android &amp; iOS Applications</h2>
                                </div>
                            </div>
                        </div>
                        <!-- Service 01 Header Ends-->
                        <div class="row">
                            <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-duration="3s">
                                <img src="{{asset('images/it/dev/mobile/android-ios-applications-image.jpeg')}}" alt="laptop"
                                    class="img-responsive" style="width: 90%;height: 90%;margin-left: 30px;border-radius: 0.6rem;
                                        box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.1), 0px 20px 20px rgba(0, 0, 0, 0.1);
                                        margin-top: -10px;

                                        ">
                            </div>

                            <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-duration="3s">

                                <!-- Service 01 -->
                                <div class="service" style="margin-top: -7px;">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-2">
                                            <div class="icon text-right">
                                                <img src="{{asset('images/it/dev/mobile/mobile-icon.png')}}" alt="laptop"
                                             class="resp-image">
                                            </div>
                                        </div>

                                        <div class="col-md-10 col-sm-10">
                                            <!-- <h5 >Service 01</h5> -->
                                            <h4  id="A_h1">Cross-Platform &amp; Native Mobile Development</h4>
                                            <p id="A_p1">With our expertise in mobile
                                                development, we have you connect with your users
                                                on their mobiles.<br><br>Be it a simple app or a large-scale solution, we
                                                deliver the best results in the required time.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Service 02 -->
                                <div class="service" style="margin-top: 0px;">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-2">
                                            <div class="icon text-right">
                                                <img src="{{asset('images/it/dev/mobile/our-services-icon.png')}}" class="resp-image">
                                            </div>
                                        </div>

                                        <div class="col-md-10 col-sm-10">
                                            <!-- <h5 >Service 02</h5> -->
                                            <h4 id="A_h2">Our Services</h4>
                                            <p id="A_p2">Our Mobile Dev team has extensive experience in developing
                                                iOS/Android solutions that bring a high-quality
                                                user experience for your users.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Services 01 Ends -->
        </div>
    </section>

    <section class="app ai-back" data="AIS" id="AIS">
        <div class="cards-im">
            <div class="card-im1 ai-card wow fadeIn" data-wow-duration="3s">
                <div class="overlay1">
                    <div class="ggg ">
                        <h2 id="par-ai-h1">
                            AI Consulting
                        </h2>

                        <p id="par-ai-1">
                            We develop AI-driven solutions that enable you to take full advantage of the
                            gathered data
                            <a href="#AI" class="smooth-scroll" style="text-transform: capitalize;text-align: center; color: #01caff;">
                                More >>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="card-im1 ai-card active wow fadeIn" data-wow-duration="3s">
                <div class="overlay1">
                    <div class="ggg ">
                        <h2 id="par-ai-h2">
                            Data Analytics
                        </h2>

                        <p id="par-ai-2">
                            We turn your data into useful insights and competitive advantages.
                            <a href="#Data" class="smooth-scroll" style="text-transform: capitalize;text-align: center; color: #01caff;">
                                More >>
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="card-im1 ai-card wow fadeIn" data-wow-duration="3s">
                <div class="overlay1">
                    <div class="ggg ">
                        <h2 id="par-ai-h3">
                            Automation
                        </h2>

                        <p id="par-ai-3">
                            We help you enter the data-driven world and automate your business.
                            <a href="#Auto" class="smooth-scroll" style="text-transform: capitalize;text-align: center; color: #01caff;">
                                More >>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services " data="AIS">
        <div id="AI">
            <!-- Services 01 -->
            <div id="services-01">
                <div class="content-box-lg   ">
                    <div class="container">
                        <!-- Service 01 Header -->
                        <div class="row">
                            <div class="col-md-12 text-center wow fadeIn" data-wow-duration="3s">
                                <div class="horizontal-heading" id="ai_cons_h">
                                    <h2>AI Consulting</h2>
                                </div>
                            </div>
                        </div>
                        <!-- Service 01 Header Ends-->

                        <div class="row">
                            <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-duration="3s">
                                <img src="{{asset('images/it/ai/ai_consulting/ai-consulting-image.jpeg')}}" alt="laptop"
                                    class="img-responsive" style="width: 90%;height: 90%;margin-left: 30px;border-radius: 0.6rem;
                                        box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.1), 0px 20px 20px rgba(0, 0, 0, 0.1);
                            margin-top: -10px;

                                        ">
                            </div>

                            <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-duration="3s">
                                <!-- Service 01 -->
                                <div class="service" style="margin-top: -7px;">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-2">
                                            <div class="icon text-right">
                                                <img src="{{asset('images/it/ai/ai_consulting/ai-consulting-icon.png')}}" class="resp-image">
                                            </div>
                                        </div>

                                        <div class="col-md-10 col-sm-10">
                                            <!-- <h5>Service 01</h5> -->
                                            <h4 id="h-ai1-1">AI For Business</h4>
                                            <p id="p-ai1-1"> We help you develop the optimal AI strategy that fits your need. Using
                                                your data, we develop AI-driven
                                                solutions that enable you to stay ahead of your competitors.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Service 02 -->
                                <div class="service" style="margin-top: 0px;">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-2">
                                            <div class="icon text-right">
                                                <img src="{{asset('images/it/ai/ai_consulting/our-services-icon.png')}}" style="width: 80%;height: 80%">
                                            </div>
                                        </div>

                                        <div class="col-md-10 col-sm-10">
                                            <!-- <h5>Service 02</h5> -->
                                            <h4 id="h-ai1-2">Our Services</h4>
                                            <p id="p-ai1-2">We have expertise in several areas of AI such as anomaly
                                                detection, computer vision, recommendation
                                                systems, and predictions.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Services 01 Ends -->
        </div>
    </section>

    <section id="services" data="AIS">
        <div id="Data">
            <!-- Services 01 -->
            <div id="services-01">
                <div class="content-box-lg">
                    <div class="container">

                        <!-- Service 01 Header -->
                        <div class="row">
                            <div class="col-md-12 text-center wow fadeIn" data-wow-duration="3s">
                                <div class="horizontal-heading" id="ai_data_analytics_h">
                                    <h2>Data Analytics</h2>
                                </div>
                            </div>
                        </div>
                        <!-- Service 01 Header Ends-->

                        <div class="row">
                            <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-duration="3s">
                                <!-- Service 01 -->
                                <div class="service" style="margin-top: -7px;">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-2">
                                            <div class="icon text-right">
                                                <img src="{{asset('images/it/ai/data_analytics/ai-data-analytics-icon.png')}}" class="resp-image">
                                            </div>
                                        </div>

                                        <div class="col-md-10 col-sm-10">
                                            <!-- <h5>Service 01</h5> -->
                                            <h4 id="h-ai2-1" >Listen To Your Data</h4>
                                            <p id="p-ai2-1">We help you gather, analyze, and understand your
                                                data. Using our insights, we guide you to improve
                                                your business and know your customers.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Service 02 -->
                                <div class="service"style="margin-top: -0px;" >
                                    <div id="desk">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2">
                                                <div class="icon text-right">
                                                    <img src="{{asset('images/it/ai/data_analytics/our-services-icon.png')}}" class="resp-image">
                                                </div>
                                            </div>

                                            <div class="col-md-10 col-sm-10">
                                                <!-- <h5>Service 02</h5> -->
                                                <h4 id="h-ai2-2">Our Services</h4>
                                                <p id="p-ai2-2">With our tools, we help you increase business
                                                    operational “hygiene” by scrubbing existing processes and
                                                    systems for redundancies, conflicts, and value leaks.
                                                    <br><br>Moreover, we help you grow by understanding
                                                    the key factors impacting your products and customers.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-duration="3s">
                                <img src="{{asset('images/it/ai/data_analytics/data-analytics-image.jpg')}}" alt="laptop"
                                    class="img-responsive" style="width: 90%;height: 90%;border-radius: 0.6rem;
                                        box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.1), 0px 20px 20px rgba(0, 0, 0, 0.1);

                          margin-top: -10px;

                                        ">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Services 01 Ends -->
            </div>
        </div>
    </section>

    <section id="services" data="AIS">
        <div id="Auto">
            <!-- Services 01 -->
            <div id="services-01">
                <div class="content-box-lg">
                    <div class="container">
                        <!-- Service 01 Header -->
                        <div class="row">
                            <div class="col-md-12 text-center wow fadeIn" data-wow-duration="3s">
                                <div class="horizontal-heading" id="ai_automation_h">
                                    <h2>Automation</h2>
                                </div>
                            </div>
                        </div>
                        <!-- Service 01 Header Ends-->

                        <div class="row">
                            <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-duration="3s">
                                <img src="{{asset('images/it/ai/automation/ai-automation-image.jpg')}}" alt="laptop"
                                class="img-responsive" style="width: 90%;height: 90%;margin-left: 30px;border-radius: 0.6rem;
                                    box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.1), 0px 20px 20px rgba(0, 0, 0, 0.1);
                          margin-top: -10px;"

                                    >
                            </div>

                            <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-duration="3s">
                                <!-- Service 01 -->
                                <div class="service" style="margin-top: -7px;">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-2">
                                            <div class="icon text-right">
                                                <img src="{{asset('images/it/ai/automation/ai-automation-icon.png')}}" class="resp-image">
                                            </div>
                                        </div>

                                        <div class="col-md-10 col-sm-10">
                                            <!-- <h5>Service 01</h5> -->
                                            <h4 id="h-ai3-1">Intelligent Automation</h4>
                                            <p id="p-ai3-1">Automation is a mixture of Robotics
                                                and artificial intelligence (AI) technologies.
                                                It empowers rapid end-to-end business process
                                                industrialization and accelerates digital transformation.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Service 02 -->
                                <div class="service" style="margin-top: 0px;">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-2">
                                            <div class="icon text-right">
                                                <img src="{{asset('images/it/ai/automation/our-services-icon.png')}}" class="resp-image">
                                            </div>
                                        </div>

                                        <div class="col-md-10 col-sm-10">
                                            <!-- <h5>Service 02</h5> -->
                                            <h4 id="h-ai3-2">Our Services</h4>
                                            <p id="p-ai3-2"> We believe in automating everything,
                                                from infrastructure to operations.
                                                <br><br>
                                                According to your need, we use proven machine learning approaches
                                                that boost efficiency, reduce costs, and accelerates the global process.
                                                Automation is crucial to scale your business and to stay ahead of your competitors.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Services 01 Ends -->
        </div>
    </section>

    <div class="bottom-page"></div>


    <!-- JQuery -->
    <script src="{{asset('js/it/jquery.min.js')}}"></script>

    <!-- Bootstrap JS -->
    <script src="{{asset('js/it/bootstrap/bootstrap.min.js')}}"></script>

    <!-- Owl Carousel JS -->
    <script src="{{asset('js/it/owl-carousel/owl.carousel.min.js')}}"></script>

    <!-- Waypoints -->
    <script src="{{asset('js/it/waypoints/jquery.waypoints.min.js')}}"></script>

    <!-- Responsive Tabs JS -->
    <script src="{{asset('js/it/responsive-tabs/jquery.responsiveTabs.min.js')}}"></script>
    <script src="{{asset('js/it/tt.js')}}"></script>
    <!-- Isotope -->
    <script src="{{asset('js/it/isotope/isotope.pkgd.min.js')}}"></script>

    <!-- Magnific Popup -->
    <script src="{{asset('js/it/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

    <!-- Counter -->
    <script src="{{asset('js/it/counter/jquery.counterup.min.js')}}"></script>

    <!-- Google Map JS -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9EdV2JfPG1Vfviw9gf_HlblIUfs7Ie2E"></script>

    <!-- Easing -->
    <script src="{{asset('js/it/easing/jquery.easing.1.3.min.js')}}"></script>

    <!-- WOW JS -->
    <script src="{{asset('js/it/wow/wow.min.js')}}"></script>

    <!-- Custom JS -->
    <script src="{{asset('js/it/script.js')}}"></script>

    <script src="{{asset('js/it/buttonevent.js')}}"></script>
    <script src="{{asset('js/it/scroll.js')}}"></script>
</body>

</html>
