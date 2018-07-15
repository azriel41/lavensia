@extends('main')
@include('layouts._sidebar')
    
    @section('content')
        @include('layouts.task')
        <div class="header">
            <ol class="breadcrumb breadcrumb-bg-pink">
                <li><a href="javascript:void(0);"><i class="material-icons">widgets</i> Master</a></li>
                <li><i class="material-icons"></i>Master Additional</li>
                <li class="active"><i class="material-icons"></i>Create Additional</li>
            </ol>
        </div>
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header bg-light-blue">
                            <h2>
                                Create Additional <small></small>
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
                            {{-- Hiddem --}}
                            <input type="hidden" name="ad_id" value="{{ $data->ma_id }}">
                            {{--  --}}
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                    <label for="intinerary">Name</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-10 col-xs-10">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="ad_name" id="ad_name"  value="{{ $data->ma_name }}" class="form-control" placeholder="Name">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                    <label for="intinerary">Price</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-10 col-xs-10">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="ad_price" id="ad_price"  value="{{ number_format($data->ma_price,0,'','.') }}" class="form-control maskMoney" style="text-align: : right;"  placeholder="Price">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                    <label for="intinerary">Desc</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-10 col-xs-10">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="ad_desc" id="ad_desc"  class="form-control" placeholder="Description">{{ $data->ma_desc }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 form-control-label">
                                    <button type="button" class="btn bg-blue waves-effect" onclick="update()"><i class="fa fa-save"></i> Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection

<script>
    

    function update() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            data : $('#save_data').serialize(),
            url  : ('{{ route('master_additional_update') }}'),
            type : 'POST',
            success: function (data) {
                if (data.status == 'sukses') {
                    iziToast.success({
                        icon: 'fa fa-user',
                        title: 'Success!',
                        message: 'Data Updated!',
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
  
