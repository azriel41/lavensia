@extends('main')

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
                            <ul class="header-dropdown">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="{{ route('edit_profile') }}">Edit</a></li>
                                        {{-- <li><a href="javascript:void(0);">Another action</a></li> --}}
                                        {{-- <li><a href="javascript:void(0);">Something else here</a></li> --}}
                                    </ul>
                                </li>
                            </ul>
                        </div>

                    <div class="body">
                        <form id="save_data" method="get" accept-charset="utf-8" >
                            <div class="row clearfix">
                                <div class="col-lg-offset-2 col-lg-3 col-md-3 col-sm-12 col-xs-12 form-control-label">
                                    <div >
                                        <img class="image_drop img-responsive" 
                                        @if ( auth::user()->image == null )
                                           src="{{ asset('/assets/images/NoImage.png') }}" 
                                        @else 
                                           src="{{ asset('storage/app/agent/agent-'.auth::user()->id.'.jpg') }}?'{{ time() }}'"
                                        @endif width="400px" height="300px" >
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <h4><b>Company Profile</b></h4>
                                        <div class="table-responsive">
                                            <table width="100%" class="table table-striped">
                                                <tr>
                                                    <td class="table_right">Company Name</td>
                                                    <td class="table_left">{{ auth::user()->co_name }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="table_right">Company Phone</td>
                                                    <td class="table_left">{{ auth::user()->co_phone }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="table_right">Company Address</td>
                                                    <td class="table_left">{{ auth::user()->co_address }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="table_right">Company Email</td>
                                                    <td class="table_left">{{ auth::user()->co_email }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="table_right">Manager Name</td>
                                                    <td class="table_left">{{ auth::user()->mg_name }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="table_right">Manager Phone</td>
                                                    <td class="table_left">{{ auth::user()->mg_phone }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="table_right">Manager Email</td>
                                                    <td class="table_left">{{ auth::user()->mg_email }}</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-offset-2 col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <h4><b>Contact</b></h4>
                                        <div class="table-responsive">
                                            <table width="100%" class="table table-striped">
                                                <tr>
                                                    <td class="table_right">Name PIC</td>
                                                    <td class="table_left">{{ auth::user()->name }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="table_right">Phone PIC</td>
                                                    <td class="table_left">{{ auth::user()->phone }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="table_right">Email PIC</td>
                                                    <td class="table_left">{{ auth::user()->email }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="table_right">ROLE</td>
                                                    @if (auth::user()->role_id == 1)
                                                        <td class="table_left">Master Admim</td>
                                                    @elseif(auth::user()->role_id == 2)
                                                        <td class="table_left">Super Admin</td>
                                                    @elseif(auth::user()->role_id == 3)
                                                        <td class="table_left">Admin</td>
                                                    @elseif(auth::user()->role_id == 4)
                                                        <td class="table_left">Agent</td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    <td class="table_right">Address PIC</td>
                                                    <td class="table_left">{{ auth::user()->address }}</td>
                                                </tr>
                                            </table>
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

<script>
    



    function save() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            data : $('#save_data').serialize(),
            url  : ('{{ route('master_additional_save') }}'),
            type : 'POST',
            success: function (data) {
                if (data.status == 'sukses') {
                    iziToast.success({
                        icon: 'fa fa-user',
                        title: 'Success!',
                        message: 'Data Saved!',
                    });
                    window.location=('{{ route('master_additional') }}');
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
  
