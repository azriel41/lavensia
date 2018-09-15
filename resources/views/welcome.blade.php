
<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <!-- meta charec set -->
        @include('layouts_frontend._head')
        <style type="text/css">
        </style>
    </head>
    
    <body id="body">
        <!--
        Home Slider
        ==================================== -->
        @if (Route::has('login'))
            @if (Auth::check())
            <div style="margin-top: 100px;">
                
            </div>
             <section id="package" class="works clearfix">
                <div class="container">
                    <div class="row">
                    
                        <div class="sec-title text-center">
                            <h2>LAVENSIA Tour & Travel</h2>
                            {{-- <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div> --}}
                        </div>
                        
                        <div class="sec-sub-title text-center">
                            <p>Paket Tour Domestik | Paket Tour Internasional | Galeri Lavensia | Passport & Visa</p>
                        </div>
                        
                        <div class="work-filter wow fadeInRight animated" data-wow-duration="500ms">
                            <ul class="text-center">
                                @foreach ($category as $cat) 
                                    <li>
                                        <a href="javascript:;" data-filter=".{{ $cat->mc_name }}" class="active filter">{{ $cat->mc_name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="project-wrapper">
                    @foreach ($intinerary as $index => $iti)
                        <figure class="mix work-item {{ $intinerary[$index]['category']['mc_name'] }}">
                            <img src="{{  asset('storage/app/'.$intinerary[$index]['mi_image'])  }}" alt="">
                            <figcaption class="overlay">
                                <button class="btn btn-small btn-book" style="margin-top: 15%;border-radius: 100%;height: 37px;" data-id="{{ $intinerary[$index]['mi_id'] }}" onclick="intinerary(this)" ><b><i class="fa fa-search"></i></b></button>
                                <h4>{{ $intinerary[$index]['mi_name'] }}</h4>
                                <p></p>
                                <br>
                                <button class="btn btn-small btn-book" data-id="{{ $intinerary[$index]['mi_id'] }}" onclick="more(this)"><b>See More!</b></button>
                            </figcaption>
                        </figure>                
                    @endforeach   
                </div>

            @else

            <section id="slider">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        
                    <!-- Indicators bullet -->
                    <ol class="carousel-indicators">
                        {{-- <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li> --}}
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    </ol>
                    <!-- End Indicators bullet -->     
                    {{-- <img src="{{ asset ('assets_frontend/img/t3.png')}}" alt="Brandi" class="pull-left img-responsive" style="position: absolute;z-index: 1000;width:300px;margin-top: 34%;margin-left: 5%;"> --}}
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <!-- single slide -->
                        <div class="img-responsive">
                            <div class="item active" style="background-image: url(assets_frontend/img/comingsnweb.jpg);">
                                <div class="carousel-caption">
                                   {{--  <h2 data-wow-duration="500ms" data-wow-delay="500ms" class="wow bounceInDown animated">Meet<span> LAVENSIA</span>!</h2>
                                    <h3 data-wow-duration="500ms" class="wow slideInLeft animated"><span class="color-maroon">CREATIVE</span> Travel Agent.</h3>
                                    <p data-wow-duration="500ms" class="wow slideInRight animated">We are a team of professionals</p> --}}
                                    
                                    {{-- <ul class="social-links text-center">
                                        <li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
                                        <li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
                                        <li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
                                        <li><a href=""><i class="fa fa-dribbble fa-lg"></i></a></li>
                                    </ul> --}}
                                </div>
                            </div>
                        </div>
                        <!-- end single slide -->
                        
                    </div>
                    <!-- End Wrapper for slides -->
                    
                </div>
            </section>

             <section id="team" class="team">
                <div class="container">
                    <div class="row">
            
                        {{-- <div class="sec-title text-center wow fadeInUp animated" data-wow-duration="700ms">
                            <h2>ARTICLE</h2>
                        </div> --}}
                        <br>
                        
                    {{--     <div class="sec-sub-title text-center wow fadeInRight animated" data-wow-duration="500ms">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>
                        </div> --}}

                        <!-- single member -->
                        <figure class="team-member col-md-6 col-sm-12 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
                            <div class="member-thumb_head">
                               <div class="recommended-destinations-hp-content-wrap"><div class="recommended-destinations-hp-content"><div class="recommended-destinations-hp-info"><div class="recommended-destinations-hp-destination">Jakarta</div><div class="interests">Kehidupan Kota - Taman Hiburan - Belanja</div><div class="recommended-destinations-hp-price">IDR 480,220</div></div></div></div>
                                <img src="assets_frontend/img/team/6.png" alt="Team Member" class="img-responsive">
                                <figcaption class="overlay_article_head">
                                    <div class="campaign-city-country-cta">
                                        <div class="book"> 
                                            <div class="campaign-city-country-cta"><div class="book"><a href="yo.php" style="color: white !important"> Show more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div></div>
                                        </div>
                                    </div>
                                </figcaption>
                            </div>
                        </figure>
                        <!-- end single member -->
                        
                        <!-- single member -->
                        <figure class="team-member col-md-6 col-sm-12 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
                            <div class="member-thumb_head">
                               <div class="recommended-destinations-hp-content-wrap"><div class="recommended-destinations-hp-content"><div class="recommended-destinations-hp-info"><div class="recommended-destinations-hp-destination">Jakarta</div><div class="interests">Kehidupan Kota - Taman Hiburan - Belanja</div><div class="recommended-destinations-hp-price">IDR 480,220</div></div></div></div>
                                <img src="assets_frontend/img/team/6.png" alt="Team Member" class="img-responsive">
                                <figcaption class="overlay_article_head">
                                    <div class="campaign-city-country-cta">
                                        <div class="book"> 
                                            <div class="campaign-city-country-cta"><div class="book"><a href="yo.php" style="color: white !important"> Show more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div></div>
                                        </div>
                                    </div>
                                </figcaption>
                            </div>
                        </figure>
                        <!-- end single member -->
                        
                        <figure style="margin-top: 5px" class="team-member col-md-4 col-sm-8 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
                            <div class="member-thumb">
                               <div class="recommended-destinations-hp-content-wrap"><div class="recommended-destinations-hp-content"><div class="recommended-destinations-hp-info"><div class="recommended-destinations-hp-destination">Jakarta</div><div class="interests">Kehidupan Kota - Taman Hiburan - Belanja</div><div class="recommended-destinations-hp-price">IDR 480,220</div></div></div></div>
                                <img src="assets_frontend/img/team/member-1.png" alt="Team Member" class="img-responsive">
                                <figcaption class="overlay_article">
                                    <div class="campaign-city-country-cta">
                                        <div class="book"> 
                                            <div class="campaign-city-country-cta"><div class="book"><a href="yo.php" style="color: white !important"> Show more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div></div>
                                        </div>
                                    </div>
                                </figcaption>
                            </div>
                        </figure>

                        <figure style="margin-top: 5px" class="team-member col-md-4 col-sm-8 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
                            <div class="member-thumb">
                               <div class="recommended-destinations-hp-content-wrap"><div class="recommended-destinations-hp-content"><div class="recommended-destinations-hp-info"><div class="recommended-destinations-hp-destination">Jakarta</div><div class="interests">Kehidupan Kota - Taman Hiburan - Belanja</div><div class="recommended-destinations-hp-price">IDR 480,220</div></div></div></div>
                                <img src="assets_frontend/img/team/member-1.png" alt="Team Member" class="img-responsive">
                                <figcaption class="overlay_article">
                                    <div class="campaign-city-country-cta">
                                        <div class="book"> 
                                            <div class="campaign-city-country-cta"><div class="book"><a href="yo.php" style="color: white !important"> Show more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div></div>
                                        </div>
                                    </div>
                                </figcaption>
                            </div>
                        </figure>

                        <figure style="margin-top: 5px" class="team-member col-md-4 col-sm-8 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
                            <div class="member-thumb">
                               <div class="recommended-destinations-hp-content-wrap"><div class="recommended-destinations-hp-content"><div class="recommended-destinations-hp-info"><div class="recommended-destinations-hp-destination">Jakarta</div><div class="interests">Kehidupan Kota - Taman Hiburan - Belanja</div><div class="recommended-destinations-hp-price">IDR 480,220</div></div></div></div>
                                <img src="assets_frontend/img/team/member-1.png" alt="Team Member" class="img-responsive">
                                <figcaption class="overlay_article">
                                    <div class="campaign-city-country-cta">
                                        <div class="book"> 
                                            <div class="campaign-city-country-cta"><div class="book"><a href="yo.php" style="color: white !important"> Show more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div></div>
                                        </div>
                                    </div>
                                </figcaption>
                            </div>
                        </figure>
                        
                    </div>
                </div>
        </section>

        
        <!--
        Our Works
        ==================================== -->
         

                @endif
            @endif

       
            <div class="drop_here">
                
            </div>
            
        

        </section>
        
        <!--
        End Contact Us
        ==================================== -->
        @include('layouts_frontend._footer')
        <a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>
        @include('layouts_frontend._scripts')
        
    </body>
</html>

<script type="text/javascript">
    
    function more(argument) {
        var parent = $(argument).data('id');
        window.location = ('{{ url('/package/package') }}/'+parent);
    }

    function intinerary(argument) {
        var parent = $(argument).data('id');
        $.ajax({
            type: "get",
            url:'{{ route('package_modal_detail') }}',
            data: { id:parent },
            success:function(data){
            
            $('.drop_here').html(data);
            $('#myModal').modal('show');


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
