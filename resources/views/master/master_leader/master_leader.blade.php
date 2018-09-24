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
            <li class="active"><i class="material-icons"></i>Master Tour Leader</li>
        </ol>
    </div>
    <div class="row clearfix ">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="header bg-cyan">
                    <h4 class="inline-block">
                        Master Tour Leader
                    </h4>
                    <div class="pull-right">
                        <a href="{{ url('/master/master_intinerary/create_leader') }}">
                            <button type="button" class="btn bg-blue waves-effect"><i class="material-icons">add</i> Add Data</button>
                        </a>
                    </div>
                </div>
                <div class="body table-responsive">
                    <table class="table table-bordered intinerary" style="width: 100%">
                        <thead>
                            <tr>
                                <th class="center">No</th>
                                <th class="center">Name</th>
                                <th class="center">Address</th>
                                <th class="center">Phone</th>
                                <th class="center">Passport</th>
                                <th class="center">Issued</th>
                                <th class="center">Edit</th>
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
          url:'{{ url('/master/master_intinerary/datatable_leader') }}',
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
            {data: 'tl_name', name: 'tl_name'},
            {data: 'tl_alamat', name: 'tl_alamat'},
            {data: 'tl_phone', name: 'tl_phone'},
            {data: 'tl_passport', name: 'tl_passport'},
            {data: 'tl_issuing', name: 'tl_issuing'},
            {data: 'aksi', name: 'aksi'},
        ]
    });

}

function deleting() {
   
}

function editing(id) {
    location.href = '{{ url('/master/master_intinerary/edit_leader') }}?id='+id;
}


// 
</script>
@endsection
  
