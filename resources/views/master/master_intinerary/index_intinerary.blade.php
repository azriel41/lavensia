@extends('main')
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
            <li class="active"><i class="material-icons"></i>Master Intinerary</li>
        </ol>
    </div>
    <div class="row clearfix ">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="header bg-cyan">
                    <h4 class="inline-block">
                        Master Intinerary
                    </h4>
                    <div class="pull-right">
                        <a href="{{ url('/master/master_intinerary/create') }}">
                            <button type="button" class="btn bg-blue waves-effect"><i class="material-icons">add</i> Add Data</button>
                        </a>
                    </div>
                </div>
                <div class="body table-responsive">
                    <table class="table table-bordered intinerary" style="width: 100%">
                        <thead>
                            <tr>
                                <th class="center">No</th>
                                <th class="center">Tour Code</th>
                                <th class="center">Group Name</th>
                                <th class="center">Flight By</th>
                                <th class="center">Destination</th>
                                <th class="center">Itinerary</th>
                                <th class="center">Detail</th>
                                <th class="center">Status</th>
                                <th class="center">Action</th>
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
@include('master.master_intinerary.modal_intinerary')
@endsection
@section('extra_scripts')
<script>
window.onload = function(){
    $('.intinerary').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
          url:'{{ route('datatable_intinerary') }}',
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
                {
                    targets: 7 ,
                    className: 'center'
                },
            ],
        columns: [
            {data: 'DT_Row_Index', name: 'DT_Row_Index'},
            {data: 'mi_nota', name: 'mi_nota'},
            {data: 'mi_name', name: 'mi_name'},
            {data: 'mi_by', name: 'mi_by'},
            {data: 'category', name: 'category'},
            {data: 'schedule', name: 'schedule'},
            {data: 'departure', name: 'departure'},
            {data: 'status', name: 'status'},
            {data: 'aksi', name: 'aksi'},
        ]
    });

}

function schedule(mc_id) {
    $.ajax({
        url:'{{ route('schedule') }}',
        data:{mc_id},
        success:function(data){
            $('.schedule_table').html(data);
            ganti_nama(mc_id);
        },
        error:function(){

        }
    })
}

function ganti_nama(mc_id) {
    $.ajax({
        url:'{{ route('ganti_nama') }}',
        data:{mc_id},
        dataType:'json',
        success:function(data){
            $('.departure').text('DETAIL '+data.data);
        },
        error:function(){
            
        }
    })
}

function departure(mc_id) {
    $.ajax({
        url:'{{ route('departure') }}',
        data:{mc_id},
        success:function(data){
            $('.departure_table').html(data);
            ganti_nama(mc_id);
        },
        error:function(){
            
        }
    })
}

function approve(id) {
    iziToast.show({
            overlay: true,
            close: false,
            timeout: 20000, 
            color: 'dark',
            icon: 'fa fa-question-circle',
            title: 'Approve Data!',
            message: 'Apakah Anda Yakin ?!',
            position: 'center',
            progressBarColor: 'rgb(0, 255, 184)',
            buttons: [
            [
                '<button class="bg-red">Approve</button>',
                function (instance, toast) {

                  $.ajaxSetup({
                      headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        type: "get",
                        url:'{{ route('approve_itinerary') }}',
                        data: {id},
                        dataType:'json',
                      success:function(data){
                        if (data.status == '1') {
                            iziToast.success({
                                message: data.message,
                                position:'topRight',
                                icon:'fa fa-success'
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
                '<button style="background-color:#44d7c9;">Cancel</button>',
                function (instance, toast) {
                  instance.hide({
                    transitionOut: 'fadeOutUp'
                  }, toast);
                }
              ]
            ]
    });
}

function deleting(mi_id) {
    var id = mi_id;
    iziToast.show({
            overlay: true,
            close: false,
            timeout: 20000, 
            color: 'dark',
            icon: 'fa fa-question-circle',
            title: 'Hapus Data!',
            message: 'Apakah Anda Yakin ?!',
            position: 'center',
            progressBarColor: 'rgb(0, 255, 184)',
            buttons: [
            [
                '<button class="bg-red">Delete</button>',
                function (instance, toast) {

                  $.ajaxSetup({
                      headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        type: "get",
                        url:'{{ route('delete_intinerary') }}',
                        data: {id},
                        dataType:'json',
                      success:function(data){
                        if (data.status == '1') {
                            iziToast.success({
                                message: 'Data Berhasil Dihapus!',
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
                '<button style="background-color:#44d7c9;">Cancel</button>',
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
  
