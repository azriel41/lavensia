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
                        <form id="save_data" action="{{ route('master_save_agent') }}" method="post" enctype="multipart/form-data"  accept-charset="utf-8" >
                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                            {{-- company --}}
                            <div class="row clearfix">
                                <div class="col-lg-offset-2 col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                    <label for="intinerary">Role <b style="color: red">*</b></label>
                                </div>
                                <div class="col-lg-6 col-md-10 col-sm-10 col-xs-10">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select class="form-control" name="role_id" id="role_id">
                                                <option value="" selected="">Pilih</option>
                                                @foreach ($role as $e)
                                                    <option value="{{ $e->role_id }}">{{ $e->role_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>  

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
                                            <input type="text" name="co_name" id="co_name" class="form-control" value="{{old('co_name')}}"   placeholder="Company Name">
                                        </div>
                                        @if($errors->has('co_name'))
                                            <small style="color: #ed5565">{{ $errors->first('co_name')}}</small>
                                        @endif
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
                                            <input type="number" name="co_phone" id="co_phone" class="form-control" value="{{old('co_phone')}}"   style="text-align: : right;"   placeholder="Company Phone">
                                        </div>
                                        @if($errors->has('co_phone'))
                                            <small style="color: #ed5565">{{ $errors->first('co_phone')}}</small>
                                        @endif
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
                                            <input type="text" name="co_email" id="co_email" class="form-control" value="{{old('co_email')}}"   placeholder="Company Email">
                                        </div>
                                        @if($errors->has('co_email'))
                                            <small style="color: #ed5565">{{ $errors->first('co_email')}}</small>
                                        @endif
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
                                            <textarea name="co_address" id="co_address" class="form-control" value="{{old('co_address')}}"  placeholder="Company Address"></textarea>
                                        </div>
                                        @if($errors->has('co_address'))
                                            <small style="color: #ed5565">{{ $errors->first('co_address')}}</small>
                                        @endif
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
                                            <div id="drophere">
                                                <img class="image_drop img-responsive" 
                                                   src="{{ asset('/assets/images/NoImage.png') }}" 
                                                 width="400px" height="300px" name="image-drop">
                                            </div>
                                            <br>
                                            <div class="file-upload col-lg-6 col-md-8 col-sm-12 col-xs-12 form-control-label" style="padding-left: 0px;">
                                                <div class="file-select">
                                                    <div class="file-select-button fileName" >Image</div>
                                                        <div class="file-select-name noFile">
                                                            
                                                                Image
                                                            
                                                        </div> 
                                                    <div id="drop_name">
                                                        <input type="file" class="chooseFile" name="image"  
                                                            
                                                               src="{{ asset('/assets/images/NoImage.png') }}" 
                                                            
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @if($errors->has('image'))
                                            <small style="color: #ed5565">{{ $errors->first('image')}}</small>
                                        @endif
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
                                            <input type="text" name="mg_name" id="mg_name" class="form-control" value="{{old('mg_name')}}" placeholder="Manager Name">
                                        </div>
                                        @if($errors->has('co_phone'))
                                            <small style="color: #ed5565">{{ $errors->first('co_phone')}}</small>
                                        @endif
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
                                            <input type="number" name="mg_phone" id="mg_phone" class="form-control" style="text-align: : right;" value="{{old('mg_phone')}}" placeholder="Manager Phone">
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
                                            <input type="text" name="mg_email" id="mg_email" class="form-control" value="{{old('mg_email')}}" placeholder="Manager Email">
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
                                            <input type="text" name="name" id="name" value="{{old('name')}}" class="form-control" placeholder="PIC Name">
                                        </div>
                                        @if($errors->has('name'))
                                            <small style="color: #ed5565">{{ $errors->first('name')}}</small>
                                        @endif
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
                                            <input type="number" name="phone" id="phone" value="{{old('phone')}}" class="form-control" style="text-align: : right;" placeholder="PIC Phone">
                                        </div>
                                        @if($errors->has('phone'))
                                            <small style="color: #ed5565">{{ $errors->first('phone')}}</small>
                                        @endif
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
                                            <input type="text" name="email" id="email" value="{{old('email')}}" class="form-control"  placeholder="PIC Email">
                                        </div>
                                        @if($errors->has('email'))
                                            <small style="color: #ed5565">{{ $errors->first('email')}}</small>
                                        @endif
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
                                            <textarea name="address" id="address" value="{{old('address')}}" class="form-control" placeholder="PIC Address"></textarea>
                                        </div>
                                        @if($errors->has('address'))
                                            <small style="color: #ed5565">{{ $errors->first('address')}}</small>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-offset-2 col-lg-8 col-md-12 col-sm-12 col-xs-12 form-control-label">
                                    <h3 class="font-bold col-red"><i class="fa fa-home"></i> Log in Data</h3>
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
                                    <label for="intinerary">Username <b style="color: red">*</b></label>
                                </div>
                                <div class="col-lg-6 col-md-10 col-sm-10 col-xs-10">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="username" id="username" class="form-control" value="{{old('username')}}"  placeholder="Username">
                                        </div>
                                        @if($errors->has('username'))
                                            <small style="color: #ed5565">{{ $errors->first('username')}}</small>
                                        @endif
                                    </div>
                                </div>
                            </div>  

                            <div class="row clearfix">
                                <div class="col-lg-offset-2 col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                    <label for="intinerary">Password <b style="color: red">*</b></label>
                                </div>
                                <div class="col-lg-6 col-md-10 col-sm-10 col-xs-10">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="password" name="password" id="password" class="form-control"  placeholder="Password">
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

        $('#role_id').change(function(){
            if ($('#role_id').val() == '1' || $('#role_id').val() == '2' || $('#role_id').val() == '3' ) {
                $('#co_name').val('{{ Auth::user()->co_name }}');
                $('#co_phone').val('{{ Auth::user()->co_phone }}');
                $('#co_email').val('{{ Auth::user()->co_email }}');
                $('#co_address').val('{{ Auth::user()->co_address }}');
                $('#mg_name').val('{{ Auth::user()->mg_name }}');
                $('#mg_email').val('{{ Auth::user()->mg_email }}');
                $('#mg_phone').val('{{ Auth::user()->mg_phone }}');


                $('#drophere').html("<img class='image_drop img-responsive' src='{{ asset('storage/app/agent/agent-'.Auth::user()->image) }}' width='400px' height='300px' name='image-drop'>");
                $('.noFile').html('{{ Auth::user()->image }}');
            }
        })
        
            

    

</script>
@endsection

    

  
