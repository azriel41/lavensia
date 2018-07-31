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
                        <div class="col-sm-12 wow fadeInUp  animated" data-wow-duration="1000ms">
                            <form class="form_all" action="{{ url('/payment_page/save_first_payment') }}" method="post" enctype="multipart/form-data" >
                                {{ csrf_field() }}
                                <div class="col-sm-6" style="border-right: 1px solid #9999">
                                    <div class="col-sm-12">
                                      <h3 class="count_h2"><b>{{ $booking->detail_itin->intinerary->mi_name }}</b></h3>  
                                    </div>
                                    <div class="col-sm-12" style="margin-bottom: 50px">
                                        <div class="col-sm-12">
                                            <img src="{{ asset('storage/app')}}/{{ $booking->detail_itin->intinerary->mi_image  }}" style="width: 50%;height: 25%;border: 1px solid hotpink" class="output" >
                                        </div>
                                        <div class="col-sm-12" style="color: grey;margin-top: 20px">
                                            <div class="col-sm-2" align="right">
                                            </div>
                                            <div class="col-sm-8" align="right">
                                                <table class="table">
                                                    <tr>
                                                        <td align="right">Room Price :</td>
                                                        <td align="right"> Rp.  {{ number_format($booking->db_total_room, 2, ",", ".") }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right">Additional Price :</td>
                                                        <td align="right"> Rp.  {{ number_format($booking->db_total_additional, 2, ",", ".") }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right">Total Price :</td>
                                                        <td align="right"> Rp.  {{ number_format($booking->db_total_additional+$booking->db_total_room, 2, ",", ".") }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right">Total Payment :</td>
                                                        <td align="center">
                                                            <input type="text" value="Rp. 0,00" class="form-control total_pay input-sm" readonly="" style="color: red;text-align: right;">
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 current_items">
                                        <div class="col-sm-6" >
                                            <div class="col-sm-12" style="margin-bottom: 20px">
                                                <img src="{{ asset('assets_frontend/img/dp.png') }}" style="width: 50px;height: 50px;display: inline;">
                                            </div>
                                            <div class="col-sm-12">
                                                <input type="radio" name="payment" class="payment" id="dp" value="dp">
                                                <label for="dp " class="label_new" style="font-size: 12px">Down Payment</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="col-sm-12" style="margin-bottom: 20px">
                                                <img width="50" src="{{ asset('assets_frontend/img/money_bag.png') }}" style="width: 50px;height: 50px;display: inline;">
                                            </div>
                                            <div class="col-sm-12">
                                                <input type="radio" name="payment" class="payment" id="fp" value="fp">
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
                                </div>
                                <div class="col-sm-6" >
                                    <div class="col-sm-12" style="margin-bottom: 50px"> 
                                        <h4 class="count_h2">FORM CHECKOUT</h4>
                                        <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                                    </div>
                                    <div class="col-sm-12 append_rekening" style="overflow-y: scroll;height: 550px;max-height: 550px;">
                                        <table class="table table-bordered table_payment" style="border-color: hotpink">
                                            <tr>
                                                <td><h5 class="marron">Account Bank Name</h5></td>
                                                <td align="right">
                                                    <input type="text" class="form-control bank_number" placeholder="Account Bank Name" name="bank_number[]">
                                                    <input type="hidden" class="form-control" name="id" value="{{ $booking->db_id }}">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><h5 class="marron">Account Name</h5></td>
                                                <td align="right">
                                                    <input type="text" placeholder="Account Name" class="form-control name" name="name[]">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><h5 class="marron">Nominal Transfer</h5></td>
                                                <td align="right" class="nominal_td">
                                                    <input type="text" placeholder="Nominal Transfer" value="0" class="form-control nominal" name="nominal[]">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><h5 class="marron">Date Transfer</h5></td>
                                                <td align="right">
                                                    <input type="date" value="{{ carbon\carbon::now()->format('d/m/Y') }}" class="form-control date" name="date[]" min="31-12-2000" max="31-12-1979`">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5 class="marron" style="margin-bottom: 170px">Proof of Payment</h5>
                                                    <div class="btn_append btn-group" role="group">
                                                        <button title="Add New Bank Account" class="btn btn-info add" type="button" style=""><i class="fa fa-plus" ></i></button>
                                                    </div>
                                                </td>
                                                <td style="width: 50%">
                                                    <div class="preview_div">
                                                        <div class="file-upload" style="width: 100%;">
                                                            <div class="file-select">
                                                                <div class="file-select-button fileName" >Image</div>
                                                                <div class="file-select-name noFile tag_image_1" >Proof of Payment</div> 
                                                                <input type="file" class="chooseFile" name="image[]">
                                                            </div>
                                                        </div>
                                                        <div class="preview_td">
                                                            <img src="{{ asset('assets/images/Noimage.png') }}" style="width: 100%;height: 200px;border:1px solid pink" class="output" >
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>  
                            </form> 
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
    {{-- GLOBAL VARIABLE --}}
    var total_payment = 0;
$(".nominal").maskMoney({
    precision:0,
    thousands:'.',
    allowZero:true,
});

{{-- GAMBAR --}}
$('.chooseFile').bind('change', function () {
    var filename = $(this).val();
    var fsize = $(this)[0].files[0].size;
    if(fsize>1048576) //do something if file size more than 1 mb (1048576)
    {
      return false;
    }
    var parent = $(this).parents(".preview_div");
    if (/^\s*$/.test(filename)) {
        $(parent).find('.file-upload').removeClass('active');
        $(parent).find(".noFile").text("No file chosen..."); 
    }
    else {
        $(parent).find('.file-upload').addClass('active');
        $(parent).find(".noFile").text(filename.replace("C:\\fakepath\\", "")); 
    }
    load(parent,this);
});

function load(parent,file) {
    var fsize = $(file)[0].files[0].size;
    if(fsize>2048576) //do something if file size more than 1 mb (1048576)
    {
      iziToast.warning({
        icon: 'fa fa-times',
        message: 'File Is To Big!',
      });
      return false;
    }
    var reader = new FileReader();
    reader.onload = function(e){
        $(parent).find('.output').attr('src',e.target.result);
    };
    reader.readAsDataURL(file.files[0]);
}
// END GAMBAR
function hitung(a) {
    total_payment = 0;
    var sisa = '{{ $booking->db_total_additional+$booking->db_total_room }}';
    $('.nominal').each(function(){
        total_payment +=  $(this).val().replace(/[^0-9\-]+/g,"")*1;
        sisa -= $(this).val().replace(/[^0-9\-]+/g,"")*1;
        if (sisa < 0) {
            var temp = 0;
            $('.nominal').each(function(){
                temp += $(this).val().replace(/[^0-9\-]+/g,"")*1;
            });
            temp -= $(this).val().replace(/[^0-9\-]+/g,"")*1;
            console.log(temp);
            var sisa1 = '{{ $booking->db_total_additional+$booking->db_total_room }}';
             sisa1 = sisa1 - temp
            $(this).val(accounting.formatMoney(sisa1,"", 0, ".",','));
        }
    })

    total_payment = 0;
    $('.nominal').each(function(){
        total_payment +=  $(this).val().replace(/[^0-9\-]+/g,"")*1;
    })
    $('.total_pay').val(accounting.formatMoney(total_payment,"Rp. ", 2, ".",','));
}

$(document).on('keyup','.nominal',function(){
    var td = $(this).parents('.nominal_td');
    hitung(td);
})
$(document).on('click','.add',function(){
    var parent = $(this).parents('.table_payment');
    $(parent).clone(true, true).fadeIn().appendTo('.append_rekening');
    var button = '<button title="Add New Bank Account" class="btn-round btn btn-info add" type="button">'+
                 '<i  class="fa fa-plus" ></i></button>'+
                 '<button title="Remove New Bank Account" class="btn-round btn btn-danger rem" type="button">'+
                 '<i  class="fa fa-minus" ></i></button>';
    $('.btn_append').last().html(button);
    $('.table_payment').last().find('input:not(.date)').val('');
    $('.table_payment').last().find('.file-upload').removeClass('active');
    $('.table_payment').last().find('.output').attr('src','{{ asset('assets/images/Noimage.png') }}');
    $('.table_payment').last().find('.noFile').text('Proof of Payment');
    $('.table_payment').last().find('.nominal').val('0');
    $(".nominal").maskMoney({
        precision:0,
        thousands:'.',
        allowZero:true,
    });
})

$(document).on('click','.rem',function(){
    var parent = $(this).parents('.table_payment');
    var a      = $(parent).find('.nominal_td');
    $(parent).remove();
    hitung(a)
})

$('input').focus(function(){
    $(this).removeClass('errors');
})  

$('.save').click(function(){
    var total = '{{ $booking->db_total_additional+$booking->db_total_room }}';
    var nominal = $('.nominal').val().replace(/[^0-9\-]+/g,"");
    var validator = [];
    var method    = $('.payment:checked').val()
    if (method == undefined) {
        iziToast.warning({
            icon: 'fa fa-times',
            position:'topRight',
            message: 'Please Select a Payment Method!',
        });
        return false;
    }


    $('.form_all').find('input').each(function(){
        if ($(this).val() == '') {
            console.log($(this));
            $(this).addClass('errors');
            validator.push(0);
        }
    })    

    var index = validator.indexOf(0);
    if (index != -1) {
        iziToast.warning({
            icon: 'fa fa-times',
            position:'topRight',
            message: 'Please Check Your Data Again!',
        });

        return false;
    }
    
    if (method == 'dp') {
        if (total_payment < total/2) {
            iziToast.warning({
                icon: 'fa fa-times',
                position:'topRight',
                message: 'Down Payment Minimal is 50 % From Total Booking!',
            });

            return false;
        }
    }else{
        if (total_payment < total) {
            iziToast.warning({
                icon: 'fa fa-times',
                position:'topRight',
                message: 'Payment Does Not Reach Requirement !',
            });

            return false;
        }
    }
    var form  = $('.form_all');
    var formdata = false;
    if (window.FormData){
        formdata = new FormData(form[0]);
        formdata.append('total_pay',total_payment);
    }

    $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: "POST",
            url:'{{ url('/payment_page/save') }}',
            data: formdata ? formdata : form.serialize(),
            dataType:'json',
            processData: false,
            contentType: false,
          success:function(data){
            if (data.status == '1') {
                location.href = '{{ url('/') }}'
            }else if (data.status == '0') {
                iziToast.success({
                    icon: 'fa fa-save',
                    position:'topRight',
                    title: 'Error!',
                    message:data.message,
                });
            }
          },error:function(){
            iziToast.warning({
                icon: 'fa fa-info',
                position:'topRight',
                title: 'Error!',
                message: 'Terjadi Kesalahan!',
            });
          }
        });

})
</script>
