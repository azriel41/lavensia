 <!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <!-- meta charec set -->
       
        @include('layouts_frontend._head')
       
        <style type="text/css">
           .background-hitam{
                background-color: #0000006e;
                padding-top: 40px;
                margin-bottom: -50px;
           }
            .mb50{
                margin-top: 30px;
                background-color: white;
                padding-bottom: 60px;
            }
            .package{
                background-image: url({{ asset('assets_frontend/img/image-gallery/12.jpg') }});
                /* Full height */
                height: 100%; 

                /* Center and scale the image nicely */
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
          
        </style>
    </head>
    
    <body id="body">  

        <!--
        Contact Us
        ==================================== -->        
        <section id="package" class="package">
          <div class="background-hitam">
            <div class="container">

                <div class="row mb50">
                    <section id="team" class="team ">
                        <div class="container">
                            <div class="row">
                    
                                <div class="sec-title text-center wow fadeInUp animated" data-wow-duration="700ms">
                                    <h2>Meet Our Agent</h2>
                                    <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                                </div>
                                
                                {{-- <div class="sec-sub-title text-center wow fadeInRight animated" data-wow-duration="500ms">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>
                                </div> --}}
                                <div style="margin-top: 40px">
                                    
                                </div>
                                <!-- single member -->
                                @foreach ($array as $element)
                                    {{-- expr --}}
                                @endforeach
                                <figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
                                    <div class="member-thumb">
                                        <img src="{{ asset('storage/app/agent/agent-'.auth::user()->id.'.jpg') }}" alt="Team Member" class="img-responsive agent">
                                        <figcaption class="overlay">
                                            <h5>voluptatem quia voluptas </h5>
                                            <p>sit aspernatur aut odit aut fugit,</p>
                                            <ul class="social-links text-center">
                                                <li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
                                                <li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
                                                <li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
                                            </ul>
                                        </figcaption>
                                    </div>
                                    <h4>John Filmr Doe</h4>
                                    <span>Managing Director</span>
                                </figure>
                                <!-- end single member -->
                            </div>
                        </div>
                    </section>
                </div>
            </div>
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
    

    
    function booking(argument) {
        window.location=('{{ route('booking') }}');
    }
    $(document).ready( function () {
        $('.datatable').DataTable();
    });
</script>
