<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<!-- --------------style css --------------->


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
              <img src="{{asset('itservices/cp_code_v1.3_09-09-2021/img/logo/theOne.png')}}" style="width:50%;height:50%" alt="logo"  >
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

   <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
          <a class="nav-link" href="{{url('/')}}">{{ __('Home') }}</a>
        </li>

              <li class="nav-item ">
          <a class="nav-link" href="{{url('category')}}">{{__('Category')}}</a>
        </li>
     <li class="nav-item">
          <a class="nav-link" href="{{url('cart')}}">
                <i class="fa fa-shopping-cart" style="font-size:15px;color:red"></i>
            {{__('cart')}}

          <span class="badge badge-pill bg-primary cart-count ">0</span>
        </a>

        </li>
<li class="nav-item">
          <a class="nav-link" href="{{url('Aboutus')}}">  {{__('About us')}}


        </a>

        </li>
                <li class="nav-item">
          <a class="nav-link" href="{{url('itservice')}}"> {{__('It Services')}}</a>
        </li>

  
            </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
