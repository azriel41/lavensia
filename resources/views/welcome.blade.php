<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <!-- meta charec set -->
       
        @include('layouts_frontend._head')
        <style type="text/css">
            .btn-primary {
                color: white;
                background-color: transparent;
                border-color: #ffffff;
            }
            .btn-primary:hover {
                color: black;
                background-color: #f4c800;
                border-color: #ffffff;
            }
            .btn-book{
                color: black;
                background-color: #f9ce05;
            }
            .logo{
                width: 100px;
            }
            .btn-primary:hover, .btn-primary:focus, .btn-primary.focus, .btn-primary:active, .btn-primary.active, .open>.dropdown-toggle.btn-primary {
                color: #000;
                background-color: #face03;
                border-color: #ffffff;
            }
        </style>
    </head>
    
    <body id="body">
        <!--
        Home Slider
        ==================================== -->
        
        <section id="slider">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            
                <!-- Indicators bullet -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                </ol>
                <!-- End Indicators bullet -->              
                
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    
                    <!-- single slide -->
                    <div class="item active" style="background-image: url(assets_frontend/img/image-gallery/12.jpg); height: 100%">
                        <div class="carousel-caption">
                            <h2 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated">Meet<span> LAVENSIA</span>!</h2>
                            <h3 data-wow-duration="1000ms" class="wow slideInLeft animated"><span class="color">/creative</span> Travel Agent.</h3>
                            <p data-wow-duration="1000ms" class="wow slideInRight animated">We are a professionals Travel Agent</p>
                            
                            <ul class="social-links text-center">
                                <li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
                                <li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
                                <li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
                                <li><a href=""><i class="fa fa-dribbble fa-lg"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end single slide -->
                    
                    <!-- single slide -->
                    <div class="item" style="background-image: url(assets_frontend/img/banner.jpg);">
                        <div class="carousel-caption">
                            <h2 data-wow-duration="500ms" data-wow-delay="500ms" class="wow bounceInDown animated">Meet<span> Team</span>!</h2>
                            <h3 data-wow-duration="500ms" class="wow slideInLeft animated"><span class="color">/ssssss</span> ONE PAGE.</h3>
                            <p data-wow-duration="500ms" class="wow slideInRight animated">We are a team of professionals</p>
                            
                            <ul class="social-links text-center">
                                <li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
                                <li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
                                <li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
                                <li><a href=""><i class="fa fa-dribbble fa-lg"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end single slide -->
                    
                </div>
                <!-- End Wrapper for slides -->
                
            </div>
        </section>
        
        <!--
        End Home SliderEnd
        ==================================== -->
        
        <!--
        Features
        ==================================== -->
        
        <section id="features" class="features">
            <div class="container">
                <div class="row">
                
                    <div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
                        <h2>Features</h2>
                        <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                    </div>

                    <!-- service item -->
                    <div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fa fa-github fa-2x"></i>
                            </div>
                            
                            <div class="service-desc">
                                <h3>Branding</h3>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>
                            </div>
                        </div>
                    </div>
                    <!-- end service item -->
                    
                    <!-- service item -->
                    <div class="col-md-4 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fa fa-pencil fa-2x"></i>
                            </div>
                            
                            <div class="service-desc">
                                <h3>Development</h3>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>
                            </div>
                        </div>
                    </div>
                    <!-- end service item -->
                    
                    <!-- service item -->
                    <div class="col-md-4 wow fadeInRight" data-wow-duration="500ms"  data-wow-delay="900ms">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fa fa-bullhorn fa-2x"></i>
                            </div>
                            
                            <div class="service-desc">
                                <h3>Consulting</h3>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>
                            </div>
                        </div>
                    </div>
                    <!-- end service item -->
                        
                </div>
            </div>
        </section>
        
        <!--
        End Features
        ==================================== -->
        
        
        <!--
        Our Works
        ==================================== -->
        
        <section id="works" class="works clearfix">
            <div class="container">
                <div class="row">
                
                    <div class="sec-title text-center">
                        <h2>LAVENSIA Tour & Travel</h2>
                        <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                    </div>
                    
                    <div class="sec-sub-title text-center">
                        <p>Paket Tour Domestik | Paket Tour Internasional | Galeri Lavensia | Passport & Visa</p>
                    </div>
                    
                    <div class="work-filter wow fadeInRight animated" data-wow-duration="500ms">
                        <ul class="text-center">
                            @foreach ($category as $cat) 
                                <li>
                                    <a href="javascript:;" data-filter="{{ $cat->mc_name }}" class="active filter">{{ $cat->mc_name }}</a>
                                </li>
                            @endforeach
                            <li><a href="javascript:;" data-filter=".domestik" class="filter">Tour Domestik</a></li>
                            <li><a href="javascript:;" data-filter=".internasional" class="filter">Tour Internasional</a></li>
                            <li><a href="javascript:;" data-filter=".china" class="filter">China</a></li>
                            <li><a href="javascript:;" data-filter=".photography" class="filter">photography</a></li>
                        </ul>
                    </div>
                    
                </div>
            </div>
            
            <div class="project-wrapper">
            
                <figure class="mix work-item domestik">
                    <img src="{{ asset ('assets_frontend/img/11.png')}}" alt="">
                    <figcaption class="overlay">
                        <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="{{ asset ('assets_frontend/img/11.png')}}"><i class="fa fa-eye fa-lg"></i></a>
                        <h4>TOUR BANGKOK  PATTAYA</h4>
                        <p>PERIODE :  7 Sep & 18 Aug 2018</p>
                        <br>
                        <button class="btn btn-small btn-book" onclick="more()"><b>See More!</b></button>
                    </figcaption>
                </figure>
                
                <figure class="mix work-item internasional">
                    <img src="{{ asset ('assets_frontend/img/22.png')}}" alt="">
                    <figcaption class="overlay">
                        <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="{{ asset ('assets_frontend/img/22.png')}}"><i class="fa fa-eye fa-lg"></i></a>
                        <h4>Labore et dolore magnam</h4>
                        <p>Photography</p>
                    </figcaption>
                </figure>
                
                <figure class="mix work-item china">
                    <img src="{{ asset ('assets_frontend/img/33.png')}}" alt="">
                    <figcaption class="overlay">
                        <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="{{ asset ('assets_frontend/img/works/item-3.jpg')}}"><i class="fa fa-eye fa-lg"></i></a>
                        <h4>Labore et dolore magnam</h4>
                        <p>Photography</p>
                    </figcaption>
                </figure>
                
                <figure class="mix work-item photography">
                    <img src="{{ asset ('assets_frontend/img/44.png')}}" alt="">
                    <figcaption class="overlay">
                        <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="{{ asset ('assets_frontend/img/works/item-4.png')}}"><i class="fa fa-eye fa-lg"></i></a>
                        <h4>Labore et dolore magnam</h4>
                        <p>Photography</p>
                    </figcaption>
                </figure>
            
                <figure class="mix work-item domestik">
                    <img src="{{ asset ('assets_frontend/img/55.png')}}" alt="">
                    <figcaption class="overlay">
                        <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="{{ asset ('assets_frontend/img/works/item-5.png')}}"><i class="fa fa-eye fa-lg"></i></a>
                        <h4>Labore et dolore magnam</h4>
                        <p>Photography</p>
                    </figcaption>
                </figure>
                
                <figure class="mix work-item internasional">
                    <img src="{{ asset ('assets_frontend/img/66.png')}}" alt="">
                    <figcaption class="overlay">
                        <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="{{ asset ('assets_frontend/img/works/item-6.png')}}"><i class="fa fa-eye fa-lg"></i></a>
                        <h4>Labore et dolore magnam</h4>
                        <p>Photography</p>
                    </figcaption>
                </figure>
                
                <figure class="mix work-item china">
                    <img src="{{ asset ('assets_frontend/img/77.png')}}" alt="">
                    <figcaption class="overlay">
                        <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="{{ asset ('assets_frontend/img/works/item-7.png')}}"><i class="fa fa-eye fa-lg"></i></a>
                        <h4>Labore et dolore magnam</h4>
                        <p>Photography</p>
                    </figcaption>
                </figure>
                
                <figure class="mix work-item photography">
                    <img src="{{ asset ('assets_frontend/img/88.png')}}" alt="">
                    <figcaption class="overlay">
                        <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="{{ asset ('assets_frontend/img/works/item-8.png')}}"><i class="fa fa-eye fa-lg"></i></a>
                        <h4>Labore et dolore magnam</h4>
                        <p>Photography</p>
                    </figcaption>
                </figure>
                
            </div>
        

        </section>
        
        <!--
        End Our Works
        ==================================== -->
        
        
        
        <!--
        Some fun facts
        ==================================== -->        
        
        <section id="facts" class="facts">
            <div class="parallax-overlay">
                <div class="container">
                    <div class="row number-counters">
                        
                        <div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms">
                            <h2 class="count_h2">Some Fun Facts</h2>
                            <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                        </div>
                        
                        <!-- first count item -->
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
                            <div class="counters-item">
                                <i class="fa fa-clock-o fa-3x"></i>
                                <strong data-to="3200">0</strong>
                                <!-- Set Your Number here. i,e. data-to="56" -->
                                <p>Hours of Work</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                            <div class="counters-item">
                                <i class="fa fa-users fa-3x"></i>
                                <strong data-to="120">0</strong>
                                <!-- Set Your Number here. i,e. data-to="56" -->
                                <p>Satisfied Clients</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
                            <div class="counters-item">
                                <i class="fa fa-rocket fa-3x"></i>
                                <strong data-to="360">0</strong>
                                <!-- Set Your Number here. i,e. data-to="56" -->
                                <p> Projects Delivered </p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
                            <div class="counters-item">
                                <i class="fa fa-trophy fa-3x"></i>
                                <strong data-to="6454">0</strong>
                                <!-- Set Your Number here. i,e. data-to="56" -->
                                <p>Awards Won</p>
                            </div>
                        </div>
                        <!-- end first count item -->
                
                    </div>
                </div>
            </div>
        </section>
        
        <!--
        End Some fun facts
        ==================================== -->
        
        
        <!--
        Contact Us
        ==================================== -->        
        
        <section id="contact" class="contact">
            <div class="container">
                <div class="row mb50">
                
                    <div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
                        <h2>Let’s Discuss</h2>
                        <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                    </div>
                    
                    <div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
                        <p>Keluh Kesah anda dan juga kritik anda sangat membangun perusahaan kami bertumbuh</p>
                    </div>
                    
                    <!-- contact address -->
                   {{--  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 wow fadeInLeft animated" data-wow-duration="500ms">
                        <div class="contact-address">
                            <h3>Cras at ultrices erat, sed vulputate!</h3>
                            <p>2345 Setwant natrer, 1234,</p>
                            <p>Washington. United States.</p>
                            <p>(401) 1234 567</p>
                        </div>
                    </div> --}}
                    <!-- end contact address -->
                    
                    <!-- contact form -->
                    <div class="col-lg-11 col-md-11 col-sm-7 col-xs-12 wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="contact-form">
                            <h3>Say hello!</h3>
                            <form action="#" id="contact-form">
                                <div class="input-group name-email">
                                    <div class="input-field">
                                        <input type="text" name="name" id="name" placeholder="Name" class="form-control">
                                    </div>
                                    <div class="input-field">
                                        <input type="email" name="email" id="email" placeholder="Email" class="form-control">
                                    </div>
                                </div>
                                <div class="input-group">
                                    <textarea name="message" id="message" placeholder="Message" class="form-control"></textarea>
                                </div>
                                <div class="input-group">
                                    <input type="submit" id="form-submit" class="pull-right" value="Send message">
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end contact form -->
                    
                    <!-- footer social links -->
                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 wow fadeInRight animated" data-wow-duration="500ms" data-wow-delay="600ms">
                        <ul class="footer-social">
                            <li><a href="https://www.behance.net/Themefisher"><i class="fa fa-behance fa-2x"></i></a></li>
                            <li><a href="https://www.twitter.com/Themefisher"><i class="fa fa-twitter fa-2x"></i></a></li>
                            <li><a href="https://dribbble.com/themefisher"><i class="fa fa-dribbble fa-2x"></i></a></li>
                            <li><a href="https://www.facebook.com/Themefisher"><i class="fa fa-facebook fa-2x"></i></a></li>
                        </ul>
                    </div>
                    <!-- end footer social links -->
                    
                </div>
            </div>
            
            <!-- Google map -->
            <div id="map_canvas" class="wow bounceInDown animated" data-wow-duration="500ms"></div>
            <!-- End Google map -->
            
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
        window.location=('{{ route('package') }}');
    }

</script>
