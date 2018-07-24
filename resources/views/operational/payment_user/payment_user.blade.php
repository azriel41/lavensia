<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <!-- meta charec set -->
       
        @include('layouts_frontend._head')
       
        <style type="text/css">
            .btn-primary {
                color: white;
                background-color: transparent;
                border-color: #ffffff;
            }
            .btn-plus {
                color: black;
                border-radius: 50%;
                text-align: center;
                height: 37px;
                background-color: #f4c800;
                border-color: #ffffff;
            }
            .btn-minus {
                color: black;
                border-radius: 50%;
                text-align: center;
                height: 37px;
                background-color: red;
                border-color: #ffffff;
            }
            .btn-primary:hover {
                color: black;
                background-color: #f4c800;
                border-color: #ffffff;
            }
            .btn-primary:hover, .btn-primary:focus, .btn-primary.focus, .btn-primary:active, .btn-primary.active, .open>.dropdown-toggle.btn-primary {
                color: #000;
                background-color: #face03;
                border-color: #ffffff;
            }
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
                background-color: white;
                margin-top: 30px;
                padding: 0px 0px 0px 0px !important;
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
            .col1{
                min-height: 100px;
            }
            .col2{
                background-color: #eeeeee94;
                min-height: 100px;
            }
            .margin-top-20px{
                margin-top: 20px;
            }
            label{
                margin-top: 10px;
            }
            .package{
                background-image: url({{ asset('assets_frontend/img/image-gallery/12.jpg') }});
                background-repeat: no-repeat;
                background-size: cover; 
            }
            fieldset.scheduler-border {
                padding: 0 1.4em 1.4em 1.4em !important;
                margin: 0 0 1.5em 0 !important;
                -webkit-box-shadow:  0px 0px 0px 0px #000;
                        box-shadow:  0px 0px 0px 0px #000;
            }
            legend.scheduler-border {
                font-size: 1.2em !important;
                font-weight: bold !important;
                text-align: left !important;
                width:auto;
                padding:0 10px;
                border-bottom:none;
            }

            /*****************************************
              upload button styles
            ******************************************/
            .file-upload {
                position: relative;
                display: inline-block;
            }

            .file-upload__label {
              display: block;
              padding: 1em 2em;
              color: #fff;
              background: #222;
               transition: background .3s;
              
              &:hover {
                 cursor: pointer;
                 background: #000;
              }
            }
                
            .file-upload__input {
                position: absolute;
                left: 0;
                top: 0;
                right: 0;
                bottom: 0;
                font-size: 1;
                width:0;
                height: 100%;
                opacity: 0;
            }
            textarea{
                max-width: 100%;
            }
            .pointer_dis{
                pointer-events: none;
                opacity: 0.5;
            }

            .borderimg2 { 
                border: 10px solid transparent;
                padding: 15px;
                -webkit-border-image: url('{{ asset('assets/images/border.png') }}') 30 stretch; /* Safari 3.1-5 */
                -o-border-image: url('{{ asset('assets/images/border.png') }}') 30 stretch; /* Opera 11-12.1 */
                border-image: url('{{ asset('assets/images/border.png') }}') 30 stretch;
            }

            .readonly{
                pointer-events: none;
                opacity: 0.8;
                background: #8888;
            }

            thead{
                background: purple;
                color: white
            }
           /* .bootstrap-select:hover{
                border: 1px solid;
            }*/
            .table-responsive {
              overflow-y: visible !important;
            }
            @media (max-width: 767px) {
                .table-responsive .dropdown-menu {
                    position: static !important;
                }
            }
            @media (min-width: 768px) {
                .table-responsive {
                    overflow: inherit;
                }
            }
            .dropdown-menu .inner{
                z-index: 99999999 !important;
            }
            .invoice_field{
                z-index: -1;
            }
            .errors{
                border-color: red;
            }
            li.active > a{
                background-color: purple !important;
                color: white !important;
                border-color: purple !important;
            }
            .tab-content{
              overflow-y:scroll;
              overflow-x:hidden;
              max-height: 250px;
            }
            .calc{
                z-index: 99999;
            }
            .label_new{
                color: rgba(189, 94, 91, 1) !important;
            }
            .marron{
                color: rgba(189, 94, 91, 1);
            }
        </style>
    </head>
    
    <body id="body" style="font-size: 12px">  

        <!--
        Contact Us
        ==================================== -->        
        <section id="package" class="package">
            <div class="container">

                <div class="row mb50">

                 @include('package.modal_book')
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sec-sub-title text-center wow fadeInUp  animated" data-wow-duration="1000ms">
                        <div class="col-sm-12">
                          <h3 class="count_h2"><b>{{ $booking->detail_itin->intinerary->mi_name }}</b></h3>  
                        </div>
                        <div class="col-sm-12" style="margin-bottom: 50px">
                            <div class="col-sm-12">
                                <img src="{{ asset('storage/app')}}/{{ $booking->detail_itin->intinerary->mi_image  }}" style="width: 50%;height: 25%" class="output" >
                            </div>
                            <div class="col-sm-12" style="color: grey;margin-top: 20px">
                                <div class="col-sm-3" align="right">
                                </div>
                                <div class="col-sm-6" align="right">
                                    <table class="table">
                                        <tr>
                                            <td align="right">Number of Pax :</td>
                                            <td>{{ $booking->db_pax }}</td>
                                        </tr>
                                        <tr>
                                            <td align="right">Room Price :</td>
                                            <td > Rp.  {{ number_format($booking->db_total_room, 2, ",", ".") }}</td>
                                        </tr>
                                        <tr>
                                            <td align="right">Additional Price :</td>
                                            <td > Rp.  {{ number_format($booking->db_total_additional, 2, ",", ".") }}</td>
                                        </tr>
                                        <tr>
                                            <td align="right">Total Price :</td>
                                            <td style="color: red"> Rp.  {{ number_format($booking->db_total_additional+$booking->db_total_room, 2, ",", ".") }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 wow fadeInUp  animated" data-wow-duration="1000ms">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-6">
                                <div class="col-sm-12" style="margin-bottom: 50px"> 
                                    <h4 class="count_h2">FORM CHECKOUT</h4>
                                    <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                                </div>
                                <form class="form_all" action="{{ url('/payment_page/save_first_payment') }}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="col-sm-12">

                                        <table class="table">
                                            <tr>
                                                <td><h5 class="marron">Account Bank Number</h5></td>
                                                <td align="right">
                                                    <input type="number" class="form-control bank_number" name="bank_number">
                                                    <input type="hidden" class="form-control" name="id" value="{{ $booking->db_id }}">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><h5 class="marron">Account Bank Name</h5></td>
                                                <td align="right"><input type="text" class="form-control bank_name" name="bank_name"></td>
                                            </tr>
                                            <tr>
                                                <td><h5 class="marron">Nominal Transfer</h5></td>
                                                <td align="right"><input type="text" class="form-control nominal" name="nominal"></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5 class="marron">Proof of Payment</h5>
                                                </td>
                                                <td style="width: 50%">
                                                    <div class="file-upload" style="width: 100%">
                                                        <div class="file-select">
                                                            <div class="file-select-button" id="fileName">Image</div>
                                                            <div class="file-select-name" id="noFile">Choose Image...</div> 
                                                            <input type="file" name="image" onchange="loadFile(event)" id="chooseFile">
                                                        </div>
                                                    </div>
                                                    <div class="preview_td">
                                                        <img style="width: 100%;height: 200px;border:1px solid pink" id="output" >
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-sm-12 current_items">
                                        <div class="col-sm-6" >
                                            <div class="col-sm-12" style="margin-bottom: 20px">
                                                <img src="{{ asset('assets_frontend/img/dp.png') }}" style="width: 50px;height: 50px;display: inline;">
                                            </div>
                                            <div class="col-sm-12">
                                                <input type="radio" name="payment" id="dp" value="dp">
                                                <label for="dp " class="label_new" style="font-size: 12px">Down Payment</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="col-sm-12" style="margin-bottom: 20px">
                                                <img width="50" src="{{ asset('assets_frontend/img/money_bag.png') }}" style="width: 50px;height: 50px;display: inline;">
                                            </div>
                                            <div class="col-sm-12">
                                                <input type="radio" name="payment" id="fp" value="fp">
                                                <label for="fp" class="label_new" style="font-size: 12px">Full Payment</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12" style="margin-top: 20px;text-align: left; font-size: 10px">
                                        <h5 class="marron">ATTENTION :</h5>
                                       <ol style="list-style-type: decimal;color: grey">
                                           <li>Harap Melakukan Pembayaran Dalam 1 x 24 jam</li>
                                           <li>Pastikan Nominal Sesuai Dengan Bukti Transfer</li>
                                           <li>Minimal Down Payment 50% Dari Total Harga</li>
                                           <li>Kelengkapan Dan Kevalid-an Data Mempercepat Proses Verifikasi</li>
                                       </ol>
                                    </div>
                                    <div class="col-sm-12">
                                        <button type="button" class="btn btn-success save" style="">
                                            <i class="fa fa-money"> Pay Out</i>
                                        </button>
                                    </div>
                                </form>
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
<script src="{{ asset ('assets/plugins/mask-money/jquery.maskMoney.min.js')}}"></script>
<script type="text/javascript">
$(".nominal").maskMoney({
    precision:0,
    thousands:'.',
    allowZero:true,
});

$('#chooseFile').bind('change', function () {
    var filename = $("#chooseFile").val();
    var fsize = $('#chooseFile')[0].files[0].size;
    if(fsize>1048576) //do something if file size more than 1 mb (1048576)
    {
      return false;
    }
    if (/^\s*$/.test(filename)) {
        $(".file-upload").removeClass('active');
        $("#noFile").text("No file chosen..."); 
    }
    else {
        $(".file-upload").addClass('active');
        $("#noFile").text(filename.replace("C:\\fakepath\\", "")); 
    }
});

var loadFile = function(event) {
    var fsize = $('#chooseFile')[0].files[0].size;
    if(fsize>2048576) //do something if file size more than 1 mb (1048576)
    {
      iziToast.warning({
        icon: 'fa fa-times',
        position:'topRight',
        message: 'File Is To Big!',
      });
      return false;
    }
    var reader = new FileReader();
    reader.onload = function(){
        var output = document.getElementById('output');
        output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
};

$('.save').click(function(){
    var total = '{{ $booking->db_total_additional+$booking->db_total_room }}';
    var nominal = $('.nominal').val().replace(/[^0-9\-]+/g,"");

    if ($('.bank_number').val() == '') {
        iziToast.warning({
            icon: 'fa fa-info',
            position:'topRight',
            title: 'Error!',
            message: 'Nomor Akun Bank Harus Diisi!',
        });
        return false;
    }

    if ($('.bank_name').val() == '') {
        iziToast.warning({
            icon: 'fa fa-info',
            position:'topRight',
            title: 'Error!',
            message: 'Nama Akun Bank Harus Diisi!',
        });
        return false;
    }

    if (nominal == '') {
        iziToast.warning({
            icon: 'fa fa-info',
            position:'topRight',
            title: 'Error!',
            message: 'Nominal Harus Diisi!',
        });
        return false;
    }
   

    if (nominal < (total/2)) {
        iziToast.warning({
            icon: 'fa fa-info',
            position:'topRight',
            title: 'Error!',
            message: 'Minimal Down Payment Adalah 50 %!',
        });
        return false;
    }
    console.log(nominal);
    console.log(total);
    if (nominal*1 > total*1) {
        iziToast.warning({
            icon: 'fa fa-info',
            position:'topRight',
            title: 'Error!',
            message: 'Nominal Melebihi Total Harga',
        });
        return false;
    }

    if ($('#chooseFile').val() == '') {
        iziToast.warning({
            icon: 'fa fa-info',
            position:'topRight',
            title: 'Error!',
            message: 'Bukti Bayar Harus Disertakan!',
        });
        return false;
    }

    $('.form_all').submit();

})
</script>
