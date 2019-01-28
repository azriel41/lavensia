<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-cyan">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Search Bar -->
<div class="search-bar">
    <div class="search-icon">
        <i class="material-icons">search</i>
    </div>
    <input type="text" placeholder="START TYPING...">
    <div class="close-search">
        <i class="material-icons">close</i>
    </div>
</div>
<nav class="navbar bg-cyan">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="{{ route('home') }}">OKE-TRIP</a>
        </div>
        {{-- <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <!-- Call Search -->
                <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                <!-- #END# Call Search -->
                <!-- Notifications -->
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        <i class="material-icons">notifications</i>
                        <span class="label-count">7</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">NOTIFICATIONS</li>
                        <li class="body">
                            <ul class="menu">
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-light-green">
                                            <i class="material-icons">person_add</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4>12 new members joined</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> 14 mins ago
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-cyan">
                                            <i class="material-icons">add_shopping_cart</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4>4 sales made</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> 22 mins ago
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-red">
                                            <i class="material-icons">delete_forever</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4><b>Nancy Doe</b> deleted account</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> 3 hours ago
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-orange">
                                            <i class="material-icons">mode_edit</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4><b>Nancy</b> changed name</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> 2 hours ago
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-blue-grey">
                                            <i class="material-icons">comment</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4><b>John</b> commented your post</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> 4 hours ago
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-light-green">
                                            <i class="material-icons">cached</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4><b>John</b> updated status</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> 3 hours ago
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-purple">
                                            <i class="material-icons">settings</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4>Settings updated</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> Yesterday
                                            </p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="javascript:void(0);">View All Notifications</a>
                        </li>
                    </ul>
                </li>
                <!-- #END# Notifications -->
                <!-- Tasks -->
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        <i class="material-icons">flag</i>
                        <span class="label-count">9</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">TASKS</li>
                        <li class="body">
                            <ul class="menu tasks">
                                <li>
                                    <a href="javascript:void(0);">
                                        <h4>
                                            Footer display issue
                                            <small>32%</small>
                                        </h4>
                                        <div class="progress">
                                            <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 32%">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <h4>
                                            Make new buttons
                                            <small>45%</small>
                                        </h4>
                                        <div class="progress">
                                            <div class="progress-bar bg-cyan" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <h4>
                                            Create new dashboard
                                            <small>54%</small>
                                        </h4>
                                        <div class="progress">
                                            <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 54%">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <h4>
                                            Solve transition issue
                                            <small>65%</small>
                                        </h4>
                                        <div class="progress">
                                            <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <h4>
                                            Answer GitHub questions
                                            <small>92%</small>
                                        </h4>
                                        <div class="progress">
                                            <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 92%">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="javascript:void(0);">View All Tasks</a>
                        </li>
                    </ul>
                </li>
                <!-- #END# Tasks -->
            </ul>
        </div> --}}
    </div>
</nav>

<section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info" >
                <div class="bg-image-side"  style="background: {{ asset('storage/app/agent/agent-'.auth::user()->id.'.jpg') }}">
                </div>
                <div class="image crop">
                    <img src="{{ asset('storage/app/agent/agent-'.auth::user()->image) }}?'{{ time() }}'" style="z-index: 999;" width="70" height="70" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
                    <div class="email">{{ Auth::user()->email }}</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="{{ route('profile') }}"><i class="material-icons">person</i>Profile</a></li>
                            <li><a href="{{ route('dashboard') }}"><i class="material-icons">dashboard</i>Dashboard</a></li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                <i class="material-icons">input</i></a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                            {{-- <li><a href="{{ url('/logout') }}"><i class="material-icons">input</i>Sign Out</a></li> --}}
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="{{ url('/welcome') }}">
                            <i class="material-icons">home</i>
                            <span>PAKET TOUR</span>
                        </a>
                    </li>
                    @if(Auth::user()->akses('booking list','mh_aktif'))
                    <li>
                        <li>
                            <a href="{{ route('booking_all') }}">
                                <i class="material-icons">list</i>
                                <span>Booking List</span>
                            </a>
                        </li>
                    </li>
                    @endif
                    @if(Auth::user()->akses('approve master agent','mh_aktif'))
                    <li>
                        <a href="{{ route('master_agent_agent') }}">
                            <i class="material-icons">widgets</i>
                            <span>Agent</span>
                        </a>
                    </li>
                    @endif

                    @if (auth::user()->role_id == 1 || auth::user()->role_id == 2 || auth::user()->role_id == 3 )
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span>Product</span>
                        </a>
                        <ul class="ml-menu">
                        {{--     @if(Auth::user()->akses('master agent','mh_aktif'))
                                <li>
                                    <a href="{{ route('master_agent') }}">Agent</a>
                                </li>
                            @endif --}}

                            @if(Auth::user()->akses('master category','mh_aktif'))
                                <li>
                                    <a href="{{ route('master_category') }}">Destination</a>
                                </li>
                            @endif
                            @if(Auth::user()->akses('master company','mh_aktif'))
                                <li>
                                    <a href="{{ route('master_company') }}">Company</a>
                                </li>
                            @endif
                            @if(Auth::user()->akses('master additional','mh_aktif'))
                                <li>
                                    <a href="{{ route('master_additional') }}">Additional</a>
                                </li>
                            @endif
                            @if(Auth::user()->akses('master intinerary','mh_aktif'))
                                <li>
                                    <a href="{{ route('master_intinerary') }}">Itinerary</a>
                                </li>
                            @endif
                            @if(Auth::user()->akses('master leader','mh_aktif'))
                                <li>
                                    <a href="{{ route('master_leader') }}">Tour Leader</a>
                                </li>
                            @endif
                        </ul>
                    </li>
                    @if(Auth::user()->akses('master agent','mh_aktif'))
                    <li>
                        <li>
                            <a href="{{ route('master_agent') }}">
                                <i class="material-icons">assignment</i>
                                <span>Agent</span>
                            </a>
                        </li>
                    </li>
                    @endif
                    @if(Auth::user()->akses('finance','mh_aktif'))
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Finance</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{ route('finance') }}">Laporan Pendapatan</a>
                                <a href="{{ route('laba_rugi') }}">Laporan Laba Rugi</a>
                            </li>
                        </ul>
                    </li>
                    @endif
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">build</i>
                            <span>Function</span>
                        </a>
                        <ul class="ml-menu">
                           {{--  @if(Auth::user()->akses('company','mh_aktif'))
                                <li>
                                    <a href="{{ route('company_index') }}">Company</a>
                                </li>
                            @endif --}}
                             @if(Auth::user()->akses('company','mh_aktif'))
                                <li>
                                    <a href="{{ route('master_bg_slider') }}">Master Slider</a>
                                </li>
                            @endif
                             @if(Auth::user()->akses('company','mh_aktif'))
                                <li>
                                    <a href="{{ route('master_contact_isi') }}">About Us</a>
                                </li>
                            @endif
                            {{-- @if(Auth::user()->akses('company','mh_aktif'))
                                <li>
                                    <a href="{{ route('master_bg_artikel') }}">bg artikel</a>
                                </li>
                            @endif --}}
                            @if(Auth::user()->akses('company','mh_aktif'))
                                <li>
                                    <a href="{{ route('master_bg_page') }}">Bg per page</a>
                                </li>
                            @endif
                            @if(Auth::user()->akses('article','mh_aktif'))
                                <li>
                                    <a href="{{ route('article_index') }}">Article</a>
                                </li>
                            @endif
                        </ul>
                        
                    </li>
                    @if(Auth::user()->akses('report oketrip','mh_aktif'))
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">pie_chart</i>
                            <span>Report Oketrip</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{ route('report_customer_oketrip') }}">Statistic Customer</a>
                            </li>
                            <li>
                                <a href="{{ route('report_profit_oketrip') }}">Statistic Penjualan</a>
                            </li>
                            <li>
                                <a href="{{ route('report_table_profit_oketrip') }}">Report Customer</a>
                            </li>
                            <li>
                                <a href="{{ route('report_table_profit_oketrip') }}">Report Penjualan</a>
                            </li>
                            <li>
                                <a href="{{ route('report_pelunasan_agent') }}">Report pelunasan</a>
                            </li>
                        </ul>
                    </li>
                    @else
                    @endif


                    @else
                    @endif

                    @if(Auth::user()->akses('report agent','mh_aktif'))
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">pie_chart</i>
                            <span>Report</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{ route('report_customer_agent') }}">Statistic Customer</a>
                            </li>
                            <li>
                                <a href="{{ route('report_profit_agent') }}">Statistic Penjualan</a>
                            </li>
                            <li>
                                <a href="{{ route('report_table_customer_agent') }}">Report Customer</a>
                            </li>
                            <li>
                                <a href="{{ route('report_table_profit_agent') }}">Report Penjualan</a>
                            </li>
                        </ul>
                    </li>
                    @else
                    @endif

                    {{--          <li>
                        <a href="{{ route('booking_print') }}">
                            <i class="material-icons">print</i>
                            <span>BOOK</span>
                        </a>
                    </li> --}}
                    
                    
                    
                    
                   
    
        </aside>
</section>