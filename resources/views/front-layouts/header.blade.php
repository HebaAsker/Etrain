<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Etrain</title>
    <link rel="icon" href="{{ asset('etrain-master/img/favicon.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('etrain-master/css/bootstrap.min.css') }}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('etrain-master/css/animate.css') }}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset('etrain-master/css/owl.carousel.min.css') }}">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{ asset('etrain-master/css/themify-icons.css') }}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('etrain-master/css/flaticon.css') }}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ asset('etrain-master/css/magnific-popup.css') }}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{ asset('etrain-master/css/slick.css') }}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('etrain-master/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('etrain-master/css/custom.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="{{ asset('etrain-master/img/logo.png') }}" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="/">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('pages.about') }}">About</a>
                                </li>
                                <li class="nav-item">
                                    @if (Auth::guest()||Auth::user()->role=='student')
                                        <a class="nav-link" href="{{  route('pages.courses') }}">Courses</a>
                                    @elseif (Auth::user()->role=='teacher')
                                        <a class="nav-link" href="{{  route('admin.view_courses') }}">Courses</a>
                                    @endif
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('pages.contact') }}">Contact</a>
                                </li>
                                @guest  <!-- Used to start a new session -->

                                <!-- if the user clicked login check if he has an acoount then show his name in the nav bar -->
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif

                                    <!-- if the user clicked register make him an acoount then show his name in the nav bar -->
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else

                                <li class="nav-item dropdown"> <!-- user name appear as a dropdown list and when u click on it u find the option to logout or go to your profile-->
                                  <a class="nav-link dropdown-toggle" id="navbtn" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  {{ Auth::user()->name }}
                                  </a>
                                  <ul class="dropdown-menu" id="dropmenu">
                                  <li><a class="dropdown-item" href="#">Profile</a></li>
                                  <li>
                                      <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                      </a>
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                          @csrf
                                      </form>
                                  </li>
                                  </ul>
                              </li>
                                @endguest
                                <li class="d-none d-lg-block">
                                    <a class="btn_1" href="#">Get a Quote</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
