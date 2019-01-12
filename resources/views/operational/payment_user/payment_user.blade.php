
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

 <div class="breadcumb-area height-500 bg-img bg-overlay" style="background-image: url({{ asset('assets_frontend_2/img/bg-img/breadcumb.jpg') }} )">
       
    </div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Single Listing Area Start ***** -->
    <section class="dorne-single-listing-area section-padding-100">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <!-- Single Listing Content -->
                <div class="col-lg-12 col-lg-8">
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
                                                        <td align="right" width="140">Room Price :</td>
                                                        <td align="right"> Rp.  {{ number_format($booking->db_total_room, 2, ",", ".") }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right">Additional Price :</td>
                                                        <td align="right"> Rp.  {{ number_format($booking->db_total_additional, 2, ",", ".") }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right">Agent Com Price :</td>
                                                        <td align="right"> Rp.  {{ number_format($booking->db_agent_com, 2, ",", ".") }}</td>
                                                    </tr><tr>
                                                        <td align="right">Tips Price :</td>
                                                        <td align="right"> Rp.  {{ number_format($booking->db_tips, 2, ",", ".") }}</td>
                                                    </tr><tr>
                                                        <td align="right">Visa Price :</td>
                                                        <td align="right"> Rp.  {{ number_format($booking->db_visa, 2, ",", ".") }}</td>
                                                    </tr><tr>
                                                        <td align="right">Apt Tax & Fuel Surcharge Price :</td>
                                                        <td align="right"> Rp.  {{ number_format($booking->db_tax, 2, ",", ".") }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right">Total Price :</td>
                                                        <td align="right"> Rp.  {{ number_format($booking->db_total, 2, ",", ".") }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right">Total Payment :</td>
                                                        <td align="center">
                                                            <input type="text" value="Rp. 0,00" class="form-control total_pay input-sm" readonly="" style="color: red;text-align: right;">
                                                            <input type="hidden" class="form-control" name="id" value="{{ $booking->db_id }}">
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
                                        <h5 class="bluec">ATTENTION :</h5>
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
                                                <td><h5 class="bluec">Account Bank Name</h5></td>
                                                <td align="right">
                                                    <input type="text" class="form-control bank_number uppercase" placeholder="Account Bank Name" name="bank_number[]">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><h5 class="bluec">Account Name</h5></td>
                                                <td align="right">
                                                    <input type="text" placeholder="Account Name" class="form-control name uppercase" name="name[]">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><h5 class="bluec">Nominal Transfer</h5></td>
                                                <td align="right" class="nominal_td">
                                                    <input type="text" placeholder="Nominal Transfer" value="0" class="form-control nominal" name="nominal[]">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><h5 class="bluec">Date Transfer</h5></td>
                                                <td align="right">
                                                    <input type="text" value="{{ carbon\carbon::now()->format('d/m/Y') }}" class="form-control date" name="date[]" >
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5 class="bluec" style="margin-bottom: 170px">Proof of Payment</h5>
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
                                                            <img src="{{ asset('assets/images/Noimage.png') }}" style="width: 100%;height: 100%;border:1px solid pink" class="output" >
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
    </section>
@endsection


@section('extra_scripts')

<script type="text/javascript">
    {{-- GLOBAL VARIABLE --}}
    var total_payment = 0;
$(".nominal").maskMoney({
    precision:0,
    thousands:'.',
    allowZero:true,
});
$('.date').datepicker({
    format:'dd/mm/yyyy'
}).on('changeDate', function (ev) {
    $('.date').change();
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
    var sisa = '{{ $booking->db_total_additional + $booking->db_total_room + $booking->db_tax + $booking->db_visa - $booking->db_agent_com + $booking->db_tips }}';
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
            var sisa1 = '{{ $booking->db_total_additional + $booking->db_total_room + $booking->db_tax + $booking->db_visa - $booking->db_agent_com + $booking->db_tips }}';
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
    $('.table_payment').last().find('.date').removeClass('hasDatepicker')
                                                        .removeData('datepicker')
                                                        .datepicker({format:'dd/mm/yyyy'});
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
    var total = '{{ $booking->db_total_additional+$booking->db_total_room+$booking->db_tax+$booking->db_visa-$booking->db_agent_com+$booking->db_tips }}';
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
        var adult = '{{ $booking->db_total_adult }}';
        var child = '{{ $booking->db_total_child }}';
        var totals = adult * child;
        if (total_payment < ('{{ $booking->detail_itin->md_dp }}'*totals)) {
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
            // console.log('{{ url('/') }}'+'/booking/bookingdetail/'+data.id);
            location.href = '{{ url('/') }}'+'/booking/bookingdetail/'+data.id;
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
</script>
@endsection
