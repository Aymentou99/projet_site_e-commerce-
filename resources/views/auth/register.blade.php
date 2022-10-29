




<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Register - CP</title>
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
        <div class="wrapper home-one">

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
                                    <span>Register</span>
                                  </a>
                                </li>

                            </ol>

                        </nav>

                    </div>

                </div>

            </div>


            <div class="container">

                <div class="row d-flex justify-content-center">

                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">

                        <div class="login-card pb-3 px-2">

                            <div class="login-division">

                                <div class="row">

                                    <div class="col-3">
                                        <div class="login-line l"></div>
                                    </div>

                                    <div class="col-6"><span>Register</span></div>

                                    <div class="col-3">
                                        <div class="login-line r"></div>
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
</button>   </div>@endif
              @if(Session::has('error_message'))
              <div class="alert alert-success" role="alert">
                  {{Session::get('error_message')}}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>

              </div>
              @endif

                            <form class="login-myform" method="POST" action="{{ url('/register2') }}">
@csrf
                                <div class="login-form-group">
                                    <input type="text" class="login-form-control" id="first-name" placeholder="First Name*"  name="name" required>
                                      @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                                </div>

                                <div class="login-form-group">
                                    <input type="text" class="login-form-control" id="last-name" placeholder="Last Name*" name="lname" required>
                                                              @error('lname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                                </div>

                                <div class="login-form-group">
                                    <input type="email" class="login-form-control" id="email" placeholder="Email*" name="email" required>
                                   @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                                </div>

                                <div class="login-form-group">
                                    <input type="text" class="login-form-control" id="phone" placeholder="Phone*" name="phone" required>
                                                         @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                                </div>

                                <div class="login-form-group">
                                    <input type="password" class="login-form-control" id="pwd" placeholder="Password*" name="password" required>
                                      @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                                </div>

                                <div class="login-form-group">
                                    <input type="password" class="login-form-control" id="pwd-confirm" placeholder="Confirm password*" name="password_confirmation" required>
                                        @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                                </div>

                                <div class="login-form-group form-check mt-2">

                                    <input type="checkbox" class="form-check-input" id="check-register" name="check-register" required>
                                    <label class="login-form-check-label" for="check">I have read and agree to the <a href="cp-contact-us.html#privacyPolicy" class="agree"><b>Privacy Policy</b></a></label>
                         @error('check-register')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                                </div>

                                <div class="login-form-group mt-3">

                                    <button type="submit" class="btn btn-block login-btn-primary btn-lg btn-disabled" id="register-button">

                                        <small>

                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                                                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                                <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                            </svg>

                                            Create Account

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
