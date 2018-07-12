@extends('main')

<style type="text/css">
   
</style>
<div class="block-header">
    <h2>
        JQUERY DATATABLES
        <small>Taken from <a href="https://datatables.net/" target="_blank">datatables.net</a></small>
    </h2>
</div>
<!-- Basic Examples -->
@section('content')
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="body">
                <table class="table table-responsive table-striped table-hover dataTable">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($data as $index => $d)
                           <tr>
                               <td>{{ $index+1 }}</td>
                               <td>{{ $d->name }}</td>
                               <td>{{ $d->email }}</td>
                           </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('extra_scripts')

@endsection