<meta charset="utf-8">
<!-- Always force latest IE rendering engine or request Chrome Frame -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!-- Page Title -->
<title>Lavensia Tour & Travel</title>        
<!-- Meta Description -->
<meta name="description" content="Blue One Page Creative HTML5 Template">
<meta name="keywords" content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
<meta name="author" content="Muhammad Morshed">
<!-- Mobile Specific Meta -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/png" href="{{ asset('assets_frontend/img/lavensia_favicon.png') }}"/>

<!-- preloader -->
<div id="preloader">
    <img src="{{ asset ('assets_frontend/img/preloader.gif')}}" alt="Preloader" width="100px">
</div>
<!-- end preloader -->

<!-- 
Fixed Navigation
==================================== -->
<header id="navigation" class="navbar-fixed-top navbar">
    <div class="container">
        <div class="navbar-header">
            <!-- responsive nav button -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-bars fa-2x"></i>
            </button>
            <!-- /responsive nav button -->
            
            <!-- logo -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <h1 id="logo">
                    <img src="{{ asset ('assets_frontend/img/logo.png')}}" alt="Brandi" class="logo">
                </h1>
            </a>
            <!-- /logo -->
        </div>

        <!-- main nav -->
        <nav class="collapse navbar-collapse navbar-right" role="navigation">
            <ul id="nav" class="nav navbar-nav">
                <li><a href="#works">Package</a></li>
                <li><a href="http://google.com">Contact</a></li>
                @if (Route::has('login'))
                        @if (Auth::check())
                            <li>
                                <div class="btn-group">
                                      <button type="button" class="btn btn-primary dropdown-toggle button_group_name" data-toggle="dropdown">Hy, {{ auth::user()->name }} 
                                        &nbsp;<span class="caret"></span>
                                      </button>

                                      <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Profile</a></li>
                                        <li>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                      </ul>
                                </div>
                            </li>

                        @else
                            <button class="btn btn-small btn-primary icon_login_logout" onclick="login()">Login</button>

                            <button class="btn btn-small btn-primary icon_login_logout" onclick="register()">Register</button>
                        @endif
                @endif
            </ul>
        </nav>
        <!-- /main nav -->
        
    </div>
</header>
<!--
End Fixed Navigation
==================================== -->

<!-- Google Font -->

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

<!-- CSS
================================================== -->
<!-- Fontawesome Icon font -->
<link rel="stylesheet" href="{{ asset ('assets_frontend/css/font-awesome.min.css') }}">
<!-- Twitter Bootstrap css -->
<link rel="stylesheet" href="{{ asset ('assets_frontend/css/bootstrap.min.css')}}">
<!-- jquery.fancybox  -->
<link rel="stylesheet" href="{{ asset ('assets_frontend/css/jquery.fancybox.css')}}">
<!-- animate -->
<link rel="stylesheet" href="{{ asset ('assets_frontend/css/animate.css')}}">
<!-- Main Stylesheet -->
<link rel="stylesheet" href="{{ asset ('assets_frontend/css/main.css')}}">
<!-- media-queries -->
<link rel="stylesheet" href="{{ asset ('assets_frontend/css/media-queries.css')}}">
<!-- Tabs -->
<link href="{{ asset ('assets_frontend/css/tabs/tabs.css') }}" rel="stylesheet" />
<link href="{{ asset ('assets_frontend/css/tabs/tabstyles.css') }}" rel="stylesheet" />

<!-- Modernizer Script for old Browsers -->
<script src="{{ asset ('assets_frontend/js/modernizr-2.6.2.min.js')}}"></script>

