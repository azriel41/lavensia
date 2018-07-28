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
    .navbar-nav {
        margin-right: 50px !important; 
    }  
</style>


<!-- 
Fixed Navigation
==================================== -->
<header id="navigation" class="navbar-fixed-top" style="padding: 10px 0px;">
    {{-- <div class="container"> --}}
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
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="#footer">Booking List</a></li>
                <li><a href="" onclick="window.location.href=('{{ route('partner') }}')">Partner</a></li>
                @if (Route::has('login'))
                        @if (Auth::check())
                            <li style="margin-right: 20px;">
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
                            <li>
                                <div class="btn-group" >
                                      <button type="button" class="btn btn-nav dropdown-toggle button_group_name" data-toggle="dropdown"><i class="fa fa-shopping-cart" title="Shop Cart"></i>
                                        <span class="badge">{{ $jumlah }}</span>
                                      </button>
                                      <div class="dropdown-menu" role="menu">
                                            <div class="col-sm-12 footer-drop dis-table" style="text-align: center;height: 50px;">
                                                <div class="v-align">
                                                    <h3 style="color: white">Order Cart</h3>
                                                </div>
                                            </div>
                                            <div class="col-sm-12" style="height: 290px !important; overflow-y: scroll; min-width: 350px">
                                                @foreach ($cart as $i=>$val)
                                                    @if ($val->db_status == 'Waiting List')
                                                        <div class="col-sm-12" style="margin-bottom: 15px;margin-top: 15px;">
                                                            <div class="col-sm-5">
                                                                <img src="{{ asset('storage/app')}}/{{ $val->detail_itin->intinerary->mi_image  }}"
                                                                style="width: 100px;height: 75px;">
                                                            </div>
                                                            <div class="col-sm-7" style="text-align: right; padding-right: 0 !important;padding-left: 5px !important">
                                                                <div class="col-sm-12">
                                                                    <h6  style="color: #a60036e6"><b>{{ substr($val->detail_itin->intinerary->mi_name,0, 15) }}...</b></h6>
                                                                </div>
                                                                <div class="col-sm-12" style="color: grey">
                                                                    <h7>Pax : {{ $val->db_pax }}</h7>
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
                                                            <button class="btn btn-danger" style="width: 100%" onclick="check_out('{{ $val->db_id }}')">
                                                                Check Out
                                                            </button>
                                                    </div> 
                                                    @endif
                                                @endforeach
                                            </div>
                                            <div class="col-sm-12 footer-drop dis-table" style="text-align: center;height: 75px;">
                                                <div class="v-align">
                                                    <button class="btn btn-danger ">
                                                        See Cart
                                                    </button>
                                                </div>
                                            </div>
                                      </div>
                                </div>
                            </li>
                        @else
                            <button class="btn btn-small btn-nav icon_login_logout" onclick="login()">Login</button>

                            <button class="btn btn-small btn-nav icon_login_logout" onclick="register()">Register</button>
                        @endif
                @endif

            </ul>
        </nav>
        <!-- /main nav -->
        
    {{-- </div> --}}
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

</style>

<script type="text/javascript">
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