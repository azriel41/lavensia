<meta charset="utf-8">
<!-- Always force latest IE rendering engine or request Chrome Frame -->
<meta http-equiv="X-UA-`atible" content="IE=edge,chrome=1">
<meta name="csrf-token" content="{{ csrf_token() }}" />
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

<style type="text/css">
     
</style>

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
                    <img src="{{ asset ('assets_frontend/img/t3.png')}}" alt="Brandi" class="logo">
                </h1>
            </a>
            <!-- /logo -->
        </div>

        <!-- main nav -->
        <nav class="collapse navbar-collapse navbar-right" role="navigation">
            <ul id="nav" class="nav navbar-nav">
                <li><a href="#package">Package</a></li>
                <li><a href="#footer">Contact</a></li>
                <li><a href="" onclick="window.location.href=('{{ route('partner') }}')">Partner</a></li>
                @if (Route::has('login'))
                        @if (Auth::check())
                            <li>
                                <div class="btn-group">
                                      <button type="button" class="btn btn-nav dropdown-toggle button_group_name" data-toggle="dropdown">Hy, {{ auth::user()->name }} 
                                        &nbsp;<span class="caret"></span>
                                      </button>

                                      <ul class="dropdown-menu" role="menu">
                                        <li><a href="" onclick="home()"><i class="fa fa-home"></i> Dashboard</a></li>
                                        <li><a href="" onclick="profile()"><i class="fa fa-user"></i> Profile</a></li>
                                        <li>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                         <i class="fa fa-sign-out"></i>
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
<!-- Main Stylesheet -->
<link rel="stylesheet" href="{{ asset ('assets_frontend/css/main.css')}}">
<!-- Fontawesome Icon font -->
<link rel="stylesheet" href="{{ asset ('assets_frontend/css/font-awesome.min.css') }}">
<!-- Twitter Bootstrap css -->
<link rel="stylesheet" href="{{ asset ('assets_frontend/css/bootstrap.css')}}">
<!-- jquery.fancybox  -->
<link rel="stylesheet" href="{{ asset ('assets_frontend/css/jquery.fancybox.css')}}">
<!-- animate -->
<link rel="stylesheet" href="{{ asset ('assets_frontend/css/animate.css')}}">

<!-- media-queries -->
<link rel="stylesheet" href="{{ asset ('assets_frontend/css/media-queries.css')}}">
<!-- Tabs -->
<link href="{{ asset ('assets_frontend/css/tabs/tabs.css') }}" rel="stylesheet" />
<link href="{{ asset ('assets_frontend/dropzone/dropzone.css') }}" rel="stylesheet" />

{{-- DROPZONE --}}
<link href="{{ asset ('assets_frontend/css/tabs/tabstyles.css') }}" rel="stylesheet" />
<!-- Modernizer Script for old Browsers -->
<script src="{{ asset ('assets_frontend/js/modernizr-2.6.2.min.js')}}"></script>
<!-- Bootstrap Core Css -->
<link href="{{ asset ('assets/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

<!-- Waves Effect Css -->
<link href="{{ asset ('assets/plugins/node-waves/waves.css') }}" rel="stylesheet" />

{{-- Bootstrap-select --}}
<link href="{{ asset ('assets/plugins/bootstrap-select/css/bootstrap-select.min.css') }}" rel="stylesheet" />
<!-- Izi toast-->
<link href="{{ asset ('assets/plugins/iziToast/dist/css/iziToast.css') }}" rel="stylesheet" />
<link href="{{ asset ('assets/plugins/iziToast/dist/css/iziToast.min.css') }}" rel="stylesheet" />

<style type="text/css">
.file-upload{display:block;text-align:center;font-family: Helvetica, Arial, sans-serif;font-size: 12px;}
.file-upload .file-select{display:block;border: 2px solid #dce4ec;color: #34495e;cursor:pointer;height:40px;line-height:40px;text-align:left;background:#FFFFFF;overflow:hidden;position:relative;}
.file-upload .file-select .file-select-button{background:#dce4ec;padding:0 10px;display:inline-block;height:40px;line-height:40px;}
.file-upload .file-select .file-select-name{line-height:40px;display:inline-block;padding:0 10px;}
.file-upload .file-select:hover{border-color:#34495e;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
.file-upload .file-select:hover .file-select-button{background:#34495e;color:#FFFFFF;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
.file-upload.active .file-select{border-color:#3fa46a;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
.file-upload.active .file-select .file-select-button{background:#3fa46a;color:#FFFFFF;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
.file-upload .file-select input[type=file]{z-index:100;cursor:pointer;position:absolute;height:100%;width:100%;top:0;left:0;opacity:0;filter:alpha(opacity=0);}
.file-upload .file-select.file-select-disabled{opacity:0.65;}
.file-upload .file-select.file-select-disabled:hover{cursor:default;display:block;border: 2px solid #dce4ec;color: #34495e;cursor:pointer;height:40px;line-height:40px;margin-top:5px;text-align:left;background:#FFFFFF;overflow:hidden;position:relative;}
.file-upload .file-select.file-select-disabled:hover .file-select-button{background:#dce4ec;color:#666666;padding:0 10px;display:inline-block;height:40px;line-height:40px;}
.file-upload .file-select.file-select-disabled:hover .file-select-name{line-height:40px;display:inline-block;padding:0 10px;}
#logo{
    margin-top: -12px;
}
</style>

<script type="text/javascript">
    function home(argument) {
        window.location = ('{{ route('home') }}')
    }
    function profile(argument) {
        window.location = ('{{ route('profile') }}')
    }

    
</script>