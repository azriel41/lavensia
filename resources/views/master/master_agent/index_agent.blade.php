@extends('main')
@include('layouts._sidebar')
<style type="text/css" media="screen">
    .inline-block{
        display: inline-block;
    }
</style>

@section('content')
<div class="container-fluid">
    <div class="block-header">
        <h2>DASHBOARD</h2>
    </div>
    @include('layouts.task')
    <div class="header">
        <ol class="breadcrumb breadcrumb-bg-pink">
            <li><a href="javascript:void(0);"><i class="material-icons">widgets</i> Master</a></li>
            <li class="active"><i class="material-icons"></i>Master Agent</li>
        </ol>
    </div>
    <div class="row clearfix ">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="header bg-cyan">
                    <h4 class="inline-block">
                        Master Agent
                    </h4>
                    <div class="pull-right">
                        <a href="{{ route('master_agent_agent_create') }}">
                            <button type="button" class="btn bg-blue waves-effect"><i class="material-icons">add</i> Add Data</button>
                        </a>
                    </div>
                </div>
                <div class="body table-responsive">
                    <table class="table table-bordered intinerary" style="width: 100%">
                        <thead>
                            <tr>
                                <th class="center">No</th>
                                <th class="center">Username</th>
                                <th class="center">Name</th>
                                <th class="center">Phone</th>
                                <th class="center">Email</th>
                                <th class="center">Address</th>
                                <th class="center">Com Name</th>
                                <th class="center">Man Name</th>
                                <th class="center">Status</th>
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
</div>
@endsection
@section('extra_scripts')
<script>
window.onload = function(){
    $('.intinerary').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
          url:'{{ route('datatable_agent') }}',
        },
        columnDefs: [
                {
                    targets: 0 ,
                    className: 'center'
                },
                {
                    targets: 5 ,
                    className: 'center'
                },
                {
                    targets: 6 ,
                    className: 'center'
                },
            ],
        columns: [
            {data: 'DT_Row_Index', name: 'DT_Row_Index'},
            {data: 'username', name: 'username'},
            {data: 'name', name: 'name'},
            {data: 'phone', name: 'phone'},
            {data: 'email', name: 'email'},
            {data: 'address', name: 'address'},
            {data: 'co_name', name: 'co_name'},
            {data: 'mg_name', name: 'mg_name'},
            {data: 'status', name: 'status'},
            {data: 'aksi', name: 'aksi'},
        ]
    });

}

function approve(mi_id) {
    var id = mi_id;
    iziToast.show({
            overlay: true,
            close: false,
            timeout: 20000, 
            color: 'dark',
            icon: 'fa fa-question-circle',
            title: 'Approve Agent!',
            message: 'Apakah Anda Yakin ?!',
            position: 'center',
            progressBarColor: 'rgb(0, 255, 184)',
            buttons: [
            [
                '<button style="background-color:#44d7c9;">Approve</button>',
                function (instance, toast) {

                  $.ajaxSetup({
                      headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        type: "get",
                        url:'{{ route('master_agent_approve') }}',
                        data: {id},
                        dataType:'json',
                      success:function(data){
                        if (data.status == '1') {
                            iziToast.success({
                                message: 'Agent Terapprove!',
                                position:'topRight',
                                icon:'fa fa-delete'
                            });
                            var table = $('.intinerary').DataTable();
                            table.ajax.reload();
                        }else if (data.status == '0') {
                            iziToast.warning({
                                position:'topRight',
                                message:data.message,
                                iconText:'fa fa-warning'
                            });

                        }
                      },error:function(){
                        iziToast.warning({
                            message: 'Terjadi Kesalahan!',
                            position:'topRight',
                            iconText:'fa fa-warning'
                        });
                      }
                    });
                    instance.hide({
                        transitionOut: 'fadeOutUp'
                    }, toast);
                }
            ],
            [
                '<button class="bg-red">Cancel</button>',
                function (instance, toast) {
                  instance.hide({
                    transitionOut: 'fadeOutUp'
                  }, toast);
                }
              ]
            ]
        });
}

</script>
@endsection
  
