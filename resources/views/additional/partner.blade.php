 <!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <!-- meta charec set -->
       
        @include('layouts_frontend._head')
       
        <style type="text/css">
           
            .mb50{
                margin-top: 30px;
                background-color: white;
                padding-bottom: 60px;
                margin-right: -50px;
                margin-left: -50px;
            }
          
        </style>
    </head>
    
    <body id="body">  

        <!--
        Contact Us
        ==================================== -->        
        <section id="package" class="package background_page">
          <div class="background-hitam">
            <div class="container">

                <div class="mb50">
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
                                @foreach ($data as $e)
                                <figure class="team-member col-md-4 col-sm-8 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
                                    <div  style="box-shadow: 0px 2px 30px 0px #888888;">
                                        <div class="member-thumb">
                                            @if ($e->image != null)
                                                <img src="{{ asset('storage/app/agent/agent-'.$e->image) }}" alt="Team Member" class="agent" width="360" height="200">
                                            @else
                                                <img src="{{ asset('storage/app/NoImage'.'.png') }}" alt="Team Member" class="agent" width="360" height="200">
                                            @endif
                                        </div>
                                        <div>
                                            @if ($e->co_name != null)
                                                <p style="background-color: rgba(0, 66, 104, 0.7);color: white;padding: 10px 0px 10px 0px;font-size: 17px;margin-bottom: 0px !important;"><b>{{$e->co_name }}</b></p>
                                            @else
                                                <p style="background-color: rgba(0, 66, 104, 0.7);color: white;padding: 10px 0px 10px 0px;font-size: 17px;margin-bottom: 0px !important;">&nbsp;</p>
                                            @endif

                                        </div>
                                        <div style="background-color: white;color: #333333;padding: 10px 0px 10px 0px;font-size: 13px;min-height: 70px">
                                            <table align="left" width="100%">
                                                <tr>
                                                    <td>{{ $e->co_address }}</td>
                                                </tr>
                                                <tr>
                                                    <td>{{ $e->co_phone }}</td>
                                                </tr>
                                                {{-- <tr>
                                                    <td><a href=""><i class="fa fa-facebook"></i></a></td>
                                                </tr> --}}
                                            </table>
                                        </div>
                                    </div>
                                    <br><br>
                                    <br><br>
                                </figure>
                                @endforeach
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
