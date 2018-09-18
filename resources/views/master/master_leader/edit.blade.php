@extends('main')
@include('layouts._sidebar')
    @section('content')
        @include('layouts.task')
        <div class="header">
            <ol class="breadcrumb breadcrumb-bg-pink">
                <li><a href="javascript:void(0);"><i class="material-icons">widgets</i> Master</a></li>
                <li class="active"><i class="material-icons"></i>Master Leader</li>
            </ol>
        </div>
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header bg-light-blue">
                        <h4 class="" style="display: inline-block;">Master Leader</h4>
                        <div class="pull-right">
                            <a class="save">
                                <button  class="btn btn-round bg-pink waves-effect" onclick="save()">
                                    <i class="material-icons ">save</i> Update
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="body row">
                        <form  method="post" class="saving" accept-charset="utf-8" id="save">
                            <div class="col-sm-6">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label class="form-control-label" for="intinerary">Name</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line page_1_req">
                                                <input type="text" name="name" id="name" style="text-transform: uppercase;" class="form-control" placeholder="Field Required" value="{{ $data->tl_name }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label class="form-control-label" for="intinerary">Alamat</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line page_1_req">
                                                <input type="text" name="alamat" id="alamat" style="text-transform: uppercase;" class="form-control" placeholder="Field Required" value="{{ $data->tl_alamat }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label class="form-control-label" for="intinerary">Phone</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line page_1_req">
                                                <input type="text" name="phone" id="phone" style="text-transform: uppercase;" class="form-control" placeholder="Field Required" value="{{ $data->tl_phone }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label class="form-control-label" for="intinerary">Passport</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line page_1_req">
                                                <input type="text" name="passport" id="passport" style="text-transform: uppercase;" class="form-control" placeholder="Field Required" value="{{ $data->tl_passport }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label class="form-control-label" for="intinerary">Exp Date</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line page_1_req">
                                                <input type="text" name="exp_date" id="exp_date" style="text-transform: uppercase;" class="form-control datenormal" placeholder="Field Required" value="{{ carbon\carbon::parse($data->tl_exp_date)->format('d-m-Y') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label class="form-control-label" for="intinerary">Issued</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line page_1_req">
                                                <input type="text" name="issued" id="issued" style="text-transform: uppercase;" class="form-control" placeholder="Field Required" value="{{ $data->tl_issuing }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-sm-6">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label class="form-control-label" for="intinerary">Gender</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <select class="form-control gender" name="gender">
                                            <option value="">Select Gender</option>
                                            <option @if ($data->tl_gender == 'male')
                                                selected="" 
                                            @endif value="male">Male</option>
                                            <option @if ($data->tl_gender ==  'female')
                                                selected="" 
                                            @endif value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label class="form-control-label" for="intinerary">Date Birth</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line page_1_req">
                                                <input type="text" name="date_birth" id="date_birth" style="text-transform: uppercase;" class="form-control datenormal" placeholder="Field Required" value="{{ carbon\carbon::parse($data->tl_birth_date)->format('d-m-Y') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label class="form-control-label" for="intinerary">Place Birth</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line page_1_req">
                                                <input type="text" name="place_birth" id="place_birth" style="text-transform: uppercase;" class="form-control" placeholder="Field Required" value="{{ $data->tl_birth_place }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix preview_div">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label class="form-control-label" for="caption_by">Passport</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="file-upload upl_1 active" style="width: 100%;">
                                            <div class="file-select">
                                                <div class="file-select-button fileName" >Image</div>
                                                <div class="file-select-name noFile tag_image_1" >{{ $data->tl_image }}</div> 
                                                <input type="file" class="chooseFile" name="image" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label class="form-control-label" for="caption_by">Preview</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="preview_td">
                                            <img src="{{ asset('storage/app').'/'.$data->tl_image }}" style="width: 100%;border:1px solid pink" class="output" >
                                        </div>
                                    </div>
                                </div>
                            </div>   
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
@section('extra_scripts')
<script type="text/javascript">
    
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
            $('.output').attr('src',e.target.result);
        };
        reader.readAsDataURL(file.files[0]);
    }


    function save() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var form = $('#save');
        var formdata = false;
        if (window.FormData){
            formdata = new FormData(form[0]);
        }
        $.ajax({
            data : formdata,
            url  : '{{ url('/master/master_intinerary/update_leader') }}?id='+'{{ $data->tl_id }}',
            type : 'POST',
            processData: false,
            contentType: false,
            success: function (data) {
                if (data.status == '1') {
                    iziToast.success({
                        icon: 'fa fa-user',
                        title: 'Success!',
                        message: 'Data Saved!',
                    });
                    window.location=('{{ route('master_leader') }}')
                }else{
                    iziToast.error({
                        icon: 'fas fa-times-circle',
                        title: 'Error!',
                        message: 'Something Wrong,Call Developer!',
                    });
                }
            },
            error:function(){
                iziToast.error({
                    icon: 'fas fa-times-circle',
                    title: 'Error!',
                    message: 'Something Wrong,Call Developer',
                });
            }
        })
    }

    window.onload = function(){
    $('.form-line').removeClass('focused');
    }
</script>
@endsection

    

  
