
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
                        <div class="work-filter wow fadeInRight animated" data-wow-duration="500ms">
                            <ul class="text-center">
                                @foreach ($category as $val) 
                                    <li>
                                        <a href="javascript:;" data-filter=".{{ str_replace(' ','-',$val->mc_name) }}" class="active filter">{{ $val->mc_name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="project-wrapper" style="margin-bottom: 275px">
                    @foreach ($intinerary as $index => $iti)
                        <figure class="mix work-item 
                            @foreach ($cat as $i=>$tes)
                                {{ str_replace(' ','-',$cat[$index][$i])}}
                            @endforeach
                            ">
                            <img src="{{  asset('storage/app/'.$intinerary[$index]['mi_image'])  }}" alt="" >
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
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active"  style="background-image: url(assets_frontend/img/comingsnweb.jpg);"></div>
                    <div class="item" style="background-image: url(assets_frontend/img/comingsnweb.jpg);"></div>
                </div>
            </div>
        </section>

             <section id="team" class="team">
                <div class="container">
                    <div class="row">
                        <br>
                        <!-- single member -->
                        <figure class="team-member col-md-6 col-sm-12 col-sm-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
                            <div class="member-thumb_head">
                               <div class="recommended-destinations-hp-content-wrap">
                                    <div class="recommended-destinations-hp-content">
                                        <div class="recommended-destinations-hp-info">
                                            <div class="recommended-destinations-hp-destination">Jakarta</div>
                                            <div class="interests">Kehidupan Kota - Taman Hiburan - Belanja</div>
                                            <div class="recommended-destinations-hp-price">IDR 480,220</div>
                                        </div>
                                    </div>
                                </div>
                               <div class="img-responsive">
                                <img src="assets_frontend/img/team/4.jpg?{{ time() }}" alt="Team Member" >
                                </div>
                                <figcaption class="overlay_article_head">
                                    <div class="campaign-city-country-cta">
                                        <div class="book_bg" style="z-index: 99">
                                            <a href="article/article/1" style="color: white !important;"> Show more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </figcaption>
                            </div>
                        </figure>
                        <!-- end single member -->
                        
                        <!-- single member -->
                        <figure class="team-member col-md-6 col-sm-12 col-sm-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
                            <div class="member-thumb_head">
                               <div class="recommended-destinations-hp-content-wrap"><div class="recommended-destinations-hp-content"><div class="recommended-destinations-hp-info"><div class="recommended-destinations-hp-destination">Jakarta</div><div class="interests">Kehidupan Kota - Taman Hiburan - Belanja</div><div class="recommended-destinations-hp-price">IDR 480,220</div></div></div></div>
                                <img src="assets_frontend/img/team/5.jpg?{{ time() }}" alt="Team Member" class="img-responsive">
                                <figcaption class="overlay_article_head">
                                    <div class="campaign-city-country-cta">
                                        <div class="book_bg">
                                            <a href="article/article/2" style="color: white !important;"> Show more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </figcaption>
                            </div>
                        </figure>
                        <!-- end single member -->
                        
                        <figure style="margin-top: 30px;" class="team-member col-md-4 col-sm-8 col-sm-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
                            <div class="member-thumb">
                               <div class="recommended-destinations-hp-content-wrap"><div class="recommended-destinations-hp-content"><div class="recommended-destinations-hp-info"><div class="recommended-destinations-hp-destination">Jakarta</div><div class="interests">Kehidupan Kota - Taman Hiburan - Belanja</div><div class="recommended-destinations-hp-price">IDR 480,220</div></div></div></div>
                                <img src="assets_frontend/img/team/1.jpg?{{ time() }}" alt="Team Member" class="img-responsive">
                                <figcaption class="overlay_article">
                                    <div class="campaign-city-country-cta">
                                        <div class="book_bg">
                                            <a href="article/article/3" style="color: white !important;"> Show more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </figcaption>
                            </div>
                        </figure>

                        <figure style="margin-top: 30px;" class="team-member col-md-4 col-sm-8 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
                            <div class="member-thumb">
                               <div class="recommended-destinations-hp-content-wrap"><div class="recommended-destinations-hp-content"><div class="recommended-destinations-hp-info"><div class="recommended-destinations-hp-destination">Jakarta</div><div class="interests">Kehidupan Kota - Taman Hiburan - Belanja</div><div class="recommended-destinations-hp-price">IDR 480,220</div></div></div></div>
                                <img src="assets_frontend/img/team/3.jpg?{{ time() }}" alt="Team Member" class="img-responsive">
                                <figcaption class="overlay_article">
                                    <div class="campaign-city-country-cta">
                                        <div class="book_bg">
                                            <a href="article/article/4" style="color: white !important;"> Show more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </figcaption>
                            </div>
                        </figure>

                        <figure style="margin-top: 30px;" class="team-member col-md-4 col-sm-8 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
                            <div class="member-thumb">
                               <div class="recommended-destinations-hp-content-wrap"><div class="recommended-destinations-hp-content"><div class="recommended-destinations-hp-info"><div class="recommended-destinations-hp-destination">Jakarta</div><div class="interests">Kehidupan Kota - Taman Hiburan - Belanja</div><div class="recommended-destinations-hp-price">IDR 480,220</div></div></div></div>
                                <img src="assets_frontend/img/team/2.png" alt="Team Member" class="img-responsive">
                                <figcaption class="overlay_article">
                                    <div class="campaign-city-country-cta">
                                        <div class="book_bg">
                                            <a href="article/article/5" style="color: white !important;"> Show more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
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
