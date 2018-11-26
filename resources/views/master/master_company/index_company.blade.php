@extends('main')
<style type="text/css" media="screen">
    .inline-block{
        display: inline-block;
    }
</style>

    @section('content')
        @include('layouts.task')
        <div class="header">
            <ol class="breadcrumb breadcrumb-bg-pink">
                <li><a href="javascript:void(0);"><i class="material-icons">widgets</i> Master</a></li>
                <li class="active"><i class="material-icons"></i>Master Destination</li>
            </ol>
        </div>
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header bg-blue-grey">
                        <h4 class="inline-block">
                            Master Destination
                        </h4>
                    </div>
                    <div class="body">
                    
                    <form method="post" action="{{ route('slider_1') }}" enctype="multipart/form-data"  accept-charset="utf-8">
                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                        <div class="row clearfix">
                            <div class="col-lg-offset-2 col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                <label for="intinerary">Slide 1</label>
                            </div>
                            <div class="col-lg-6 col-md-10 col-sm-10 col-xs-10">
                                <div class="form-group">
                                    <div class="form-line">
                                        <div >
                                            <img class="image_drop img-responsive" 
                                               src="{{ asset('storage/app/company/company-1.jpg') }}" 
                                           width="400px" height="300px" name="image-drop">
                                        </div>
                                        <br>
                                        <div class="file-upload col-lg-6 col-md-8 col-sm-12 col-xs-12 form-control-label" style="padding-left: 0px;">
                                            <div class="file-select">
                                                <div class="file-select-button fileName" >Image</div>
                                                    <div class="file-select-name noFile">
                                                        
                                                             Image
                                                        
                                                    </div> 
                                                <input type="file" class="chooseFile" name="image"  
                                                   
                                                       src="{{ asset('storage/app/company/company-1.jpg') }}" 
                                                   
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <button class="btn bg-blue waves-effect" id="save"><i class="fa fa-save"></i> Submit</button>
                        </div>
                    </form>


                    <form method="post" action="{{ route('slider_2') }}" enctype="multipart/form-data"  accept-charset="utf-8">
                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                        <div class="row clearfix">
                            <div class="col-lg-offset-2 col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                <label for="intinerary">Slide 2</label>
                            </div>
                            <div class="col-lg-6 col-md-10 col-sm-10 col-xs-10">
                                <div class="form-group">
                                    <div class="form-line">
                                        <div >
                                            <img class="image_drop1 img-responsive" 
                                               src="{{ asset('storage/app/company/company-2.jpg') }}" 
                                           width="400px" height="300px" name="image-drop2">
                                        </div>
                                        <br>
                                        <div class="file-upload2 col-lg-6 col-md-8 col-sm-12 col-xs-12 form-control-label" style="padding-left: 0px;">
                                            <div class="file-select">
                                                <div class="file-select-button fileName1" >Image</div>
                                                    <div class="file-select-name noFile1">
                                                        
                                                             Image
                                                        
                                                    </div> 
                                                <input type="file" class="chooseFile1" name="image"  
                                                   
                                                       src="{{ asset('storage/app/company/company-2.jpg') }}" 
                                                   
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <button class="btn bg-blue waves-effect" id="save"><i class="fa fa-save"></i> Submit</button>
                        </div>
                    </form>

                    <form method="post" action="{{ route('slider_3') }}" enctype="multipart/form-data"  accept-charset="utf-8">
                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                        <div class="row clearfix">
                            <div class="col-lg-offset-2 col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                <label for="intinerary">Slide 2</label>
                            </div>
                            <div class="col-lg-6 col-md-10 col-sm-10 col-xs-10">
                                <div class="form-group">
                                    <div class="form-line">
                                        <div >
                                            <img class="image_drop3 img-responsive" 
                                               src="{{ asset('storage/app/company/company-3.jpg') }}" 
                                           width="400px" height="300px" name="image-drop3">
                                        </div>
                                        <br>
                                        <div class="file-upload3 col-lg-6 col-md-8 col-sm-12 col-xs-12 form-control-label" style="padding-left: 0px;">
                                            <div class="file-select">
                                                <div class="file-select-button fileName3" >Image</div>
                                                    <div class="file-select-name noFile3">
                                                        
                                                             Image
                                                        
                                                    </div> 
                                                <input type="file" class="chooseFile3" name="image"  
                                                   
                                                       src="{{ asset('storage/app/company/company-3.jpg') }}" 
                                                   
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <button class="btn bg-blue waves-effect" id="save"><i class="fa fa-save"></i> Submit</button>
                        </div>
                    </form>

                    <form method="post" action="{{ route('bg_page') }}" enctype="multipart/form-data"  accept-charset="utf-8">
                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                        <div class="row clearfix">
                            <div class="col-lg-offset-2 col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                <label for="intinerary">Slide 2</label>
                            </div>
                            <div class="col-lg-6 col-md-10 col-sm-10 col-xs-10">
                                <div class="form-group">
                                    <div class="form-line">
                                        <div >
                                            <img class="image_drop3 img-responsive" 
                                               src="{{ asset('storage/app/company/bg-4.jpg') }}" 
                                           width="400px" height="300px" name="image-drop4">
                                        </div>
                                        <br>
                                        <div class="file-upload4 col-lg-6 col-md-8 col-sm-12 col-xs-12 form-control-label" style="padding-left: 0px;">
                                            <div class="file-select">
                                                <div class="file-select-button fileName4" >Image</div>
                                                    <div class="file-select-name noFile4">
                                                        
                                                             Image
                                                        
                                                    </div> 
                                                <input type="file" class="chooseFile4" name="image"  
                                                   
                                                       src="{{ asset('storage/app/company/bg-4.jpg') }}" 
                                                   
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <button class="btn bg-blue waves-effect" id="save"><i class="fa fa-save"></i> Submit</button>
                        </div>
                    </form>



                    </div>
                </div>
            </div>
        </div>
    @endsection

@section('extra_scripts')
<script>
    


</script>
  @endsection
