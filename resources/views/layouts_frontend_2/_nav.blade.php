<style type="text/css">
    .form_display {
        position: absolute;
        z-index: 90;
        top: 1px;
        right: -0px;
        padding: 100px 40px;
        background: radial-gradient(circle, rgba(13, 18, 41, 0.8), rgba(0, 3, 19, 0.8));
        color: #fff;
        width: 465px;
        height: 1000px;
    }
    .contact-form{
        background-color: transparent !important;
    }
    .badge {
  padding: 3px 9px 3px;
  font-size: 12.025px;
  font-weight: bold;
  white-space: nowrap;
  color: #ffffff;
  background-color: #999999;
  -webkit-border-radius: 9px;
  -moz-border-radius: 9px;
  border-radius: 9px;
}
.badge:hover {
  color: #ffffff;
  text-decoration: none;
  cursor: pointer;
}
.badge-error {
  background-color: #b94a48;
}
.badge-error:hover {
  background-color: #953b39;
}
.badge-warning {
  background-color: #f89406;
}
.badge-warning:hover {
  background-color: #c67605;
}
.badge-success {
  background-color: #468847;
}
.badge-success:hover {
  background-color: #356635;
}
.badge-info {
  background-color: #3a87ad;
}
.badge-info:hover {
  background-color: #2d6987;
}
.badge-inverse {
  background-color: #333333;
}
.badge-inverse:hover {
  background-color: #1a1a1a;
}
</style>

<!-- ***** Header Area Start ***** -->
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg">
                        <a class="navbar-brand" href="{{ route('welcome') }}"><img src="{{ asset('assets_frontend_2/img/core-img/logo.png') }} " alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dorneNav" aria-controls="dorneNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <!-- Nav -->
                        <div class="collapse navbar-collapse" id="dorneNav">
                            <ul class="navbar-nav mr-auto" id="dorneMenu">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                                </li>
                                @if (Route::has('login'))
                                    @if (Auth::check())
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('booking_list') }}">Booking List </a>
                                </li>
                                    @else
                                    @endif
                                @endif
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('partner') }}">Partner </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                                </li>
                            </ul>
                            <!-- Search btn -->
                            @if (Route::has('login'))
                                    @if (Auth::check())
                            <!-- Signin btn -->
                            <div class="dorne-signin-btn">
                            <ul class="navbar-nav mr-auto" id="dorneMenu">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hy, {{ auth::user()->name}} <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ url('/') }}" onclick="home()">Dashboard</a>
                                        <a class="dropdown-item" href="" onclick="profile()">Profile</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();" >Logout</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                    </div>
                                </li>
                                <div class="dorne-add-listings-btn login_log">
                                    <button class="btn dorne-btn" onclick="chart_log()"><span class="badge">{{ $jumlah }}</span> Chart</button>
                                </div>
                                {{-- CHART --}}

                                {{-- CHART --}}
                            </ul>
                            </div>
                            @else
                                <div class="dorne-add-listings-btn login_log">
                                    <button class="btn dorne-btn" onclick="login_log()"><i class="fa fa-lock"></i> Log In</button>
                                </div>
                            @endif
                            
                            @endif
                            <!-- Add listings btn -->
                            

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    <!-- ***** Header Area End ***** -->
    @if (Route::has('login'))
        @if (Auth::check())
        <div class="form_chart" style="display: none;">
            <div class="col-sm-offset-6 col-sm-6" style="min-height: 100px !important; max-height: 230px !important; overflow-y: scroll; min-width: 350px;    background-color: #482b88e0;
    padding: 15px;">
                <div class="col-sm-6">
                    <h4 style="color: white">Order Cart</h4>
                </div>
                <div class="pull-right">
                    <button type="button" onclick="tutup_chart();" class="btn btn-danger closing_chart"><i class="fa fa-times"></i></button>
                </div>
                @foreach ($cart as $i=>$val)
                    @if ($val->db_total == $val->db_total_remain)
                        <div class="col-sm-12" style="margin-bottom: 15px;margin-top: 15px;">
                            <div class="col-sm-5">
                                <img src="{{ asset('storage/app')}}/{{ $val->mi_image  }}"
                                style="width: 100px;height: 75px;">
                            </div>
                            <div class="col-sm-7" style="text-align: right; padding-right: 0 !important;padding-left: 5px !important">
                                <div class="col-sm-12">
                                    <h6  style="color: white"><b>{{ substr($val->mi_name,0, 15) }}...</b></h6>
                                </div>
                                <div class="col-sm-12" style="color: white">
                                    <h7>Pax : {{ $val->db_total_adult+$val->db_total_child+$val->db_total_infant }}</h7>
                                </div>
                                <div class="col-sm-12" style="color: white">
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
               
        </div>
                            @endif
                            @endif

    <div class="form_display" style="display: none;">
        <div class="pull-right">
        <button type="button" onclick="tutup();" class="btn btn-danger closing"><i class="fa fa-times"></i></button>
        </div>
            <hr>
            <div class="contact-form">
               <h3 style="color: white !important;border-radius: 0px !important;">Log In</h3>
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
<script src="{{ asset('assets_frontend_2/js/jquery/jquery-2.2.4.min.js') }}"></script>

<script type="text/javascript">
    $( window ).load(function() {

        if ($(window).width() < 465) {
            $('.form_display').css('width','300px');
        }
        else {
            $('.form_display').css('width','465px');
        }
    });
    function login_log(argument) {
        if (!$(".form_display").is(":visible")) {
            $('.form_display').css('display','block');
            $('.closing').css('display','block');
        }
        else {
            $('.form_display').css('display','none');
            $('.closing').css('display','none');
        }

    }
    function chart_log(argument) {
        if (!$(".form_chart").is(":visible")) {
            $('.form_chart').css('display','block');
            $('.closing_chart').css('display','block');
        }
        else {
            $('.form_chart').css('display','none');
            $('.closing_chart').css('display','none');
        }

    }
    function tutup(argument) {
        if (!$(".form_display").is(":visible")) {
            $('.closing').css('display','block');
            $('.form_display').css('display','block');
        }
        else {
            $('.closing').css('display','none');
            $('.form_display').css('display','none');

        }
    }
    function tutup_chart(argument) {
        if (!$(".form_chart").is(":visible")) {
            $('.closing_chart').css('display','block');
            $('.form_chart').css('display','block');
        }
        else {
            $('.closing_chart').css('display','none');
            $('.form_chart').css('display','none');

        }
    }

    function check_out(id) {
        var rand1 = '{{ md5('Demi yang Maha Pengasih Lagi Maha Penyayang Bagi Sang Pencipta Alam Semesta').rand(1,1000000) }}';
        var rand2 = '{{ md5('Dengan Nama Allah Yang Maha Pengasih Lagi Maha Penyayang').rand(1,1000000) }}';
        var rand3 = '{{ md5('Segala Puji Bagi Allah Tuhan Seru Sekalian Alam').rand(1,1000000)}}';
        window.location=('{{ url('/payment_page/payment') }}'+'?rand='+rand1+'&rand2='+rand2+'&rand3='+rand3+'&id='+id);
    }

</script>