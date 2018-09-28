@extends('main')
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
                <li class="active"><i class="material-icons"></i>Master Destination</li>
            </ol>
        </div>
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header bg-blue-grey">
                        <h4 class="inline-block">
                            Master Destination
                        </h4>
                        <div class="pull-right">
                            <a href="{{ route('master_company_create') }}">
                                <button type="button" class="btn bg-blue waves-effect"><i class="fa fa-plus"></i>&nbsp;Add Data</button>
                            </a>
                        </div>
                    </div>
                    <div class="body">
                        <table class="table table-bordered dataTable">
                            <thead>
                                <tr>
                                    <th class="center">No</th>
                                    <th class="center">Co Name</th>
                                    <th class="center">Co address</th>
                                    <th class="center">Co phone</th>
                                    <th class="center">Co Email</th>
                                    <th class="center">Mg Name</th>
                                    <th class="center">Mg Phone</th>
                                    <th class="center">Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $index => $e)
                                <tr>
                                    <td class="center">{{ $index+1 }}</td>
                                    <td>{{ $e->co_name }}</td>
                                    <td>{{ $e->co_adress }}</td>
                                    <td>{{ $e->co_phone }}</td>
                                    <td>{{ $e->co_email }}</td>
                                    <td>{{ $e->mg_name }}</td>
                                    <td>{{ $e->mg_phone }}</td>
                                    <td class="center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <i class="fa fa-cog"></i>
                                                Manage <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="master_company/{{ $e->co_id }}/edit"  class=" waves-effect waves-block"><i class="fa fa-edit"></i> Edit</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a onclick="hapus(this)" data-id="{{ $e->co_id }}" class=" waves-effect waves-block"><i class="fa fa-trash"></i> Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
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
            url  : ('{{ route('master_company_delete') }}'),
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
  
