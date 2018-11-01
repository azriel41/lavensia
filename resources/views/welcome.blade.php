@extends('layouts_frontend_2._main')  

@section('extra_style')

<style type="text/css">
    .tab-content{
        background-color:transparent !important;
    }
</style>
@endsection


@section('content')

    <!-- ***** Welcome Area Start ***** -->
    <section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url(assets_frontend_2/img/bg-img/hero-1.jpg);">
        <div class="container h-200">
            <div class="row h-200 align-items-center justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="hero-content">
                        <span style="font-size: 40px;color: white;font-weight: 700;">Special Promo</span>
                        {{-- <h4>This is the best guide of your city</h4> --}}
                    </div>
                    @if (Auth::User() != null)
                    
                        <div class="hero-search-form">
                        <!-- Tabs -->
                        <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-places" role="tabpanel" aria-labelledby="nav-places-tab">
                                    <h6>What are you looking for?</h6>
                                    <form id="cari">
                                        <input type="" name="" readonly="" style="background-color: transparent;border:none">
                                        <select id="destination" class="custom-select">
                                            <option value="" selected>Your Destinations</option>
                                            @foreach ($category as $e)
                                                <option value="{{ $e->mc_id }}">{{ $e->mc_name}}</option>
                                            @endforeach
                                        </select>
                                        <select class="custom-select">
                                            <option selected>Price Rwange</option>
                                            <option value="1">$100 - $499</option>
                                            <option value="2">$500 - $999</option>
                                            <option value="3">$1000 - $4999</option>
                                        </select>
                                        <button type="button" class="btn dorne-btn" onclick="cari()"><i class="fa fa-search pr-2" aria-hidden="true"></i> Search</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        {{-- expr --}}
                    @endif
                    <!-- Hero Search Form -->
                    
                </div>
            </div>
        </div>
        <!-- Hero Social Btn -->
        <div class="hero-social-btn">
            <div class="social-title d-flex align-items-center">
                <h6>Follow us on Social Media</h6>
                <span></span>
            </div>
            <div class="social-btns">
                <a href="#"><i class="fa fa-linkedin" aria-haspopup="true"></i></a>
                <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-haspopup="true"></i></a>
                <a href="#"><i class="fa fa-facebook" aria-haspopup="true"></i></a>
            </div>
        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Catagory Area Start ***** -->
    {{-- <section class="dorne-catagory-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="all-catagories">
                        <div class="row">
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.2s">
                                    <div class="catagory-content">
                                        <img src="assets_frontend_2/img/core-img/icon-1.png" alt="">
                                        <a href="#">
                                            <h6>Hotels</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.4s">
                                    <div class="catagory-content">
                                        <img src="assets_frontend_2/img/core-img/icon-2.png" alt="">
                                        <a href="#">
                                            <h6>Restaurants</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.6s">
                                    <div class="catagory-content">
                                        <img src="assets_frontend_2/img/core-img/icon-3.png" alt="">
                                        <a href="#">
                                            <h6>Shopping</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.8s">
                                    <div class="catagory-content">
                                        <img src="assets_frontend_2/img/core-img/icon-4.png" alt="">
                                        <a href="#">
                                            <h6>Beauty &amp; Spa</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="1s">
                                    <div class="catagory-content">
                                        <img src="assets_frontend_2/img/core-img/icon-5.png" alt="">
                                        <a href="#">
                                            <h6>Cinema</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ***** Catagory Area End ***** -->

    <!-- ***** About Area Start ***** -->
    @if (Auth::User() != null)
    @else
    <section class="dorne-about-area section-padding-0-0" style="padding-bottom: 4%">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="about-content text-center">
                            <div class="" style="padding-top: 4%"></div>
                            <h3>Discover your city with <br><span>Dorne</span></h3>
                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce quis tempus elit. Sed efficitur tortor neque, vitae aliquet urna varius sit amet. Ut rhoncus, nunc nec tincidunt volutpat, ex libero.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    
    <!-- ***** About Area End ***** -->
    @if (Auth::User() != null)
        {{-- expr --}}
    <section class="ftco-section bg-light">
        <div class="container-fluid">
                <div class="row justify-content-start mb-5 pb-3">
                  <div class="col-12">
                    <div class="about-content text-center">
                        <h3>Itinerary<br></h3>
                        <br>
                        <br>
                        <br>
                    </div>
                </div>
                  <div class="container-fluid">
                    <div class="drop_here">
                        @foreach ($intinerary as $index => $iti)
                        <div class="col-md-3 col-md-6 col-m-12 ftco-animate">
                            <div class="destination">
                                <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="border: 1px solid #e6e6e6;background-image: url({{  asset('storage/app/'.$intinerary[$index]['mi_image'])  }}?{{ time() }});">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                                <div class="text p-3">
                                    <div class="d-flex">
                                        <div>
                                            <span class="price" style="color: #1872bf"><b>{{ $intinerary[$index]['mi_name'] }}</b></span>
                                        </div>
                                    </div>
                                    <br>
                                    <p>{{ $intinerary[$index]['mi_highlight'] }}</p>
                                    {{-- <p class="days"><span>2 days 3 nights</span></p> --}}
                                    <hr>
                                    <p class="bottom-area d-flex">
                                        <span><i class="icon-map-o"></i> San Franciso, CA</span> 
                                        <span class="ml-auto"><button class="btn btn-small btn-book" data-id="{{ $intinerary[$index]['mi_id'] }}" onclick="more(this)"><b>See More!</b></button></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>          
        </div>
    </section>
    @else

    @endif
    <!-- ***** Editor Pick Area Start ***** -->
    <section class="dorne-editors-pick-area bg-img bg-overlay-9 section-padding-100" style="background-image: url(assets_frontend_2/img/bg-img/hero-2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <span></span>
                        <h4>Article</h4>
                        <p>News</p>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($article as $a)
                @if ($loop->index == 0)
                    <div class="col-12 col-lg-12">
                    <div class="single-editors-pick-area wow fadeInUp" data-wow-delay="0.6s">
                        <img src="{{ asset('storage/app/article/article-') }}{{ $a->da_image }}?{{ time() }}" width="100%" alt="">
                        <div class="editors-pick-info">
                            <div class="places-total-destinations d-flex">
                                <a href="article/article/{{ $a->da_id }}">{{ $a->da_header }}</a>
                                {{-- <a href="#">{{ date('d-M-y',strtotime($a->da_created_at)) }}</a> --}}
                            </div>
                            <div class="add-more">
                                <a href="article/article/{{ $a->da_id }}">+</a>
                            </div>
                            </div>
                    </div>
                    </div>

                @endif
                

                @if ($loop->index == 1)
                    <div class="col-12 col-lg-6">
                        <div class="single-editors-pick-area wow fadeInUp" data-wow-delay="0.2s">
                        <img src="{{ asset('storage/app/article/article-') }}{{ $a->da_image }}?{{ time() }}" width="100%" height="100%" alt="">
                            <div class="editors-pick-info">
                                <div class="places-total-destinations d-flex">
                                    <a href="article/article/{{ $a->da_id }}">{{ $a->da_header }}</a>
                                    {{-- <a href="#">{{ date('d-M-y',strtotime($a->da_created_at)) }}</a> --}}
                                </div>
                                <div class="add-more">
                                    <a href="article/article/{{ $a->da_id }}">+</a>
                                </div>
                            </div>
                        </div>
                @endif

                @if ($loop->index == 2)
                        <div class="single-editors-pick-area wow fadeInUp" data-wow-delay="0.6s">
                        <img src="{{ asset('storage/app/article/article-') }}{{ $a->da_image }}?{{ time() }}" width="100%" alt="">
                            <div class="editors-pick-info">
                                <div class="places-total-destinations d-flex">
                                    <a href="article/article/{{ $a->da_id }}">{{ $a->da_header }}</a>
                                    {{-- <a href="#">{{ date('d-M-y',strtotime($a->da_created_at)) }}</a> --}}
                                </div>
                                <div class="add-more">
                                    <a href="article/article/{{ $a->da_id }}">+</a>
                                </div>
                            </div>
                        </div>

                    </div>
                @endif

                @if ($loop->index == 3)
                    <div class="col-12 col-lg-6">
                        <div class="single-editors-pick-area wow fadeInUp" data-wow-delay="0.4s">
                        <img src="{{ asset('storage/app/article/article-') }}{{ $a->da_image }}?{{ time() }}" width="100%" alt="">
                            <div class="editors-pick-info">
                                <div class="places-total-destinations d-flex">
                                    <a href="article/article/{{ $a->da_id }}">{{ $a->da_header }}</a>
                                    {{-- <a href="#">{{ date('d-M-y',strtotime($a->da_created_at)) }}</a> --}}
                                </div>
                                <div class="add-more">
                                    <a href="article/article/{{ $a->da_id }}">+</a>
                                </div>
                            </div>
                        </div>
                @endif


                @if ($loop->index == 4)
                        <div class="single-editors-pick-area wow fadeInUp" data-wow-delay="0.4s">
                        <img src="{{ asset('storage/app/article/article-') }}{{ $a->da_image }}?{{ time() }}" width="100%" alt="">
                            <div class="editors-pick-info">
                                <div class="places-total-destinations d-flex">
                                    <a href="article/article/{{ $a->da_id }}">{{ $a->da_header }}</a>
                                    {{-- <a href="#">{{ date('d-M-y',strtotime($a->da_created_at)) }}</a> --}}
                                </div>
                                <div class="add-more">
                                    <a href="article/article/{{ $a->da_id }}">+</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
                
                    
                </div>
                
                
            </div>
        </div>
    </section>
    <!-- ***** Editor Pick Area End ***** -->
   
    <!-- ***** Features Destinations Area End ***** -->
    
    

@endsection



@section('extra_scripts')

    <script type="text/javascript">
    function more(argument) {
        var parent = $(argument).data('id');
        window.location = ('{{ url('/package/package') }}/'+parent);
    }


    
    $( window ).load(function() {
        if ($(window).width() <= 600 && $(window).width() >= 401) {
            $('.item').css('background-size','100%');
            $('.item').css('background-repeat','no-repeat');
            $('#slider').css('height','330px');
            $('.carousel-example-generic').css('height','330px');
            $('.carousel-inner').css('height','330px');
            $('.carousel-indicators').css('margin-top','-35%');

        }
        else if($(window).width() <= 400){
            $('.item').css('background-size','100%');
            $('.item').css('background-repeat','no-repeat');
            $('#slider').css('height','200px');
            $('.carousel-example-generic').css('height','200px');
            $('.carousel-inner').css('height','200px');
            $('.carousel-indicators').css('margin-top','-50%');
        }
        else {
            $('.item').css('background-size','cover');

        }
    });

    function cari(argument) {
        var loc = $('#destination').val();
        $.ajax({
            type: "get",
            url:'{{ route('name_cari_intinerary') }}',
            data: {id:loc},
            success:function(data){
            
            $('.drop_here').html(data);

          },error:function(){
            iziToast.warning({
                icon: 'fa fa-info',
                position:'topRight',
                title: 'Error!',
                message: 'Terjadi Kesalahan!',
            });
          }
        });
    }
    </script>

    
@endsection 
