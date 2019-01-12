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
                    <li><a href="javascript:void(0);"><i class="material-icons">widgets</i> Operational</a></li>
                    <li><a href="javascript:void(0);">Book</a></li>
                    <li class="active"><i class="material-icons"></i>Detail Payment</li>
                </ol>
            </div>
            <!-- CPU Usage -->
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header bg-cyan">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>Payment History</h2>
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
                                           <th class="center-al">Date</th>
                                           <th class="center-al">Total</th>
                                           <th class="center-al">Handled By</th>
                                           <th class="center-al">Status</th>
                                           <th class="center-al">Action</th>
                                       </tr>
                                    </thead>
                                    <tbody align="center">
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
            </div>

    <div class="modal fade" id="modal_check" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-cyan">
                    <h3 class="modal-title" id="largeModalLabel">Check Transfer</h3>
                </div>
                <div class="modal-body append_check">
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning waves-effect" data-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
    </div>            <!-- #END# CPU Usage -->
        </div>

    </section>



        @endsection            
<script src="{{ asset ('assets/plugins/jquery/jquery-2.1.4.min.js') }}"></script>
<script type="text/javascript">
$(document).ready(function(){
    var id = '{{ $id }}';
    $('.dt_server').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
          url:'{{ route('datatable_booking_detail') }}',
          data:{id}
        },
        columnDefs: [
                {
                    targets: 3 ,
                    className: 'center'
                },
                {
                    targets: 0 ,
                    className: 'center'
                },
                {
                    targets: 3 ,
                    className: 'center'
                },
            ],
        columns: [
            {data: 'DT_Row_Index',      name: 'DT_Row_Index'},
            {data: 'created_at',        name: 'created_at'},
            {data: 'nominal',           name: 'nominal'},
            {data: 'handle_name',       name: 'handle_name'},
            {data: 'status',            name: 'status'},
            {data: 'aksi',              name: 'aksi'},
        ]
    });
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

    function approve(id) {
        iziToast.show({
            overlay: true,
            close: false,
            timeout: 20000, 
            color: 'dark',
            icon: 'fa fa-question-circle',
            title: 'Approve Pembayaran!',
            message: 'Apakah Anda Yakin ?!',
            position: 'center',
            progressBarColor: 'rgb(0, 255, 184)',
            buttons: [
            [
                '<button style="background-color:#44d7c9;">Approve</button>',
                function (instance, toast) {

                    $.ajax({
                        type: "get",
                        url:'{{ route('approve_payment') }}',
                        data: {id},
                        dataType:'json',
                      success:function(data){
                        if (data.status == '1') {
                            var table = $('.dt_server').DataTable()
                            table.ajax.reload();
                            iziToast.success({
                                icon: 'fas fa-check-circle',
                                position:'topRight',
                                message: 'Pembayaran Telah Di Approve!',
                            });

                            instance.hide({
                                transitionOut: 'fadeOutUp'
                            }, toast);
                        }else if (data.status == '0') {
                            iziToast.success({
                                icon: 'fa fa-save',
                                position:'topRight',
                                title: 'Error!',
                                message:data.message,
                            });
                            instance.hide({
                                transitionOut: 'fadeOutUp'
                            }, toast);
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
    

    function deleting(id) {
        iziToast.show({
            overlay: true,
            close: false,
            timeout: 20000, 
            color: 'dark',
            icon: 'fa fa-question-circle',
            title: 'Hapus Pembayaran!',
            message: 'Apakah Anda Yakin ?!',
            position: 'center',
            progressBarColor: 'rgb(0, 255, 184)',
            buttons: [
            [
                '<button style="background-color:#44d7c9;">Hapus</button>',
                function (instance, toast) {

                    $.ajax({
                        type: "get",
                        url:'{{ route('delete_payment') }}',
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
                             instance.hide({
                                transitionOut: 'fadeOutUp'
                            }, toast);
                        }else if (data.status == '0') {
                            iziToast.success({
                                icon: 'fa fa-save',
                                position:'topRight',
                                title: 'Error!',
                                message:data.message,
                            });
                            instance.hide({
                                transitionOut: 'fadeOutUp'
                            }, toast);
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
    
    function check(id) {
        $.ajax({
            type: "get",
            url:'{{ route('check_payment') }}',
            data: {id},
          success:function(data){

            $('.append_check').html(data);
            $('#modal_check').modal('show');
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


</script>
  
