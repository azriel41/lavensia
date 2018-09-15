@extends('main')
@include('layouts._sidebar')
    @section('content')
        @include('layouts.task')
        <div class="header">
            <ol class="breadcrumb breadcrumb-bg-pink">
                <li><a href="javascript:void(0);"><i class="material-icons">widgets</i> Master</a></li>
                <li class="active"><i class="material-icons"></i>Profile</li>
            </ol>
        </div>
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header bg-light-blue">
                            <h2>
                                Profile <small></small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="{{ route('profile') }}">profile</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                    <div class="body">
                        <form id="save_data" action="{{ route('master_agent_agent_save') }}" method="post" enctype="multipart/form-data"  accept-charset="utf-8" >
                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                            {{-- company --}}
                            <div class="col-lg-offset-2 col-lg-8 col-md-12 col-sm-12 col-xs-12 form-control-label">
                                    <h3 class="font-bold col-cyan"><i class="fa fa-home"></i> Company</h3>
                            </div>
                            <div class="col-lg-offset-2 col-lg-8 col-md-12 col-sm-12 col-xs-12 form-control-label">
                                <hr style="
                                display: block;
                                margin-top: 0.5em;
                                margin-bottom: 0.5em;
                                margin-left: auto;
                                margin-right: auto;
                                border-style: inset;
                                border-width: 1px;
                                border-color: #00BCD4 !important;
                                " />
                            </div>
                                    
                            <div class="row clearfix">
                                <div class="col-lg-offset-2 col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                    <label for="intinerary">Name</label>
                                </div>
                                <div class="col-lg-6 col-md-10 col-sm-10 col-xs-10">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="co_name" id="co_name" class="form-control" readonly=""  value="{{ $data[0]->co_name }}" placeholder="Company Name">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-offset-2 col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                    <label for="intinerary">Phone</label>
                                </div>
                                <div class="col-lg-6 col-md-10 col-sm-10 col-xs-10">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="co_phone" id="co_phone" class="form-control numberonly" readonly=""  value="{{ $data[0]->co_phone }}" style="text-align: : right;"   placeholder="Company Phone">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-offset-2 col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                    <label for="intinerary">Email</label>
                                </div>
                                <div class="col-lg-6 col-md-10 col-sm-10 col-xs-10">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="co_email" id="co_email" class="form-control"  readonly=""  value="{{ $data[0]->co_email }}" placeholder="Company Email">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-offset-2 col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                    <label for="intinerary">Address</label>
                                </div>
                                <div class="col-lg-6 col-md-10 col-sm-10 col-xs-10">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="co_address" id="co_address" class="form-control" placeholder="Company Address" readonly="" >{{ $data[0]->co_address }}</textarea>
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
                                                {{-- @if ( $data[0]->image == null ) --}}
                                                   src="{{ asset('/assets/images/NoImage.png') }}" 
                                                {{-- @else  --}}
                                                   {{-- src="{{ asset('storage/app/agent/agent-'.$data->image) }}" --}}
                                               {{--  @endif --}} width="400px" height="300px" name="image-drop">
                                            </div>
                                            <br>
                                            <div class="file-upload col-lg-6 col-md-8 col-sm-12 col-xs-12 form-control-label" style="padding-left: 0px;">
                                                <div class="file-select">
                                                    <div class="file-select-button fileName" >Image</div>
                                                        <div class="file-select-name noFile">
                                                            {{-- @if ($data->image != null)
                                                                {{ $data->image }}
                                                            @else --}}
                                                                Company Image
                                                            {{-- @endif  --}}
                                                        </div> 
                                                    <input type="file" class="chooseFile" name="image"  
                                                        {{-- @if ($data[0]->image == null ) --}}
                                                           src="{{ asset('/assets/images/NoImage.png') }}" 
                                                       {{--  @else 
                                                           src="{{ asset('storage/app/agent/agent-'.$data->image.'.jpg') }}"
                                                        @endif --}}
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Manager --}}
                            <div class="col-lg-offset-2 col-lg-8 col-md-12 col-sm-12 col-xs-12 form-control-label">
                                    <h3 class="font-bold col-orange"><i class="fa fa-home"></i> Manager</h3>
                            </div>
                            <div class="col-lg-offset-2 col-lg-8 col-md-12 col-sm-12 col-xs-12 form-control-label">
                                <hr style="
                                display: block;
                                margin-top: 0.5em;
                                margin-bottom: 0.5em;
                                margin-left: auto;
                                margin-right: auto;
                                border-style: inset;
                                border-width: 1px;
                                border-color: #FF9800 !important;
                                " />
                            </div>
                                    
                            <div class="row clearfix">
                                <div class="col-lg-offset-2 col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                    <label for="intinerary">Name</label>
                                </div>
                                <div class="col-lg-6 col-md-10 col-sm-10 col-xs-10">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="mg_name" id="mg_name" class="form-control"  placeholder="Manager Name">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-offset-2 col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                    <label for="intinerary">Phone</label>
                                </div>
                                <div class="col-lg-6 col-md-10 col-sm-10 col-xs-10">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="mg_phone" id="mg_phone" class="form-control numberonly" style="text-align: : right;"   placeholder="Manager Phone">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-offset-2 col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                    <label for="intinerary">Email</label>
                                </div>
                                <div class="col-lg-6 col-md-10 col-sm-10 col-xs-10">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="mg_email" id="mg_email" class="form-control"  placeholder="Manager Email">
                                        </div>
                                    </div>
                                </div>
                            </div>  

                            {{-- PIC --}}
                            <div class="col-lg-offset-2 col-lg-8 col-md-12 col-sm-12 col-xs-12 form-control-label">
                                    <h3 class="font-bold col-pink"><i class="fa fa-home"></i> PIC</h3>
                            </div>
                            <div class="col-lg-offset-2 col-lg-8 col-md-12 col-sm-12 col-xs-12 form-control-label">
                                <hr style="
                                display: block;
                                margin-top: 0.5em;
                                margin-bottom: 0.5em;
                                margin-left: auto;
                                margin-right: auto;
                                border-style: inset;
                                border-width: 1px;
                                border-color: #E91E63 !important;
                                " />
                            </div>
                                    
                            <div class="row clearfix">
                                <div class="col-lg-offset-2 col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                    <label for="intinerary">Name</label>
                                </div>
                                <div class="col-lg-6 col-md-10 col-sm-10 col-xs-10">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="name" id="name" class="form-control"  placeholder="PIC Name">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-offset-2 col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                    <label for="intinerary">Phone</label>
                                </div>
                                <div class="col-lg-6 col-md-10 col-sm-10 col-xs-10">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="phone" id="phone" class="form-control numberonly" style="text-align: : right;"   placeholder="PIC Phone">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-offset-2 col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                    <label for="intinerary">Email</label>
                                </div>
                                <div class="col-lg-6 col-md-10 col-sm-10 col-xs-10">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="email" id="email" class="form-control"  placeholder="PIC Email">
                                        </div>
                                    </div>
                                </div>
                            </div>  

                            <div class="row clearfix">
                                <div class="col-lg-offset-2 col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                    <label for="intinerary">Address</label>
                                </div>
                                <div class="col-lg-6 col-md-10 col-sm-10 col-xs-10">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="address" id="address" class="form-control" placeholder="PIC Address"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="row clearfix">
                                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 form-control-label">
                                    <button class="btn bg-blue waves-effect" onclick="save()" id="save"><i class="fa fa-save"></i> Submit</button>
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
            $('.image_drop').attr('src',e.target.result);
        };
        reader.readAsDataURL(file.files[0]);
    }


    function save() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            data : $('#save_data').serialize(),
            url  : ('{{ route('save_profile') }}'),
            type : 'POST',
            success: function (data) {
                if (data.status == 'sukses') {
                    iziToast.success({
                        icon: 'fa fa-user',
                        title: 'Success!',
                        message: 'Data Saved!',
                    });
                    window.location=('{{ route('profile') }}')
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


</script>
@endsection

    

  
