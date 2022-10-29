<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Page not found - CP</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/logo/cp-logo.png')}}">


        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/css-plugins-call.css')}}">
        <link rel="stylesheet" href="{{asset('css/bundle.css')}}">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('css/colors.css')}}">

        <!-- Animate On Scroll -->
        <link rel="stylesheet" href="{{asset('aos-by-red.css')}}">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>

    </head>

    <body >

        <!-- Body main wrapper -->
        <div class="wrapper about-page home-one">


            <!-- Content -->
            <div class="not-found-bg">

                <div class="about__us_page_area">

                    <div class="d-flex justify-content-center align-items-center" data-aos="fade" data-aos-duration="3000" data-aos-once="true">
                        <h1 class="my-3 oops">Oops!</h1>
                    </div>

                    <div class="d-flex justify-content-center align-items-center" id="main" data-aos="fade" data-aos-duration="3000" data-aos-once="true">
                        <h1 class="mr-3 pr-3 align-top border-right inline-block align-content-center">404</h1>
                        <div class="inline-block align-middle">
                            <h2 class="font-weight-normal lead">
                                We can't seem to find the page you're looking for.
                            </h2>
                        </div>
                    </div>

                    <button type="button" class="btn not-found-btn-primary" onclick="location.href='{{url('/')}}'">

                        <span><i class="fa fa-home pr-2" aria-hidden="true"></i>Home</span>

                    </button>


                </div>

            </div>


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

        <!-- Animate On Scroll -->
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
          AOS.init({
            duration: 3000,
            once: true,
          });
        </script>


    </body>

</html>
