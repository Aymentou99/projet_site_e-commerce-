




<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Login - CP</title>
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
                                  <a href="{{url('/')}}">
                                    <span>Home</span>
                                  </a>
                                </li>

                                <li>
                                  <a href="" class="inactiveLink">
                                    <span>Login</span>
                                  </a>
                                </li>

                            </ol>

                        </nav>

                    </div>

                </div>

            </div>


         @if(!empty($errors))
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{!! $error !!}</li>
            @endforeach
        </ul>
    </div>
    @endif
@endif

                        @if(Session::has('success_message'))
              <div class="alert alert-success" role="alert">
                  {{Session::get('success_message')}}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>   </div> @endif
              @if(Session::has('error_message'))
              <div class="alert alert-success" role="alert">
                  {{Session::get('error_message')}}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>   </div>@endif
            <div class="container">

                <div class="row d-flex justify-content-center mt-5">

                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">

                        <div class="login-card py-4 px-2">

                            <div class="login-division">

                                <div class="row">

                                    <div class="col-3">
                                        <div class="login-line l"></div>
                                    </div>

                                    <div class="col-6"><span>Login</span></div>

                                    <div class="col-3">
                                        <div class="login-line r"></div>
                                    </div>

                                </div>

                            </div>

                            <form class="login-myform" action="{{ route('login') }}" method="POST">
                                     @csrf
                                            <div class="login-form-group">
                             <input type="email" class="login-form-control" placeholder="Email" name="email" required>
                                        @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
   </div>
                                <div class="login-form-group">

                                    <input type="password" class="login-form-control" placeholder="Password" name="password" required>
    @if ($errors->has('password'))
                                      <span class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif

                                </div>

                                <div class="row">

                                    <div class="col-md-6 col-12">

                                        <div class="login-form-group login-form-check">
                                            <input type="checkbox" class="login-form-check-input" id="exampleCheck1">
                                            <label class="login-form-check-label" for="exampleCheck1">Remember Me</label>
                                        </div>

                                    </div>

                                    <div class="col-md-6 col-12 login-bn">
                                        <a href="{{url('login/resetpassword')}}">Forgot your password?</a>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-8 col-12 login-register-question pt-3">Don't have an account?
                                        <a class="login-register" href="{{url('register1')}}"  name="conf"> Register</a>
                                    </div>

                                </div>

                                <div class="login-form-group mt-3">

                                    <button type="submit" class="btn btn-block login-btn-primary btn-lg">

                                        <small>
                                            <i class="fa fa-user pr-2"></i>
                                            Login
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
