@extends('main')
    @section('content')
        @include('layouts.task')
        <div class="header">
            <ol class="breadcrumb breadcrumb-bg-pink">
                <li><a href="javascript:void(0);"><i class="material-icons">widgets</i> Master</a></li>
                <li><i class="material-icons"></i>Master Category</li>
                <li class="active"><i class="material-icons"></i>Create Destination</li>
            </ol>
        </div>
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header bg-light-blue">
                            <h2>
                                Create Destination <small></small>
                            </h2>
                        </div>

                    <div class="body">
                        <form id="save_data" method="get" accept-charset="utf-8" >
                            <div class="row clearfix">
                                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                    <label for="intinerary">No Rek</label>
                                </div>
                                <div class="col-lg-10 col-md-8 col-sm-10 col-xs-10">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="mc_rek" id="mc_rek" value="{{ $contact[0]->mc_rek }}" class="form-control" placeholder="Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                    <label for="intinerary">Name</label>
                                </div>
                                <div class="col-lg-10 col-md-8 col-sm-10 col-xs-10">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="mc_name" id="mc_name" value="{{ $contact[0]->mc_name }}" class="form-control" placeholder="Name">
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                    <label for="intinerary">Isi</label>
                                </div>
                                <div class="col-lg-10 col-md-8 col-sm-10 col-xs-10">
                                    <div class="form-group">
                                        <div class="form-line">
                                                <textarea class="form-control" id="mytextarea" name="mc_isi">{!! $contact[0]->mc_isi !!} </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 form-control-label">
                                    <button type="button" class="btn bg-blue waves-effect" onclick="save()"><i class="fa fa-save"></i> Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
  <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>

<script>
 tinymce.init({
    selector: '#mytextarea',
    plugins: "link code",
        height: 300,
  });    

    function save() {
        tinyMCE.triggerSave();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        iziToast.show({
            overlay: true,
            close: false,
            timeout: 20000, 
            color: 'dark',
            icon: 'fas fa-question-circle',
            title: 'Important!',
            message: 'Apakah Anda Yakin ?!',
            position: 'center',
            progressBarColor: 'rgb(0, 255, 184)',
            buttons: [
              [
                '<button style="background-color:red;">Save</button>',
                function (instance, toast) {

                 $.ajax({
                    data : $('#save_data').serialize(),
                    url  : ('{{ route('master_contact_update') }}'),
                    type : 'get',
                    success: function (data) {
                        if (data.status == 'sukses') {
                            iziToast.success({
                                icon: 'fa fa-user',
                                title: 'Success!',
                                message: 'Data Saved!',
                            });
                            window.location=('{{ route('master_contact_isi') }}');
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
  
