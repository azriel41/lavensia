@extends('main')
    @section('content')
        @include('layouts.task')
        <style type="text/css">
            #mceu_14{
                width:100% !important;
            }
        </style>
        <div class="header">
            <ol class="breadcrumb breadcrumb-bg-pink">
                <li><a href="javascript:void(0);"><i class="material-icons">widgets</i> Master</a></li>
                <li><i class="material-icons"></i>Master Additional</li>
                <li class="active"><i class="material-icons"></i>Create Additional</li>
            </ol>
        </div>
        <div class="container-fluid">
            <div class="block-header">
                <h2>EDITORS</h2>
            </div>
                <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="header">
                                    <h2>
                                        TINYMCE
                                        <small>Taken from <a href="https://www.tinymce.com" target="_blank">www.tinymce.com</a></small>
                                    </h2>
                                    <ul class="header-dropdown m-r--5">
                                        <li class="dropdown">
                                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                <i class="material-icons">more_vert</i>
                                            </a>
                                            <ul class="dropdown-menu pull-right">
                                                <li><a href="javascript:void(0);">Action</a></li>
                                                <li><a href="javascript:void(0);">Another action</a></li>
                                                <li><a href="javascript:void(0);">Something else here</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="body">
                                    <form method="post" action="{{ route('article_update',['id'=>$data->da_id]) }}" enctype="multipart/form-data"  accept-charset="utf-8">
                                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                        <div class="row clearfix">
                                            <div class="col-lg-offset-2 col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                <label for="intinerary">Title</label>
                                            </div>
                                            <div class="col-lg-6 col-md-10 col-sm-10 col-xs-10">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" name="da_header" id="da_header" value="{{ $data->da_header }}" class="form-control" placeholder="Title">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row clearfix">
                                            <div class="col-lg-offset-2 col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                <label for="intinerary">Image</label>
                                            </div>
                                            <div class="col-lg-6 col-md-10 col-sm-10 col-xs-10">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <div >
                                                            <img class="image_drop img-responsive" 
                                                                @if ($data->da_image != null)
                                                                   src="{{ asset('/storage/app/article/article-'.$data->da_image) }}" 
                                                                @else
                                                                   src="{{ asset('/assets/images/NoImage.png') }}" 
                                                                @endif
                                                           width="400px" height="300px" name="image-drop">
                                                        </div>
                                                        <br>
                                                        <div class="file-upload col-lg-6 col-md-8 col-sm-12 col-xs-12 form-control-label" style="padding-left: 0px;">
                                                            <div class="file-select">
                                                                <div class="file-select-button fileName" >Image</div>
                                                                    <div class="file-select-name noFile">
                                                                        @if ($data->da_image != null)
                                                                             {{ $data->da_image }}
                                                                        @else
                                                                           Image
                                                                        @endif
                                                                        
                                                                    </div> 
                                                                <input type="file" class="chooseFile" name="image"  
                                                                   
                                                                        @if ($data->da_image != null)
                                                                           src="{{ asset('/storage/app/article/article-'.$data->da_image) }}" 
                                                                        @else
                                                                           src="{{ asset('/assets/images/NoImage.png') }}" 
                                                                        @endif
                                                                   
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row clearfix">
                                            <div class="col-lg-offset-2 col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                <label for="intinerary">Show</label>
                                            </div>
                                            <div class="col-lg-6 col-md-10 col-sm-10 col-xs-10">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" name="da_show" id="da_show" value="{{ $data->da_show }}" class="form-control" placeholder="Show">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <textarea id="mytextarea" name="da_desc">{!! $data->da_desc !!}</textarea>

                                        <div class="header">
                                            <button class="btn bg-blue waves-effect" id="save"><i class="fa fa-save"></i> Submit</button>
                                        </div>
                                
                                    </form>
                                </div>
                                
                            </div>
                        </div>                        
                    </div>
                </div>
            </section>
    @endsection

  <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>

@section('extra_scripts')
<script>
    $('.chooseFile').bind('change', function () {
        var filename = $(this).val();
        var fsize = $(this)[0].files[0].size;
        if(fsize>1048576) //do something if file size more than 1 mb (1048576)
        {
          return false;
        }
        if (/^\s*$/.test(filename)) {
            $('.file-upload').removeClass('active');
            $(".noFile").text("No file chosen..."); 
        }
        else {
            $('.file-upload').addClass('active');
            $(".noFile").text(filename.replace("C:\\fakepath\\", "")); 
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
            $('.image_drop').attr('src',e.target.result);
        };
        reader.readAsDataURL(file.files[0]);
    }

    tinymce.init({
    selector: '#mytextarea',
    plugins: "link code",
        height: 300,
  });
</script>
@endsection  
