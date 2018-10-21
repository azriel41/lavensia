
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
                        <figure class="mix work-item"
                            {{-- @foreach ($cat[$index] as $i =>$tes) --}}
                                {{-- {{ str_replace(' ','-',$cat[$index][$i]) }} --}}
                            {{-- @endf  oreach --}}
                            >
                            <img src="{{  asset('storage/app/'.$intinerary[$index]['mi_image'])  }}" alt="" >
                            <figcaption class="overlay">
                                <button class="btn btn-small btn-book" style="margin-top: 15%;border-radius: 100%;height: 37px;" data-id="{{ $intinerary[$index]['mi_id'] }}" onclick="intinerary(this)" ><b><i class="fa fa-search"></i></b></button>
                                <h4>{{ $intinerary[$index]['mi_name'] }}</h4>
                                <p>{{ $intinerary[$index]['mi_highlight'] }}</p>
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
                        {{-- @foreach ($article1 as $a) --}}
                        @if ($article1 != null)
                            <figure class="team-member col-md-6 col-sm-12 col-sm-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
                            <div class="member-thumb_head">
                               <div class="recommended-destinations-hp-content-wrap">
                                    <div class="recommended-destinations-hp-content">
                                        <div class="recommended-destinations-hp-info">
                                            <div class="recommended-destinations-hp-destination">{{ $article1->da_header }}</div>
                                            <div class="interests">{{ substr(strip_tags($article1->da_desc), 0,70) }}{{ strlen($article1->da_desc) > 70 ?  "..." : "" }}  </div>
                                            {{-- <div class="recommended-destinations-hp-price">IDR 480,220</div> --}}
                                        </div>
                                    </div>
                                </div>
                               <div class="img-responsive">
                                <img src="{{ asset('/storage/app/article/'.'article-'.$article1->da_image) }}?{{ time() }}" alt="Team Member" >
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
                        @else

                        @endif
                        
                        @if ($article2 != null)
                        <figure class="team-member col-md-6 col-sm-12 col-sm-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
                            <div class="member-thumb_head">
                               <div class="recommended-destinations-hp-content-wrap">
                                <div class="recommended-destinations-hp-content">
                                    <div class="recommended-destinations-hp-info">
                                        <div class="recommended-destinations-hp-destination">{{ $article2->da_header }}</div>
                                            <div class="interests">{{ substr(strip_tags($article2->da_desc ), 0,70) }}{{ strlen($article2->da_desc ) > 70 ?  "..." : "" }}  </div>
                                            {{-- <div class="recommended-destinations-hp-price">IDR 480,220</div> --}}
                                        </div>
                                    </div>
                                </div>
                               <div class="img-responsive">
                                <img src="{{ asset('/storage/app/article/'.'article-'.$article2->da_image ) }}?{{ time() }}" alt="Team Member" >
                                <figcaption class="overlay_article_head">
                                    <div class="campaign-city-country-cta">
                                        <div class="book_bg">
                                            <a href="article/article/2" style="color: white !important;"> Show more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </figcaption>
                            </div>
                        </figure>
                        @else
                        @endif

                        @if ($article3 != null)
                        <figure style="margin-top: 30px;" class="team-member col-md-4 col-sm-8 col-sm-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
                            <div class="member-thumb">
                               <div class="recommended-destinations-hp-content-wrap">
                                <div class="recommended-destinations-hp-content">
                                    <div class="recommended-destinations-hp-info">
                                        <div class="recommended-destinations-hp-destination">{{ $article3->da_header }}</div>
                                            <div class="interests">{{ substr(strip_tags($article3->da_desc), 0,70) }}{{ strlen($article3->da_desc) > 70 ?  "..." : "" }}  </div>
                                            {{-- <div class="recommended-destinations-hp-price">IDR 480,220</div> --}}
                                        </div>
                                    </div>
                                </div>
                               <div class="img-responsive">
                                <img src="{{ asset('/storage/app/article/'.'article-'.$article3->da_image) }}?{{ time() }}" alt="Team Member" >
                                <figcaption class="overlay_article">
                                    <div class="campaign-city-country-cta">
                                        <div class="book_bg">
                                            <a href="article/article/3" style="color: white !important;"> Show more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </figcaption>
                            </div>
                        </figure>
                        @else
                        @endif

                        @if ($article4 != null)
                        <figure style="margin-top: 30px;" class="team-member col-md-4 col-sm-8 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
                            <div class="member-thumb">
                               <div class="recommended-destinations-hp-content-wrap">
                                <div class="recommended-destinations-hp-content">
                                    <div class="recommended-destinations-hp-info">
                                        <div class="recommended-destinations-hp-destination">{{ $article4->da_header }}</div>
                                            <div class="interests">{{ substr(strip_tags($article4->da_desc), 0,70) }}{{ strlen($article4->da_desc) > 70 ?  "..." : "" }}  </div>
                                            {{-- <div class="recommended-destinations-hp-price">IDR 480,220</div> --}}
                                        </div>
                                    </div>
                                </div>
                               <div class="img-responsive">
                                <img src="{{ asset('/storage/app/article/'.'article-'.$article4->da_image) }}?{{ time() }}" alt="Team Member" >
                                <figcaption class="overlay_article">
                                    <div class="campaign-city-country-cta">
                                        <div class="book_bg">
                                            <a href="article/article/4" style="color: white !important;"> Show more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </figcaption>
                            </div>
                        </figure>
                        @else
                        @endif

                        @if ($article5 != null)
                        <figure style="margin-top: 30px;" class="team-member col-md-4 col-sm-8 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
                            <div class="member-thumb">
                               <div class="recommended-destinations-hp-content-wrap">
                                <div class="recommended-destinations-hp-content">
                                    <div class="recommended-destinations-hp-info">
                                        <div class="recommended-destinations-hp-destination">{{ $article5->da_header }}</div>
                                            <div class="interests">{{ substr(strip_tags($article5->da_desc), 0,70) }}{{ strlen($article5->da_desc) > 70 ?  "..." : "" }}  </div>
                                            {{-- <div class="recommended-destinations-hp-price">IDR 480,220</div> --}}
                                        </div>
                                    </div>
                                </div>
                               <div class="img-responsive">
                                <img src="{{ asset('/storage/app/article/'.'article-'.$article5->da_image) }}?{{ time() }}" alt="Team Member" >
                                <figcaption class="overlay_article">
                                    <div class="campaign-city-country-cta">
                                        <div class="book_bg">
                                            <a href="article/article/5" style="color: white !important;"> Show more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </figcaption>
                            </div>
                        </figure>
                        @else
                        @endif
                        
                        
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
