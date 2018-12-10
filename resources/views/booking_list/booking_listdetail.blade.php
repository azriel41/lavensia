
@extends('layouts_frontend_2._main')  


@section('extra_style')

<style type="text/css">
.about-content h2 {
      color: #555555 !important;
      font-weight: 700 !important;
}
.about-content h3 {
      color: #555555 !important;
      font-weight: 700 !important;
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
table{
  color: #848484 !important;
}
.location-map table {
  font-size: 11.5px;
}
.book-a-table-widget{
  background-color: transparent !important;
}
.opening-hours-widget {
  padding: 20px;
}
</style>
@endsection

@section('content')

 <div class="breadcumb-area bg-img bg-overlay bg-100" style="background-color: rgba(14, 2, 35, 0.9)">
    
    </div>
    <!-- ***** Breadcumb Area End ***** -->
    <!-- ***** Single Listing Area Start ***** -->
    <section class="dorne-single-listing-area section-padding-100">
        <div class="container">
            
                <br>
            <div class="row justify-content-center">
                <!-- Single Listing Content -->
               
                <div class="col-sm-12 text-center" style="margin-bottom: 5%;">
                    <img src="{{  asset('storage/app/'.$data[0]->mi_image)  }}" style="border: 1px solid #dedede;padding: 5px;" width="600px" height="500px">
                </div>

                <div class="col-sm-12 about-content">
                    <h3 style="margin-bottom: -10px">{{ $data[0]->mi_name }}</h3>
                </div>

                <div class="col-12 col-lg-8">
                    <div class="single-listing-content">
                        <div class="single-listing-nav">
                            <nav>
                                <ul id="listingNav">
                                    <li class="active"><a href="#overview">Itinerrary info</a></li>
                                    <li><a href="#menu">Detail Book</a></li>
                                    <li><a href="#passenger">passenger</a></li>
                                    <li style="background-color: none"><a href="#lomap"></a></li>
                                </ul>
                            </nav>
                        </div>
                        <div id="lomap">
                            
                        </div>

                        <div class="overview-content mt-30" id="overview">
                            <div class="about-content text-center">
                                    <h3>ITINERARY INFO</h3>
                            </div>
                            <div class="responsive">
                              <table width="100%" class="table table-striped"> 
                                  <tr>
                                      <td width="20px" align="left">Itinerary </td>
                                      <td width="70px">: </td>
                                      <td align="left">{{ $data[0]->md_nota }}</td>
                                  </tr>
                                  <tr>
                                      <td align="left">Flight</td>
                                      <td>: </td>
                                      <td align="left">{{ $data[0]->mi_by }}</td>
                                  </tr>
                                  <tr>
                                      <td align="left">Highlight</td>
                                      <td>: </td>
                                      <td align="left">{{ $data[0]->mi_highlight }}</td>
                                  </tr>
                                  <tr>
                                      <td align="left">Periode</td>
                                      <td>: </td>
                                      <td align="left">{{ date('d F y',strtotime($data[0]->md_start)) }}  -  {{ date('d F y',strtotime($data[0]->md_start)) }}</td>
                                  </tr>
                              </table>

                              
                            </div>
                        </div>

                        <div class="listing-menu-area " id="menu">
                            <div class="about-content text-center">
                                    <h3>DETAIL BOOK</h3>
                            </div>
                            {{-- <br> --}}
                            <div class="table-responsive">
                            <h5>Book info</h5>
                            <table width="100%" class="table table-striped"> 
                                <tr>
                                    <td align="left">Transaksi</td>
                                    <td>: </td>
                                    <td align="left" >{{ $data[0]->db_kode_transaksi }}</td>
                                    
                                    <td align="left">Name</td>
                                    <td>: </td>
                                    <td align="left">{{ $data[0]->db_name }}</td>
                                </tr>
                                <tr>
                                  <td align="left">Status</td>
                                    <td>: </td>
                                  <td align="left" >

                                        @if ($data[0]->db_status == 'Waiting List')
                                            <span class="label label-warning"> {{ $data[0]->db_status }}</span>
                                        @elseif ($data[0]->db_status == 'Holding Confirm')
                                            <span class="label label-success"> {{ $data[0]->db_status }}</span>
                                        @elseif ($data[0]->db_status == 'Canceled')
                                            <span class="label label-danger"> {{ $data[0]->db_status }}</span>
                                        @else
                                            <span class="label label-info"> {{ $data[0]->db_status }}</span>
                                        @endif
                                    </td>
                                    <td align="left">Book By</td>
                                    <td>: </td>
                                    <td align="left">{{ $data[0]->bookby }}</td>

                                    
                                </tr>
                                <tr>
                                  <td align="left">Tlp</td>
                                    <td >: </td>
                                    <td  align="left">{{ $data[0]->db_telp }}</td>
                                    
                                    <td align="left">Handle By</td>
                                    <td>: </td>
                                    <td align="left">{{ $data[0]->handle }}</td>
                                </tr>
                                <tr>
                                    <td valign="top" align="left">Remark</td>
                                    <td valign="top" >: </td>
                                    <td colspan="4" valign="top"  align="left" >{{ $data[0]->db_remark }}</td>
                                </tr>
                              </table>
                              <table width="100%" class="table table-striped">
                                <tr>
                                    <td align="left">Adult</td>
                                    <td>: </td>
                                    <td align="right"><b>{{ number_format($data[0]->db_total_adult,'0','.','')}}</b></td>
                                    <td align="left">Child</td>
                                    <td>: </td>
                                    <td align="right"><b>{{ number_format($data[0]->db_total_child,0,'','.')}}</b></td>
                                    <td align="left">Infant</td>
                                    <td>: </td>
                                    <td align="right"><b>{{ number_format($data[0]->db_total_infant,0,'','.')}}</b></td>
                                </tr>
                              </table>

                              <h5>Price</h5>

                              <table width="100%" class="table table-striped"> 
                                
                                <tr>
                                    <td align="left">Adult</td>
                                    <td>: </td>
                                    <td align="right" colspan="2">{{ number_format($data[0]->md_adult_price,0,'','.')}}</td>
                                    <td align="left">Child</td>
                                    <td>: </td>
                                    <td align="right" colspan="3">{{ number_format($data[0]->md_child_price,0,'','.')}}</td>
                                </tr>
                                <tr>
                                    <td align="left">Infant</td>
                                    <td>: </td>
                                    <td align="right" colspan="2">{{ number_format($data[0]->md_infant_price,0,'','.')}}</td>
                                    <td align="left">CwB</td>
                                    <td>: </td>
                                    <td align="right" colspan="3">{{ number_format($data[0]->md_child_w_price,0,'','.')}}</td>
                                </tr>
                                <tr>
                                    <td align="left">Agent Com</td>
                                    <td>: </td>
                                    <td align="right" colspan="2">{{ number_format($data[0]->md_agent_com,0,'','.')}}</td>
                                    <td align="left">Tips</td>
                                    <td>: </td>
                                    <td align="right" colspan="3">{{ number_format($data[0]->md_tips,0,'','.')}}</td>
                                </tr>
                                <tr>
                                    <td align="left">Visa</td>
                                    <td>: </td>
                                    <td align="right" colspan="2">{{ number_format($data[0]->md_visa,0,'','.')}}</td>
                                    <td align="left">Tax</td>
                                    <td>: </td>
                                    <td align="right" colspan="3">{{ number_format($data[0]->md_tax,0,'','.')}}</td>
                                </tr>
                                <tr>
                                    <td align="left">Total Price</td>
                                    <td>: </td>
                                    <td align="right" colspan="7">Rp. {{ number_format($data[0]->db_total_room,0,'','.') }}</td>
                                </tr>
                                <tr>
                                    <td align="left">Add Price</td>
                                    <td>: </td>
                                    <td align="right" colspan="7">Rp. {{ number_format($data[0]->db_total_additional,0,'','.') }}</td>
                                </tr>
                                <tr>
                                    <td align="left">Total Price</td>
                                    <td>: </td>
                                    <td align="right" colspan="7"><b>Rp. {{ number_format($data[0]->db_total,0,'','.') }}</b></td>
                                </tr>
                                <tr>
                                    <td align="left">Remain Price</td>
                                    <td>: </td>
                                    <td align="right" colspan="7"><b>Rp. {{ number_format($data[0]->db_total_remain,0,'','.') }}</b></td>
                                </tr>
                                
                            </table>
                            </div>
                        </div>

                        <div class="mt-30" id="passenger">
                            <div class="about-content text-center">
                                    <h3>DETAIL PASSENGER</h3>
                            </div>
                            <div class="location-map">
                                @foreach ($simple_table as $index => $e)
                                @if ($e->dp_bed == 'single')
                                <p>SINGLE</p>
                                <div class="col-sm-12">
                                    <div class="col-sm-4">
                                        <img src="{{ asset('storage/app/'.$e->dp_image) }}" width="250px" height="170px">
                                    </div>
                                    <div class="col-sm-8">
                                      <div class="table-responsive">
                                        <table class="table table-striped table-bordered" width="100%">

                                            <tr>
                                                <th align="left" width="10%">Nama</th>
                                                <td width="25%">: <b>{{ $e->dp_name }}</b></td>
                                                <td width="10%">Gender</td>
                                                <td width="25%">: {{ $e->dp_gender }}</td>
                                            </tr>
                                            <tr>
                                                <th>Passport </th>
                                                <td>: {{ $e->dp_passport }}</td>
                                                <td>Date of Birth</td>
                                                <td>: {{ $e->dp_birth_date }}</td>
                                            </tr>
                                            <tr>
                                                <th>Expired Date </th>
                                                <td>: {{ $e->dp_exp_date }}</td>
                                                <td>Place of Birth</td>
                                                <td>: {{ $e->dp_birth_place }}</td>
                                            </tr>
                                            <tr>
                                                <th {{-- style="border-bottom: 1px solid #ddd;"--}}>Issuing </th> 
                                                <td {{-- style="border-bottom: 1px solid #ddd;" --}}>: {{ $e->dp_issuing }}</td>
                                                <td {{-- style="border-bottom: 1px solid #ddd;" --}}>Remark</td>
                                                <td {{-- style="border-bottom: 1px solid #ddd;" --}}>: {{ $e->dp_reference }}</td>
                                            </tr>
                                        </table>
                                        </div>
                                    </div>
                                </div>
                                @elseif($e->dp_bed == 'twin')
                                <p>TWIN</p>
                                <div class="col-sm-12">
                                    <div class="col-sm-4">
                                        <img src="{{ asset('storage/app/'.$e->dp_image) }}" width="250px" height="170px">
                                    </div>
                                    <div class="col-sm-8">
                                      <div class="table-responsive">
                                        <table class="table table-striped table-bordered" width="100%">

                                            <tr>
                                                <th align="left" width="10%">Nama</th>
                                                <td width="25%">: <b>{{ $e->dp_name }}</b></td>
                                                <td width="10%">Gender</td>
                                                <td width="25%">: {{ $e->dp_gender }}</td>
                                            </tr>
                                            <tr>
                                                <th>Passport </th>
                                                <td>: {{ $e->dp_passport }}</td>
                                                <td>Date of Birth</td>
                                                <td>: {{ $e->dp_birth_date }}</td>
                                            </tr>
                                            <tr>
                                                <th>Expired Date </th>
                                                <td>: {{ $e->dp_exp_date }}</td>
                                                <td>Place of Birth</td>
                                                <td>: {{ $e->dp_birth_place }}</td>
                                            </tr>
                                            <tr>
                                                <th {{-- style="border-bottom: 1px solid #ddd;"--}}>Issuing </th> 
                                                <td {{-- style="border-bottom: 1px solid #ddd;" --}}>: {{ $e->dp_issuing }}</td>
                                                <td {{-- style="border-bottom: 1px solid #ddd;" --}}>Remark</td>
                                                <td {{-- style="border-bottom: 1px solid #ddd;" --}}>: {{ $e->dp_reference }}</td>
                                            </tr>
                                        </table>
                                        </div>
                                    </div>
                                </div>
                                @elseif($e->dp_bed == 'double')
                                <p>DOUBLE</p>
                                <div class="col-sm-12">
                                    <div class="col-sm-4">
                                        <img src="{{ asset('storage/app/'.$e->dp_image) }}" width="250px" height="170px">
                                    </div>
                                    <div class="col-sm-8">
                                      <div class="table-responsive">
                                        <table class="table table-striped table-bordered" width="100%">

                                            <tr>
                                                <th align="left" width="10%">Nama</th>
                                                <td width="25%">: <b>{{ $e->dp_name }}</b></td>
                                                <td width="10%">Gender</td>
                                                <td width="25%">: {{ $e->dp_gender }}</td>
                                            </tr>
                                            <tr>
                                                <th>Passport </th>
                                                <td>: {{ $e->dp_passport }}</td>
                                                <td>Date of Birth</td>
                                                <td>: {{ $e->dp_birth_date }}</td>
                                            </tr>
                                            <tr>
                                                <th>Expired Date </th>
                                                <td>: {{ $e->dp_exp_date }}</td>
                                                <td>Place of Birth</td>
                                                <td>: {{ $e->dp_birth_place }}</td>
                                            </tr>
                                            <tr>
                                                <th {{-- style="border-bottom: 1px solid #ddd;"--}}>Issuing </th> 
                                                <td {{-- style="border-bottom: 1px solid #ddd;" --}}>: {{ $e->dp_issuing }}</td>
                                                <td {{-- style="border-bottom: 1px solid #ddd;" --}}>Remark</td>
                                                <td {{-- style="border-bottom: 1px solid #ddd;" --}}>: {{ $e->dp_reference }}</td>
                                            </tr>
                                        </table>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <div class="col-sm-12" style="margin-top: 30px;">
                                    
                                </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Listing Sidebar -->
                <div class="col-12 col-md-8 col-lg-4">
                    <div class="listing-sidebar">

                        <!-- Listing Verify -->
                        <div class="listing-verify">
                            <a href="#" class="btn dorne-btn w-100"><i class="fa fa-check pr-3"></i>Detail Book : {{ $data[0]->db_kode_transaksi }}</a>
                            
                        </div>
                        

                    
                        <!-- Opening Hours Widget -->
                        <div class="opening-hours-widget mt-50">
                            <h6>More Information</h6>
                            <ul class="opening-hours">
                                <li>
                                    <p>ITINERARY</p>
                                    <p><button class="btn btn-small btn-book download_itin" id="pdf" data-id="{{ $data[0]->mi_id }}" ><b><i class="fa fa-cloud-download"></i> Download</b></button></p>
                                </li>
                                <li>
                                    <p>PROFILE CUSTOMER</p>
                                    <p><button class="btn btn-small btn-danger download_pdf" id="pdf" data-id="{{ $data[0]->db_intinerary_id }}" ><b><i class="fa fa-cloud-download"></i> Download</b></button></p>
                                </li>
                                <li>
                                    <p>TERM & CONDITION</p>
                                    <p><button class="btn btn-small btn-primary download_md_tata_tertib" id="pdf" data-id="{{ $data[0]->mi_id }}" ><b><i class="fa fa-cloud-download"></i> Download</b></button></p>
                                </li>
                                <li>
                                    <p>FINAL CONFIRMATION</p>
                                    <p><button class="btn btn-small btn-info download_final" id="pdf" data-id="{{ $data[0]->mi_id }}" ><b><i class="fa fa-cloud-download"></i> Download</b></button></p>
                                </li>
                                <li>
                                    <p>INVOICE</p>
                                    @if ($data[0]->db_total_remain == 0)
                                       <p><button class="btn btn-small btn-success download_invoice" id="pdf" data-id="{{ $data[0]->db_id }}" ><b><i class="fa fa-cloud-download"></i> Download</b></button></p>
                                    @else
                                       <p><button class="btn btn-small btn-default" id="pdf" ><b><i class="fa fa-cloud-download"></i> Download</b></button></p>
                                    @endif                                        
                                </li>
                            </ul>
                        </div>
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

    $('.download_pdf').click(function(){
        var ini = $(this).data('id');
        window.open(baseUrl+'/booking/bookingdetail_download_pdf/'+ini);
    })

    $('.download_md_tata_tertib').click(function(){
        var ini = $(this).data('id');
        window.open(baseUrl+'/booking/bookingdetail_download_md_tata_tertib/'+ini);
    })

    $('.download_final').click(function(){
        var ini = $(this).data('id');
        window.open(baseUrl+'/booking/bookingdetail_download_final/'+ini);
    })

    $('.download_invoice').click(function(){
        var ini = $(this).data('id');
        window.open(baseUrl+'/booking/bookingdetail_download_invoice/'+ini);
    })
   
            
    
    
</script>
@endsection
