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
                /*margin-top: 30px;*/
                background-color: white;
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
                background: transparent !important; 
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
                background-color:white;
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
            .img-responsive{
                margin: auto !important;
                border: 1px solid #bcbcbc;
                padding: 5px;
            }

        </style>
    </head>
    
    <body id="body">  

        <!--
        Contact Us
        ==================================== -->        
        <section id="package" class="package background_page">
            <div class="container">
                <div class="row mb50 margin_top_30px">
                     <!-- Header--> 
                    <div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
                        
                    </div>

                    <!-- Image--> 
                    <div class="col-sm-12 col-sm-12 col-sm-12 col-sm-12">
                        <div class="sec-sub-title text-center wow fadeInUp  animated col-sm-4" data-wow-duration="1000ms">
                                <img class="img-responsive" src="{{  asset('storage/app/'.$data[0]->mi_image)  }}" width="300px" height="400px" alt="">
                        </div>
                        <div class="sec-sub-title text-center wow fadeInUp  animated col-sm-8" data-wow-duration="1000ms">
                            <table width="100%"> 
                                <tr>
                                    <td align="left" valign="top" class="Hightlight"><h2 class="count_h2" style="margin-top: -5px;">{{ $data[0]->mi_name }}</h2></td>
                                </tr>
                                <tr>
                                    <td align="left" class="Hightlight"><h4 class="support">By : {{ $data[0]->mi_by }}</h4></td>
                                </tr>
                                <tr>
                                    <td align="left" class="Hightlight">{{ $data[0]->mi_highlight }}</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>

                                <tr>
                                    {{-- <td align="left"></td> --}}
                                    <td align="left"><button class="btn btn-small btn-orange download" id="pdf" data-id="{{ $data[0]->mi_nota }}" ><b><i class="fa fa-cloud-download"></i> Download</b></button></td>
                                </tr>
                            </table>


                        </div>
                    </div>
                </div>
                <div class="row mb50 margin_top_-40px">
                 {{-- @include('package.modal_book') --}}
                    <!-- Tabs--> 
                    <div class="sec-sub-title text-center wow fadeInUp  animated" data-wow-duration="1000ms">
                      <div class="container">
                        <ul class="nav nav-tabs ">
                            <li class="active"><a data-toggle="tab" href="#home"><i class="fa fa-plus-square-o"></i> Tour</a></li>
                            <li><a data-toggle="tab" href="#menu1"><i class="fa fa-money"></i> Price</a></li>
                            <li><a data-toggle="tab" href="#menu2"><i class="fa fa-plus"></i> Additional</a></li>
                            <li><a data-toggle="tab" href="#menu3"><i class="fa fa-text"></i> Term & Cond</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                                <div class="col-md-12">
                                    @foreach ($schedule as $index => $sch)
                                      <div style="margin-top: 20px"></div>
                                      <div style="min-height: 100px">
                                            <div class="col-md-1 col-md-1 col-md-1" style="border: 1px solid #bcbcbc;border-left: 2px solid #e74c3c;">
                                                <span>Day</span><br>
                                                <span class="day-tour">{{ $index+1 }}</span>
                                            </div>

                                            <div class="col-md-11 col-md-11 col-md-11">
                                                <p class="title-itin"><b>{{ $sch->ms_caption }}</b>   |   {{ $sch->ms_bld }}</p>
                                                <p class="desc-itin">{{ $sch->ms_description }}</p>
                                            </div>
                                       </div>
                                      <br>
                                    @endforeach
                                </div>
                            </div>

                            <div id="menu1" class="tab-pane fade">
                                <table width="100%" class="kiri">
                                    <br>
                                    <tr>
                                        <th><b>Price Table</b></th>
                                    </tr>
                                </table>
                                <div style="margin-top: 20px"></div>
                                <div class="table-responsive">
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
                                               <td>
                                                   <button class="btn btn-small btn-book" onclick="booking('{{ $det->md_id }}')" ><b><i class="fa fa-share-square-o"></i> Book Now!</b></button>
                                               </td>
                                            </tr>
                                          @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id="menu2" class="tab-pane fade">
                                <table width="100%" class="kiri">
                                    <br>
                                    <tr>
                                        <th><b>Additional Table</b></th>
                                    </tr>
                                </table>
                                <div style="margin-top: 20px"></div>
                                <div class="table-responsive">
                                    <table width="100%" class="table table-striped" align="center">
                                        <thead>
                                           <tr >
                                               <th class="center-al">No</th>
                                               <th class="center-al">Additional</th>
                                           </tr>
                                        </thead>
                                        <tbody>
                                           @foreach ($additional as $index => $element)
                                               <tr align="left">
                                                   <td>{{ $index+1 }}</td>
                                                   <td>{{ $additional[$index]['additional_ma_id'] }}</td>
                                                </tr>
                                          @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id="menu3" class="tab-pane fade">
                                <table width="100%" class="kiri">
                                    <br>
                                    <tr>
                                        <th><b>Term & Cond</b></th>
                                    </tr>
                                    
                                </table>
                                <div style="margin-top: 20px"></div>
                                <div class="pull-left">
                                    <span>{{ $data[0]->mi_term }}</span>
                                </div>
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
    

    
    function booking(id) {
        var rand1 = '{{ md5('Demi yang Maha Pengasih Lagi Maha Penyayang Bagi Sang Pencipta Alam Semesta').rand(1,1000000) }}';
        var rand2 = '{{ md5('Dengan Nama Allah Yang Maha Pengasih Lagi Maha Penyayang').rand(1,1000000) }}';
        var rand3 = '{{ md5('Segala Puji Bagi Allah Tuhan Seru Sekalian Alam').rand(1,1000000)}}';
        window.location=('{{ url('booking/booking') }}'+'?rand='+rand1+'&rand2='+rand2+'&rand3='+rand3+'&id='+id);
    }
    window.onload = function(){
       $('#pdf').click(function(){
            var parent = $(this).data('id');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                data : {id:parent},
                url  : ('{{ route('package_pdf') }}'),
                type : 'get',
                success: function (data) {
                    iziToast.success({
                        icon: 'fa fa-user',
                        title: 'Success!',
                        message: 'Downloaded!',
                    });
                },
                complete: function(data){
                    window.location.href = this.url;
                },
                error:function(){
                    iziToast.error({
                        icon: 'fas fa-times-circle',
                        title: 'Error!',
                        message: 'Something Wrong,Call Developer',
                    });
                }
            })
        })
       }
   
            
    
    
</script>
