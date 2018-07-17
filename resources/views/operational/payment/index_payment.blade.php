@extends('main')
@include('layouts._sidebar')
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
                <li class="active"><i class="material-icons"></i>Operational Payment</li>
            </ol>
        </div>
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header bg-blue-grey">
                        <h4 class="inline-block">
                            Operational Payment
                        </h4>
                        <div class="pull-right">
                            <a href="{{ route('operational_payment_create_admin') }}">
                                <button type="button" class="btn bg-blue btn-circle waves-effect waves-circle waves-float">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </a>
                            <a href="{{ route('operational_payment_create_agent') }}">
                                <button type="button" class="btn bg-purple btn-circle waves-effect waves-circle waves-float">
                                    <i class="fa fa-plus"></i>
                                </button>
                                {{-- <button type="button" class="btn bg-blue waves-effect"><i class="fa fa-plus"></i>&nbsp;Add Data</button> --}}
                            </a>
                        </div>
                    </div>
                    <div class="body">
                        <table class="table table-bordered dataTable">
                            <thead>
                                <tr>
                                    <th class="center">No</th>
                                    <th class="center">payment Name</th>
                                    <th class="center">Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection

<script>
    
    function hapus(ar) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            data : {id:$(ar).data('id')},
            url  : ('{{ route('operational_payment_delete') }}'),
            type : 'POST',
            success: function (data) {
                if (data.status == 'sukses') {
                    iziToast.success({
                        icon: 'fa fa-user',
                        title: 'Success!',
                        message: 'Data deleted!',
                    });
                    location.reload();
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
  
