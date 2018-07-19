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
            .btn-primary:hover, .btn-primary:focus, .btn-primary.focus, .btn-primary:active, .btn-primary.active, .open>.dropdown-toggle.btn-primary {
                color: #000;
                background-color: #face03;
                border-color: #ffffff;
            }
            .btn-book{
                color: black;
                background-color: #f9ce05;
            }
            .logo{
                width: 100px;
            }
            .support{
                margin-top: 10px;
            }
            .mb50{
                margin-top: 30px;
                background-color: white;
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
            .nav-tabs { 
                border-bottom: 2px solid #DDD; 
            }
            .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover {
                border-width: 0; 
            }
            .nav-tabs > li > a {
                border: none; 
                color: #666; 
            }
            .nav-tabs > li.active > a, .nav-tabs > li > a:hover {
                border: none; 
                color: #630247 !important; 
                background: #f8cd04 !important; 
            }
            .nav-tabs > li > a::after {
                content: ""; 
                background: #dd0000; 
                height: 2px; position: absolute; 
                width: 100%; 
                left: 0px; 
                bottom: -1px; 
                transition: all 250ms ease 0s; 
                transform: scale(0); 
            }
            .nav-tabs > li.active > a::after, .nav-tabs > li:hover > a::after {
                transform: scale(1); 
            }
            .tab-nav > li > a::after {
                background: #21527d none repeat scroll 0% 0%; 
                color: #fff; 
            }

            .tab-pane {
                padding: 5px 0; 
                margin-left: 20px;
            }
            .tab-content {
                padding:5px;
                background-color:#f6f6f6;
                min-height: 400px;
            }
            .kiri{
                text-align:left;
            }
            /* MODAL */
            .modal-backdrop {
                z-index: 1040 !important;
            }
            .modal-dialog {
                margin: auto;
                z-index: 1100 !important;
                width: 700px;
            }
            .modal-content {
                border-radius: 0px; 
            }
            .modal {
              text-align: center;
            }

            @media screen and (min-width: 768px) { 
              .modal:before {
                display: inline-block;
                vertical-align: middle;
                content: " ";
                height: 100%;
              }
            }
            .modal-dialog {
              display: inline-block;
              vertical-align: middle;
            }
            .center-al{
                text-align: center;
            }
            /*btn orange*/
            .btn-orange {
                color: white;
                background-color: #eb4d4b;
                border-color: #ffffff;
            }
            .btn-orange:hover {
                color: #534c4c;
                background-color: #ff6b6b;
                border-color: white;
            }
        </style>
    </head>
    
    <body id="body">  

        <!--
        Contact Us
        ==================================== -->        
        <section id="package" class="package">
            <div class="container">

                <div class="row mb50">

                 @include('package.modal_book')

                    <!-- Header--> 
                    <div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
                        <h2 class="count_h2">{{ $data[0]->mi_name }}</h2>
                        <h4 class="support">By : {{ $data[0]->mi_by }}</h4>
                        <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                    </div>

                    <!-- Image--> 
                    <div class="sec-sub-title text-center wow fadeInUp  animated" data-wow-duration="1000ms">
                        <img src="{{  asset('storage/app/'.$data[0]->mi_image)  }}" alt="" width="39%" height="24%">
                    </div>

                    <!-- Hightlight--> 

                    <div class="sec-sub-title text-center wow fadeInUp  animated" data-wow-duration="1000ms">
                      <div class="container">
                        <table width="100%"> 
                            <tr>
                                <td align="left" valign="top"><h4>HIGHLIGHT<h4></td>
                                <td valign="top">:</td>
                                <td align="left" style="padding-left: 30px;"><h4>{{ $data[0]->mi_highlight }}</h4></td>
                            </tr>
                        </table>
                      </div>
                    </div>

                    <div class="container">
                        <button class="btn btn-small btn-orange" onclick="pdf()" ><b><i class="fa fa-cloud-download"></i> Download</b></button>
                    </div>

                    <!-- Tabs--> 
                    <div class="sec-sub-title text-center wow fadeInUp  animated" data-wow-duration="1000ms">
                      <div class="container">
                        <ul class="nav nav-tabs ">
                            <li class="active"><a data-toggle="tab" href="#home"><i class="fa fa-plus-square-o"></i> Tour Detail</a></li>
                            <li><a data-toggle="tab" href="#menu1"><i class="fa fa-money"></i> Price</a></li>
                            <li><a data-toggle="tab" href="#menu2"><i class="fa fa-plus"></i> Additional</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                                <table width="100%" class="kiri">
                                    <br>
                                    @foreach ($schedule as $sch)
                                        <tr>
                                        <th><b>DAY {{ $sch->ms_detail }} - {{ $sch->ms_caption }}</b></th>
                                        </tr>

                                            <tr>
                                                <td>&nbsp;</td>
                                            </tr>
                                        
                                        <tr >
                                            <td>{{ $sch->ms_description }}</td>
                                        </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                            </tr>
                                    @endforeach
                                </table>
                            </div>

                            <div id="menu1" class="tab-pane fade">
                                <table width="100%" class="kiri">
                                    <br>
                                    <tr>
                                        <th><b>Price Table</b></th>
                                    </tr>
                                </table>
                                <i class="devider"></i>
                                <div style="margin-top: 20px"></div>
                                <table width="100%" class="table table-striped" align="center">
                                    <thead>
                                       <tr >
                                           <th class="center-al">No</th>
                                           <th class="center-al">Code Tour</th>
                                           <th class="center-al">Date</th>
                                           <th class="center-al">Price Adult</th>
                                           <th class="center-al">Price Child</th>
                                           <th class="center-al">Price Invent</th>
                                           <th class="center-al">Seat Remain</th>
                                           <th class="center-al">Term & con</th>
                                           <th class="center-al">Book</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       @foreach ($detail as $index => $det)
                                           <tr align="left">
                                               <td>{{ $index+1 }}</td>
                                               <td>{{ $det->md_nota }}</td>
                                               <td>{{ date('d M Y',strtotime($det->md_start))  }} - {{ date('d M Y',strtotime($det->md_end))  }}</td>
                                               <td align="right">{{ number_format($det->md_adult_price,0,'','.') }}</td>
                                               <td align="right">{{ number_format($det->md_child_price,0,'','.') }}</td>
                                               <td align="right">{{ number_format($det->md_infant_price,0,'','.') }}</td>
                                               <td>{{ $det->md_seat }}</td>
                                               <td>{{ $det->md_term }}</td>
                                               <td>
                                                   <button class="btn btn-small btn-book" onclick="booking()" ><b><i class="fa fa-share-square-o"></i> Book Now!</b></button>
                                               </td>
                                            </tr>
                                      @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div id="menu2" class="tab-pane fade">
                                <table width="100%" class="kiri">
                                    <br>
                                    <tr>
                                        <th><b>Price Table</b></th>
                                    </tr>
                                </table>
                                <i class="devider"></i>
                                <div style="margin-top: 20px"></div>
                                <table width="100%" class="table table-striped" align="center">
                                    <thead>
                                       <tr >
                                           <th class="center-al">No</th>
                                           <th class="center-al">Code Tour</th>
                                           <th class="center-al">Date</th>
                                           <th class="center-al">Price Adult</th>
                                           <th class="center-al">Price Child</th>
                                           <th class="center-al">Price Invent</th>
                                           <th class="center-al">Seat Remain</th>
                                           <th class="center-al">Term & con</th>
                                           <th class="center-al">Book</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       @foreach ($data as $index => $element)
                                           <tr align="left">
                                               <td>{{ $index+1 }}</td>
                                               <td>{{ $data[$index]['md_nota'] }}</td>
                                               <td>{{ $data[$index]['md_start'] }} - {{ $data[$index]['md_end'] }}</td>
                                               <td align="right">{{ number_format($data[$index]['md_adult_price'],0,'','.') }}</td>
                                               <td align="right">{{ number_format($data[$index]['md_child_price'],0,'','.') }}</td>
                                               <td align="right">{{ number_format($data[$index]['md_infant_price'],0,'','.') }}</td>
                                               <td>{{ $data[$index]['md_seat_remain'] }}</td>
                                               <td>{{ $data[$index]['md_term'] }}</td>
                                               <td>
                                                   <button class="btn btn-small btn-book" onclick="booking()" ><b><i class="fa fa-share-square-o"></i> Book Now!</b></button>
                                               </td>
                                            </tr>
                                      @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                      </div>
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
