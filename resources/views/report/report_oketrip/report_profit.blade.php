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
                            <div style="min-height: 400px;" class="responsive">
                                  <div class="body">
                                      <div class="drop">
                                        <form id="save_data" action="{{ route('master_save_agent') }}" method="post" enctype="multipart/form-data"  accept-charset="utf-8" >
                                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                            {{-- company --}}
                                            <div class="row clearfix">
                                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 form-control-label">
                                                    <label for="intinerary">Date Start <b style="color: red">*</b></label>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-11 col-xs-11">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" name="min" class="form-control datenormal_month" placeholder="DD/MM/YYYY">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 form-control-label">
                                                    <label for="intinerary">Date End <b style="color: red">*</b></label>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-11 col-xs-11">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" name="max" class="form-control datenormal_month" placeholder="DD/MM/YYYY">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="row clearfix">
                                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 form-control-label">
                                                    <label for="intinerary">Booker</label>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-11 col-xs-11">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <select class="form-control" name="admin" id="admin">
                                                                <option value="" selected="">Pilih</option>
                                                                @foreach ($admin as $e)
                                                                    <option value="{{ $e->id }}">{{ $e->username }} - {{ $e->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  

                                            <div class="row clearfix">
                                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 form-control-label">
                                                    <button type="button" class="btn btn-primary cari"><i class="fa fa-search"></i> Search</button>
                                                </div>
                                               
                                            </div>   
                                        </form>
                                        <hr>
                                        <div class="drop_here">
                                            <div id="container" style="min-width: 100%; height: 400px; margin: 0 auto">
                                            </div>
                                        </div>
                                        </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- #END# CPU Usage -->
        </div>
    </section>

@section('extra_scripts')
<script type="text/javascript">
   
    Highcharts.chart('container', {
    title: {
        text: 'Total Pax Book'
    },
    xAxis: {
            categories: [
                @foreach ($data_tgl as $element)
                   {{ $element->mon }}+'-'+{{ $element->yr }},
               @endforeach
 
            ]
    },
    series: [{
            name: 'Total Pax Book',
            data: [
                @foreach ($data_tgl as $element)
                   {{ $element->pax }},
               @endforeach
            ],
            zoneAxis: 'x',
            zones: [{
                value: 8
            }, {
                dashStyle: 'dot'
            }]
        }]
    });

    $('.cari').click(function(){
        $.ajax({
            data : $('#save_data').serialize(),
            url  : ('{{ route('cari_report_profit_oketrip') }}'),
            type : 'get',
            success: function (data) {
                if (data.status == 'kosong') {
                    iziToast.warning({
                        icon: 'fa fa-times',
                        title: 'warning!',
                        message: 'Data Not Found!',
                    });
                    $('.drop_here').html('');
                }else{
                    $('.drop_here').html(data);
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
    })


</script>
@endsection
