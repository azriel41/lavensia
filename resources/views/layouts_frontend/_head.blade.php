<meta charset="utf-8">
<!-- Always force latest IE rendering engine or request Chrome Frame -->
<meta http-equiv="X-UA-`atible" content="IE=edge,chrome=1">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<!-- Page Title -->
<title>Oke-Trip.com</title>        
<!-- Meta Description -->
<meta name="description" content="Blue One Page Creative HTML5 Template">
<meta name="keywords" content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
<meta name="author" content="Muhammad Morshed">
<!-- Mobile Specific Meta -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/png" href="{{ asset('assets_frontend/img/favicon.png') }}"/>

<!-- preloader -->
{{-- <div id="preloader">
    <img src="{{ asset ('assets_frontend/img/preloader.gif')}}" alt="Preloader" width="100px">
</div> --}}
<!-- end preloader -->

<style type="text/css">   
    .navbar-nav {
        margin-right: 50px !important; 
    }  
    
</style>


<!-- 
Fixed Navigation
==================================== -->
<header id="navigation" class="navbar-fixed-top" style="padding: 10px 0px;">
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
                    {{-- <img src="{{ asset ('assets_frontend/img/head_logo.png')}}" alt="Brandi" class="logo"> --}}
                </h1>
            </a>
            <!-- /logo -->
        </div>

        <!-- main nav -->
       
        <nav class="collapse navbar-collapse navbar-right" role="navigation">
            <ul id="nav" class="nav navbar-nav">
                <li><a href="" onclick="window.location.href=('{{ route('dashboard') }}')"><b>Home</b></a></li>
                @if (Route::has('login'))
                        @if (Auth::check())
                            <li><a href="" onclick="window.location.href=('{{ route('booking_list') }}')"><b>Booking List</b></a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Hy, {{ auth::user()->name }}  &nbsp;<i class="fa fa-caret-down"></i>
                                </a>
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
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="fa fa-shopping-cart" title="Shop Cart"></i> &nbsp; <span class="badge">{{ $jumlah }}</span>
                                </a>
                                <div class="dropdown-menu" role="menu">
                                    <div class="col-sm-12">
                                        <h4 style="color: grey">Order Cart</h4>
                                    </div>
                                    <div class="col-sm-12" style="min-height: 100px !important; max-height: 230px !important; overflow-y: scroll; min-width: 350px">
                                        @foreach ($cart as $i=>$val)
                                            @if ($val->db_total == $val->db_total_remain)
                                                <div class="col-sm-12" style="margin-bottom: 15px;margin-top: 15px;">
                                                    <div class="col-sm-5">
                                                        <img src="{{ asset('storage/app')}}/{{ $val->mi_image  }}"
                                                        style="width: 100px;height: 75px;">
                                                    </div>
                                                    <div class="col-sm-7" style="text-align: right; padding-right: 0 !important;padding-left: 5px !important">
                                                        <div class="col-sm-12">
                                                            <h6  style="color: blue"><b>{{ substr($val->mi_name,0, 15) }}...</b></h6>
                                                        </div>
                                                        <div class="col-sm-12" style="color: grey">
                                                            <h7>Pax : {{ $val->db_total_adult+$val->db_total_child+$val->db_total_infant }}</h7>
                                                        </div>
                                                        <div class="col-sm-12" style="color: grey">
                                                            <h7>Price : {{ number_format($val->db_total_additional+$val->db_total_room, 0, ",", ".") }}</h7>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12" 
                                                    @if ($i == count($cart)-1)
                                                        style="margin-bottom: 15px;" 
                                                    @endif>
                                                    <button class="btn" style="width: 100%;color:white;background-color: #0526ce;" onclick="check_out('{{ $val->db_id }}')">
                                                        Check Out
                                                    </button>
                                                </div> 
                                            @endif
                                        @endforeach
                                    </div>
                                    {{-- <div class="col-sm-12 pull-right" style="text-align: center;">
                                        <div class="v-align">
                                            <button class="btn " style="color:white;background-color: #0526ce;">
                                                See Cart
                                            </button>
                                        </div>
                                    </div> --}}
                              </div>
                            </li>
                        @else
                        <li><a href="" onclick="window.location.href=('{{ route('partner') }}')"><b>Partner</b></a></li>
                        <li><button style="margin-top: 10px;border-radius: 0px !important;" class="btn btn-info" onclick="login_log()"><i class="fa fa-lock"></i> Log In</button></li>
                        @endif
                @endif

            </ul>
        </nav>
        <!-- /main nav -->
        
    </div>
</header>

<div class="form_display" style="display: none;">
    <div class="sec-title col-sm-12 text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
        <div class="contact-form">
            <h3 style="color: white !important;border-radius: 0px !important;">Log In</h3>
        </div>
        <hr>
        <div class="contact-form">
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
              {{ csrf_field() }}
               <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                <label for="exampleInputEmail1" class="pull-left">Username</label>
                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>
              </div>
                @if ($errors->has('username'))
                    <span class="help-block">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                @endif
              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="exampleInputPassword1" class="pull-left">Password</label>
                <input id="password" type="password" class="form-control" name="password" required>
              </div>
               @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
              <button type="submit" class="btn btn-book"><i class="fa fa-sign-in"></i> Log in </button>
            </form>
        </div>
    </div>
</div>
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
<link rel="stylesheet" href="{{ asset ('assets_frontend/css/bootstrap.min.css')}}">
<!-- Main Stylesheet -->
<link rel="stylesheet" href="{{ asset ('assets_frontend/css/main.css')}}">
<!-- jquery.fancybox  -->
<link rel="stylesheet" href="{{ asset ('assets_frontend/css/jquery.fancybox.css')}}">
<!-- animate -->
<link rel="stylesheet" href="{{ asset ('assets_frontend/css/animate.css')}}">

{{-- Bootstrap Datatable --}}
<link href="{{ asset ('assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">
<!-- media-queries -->
<link rel="stylesheet" href="{{ asset ('assets_frontend/css/media-queries.css')}}">
<!-- Tabs -->
<link href="{{ asset ('assets_frontend/css/tabs/tabs.css') }}" rel="stylesheet" />
<link href="{{ asset ('assets_frontend/css/awesome-bootstrap-checkbox.css') }}" rel="stylesheet" />
<link href="{{ asset ('assets_frontend/dropzone/dropzone.css') }}" rel="stylesheet" />

{{-- DROPZONE --}}
<link href="{{ asset ('assets_frontend/css/tabs/tabstyles.css') }}" rel="stylesheet" />
<!-- Modernizer Script for old Browsers -->
<script src="{{ asset ('assets_frontend/js/modernizr-2.6.2.min.js')}}"></script>
<!-- Bootstrap Core Css -->
<link href="{{ asset ('assets/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

<!-- Waves Effect Css -->
<link href="{{ asset ('assets/plugins/node-waves/waves.css') }}" rel="stylesheet" />


<link href="{{ asset ('assets_frontend/radio/css/style.css') }}" rel="stylesheet" />
{{-- DATEPICKER --}}
<link href="{{ asset ('assets/plugins/datepicker/css/bootstrap-datepicker.css') }}" rel="stylesheet" />
{{-- Bootstrap-select --}}
<link href="{{ asset ('assets/plugins/bootstrap-select/css/bootstrap-select.min.css') }}" rel="stylesheet" />
<!-- Izi toast-->
<link href="{{ asset ('assets/plugins/iziToast/dist/css/iziToast.css') }}" rel="stylesheet" />
<link href="{{ asset ('assets/plugins/iziToast/dist/css/iziToast.min.css') }}" rel="stylesheet" />
{{-- SELECT2 --}}
<link href="{{ asset ('assets/plugins/select2/dist/css/select2.min.css') }}" rel="stylesheet" />
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
.dropdown-menu{
    color: black !important;
}
.footer-drop{
    background-color: #a60036e6;
    border-top: 5px solid #062033;
}

.all-center {
    margin: auto;
    width: 50%;
    border: 3px solid green;
    padding: 10px;
}
.dis-table{
    display: table;
}

.dis-cell{
    display: table;
}

.v-align {
    padding: 10px;
    display: table-cell;
    text-align: center;
    vertical-align: middle;
}
.left{
    text-align: left;
}
.center{
    text-align: center;
}
.grey{
    color: grey;
}
.form_display {
    position: fixed;
    z-index: 90;
    top: 1px;
    right: -0px;
    padding: 100px 40px;
    background: radial-gradient(circle, rgba(13, 18, 41, 0.8), rgba(0, 3, 19, 0.8));
    color: #fff;
    width: 465px;
    height: 725px;
}
</style>

<script type="text/javascript">
    function login_log(argument) {
         if (!$(".form_display").is(":visible")) {
                $('.form_display').css('display','block');
            }
            else {
                $('.form_display').css('display','none');
            }

    }
    function home(argument) {
        window.location = ('{{ route('home') }}')
    }
    function profile(argument) {
        window.location = ('{{ route('profile') }}')
    }
    function check_out(id) {
        var rand1 = '{{ md5('Demi yang Maha Pengasih Lagi Maha Penyayang Bagi Sang Pencipta Alam Semesta').rand(1,1000000) }}';
        var rand2 = '{{ md5('Dengan Nama Allah Yang Maha Pengasih Lagi Maha Penyayang').rand(1,1000000) }}';
        var rand3 = '{{ md5('Segala Puji Bagi Allah Tuhan Seru Sekalian Alam').rand(1,1000000)}}';
        window.location=('{{ url('/payment_page/payment') }}'+'?rand='+rand1+'&rand2='+rand2+'&rand3='+rand3+'&id='+id);
    }
    
</script>