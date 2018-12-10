@extends('layouts_frontend_2._main')  

@section('extra_style')
<style type="text/css">
.tab-content{
    background-color:transparent !important;
}
.h-seratus{
    height: 103% !important;
}
.carousel{
background: #2f4357;
}
.carousel .item{
    min-height: 280px; /* Prevent carousel from being distorted if for some reason image doesn't load */
}
.carousel .item img{
    margin: 0 auto; /* Align slide image horizontally center */
}
.carousel-fade {
    .carousel-inner {
        .item {
            transition-property: opacity;
        }
        
        .item,
        .active.left,
        .active.right {
            opacity: 0;
        }

        .active,
        .next.left,
        .prev.right {
            opacity: 1;
        }

        .next,
        .prev,
        .active.left,
        .active.right {
            left: 0;
            transform: translate3d(0, 0, 0);
        }
    }

    .carousel-control {
        z-index: 2;
    }
}



.carousel, 
.carousel-inner, 
.carousel-inner .item {
    height: 100%;
}

.item:nth-child(1) {
    background: #74C390;
}

.item:nth-child(2) {
    background: #51BCE8;
}

.item:nth-child(3) {
    background: #E46653;
}

</style>
@endsection


@section('content')

    <!-- ***** Welcome Area Start ***** -->
  <div class="bs-example" @if (Auth::user() != null) style="height: 110%" @else style="height: 100%" @endif>
    

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-pause="hover" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-pause="hover" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-pause="hover" data-slide-to="2"></li>
        </ol>   
        <!-- Wrapper for carousel items -->

        <div class="carousel-inner">
            {{-- <div class="container h-seratus"> --}}
                        <div class="align-items-center justify-content-center">
                            <div class="col-sm-offset-2 col-sm-8">
                                <!-- Hero Search Form -->
                                   @if (Auth::User() != null)
                                    <div class="hero-search-form">
                                    <!-- Tabs -->
                                    <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-places" role="tabpanel" aria-labelledby="nav-places-tab">
                                                <h6>What are you looking for?</h6>
                                                <form id="cari">
                                                    {{-- <input type="" name="" readonly="" style="background-color: transparent;border:none"> --}}
                                                    <select id="destination" class="custom-select">
                                                        <option value="" selected>Your Destinations</option>
                                                        @foreach ($category as $e)
                                                            <option value="{{ $e->mc_id }}">{{ $e->mc_name}}</option>
                                                        @endforeach
                                                    </select>
                                                    <select id="month" class="custom-select">
                                                        <option value="" selected>Month Departure</option>
                                                        <option value="1">January</option>
                                                        <option value="2">February</option>
                                                        <option value="3">Mart</option>
                                                        <option value="4">April</option>
                                                        <option value="5">May</option>
                                                        <option value="6">June</option>
                                                        <option value="7">July</option>
                                                        <option value="8">August</option>
                                                        <option value="9">September</option>
                                                        <option value="10">October</option>
                                                        <option value="11">November</option>
                                                        <option value="12">December</option>
                                                    </select>
                                                    <button type="button" class="btn dorne-btn" onclick="cari()"><i class="fa fa-search pr-2" aria-hidden="true"></i> Search</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- expr --}}
                                @else
                                <div class="hero-search-form">
                                        <div style="height: 65%"> 
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    {{-- </div> --}}

            <div class="item active">
                @if (Auth::User() != null)
                    <section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url(storage/app/company/company-6.jpg);">
                @else
                    <section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url(storage/app/company/company-1.jpg);">
                @endif

                    
                </section>
            </div>
            <div class="item">
                 @if (Auth::User() != null)
                    <section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url(storage/app/company/company-7.jpg);">
                @else
                    <section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url(storage/app/company/company-2.jpg);">
                @endif
                    
                </section>
            </div>
            <div class="item">
                 @if (Auth::User() != null)
                    <section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url(storage/app/company/company-8.jpg);">
                @else
                    <section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url(storage/app/company/company-3.jpg);">
                @endif
                    
                </section>
            </div>
        </div>
        <!-- Carousel controls -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>
    
    <div class="scrolldown">
        
    </div>
    

    <!-- ***** About Area Start ***** -->
    @if (Auth::User() != null)
    @else
    <section class="dorne-about-area section-padding-0-0" style="padding-bottom: 4%">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="about-content text-center">
                            <div class="" style="padding-top: 4%"></div>
                            <h3>Discover your city with <br><span>Oke-trip.com</span></h3>
                            {{-- <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce quis tempus elit. Sed efficitur tortor neque, vitae aliquet urna varius sit amet. Ut rhoncus, nunc nec tincidunt volutpat, ex libero.</p> --}}
                            {{-- <div id="fb-root">
                                <div class="fb-page" data-href="https://www.facebook.com/Oke-Tripcom-233135077356613/?modal=admin_todo_tour" data-tabs="timeline" data-height="300" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"></div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    
    <!-- ***** About Area End ***** -->
    @if (Auth::User() != null)
        {{-- expr --}}
    <section class="ftco-section bg-light" style="margin-top: -50px;">
        <div class="container-fluid">
                <div class="row justify-content-start mb-5 pb-3">
                  <div class="col-12">
                    <div class="about-content text-center">
                        <h3>Itinerary<br></h3>
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
                                        <span><i class="icon-map-o"></i>

                                        </span> 
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
    <section class="dorne-editors-pick-area bg-img bg-overlay-9 section-padding-100" style="background-image: url({{  asset('storage/app/company/bg-5.jpg') }}?{{ time() }});">
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
                  <div class="post post-thumb col-md-6">
                    <a class="post-img" href="article/article/{{ $a->da_id }}"><img  src="{{ asset('storage/app/article/article-') }}{{ $a->da_image }}?{{ time() }}" style="height: 55% !important" alt=""></a>
                    <div class="post-body">
                      <div class="post-meta">
                        <a class="post-category cat-2" href="#">{{ date('d-M-y',strtotime($a->da_created_at)) }}</a>
                        
                      </div>
                      <h3 class="post-title"><a href="article/article/{{ $a->da_id }}">{{ $a->da_header }}</a></h3>
                    </div>
                  </div>
                @endif
                
                @if ($loop->index == 0)
                     <div class="post post-thumb col-md-6">
                    <a class="post-img" href="article/article/{{ $a->da_id }}"><img src="{{ asset('storage/app/article/article-') }}{{ $a->da_image }}?{{ time() }}" style="height: 55% !important" alt=""></a>
                    <div class="post-body">
                      <div class="post-meta">   
                        <a class="post-category cat-2" href="#">{{ date('d-M-y',strtotime($a->da_created_at)) }}</a>
                        
                      </div>
                      <h3 class="post-title"><a href="article/article/{{ $a->da_id }}">{{ $a->da_header }}</a></h3>
                    </div>
                  </div>
                @endif

                @if ($loop->index == 1)
                    <div class="post post-thumb col-md-6">
                    <a class="post-img" href="article/article/{{ $a->da_id }}"><img src="{{ asset('storage/app/article/article-') }}{{ $a->da_image }}?{{ time() }}" style="height: 55% !important" alt=""></a>
                    <div class="post-body">
                      <div class="post-meta">
                        <a class="post-category cat-2" href="#">{{ date('d-M-y',strtotime($a->da_created_at)) }}</a>
                        
                      </div>
                      <h3 class="post-title"><a href="article/article/{{ $a->da_id }}">{{ $a->da_header }}</a></h3>
                    </div>
                  </div>
                @endif


                @if ($loop->index == 2)
                       <div class="post post-thumb col-md-6">
                    <a class="post-img" href="article/article/{{ $a->da_id }}"><img src="{{ asset('storage/app/article/article-') }}{{ $a->da_image }}?{{ time() }}" style="height: 55% !important" alt=""></a>
                    <div class="post-body">
                      <div class="post-meta">
                        <a class="post-category cat-2" href="#">{{ date('d-M-y',strtotime($a->da_created_at)) }}</a>
                        
                      </div>
                      <h3 class="post-title"><a href="article/article/{{ $a->da_id }}">{{ $a->da_header }}</a></h3>
                    </div>
                  </div>
                @endif

                @if ($loop->index == 3)
                    <div class="post post-thumb col-md-6">
                    <a class="post-img" href="article/article/{{ $a->da_id }}"><img src="{{ asset('storage/app/article/article-') }}{{ $a->da_image }}?{{ time() }}" style="height: 55% !important" alt=""></a>
                    <div class="post-body">
                      <div class="post-meta">
                        <a class="post-category cat-2" href="#">{{ date('d-M-y',strtotime($a->da_created_at)) }}</a>
                        
                      </div>
                      <h3 class="post-title"><a href="article/article/{{ $a->da_id }}">{{ $a->da_header }}</a></h3>
                    </div>
                  </div>
                @endif


                @if ($loop->index == 4)
                       <div class="post post-thumb col-md-6">
                    <a class="post-img" href="article/article/{{ $a->da_id }}"><img src="{{ asset('storage/app/article/article-') }}{{ $a->da_image }}?{{ time() }}" style="height: 55% !important" alt=""></a>
                    <div class="post-body">
                      <div class="post-meta">
                        <a class="post-category cat-2" href="#">{{ date('d-M-y',strtotime($a->da_created_at)) }}</a>
                        
                      </div>
                      <h3 class="post-title"><a href="article/article/{{ $a->da_id }}">{{ $a->da_header }}</a></h3>
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

    $("#myCarousel").carousel({
        interval : 1000000,
        // pasue:"hover"
    });

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
      $('html, body').animate({
        scrollTop: $(".scrolldown").offset().top
    }, 1000);
        var loc = $('#destination').val();
        var month = $('#month').val();
        $.ajax({
            type: "get",
            url:'{{ route('name_cari_intinerary') }}',
            data: {id:loc,month:month},
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
