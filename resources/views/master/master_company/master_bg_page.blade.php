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
                    

                    <form method="post" action="{{ route('bg_page') }}" enctype="multipart/form-data"  accept-charset="utf-8">
                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                        <div class="row clearfix">
                            <div class="col-lg-offset-2 col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                <label for="intinerary">Bg per package/book</label>
                            </div>
                            <div class="col-lg-6 col-md-10 col-sm-10 col-xs-10">
                                <div class="form-group">
                                    <div class="form-line">
                                        <div >
                                            <img class="image_drop img-responsive" 
                                               src="{{ asset('storage/app/company/bg-4.jpg') }}?{{ time() }}" 
                                           width="400px" height="300px" name="image-drop4">
                                        </div>
                                        <br>
                                        <div class="file-upload col-lg-6 col-md-8 col-sm-12 col-xs-12 form-control-label" style="padding-left: 0px;">
                                            <div class="file-select">
                                                <div class="file-select-button fileName" >Image</div>
                                                    <div class="file-select-name noFile">
                                                        
                                                             Image
                                                        
                                                    </div> 
                                                <input type="file" class="chooseFile" name="image"  
                                                   
                                                       src="{{ asset('storage/app/company/bg-4.jpg') }}?{{ time() }}" 
                                                   
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
