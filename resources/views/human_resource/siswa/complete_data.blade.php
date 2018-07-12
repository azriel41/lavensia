@extends('main')


@section('content')
            <div class="block-header">
                <h2>
                    PROFILE
                </h2>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>PERSONAL DATA</h2>
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
                            
                            <form id="form_data" method="POST">
                                <div class="masked-input">

                                    {{-- HIDDEN --}}

                                        <input type="hidden" name="id" value="{{ auth::user()->id }}">

                                    {{--  --}}
                                    <div class="col-md-6">
                                        <b>Name</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="hr_name" value="{{ $data->name }}" placeholder="Name" required="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <b>Username</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person_pin</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control readonly" value="{{ $data->username }}" name="hr_username" placeholder="Username" required="" readonly="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <b>Birthday</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">date_range</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control datenormal" name="hr_birthday" 
                                                @if ($data->birthday != null)
                                                    value="{{ date('dd-mm-yyyy',strtotime($data->birthday)) }}"
                                                @else
                                                    value="" 
                                                @endif placeholder="Date" required="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <b>Mobile Phone Number</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">phone_iphone</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="hr_phone" value="{{ $data->phone }}" placeholder="Phone" required="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <b>E-mail</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">email</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="email" class="form-control readonly" name="hr_email" value="{{ $data->email }}" placeholder="E-mail" required="" readonly="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <b>Address</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">place</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="hr_address" value="{{ $data->address }}" placeholder="Address" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                       <label for="">Studies</label>
                                        <div class="form-group">
                                            <input type="radio" name="hr_studies" value="english" id="english" class="with-gap">
                                            <label for="english">English</label>

                                            <input type="radio" name="hr_studies" value="mathemathic" id="mathemathic" class="with-gap">
                                            <label for="mathemathic" class="m-l-20">Mathemathic</label>

                                            <input type="radio" name="hr_studies" value="bahasa" id="bahasa" class="with-gap">
                                            <label for="bahasa" class="m-l-20">Bahasa</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="">Educational background</label>
                                        <div class="form-group">
                                            <input type="radio" name="hr_educ" value="sd" id="sd" class="with-gap">
                                            <label for="sd">SD</label>

                                            <input type="radio" name="hr_educ" value="smp" id="smp" class="with-gap">
                                            <label for="smp" class="m-l-20">SMP</label>

                                            <input type="radio" name="hr_educ" value="sma" id="sma" class="with-gap">
                                            <label for="sma" class="m-l-20">SMA/SMK</label>

                                            <input type="radio" name="hr_educ" value="college" id="college" class="with-gap">
                                            <label for="college" class="m-l-20">COLLEGE</label>
                                        </div>
                                    </div>

                                    <button class="btn btn-primary waves-effect save" type="button" onclick="save()">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
                
@endsection


@section('extra_scripts')
<script type="text/javascript">
        
    $(document).ready(function() {
        if ('{{ $data->studies }}' != {{ $data->studies }}) {
            var value = '{{ $data->studies }}';
            $("input[name=hr_studies][value=" + value + "]").attr('checked', 'checked');
        }
    });
    
        
            // $('radio[name="hr_educ"]').val('{{ $data->education }}');
    

    function save() {
        $.ajax({
            data:$('#form_data').serialize(),
            url:("{{ route('save_siswa') }}"),
            success:function(response){
                if (response.status == 'sukses') {
                    iziToast.success({
                        icon: 'fas fa-check-circle',
                        title: 'Success!',
                        message: 'Date updated!',
                    });
                }
            },
            error:function(){
                iziToast.error({
                    icon: 'fas fa-times-circle',
                    title: 'Error!',
                    message: 'Something Wrong,Call CS',
                });
            }
        })
    }

</script>
@endsection