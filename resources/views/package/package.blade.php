
@extends('layouts_frontend_2._main')  


@section('extra_style')

<style type="text/css">
th{
    text-align: center;
}
#tour{
    color: 
}
.left{
    float: left;
}
hr{
    margin-top: 0.2rem !important;
    margin-bottom: -1.1rem !important;
    border: 0 !important;
    border-top: 1px solid rgba(36, 36, 36, 0.36) !important;
}
.book-a-table-widget{
  background-color: transparent !important;
}
.opening-hours-widget {
  padding: 20px;
}
.title-itin{
  color: black;
  font-size: 18px;
}
.desc-itin{
  color: black;
  font-size: 15px;
}
.day-tour{
  color: black;
  font-weight: 400;
}
</style>
@endsection

@section('content')

 <div class="breadcumb-area height-500 bg-img bg-overlay" style="background-image: url({{ asset('storage/app/company/bg-4.jpg') }} )">
       
    </div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Single Listing Area Start ***** -->
    <section class="dorne-single-listing-area section-padding-100">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <!-- Single Listing Content -->
                <div class="col-12 col-lg-8">
                         @if (Session::has('message'))
                            <div class="col-md-12" style="min-height: 100px">
                                    <div class="alert alert-danger alert-dismissable" style="animation: fadein 0.5s, fadeout 0.5s 2.5s;">
                                      <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                      <h2 style="text-align:left"><h4 style="text-align:center">{{ Session::get('message') }}</h4>
                                    </div>
                            </div>
                        @endif
                    <div class="single-listing-content">
                        <div class="listing-title">
                            <h1>{{ $data[0]->mi_name }}</h1>
                            <h5>
                                {{ $data[0]->mi_highlight }}
                            </h5>
                            <br>
                            <h6>By : {{ $data[0]->mi_by }}</h6>
                        </div>

                        <div class="single-listing-nav">
                            <nav>
                                <ul class="nav nav-tabs ">
                                    <li><a class="active" data-toggle="tab" href="#tour"><i class="fa fa-plus-square-o"></i> Tour</a></li>
                                    <li><a data-toggle="tab" href="#menu1"><i class="fa fa-money"></i> Price</a></li>
                                    {{-- <li><a data-toggle="tab" href="#menu2"><i class="fa fa-plus"></i> Additional</a></li> --}}
                                    <li><a data-toggle="tab" href="#menu3"><i class="fa fa-text"></i> Term & Cond</a></li>
                                </ul>
                            </nav>
                        </div>

                         <div class="tab-content">
                            <div id="tour" class="active tab-pane">

                                <div class="col-md-12" >
                                    <h5>Flight Code</h5>
                                    <div class="table table-striped table-responsive">
                                        <table width="100%" class="table table-striped" align="center">
                                            <tr  style="background-color: #7ed6df;">
                                                <th class="center-al" >No Flight</th>
                                                <th class="center-al">Route</th>
                                                <th class="center-al">Time</th>
                                            </tr>
                                          @foreach ($flight as $element)
                                            <tr class="title-itin">
                                                <td>{{ $element->fd_nomor }}</td>
                                                <td>{{ $element->fd_route }}</td>
                                                <td>{{ $element->fd_time }}</td>
                                            </tr>
                                          @endforeach
                                        </table>
                                    </div>
                                    <h5>Schedule Detail</h5>
                                    @foreach ($schedule as $index => $sch)
                                      <div style="margin-top: 20px"></div>
                                        <div class="single-listing-menu d-flex justify-content-between">
                                            <!-- Listing Menu Title -->
                                            

                                            <div class="listing-menu-title">
                                                 <div style="min-height: 100px">
                                                    <div class="col-md-1 col-md-1 col-md-1" style="border: 1px solid #bcbcbc;border-left: 2px solid #7ed6df;">
                                                        <span class="day-tour"><b>Day</b></span><br>
                                                        <span class="day-tour"><b>{{ $index+1 }}</b></span>
                                                    </div>

                                                    <div class="col-md-11 col-md-11 col-md-11">
                                                        <p class="title-itin"><b>{{ $sch->ms_caption }}</b>   |   {{ $sch->ms_bld }}</p>
                                                        <p class="desc-itin">{{ $sch->ms_description }}</p>
                                                    </div>
                                                 </div>
                                            </div>
                                        </div>

                                     
                                      <br>
                                    @endforeach
                                </div>
                            </div>

                            <div id="menu1" class="tab-pane fade">
                                <h5>Price Table</h5>
                                <div style="margin-top: 20px"></div>
                                <div class="table-responsive">
                                    <table width="100%" class="table table-striped" align="center" style="font-size: 13px;">
                                        <thead>
                                           <tr style="background-color: #7ed6df;" >
                                               {{-- <th>No</th> --}}
                                               @if (Auth::user() != null)
                                                 <th>Book</th>
                                               @endif

                                               {{-- <th>Code Tour</th> --}}

                                               @if (Auth::user() != null)
                                               <th>Down Payment</th>
                                               @endif

                                               <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                               <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Price&nbsp;&nbsp;Tour&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                               <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Price&nbsp;&nbsp;Additional&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              {{--  <th>Adult</th>
                                               <th>Child</th>
                                               <th>Child w Bed</th>
                                               <th>Infant</th> --}}
                                               <th>Seat Remain</th>
                                           </tr>
                                        </thead>
                                        <tbody>
                                          @foreach ($detail as $index => $det)
                                           <tr align="center">
                                               {{-- <td width="5%">{{ $index+1 }}</td> --}}
                                               @if (Auth::user() != null)
                                               <td width="10%">
                                                   <button class="btn btn-small btn-book" onclick="booking('{{ $det->md_id }}')" ><b style="font-size: 12px;"><i class="fa fa-share-square-o"></i> Book !</b></button>
                                               </td>
                                               @endif
                                               @if (Auth::user() != null)
                                               <td width="12%" align="right">
                                                {{-- {{ $det->md_nota }} --}}
                                                {{-- <br> --}}
                                                {{-- <br> --}}
                                                {{-- <br> --}}
                                                <span class="left">DP : <b>{{ number_format($det->md_dp,0,'','.') }}</b></span>
                                                
                                                </td>
                                               @endif
                                               <td width="8%">{{ date('d M Y',strtotime($det->md_start))  }} <br> <j >s/d</j> <br> {{ date('d M Y',strtotime($det->md_end))  }}</td>
                                               <td align="right" width="8%">

                                                <span class="left">Adult : </span><b>{{ number_format($det->md_adult_price,0,'','.') }} </b>
                                                {{-- <hr> --}}
                                                <br>
                                                <span class="left">CnB : </span><b>{{ number_format($det->md_child_price,0,'','.') }} </b>
                                                {{-- <hr> --}}
                                                <br>
                                                <span class="left">CwB : </span><b>{{ number_format($det->md_child_w_price,0,'','.') }} </b>
                                                {{-- <hr> --}}
                                                <br>
                                                <span class="left">Infant : </span><b>{{ number_format($det->md_infant_price,0,'','.') }} </b>
                                               </td>
                                               <td align="right" width="20%">
                                                <span class="left">Visa : </span><b>{{ number_format($det->md_visa,0,'','.') }} </b>
                                                {{-- <hr> --}}
                                                <br>
                                                <span class="left">Tax : </span><b>{{ number_format($det->md_tax,0,'','.') }} </b>
                                                {{-- <hr> --}}
                                                <br>
                                                <span class="left">Tipping : </span><b>{{ number_format($det->md_tips,0,'','.') }} </b>

                                               @if (Auth::user() != null)
                                                {{-- <hr> --}}
                                                <br>
                                                <span class="left">Agent com : </span><b>{{ number_format($det->md_agent_com,0,'','.') }} </b>
                                               @endif

                                               </td>
                                               </td>
                                               <td width="10%">{{ $det->md_seat_remain }}</td>
                                               
                                            </tr>
                                          @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id="menu2" class="tab-pane fade">
                                <table width="100%" class="kiri">
                                    <br>
                                    <tr>
                                        <th><h5>Additional Price</h5></th>
                                    </tr>
                                </table>
                                <div style="margin-top: 20px"></div>
                                <div class="table-responsive">
                                    <table width="100%" class="table table-striped" align="center">
                                        <thead>
                                           <tr style="background-color: #7ed6df;">
                                               <th class="center-al">No</th>
                                               <th class="center-al">Name</th>
                                               <th class="center-al">Price</th>
                                               <th class="center-al">Desc</th>
                                           </tr>
                                        </thead>
                                        <tbody>
                                           @foreach ($additional as $index => $element)
                                               <tr align="center">
                                                   <td>{{ $index+1 }}</td>
                                                   <td>{{ $element->ma_name }}</td>
                                                   <td align="right">Rp. {{ number_format($element->ma_price,0,'','.') }}</td>
                                                   <td>{{ $element->ma_desc }}</td>
                                                </tr>
                                          @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id="menu3" class="tab-pane fade">
                                <table width="100%" class="kiri">
                                    <br>
                                    <tr>
                                        <th> <h5>Term & Condition </h5></th>
                                    </tr>
                                    
                                </table>
                                <div style="margin-top: 20px"></div>
                                <div class="pull-left" style="text-align: left">
                                    <span>{!! $data[0]->mi_term !!}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Listing Sidebar -->
                <div class="col-12 col-md-8 col-lg-4">
                    <div class="listing-sidebar">

                        <!-- Listing Verify -->
                      
                        <!-- Book A Table Widget -->
                        <div class="book-a-table-widget mt-50">
                            <img class="img-responsive" src="{{  asset('storage/app/'.$data[0]->mi_image)  }}" width="300px" height="400px" alt="">
                        </div>

                        @if (Auth::user() != null)

                        <div class="opening-hours-widget mt-50">
                            <h6>More Information</h6>
                            <ul class="opening-hours">
                                <li>
                                    <p>ITINERARY</p>
                                    <p><button type="button" class="btn btn-small btn-book download_itin" data-id="{{ $data[0]->mi_id }}" ><b><i class="fa fa-cloud-download"></i> Download</b></button></p>
                                </li>
                                <li>
                                    <p>FLAYER</p>
                                    <p><a class="btn btn-primary" href="{{ asset('/storage/app/detail_itin/Detail_flayer_'.$data[0]->mi_id.'.jpg') }}" download="{{ asset('/storage/app/detail_itin/Detail_flayer_'.$data[0]->mi_id.'.jpg') }}"><i class="fa fa-cloud-download"></i> Download</a></p>
                                </li>
                            </ul>
                        </div>

                        <div class="opening-hours-widget mt-50">
                            <h6>Bank Information</h6>
                            <ul class="opening-hours">
                                <li>
                                    <table class="table" width="100%">
                                      <tr>
                                        <th width="28%"><img src="{{ asset('/assets_frontend_2/img/bca.png') }}" width="100px"></th>
                                        <th class="text-left" style="padding-top: 20px;padding-left: 0px">
                                          Rekening &nbsp; : 0889309000
                                          <br>
                                          <br>
                                          Atas nama : Lukman Hartono
                                        </th>
                                      </tr>
                                    </table>
                                </li>
                            </ul>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('extra_scripts')
<script type="text/javascript">
    

    $('.download_itin').click(function(){
        var ini = $(this).data('id');
        window.open(baseUrl+'/booking/bookingdetail_download_itin/'+ini);

    })
    $('.download_flayer').click(function(){
        var ini = $(this).data('id');
        window.open(baseUrl+'/storage/app/detail_itin/Detail_flayer_'+ini+'.jpg');

    })
    
    function booking(id) {
        var rand1 = '{{ md5('Demi yang Maha Pengasih Lagi Maha Penyayang Bagi Sang Pencipta Alam Semesta').rand(1,1000000) }}';
        var rand2 = '{{ md5('Dengan Nama Allah Yang Maha Pengasih Lagi Maha Penyayang').rand(1,1000000) }}';
        var rand3 = '{{ md5('Segala Puji Bagi Allah Tuhan Seru Sekalian Alam').rand(1,1000000)}}';
        window.location=('{{ url('booking/booking') }}'+'?rand='+rand1+'&rand2='+rand2+'&rand3='+rand3+'&id='+id);
    }
    window.onload = function(){
       $('#pdf').click(function(){
            var parent = $(this).data('id');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                data : {id:parent},
                url  : ('{{ route('package_pdf') }}'),
                type : 'get',
                success: function (data) {
                    iziToast.success({
                        icon: 'fa fa-user',
                        title: 'Success!',
                        message: 'Downloaded!',
                    });
                },
                complete: function(data){
                    window.location.href = this.url;
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
       }
   
            
    
    
</script>
@endsection
