@extends('main')
@section('content')
<div class="container-fluid">
    <div class="block-header">
        <h2>DASHBOARD</h2>
    </div>
    @include('layouts.task')
    <div class="header">
        <ol class="breadcrumb breadcrumb-bg-pink">
            <li><a href="javascript:void(0);"><i class="material-icons">widgets</i> Master</a></li>
            <li><a href="{{ route('master_intinerary') }}"><i class="material-icons"></i>Master Itinerary</li></a>
            <li class="active"><i class="material-icons"></i>Edit Itinerary</li>
        </ol>
    </div>
    <div class="row clearfix">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="header bg-cyan">
                    <h4 class="" style="display: inline-block;">
                        Edit Itinerary
                    </h4>
                    <div class="pull-right">
                        <a class="save">
                            <button class="btn btn-round bg-pink waves-effect">
                                <i class="material-icons ">edit</i> Update
                            </button>
                        </a>
                    </div>
                </div>
                <div class="body row">
                    <div class="col-sm-2">
                    </div>
                    <form  method="post" accept-charset="utf-8" id="save">
                        <div class="paging-trans page_1 col-sm-8 on_screen" style="background: white;font-size: 12px" >
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label class="form-control-label" for="tour_code">Code Tour</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line ">
                                            <input type="text" name="tour_code" value="{{ $data->mi_nota }}" readonly=""  id="tour_code" class="form-control" placeholder="Field Required">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label class="form-control-label" for="intinerary">Name</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line page_1_req">
                                            <input type="text" name="intinerary" value="{{ $data->mi_name }}" id="intinerary" style="text-transform: uppercase;" class="form-control" placeholder="Field Required">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label class="form-control-label" for="tour_code">Book By</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line ">
                                            <select name="book_by" id="book_by" class="form-control js-example-basic-single width100">
                                                    <option value="">None</option>
                                                    @foreach ($user as $val)
                                                        <option 
                                                            @if ($data->mi_book_by == $val->co_name)
                                                                selected="" 
                                                            @endif
                                                         value="{{ $val->co_name }}">{{ $val->co_name }}</option>
                                                    @endforeach  
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix ">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label class="form-control-label" for="intinerary">Destination</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select name="category[]" id="category" class="form-control js-example-basic-single width100" multiple="">
                                                    <option disabled="" value="">Select Destination</option>
                                                @foreach ($category as $val)
                                                    <option @foreach ($data->destination as $a)
                                                        @if ($a->category->mc_id == $val->mc_id)
                                                            selected="" 
                                                        @endif
                                                    @endforeach value="{{ $val->mc_id }}">{{ $val->mc_name }}</option>
                                                @endforeach  
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label class="form-control-label" for="highlight">Highlight</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line page_1_req">
                                            <textarea rows="4" id="highlight" name="highlight" class="form-control no-resize uppercase" placeholder="Field Required">{{ $data->mi_highlight }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label class="form-control-label" for="highlight">Term & Condition</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line page_1_req">
                                            <textarea id="mytextarea" name="term" >{{ $data->mi_term }}</textarea>
                                            {{-- <textarea rows="4" id="term" name="term" class="form-control no-resize" placeholder="Field Required"></textarea> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label class="form-control-label" for="highlight">Term & Condition</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line page_1_req">
                                            <textarea rows="4"  id="term_con" name="term" class="form-control no-resize" placeholder="Field Required">{{ $data->mi_term }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label class="form-control-label" for="caption_by">Flight By</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line page_1_req">
                                            <input type="text" value="{{ $data->mi_by }}" name="caption_by" id="caption_by" class="form-control uppercase" placeholder="Field Required">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label class="form-control-label" for="additional">Additional Selection</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select class="form-control js-example-basic-single width100" id="additional" name="additional[]" multiple="">
                                                @foreach ($additional as $val)
                                                    <option
                                                    @foreach ($data->add as $a)
                                                        @if ($a->ma_id == $val->ma_id)
                                                            selected="" 
                                                        @endif
                                                    @endforeach
                                                     value="{{ $val->ma_id}}">{{ $val->ma_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix preview_div">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label class="form-control-label" for="caption_by">Photo</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="file-upload active">
                                        <div class="file-select">
                                            <div class="file-select-button fileName">Image</div>
                                            <div class="file-select-name noFile">{{ str_replace('itinerary/', '', $data->mi_image) }}</div> 
                                            <input type="file" class="chooseFile" name="image">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label class="form-control-label" for="caption_by">Preview</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="preview_td">
                                        <img style="width: 100%;border:1px solid pink" class="gambar output" id="output" src="{{ asset('storage/app') }}/{{ $data->mi_image }}?'{{ time() }}'" >
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix preview_div">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label class="form-control-label" for="caption_by">Upload PDF</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="file-upload upl_1 active" style="width: 100%;">
                                        <div class="file-select">
                                            <div class="file-select-button fileName" >PDF</div>
                                            <div class="file-select-name noFile tag_image_1" >{{ str_replace('itinerary/', '', $data->mi_pdf) }}</div> 
                                            <input type="file" class="chooseFile" name="pdf">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="panel panel-danger">
                                        <div class="panel-heading" role="tab" id="headingOne_1">
                                            <h4 class="panel-title">
                                                <a style="text-decoration: none; width: 100%" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseOne_1" aria-expanded="true" aria-controls="collapseOne_1" class="">
                                                <i class="material-icons">add</i>   Add Detail Schedule
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne_1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_1" aria-expanded="true" style="">
                                            <div class="panel-body">
                                                <div class="schedule">
                                                    @foreach ($data->schedules as $i=> $val)
                                                        <div class="all_schedule">
                                                            <div class="col-sm-2">
                                                                <input type="text" style="width: 70px"name="day[]" class="day_1 day form-control " readonly value="Day {{ $val->ms_detail }}">
                                                            </div>
                                                            <div class="col-sm-5">
                                                                <div class="form-group form-float">
                                                                    <div class="form-line" >
                                                                        <input type="text" value="{{ $val->ms_caption }}" style="font-weight: bold; text-transform: uppercase;" name="caption_schedule[]" placeholder="Caption" class="form-control caption_schedule sch_req">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group form-float col-sm-12">
                                                                    <div class="form-line " >
                                                                        <input type="text" style="font-weight: bold; text-transform: uppercase;" name="BLD[]" placeholder="BLD" class="form-control sch_req BLD" value="{{ $val->ms_bld }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-5">
                                                                <div class="form-group form-float">
                                                                    <div class="form-line">
                                                                        <textarea rows="4" name="description_schedule[]" class="form-control no-resize description_schedule sch_req" placeholder="Description">{{ $val->ms_description }}</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <div class="center col-sm-12" style="margin-bottom: 10px;">
                                                    <button  class="btn add btn-circle bg-cyan waves-effect" style="color: grey"  type="button"style="margin-bottom: 10px;">
                                                        <i class="material-icons">add</i>
                                                    </button>
                                                    <button  class="btn remove btn-circle bg-pink waves-effect" style="color: grey" type="button"style="margin-bottom: 10px;"> 
                                                        <i class="material-icons">remove</i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>      
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="panel panel-danger">
                                        <div class="panel-heading" role="tab" id="headingOne_2">
                                            <h4 class="panel-title">
                                                <a style="text-decoration: none; width: 100%" role="button" data-toggle="collapse" data-parent="#accordion_2" href="#collapseOne_2" aria-expanded="true" aria-controls="collapseOne_2" class="">
                                                <i class="material-icons">add</i> Add Flight Detail
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne_2" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_2" aria-expanded="true" style="">
                                            <div class="panel-body">
                                                <div class="flight">
                                                    @foreach ($data->flight as $i=> $val)
                                                        <div class="all_flight">
                                                            <div class="col-sm-4">
                                                                <div class="form-group form-float">
                                                                    <div class="form-line" >
                                                                        <input type="text" value="{{ $val->fd_nomor }}" style="font-weight: bold; text-transform: uppercase;" name="fd_nomor[]" placeholder="No Flight" class="form-control fd_nomor sch_req">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group form-float">
                                                                    <div class="form-line" >
                                                                        <input type="text" value="{{ $val->fd_route }}" style="font-weight: bold; text-transform: uppercase;" name="fd_route[]" placeholder="Route" class="form-control fd_route sch_req">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group form-float">
                                                                    <div class="form-line" >
                                                                        <input type="text" value="{{ $val->fd_time }}" style="font-weight: bold; text-transform: uppercase;" name="fd_time[]" placeholder="Time" class="form-control fd_time sch_req">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <div class="center col-sm-12" style="margin-bottom: 10px;">
                                                    <button  class="btn add_fl btn-circle bg-cyan waves-effect" style="color: grey"  type="button"style="margin-bottom: 10px;">
                                                        <i class="material-icons">add</i>
                                                    </button>
                                                    <button  class="btn remove_fl btn-circle bg-pink waves-effect" style="color: grey" type="button"style="margin-bottom: 10px;"> 
                                                        <i class="material-icons">remove</i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                       
                        </div>
                        <div class="paging-trans page_2 col-sm-12 delayed  table-responsive"  style="background: white">
                            <div class="add_departure col-sm-12">
                                <div class="col-sm-6">
                                    <div class="row clearfix">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                            <label class="form-control-label">Start</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                            <div class="form-group">
                                                <div class="form-line req" style="position:relative">
                                                    <input type="text" id="start" class="form-control datenormal" placeholder="DD-MM-YYYY">
                                                    <input type="hidden" id="index">
                                                    <input type="hidden" id="detail_id">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                            <label class="form-control-label">Adult Price</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                            <div class="form-group">
                                                <div class="form-line req">
                                                    <input type="text" id="adult_price" class="form-control " placeholder="Field Required">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-4 col-md-4col-sm-4 col-xs-4 form-control-label">
                                            <label class="form-control-label">Child Price</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                            <div class="form-group">
                                                <div class="form-line req">
                                                    <input type="text" id="child_price" class="form-control " placeholder="Field Required">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-4 col-md-4col-sm-4 col-xs-4 form-control-label">
                                            <label class="form-control-label">Child With Bed Price</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                            <div class="form-group">
                                                <div class="form-line req">
                                                    <input type="text" id="child_w_price" class="form-control " placeholder="Field Required">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                            <label class="form-control-label">Visa</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                            <div class="form-group">
                                                <div class="form-line req">
                                                    <input type="text" id="visa" class="form-control " placeholder="Field Required">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                            <label class="form-control-label">Apt Tax & Fuel Surcharge</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                            <div class="form-group">
                                                <div class="form-line req">
                                                    <input type="text" id="apt_tax" class="form-control" placeholder="Field Required">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="row clearfix">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                            <label class="form-control-label" for="end">End</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                            <div class="form-group">
                                                <div class="form-line req" style="position:relative">
                                                    <input type="text" id="end" class="form-control datenormal " placeholder="DD-MM-YYYY">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                            <label class="form-control-label">Infant Price</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                            <div class="form-group">
                                                <div class="form-line req">
                                                    <input type="text" id="infant_price" class="form-control " placeholder="Field Required">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                            <label class="form-control-label">Minimal DP</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                            <div class="form-group">
                                                <div class="form-line req">
                                                    <input type="text" id="minimal_dp" class="form-control " placeholder="Field Required">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                            <label class="form-control-label">Agent Com</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                            <div class="form-group">
                                                <div class="form-line req">
                                                    <input type="text" id="agent_com" class="form-control" placeholder="Field Required">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                            <label class="form-control-label">Tips</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                            <div class="form-group">
                                                <div class="form-line req">
                                                    <input type="text" id="tips" class="form-control" placeholder="Field Required">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row clearfix">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                            <label class="form-control-label" for="end">Seat</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                            <div class="form-group">
                                                <div class="form-line req">
                                                    <input type="number" class="form-control" id="seat" placeholder="Field Required">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <button type="button" class="btn btn-primary waves-effect pull-right add_detail">Add Detail</button>
                                </div>
                            </div>
                            <div class="detail_departure col-sm-12" style="overflow-x: auto;width: 100%">
                               <table class="table detail table-bordered" style="width: 100%;font-size: 12px;overflow-x: auto;">
                                    <thead>
                                        <tr>
                                            <td>Start</td>
                                            <td>End</td>
                                            <td>Adult Price</td>
                                            <td>CnB Price</td>
                                            <td>CwB Price</td>
                                            <td>Infant Price</td>
                                            <td>Minimal DP</td>
                                            <td>Agent Com</td>
                                            <td>Tips</td>
                                            <td>Visa</td>
                                            <td>Apt Tax</td>
                                            <td>Seat</td>
                                            <td>Action</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            @if (Auth::user()->akses('edit itinerary','mh_aktif'))
                            <a style="cursor: pointer" class="btn pull-right forward arrow">
                                <i class="material-icons">arrow_forward</i>
                            </a>
                            <a style="cursor: pointer" class="btn pull-right backward arrow readonly">
                                <i class="material-icons">arrow_back</i>
                            </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('extra_scripts')
  <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>

<script>
        tinymce.init({
    selector: '#mytextarea',
    plugins: "link code",
        height: 300,

  });
    window.onload = function(){
        $('.form-line').each(function(){
            $(this).removeClass('error');
            $(this).removeClass('focused');
        })
    }

    $("#adult_price").maskMoney({
        precision:0,
        thousands:'.',
        allowZero:true,
        defaultZero:true,
    });

    $("#child_price").maskMoney({
        precision:0,
        thousands:'.',
        allowZero:true,
        defaultZero:true,
    });

    $("#child_w_price").maskMoney({
        precision:0,
        thousands:'.',
        allowZero:true,
        defaultZero:true,
    });

    $("#infant_price").maskMoney({
        precision:0,
        thousands:'.',
        allowZero:true,
        defaultZero:true,
    });

    $("#minimal_dp").maskMoney({
        precision:0,
        thousands:'.',
        allowZero:true,
        defaultZero:true,
    });


    $("#agent_com").maskMoney({
        precision:0,
        thousands:'.',
        allowZero:true,
        defaultZero:true,
    });

    $("#tips").maskMoney({
        precision:0,
        thousands:'.',
        allowZero:true,
        defaultZero:true,
    });

    $("#visa").maskMoney({
        precision:0,
        thousands:'.',
        allowZero:true,
        defaultZero:true,
    });

    $("#apt_tax").maskMoney({
        precision:0,
        thousands:'.',
        allowZero:true,
        defaultZero:true,
    });


    $('.add').on('click',function(){
        // $('par').find('.day').val('da')
        var temp = 1;
        $('.schedule .day').each(function(){
            temp+=1
        })
        $('.schedule .all_schedule').eq(0).clone().fadeIn().appendTo(".schedule");
        $('.schedule .all_schedule').last().find('.day').val('Day '+temp);
        $('.schedule .all_schedule').last().find('.caption_schedule').val('');
        $('.schedule .all_schedule').last().find('.description_schedule').val('');
    });


    $('.add_fl').on('click',function(){
        // $('par').find('.day').val('da')
        $('.flight .all_flight').eq(0).clone().fadeIn().appendTo(".flight");
        $('.flight .all_flight').last().find('input').val('');

        $('.datenormal').bootstrapMaterialDatePicker({
            format: 'DD-MM-YYYY',
            clearButton: true,
            weekStart: 1,
            time: false,
            onSet: function (ele) {
                if(ele.select){
                      this.close();
                }
            }
        });
    });

    $('.remove_fl').on('click',function(){
        var temp = 0;
        $('.flight .all_flight').each(function(){
            temp+=1
        })
        if (temp >1) {
            $('.flight .all_flight').last().remove();
        }
  
    });

    $('.forward').click(function(){
        $('.page_1').removeClass("on_screen");
        $('.page_1').addClass("delayed");
        // $('.page_1').attr("hidden",true);
        // $('.page_2').attr("hidden",false);
        $('.page_2').removeClass("delayed");
        $('.page_2').addClass("on_screen");
        $(this).addClass('readonly');
        $('.backward').removeClass('readonly');
    })

    $('.backward').click(function(){
        // $('.page_1').attr("hidden",false);
        $('.page_1').removeClass("delayed");
        $('.page_1').addClass("on_screen");
        $('.page_2').removeClass("on_screen");
        $('.page_2').addClass("delayed");
        // $('.page_2').attr("hidden",true);
        $(this).addClass('readonly');
        $('.forward').removeClass('readonly');
    })

    detail = $('.detail').DataTable({
        searching:false,
        paging:false
    })

    
    $(document).on('click','.form-control',function(){
        $('.form-line').removeClass('error');
        $('.form-line').removeClass('focused');
        $(this).parents('div').addClass('focused');
    })

    $(document).on('blur','.form-control',function(){
        $('.form-line').removeClass('error');
        $('.form-line').removeClass('focused');
    })

        var inc = 1;
    $('.add_detail').click(function(){
        var temp = 0;
        $('.req').each(function(i){
            if ($('.req .form-control').eq(i).val() == '') {
                temp+=1;
                $('.req').eq(i).addClass('error');
                $('.req').eq(i).addClass('focused');
            }
        })
        if (temp != 0) {
            return false;
        }
        var index         = $('#index').val();
        var start         = $('#start').val();
        var end           = $('#end').val();
        var adult_price   = $('#adult_price').val();
        var child_price   = $('#child_price').val();
        var infant_price  = $('#infant_price').val();
        var seat          = $('#seat').val();
        var child_w_price = $('#child_w_price').val();
        var minimal_dp    = $('#minimal_dp').val();
        var agent_com     = $('#agent_com').val();
        var tips          = $('#tips').val();
        var apt_tax       = $('#apt_tax').val();
        var visa          = $('#visa').val();
        var agent_com     = $('#agent_com').val();
        var detail_id     = $('#detail_id').val();
        if (detail_id == '') {
            detail_id = 0;
        }

        var par = $('.index_'+index).parents('tr');
        detail.row(par).remove().draw();

        detail.row.add([
            '<p class="start_text">'+start+'</p>'+
            '<input type="hidden" name="start[]" value="'+start+'" class="start">'+
            '<input type="hidden" name="detail_id[]" value="'+detail_id+'" class="detail_id">'+
            '<input type="hidden" value="'+inc+'" class="index index_'+inc+'">',

            '<p class="end_text">'+end+'</p>'+
            '<input type="hidden" name="end[]" value="'+end+'" class="end">',

            '<p class="adult_price_text">'+adult_price+'</p>'+
            '<input type="hidden" name="adult_price[]" value="'+adult_price+'" class="adult_price">',

            '<p class="child_price_text">'+child_price+'</p>'+
            '<input type="hidden" name="child_price[]" value="'+child_price+'" class="child_price">',

            '<p class="child_w_price_text">'+child_w_price+'</p>'+
            '<input type="hidden" name="child_w_price[]" value="'+child_w_price+'" class="child_w_price">',

            '<p class="infant_price_text">'+infant_price+'</p>'+
            '<input type="hidden" name="infant_price[]" value="'+infant_price+'" class="infant_price">',

            '<p class="minimal_dp_text">'+minimal_dp+'</p>'+
            '<input type="hidden" name="minimal_dp[]" value="'+minimal_dp+'" class="minimal_dp">',

            '<p class="agent_com_text">'+agent_com+'</p>'+
            '<input type="hidden" name="agent_com[]" value="'+agent_com+'" class="agent_com">',

            '<p class="agent_com_text">'+tips+'</p>'+
            '<input type="hidden" name="tips[]" value="'+tips+'" class="tips">',

            '<p class="agent_com_text">'+visa+'</p>'+
            '<input type="hidden" name="visa[]" value="'+visa+'" class="visa">',

            '<p class="agent_com_text">'+apt_tax+'</p>'+
            '<input type="hidden" name="apt_tax[]" value="'+apt_tax+'" class="apt_tax">',

            '<p class="seat_text">'+seat+'</p>'+
            '<input type="hidden" name="seat[]" value="'+seat+'" class="seat">',

            '<div class="btn-group btn-group-sm" role="group" aria-label="Extra-small button group"  style="width:65px">'+
            '<a title="Edit" type="button" onclick="edit(this)" class="btn btn-warning  waves-effect "><i class=fa fa-edit>edit</i></a>'+
            '<a title="Delete" type="button" onclick="hapus(this)" class="btn btn-danger  waves-effect "><i class=fa fa-trash>trash</i></a>'+
            '</div>',
        ]).draw();
        inc++;
        $('.add_departure input').val('');
    })

    function hapus(a) {
        var par = $(a).parents('tr');
        detail.row(par).remove().draw();
    }

    function edit(a) {
        var par = $(a).parents('tr');
        var index         = $(par).find('.index').val();
        var start         = $(par).find('.start').val();
        var end           = $(par).find('.end').val();
        var adult_price   = $(par).find('.adult_price').val();
        var child_price   = $(par).find('.child_price').val();
        var infant_price  = $(par).find('.infant_price').val();
        var child_w_price = $(par).find('.child_w_price').val();
        var term          = $(par).find('.term').val();
        var seat          = $(par).find('.seat').val();
        var minimal_dp    = $(par).find('.minimal_dp').val();
        var agent_com     = $(par).find('.agent_com').val();
        var tips          = $(par).find('.tips').val();
        var visa          = $(par).find('.visa').val();
        var apt_tax       = $(par).find('.apt_tax').val();
        var detail_id     = $(par).find('.detail_id').val();


        $('#index').val(index);
        $('#start').val(start);
        $('#end').val(end);
        $('#adult_price').val(adult_price);
        $('#child_price').val(child_price);
        $('#infant_price').val(infant_price);
        $('#child_w_price').val(child_w_price);
        $('#mytextarea').val(term);
        $('#seat').val(seat);
        $('#minimal_dp').val(minimal_dp);
        $('#agent_com').val(agent_com);
        $('#tips').val(tips);
        $('#visa').val(visa);
        $('#apt_tax').val(apt_tax);
        $('#detail_id').val(detail_id);
    }

    $('#chooseFile').bind('change', function () {
        var filename = $("#chooseFile").val();
        var fsize = $('#chooseFile')[0].files[0].size;
        if(fsize>1048576) //do something if file size more than 1 mb (1048576)
        {

          return false;
        }
        if (/^\s*$/.test(filename)) {
            $(".file-upload").removeClass('active');
            $("#noFile").text("No file chosen..."); 
        }
        else {
            $(".file-upload").addClass('active');
            $("#noFile").text(filename.replace("C:\\fakepath\\", "")); 
        }
    });

     {{-- GAMBAR --}}
    $('.chooseFile').bind('change', function () {
        var filename = $(this).val();
        var fsize = $(this)[0].files[0].size;
        if(fsize>1048576) //do something if file size more than 1 mb (1048576)
        {
          iziToast.warning({
            icon: 'fa fa-times',
            message: 'File Is To Big!',
          });
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


    $(document).on('click','.save',function(){
        tinyMCE.triggerSave();
        var comment = $("#mytextarea").val();
        var temp1 = 0;
        $('.page_1_req .form-control').each(function(i){
            if ($('.page_1_req  .form-control').eq(i).val() == '' ) {
                temp1+=1;
                $('.page_1_req').eq(i).addClass('error');
                $('.page_1_req').eq(i).addClass('focused');
            }
        })

        if ($('#category').val() == '') {
            $('#category').parents('.form-line').addClass('error');
            $('#category').parents('.form-line').addClass('focused');
            temp1 +=1;
        }
        if ($('#additional').val() == null) {
            $('#additional').parents('.form-line').addClass('error');
            $('#additional').parents('.form-line').addClass('focused');
            temp1 +=1;
        }

        $('.sch_req').each(function(i){
            if ($('.sch_req').eq(i).val() == '' ) {
                temp1+=1;
                $('.sch_req').eq(i).parents('.form-line').addClass('error');
                $('.sch_req').eq(i).parents('.form-line').addClass('focused');
            }
        })

        
        if (temp1 != 0) {
            iziToast.warning({
                icon: 'fa fa-info',
                title: 'Error!',
                position:'topRight',
                message: 'Check Your Data Again!',
            }); 
            return false;
        } 

        var temp = 0;
        detail.$('.start').each(function(){
            temp +=1;
        })

        if (temp == 0) {
            iziToast.warning({
                icon: 'fa fa-notice',
                title: 'Error!',
                position:'topRight',
                message: 'No inputed periode data!',
            });
            return false;
        }


        var form = $('#save');
        var formdata = false;
        if (window.FormData){
            formdata = new FormData(form[0]);
        }
        iziToast.show({
            overlay: true,
            close: false,
            timeout: 20000, 
            color: 'dark',
            icon: 'fas fa-question-circle',
            title: 'Update Data!',
            message: 'Apakah Anda Yakin ?!',
            position: 'center',
            progressBarColor: 'rgb(0, 255, 184)',
            buttons: [
            [
                '<button style="background-color:#32CD32;">Save</button>',
                function (instance, toast) {

                  $.ajaxSetup({
                      headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        type: "POST",
                        url:'{{ url('/master/master_intinerary/save') }}',
                        data: formdata ? formdata : form.serialize()+'&'+detail.$('input').serialize()+'&'+comment,
                        dataType:'json',
                        processData: false,
                        contentType: false,
                      success:function(data){
                        if (data.status == '1') {
                            iziToast.success({
                                icon: 'fa fa-save',
                                position:'topRight',
                                title: 'Success!',
                                message: 'Data Berhasil Disimpan!',
                            });

                            location.href = '{{ route('master_intinerary') }}'
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
                    instance.hide({
                        transitionOut: 'fadeOutUp'
                    }, toast);
                }
            ],
            [
                '<button style="background-color:#44d7c9;">Cancel</button>',
                function (instance, toast) {
                  instance.hide({
                    transitionOut: 'fadeOutUp'
                  }, toast);
                }
              ]
            ]
        });
    })
    @foreach ($data->detail_intinerarys as $i => $data)
        var start         = '{{ Carbon\carbon::parse($data->md_start)->format('d-m-Y') }}';
        var end           = '{{ Carbon\carbon::parse($data->md_end)->format('d-m-Y') }}';
        var adult_price   = '{{ number_format($data->md_adult_price, 0, ",", ".") }}';
        var child_price   = '{{ number_format($data->md_child_price, 0, ",", ".") }}';
        var child_w_price = '{{ number_format($data->md_child_w_price, 0, ",", ".") }}';
        var infant_price  = '{{ number_format($data->md_infant_price, 0, ",", ".") }}';
        var term          = '{{ $data->md_term }}';
        var seat          = '{{ $data->md_seat }}';
        var seat_remain   = '{{ $data->md_seat_remain }}';
        var md_detail     = '{{ $data->md_detail }}';
        var md_dp         = '{{ number_format($data->md_dp, 0, ",", ".") }}';

        var agent_com     = '{{ number_format($data->md_agent_com, 0, ",", ".") }}';
        var tips          = '{{ number_format($data->md_tips, 0, ",", ".") }}';
        var visa         = '{{ number_format($data->md_visa, 0, ",", ".") }}';
        var apt_tax         = '{{ number_format($data->md_tax, 0, ",", ".") }}';



        var action = '<a title="Edit" type="button" onclick="edit(this)" class="btn btn-warning  waves-effect "><i class=fa fa-edit>edit</i></a>'+
            '<a title="Delete" type="button" onclick="hapus(this)" class="btn btn-danger  waves-effect "><i class=fa fa-trash>trash</i></a>';

        detail.row.add([
            '<p class="start_text">'+start+'</p>'+
            '<input type="hidden" name="start[]" value="'+start+'" class="start">'+
            '<input type="hidden" name="detail_id[]" value="'+md_detail+'" class="detail_id">'+
            '<input type="hidden" value="'+'{{ $i }}'+'" class="index index_'+'{{ $i }}'+'">',

            '<p class="end_text">'+end+'</p>'+
            '<input type="hidden" name="end[]" value="'+end+'" class="end">',

            '<p class="adult_price_text">'+adult_price+'</p>'+
            '<input type="hidden" name="adult_price[]" value="'+adult_price+'" class="adult_price">',

            '<p class="child_price_text">'+child_price+'</p>'+
            '<input type="hidden" name="child_price[]" value="'+child_price+'" class="child_price">',

            '<p class="child_w_price_text">'+child_w_price+'</p>'+
            '<input type="hidden" name="child_w_price[]" value="'+child_w_price+'" class="child_w_price">',

            '<p class="infant_price_text">'+infant_price+'</p>'+
            '<input type="hidden" name="infant_price[]" value="'+infant_price+'" class="infant_price">',

            '<p class="minimal_dp_text">'+md_dp+'</p>'+
            '<input type="hidden" name="minimal_dp[]" value="'+md_dp+'" class="minimal_dp">',

            '<p class="agent_com_text">'+agent_com+'</p>'+
            '<input type="hidden" name="agent_com[]" value="'+agent_com+'" class="agent_com">',

            '<p class="agent_com_text">'+tips+'</p>'+
            '<input type="hidden" name="tips[]" value="'+tips+'" class="tips">',

            '<p class="agent_com_text">'+visa+'</p>'+
            '<input type="hidden" name="visa[]" value="'+visa+'" class="visa">',

            '<p class="agent_com_text">'+apt_tax+'</p>'+
            '<input type="hidden" name="apt_tax[]" value="'+apt_tax+'" class="apt_tax">',

            '<p class="seat_text">'+seat_remain+'/'+seat+'</p>'+
            '<input type="hidden" name="seat[]" value="'+seat+'" class="seat">',

            '<div class="btn-group btn-group-sm" role="group" aria-label="Extra-small button group" style="width:65px">'+
            action+
            '</div>',
        ]).draw();
        inc++;
    @endforeach
</script>
@endsection
  
