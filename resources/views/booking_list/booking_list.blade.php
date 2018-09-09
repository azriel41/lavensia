 <!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <!-- meta charec set -->
       
        @include('layouts_frontend._head')
       
        <style type="text/css">
            .btn-book{
                color: black;
                background-color: #f9ce05;
            }
            .logo{
                width: 100px;
            }
            .support{
                margin-top: 10px;
            }
            .mb50{
                /*margin-top: 30px;*/
                background-color: white;
            }
            .kiri{
                text-align:left;
            }
            /* MODAL */
            .modal-backdrop {
                z-index: 1040 !important;
            }
            .modal-dialog {
                margin: auto;
                z-index: 1100 !important;
                width: 700px;
            }
            .modal-content {
                border-radius: 0px; 
            }
            .modal {
              text-align: center;
            }

            @media screen and (min-width: 768px) { 
              .modal:before {
                display: inline-block;
                vertical-align: middle;
                content: " ";
                height: 100%;
              }
            }
            .modal-dialog {
              display: inline-block;
              vertical-align: middle;
            }
            .center-al{
                text-align: center;
            }
            /*btn orange*/
            .btn-orange {
                color: white;
                background-color: #eb4d4b;
                border-color: #ffffff;
            }
            .btn-orange:hover {
                color: #534c4c;
                background-color: #ff6b6b;
                border-color: white;
            }
            .img-responsive{
                margin: auto !important;
                border: 1px solid #bcbcbc;
                padding: 5px;
            }

        </style>
    </head>
    
    <body id="body">  

        <!--
        Contact Us
        ==================================== -->        
        <section id="package" class="package background_page">
            <div class="container">
                <div class="row mb50 margin_top_30px">
                    <!-- Tabs--> 
                    <div class="sec-sub-title text-center wow fadeInUp  animated" data-wow-duration="1000ms">
                      <div class="container">
                        <table width="100%" class="kiri">
                            <br>
                            <tr>
                                <th><b>Price Table</b></th>
                            </tr>
                        </table>
                        <div style="margin-top: 20px"></div>
                        <div class="table-responsive">
                            <table width="100%" class="table table-striped" align="center">
                                <thead>
                                   <tr >
                                       <th class="center-al">No</th>
                                       <th class="center-al">Booking Code</th>
                                       <th class="center-al">Date</th>
                                       <th class="center-al">Party Name</th>
                                       <th class="center-al">Dep Date</th>
                                       <th class="center-al">Group Name</th>
                                       <th class="center-al">Status</th>
                                       <th class="center-al">Stat Pay</th>
                                       <th class="center-al">Book by</th>
                                       <th class="center-al">Procces By</th>
                                       <th class="center-al">Payment</th>
                                   </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $element => $el)
                                        <tr>
                                            <td>{{ $element+1 }}</td>
                                            <td><a class="btn btn-sm btn-book"  href="bookingdetail/{{ $el->db_kode_transaksi }}">{{ $el->db_kode_transaksi }}</a></td>
                                            <td>{{ date('d-m-Y',strtotime($el->created_at)) }}</td>
                                            <td>{{ $el->db_name }}</td>
                                            <td>{{ $el->created_at }}</td>
                                            <td>{{ $el->mi_name }}</td>
                                            <td>
                                                @if ($el->db_status == 'Waiting List')
                                                    <span class="label label-warning"> {{ $el->db_status }}</span>
                                                @elseif ($el->db_status == 'Holding Confirm')
                                                    <span class="label label-success"> {{ $el->db_status }}</span>
                                                @elseif ($el->db_status == 'Canceled')
                                                    <span class="label label-danger"> {{ $el->db_status }}</span>
                                                @else
                                                    <span class="label label-info"> {{ $el->db_status }}</span>
                                                @endif
                                                </td>
                                            <td>
                                                @if ($el->db_total_remain == 0)
                                                    <span class="label label-success">Lunas</span>
                                                @else
                                                    <span class="label label-danger">Belum Lunas</span>
                                                @endif
                                            </td>
                                            <td>{{ $el->created_by }}</td>
                                            <td>{{ $el->name }}</td>
                                            <td>
                                                @if ($el->db_total_remain == 0)
                                                    <span class="label label-success">Lunas</span>
                                                @else
                                                    <button class="btn btn-sm btn-book payment" data-id={{ $el->db_id }}> <i class="fa fa-money"></i> Pay</button>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!--
        End Contact Us
        ==================================== -->
        
        
        @include('layouts_frontend._footer')
        
        
        <a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>

        @include('layouts_frontend._scripts')
        
    </body>
</html>

<script type="text/javascript">

    $('.payment').click(function(){
        var rand1 = '{{ md5('Demi yang Maha Pengasih Lagi Maha Penyayang Bagi Sang Pencipta Alam Semesta').rand(1,1000000) }}';
        var rand2 = '{{ md5('Dengan Nama Allah Yang Maha Pengasih Lagi Maha Penyayang').rand(1,1000000) }}';
        var rand3 = '{{ md5('Segala Puji Bagi Allah Tuhan Seru Sekalian Alam').rand(1,1000000)}}';
        window.location=('{{ url('/payment_page/payment_termin') }}'+'?rand='+rand1+'&rand2='+rand2+'&rand3='+rand3+'&id='+$(this).data('id'));
    })

</script>
