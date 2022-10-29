
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Reset Password - CP</title>
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
    <body class="body-bg">


        <!-- Body main wrapper -->
        <div class="wrapper home-one" >


            <!-- Breadcrumb -->
            <div class="top_breadcrumb">

                <div class="breadcrumb_container ">

                    <div class="container">

                        <nav data-depth="3" class="breadcrumb">

                            <ol>

                                <li>
                                  <a href="{{url('home')}}">
                                    <span>Home</span>
                                  </a>
                                </li>

                                <li>
                                  <a href="" class="inactiveLink">
                                    <span>Reset Password </span>
                                  </a>
                                </li>

                            </ol>

                        </nav>

                    </div>

                </div>

            </div>


            <div class="container">

                <div class="row d-flex justify-content-center mt-5">

                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">

                        <div class="login-card py-4 px-2">

                            <div class="login-division">

                                <div class="row">

                                    <div class="col-3">
                                        <div class="login-line l"></div>
                                    </div>

                                    <div class="col-6"><span>Reset Password </span></div>

                                    <div class="col-3">
                                        <div class="login-line r"></div>
                                    </div>

                                </div>

                            </div>

                    @if (Session::has('message'))
                         <div class="alert alert-success" role="alert">
                            {{ Session::get('message') }}
                        </div>
                    @endif

                            <form class="login-myform" action="{{ route('forget.password.post') }}" method="POST">
                                         @csrf
                                <div class="login-form-group">
                                    <input type="email" class="login-form-control" placeholder="Email" name="email" required>
                                        @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                                </div>

                                <div class="login-form-group mt-3">

                                    <button type="submit" class="btn btn-block login-btn-primary btn-lg">

                                        <small>
                                            <i class="fa fa-refresh pr-2"></i>
                                            Reset Password
                                        </small>

                                    </button>

                                </div>

                            </form>

                        </div>

                    </div>

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

    </body>
</html>
