@extends('main')
@include('layouts._sidebar')
<style type="text/css">
    .col-sm-6{
        width: 50% !important;
    }
    .col-sm-8{
        width: 66.6666667% !important;
    }

    .readonly:read-only
    {
        background-color: #ebebeb;
        pointer-events: none;
    }
    .center{
        text-align: center;
    }
    .right{
        text-align: right;
    }
    .left{
        text-align: left;
    }
    .borderless{
        border: none !important;
    }
    .form-control-label {
        text-align: left;
    }
    table .v_center { 
      display: table-cell;
      vertical-align: center; 
    }
    .over-flow-x{
        overflow-x: auto;
    }
    .paging-trans{
        -webkit-transition: all 0.2s ease;
        -moz-transition: all 0.2s ease;
        -o-transition: all 0.2s ease;
        -ms-transition: all 0.2s ease;
        transition: all 0.2s ease;
    }
    .arrow{
        color: green;
        background: white;
    }
    .arrow:hover{
        color: red;
        background: #8888;
    }
    .on_screen{
        left: 0;
        opacity: 1;
        display: inline-block;
    }
    .delayed{
        left: /*1500*/;
        opacity: 0;
        display: none;
    }
    .select2-container{
        border: none !important;
    }
    .select2-selection{
        border: none !important;
    }
    .width100{
        width: 100%;
    }
    th { font-size: 12px; }
    td { font-size: 11px; }
    .select2-selection__rendered{
        width: auto !important;
    }
    .select2-results__options{
        width: auto !important;
    }
    .uppercase{
        text-transform: uppercase;
    }

    body { 
        background-color: white !important;
    }
    .black{
        background: #24292e;
    }
    .header-logo-invertocat{
        background: white;
    }
    .github{
        fill: white;
    }
    .github-grey{
        fill: grey;
    }
    .grey-input{
        background-color: #8888;
    }
    .input-container{
        width: 30%;
        padding-top: 5px;
        position: relative;
    }
    .HeaderNavlink{
        margin-top: 13px !important;
    }
    .navbar-nav li .HeaderNavlink:hover{
        color: #9999 !important;
    }
    .navbar-nav  li  .HeaderNavlink{
        color: #fff!important;
    }
    .container{
        width: 1000px;
    }
    .pl-2{

    }
    .navbar-nav{
        display: flex;
    }
    .white {
      -webkit-filter: opacity(.8) drop-shadow(0 0 0 white);
          filter: opacity(.8) drop-shadow(0 0 0 white);
    }
    .bell{
        margin-top: 13px !important;
    }
    .green{
        background:green;
    }
    .blue{
        background:blue;
    }
    .yellow{
        background:yellow;
    }
    .block{
        width: 100%;
        height: 500px;
    }
    .container-content{
        width: 100%;
        height: 55px;
    }
    .pt-2{
        padding-top: 20px;
    }
    .pl-2{
        padding-top: 20px;
    }
    .width-10{
        width: 10%;
    }
    .width-20{
        width: 20%;
    }
    .border-black{
        border:1px solid #9999;
    }
    .box-git{
        width: 100%;
        height: 133px;
    }
    .nopadding-right {
       padding-right: 0 !important;
       margin-right: 0 !important;
    }

    .nopadding-left {
       padding-left: 0 !important;
       margin-left: 0 !important;
    }
    .mt-1{
        margin-top: 10px !important;
    }
    .mt-2{
        margin-top: 20px !important;
    }
    .mb-1{
        margin-bottom: 10px !important;
    }
    .mb-2{
        margin-bottom: 20px !important;
    }
    .mr-1{
        margin-right: 10px !important;
    }
    .mr-2{
        margin-right: 20px !important;
    }
    .ml-1{
        margin-left: 10px !important;
    }
    .ml-2{
        margin-left: 20px !important;
    }
    .grey{
        color: grey;
    }
    .width-100{
        width: 100%;
    }
    .none{
        text-decoration: none;
        list-style-type: none;
    }
    .d-inline-block{
        display: inline-block;
        vertical-align: middle;
    }
    .d-inline{
        display: inline;
        vertical-align: middle;
    }
    .d-inline li{
        display: inline;
    }
    .m-auto{
        margin: auto;
    }
    .nav-tabs li a{
        padding-left: 0 !important;
        padding-right: 0 !important;
        text-align: center !important;
    }
    .font-small{
        font-size: 12px;
    }
    .middle{
        height: 47px;
    }
</style>
<section class="content">
    <div class="container-fluid">
        @include('layouts.task')
        <div class="header">
            <ol class="breadcrumb breadcrumb-bg-pink">
                <li><a href="javascript:void(0);"><i class="material-icons">widgets</i> Master</a></li>
                <li class="active"><i class="material-icons"></i>Master Intinerary</li>
            </ol>
        </div>
        <!-- CPU Usage -->
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header bg-cyan">
                        <div class="row clearfix">
                            <div class="col-xs-12 col-sm-6">
                                <h2>Booking Approve</h2>
                            </div>
                        </div>
                    </div>
                    <div class="body row">
                        {{-- DISINI --}}
                        <div class="col-sm-12 clearfix">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 center">
                                <h4>{{ $detail_intinerary->md_nota }}</h4>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 center">
                                <h4>{{ $detail_intinerary->intinerary->mi_name }}</h4>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 center">
                                <h4>{{ $detail_intinerary->md_seat_remain }}</h4>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <form action="#" id="save">
                                <div class="agent_detail" >
                                    <div class="col-sm-6 left" style="border-right: 2px solid #00BCD4">
                                        <div class="col-sm-6">
                                            <h4 >AGENT DETAIL</h4>
                                        </div>
                                        <div class="col-sm-12 contact-form">
                                            <div class="col-sm-4 nopadding-left">
                                                <h5 class="grey"><b>Agent Name</b></h5>
                                            </div>
                                            <div class="form-group col-sm-8 nopadding-left">
                                                <input type="text" name="bk_name" id="bk_name" placeholder="Name" value="{{ $booking->user->name }}" class="form-control pointer_dis" readonly="">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 contact-form">
                                            <div class="col-sm-4 nopadding-left">
                                                <h5 class="grey"><b>Address</b></h5>
                                            </div>
                                            <div class="form-group col-sm-8 nopadding-left">
                                                <input type="text" name="bk_add" id="bk_add" placeholder="Address" value="{{ $booking->user->address }}" class="form-control pointer_dis" readonly="">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 contact-form">
                                            <div class="col-sm-4 nopadding-left">
                                                <h5 class="grey"><b>Telp</b></h5>
                                            </div>
                                            <div class="form-group col-sm-8 nopadding-left">
                                                <input type="text" name="bk_cp" id="bk_cp" placeholder="Phone" value="{{ $booking->user->phone }}" class="form-control pointer_dis" readonly="">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 contact-form">
                                            <div class="col-sm-4 nopadding-left">
                                                <h5 class="grey"><b>Email</b></h5>
                                            </div>
                                            <div class="form-group col-sm-8 nopadding-left">
                                                <input type="text" name="bk_email" id="bk_email" placeholder="Email" value="{{ $booking->user->email }}" class="form-control pointer_dis" readonly="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pax_detail">
                                    <div class="col-sm-6 left">
                                        <div class="col-sm-6">
                                            <h4 >PAX DETAIL</h4>
                                        </div>
                                        <div class="col-sm-12 contact-form">
                                            <div class="col-sm-4 nopadding-left">
                                                <h5 class="grey"><b>Party Name</b></h5>
                                            </div>
                                            <div class="form-group col-sm-8 nopadding-left">
                                                <input type="text" name="bk_name" id="bk_name" placeholder="Name" value="{{ $booking->db_name }}" class="form-control pointer_dis" readonly="">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 contact-form">
                                            <div class="col-sm-4 nopadding-left">
                                                <h5 class="grey"><b>Telp</b></h5>
                                            </div>
                                            <div class="form-group col-sm-8 nopadding-left">
                                                <input type="number" class="form-control party_telephone" placeholder="Telp" name="party_telephone" value="{{ $booking->db_telp }}" readonly="">
                                            </div>
                                        </div>
                                        <div class="col-sm-12" style="margin-top: 20px">
                                            <div class="col-sm-2 nopadding-left">
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
                                    </div>
                                </div>
                                <div class="scheduler-border col-sm-12 nopadding-left">
                                    <h3 class="count_h2 mb-2"><b>ROOM TOUR</b></h3>
                                    <div class="col-sm-12 nopadding-left room_append">
                                        <div class="col-sm-12 nopadding-left all_room" >
                                            <div class="col-sm-12 nopadding-left header_room">
                                                <div class="col-sm-6 nopadding-left  nopadding-right row clearfix" align="left">
                                                    <div class="col-sm-3 nopadding-left">
                                                        <label>Type Of Bed</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <select  class="form-control  bk_bed" name="bk_bed[]" >
                                                            <option value="single" data-val="1">Single</option>
                                                            <option value="double" data-val="2">Double</option>
                                                            <option value="twin" data-val="2">Twin</option>
                                                            <option value="triple" data-val="3">Triple</option>
                                                            <option value="doubletwin&cnb" data-val="3">Double/Twin + CNB</option>
                                                            <option value="doubletwin&cwb" data-val="3">Double/Twin + CwB</option>
                                                        </select>
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-sm-6 pull-right row clearfix" align="left">
                                                    <div class="col-sm-2 mr-2">
                                                        <label>Infant</label>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <input type="text" readonly="" value="0" name="infant_tot[]" class="form-control infant_tot">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <button class="btn btn-round bg-pink add_infant waves-effect">
                                                            <i class="material-icons ">save</i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 detail_room_append">
                                                <div class="detail_room col-sm-12">
                                                    <div class="col-sm-4 preview_div satu" style="margin-bottom: 20px;margin-top: 20px;">
                                                        <div >
                                                            <img src="{{ asset('assets/images/Noimage.png') }}" style="width: 80%;height: 160px" class="output gambar_1" >
                                                        </div>
                                                        <div class="file-upload upl_1" style="width: 80%;">
                                                            <div class="file-select">
                                                                <div class="file-select-button fileName" >Image</div>
                                                                <div class="file-select-name noFile tag_image_1" >Passport Image</div> 
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
                                                                        <input type="text" name="name[]"  placeholder="Name" class="form-control name uppercase">
                                                                        <input type="text" name="passport[]"  placeholder="Passport No" class="form-control passport">
                                                                        <input type="text" name="exp_date[]"  placeholder="Expired Date" class="form-control exp_date date">
                                                                        <input type="text" name="issue[]"  placeholder="Issuing" class="form-control issue uppercase">
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
                                                                        <input type="text" name="name[]"  placeholder="Name" class="form-control name">
                                                                        <input type="text" name="passport[]"  placeholder="Passport No" class="form-control passport">
                                                                        <input type="text" name="exp_date[]"  placeholder="Expired Date" class="form-control exp_date date">
                                                                        <input type="text" name="issue[]"  placeholder="Issuing" class="form-control issue">
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
                                                                    <h5 class="grey"><b>Reference</b></h5>
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
                                                                        <input type="text" name="place_birth[]"  placeholder="Place of Birth" class="form-control place_birth">
                                                                        <input type="text" name="reference[]"  placeholder="Not Required" class="form-control reference">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="detail_room col-sm-12 disabled room_3">
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
                                                                        <input type="text" name="name[]"  placeholder="Name" class="form-control name">
                                                                        <input type="text" name="passport[]"  placeholder="Passport No" class="form-control passport">
                                                                        <input type="text" name="exp_date[]"  placeholder="Expired Date" class="form-control exp_date date">
                                                                        <input type="text" name="issue[]"  placeholder="Issuing" class="form-control issue">
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
                                                                    <h5 class="grey"><b>Reference</b></h5>
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
                                                                        <input type="text" name="place_birth[]"  placeholder="Place of Birth" class="form-control place_birth">
                                                                        <input type="text" name="reference[]"  placeholder="Not Required" class="form-control reference">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12" style="text-align: center !important;">
                                                <div class="text-center  btn-group">
                                                    <a type="button" class="btn btn-info add"><i class="fa fa-plus">ADD ROOM</i></a>
                                                    <a type="button" class="btn btn-danger del"><i class="fa fa-minus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- #END# CPU Usage -->
    </div>
</section>

<script src="{{ asset ('assets/plugins/jquery/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset ('assets/plugins/datepicker/js/bootstrap-datepicker.min.js') }}"></script>
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
    
    $(document).ready(function(){
        $('.agent_detail').removeClass('focused');
        console.log($('.agent_detail'));
    })
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
        if (val == 1) {
            $(par).find('.detail_room').not(':eq(0)').addClass('disabled');
            $(par).find('.disabled input').val('');
            $(par).find('.disabled .output').attr('src','{{ asset('assets/images/Noimage.png') }}');
            $(par).find('.disabled .noFile').text('Passport Image');
            $(par).find('.disabled .file-upload').removeClass('active');
        }else if (val == 2) {
            $(par).find('.detail_room').not(':eq(0)').addClass('disabled');
            $(par).find('.detail_room').eq(1).removeClass('disabled');
            $(par).find('.room_3 input').val('');
            $(par).find('.disabled .tag_image_3').text('Passport Image');
            $(par).find('.disabled .gambar_3').attr('src','{{ asset('assets/images/Noimage.png') }}');
            $(par).find('.disabled .upl_3').removeClass('active');
        }else if (val == 3) {
            $(par).find('.detail_room').not(':eq(0)').addClass('disabled');
            $(par).find('.detail_room').eq(1).removeClass('disabled');
            $(par).find('.detail_room').eq(2).removeClass('disabled');
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
    window.onload = function(){
        total();
    }

    $(document).on('click','.add_infant',function(){
        var parent = $(this).parents('.all_room');
        var infant = $(this).parents('.all_room').find('.infant_tot');
        var room_append = $(this).parents('.all_room').find('.detail_room_append');
        
        var remove = '<button type="button" class="btn btn-danger remove_infant"><i class="fa fa-minus"></i></button>';
        if (infant.val() < 2) {
            var room = $(parent).find('.detail_room').eq(0);
            $(room).clone(true, true).fadeIn().appendTo(room_append);
            $(parent).find('.detail_room').last().addClass('baby');
            $(parent).find('.baby').last().removeClass('detail_room');
            $(parent).find('.remove_append').last().html(remove);
            $(parent).find('.baby').last().find('input').val('');
            $(parent).find('.baby .output').last().attr('src','{{ asset('assets/images/Noimage.png') }}');
            $(parent).find('.baby .noFile').last().text('Passport Image');
            $(parent).find('.baby').last().find('.file-upload').removeClass('active');
            $(parent).find('.baby').last().find('.date').removeClass('hasDatepicker')
                                                        .removeData('datepicker')
                                                        .datepicker({format:'dd/mm/yyyy',startDate: '-2y'});
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
        $(dt).remove();
        var temp = 0;
        $(parent).find('.baby').each(function(){
            temp+=1;
        })
        infant.val(temp);
        baby_total();
    })

    $(document).on('click','.add',function(){
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

        $(last).last().find('.date').removeClass('hasDatepicker')
                                                        .removeData('datepicker')
                                                        .datepicker({format:'dd/mm/yyyy'});
        $('.bk_bed').last().change();
        $(last).find('.file-upload').removeClass('active');
        $('.infant_tot').last().val(0);
        total();
    })

    $(document).on('click','.del',function(){
        var temp = 0;
        $('.all_room').each(function(){
            temp +=1;
        })
        if (temp != 1) {
            var par = $(this).parents('.all_room');
            $(par).remove();
        }
    })
    $(document).on('keyup','.name',function(){
        $('.additional').find('option').remove();
        $('.additional').each(function(a){
            var select  = $(this);
            var par     = $(this).parents('tr');
            var add_name= $(par).find('.add_name').text();
            var d= 1;
            $('.name').each(function(i){
                if ($(this).val() != '') {
                    var nama = $(this).val();
                    $(select).find('select').append('<option value="'+nama+'" add-index="'+d+'">'+nama+'</option>')
                           .selectpicker('refresh');
                    d++;
                }
            })
        });
    });
    
    $('.name').focus(function(){
        $(this).removeClass('errors');
    })

    $(document).on('click','.calc',function(){
        // ADD TO TABLE INVOICE
        if ($('#check_agree').is(':checked') == false) {
            iziToast.warning({
                icon: 'fa fa-times',
                position:'topRight',
                message: 'Please Check Term & Condition!',
            });
            return false;
        }
        var temp = 0;
        $('.detail_room:not(.disabled)').each(function(a){
            temp += 1;
        });

        if (temp > 10) {
            iziToast.warning({
                icon: 'fa fa-times',
                position:'topRight',
                message: 'Pax Limit Achieved!',
            });
            return false;
        }
        if ($('#check_agree').is(':checked') == false) {
            iziToast.warning({
                icon: 'fa fa-times',
                position:'topRight',
                message: 'Please Check Term & Condition!',
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
                            '<input type="hidden" name="r_passport[]" class="r_passport" value="'+passport+'">'+
                          '</td>';
                var td2 = '<td class="i_nama_td">'+
                            name+
                            '<input type="hidden" name="r_name[]" class="r_name" value="'+name+'">'+
                          '</td>';
                var td3 = '<td class="i_room_td">'+
                            text_bed+
                            '<input type="hidden" name="r_bed[]" class="r_bed" value="'+text_bed+'">'+
                          '</td>';
                var td4 = '<td class="i_price_td">'+
                            harga+
                            '<input type="hidden" name="r_harga[]" class="r_harga" value="'+harga+'">'+
                          '</td>';
                var all = tr + td0 + td1 + td2 + td3 + td4 + tr1;
                $('.append_invoice').append(all);
                indexing++;

                $(this).find('input:not(.chooseFile)').each(function(z){
                    if ($(this).val() == '') {
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
                            '<input type="hidden" name="r_passport[]" class="r_passport" value="'+passport+'">'+
                          '</td>';
                var td2 = '<td class="i_nama_td">'+
                            name+
                            '<input type="hidden" name="r_name[]" class="r_name" value="'+name+'">'+
                          '</td>';
                var td3 = '<td class="i_room_td">'+
                            text_bed+
                            '<input type="hidden" name="r_bed[]" class="r_bed" value="'+text_bed+'">'+
                          '</td>';
                var td4 = '<td class="i_price_td">'+
                            harga+
                            '<input type="hidden" name="r_harga[]" class="r_harga" value="'+harga+'">'+
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
    
    $('.save').click(function(){
        
        var form  = $('#save');
        var formdata = false;
        if (window.FormData){
            formdata = new FormData(form[0]);
            formdata.append('id','{{ $id }}');
        }

        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: "POST",
            url:'{{ route('save_book') }}',
            data: formdata ? formdata : form.serialize(),
            dataType:'json',
            processData: false,
            contentType: false,
          success:function(data){
            if (data.status == '1') {
                var rand1 = '{{ md5('Demi yang Maha Pengasih Lagi Maha Penyayang Bagi Sang Pencipta Alam Semesta').rand(1,1000000) }}';
                var rand2 = '{{ md5('Dengan Nama Allah Yang Maha Pengasih Lagi Maha Penyayang').rand(1,1000000) }}';
                var rand3 = '{{ md5('Segala Puji Bagi Allah Tuhan Seru Sekalian Alam').rand(1,1000000)}}';
                window.location=('{{ url('/payment_page/payment') }}'+'?rand='+rand1+'&rand2='+rand2+'&rand3='+rand3+'&id='+data.id);
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
  
