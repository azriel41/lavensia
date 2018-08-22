@extends('main')
@include('layouts._sidebar')
    

    <section class="content">
        <div class="container-fluid">
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
                                           <th class="center-al">Detail</th>
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
            
            <!-- #END# CPU Usage -->
        </div>
    </section>

<script type="text/javascript">
window.onload = function(){
    $('.dt_server').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
          url:'{{ route('datatable_booking_print') }}',
        },
        columns: [
            {data: 'DT_Row_Index', name: 'DT_Row_Index'},
            {data: 'db_kode_transaksi',        name: 'db_kode_transaksi'},
            {data: 'created_at',   name: 'created_at'},
            {data: 'db_name',      name: 'db_name'},
            {data: 'created_at',   name: 'created_at'},
            
            {data: 'db_status',    name: 'db_status'},
            {data: 'aksi',         name: 'aksi'},
        ]
    });
}

    


</script>
  
