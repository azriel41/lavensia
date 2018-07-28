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

                    <!-- Header--> 
                    <div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
                        <h2 class="count_h2">BOOK fORM</h2>
                        <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sec-sub-title text-center wow fadeInUp  animated" data-wow-duration="1000ms">
                        <form action="#" id="save">
                              <!-- Agent detail-->
                            <fieldset class="scheduler-border col-sm-6" style="border-right: 1px solid #8db0ff;">
                              <legend class="scheduler-border">Agent Detail</legend>
                                  <div class="contact-form col1" >
                                    <div class="input-group margin-top-20px">
                                        <div class="input-field">
                                            <input type="text" name="bk_name" id="bk_name" placeholder="Name" value="{{ auth::user()->name }}" class="form-control pointer_dis" readonly="">
                                         
                                            <input type="text" name="bk_add" id="bk_add" placeholder="Address" value="{{ auth::user()->address }}" class="form-control pointer_dis" readonly="">
                                        </div>
                                        <div class="input-field">
                                            <input type="text" name="bk_cp" id="bk_cp" placeholder="Contact Person" value="{{ auth::user()->phone }}" class="form-control pointer_dis" readonly="">
                                        
                                            <input type="email" name="bk_email" id="bk_email" placeholder="E-mail" value="{{ auth::user()->email }}" class="form-control pointer_dis" readonly="">
                                        </div>
                                    </div>
                                  </div>
                            </fieldset>

                              <!-- Guest-->
                            <fieldset class="scheduler-border col-sm-6 left">
                                <legend class="scheduler-border">Guest</legend>
                                <div class="col-sm-12 contact-form">
                                    <div class="col-sm-3">
                                        <h5 class=""><b>Party Name</b></h5>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Party Name" name="party_name">
                                    </div>
                                </div>
                                <div class="col-sm-12 contact-form">
                                    <div class="col-sm-3">
                                        <h5 class=""><b>Telp</b></h5>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Telp" name="party_telephone">
                                    </div>
                                </div>
                            </fieldset>
                            <!-- Room Type 1-->

                            <!-- Additional-->
                            <hr>
                            <fieldset class="scheduler-border col-sm-12 wow fadeInUp  animated" data-wow-duration="1000ms" >
                              <h3 class="count_h2"><b>ADDITIONAL</h3>
                                <div class="devider" style="margin-bottom: 20px"><i class="fa fa-heart-o fa-lg"></i></div>
                                  <div class="contact-form col1" >
                                    <div class="table-responsive">
                                        <table width="100%" class="table table-striped table-bordered table-hover ">
                                            <thead >
                                                <tr>
                                                    <th style="width: 25%" align="center">Name</th>
                                                    <th style="width: 20%" align="center">Procie</th>
                                                    <th align="center">Select Person</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($detail_intinerary->intinerary->add as $val)
                                                <tr class="add_tr">
                                                    <td align="left">
                                                        <p class="add_name">{{ $val->ma_name }}</p>
                                                        <input type="hidden" class="add_id" value="{{ $val->ma_id }}">
                                                    </td>
                                                    <td align="right">
                                                        <p class="add_price_text">{{ number_format($val->ma_price, 0, ",", ".") }}</p>
                                                        <input type="hidden" class="add_price" value="{{ $val->ma_price }}">
                                                    </td>
                                                    <td class="sel_opt">
                                                        <select class=" additional form-control selectpicker" multiple data-size="4">
                                                        
                                                        </select>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                  </div>
                            </fieldset>
                            <div class="col-sm-12" style="margin-top: 100px">
                                <fieldset class="scheduler-border col-sm-6 " style="text-align: center !important;">
                                  <h4 class="scheduler-border count_h2" ><b>REMARK</b></h4>
                                  <div class="contact-form col1 col-sm-12" >
                                    <div class="input-group margin-top-20px">
                                        <div>
                                            <textarea style="" class="form-control" name="bk_remark" id="bk_remark" placeholder="Remark"></textarea>
                                        </div>
                                    </div>
                                  </div>
                                </fieldset>
                                <fieldset class="scheduler-border col-sm-6 " style="text-align: center !important;">
                                  <h4 class="scheduler-border count_h2" ><b>Term & Condition Agreement</b></h4>
                                  <div class="contact-form col1 col-sm-12" >
                                    <div class="input-group margin-top-20px">
                                        <div class="checkbox checkbox-info checkbox-circle">
                                            <input id="check_agree" type="checkbox" name="check_agree">
                                            <label for="Kwitansi">
                                                <b>I Agree With All Term & Condition</b><a onclick="open_term()" data-toggle="modal" data-target="#exampleModal"> See Term & Condition</a>
                                            </label>
                                        </div> 
                                    </div>
                                  </div>
                                </fieldset>
                            </div>
                            
                            <div class="col-sm-12" style="margin-top: 50px;">
                                <button type="button" class="btn btn-success waves-effect calc"><i class="fa fa-calculator"></i> Create Invoice</button>
                            </div>
                        </form>
                        <div class="col-sm-12 invoice_tab" hidden="">
                            <div class="col-sm-12">
                                <table width="100%" class="table table-striped table-hover table_room">
                                    <thead >
                                        <tr>
                                            <th style="text-align: center;">No</th>
                                            <th style="text-align: center;">Family Name</th>
                                            <th style="text-align: center;">Name</th>
                                            <th style="text-align: center;">Room</th>
                                            <th style="text-align: center;">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody class="append_invoice">
                                    </tbody>
                                </table>
                                <table width="100%" class="table table-striped table-hover table_addition">
                                    <thead >
                                        <tr>
                                            <th style="text-align: center;">Name</th>
                                            <th style="text-align: center;">Additional</th>
                                            <th style="text-align: center;">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody class="append_additional">
                                    </tbody>
                                </table>
                                <input type="hidden" class="total_room_input" name="total_room_input">
                                <input type="hidden" class="total_additional_input" name="total_additional_input">
                                <input type="hidden" class="total_harga_input" name="total_harga_input">
                            </div>
                          {{--   <div class="col-sm-12">
                                <button type="button" class="btn btn-info waves-effect save" data-dismiss="modal" ><i class="fa fa-money"></i> SAVE BOOK AND GO TO PAYMENT PAGE</button>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            @include('booking.booking_modal')
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
    $('#bk_totalpac').keyup(function(){
        if ($(this).val() > 15) {
            $(this).val(15)
        }
        if ($(this).val() < 0) {
            $(this).val(0)
        }

    })
    // var table_room      = $('.table_room').DataTable({
    //     sorting:false,
    //     paging:false,
    //     searching:false,
    // });
    // var table_addition  = $('.table_addition').DataTable({
    //     sorting:false,
    //     paging:false,
    //     searching:false,
    // });
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

    $('.bk_bed').change(function(){
        var val = $(this).find(':selected').attr('data-val');
        var dua = $(this).parents('.all_room').find('.dua');
        var tiga = $(this).parents('.all_room').find('.tiga');
        var name_2 = $(this).parents('.all_room').find('.name_2');
        var name_3 = $(this).parents('.all_room').find('.name_3');
        if (val == 1) {
            $(dua).find('.chooseFile').val('');
            $(dua).find('.noFile').text('Passport Image');
            $(dua).find('.output').attr('src','{{ asset('assets/images/Noimage.png') }}');
            $(dua).find('.output').attr('src','{{ asset('assets/images/Noimage.png') }}');
            $(dua).find('.file-upload').removeClass('active');
            $(dua).addClass('pointer_dis');
            $(tiga).find('.chooseFile').val('');
            $(tiga).find('.noFile').text('Passport Image');
            $(tiga).find('.output').attr('src','{{ asset('assets/images/Noimage.png') }}');
            $(tiga).find('.file-upload').removeClass('active');
            $(tiga).addClass('pointer_dis');
            $(name_2).addClass('readonly');
            $(name_3).addClass('readonly');
            $(name_2).val('');
            $(name_3).val('');
        }else if (val == 2) {
            $(dua).removeClass('pointer_dis');
            $(tiga).find('.chooseFile').val('');
            $(tiga).find('.noFile').text('Passport Image');
            $(tiga).find('.output').attr('src','{{ asset('assets/images/Noimage.png') }}');
            $(tiga).addClass('pointer_dis');
            $(name_2).removeClass('readonly');
            $(name_3).addClass('readonly');
            $(name_3).val('');
        }else if (val == 3) {
            $(dua).removeClass('pointer_dis');
            $(tiga).find('.chooseFile').val('');
            $(tiga).find('.noFile').text('Passport Image');
            $(tiga).find('.output').attr('src','{{ asset('assets/images/Noimage.png') }}');
            $(tiga).removeClass('pointer_dis');
            $(name_2).removeClass('readonly');
            $(name_3).removeClass('readonly');
        }
    })

    $(document).on('click','.add',function(){
        var par = $(this).parents('.all_room');
        var limit = 1;
        $('.all_room').each(function(){
            limit +=1;
        })
        if (limit == 15) {
            iziToast.warning({
                icon: 'fa fa-times',
                position:'topRight',
                message: 'Limit Append!',
            });
            return false;
        }
        $(par).last().clone(true, true).fadeIn().appendTo(".room_append");

        var satu = $('.all_room').last().find('.satu');
        var dua = $('.all_room').last().find('.dua');
        var tiga = $('.all_room').last().find('.tiga');
        var name_1 = $('.all_room').last().find('.name_1');
        var name_2 = $('.all_room').last().find('.name_2');
        var name_3 = $('.all_room').last().find('.name_3');
        var name_fam = $('.all_room').last().find('.name_fam');
        var name = $('.all_room').last().find('.name');

        $(satu).find('.chooseFile').val('');
        $(satu).find('.noFile').text('Passport Image');
        $(satu).find('.output').attr('src','{{ asset('assets/images/Noimage.png') }}');
        $(satu).find('.file-upload').removeClass('active');
        $(dua).find('.chooseFile').val('');
        $(dua).find('.noFile').text('Passport Image');
        $(dua).find('.output').attr('src','{{ asset('assets/images/Noimage.png') }}');
        $(dua).find('.file-upload').removeClass('active');
        $(dua).addClass('pointer_dis');
        $(tiga).find('.chooseFile').val('');
        $(tiga).find('.noFile').text('Passport Image');
        $(tiga).find('.output').attr('src','{{ asset('assets/images/Noimage.png') }}');
        $(tiga).find('.file-upload').removeClass('active');
        $(tiga).addClass('pointer_dis');
        $(name_2).addClass('readonly');
        $(name_3).addClass('readonly');
        $(name_1).val('');
        $(name_2).val('');
        $(name_3).val('');
        $(name_fam).val('');
        $(name).removeClass('errors');
    })

    $(document).on('click','.del',function(){
        var temp = 0;
        $('.all_room').each(function(){
            temp +=1;
        })
        if (temp != 1) {
            var par = $(this).parents('.all_room');
            $(par).remove();
        }
    })
    $(document).on('keyup','.name',function(){
        $('.additional').find('option').remove();
        $('.additional').each(function(a){
            var select  = $(this);
            var par     = $(this).parents('tr');
            var add_name= $(par).find('.add_name').text();
            var d= 1;
            $('.name').each(function(i){
                if ($(this).val() != '') {
                    var nama = $(this).val();
                    $(select).find('select').append('<option value="'+nama+'" add-index="'+d+'">'+nama+'</option>')
                           .selectpicker('refresh');
                    d++;
                }
            })
        });
    });

    $('.name').focus(function(){
        $(this).removeClass('errors');
    })

    $(document).on('click','.calc',function(){
        // ADD TO TABLE INVOICE
        if ($('#check_agree').is(':checked') == false) {
            iziToast.warning({
                icon: 'fa fa-times',
                position:'topRight',
                message: 'Please Check Term & Condition!',
            });
            return false;
        }
        $('.append_invoice').html('');
        $('.append_additional').html('');
        var validate = [];
        var total_arr = [];
        var tr1 = '</tr>';
        var total_room = 0;
        var total_add  = 0;
        var indexing = 1;
        $('.name_fam').each(function(i){
            var par = $(this).parents('.all_room');
            var bed = $(par).find('.bk_bed').val();
            var text_bed = $(par).find('.bk_bed :selected').text();
            var tr  = '<tr class="tr_'+i+'">';
            var nama_keluarga = $(this).val();
            $(par).find('.name:not(.readonly)').each(function(){
                if ($(this).val() ==  '') {
                    validate.push(0);
                    $(this).addClass('errors');
                }
            })
            
            $(par).find('.name:not(.readonly)').each(function(a){
                if (a != 2) {
                    var harga = '{{ number_format($detail_intinerary->md_adult_price, 0, ",", ".") }}';
                    total_room += ('{{ $detail_intinerary->md_adult_price}}'*1)
                }else{
                    if (bed == 'doubletwin&cnb') {
                        var harga = '{{ number_format($detail_intinerary->md_child_price, 0, ",", ".") }}';
                        total_room += ('{{ $detail_intinerary->md_child_price}}'*1)
                    }else if (bed == 'doubletwin&cwb'){
                        var harga = '{{ number_format($detail_intinerary->md_child_w_price, 0, ",", ".") }}';
                        total_room += ('{{ $detail_intinerary->md_child_w_price}}'*1)
                    }else if (bed == 'doubletwin&invent'){
                        var harga = '{{ number_format($detail_intinerary->md_infant_price, 0, ",", ".") }}';
                        total_room += ('{{ $detail_intinerary->md_infant_price}}'*1)
                    }else if (bed == 'triple'){
                        var harga = '{{ number_format($detail_intinerary->md_adult_price, 0, ",", ".") }}';
                        total_room += ('{{ $detail_intinerary->md_adult_price}}'*1)
                    }
                }

                var td0 = '<td class="i_indexing">'+indexing+'</td>';
                var td1 = '<td class="i_nama_fam_td">'+
                            nama_keluarga+
                            '<input type="hidden" name="r_name_fam[]" class="r_name_fam" value="'+nama_keluarga+'">'+
                          '</td>';
                var td2 = '<td class="i_nama_td">'+
                            $(this).val()+
                            '<input type="hidden" name="r_name[]" class="r_name" value="'+$(this).val()+'">'+
                          '</td>';
                var td3 = '<td class="i_room_td">'+
                            text_bed+
                            '<input type="hidden" name="r_bed[]" class="r_bed" value="'+text_bed+'">'+
                          '</td>';
                var td4 = '<td class="i_price_td">'+
                            harga+
                            '<input type="hidden" name="r_harga[]" class="r_harga" value="'+harga+'">'+
                          '</td>';
                var all = tr + td0 + td1 + td2 + td3 + td4 + tr1;
                $('.append_invoice').append(all);
                indexing++;
            })
          
        })

        $('.sel_opt').each(function(f){
            var all_name = $(this).find('select').val();
            var par      = $(this).parents('tr');
            var add_name = $(par).find('.add_name').text();
            var add_id   = $(par).find('.add_id').val();
            var add_p_te = $(par).find('.add_price_text').text();
            var add_pric = $(par).find('.add_price').val();
            var tr = '<tr class="tr_add_'+add_name+'">';
            try{
                for (var dex = 0; dex < all_name.length; dex++) {
                    var td1 = '<td class="a_nama_orang">'+
                                all_name[dex]+
                                '<input type="hidden" name="a_name[]" class="a_name" value="'+all_name[dex]+'">'+
                              '</td>';
                    var td2 = '<td class="a_nama_td">'+
                                add_name+
                                '<input type="hidden" name="a_id[]" class="a_id" value="'+add_id+'">'+
                              '</td>';
                    var td3 = '<td class="a_price_td">'+
                                add_p_te+
                              '<input type="hidden" name="a_price[]" class="a_price" value="'+add_p_te+'">'+
                              '</td>';
                    var all = tr + td1 + td2 + td3 + tr1;
                    $('.append_additional').append(all);
                    total_add+=(add_pric*1);
                }
            }catch(e){

            }
            
        })
        $('.total_room').html(accounting.formatMoney(total_room,"", 2, ".",','));
        $('.total_room_input').val(total_room);
        $('.total_additional').html(accounting.formatMoney(total_add,"", 2, ".",','));
        $('.total_additional_input').val(total_add);
        $('.total_harga').html(accounting.formatMoney(total_add + total_room,"", 2, ".",','));
        $('.total_harga_input').val(total_add + total_room);

        var valid = validate.indexOf(0);
        if (valid != -1) {
            iziToast.warning({
                icon: 'fa fa-times',
                position:'topRight',
                message: 'Please check your data!',
            });
            $("html, body").animate({ scrollTop: 350 }, "slow");
            return false;
        }
        if (indexing < $('#bk_totalpac').val()) {
            var kurang = $('#bk_totalpac').val()*1 - indexing*1;
            iziToast.warning({
                icon: 'fa fa-times',
                position:'topRight',
                message: 'Please Input '+kurang+' More Data!',
            });
            $("html, body").animate({ scrollTop: 350 }, "slow");
            return false;
        }
        if (indexing-1 > $('#bk_totalpac').val()) {
            iziToast.warning({
                icon: 'fa fa-times',
                position:'topRight',
                message: 'Exceeds the pax limit!',
            });
            $("html, body").animate({ scrollTop: 350 }, "slow");
            return false;
        }
        // $('.invoice_tab').prop('hidden',false);
        $('#invoice').modal('show');
    })
    
    $('.save').click(function(){
        
        var form  = $('#save');
        var formdata = false;
        if (window.FormData){
            formdata = new FormData(form[0]);
            formdata.append('id','{{ $id }}');
        }

        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: "POST",
            url:'{{ route('save_book') }}',
            data: formdata ? formdata : form.serialize(),
            dataType:'json',
            processData: false,
            contentType: false,
          success:function(data){
            if (data.status == '1') {
                var rand1 = '{{ md5('Demi yang Maha Pengasih Lagi Maha Penyayang Bagi Sang Pencipta Alam Semesta').rand(1,1000000) }}';
                var rand2 = '{{ md5('Dengan Nama Allah Yang Maha Pengasih Lagi Maha Penyayang').rand(1,1000000) }}';
                var rand3 = '{{ md5('Segala Puji Bagi Allah Tuhan Seru Sekalian Alam').rand(1,1000000)}}';
                window.location=('{{ url('/payment_page/payment') }}'+'?rand='+rand1+'&rand2='+rand2+'&rand3='+rand3+'&id='+data.id);
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
