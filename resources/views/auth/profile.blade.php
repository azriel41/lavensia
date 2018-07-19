@extends('main')
@include('layouts._sidebar')
<style type="text/css">
    .table_right{
        text-align: right;
        border-right: 1px solid #03a9f4;
    }
    .table_left{
        text-align: left;
        width: 70%
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
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                    <div class="body">
                        <form id="save_data" method="get" accept-charset="utf-8" >
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                    <label for="intinerary">Name</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-10 col-xs-10">
                                    <div class="form-group">
                                        <table width="100%" class="table table-striped">
                                            <tr>
                                                <td>ssss</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-8 col-md-8 col-sm-10 col-xs-10">
                                    <div class="form-group">
                                        <h4><b>Contact</b></h4>
                                        <table width="100%" class="table table-striped">
                                            <tr>
                                                <td class="table_right">Name</td>
                                                <td class="table_left">{{ auth::user()->name }}</td>
                                            </tr>
                                            <tr>
                                                <td class="table_right">Name</td>
                                                <td class="table_left">{{ auth::user()->name }}</td>
                                            </tr>
                                            <tr>
                                                <td class="table_right">Name</td>
                                                <td class="table_left">{{ auth::user()->name }}</td>
                                            </tr>
                                            <tr>
                                                <td class="table_right">Name</td>
                                                <td class="table_left">{{ auth::user()->name }}</td>
                                            </tr>
                                            <tr>
                                                <td class="table_right">Name</td>
                                                <td class="table_left">{{ auth::user()->name }}</td>
                                            </tr>
                                        </table>
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
  
