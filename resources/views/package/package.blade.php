
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
                            <h3>{{ $data[0]->mi_name }}</h3>
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
                                    <li><a data-toggle="tab" href="#menu2"><i class="fa fa-plus"></i> Additional</a></li>
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
                                            <tr>
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
                                                        <span>Day</span><br>
                                                        <span class="day-tour">{{ $index+1 }}</span>
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
                                               <th>Book</th>
                                               <th>Code Tour</th>
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
                                           <tr align="left">
                                               {{-- <td width="5%">{{ $index+1 }}</td> --}}
                                               <td width="10%">
                                                   <button class="btn btn-small btn-book" onclick="booking('{{ $det->md_id }}')" ><b style="font-size: 12px;"><i class="fa fa-share-square-o"></i> Book !</b></button>
                                               </td>
                                               <td width="10%" align="right">
                                                {{ $det->md_nota }}
                                                <br>
                                                <br>
                                                <br>
                                                <span class="left">DP : </span>
                                                <b>{{ number_format($det->md_dp,0,'','.') }}</b>
                                                <b>
                                                </td>
                                               <td width="20%">{{ date('d M Y',strtotime($det->md_start))  }} <br> <j style="margin: 0% 0% 0% 20%;">s/d</j> <br> {{ date('d M Y',strtotime($det->md_end))  }}</td>
                                               <td align="right" width="20%">
                                                <span class="left">Adult : </span><b>{{ number_format($det->md_adult_price,0,'','.') }} </b>
                                                {{-- <hr> --}}
                                                <br>
                                                <span class="left">Child : </span><b>{{ number_format($det->md_child_price,0,'','.') }} </b>
                                                {{-- <hr> --}}
                                                <br>
                                                <span class="left">CwB : </span><b>{{ number_format($det->md_child_w_price,0,'','.') }} </b>
                                                {{-- <hr> --}}
                                                <br>
                                                <span class="left">Infant : </span><b>{{ number_format($det->md_infant_price,0,'','.') }} </b>
                                               </td>
                                               <td align="right" width="20%">
                                                <span class="left">Visa : </span><b>{{ number_format($det->md_Visa,0,'','.') }} </b>
                                                {{-- <hr> --}}
                                                <br>
                                                <span class="left">Tax : </span><b>{{ number_format($det->md_tax,0,'','.') }} </b>
                                                {{-- <hr> --}}
                                                <br>
                                                <span class="left">Tip gd : </span><b>{{ number_format($det->md_tips,0,'','.') }} </b>
                                                {{-- <hr> --}}
                                                <br>
                                                <span class="left">Agent com : </span><b>{{ number_format($det->md_agent_com,0,'','.') }} </b>
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
                                        <th><b>Additional Table</b></th>
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
                                        <th><b>Term & Conditions</b></th>
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
                        <div class="author-widget mt-50 d-flex align-items-center">
                            <img src="{{ asset('assets_frontend_2/img/clients-img/1.jpg') }}" alt="">
                            <div class="authors-name">
                                <a href="#">{{ $data[0]->created_by }}</a>
                                <p>The Author</p>
                                <p> {{ date('d M Y',strtotime($det->created_at))  }}</p>
                            </div>
                        </div>

                        <!-- Book A Table Widget -->
                        <div class="book-a-table-widget mt-50">
                            <img class="img-responsive" src="{{  asset('storage/app/'.$data[0]->mi_image)  }}" width="300px" height="400px" alt="">
                        </div>

                        


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('extra_scripts')
<script type="text/javascript">
    

    
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
