<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <!-- meta charec set -->
       
        @include('layouts_frontend._head')
       
        <style type="text/css">
            
            .btn-plus {
                color: black;
                border-radius: 50%;
                text-align: center;
                height: 37px;
                background-color: #f4c800;
                border-color: #ffffff;
            }
            .btn-minus {
                color: black;
                border-radius: 50%;
                text-align: center;
                height: 37px;
                background-color: red;
                border-color: #ffffff;
            }
           
            .btn-book{
                color: white;
                background-color: #f9ce05;
            }
            .logo{
                width: 100px;
            }
            .support{
                margin-top: 10px;
            }
            .mb50{
                background-color: white;
                margin-bottom: 10px !important;
                padding: 0px 0px 0px 0px !important;
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
            .col1{
                min-height: 100px;
            }
            .col2{
                background-color: #eeeeee94;
                min-height: 100px;
            }
            .margin-top-20px{
                margin-top: 20px;
            }
            label{
                margin-top: 10px;
            }
            
            fieldset.scheduler-border {
                padding: 0 1.4em 1.4em 1.4em !important;
                margin: 0 0 1.5em 0 !important;
                -webkit-box-shadow:  0px 0px 0px 0px #000;
                        box-shadow:  0px 0px 0px 0px #000;
            }
            legend.scheduler-border {
                font-size: 1.2em !important;
                font-weight: bold !important;
                text-align: left !important;
                width:auto;
                padding:0 10px;
                border-bottom:none;
            }

            /*****************************************
              upload button styles
            ******************************************/
            .file-upload {
                position: relative;
                display: inline-block;
            }

            .file-upload__label {
              display: block;
              padding: 1em 2em;
              color: #fff;
              background: #222;
               transition: background .3s;
              
              &:hover {
                 cursor: pointer;
                 background: #000;
              }
            }
                
            .file-upload__input {
                position: absolute;
                left: 0;
                top: 0;
                right: 0;
                bottom: 0;
                font-size: 1;
                width:0;
                height: 100%;
                opacity: 0;
            }
            textarea{
                max-width: 100%;
            }
            .pointer_dis{
                pointer-events: none;
                opacity: 0.5;
            }

            .borderimg2 { 
                border: 10px solid transparent;
                padding: 15px;
                -webkit-border-image: url('{{ asset('assets/images/border.png') }}') 30 stretch; /* Safari 3.1-5 */
                -o-border-image: url('{{ asset('assets/images/border.png') }}') 30 stretch; /* Opera 11-12.1 */
                border-image: url('{{ asset('assets/images/border.png') }}') 30 stretch;
            }

            .readonly{
                pointer-events: none;
                opacity: 0.8;
                background: #8888;
            }

   /*         thead{
                background: purple;
                color: white
            }*/
           /* .bootstrap-select:hover{
                border: 1px solid;
            }*/
            .table-responsive {
              overflow-y: visible !important;
            }
            @media (max-width: 767px) {
                .table-responsive .dropdown-menu {
                    position: static !important;
                }
            }
            @media (min-width: 768px) {
                .table-responsive {
                    overflow: inherit;
                }
            }
            .dropdown-menu .inner{
                z-index: 99999999 !important;
            }
            .invoice_field{
                z-index: -1;
            }
            .errors{
                border-color: red;
            }
            li.active > a{
                background-color: purple !important;
                color: white !important;
                border-color: purple !important;
            }
            .tab-content{
              overflow-y:scroll;
              overflow-x:hidden;
              max-height: 250px;
            }
            .calc{
                z-index: 99999;
            }
        
            .disabled{
                display: none;
            }
            .uppercase{
                text-transform: uppercase;
            }
            .img-responsive{
                margin: auto !important;
                border: 1px solid #bcbcbc;
                padding: 5px;
            }
        </style>
    </head>
    
    <body id="body" style="font-size: 12px">  

        <!--
        Contact Us
        ==================================== -->        
        <section id="package" class="package background_page">
            <div class="container">

                <div class="row mb50">
                </div>

                 @include('package.modal_book')

                    <!-- Header--> 
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
                                    <td align="left" valign="top" class="Hightlight" colspan="3"><h2 style="margin-top: -5px;font-weight: bold;">{{ $data[0]->mi_name }}</h2></td>
                                </tr>
                                <tr>
                                    <td width="20px" align="left" class="Hightlight">Itinerary </td>
                                    <td width="70px">: </td>
                                    <td align="left" class="Hightlight"><h4>{{ $data[0]->md_nota }}</h4></td>
                                </tr>
                                <tr>
                                    <td align="left" class="Hightlight"><h4 class="support">Flight</h4></td>
                                    <td>: </td>
                                    <td align="left" class="Hightlight"><h4 class="support">{{ $data[0]->mi_by }}</h4></td>
                                </tr>
                                <tr>
                                    <td align="left" class="Hightlight"><h4 class="support">Highlight</h4></td>
                                    <td>: </td>
                                    <td align="left" class="Hightlight"><h4 class="support">{{ $data[0]->mi_highlight }}</h4></td>
                                </tr>
                                <tr>
                                    <td align="left" class="Hightlight"><h4 class="support">Periode</h4></td>
                                    <td>: </td>
                                    <td align="left" class="Hightlight"><h4 class="support">{{ date('d F y',strtotime($data[0]->md_start)) }}  -  {{ date('d F y',strtotime($data[0]->md_start)) }}</h4></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>

                            </table>
                        </div>
                        <div class="sec-sub-title text-center wow fadeInUp  animated col-sm-12" data-wow-duration="1000ms">
                            <table class="" align="center">
                                <tr>
                                        {{-- <td align="left"></td> --}}
                                        <td align="left"><button class="btn btn-small btn-book download_itin" id="pdf" data-id="{{ $data[0]->mi_id }}" ><b><i class="fa fa-cloud-download"></i> Itinerary</b></button></td>
                                        <td align="left">&nbsp;</td>
                                        <td align="left"><button class="btn btn-small btn-orange download_pdf" id="pdf" data-id="{{ $data[0]->db_intinerary_id }}" ><b><i class="fa fa-cloud-download"></i> Profil</b></button></td>
                                        <td align="left">&nbsp;</td>
                                        <td align="left"><button class="btn btn-small btn-primary download_md_tata_tertib" id="pdf" data-id="{{ $data[0]->mi_id }}" ><b><i class="fa fa-cloud-download"></i> Tata Tertib</b></button></td>
                                        <td align="left">&nbsp;</td>
                                        <td align="left"><button class="btn btn-small btn-info download_final" id="pdf" data-id="{{ $data[0]->mi_id }}" ><b><i class="fa fa-cloud-download"></i> Final</b></button></td>
                                        <td align="left">&nbsp;</td>
                                        @if ($data[0]->db_total_remain == 0)
                                        <td align="left"><button class="btn btn-small btn-success download_invoice" id="pdf" data-id="{{ $data[0]->db_id }}" ><b><i class="fa fa-cloud-download"></i> Invoice</b></button></td>
                                        @else
                                         <td align="left"><button class="btn btn-small btn-default" id="pdf" ><b><i class="fa fa-cloud-download"></i> Invoice</b></button></td>
                                        @endif                                        
                                        <td align="left">&nbsp;</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row mb50">
                     <!-- Header--> 
                    <div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
                    </div>
                    <!-- Image--> 
                    <div class="col-sm-12 col-sm-12 col-sm-12 col-sm-12">
                        <div class="sec-sub-title text-center wow fadeInUp  animated col-sm-6" data-wow-duration="1000ms">
                            <table width="100%" class="table table-striped"> 
                                <h3 class="count_h2" style="margin-top: -5px;font-weight: bold;">Booking Detail</h3>
                                <br>
                                <tr>
                                    <td width="20%" align="left" class="Hightlight">Transaksi</td>
                                    <td width="5%">: </td>
                                    <td align="left" class="Hightlight" colspan="7">{{ $data[0]->db_kode_transaksi }}</td>
                                </tr>
                                <tr>
                                    <td align="left" class="Hightlight">Status</td>
                                    <td>: </td>
                                    <td align="left" class="Hightlight" colspan="7">
                                        @if ($data[0]->db_status == 'Waiting List')
                                            <span class="label label-warning"> {{ $data[0]->db_status }}</span>
                                        @elseif ($data[0]->db_status == 'Holding Confirm')
                                            <span class="label label-success"> {{ $data[0]->db_status }}</span>
                                        @elseif ($data[0]->db_status == 'Canceled')
                                            <span class="label label-danger"> {{ $data[0]->db_status }}</span>
                                        @else
                                            <span class="label label-info"> {{ $data[0]->db_status }}</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" class="Hightlight">Name</td>
                                    <td>: </td>
                                    <td align="left" class="Hightlight" colspan="7">{{ $data[0]->db_name }}</td>
                                </tr>
                                <tr>
                                    <td align="left" class="Hightlight">Tlp</td>
                                    <td >: </td>
                                    <td  align="left" class="Hightlight" colspan="7">{{ $data[0]->db_telp }}</td>
                                </tr>
                                <tr>
                                    <td align="left" class="Hightlight">Adult</td>
                                    <td>: </td>
                                    <td align="right" class="Hightlight">{{ number_format($data[0]->db_total_adult,'0','.','')}}</td>
                                    <td align="left" class="Hightlight">Child</td>
                                    <td>: </td>
                                    <td align="right" class="Hightlight">{{ number_format($data[0]->db_total_child,0,'','.')}}</td>
                                    <td align="left" class="Hightlight">Infant</td>
                                    <td>: </td>
                                    <td align="right" class="Hightlight">{{ number_format($data[0]->db_total_infant,0,'','.')}}</td>
                                </tr>
                                <tr>
                                    <td align="left" class="Hightlight">Adult</td>
                                    <td>: </td>
                                    <td align="right" class="Hightlight">{{ number_format($data[0]->md_adult_price,0,'','.')}}</td>
                                    <td align="left" class="Hightlight">Child</td>
                                    <td>: </td>
                                    <td align="right" class="Hightlight">{{ number_format($data[0]->md_child_price,0,'','.')}}</td>
                                </tr>
                                <tr>
                                    <td align="left" class="Hightlight">Infant</td>
                                    <td>: </td>
                                    <td align="right" class="Hightlight">{{ number_format($data[0]->md_infant_price,0,'','.')}}</td>
                                    <td align="left" class="Hightlight">Child w b</td>
                                    <td>: </td>
                                    <td align="right" class="Hightlight">{{ number_format($data[0]->md_child_w_price,0,'','.')}}</td>
                                </tr>
                                <tr>
                                    <td align="left" class="Hightlight">Agent Com</td>
                                    <td>: </td>
                                    <td align="right" class="Hightlight">{{ number_format($data[0]->md_agent_com,0,'','.')}}</td>
                                    <td align="left" class="Hightlight">Tips</td>
                                    <td>: </td>
                                    <td align="right" class="Hightlight">{{ number_format($data[0]->md_tips,0,'','.')}}</td>
                                </tr>
                                <tr>
                                    <td align="left" class="Hightlight">Visa Tips</td>
                                    <td>: </td>
                                    <td align="right" class="Hightlight">{{ number_format($data[0]->md_visa,0,'','.')}}</td>
                                    <td align="left" class="Hightlight">Visa Tips</td>
                                    <td>: </td>
                                    <td align="right" class="Hightlight">{{ number_format($data[0]->md_tips,0,'','.')}}</td>
                                </tr>
                                <tr>
                                    <td align="left" class="Hightlight">Room Price</td>
                                    <td>: </td>
                                    <td align="right" class="Hightlight" colspan="7">Rp. {{ number_format($data[0]->db_total_room,0,'','.') }}</td>
                                </tr>
                                <tr>
                                    <td align="left" class="Hightlight">Add Price</td>
                                    <td>: </td>
                                    <td align="right" class="Hightlight" colspan="7">Rp. {{ number_format($data[0]->db_total_additional,0,'','.') }}</td>
                                </tr>
                                <tr>
                                    <td align="left" class="Hightlight">Total Price</td>
                                    <td>: </td>
                                    <td align="right" class="Hightlight" colspan="7"><b>Rp. {{ number_format($data[0]->db_total,0,'','.') }}</b></td>
                                </tr>
                                <tr>
                                    <td align="left" class="Hightlight">Remain Price</td>
                                    <td>: </td>
                                    <td align="right" class="Hightlight" colspan="7"><b>Rp. {{ number_format($data[0]->db_total_remain,0,'','.') }}</b></td>
                                </tr>
                                <tr>
                                    <td align="left" class="Hightlight">Book By</td>
                                    <td>: </td>
                                    <td align="left" class="Hightlight" colspan="7">{{ $data[0]->bookby }}</td>
                                </tr>
                                <tr>
                                    <td align="left" class="Hightlight">Handle By</td>
                                    <td>: </td>
                                    <td align="left" class="Hightlight" colspan="7">{{ $data[0]->handle }}</td>
                                </tr>
                                <tr>
                                    <td valign="top" align="left" class="Hightlight">Remark</td>
                                    <td valign="top" >: </td>
                                    <td valign="top"  align="left" class="Hightlight" colspan="7">{{ $data[0]->db_remark }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="sec-sub-title text-center wow fadeInUp  animated col-sm-6" data-wow-duration="1000ms">
                            <h3 class="count_h2" style="margin-top: -5px;font-weight: bold">Detail</h3>
                                <br>
                            
                                <table  width="100%" class="table table-striped"> 
                                    <tr >
                                        <th>Nama</th>
                                        <th>Passport</th>
                                        <th>gender</th>
                                        <th>Date of Birth</th>
                                    </tr>
                                    @foreach ($simple_table as $s => $e)
                                        <tr>
                                            <td align="left">{{ $e->dp_name }}</td>
                                            <td align="left">{{ $e->dp_passport }}</td>
                                            <td align="left">{{ $e->dp_gender }}</td>
                                            <td align="left">{{ $e->dp_birth_date }}</td>
                                        </tr>
                                    @endforeach
                                    
                                </table>
                            </div>
                    </div>

                   
                    <!-- Image--> 
                      
                    

                </div>

                

                <div class="row mb50 margin_top_30px">
                     <!-- Header--> 
                    <div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
                    </div>
                    <!-- Image--> 
                    <div class="col-sm-12 col-sm-12 col-sm-12 col-sm-12">
                        
                        <div class="sec-sub-title text-center wow fadeInUp animated col-sm-12" data-wow-duration="1000ms">
                                @foreach ($simple_table as $index => $e)
                                <div class="col-sm-12">
                                    <div class="col-sm-4">
                                        <img src="{{ asset('storage/app/'.$e->dp_image) }}" width="250px" height="170px">
                                    </div>
                                    <div class="col-sm-8">
                                        <table class="table table-striped table-bordered text-left">
                                            <tr>
                                                <th width="10%">Nama</th>
                                                <td width="25%">: <b>{{ $e->dp_name }}</b></td>
                                                <td width="10%">dp_gender</td>
                                                <td width="25%">: {{ $e->dp_gender }}</td>
                                            </tr>
                                            <tr>
                                                <th>Passport </th>
                                                <td>: {{ $e->dp_passport }}</td>
                                                <td>Date of Birth</td>
                                                <td>: {{ $e->dp_birth_date }}</td>
                                            </tr>
                                            <tr>
                                                <th>Expired Date </th>
                                                <td>: {{ $e->dp_exp_date }}</td>
                                                <td>Place of Birth</td>
                                                <td>: {{ $e->dp_birth_place }}</td>
                                            </tr>
                                            <tr>
                                                <th {{-- style="border-bottom: 1px solid #ddd;"--}}>Issuing </th> 
                                                <td {{-- style="border-bottom: 1px solid #ddd;" --}}>: {{ $e->dp_issuing }}</td>
                                                <td {{-- style="border-bottom: 1px solid #ddd;" --}}>Remark</td>
                                                <td {{-- style="border-bottom: 1px solid #ddd;" --}}>: {{ $e->dp_reference }}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-sm-12" style="margin-top: 30px;">
                                    
                                </div>
                                @endforeach
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

    $('.download_itin').click(function(){
        var ini = $(this).data('id');
        window.open(baseUrl+'/booking/bookingdetail_download_itin/'+ini);
    })

    $('.download_pdf').click(function(){
        var ini = $(this).data('id');
        window.open(baseUrl+'/booking/bookingdetail_download_pdf/'+ini);
    })

    $('.download_md_tata_tertib').click(function(){
        var ini = $(this).data('id');
        window.open(baseUrl+'/booking/bookingdetail_download_md_tata_tertib/'+ini);
    })

    $('.download_final').click(function(){
        var ini = $(this).data('id');
        window.open(baseUrl+'/booking/bookingdetail_download_final/'+ini);
    })

    $('.download_invoice').click(function(){
        var ini = $(this).data('id');
        window.open(baseUrl+'/booking/bookingdetail_download_invoice/'+ini);
    })

</script>
