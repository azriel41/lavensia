@extends('main')
@include('layouts._sidebar')
    

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- CPU Usage -->
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
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
                                           <th class="center-al">Group Name</th>
                                           <th class="center-al">Status</th>
                                           <th class="center-al">Book by</th>
                                           <th class="center-al">Procces By</th>
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
          url:'{{ route('datatable_booking_handle') }}',
        },
        columns: [
            {data: 'DT_Row_Index', name: 'DT_Row_Index'},
            {data: 'db_id',        name: 'db_id'},
            {data: 'created_at',   name: 'created_at'},
            {data: 'db_name',      name: 'db_name'},
            {data: 'created_at',   name: 'created_at'},
            {data: 'db_id',      name: 'db_id'},
            {data: 'db_status',    name: 'db_status'},
            {data: 'created_by',   name: 'created_by'},
            {data: 'db_handle_by', name: 'db_handle_by'},
            {data: 'aksi',         name: 'aksi'},
        ]
    });

}
</script>
  
