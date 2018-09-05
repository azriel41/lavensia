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
                background-color: white;
                margin-top: 30px;
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
            .passport{
                text-transform: uppercase;
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

                 @include('package.modal_book')

                    <!-- Header--> 
                    <div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
                        <h2 class="count_h2">BOOKING APPROVE</h2>
                        <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sec-sub-title text-center wow fadeInUp  animated" data-wow-duration="1000ms">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <p>{{ $detail_intinerary->md_nota }}</p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <p>{{ $detail_intinerary->intinerary->mi_name }}</p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <p>{{ $detail_intinerary->md_seat_remain }}</p>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sec-sub-title text-center wow fadeInUp  animated" data-wow-duration="1000ms">
                        <form action="#" id="save">
                            <!-- Agent detail-->
                            <fieldset class="scheduler-border col-sm-6" style="border-right: 1px solid #8db0ff;">
                              <legend class="scheduler-border">Agent Detail</legend>
                                  <div class="contact-form col1" >
                                    <div class="input-group margin-top-20px">
                                        <div class="input-field">
                                            <input type="text" name="bk_name" id="bk_name" placeholder="Name" value="{{ $booking->user->name }}" class="form-control pointer_dis" readonly="">
                                         
                                            <input type="text" name="bk_add" id="bk_add" placeholder="Address" value="{{ $booking->user->address }}" class="form-control pointer_dis" readonly="">
                                        </div>
                                        <div class="input-field">
                                            <input type="text" name="bk_cp" id="bk_cp" placeholder="Contact Person" value="{{ $booking->user->phone }}" class="form-control pointer_dis" readonly="">
                                        
                                            <input type="email" name="bk_email" id="bk_email" placeholder="E-mail" value="{{ $booking->user->email }}" class="form-control pointer_dis" readonly="">
                                        </div>
                                    </div>
                                  </div>
                            </fieldset>

                              <!-- Guest-->
                            <fieldset class="scheduler-border col-sm-6 left">
                                <legend class="scheduler-border">Guest</legend>
                                <div class="col-sm-12 contact-form">
                                    <div class="col-sm-3">
                                        <h5 class="grey"><b>Party Name</b></h5>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="{{ $booking->db_name }}" placeholder="Party Name" name="party_name">
                                    </div>
                                </div>
                                <div class="col-sm-12 contact-form">
                                    <div class="col-sm-3">
                                        <h5 class="grey"><b>Telp</b></h5>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control party_telephone" placeholder="Telp" name="party_telephone" value="{{ $booking->db_telp }}">
                                    </div>
                                </div>
                                <div class="col-sm-12" style="margin-top: 20px">
                                    <div class="col-sm-2">
                                        <h5 class="grey"><b>Adult</b></h5>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" readonly="" value="{{ $booking->db_total_adult }}" class="form-control center total_adult"  name="total_adult">
                                    </div>
                                    <div class="col-sm-2">
                                        <h5 class="grey"><b>Child</b></h5>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" readonly="" value="{{ $booking->db_total_child }}" class="form-control center total_child"  name="total_child">
                                    </div>
                                    <div class="col-sm-2">
                                        <h5 class="grey"><b>Infant</b></h5>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" readonly="" value="{{ $booking->db_total_infant }}" class="form-control center total_infant"  name="total_infant">
                                    </div>
                                </div>
                            </fieldset>
                            <!-- Room Type 1-->
                            <fieldset class="scheduler-border col-sm-12 dropping wow fadeInUp  animated" data-wow-duration="1000ms" >
                                <h3 class="count_h2"><b>ROOM TOUR</b></h3>
                                <div class="devider" style="margin-bottom: 20px"><i class="fa fa-heart-o fa-lg"></i></div>
                                <div class="col-sm-12 room_append">
                                    @foreach ($count as $i=>$val)
                                    <div class="col-sm-12 all_room" >
                                        <div class="col-sm-12 header_room" style="margin-bottom: 20px;margin-top: 20px;">
                                            <div class="col-sm-8 row clearfix" align="left">
                                                <div class="col-sm-3">
                                                    <label>Type Of Bed</label>
                                                </div>
                                                <div class="col-sm-7">
                                                    <select  class="form-control  bk_bed" name="bk_bed[]" >
                                                        <option @if($count[$i][0]['dp_bed'] == 'single') selected="" @endif value="single" data-val="1">Single</option>
                                                        <option @if($count[$i][0]['dp_bed'] == 'double') selected="" @endif value="double" data-val="2">Double</option>
                                                        <option @if($count[$i][0]['dp_bed'] == 'twin') selected="" @endif value="twin" data-val="2">Twin</option>
                                                        <option @if($count[$i][0]['dp_bed'] == 'triple') selected="" @endif value="triple" data-val="3">Triple</option>
                                                        <option @if($count[$i][0]['dp_bed'] == 'doubletwin&cnb') selected="" @endif value="doubletwin&cnb" data-val="3">Double/Twin + CNB</option>
                                                        <option @if($count[$i][0]['dp_bed'] == 'doubletwin&cwb') selected="" @endif value="doubletwin&cwb" data-val="3">Double/Twin + CwB</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 row clearfix" align="left">
                                                <div class="col-sm-2">
                                                    <label>Infant</label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <input type="text" readonly="" value="0" name="infant_tot[]" class="form-control infant_tot">
                                                </div>
                                                <div class="btn-group col-sm-7">
                                                    <button type="button" class="btn btn-info add_infant"><i class="fa fa-plus"> ADD INFANT</i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 detail_room_append">

                                        @foreach ($count[$i] as $a=>$val2)
                                            @if ($a == 0)
                                                @if (isset($count[$i][0]))
                                                <div class="detail_room col-sm-12">
                                                    <div class="col-sm-4 preview_div satu" style="margin-bottom: 20px;margin-top: 20px;">
                                                        <div >
                                                            <img src="{{ route('storage') }}/{{ $count[$i][$a]['dp_image']}}?'{{ time() }}'" style="width: 80%;height: 160px" class="output gambar_1" >
                                                        </div>
                                                        <div class="file-upload upl_1 active" style="width: 80%;">
                                                            <div class="file-select">
                                                                <div class="file-select-button fileName" >Image</div>
                                                                <div class="file-select-name noFile tag_image_1" >{{ $count[$i][$a]['dp_image']}}</div> 
                                                                <input type="file" class="chooseFile" name="image[]">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 input_1">
                                                        <div class="col-sm-12 input_one" style="margin-bottom: 70px;margin-top: 20px;">
                                                            <div class="col-sm-6 row clearfix" align="left">
                                                                <div class="col-sm-12">
                                                                    <h5 class="grey"><b>Name</b></h5>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <h5 class="grey"><b>Passport No</b></h5>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <h5 class="grey"><b>Expired Date</b></h5>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <h5 class="grey"><b>Issuing</b></h5>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-8 row clearfix" align="left">
                                                                <div class="contact-form ">
                                                                    <div class="form-group-sm input_place">
                                                                        <input type="hidden" name="dp_detail[]" value="{{ $count[$i][$a]['dp_detail'] }}">
                                                                        <input type="hidden" name="dp_bed[]" class="dp_bed" value="{{ $count[$i][$a]['dp_bed'] }}">
                                                                        <input type="text" name="name[]"  placeholder="Name" class="form-control name uppercase" value="{{ $count[$i][$a]['dp_name'] }}">
                                                                        <input type="text" name="passport[]"  placeholder="Passport No" class="form-control passport" value="{{ $count[$i][$a]['dp_passport'] }}">
                                                                        <input type="text" name="exp_date[]"  placeholder="Expired Date" class="form-control exp_date date" value="{{ carbon\carbon::parse($count[$i][$a]['dp_exp_date'])->format('d/m/Y') }}">
                                                                        <input type="text" name="issue[]"  placeholder="Issuing" class="form-control issue uppercase" value="{{ $count[$i][$a]['dp_issuing']}}">
                                                                        <input type="hidden" class="room_val" name="room_val[]" value="{{ $count[$i][$a]['dp_room'] }}">
                                                                        <input type="hidden" class="status" name="status[]" value="{{ $count[$i][$a]['dp_status_person'] }}">
                                                                        <input type="hidden" class="addition_index" value="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 input_2">
                                                        <div class="col-sm-12 input1_one" style="margin-bottom: 70px;margin-top: 20px;">
                                                            <div class="col-sm-6 row clearfix" align="left">
                                                                <div class="col-sm-12">
                                                                    <h5 class="grey"><b>Gender</b></h5>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <h5 class="grey"><b>Date of Birth</b></h5>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <h5 class="grey"><b>Place of Birth</b></h5>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <h5 class="grey"><b>Remark</b></h5>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-8 row clearfix" align="left">
                                                                <div class="contact-form ">
                                                                    <div class="form-group-sm input_place">
                                                                        <select class="form-control gender" name="gender[]">
                                                                            <option @if($count[$i][$a]['dp_gender'] == 'male') selected @endif value="male">Male</option>
                                                                            <option @if($count[$i][$a]['dp_gender'] == 'female') selected @endif value="female">Female</option>
                                                                        </select>
                                                                        <input type="text" name="date_birth[]"  placeholder="Date of Birth" class="form-control date_birth date" value="{{ carbon\carbon::parse($count[$i][$a]['dp_exp_date'])->format('d/m/Y') }}">
                                                                        <input type="text" name="place_birth[]"  placeholder="Place of Birth" class="form-control place_birth uppercase" value="{{ $count[$i][$a]['dp_birth_place'] }}">
                                                                        <input type="text" name="reference[]"  placeholder="Remark" class="form-control reference uppercase" value="{{ $count[$i][$a]['dp_reference'] }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 remove_append">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            @endif
                                            @if ($a == 1)
                                                @if ($count[$i][$a]['dp_bed'] != 'single')
                                                    <div class="detail_room col-sm-12">
                                                        <div class="col-sm-4 preview_div satu" style="margin-bottom: 20px;margin-top: 20px;">
                                                            <div>
                                                                <img src="{{ route('storage') }}/{{ $count[$i][$a]['dp_image']}}?'{{ time() }}'" style="width: 80%;height: 160px" class="output gambar_2" >
                                                            </div>
                                                            <div class="file-upload upl_2 active" style="width: 80%;">
                                                                <div class="file-select">
                                                                    <div class="file-select-button fileName" >Image</div>
                                                                    <div class="file-select-name noFile tag_image_2" >{{ $count[$i][$a]['dp_image']}}</div> 
                                                                    <input type="file" class="chooseFile" name="image[]">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4 input_1">
                                                            <div class="col-sm-12 input_one" style="margin-bottom: 70px;margin-top: 20px;">
                                                                <div class="col-sm-6 row clearfix" align="left">
                                                                    <div class="col-sm-12">
                                                                        <h5 class="grey"><b>Name</b></h5>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <h5 class="grey"><b>Passport No</b></h5>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <h5 class="grey"><b>Expired Date</b></h5>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <h5 class="grey"><b>Issuing</b></h5>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-8 row clearfix" align="left">
                                                                    <div class="contact-form ">
                                                                        <div class="form-group-sm input_place">
                                                                            <input type="hidden" name="dp_detail[]" value="{{ $count[$i][$a]['dp_detail'] }}">
                                                                            <input type="hidden" name="dp_bed[]" class="dp_bed" value="{{ $count[$i][$a]['dp_bed'] }}">
                                                                            <input type="text" name="name[]"  placeholder="Name" class="form-control name uppercase" value="{{ $count[$i][$a]['dp_name'] }}">
                                                                            <input type="text" name="passport[]"  placeholder="Passport No" class="form-control passport" value="{{ $count[$i][$a]['dp_passport'] }}">
                                                                            <input type="text" name="exp_date[]"  placeholder="Expired Date" class="form-control exp_date date" value="{{ carbon\carbon::parse($count[$i][$a]['dp_exp_date'])->format('d/m/Y') }}">
                                                                            <input type="text" name="issue[]"  placeholder="Issuing" class="form-control issue uppercase" value="{{ $count[$i][$a]['dp_issuing']}}">
                                                                            <input type="hidden" class="room_val" name="room_val[]" value="{{ $count[$i][$a]['dp_room'] }}">
                                                                            <input type="hidden" class="status" name="status[]" value="{{ $count[$i][$a]['dp_status_person'] }}">
                                                                            <input type="hidden" class="addition_index" value="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4 input_2">
                                                            <div class="col-sm-12 input1_one" style="margin-bottom: 70px;margin-top: 20px;">
                                                                <div class="col-sm-6 row clearfix" align="left">
                                                                    <div class="col-sm-12">
                                                                        <h5 class="grey"><b>Gender</b></h5>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <h5 class="grey"><b>Date of Birth</b></h5>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <h5 class="grey"><b>Place of Birth</b></h5>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <h5 class="grey"><b>Remark</b></h5>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-8 row clearfix" align="left">
                                                                    <div class="contact-form ">
                                                                        <div class="form-group-sm input_place">
                                                                            <select class="form-control gender" name="gender[]">
                                                                                <option @if($count[$i][$a]['dp_gender'] == 'male') selected @endif value="male">Male</option>
                                                                                <option @if($count[$i][$a]['dp_gender'] == 'female') selected @endif value="female">Female</option>
                                                                            </select>
                                                                            <input type="text" name="date_birth[]"  placeholder="Date of Birth" class="form-control date_birth date" value="{{ carbon\carbon::parse($count[$i][$a]['dp_exp_date'])->format('d/m/Y') }}">
                                                                            <input type="text" name="place_birth[]"  placeholder="Place of Birth" class="form-control place_birth uppercase" value="{{ $count[$i][$a]['dp_birth_place'] }}">
                                                                            <input type="text" name="reference[]"  placeholder="Remark" class="form-control reference uppercase" value="{{ $count[$i][$a]['dp_reference'] }}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 remove_append">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="detail_room col-sm-12 disabled">
                                                        <div class="col-sm-4 preview_div satu" style="margin-bottom: 20px;margin-top: 20px;">
                                                            <div>
                                                                <img src="{{ asset('assets/images/Noimage.png') }}" style="width: 80%;height: 160px" class="output gambar_2" >
                                                            </div>
                                                            <div class="file-upload upl_2" style="width: 80%;">
                                                                <div class="file-select">
                                                                    <div class="file-select-button fileName" >Image</div>
                                                                    <div class="file-select-name noFile tag_image_2" >Passport Image</div> 
                                                                    <input type="file" class="chooseFile" name="image[]">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4 input_1">
                                                            <div class="col-sm-12 input_one" style="margin-bottom: 70px;margin-top: 20px;">
                                                                <div class="col-sm-6 row clearfix" align="left">
                                                                    <div class="col-sm-12">
                                                                        <h5 class="grey"><b>Name</b></h5>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <h5 class="grey"><b>Passport No</b></h5>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <h5 class="grey"><b>Expired Date</b></h5>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <h5 class="grey"><b>Issuing</b></h5>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-8 row clearfix" align="left">
                                                                    <div class="contact-form ">
                                                                        <div class="form-group-sm input_place">
                                                                            <input type="hidden" name="dp_detail[]" value="">
                                                                            <input type="hidden" name="dp_bed[]" class="dp_bed" value="{{ $count[$i][$a]['dp_bed'] }}">
                                                                            <input type="text" name="name[]"  placeholder="Name" class="form-control name uppercase">
                                                                            <input type="text" name="passport[]"  placeholder="Passport No" class="form-control passport">
                                                                            <input type="text" name="exp_date[]"  placeholder="Expired Date" class="form-control exp_date date">
                                                                            <input type="text" name="issue[]"  placeholder="Issuing" class="form-control issue uppercase">
                                                                            <input type="hidden" class="room_val" name="room_val[]" value="1">
                                                                            <input type="hidden" class="status" name="status[]" value="adult">
                                                                            <input type="hidden" class="addition_index" value="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4 input_2">
                                                            <div class="col-sm-12 input1_one" style="margin-bottom: 70px;margin-top: 20px;">
                                                                <div class="col-sm-6 row clearfix" align="left">
                                                                    <div class="col-sm-12">
                                                                        <h5 class="grey"><b>Gender</b></h5>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <h5 class="grey"><b>Date of Birth</b></h5>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <h5 class="grey"><b>Place of Birth</b></h5>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <h5 class="grey"><b>Remark</b></h5>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-8 row clearfix" align="left">
                                                                    <div class="contact-form ">
                                                                        <div class="form-group-sm input_place">
                                                                            <select class="form-control gender" name="gender[]">
                                                                                <option value="male">Male</option>
                                                                                <option value="female">Female</option>
                                                                            </select>
                                                                            <input type="text" name="date_birth[]"  placeholder="Date of Birth" class="form-control date_birth date">
                                                                            <input type="text" name="place_birth[]"  placeholder="Place of Birth" class="form-control place_birth uppercase">
                                                                            <input type="text" name="reference[]"  placeholder="Remark" class="form-control reference uppercase">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 remove_append">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endif

                                            @if ($a == 2)
                                                @if ($count[$i][$a]['dp_bed'] == 'doubletwin&cwb' or 
                                                 $count[$i][$a]['dp_bed'] == 'doubletwin&cnb' or
                                                 $count[$i][$a]['dp_bed'] == 'triple')
                                                    <div class="detail_room col-sm-12">
                                                        <div class="col-sm-4 preview_div satu" style="margin-bottom: 20px;margin-top: 20px;">
                                                            <div>
                                                                <img src="{{ route('storage') }}/{{ $count[$i][$a]['dp_image']}}?'{{ time() }}'" style="width: 80%;height: 160px" class="output gambar_3" >
                                                            </div>
                                                            <div class="file-upload upl_3 active" style="width: 80%;">
                                                                <div class="file-select">
                                                                    <div class="file-select-button fileName" >Image</div>
                                                                    <div class="file-select-name noFile tag_image_3" >{{ $count[$i][$a]['dp_image']}}</div> 
                                                                    <input type="file" class="chooseFile" name="image[]">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4 input_1">
                                                            <div class="col-sm-12 input_one" style="margin-bottom: 70px;margin-top: 20px;">
                                                                <div class="col-sm-6 row clearfix" align="left">
                                                                    <div class="col-sm-12">
                                                                        <h5 class="grey"><b>Name</b></h5>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <h5 class="grey"><b>Passport No</b></h5>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <h5 class="grey"><b>Expired Date</b></h5>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <h5 class="grey"><b>Issuing</b></h5>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-8 row clearfix" align="left">
                                                                    <div class="contact-form ">
                                                                        <div class="form-group-sm input_place">
                                                                            <input type="hidden" name="dp_detail[]" value="{{ $count[$i][$a]['dp_detail'] }}">
                                                                            <input type="hidden" name="dp_bed[]" class="dp_bed" value="{{ $count[$i][$a]['dp_bed'] }}">
                                                                            <input type="text" name="name[]"  placeholder="Name" class="form-control name uppercase" value="{{ $count[$i][$a]['dp_name'] }}">
                                                                            <input type="text" name="passport[]"  placeholder="Passport No" class="form-control passport" value="{{ $count[$i][$a]['dp_passport'] }}">
                                                                            <input type="text" name="exp_date[]"  placeholder="Expired Date" class="form-control exp_date date" value="{{ carbon\carbon::parse($count[$i][$a]['dp_exp_date'])->format('d/m/Y') }}">
                                                                            <input type="text" name="issue[]"  placeholder="Issuing" class="form-control issue uppercase" value="{{ $count[$i][$a]['dp_issuing']}}">
                                                                            <input type="hidden" class="room_val" name="room_val[]" value="{{ $count[$i][$a]['dp_room'] }}">
                                                                            <input type="hidden" class="status" name="status[]" value="{{ $count[$i][$a]['dp_status_person'] }}">
                                                                            <input type="hidden" class="addition_index" value="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4 input_2">
                                                            <div class="col-sm-12 input1_one" style="margin-bottom: 70px;margin-top: 20px;">
                                                                <div class="col-sm-6 row clearfix" align="left">
                                                                    <div class="col-sm-12">
                                                                        <h5 class="grey"><b>Gender</b></h5>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <h5 class="grey"><b>Date of Birth</b></h5>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <h5 class="grey"><b>Place of Birth</b></h5>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <h5 class="grey"><b>Remark</b></h5>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-8 row clearfix" align="left">
                                                                    <div class="contact-form ">
                                                                        <div class="form-group-sm input_place">
                                                                            <select class="form-control gender" name="gender[]">
                                                                                <option @if($count[$i][$a]['dp_gender'] == 'male') selected @endif value="male">Male</option>
                                                                                <option @if($count[$i][$a]['dp_gender'] == 'female') selected @endif value="female">Female</option>
                                                                            </select>
                                                                            <input type="text" name="date_birth[]"  placeholder="Date of Birth" class="form-control date_birth date" value="{{ carbon\carbon::parse($count[$i][$a]['dp_exp_date'])->format('d/m/Y') }}">
                                                                            <input type="text" name="place_birth[]"  placeholder="Place of Birth" class="form-control place_birth uppercase" value="{{ $count[$i][$a]['dp_birth_place'] }}">
                                                                            <input type="text" name="reference[]"  placeholder="Remark" class="form-control reference uppercase" value="{{ $count[$i][$a]['dp_reference'] }}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 remove_append">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="detail_room col-sm-12 disabled">
                                                        <div class="col-sm-4 preview_div satu" style="margin-bottom: 20px;margin-top: 20px;">
                                                            <div>
                                                                <img src="{{ asset('assets/images/Noimage.png') }}" style="width: 80%;height: 160px" class="output gambar_3" >
                                                            </div>
                                                            <div class="file-upload upl_3" style="width: 80%;">
                                                                <div class="file-select">
                                                                    <div class="file-select-button fileName" >Image</div>
                                                                    <div class="file-select-name noFile tag_image_3" >Passport Image</div> 
                                                                    <input type="file" class="chooseFile" name="image[]">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4 input_1">
                                                            <div class="col-sm-12 input_one" style="margin-bottom: 70px;margin-top: 20px;">
                                                                <div class="col-sm-6 row clearfix" align="left">
                                                                    <div class="col-sm-12">
                                                                        <h5 class="grey"><b>Name</b></h5>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <h5 class="grey"><b>Passport No</b></h5>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <h5 class="grey"><b>Expired Date</b></h5>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <h5 class="grey"><b>Issuing</b></h5>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-8 row clearfix" align="left">
                                                                    <div class="contact-form ">
                                                                        <div class="form-group-sm input_place">
                                                                            <input type="hidden" name="dp_detail[]" value="">
                                                                            <input type="hidden" name="dp_bed[]" class="dp_bed" value="{{ $count[$i][$a]['dp_bed'] }}">
                                                                            <input type="text" name="name[]"  placeholder="Name" class="form-control name uppercase">
                                                                            <input type="text" name="passport[]"  placeholder="Passport No" class="form-control passport">
                                                                            <input type="text" name="exp_date[]"  placeholder="Expired Date" class="form-control exp_date date">
                                                                            <input type="text" name="issue[]"  placeholder="Issuing" class="form-control issue uppercase">
                                                                            <input type="hidden" class="room_val" name="room_val[]" value="1">
                                                                            <input type="hidden" class="status" name="status[]" value="adult">
                                                                            <input type="hidden" class="addition_index" value="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4 input_2">
                                                            <div class="col-sm-12 input1_one" style="margin-bottom: 70px;margin-top: 20px;">
                                                                <div class="col-sm-6 row clearfix" align="left">
                                                                    <div class="col-sm-12">
                                                                        <h5 class="grey"><b>Gender</b></h5>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <h5 class="grey"><b>Date of Birth</b></h5>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <h5 class="grey"><b>Place of Birth</b></h5>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <h5 class="grey"><b>Remark</b></h5>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-8 row clearfix" align="left">
                                                                    <div class="contact-form ">
                                                                        <div class="form-group-sm input_place">
                                                                            <select class="form-control gender" name="gender[]">
                                                                                <option value="male">Male</option>
                                                                                <option value="female">Female</option>
                                                                            </select>
                                                                            <input type="text" name="date_birth[]"  placeholder="Date of Birth" class="form-control date_birth date">
                                                                            <input type="text" name="place_birth[]"  placeholder="Place of Birth" class="form-control place_birth uppercase">
                                                                            <input type="text" name="reference[]"  placeholder="Remark" class="form-control reference uppercase">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 remove_append">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endif
                                        @endforeach
                                        @if (count($count[$i]) == 1)
                                            <div class="detail_room col-sm-12 disabled">
                                                <div class="col-sm-4 preview_div satu" style="margin-bottom: 20px;margin-top: 20px;">
                                                    <div>
                                                        <img src="{{ asset('assets/images/Noimage.png') }}" style="width: 80%;height: 160px" class="output gambar_2" >
                                                    </div>
                                                    <div class="file-upload upl_2" style="width: 80%;">
                                                        <div class="file-select">
                                                            <div class="file-select-button fileName" >Image</div>
                                                            <div class="file-select-name noFile tag_image_2" >Passport Image</div> 
                                                            <input type="file" class="chooseFile" name="image[]">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 input_1">
                                                    <div class="col-sm-12 input_one" style="margin-bottom: 70px;margin-top: 20px;">
                                                        <div class="col-sm-6 row clearfix" align="left">
                                                            <div class="col-sm-12">
                                                                <h5 class="grey"><b>Name</b></h5>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <h5 class="grey"><b>Passport No</b></h5>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <h5 class="grey"><b>Expired Date</b></h5>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <h5 class="grey"><b>Issuing</b></h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-8 row clearfix" align="left">
                                                            <div class="contact-form ">
                                                                <div class="form-group-sm input_place">
                                                                    <input type="hidden" name="dp_detail[]" value="">
                                                                    <input type="hidden" name="dp_bed[]" class="dp_bed" value="{{ $count[$i][$a]['dp_bed'] }}">
                                                                    <input type="text" name="name[]"  placeholder="Name" class="form-control name uppercase">
                                                                    <input type="text" name="passport[]"  placeholder="Passport No" class="form-control passport">
                                                                    <input type="text" name="exp_date[]"  placeholder="Expired Date" class="form-control exp_date date">
                                                                    <input type="text" name="issue[]"  placeholder="Issuing" class="form-control issue uppercase">
                                                                    <input type="hidden" class="room_val" name="room_val[]" value="1">
                                                                    <input type="hidden" class="status" name="status[]" value="adult">
                                                                    <input type="hidden" class="addition_index" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 input_2">
                                                    <div class="col-sm-12 input1_one" style="margin-bottom: 70px;margin-top: 20px;">
                                                        <div class="col-sm-6 row clearfix" align="left">
                                                            <div class="col-sm-12">
                                                                <h5 class="grey"><b>Gender</b></h5>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <h5 class="grey"><b>Date of Birth</b></h5>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <h5 class="grey"><b>Place of Birth</b></h5>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <h5 class="grey"><b>Remark</b></h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-8 row clearfix" align="left">
                                                            <div class="contact-form ">
                                                                <div class="form-group-sm input_place">
                                                                    <select class="form-control gender" name="gender[]">
                                                                        <option value="male">Male</option>
                                                                        <option value="female">Female</option>
                                                                    </select>
                                                                    <input type="text" name="date_birth[]"  placeholder="Date of Birth" class="form-control date_birth date">
                                                                    <input type="text" name="place_birth[]"  placeholder="Place of Birth" class="form-control place_birth uppercase">
                                                                    <input type="text" name="reference[]"  placeholder="Remark" class="form-control reference uppercase">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 remove_append">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="detail_room col-sm-12 disabled">
                                                <div class="col-sm-4 preview_div satu" style="margin-bottom: 20px;margin-top: 20px;">
                                                    <div>
                                                        <img src="{{ asset('assets/images/Noimage.png') }}" style="width: 80%;height: 160px" class="output gambar_2" >
                                                    </div>
                                                    <div class="file-upload upl_2" style="width: 80%;">
                                                        <div class="file-select">
                                                            <div class="file-select-button fileName" >Image</div>
                                                            <div class="file-select-name noFile tag_image_2" >Passport Image</div> 
                                                            <input type="file" class="chooseFile" name="image[]">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 input_1">
                                                    <div class="col-sm-12 input_one" style="margin-bottom: 70px;margin-top: 20px;">
                                                        <div class="col-sm-6 row clearfix" align="left">
                                                            <div class="col-sm-12">
                                                                <h5 class="grey"><b>Name</b></h5>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <h5 class="grey"><b>Passport No</b></h5>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <h5 class="grey"><b>Expired Date</b></h5>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <h5 class="grey"><b>Issuing</b></h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-8 row clearfix" align="left">
                                                            <div class="contact-form ">
                                                                <div class="form-group-sm input_place">
                                                                    <input type="hidden" name="dp_detail[]" value="">
                                                                    <input type="hidden" name="dp_bed[]" class="dp_bed" value="{{ $count[$i][$a]['dp_bed'] }}">
                                                                    <input type="text" name="name[]"  placeholder="Name" class="form-control name uppercase">
                                                                    <input type="text" name="passport[]"  placeholder="Passport No" class="form-control passport">
                                                                    <input type="text" name="exp_date[]"  placeholder="Expired Date" class="form-control exp_date date">
                                                                    <input type="text" name="issue[]"  placeholder="Issuing" class="form-control issue uppercase">
                                                                    <input type="hidden" class="room_val" name="room_val[]" value="1">
                                                                    <input type="hidden" class="status" name="status[]" value="adult">
                                                                    <input type="hidden" class="addition_index" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 input_2">
                                                    <div class="col-sm-12 input1_one" style="margin-bottom: 70px;margin-top: 20px;">
                                                        <div class="col-sm-6 row clearfix" align="left">
                                                            <div class="col-sm-12">
                                                                <h5 class="grey"><b>Gender</b></h5>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <h5 class="grey"><b>Date of Birth</b></h5>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <h5 class="grey"><b>Place of Birth</b></h5>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <h5 class="grey"><b>Remark</b></h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-8 row clearfix" align="left">
                                                            <div class="contact-form ">
                                                                <div class="form-group-sm input_place">
                                                                    <select class="form-control gender" name="gender[]">
                                                                        <option value="male">Male</option>
                                                                        <option value="female">Female</option>
                                                                    </select>
                                                                    <input type="text" name="date_birth[]"  placeholder="Date of Birth" class="form-control date_birth date">
                                                                    <input type="text" name="place_birth[]"  placeholder="Place of Birth" class="form-control place_birth uppercase">
                                                                    <input type="text" name="reference[]"  placeholder="Remark" class="form-control reference uppercase">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 remove_append">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @elseif(count($count[$i]) == 2)
                                            <div class="detail_room col-sm-12 disabled">
                                                <div class="col-sm-4 preview_div satu" style="margin-bottom: 20px;margin-top: 20px;">
                                                    <div>
                                                        <img src="{{ asset('assets/images/Noimage.png') }}" style="width: 80%;height: 160px" class="output gambar_2" >
                                                    </div>
                                                    <div class="file-upload upl_2" style="width: 80%;">
                                                        <div class="file-select">
                                                            <div class="file-select-button fileName" >Image</div>
                                                            <div class="file-select-name noFile tag_image_2" >Passport Image</div> 
                                                            <input type="file" class="chooseFile" name="image[]">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 input_1">
                                                    <div class="col-sm-12 input_one" style="margin-bottom: 70px;margin-top: 20px;">
                                                        <div class="col-sm-6 row clearfix" align="left">
                                                            <div class="col-sm-12">
                                                                <h5 class="grey"><b>Name</b></h5>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <h5 class="grey"><b>Passport No</b></h5>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <h5 class="grey"><b>Expired Date</b></h5>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <h5 class="grey"><b>Issuing</b></h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-8 row clearfix" align="left">
                                                            <div class="contact-form ">
                                                                <div class="form-group-sm input_place">
                                                                    <input type="hidden" name="dp_detail[]" value="">
                                                                    <input type="hidden" name="dp_bed[]" class="dp_bed" value="{{ $count[$i][$a]['dp_bed'] }}">
                                                                    <input type="text" name="name[]"  placeholder="Name" class="form-control name uppercase">
                                                                    <input type="text" name="passport[]"  placeholder="Passport No" class="form-control passport">
                                                                    <input type="text" name="exp_date[]"  placeholder="Expired Date" class="form-control exp_date date">
                                                                    <input type="text" name="issue[]"  placeholder="Issuing" class="form-control issue uppercase">
                                                                    <input type="hidden" class="room_val" name="room_val[]" value="1">
                                                                    <input type="hidden" class="status" name="status[]" value="adult">
                                                                    <input type="hidden" class="addition_index" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 input_2">
                                                    <div class="col-sm-12 input1_one" style="margin-bottom: 70px;margin-top: 20px;">
                                                        <div class="col-sm-6 row clearfix" align="left">
                                                            <div class="col-sm-12">
                                                                <h5 class="grey"><b>Gender</b></h5>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <h5 class="grey"><b>Date of Birth</b></h5>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <h5 class="grey"><b>Place of Birth</b></h5>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <h5 class="grey"><b>Remark</b></h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-8 row clearfix" align="left">
                                                            <div class="contact-form ">
                                                                <div class="form-group-sm input_place">
                                                                    <select class="form-control gender" name="gender[]">
                                                                        <option value="male">Male</option>
                                                                        <option value="female">Female</option>
                                                                    </select>
                                                                    <input type="text" name="date_birth[]"  placeholder="Date of Birth" class="form-control date_birth date">
                                                                    <input type="text" name="place_birth[]"  placeholder="Place of Birth" class="form-control place_birth uppercase">
                                                                    <input type="text" name="reference[]"  placeholder="Remark" class="form-control reference uppercase">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 remove_append">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                        @if (isset($baby[$i]))
                                            @foreach ($baby[$i] as $a=>$val2)
                                                <div class="col-sm-12 baby">
                                                    <div class="col-sm-4 preview_div satu" style="margin-bottom: 20px;margin-top: 20px;">
                                                        <div>
                                                            <img src="{{ route('storage') }}/{{ $baby[$i][$a]['dp_image']}}?'{{ time() }}'" style="width: 80%;height: 160px" class="output gambar_3" >
                                                        </div>
                                                        <div class="file-upload upl_3 active" style="width: 80%;">
                                                            <div class="file-select">
                                                                <div class="file-select-button fileName" >Image</div>
                                                                <div class="file-select-name noFile tag_image_3" >{{ $baby[$i][$a]['dp_image']}}</div> 
                                                                <input type="file" class="chooseFile" name="image[]">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 input_1">
                                                        <div class="col-sm-12 input_one" style="margin-bottom: 70px;margin-top: 20px;">
                                                            <div class="col-sm-6 row clearfix" align="left">
                                                                <div class="col-sm-12">
                                                                    <h5 class="grey"><b>Name</b></h5>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <h5 class="grey"><b>Passport No</b></h5>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <h5 class="grey"><b>Expired Date</b></h5>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <h5 class="grey"><b>Issuing</b></h5>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-8 row clearfix" align="left">
                                                                <div class="contact-form ">
                                                                    <div class="form-group-sm input_place">
                                                                        <input type="hidden" name="dp_detail[]" value="{{ $baby[$i][$a]['dp_detail'] }}">
                                                                        <input type="hidden" name="dp_bed[]" class="dp_bed" value="{{ $baby[$i][$a]['dp_bed'] }}">
                                                                        <input type="text" name="name[]"  placeholder="Name" class="form-control name uppercase" value="{{ $baby[$i][$a]['dp_name'] }}">
                                                                        <input type="text" name="passport[]"  placeholder="Passport No" class="form-control passport" value="{{ $baby[$i][$a]['dp_passport'] }}">
                                                                        <input type="text" name="exp_date[]"  placeholder="Expired Date" class="form-control exp_date date" value="{{ carbon\carbon::parse($baby[$i][$a]['dp_exp_date'])->format('d/m/Y') }}">
                                                                        <input type="text" name="issue[]"  placeholder="Issuing" class="form-control issue uppercase" value="{{ $baby[$i][$a]['dp_issuing']}}">
                                                                        <input type="hidden" class="room_val" name="room_val[]" value="{{ $baby[$i][$a]['dp_room'] }}">
                                                                        <input type="hidden" class="status" name="status[]" value="{{ $baby[$i][$a]['dp_status_person'] }}">
                                                                        <input type="hidden" class="addition_index" value="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 input_2">
                                                        <div class="col-sm-12 input1_one" style="margin-bottom: 70px;margin-top: 20px;">
                                                            <div class="col-sm-6 row clearfix" align="left">
                                                                <div class="col-sm-12">
                                                                    <h5 class="grey"><b>Gender</b></h5>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <h5 class="grey"><b>Date of Birth</b></h5>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <h5 class="grey"><b>Place of Birth</b></h5>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <h5 class="grey"><b>Remark</b></h5>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-8 row clearfix" align="left">
                                                                <div class="contact-form ">
                                                                    <div class="form-group-sm input_place">
                                                                        <select class="form-control gender" name="gender[]">
                                                                            <option @if($baby[$i][$a]['dp_gender'] == 'male') selected @endif value="male">Male</option>
                                                                            <option @if($baby[$i][$a]['dp_gender'] == 'female') selected @endif value="female">Female</option>
                                                                        </select>
                                                                        <input type="text" name="date_birth[]"  placeholder="Date of Birth" class="form-control date_birth date" value="{{ carbon\carbon::parse($baby[$i][$a]['dp_exp_date'])->format('d/m/Y') }}">
                                                                        <input type="text" name="place_birth[]"  placeholder="Place of Birth" class="form-control place_birth uppercase" value="{{ $baby[$i][$a]['dp_birth_place'] }}">
                                                                        <input type="text" name="reference[]"  placeholder="Remark" class="form-control reference uppercase" value="{{ $baby[$i][$a]['dp_reference'] }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 remove_append">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                        
                                        </div>
                                        <div class="col-sm-12" style="text-align: center !important;">
                                            <div class="text-center  btn-group">
                                                <a type="button" class="btn btn-info add"><i class="fa fa-plus">ADD ROOM</i></a>
                                                <a type="button" class="btn btn-danger del"><i class="fa fa-minus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </fieldset>
                            <!-- Additional-->
                            <hr>
                            <fieldset class="scheduler-border col-sm-12 wow fadeInUp  animated" data-wow-duration="1000ms" >
                              <h3 class="count_h2"><b>ADDITIONAL</h3>
                                <div class="devider" style="margin-bottom: 20px"><i class="fa fa-heart-o fa-lg"></i></div>
                                  <div class="contact-form col1" >
                                    <div class="table-responsive">
                                        <table width="100%" class="table table-striped table-bordered table-hover ">
                                            <thead >
                                                <tr>
                                                    <th style="width: 25%" align="center">Name</th>
                                                    <th style="width: 20%" align="center">Procie</th>
                                                    <th align="center">Select Person</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($detail_intinerary->intinerary->add as $a=>$val)
                                                <tr class="add_tr">
                                                    <td align="left">
                                                        <p class="add_name">{{ $val->ma_name }}</p>
                                                        <input type="hidden" class="add_id" value="{{ $val->ma_id }}">
                                                    </td>
                                                    <td align="right">
                                                        <p class="add_price_text">{{ number_format($val->ma_price, 0, ",", ".") }}</p>
                                                        <input type="hidden" class="add_price" value="{{ $val->ma_price }}">
                                                    </td>
                                                    <td class="sel_opt">
                                                        <select class=" additional addi form-control selectpicker" multiple data-size="4" data-actions-box="true">
                                                        @foreach ($booking->party_name as $i=>$val1)
                                                            @if (isset($add_name[$val->ma_id]))
                                                                @if (in_array($val1->dp_name, $add_name[$val->ma_id]))
                                                                    <option selected="" value="{{ $val1->dp_name }}">{{ $val1->dp_name }}</option>
                                                                @else
                                                                    <option value="{{ $val1->dp_name }}">{{ $val1->dp_name }}</option>
                                                                @endif
                                                            @else
                                                                <option value="{{ $val1->dp_name }}">{{ $val1->dp_name }}</option>
                                                            @endif
                                                        @endforeach
                                                        </select>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                  </div>
                            </fieldset>
                     
                            <div class="col-sm-12" style="margin-top: 100px">
                                <fieldset class="scheduler-border col-sm-6 " style="text-align: center !important;">
                                  <h4 class="scheduler-border count_h2" ><b>REMARK</b></h4>
                                  <div class="contact-form col1 col-sm-12" >
                                    <div class="input-group margin-top-20px">
                                        <div>
                                            <textarea style="" class="form-control" name="bk_remark" id="bk_remark" placeholder="Remark">{{ $booking->db_remark }}</textarea>
                                        </div>
                                    </div>
                                  </div>
                                </fieldset>
                                <fieldset class="scheduler-border col-sm-6 " style="text-align: center !important;">
                                  <h4 class="scheduler-border count_h2" style="margin-bottom: 50px" ><b>Status</b></h4>
                                    <div class="col-sm-12 current_items">
                                        <div class="col-sm-6" >
                                            <div class="col-sm-12">
                                                <input type="radio" name="payment" class="payment" id="dp" value="dp">
                                                <label for="dp " class="label_new" style="font-size: 12px;color: black">Hold</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="col-sm-12">
                                                <input type="radio" name="payment" class="payment" id="fp" value="fp">
                                                <label for="fp" class="label_new" style="font-size: 12px;color: black">Holding Confirm</label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-sm-12" style="margin-top: 50px;">
                                <button type="button" class="btn btn-success waves-effect calc"><i class="fa fa-calculator"></i> See New Invoice</button>
                                <button type="button" class="btn btn-danger waves-effect"><i class="fa fa-arrow-left"></i> Back</button>
                            </div>
                        </form>
                        <div class="col-sm-12 invoice_tab" hidden="">
                            <div class="col-sm-12">
                                <table width="100%" class="table table-striped table-hover table_room">
                                    <thead >
                                        <tr>
                                            <th style="text-align: center;">No</th>
                                            <th style="text-align: center;">Paspport No</th>
                                            <th style="text-align: center;">Name</th>
                                            <th style="text-align: center;">Room</th>
                                            <th style="text-align: center;">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody class="append_invoice">
                                    </tbody>
                                </table>
                                <table width="100%" class="table table-striped table-hover table_addition">
                                    <thead >
                                        <tr>
                                            <th style="text-align: center;">Name</th>
                                            <th style="text-align: center;">Additional</th>
                                            <th style="text-align: center;">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody class="append_additional">
                                    </tbody>
                                </table>
                                <input type="hidden" class="total_room_input" name="total_room_input">
                                <input type="hidden" class="total_additional_input" name="total_additional_input">
                                <input type="hidden" class="total_harga_input" name="total_harga_input">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('booking.booking_modal')
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


    $(".bk_totalpac").keyup(function (e) {
       if (e.which != 8 && e.which != 0  && (e.which < 48 || e.which > 57 ) && e.which != 46  ) {
            //display error message
            return false;
        }
    });
    $(".party_telephone").keyup(function (e) {
       if ($(this).val() < 0){
           $(this).val(0)
       }
    });

    $('#bk_totalpac').keyup(function(){
        if ($(this).val() > 10) {
            $(this).val(10)
        }
        if ($(this).val() < 0) {
            $(this).val(0)
        }

    })

    var room = 0;
    var name_additional = [];
    var addition_index = 0;
    $(document).ready(function(){
        var remove = '<button type="button" class="btn btn-danger remove_infant"><i class="fa fa-minus"></i></button>';
        $('.baby').find('.remove_append').html(remove);
        $('.detail_room').addClass('all_detail_room');
        $('.baby').addClass('all_detail_room');


        $('.all_detail_room').find('.name').each(function(i){
            name_additional[i] = $(this).val();
        })

        $('.all_room').each(function(){
            var temp = 0;
            $(this).find('.baby').each(function(){
                temp+=1;
            })

            $(this).find('.infant_tot').val(temp);
            room+=1;
        })

        $('.name').each(function(i){
            console.log(i);
            addition_index+=1;
            var par = $(this).parents('.input_place');
            var add = $(this).parents('.all_detail_room');
            par.find('.addition_index').val(addition_index);
            var new_index = par.find('.addition_index').val();

            
        })
        var new_index = [];
        $('.name').each(function(a){
            if ($(this).val() != '') {
                var par = $(this).parents('.input_place');
                var index = par.find('.addition_index').val();
                new_index.push(index);
            }
        })

        $('.addi').each(function(i){
            $('.addi').eq(i).find('option').each(function(es){
                var addi = $('.addi').eq(i).find('option').eq(es).attr('add-index',new_index[es]);
            })
        })
        

    })

    window.onload = function(){
        $('.all_room').each(function(){
            room+=1;
        })
        console.log(room);
    }
    // var table_room      = $('.table_room').DataTable({
    //     sorting:false,
    //     paging:false,
    //     searching:false,
    // });
    // var table_addition  = $('.table_addition').DataTable({
    //     sorting:false,
    //     paging:false,
    //     searching:false,
    // });

    $('.date').datepicker({
        format:'dd/mm/yyyy'
    }).on('changeDate', function (ev) {
        $('.date').change();
    });
    

    function remove_date_error() {
        // body...
        $('.date').change(function(){
            $(this).removeClass('error');
        })
    }
    $('.date').change(function(){
        $(this).removeClass('error');
    })
        
    {{-- GAMBAR --}}
    $('.chooseFile').bind('change', function () {
        var filename = $(this).val();
        var fsize = $(this)[0].files[0].size;
        if(fsize>1048576) //do something if file size more than 1 mb (1048576)
        {
          return false;
        }
        var parent = $(this).parents(".preview_div");
        if (/^\s*$/.test(filename)) {
            $(parent).find('.file-upload').removeClass('active');
            $(parent).find(".noFile").text("No file chosen..."); 
        }
        else {
            $(parent).find('.file-upload').addClass('active');
            $(parent).find(".noFile").text(filename.replace("C:\\fakepath\\", "")); 
        }
        load(parent,this);
    });

    function load(parent,file) {
        var fsize = $(file)[0].files[0].size;
        if(fsize>2048576) //do something if file size more than 1 mb (1048576)
        {
          iziToast.warning({
            icon: 'fa fa-times',
            message: 'File Is To Big!',
          });
          return false;
        }
        var reader = new FileReader();
        reader.onload = function(e){
            $(parent).find('.output').attr('src',e.target.result);
        };
        reader.readAsDataURL(file.files[0]);
    }
    // END GAMBAR

    $('.bk_bed').change(function(){
        var val = $(this).find(':selected').attr('data-val');
        var par = $(this).parents('.all_room');
        var room = $(par).find('.room_val').eq(0).val();
        var bed = $(this).find(':selected').val();
        if (val == 1) {
            $(par).find('.detail_room').not(':eq(0)').addClass('disabled');
            $(par).find('.disabled').find('input:not(.status):not(.addition_index)').val('');
            $(par).find('.disabled .output').attr('src','{{ asset('assets/images/Noimage.png') }}');
            $(par).find('.disabled .noFile').text('Passport Image');
            $(par).find('.disabled .file-upload').removeClass('active');
            $(par).find('.dp_bed').val(bed);
        }else if (val == 2) {
            $(par).find('.detail_room').not(':eq(0)').addClass('disabled');
            $(par).find('.detail_room').eq(1).removeClass('disabled');
            $(par).find('.detail_room').eq(1).find('.room_val').val(room);
            $(par).find('.detail_room').eq(2).find('input:not(.status):not(.addition_index)').val('');
            $(par).find('.disabled .tag_image_3').text('Passport Image');
            $(par).find('.disabled .gambar_3').attr('src','{{ asset('assets/images/Noimage.png') }}');
            $(par).find('.disabled .upl_3').removeClass('active');
            $(par).find('.dp_bed').val(bed);
        }else if (val == 3) {
            $(par).find('.detail_room').not(':eq(0)').removeClass('disabled');
            $(par).find('.detail_room').not(':eq(0)').find('.room_val').val(room);
            if (bed == 'triple') {
                $(par).find('.detail_room').last().find('.status').val('adult');
            }else if (bed == 'doubletwin&cnb' || bed == 'doubletwin&cwb'){
                $(par).find('.detail_room').last().find('.status').val('child');
            }
            $(par).find('.dp_bed').val(bed);
        }
        total();
    })
    function baby_total() {
        var temp = 0;
        $('.baby').each(function(){
            temp+=1;
        })
        $('.total_infant').val(temp);
    }

    function total() {
        var adult = 0;
        var child = 0;

        $('.bk_bed').each(function(){
            if ($(this).val() == 'single') {
                adult+=1;
            }else if($(this).val() == 'double'){
                adult+=2;
            }else if($(this).val() == 'twin'){
                adult+=2;
            }else if($(this).val() == 'triple'){
                adult+=3;
            }else if($(this).val() == 'doubletwin&cnb'){
                adult+=2;
                child+=1;
            }else if($(this).val() == 'doubletwin&cwb'){
                adult+=2;
                child+=1;
            }
        })

        $('.total_adult').val(adult);
        $('.total_child').val(child);
        
    }

    var passport = [];
    $(document).on('blur','.passport',function(){
        var indexs = $(this).index('.passport');
        console.log(indexs);    
        var passport_temp = $(this).val();
        $('.all_detail_room').find('.passport').each(function(i){
            var parent = $(this).parents('.detail_room');
            if (!parent.hasClass('disabled')) {
                try{
                    if (passport_temp != passport[indexs]) {
                        console.log(passport_temp);
                        console.log(passport[indexs]);
                        var index = passport.indexOf(passport_temp);
                        console.log(index);
                        if (index != -1) {
                            if (passport[i] != '') {
                                $('.passport').eq(indexs).val('');
                                iziToast.warning({
                                    icon: 'fa fa-times',
                                    position:'topRight',
                                    message: 'Passport Already Input!',
                                });
                                return false;
                            }
                        }
                    }
                }catch(err){
                    
                }
            }
            passport[i] = $(this).val();
        })
    })

    $(document).on('click','.add_infant',function(){
        var parent = $(this).parents('.all_room');
        var bed = parent.find('.bk_bed').val();
        var infant = $(this).parents('.all_room').find('.infant_tot');
        var room_append = $(this).parents('.all_room').find('.detail_room_append');
        
        var remove = '<button type="button" class="btn btn-danger remove_infant"><i class="fa fa-minus"></i></button>';
        if (infant.val() < 2) {
            var room = $(parent).find('.detail_room').eq(0);
            $(room).clone(true, true).fadeIn().appendTo(room_append);
            $(parent).find('.detail_room').last().addClass('baby');
            $(parent).find('.baby').last().removeClass('detail_room');
            $(parent).find('.remove_append').last().html(remove);
            $(parent).find('.baby').last().find('input:not(.room_val)').val('');
            $(parent).find('.baby .output').last().attr('src','{{ asset('assets/images/Noimage.png') }}');
            $(parent).find('.baby .noFile').last().text('Passport Image');
            $(parent).find('.baby').last().find('.file-upload').removeClass('active');
            $(parent).find('.baby').last().find('.date').removeClass('hasDatepicker')
                                                        .removeData('datepicker')
                                                        .datepicker({format:'dd/mm/yyyy',startDate: '-2y',autoclose: true});
            addition_index+=1;
            $(parent).find('.baby').last().find('.status').val('baby');
            $(parent).find('.baby').find('.dp_bed').val(bed);
            $(parent).find('.baby').last().find('.addition_index').val(addition_index);
            var temp = 0;
            $(parent).find('.baby').each(function(){
                temp+=1;
            })
            infant.val(temp);
            baby_total();
        }else{
            iziToast.warning({
                icon: 'fa fa-times',
                position:'topRight',
                message: 'Limit Append Achieved!',
            });
            return false;
        }
    })

    $(document).on('click','.remove_infant',function(){
        var parent = $(this).parents('.all_room');
        var infant = $(this).parents('.all_room').find('.infant_tot');

        var dt = $(this).parents('.baby');
        hilang_infant(dt);
        $(dt).remove();
        var temp = 0;
        $(parent).find('.baby').each(function(){
            temp+=1;
        })
        infant.val(temp);
        baby_total();
    })


    $(document).on('click','.add',function(){
        console.log(addition_index);
        var par = $(this).parents('.all_room');
        var limit = 0;
        $('.all_room').each(function(){
            limit +=1;
        })
        if (limit == 10) {
            iziToast.warning({
                icon: 'fa fa-times',
                position:'topRight',
                message: 'Limit Append!',
            });
            return false;
        }
        $(par).last().clone(true, true).fadeIn().appendTo(".room_append");

        var last = $('.all_room').last();
        var name = $('.all_room').last().find('.name');

        $(last).find('input').val('')
        $(last).find('.detail_room input').val('');
        $(last).find('.detail_room .output').attr('src','{{ asset('assets/images/Noimage.png') }}');
        $(last).find('.detail_room .noFile').text('Passport Image');
        $(last).find('.baby').remove();
        $(name).removeClass('error');
        $(last).find('.bk_bed').val('single');

        $(last).last().find('.date').removeClass('hasDatepicker')
                                                        .removeData('datepicker')
                                                        .datepicker({format:'dd/mm/yyyy',autoclose: true});
        $('.bk_bed').last().change();
        $(last).find('.detail_room').each(function(){
            addition_index+=1;
            $(this).find('.addition_index').val(addition_index);
        });

        $(last).find('.detail_room').find('.status').val('adult');
        $(last).find('.detail_room').find('.dp_bed').val('single');
        $(last).find('.file-upload').removeClass('active');
        $('.infant_tot').last().val(0);

        room++;
        $('.all_room').last().find('.room_val').eq(0).val(room);
        total();
    })

    $(document).on('click','.del',function(){
        var temp = 0;
        $('.all_room').each(function(){
            temp +=1;
        })
        if (temp != 1) {
            var par = $(this).parents('.all_room');
            hilang(par);
            $(par).remove();
        }
        total();
        baby_total();
    })


    $(document).on('blur','.name',function(){
        var par   = $(this).parents('.input_place');
        var val   = $(this).val();
        var index = $(par).find('.addition_index').val();
        $('.additional').find("option[add-index='" + index + "']").remove();

        $('.additional select').append('<option value="'+val+'" add-index="'+index+'">'+val+'</option>')
                 .selectpicker('refresh');

        $('.additional').css('text-transform','uppercase');
    });
    
    function hilang(par) {
        par.find('.addition_index').each(function(){
            var index = $(this).val();
            $('.additional').each(function(a){
                try{
                    var select  = $(this);
                    // $("#select2 option[data-id='" + selectvar + "']").prop("selected", true);
                    select.find("option[add-index='" + index + "']").remove();

                    select.find('select').selectpicker('refresh');
                    // if (name_temp != '') {
                    //     select.find('select').append('<option value="'+name_temp+'" add-index="'+d+'">'+name_temp+'</option>')
                    //            .selectpicker('refresh');
                    //     d++;
                    // }
                }catch(err){

                }
                $(this).css('text-transform','uppercase');
            });
        })
    }

    function hilang_infant(par) {
        par.find('.addition_index').each(function(){
            var index = $(this).val();
            $('.additional').each(function(a){
                try{
                    var select  = $(this);
                    // $("#select2 option[data-id='" + selectvar + "']").prop("selected", true);
                    select.find("option[add-index='" + index + "']").remove();

                    select.find('select').selectpicker('refresh');
                    // if (name_temp != '') {
                    //     select.find('select').append('<option value="'+name_temp+'" add-index="'+d+'">'+name_temp+'</option>')
                    //            .selectpicker('refresh');
                    //     d++;
                    // }
                }catch(err){

                }
                $(this).css('text-transform','uppercase');
            });
        })
    }

    $('.name').focus(function(){
        $(this).removeClass('errors');
    })

    $(document).on('click','.calc',function(){
        // ADD TO TABLE INVOICE
        // if ($('#check_agree').is(':checked') == false) {
        //     iziToast.warning({
        //         icon: 'fa fa-times',
        //         position:'topRight',
        //         message: 'Please Check Term & Condition!',
        //     });
        //     return false;
        // }
        var temp = 0;
        $('.detail_room:not(.disabled)').each(function(a){
            temp += 1;
        });

        if (temp > 10) {
            iziToast.warning({
                icon: 'fa fa-times',
                position:'topRight',
                message: 'Pax Limit Achieved And Still Good To Go!',
            });
            // return false;
        }
        if ($('.payment:checked').val() == undefined) {
            iziToast.warning({
                icon: 'fa fa-times',
                position:'topRight',
                message: 'Please Select Status!',
            });
            return false;
        }
        $('.append_invoice').html('');
        $('.append_additional').html('');
        var validate   = [];
        var total_arr  = [];
        var tr         = '<tr>';
        var tr1        = '</tr>';
        var total_room = 0;
        var total_add  = 0;
        var indexing   = 1;

        $('.all_room').each(function(i){
            var ini      = $(this);
            var bed      = ini.find('.bk_bed').val();
            var text_bed = ini.find('.bk_bed :selected').text();
            // ROOM
            ini.find('.detail_room:not(.disabled)').each(function(a){
                var passport = $(this).find('.passport').val();
                var name     = $(this).find('.name').val();
                if (a == 0 || a == 1) {
                    var harga = '{{ number_format($detail_intinerary->md_adult_price, 0, ",", ".") }}';
                    total_room += ('{{ $detail_intinerary->md_adult_price}}'*1)
                }else{
                    if (bed == 'triple') {
                        var harga = '{{ number_format($detail_intinerary->md_adult_price, 0, ",", ".") }}';
                        total_room += ('{{ $detail_intinerary->md_adult_price}}'*1)
                    }else if(bed == 'doubletwin&cnb'){
                        var harga = '{{ number_format($detail_intinerary->md_infant_price, 0, ",", ".") }}';
                        total_room += ('{{ $detail_intinerary->md_infant_price}}'*1)
                    }else if(bed == 'doubletwin&cwb'){
                        var harga = '{{ number_format($detail_intinerary->md_child_w_price, 0, ",", ".") }}';
                        total_room += ('{{ $detail_intinerary->md_child_w_price}}'*1)
                    }
                }


                var td0 = '<td class="i_indexing">'+indexing+'</td>';
                var td1 = '<td class="i_nama_fam_td">'+
                            passport+
                            '<input type="hidden"  class="r_passport" value="'+passport+'">'+
                          '</td>';
                var td2 = '<td class="i_nama_td">'+
                            name+
                            '<input type="hidden"  class="r_name" value="'+name+'">'+
                          '</td>';
                var td3 = '<td class="i_room_td">'+
                            text_bed+
                            '<input type="hidden"" class="r_bed" value="'+bed+'">'+
                          '</td>';
                var td4 = '<td class="i_price_td">'+
                            harga+
                            '<input type="hidden"  class="r_harga" value="'+harga+'">'+
                          '</td>';
                var all = tr + td0 + td1 + td2 + td3 + td4 + tr1;
                $('.append_invoice').append(all);
                indexing++;

                $(this).find('input:not(.chooseFile):not([name*=dp_detail])').each(function(z){
                    if ($(this).not('.status').val() == '') {
                        console.log($(this));
                        $(this).addClass('error');
                        validate.push(0);
                    }
                })
            });


            ini.find('.baby:not(.disabled)').each(function(a){
                var passport = $(this).find('.passport').val();
                var name     = $(this).find('.name').val();


                var harga = '{{ number_format($detail_intinerary->md_infant_price, 0, ",", ".") }}';
                total_room += ('{{ $detail_intinerary->md_infant_price}}'*1)
               


                var td0 = '<td class="i_indexing">'+indexing+'</td>';
                var td1 = '<td class="i_nama_fam_td">'+
                            passport+
                            '<input type="hidden" class="r_passport" value="'+passport+'">'+
                          '</td>';
                var td2 = '<td class="i_nama_td">'+
                            name+
                            '<input type="hidden"  class="r_name" value="'+name+'">'+
                          '</td>';
                var td3 = '<td class="i_room_td">'+
                            text_bed+
                            '<input type="hidden" class="r_bed" value="'+bed+'">'+
                          '</td>';
                var td4 = '<td class="i_price_td">'+
                            harga+
                            '<input type="hidden"  class="r_harga" value="'+harga+'">'+
                          '</td>';
                var all = tr + td0 + td1 + td2 + td3 + td4 + tr1;
                $('.append_invoice').append(all);
                indexing++;
            });
        })
        
        $('input').keyup(function(){
            $(this).removeClass('error');
        })
        $('.sel_opt').each(function(f){
            var all_name = $(this).find('select').val();
            var par      = $(this).parents('tr');
            var add_name = $(par).find('.add_name').text();
            var add_id   = $(par).find('.add_id').val();
            var add_p_te = $(par).find('.add_price_text').text();
            var add_pric = $(par).find('.add_price').val();
            var tr = '<tr class="tr_add_'+add_name+'">';
            try{
                for (var dex = 0; dex < all_name.length; dex++) {
                    var td1 = '<td class="a_nama_orang">'+
                                all_name[dex]+
                                '<input type="hidden" name="a_name[]" class="a_name" value="'+all_name[dex]+'">'+
                              '</td>';
                    var td2 = '<td class="a_nama_td">'+
                                add_name+
                                '<input type="hidden" name="a_id[]" class="a_id" value="'+add_id+'">'+
                              '</td>';
                    var td3 = '<td class="a_price_td">'+
                                add_p_te+
                              '<input type="hidden" name="a_price[]" class="a_price" value="'+add_p_te+'">'+
                              '</td>';
                    var all = tr + td1 + td2 + td3 + tr1;
                    $('.append_additional').append(all);
                    total_add+=(add_pric*1);
                }
            }catch(e){

            }
            
        })
        $('.total_room').html(accounting.formatMoney(total_room,"", 2, ".",','));
        $('.total_room_input').val(total_room);
        $('.total_additional').html(accounting.formatMoney(total_add,"", 2, ".",','));
        $('.total_additional_input').val(total_add);
        $('.total_harga').html(accounting.formatMoney(total_add + total_room,"", 2, ".",','));
        $('.total_harga_input').val(total_add + total_room);

        var valid = validate.indexOf(0);
        if (valid != -1) {
            iziToast.warning({
                icon: 'fa fa-times',
                position:'topRight',
                message: 'Please check your data!',
            });
            $("html, body").animate({ scrollTop: 350 }, "slow");
            return false;
        }
      
       
        // $('.invoice_tab').prop('hidden',false);
        $('#invoice').modal('show');
    })
    
    function PreviewImage() {
        pdffile=document.getElementById("uploadPDF").files[0];
        pdffile_url=URL.createObjectURL(pdffile);
        $('#viewer').attr('src',pdffile_url);

        $('#preview_pdf').modal('show');
    }

    $('.save').click(function(){
        
        var form  = $('#save');
        var formdata = false;
        if (window.FormData){
            formdata = new FormData(form[0]);
            formdata.append('id','{{ $id }}');
            formdata.append('booking_id','{{ $booking->db_id }}');
        }

        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: "POST",
            url:'{{ route('update_book') }}',
            data: formdata ? formdata : form.serialize(),
            dataType:'json',
            processData: false,
            contentType: false,
          success:function(data){
            if (data.status == '1') {
                window.location=('{{ url('/booking/booking_all') }}');
            }else if (data.status == '0') {
                iziToast.success({
                    icon: 'fa fa-save',
                    position:'topRight',
                    title: 'Error!',
                    message:data.message,
                });
            }
          },error:function(){
            iziToast.warning({
                icon: 'fa fa-info',
                position:'topRight',
                title: 'Error!',
                message: 'Terjadi Kesalahan!',
            });
          }
        });
    })


</script>
