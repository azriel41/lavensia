@extends('main')
    <style type="text/css">
        .error{
                border-bottom: 1px solid red !important;
        }
    </style>
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
                        <form id="save_data" method="post" enctype="multipart/form-data"  accept-charset="utf-8" >
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
                                            <input type="text" name="co_name" id="co_name" class="form-control wajib" @if (Auth::user()->role_id == 4 or Auth::user()->role_id == 5) readonly=""  @endif  value="{{ $data->co_name }}" placeholder="Company Name">
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
                                            <input type="text" name="co_phone" id="co_phone" class="form-control wajib" @if (Auth::user()->role_id == 4 or Auth::user()->role_id == 5) readonly=""  @endif  value="{{ $data->co_phone }}" style="text-align: : right;"   placeholder="Company Phone">
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
                                            <input type="text" name="co_email" id="co_email" class="form-control wajib"  @if (Auth::user()->role_id == 4 or Auth::user()->role_id == 5) readonly=""  @endif    value="{{ $data->co_email }}" placeholder="Company Email">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-offset-2 col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                    <label for="intinerary">City</label>
                                </div>
                                <div class="col-lg-6 col-md-10 col-sm-10 col-xs-10">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select class="form-control city option" name="city" required="" data-live-search="true">
                                                <option value="">Select City</option>
                                                @foreach ($city as $c)
                                                    <option @if ($data->city == $c->id)
                                                        selected="" 
                                                    @endif value="{{ $c->id }}">{{ $c->name }}</option>
                                                @endforeach      
                                            </select>
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
                                            <textarea name="co_address" id="co_address" class="form-control wajib" placeholder="Company Address" @if (Auth::user()->role_id == 4 or Auth::user()->role_id == 5) readonly=""  @endif  >{{ $data->co_address }}</textarea>
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
                                                @if ($data->image == null )
                                                   src="{{ asset('/assets/images/NoImage.png') }}" 
                                                @else 
                                                   src="{{ asset('storage/app/agent/agent-'.$data->image) }}"
                                                @endif width="400px" height="300px" name="image-drop">
                                            </div>
                                            <br>
                                            <div class="file-upload col-lg-6 col-md-8 col-sm-12 col-xs-12 form-control-label" style="padding-left: 0px;">
                                                <div class="file-select">
                                                    <div class="file-select-button fileName" >Image</div>
                                                        <div class="file-select-name noFile">
                                                            @if ($data->image != null)
                                                                {{ $data->image }}
                                                            @else
                                                                Company Image
                                                            @endif 
                                                        </div> 
                                                    <input type="file" class="chooseFile" @if (Auth::user()->role_id == 4 or Auth::user()->role_id == 5) disabled=""  @endif   name="image"  
                                                        @if ($data->image == null )
                                                           src="{{ asset('/assets/images/NoImage.png') }}" 
                                                        @else 
                                                           src="{{ asset('storage/app/agent/agent-'.$data->image) }}"
                                                        @endif
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
                                            <input type="text" name="mg_name" id="mg_name" class="form-control wajib"  value="{{$data->mg_name}}" placeholder="Manager Name">
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
                                            <input type="text" name="mg_phone" id="mg_phone" class="form-control wajib" style="text-ign: : right;"  value="{{$data->mg_phone}}" readonly="" placeholder="Manager Phone">
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
                                            <input type="text" name="mg_email" id="mg_email" class="form-control wajib" readonly=""  value="{{$data->mg_email}}" placeholder="Manager Email">
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
                                            <input type="text" name="name" id="name"  value="{{$data->name}}" class="form-control wajib" placeholder="PIC Name">
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
                                            <input type="text" name="phone" id="phone"  value="{{$data->phone}}" class="form-control wajib" style="text-align: : right;" placeholder="PIC Phone">
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
                                            <input type="text" name="email" id="email"  value="{{$data->email}}" value="{{old('email')}}" class="form-control wajib"  placeholder="PIC Email">
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
                                            <textarea name="address" id="address"  class="form-control wajib" placeholder="PIC Address">{{$data->address}}</textarea>
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
                                            <input type="text" name="username" autocomplete="username" value="{{$data->username}}" id="username" class="form-control wajib" value="{{old('username')}}"  placeholder="Username">
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
                                            <input type="password" name="password" id="password" autocomplete="new-password"  class="form-control wajib"  placeholder="Password">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row clearfix">
                                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 form-control-label">
                                    <button type="button" class="btn bg-blue waves-effect" onclick="simpan()" id="save"><i class="fa fa-save"></i> Submit</button>
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

    $(document).on('focus','.form-line',function(){
        $(this).removeClass('error');
    })

    function simpan() {
        var temp = 0;
        $('.wajib').each(function(){
            if ($(this).val() == '') {
                console.log($(this));
                $(this).parents('.form-line').addClass('error');
                temp+=1;
            }
        });

        if (temp != 0) {
            iziToast.error({
                icon: 'fas fa-times-circle',
                title: 'warning!',
                message: 'All field must be filled',
            });
            return false;
        }

        var form  = $('#save_data');
        var formdata = false;

        if (window.FormData){
            formdata = new FormData(form[0]);
            formdata.append('id','{{ $data->id }}');
        }
        console.log(formdata);

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            data : formdata ? formdata : form.serialize(),
            url  : ('{{ route('master_agent_update') }}'),
            type : 'POST',
            dataType:'json',
            processData: false,
            contentType: false,
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

    

  
