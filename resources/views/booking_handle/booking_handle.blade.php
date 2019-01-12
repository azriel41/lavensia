@extends('main')
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
@endsection

<script>
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
  
