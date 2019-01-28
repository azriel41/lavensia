@extends('main')
    
<style type="text/css">
    .gede{
        font-size: 12px !important;
    }
    td{
        vertical-align: middle!important;
    }
</style>
@section('content')
            @include('layouts.task')
            <div class="header">
                <ol class="breadcrumb breadcrumb-bg-pink">
                    <li><a href="javascript:void(0);"><i class="material-icons">widgets</i> Master</a></li>
                    <li class="active"><i class="material-icons"></i>Master Intinerary</li>
                </ol>
            </div>
            <!-- CPU Usage -->
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header bg-cyan">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>Booking List</h2>
                                </div>

                            </div>
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

                            <div class="responsive">
                                <table width="100%" class="table dt_server table-striped" align="center">
                                    <thead>
                                       <tr >
                                           <th class="center-al">No</th>
                                           <th class="center-al">Code Tour</th>
                                           <th class="center-al">Date</th>
                                           <th class="center-al">Party Name</th>
                                           <th class="center-al">Dep Date</th>
                                           {{-- <th class="center-al">Group Name</th> --}}
                                           <th class="center-al">Status</th>
                                           <th class="center-al">Book by</th>
                                           <th class="center-al">Procces By</th>
                                           <th class="center-al">Detail</th>
                                       </tr>
                                    </thead>
                                    <tbody align="center">
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
            <!-- #END# CPU Usage -->
        </div>
    </section>

<script src="{{ asset ('assets/plugins/jquery/jquery-2.1.4.min.js') }}"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.dt_server').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
          url:'{{ route('datatable_booking_all') }}',
        },
        columns: [
            {data: 'DT_Row_Index',      name: 'DT_Row_Index'},
            {data: 'code', name: 'code'},
            {data: 'created_at',        name: 'created_at'},
            {data: 'db_name',           name: 'db_name'},
            {data: 'deep_date',        name: 'deep_date'},
            {data: 'label',         name: 'label'},
            {data: 'book_by',           name: 'book_by'},
            {data: 'handle_name',       name: 'handle_name'},
            {data: 'aksi',              name: 'aksi'},
        ]
    });
    @if (Session::has('message')) 
        iziToast.warning({
            icon: 'fa fa-info',
            position:'topRight',
            title: 'Error!',
            message: 'You Not Authorized!',
        });
    @endif
})
    

    function handle(id) {
    iziToast.show({
            overlay: true,
            close: false,
            timeout: 20000, 
            color: 'dark',
            icon: 'fa fa-question-circle',
            title: 'Handle Booking!',
            message: 'Apakah Anda Yakin ?!',
            position: 'center',
            progressBarColor: 'rgb(0, 255, 184)',
            buttons: [
            [
                '<button style="background-color:#44d7c9;">Handle</button>',
                function (instance, toast) {

                    window.location ='{{ url('booking/booking_handling') }}'+'/'+id;
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

    function deleting(id) {
        iziToast.show({
            overlay: true,
            color: 'dark',
            icon: 'fa fa-question-circle',
            title: 'Hapus Booking!',
            message: 'Apakah Anda Yakin ?!',
            position: 'center',
            progressBarColor: 'rgb(0, 255, 184)',
            buttons: [
            [
                '<button style="background-color:#44d7c9;">Hapus</button>',
                function (instance, toast) {

                    $.ajax({
                        type: "get",
                        url:'{{ route('booking_all_delete') }}',
                        data: {id},
                        dataType:'json',
                      success:function(data){
                        if (data.status == '1') {
                            var table = $('.dt_server').DataTable()
                            table.ajax.reload();
                            iziToast.success({
                                icon: 'fas fa-check-circle',
                                message: 'Data Telah Dihapus!',
                            });
                            iziToast.hide({
                                transitionOut: 'fadeOutUp'
                            }, toast);
                        }else if (data.status == '0') {
                            iziToast.success({
                                icon: 'fa fa-save',
                                position:'topRight',
                                title: 'Error!',
                                message:data.message,
                            });
                        }
                      },error:function(){
                        iziToast.warning({
                            icon: 'fa fa-info',
                            position:'topRight',
                            title: 'Error!',
                            message: 'Terjadi Kesalahan!',
                        });
                      }
                    });
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
  
