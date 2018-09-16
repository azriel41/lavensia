@extends('main')
@include('layouts._sidebar')
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
                <li class="active"><i class="material-icons"></i>Master Additional</li>
            </ol>
        </div>
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header bg-blue-grey">
                        <h4 class="inline-block">
                            Master Additional
                        </h4>
                        <div class="pull-right">
                            <a href="{{ route('master_additional_create') }}">
                                <button type="button" class="btn bg-blue waves-effect"><i class="fa fa-plus"></i>&nbsp;Add Data</button>
                            </a>
                        </div>
                    </div>
                    <div class="body">
                        <table class="table table-bordered dataTable">
                            <thead>
                                <tr>
                                    <th class="center">No</th>
                                    <th class="center">Additional Name</th>
                                    <th class="center">Description</th>
                                    <th class="center">Price</th>
                                    <th class="center">Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $index => $e)
                                <tr>
                                    <td class="center">{{ $index+1 }}</td>
                                    <td>{{ $e->ma_name }}</td>
                                    <td>{{ $e->ma_desc }}</td>
                                    <td align="right">Rp. {{ number_format($e->ma_price,0,'','.') }},-</td>
                                    <td>
                                        <!-- Trigger the modal with a button -->
                                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal_{{ $index }}">{{ $e->ma_image }}</button>

                                        <!-- Modal -->
                                        <div id="myModal_{{ $index }}" class="modal fade" role="dialog">
                                          <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Gambar {{ $e->ma_image }}</h4>
                                              </div>
                                              <div class="modal-body">
                                                {{-- <p>Some text in the modal.</p> --}}
                                                <div >
                                                    <img class="image_drop img-responsive" 
                                                    @if ($e->ma_image == null )
                                                       src="{{ asset('/assets/images/NoImage.png') }}" 
                                                    @else 
                                                       src="{{ asset('storage/app/additional/additional-'.$e->ma_image) }}"
                                                    @endif width="400px" height="300px" name="image-drop">
                                                </div>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                              </div>
                                            </div>

                                          </div>
                                        </div>
                                    </td>
                                    <td class="center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <i class="fa fa-cog"></i>
                                                Manage <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="master_additional/{{ $e->ma_id }}/edit"  class=" waves-effect waves-block"><i class="fa fa-edit"></i> Edit</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a onclick="hapus(this)" data-id="{{ $e->ma_id }}" class=" waves-effect waves-block"><i class="fa fa-trash"></i> Delete</a></li>
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
            url  : ('{{ route('master_additional_delete') }}'),
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
  
