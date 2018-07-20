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


           /* .bootstrap-select:hover{
                border: 1px solid;
            }*/
          
        </style>
    </head>
    
    <body id="body">  

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
                        <form action="#" id="contact-form">
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
                            <fieldset class="scheduler-border col-sm-6">
                              <legend class="scheduler-border">Guest</legend>
                                  <div class="contact-form col1" >
                                    <div class="input-group margin-top-20px">
                                        <div>
                                            <input type="text" name="bk_partyname" id="bk_partyname" placeholder="Party Name" class="form-control">
                                         
                                            <input type="text" name="bk_totalpac" id="bk_totalpac" placeholder="Total Pax" class="form-control">
                                        </div>
                                    </div>
                                  </div>
                            </fieldset>

                              <!-- Room Type 1-->
                            <fieldset class="scheduler-border col-sm-12 dropping wow fadeInUp  animated" data-wow-duration="1000ms" >
                                <h3 class="count_h2"><b>ROOM TOUR</b></h3>
                                <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                                <div class="col-sm-12 room_append">
                                    <div class="col-sm-12 all_room">
                                        <div class="col-sm-8 change  single" style="">
                                            <div class="col-sm-4 preview_div satu ">
                                                <div>
                                                    <img src="{{ asset('assets/images/Noimage.png') }}" style="width: 100%;height: 150px" class="output" >
                                                </div>
                                                <div class="file-upload" style="width: 100%"    >
                                                    <div class="file-select">
                                                        <div class="file-select-button fileName" >Image</div>
                                                        <div class="file-select-name noFile" >Passport Image</div> 
                                                        <input type="file" class="chooseFile" name="image[]">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 preview_div dua pointer_dis">
                                                <div>
                                                    <img src="{{ asset('assets/images/Noimage.png') }}" style="width: 100%;height: 150px" class="output" >
                                                </div>
                                                <div class="file-upload" style="width: 100%">
                                                    <div class="file-select">
                                                        <div class="file-select-button fileName" >Image</div>
                                                        <div class="file-select-name noFile" >Passport Image</div> 
                                                        <input type="file" class="chooseFile" name="image[]">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 preview_div tiga pointer_dis">
                                                <div>
                                                    <img src="{{ asset('assets/images/Noimage.png') }}" style="width: 100%;height: 150px" class="output" >
                                                </div>
                                                <div class="file-upload" style="width: 100%">
                                                    <div class="file-select">
                                                        <div class="file-select-button fileName" >Image</div>
                                                        <div class="file-select-name noFile" >Passport Image</div> 
                                                        <input type="file" class="chooseFile" name="image[]">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4"  >
                                            <div class="col-sm-12 row clearfix" align="left">
                                                <label>BED</label>
                                                <select  class="form-control  bk_bed">
                                                    <option value="single" data-val="1">Single</option>
                                                    <option value="double" data-val="2">Double</option>
                                                    <option value="twin" data-val="2">Twin</option>
                                                    <option value="triple" data-val="3">Triple</option>
                                                    <option value="doubletwin&cnb" data-val="3">Double/Twin + CNB</option>
                                                    <option value="doubletwin&cwb" data-val="3">Double/Twin + CwB</option>
                                                    <option value="doubletwin&invent" data-val="3">Double/Twin + Invent</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-12 row clearfix" align="left">
                                                <label align="left">Name </label>
                                                <div class="contact-form">
                                                    <div class="form-group-sm">
                                                        <input type="text" name="name_1"  placeholder="First Name" class="form-control name_1">
                                                        <input type="text" name="name_2"  placeholder="Second Name" class="form-control name_2 readonly">
                                                        <input type="text" name="name_3"  placeholder="Third Name" class="form-control name_3 readonly">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12" align="center">
                                                    <div class="btn-group btn-group-sm" role="group" aria-label="Extra-small button group">
                                                        <a title="Edit" type="button"  class="btn btn-info add waves-effect ">
                                                            <i class="fa fa-plus"></i>
                                                        </a>
                                                        <a title="Delete" type="button"  class="btn btn-danger del waves-effect ">
                                                            <i class="fa fa-minus"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    
                            </fieldset>
                            <hr>
                              <!-- Additional-->
                            <fieldset class="scheduler-border col-sm-12 wow fadeInUp  animated" data-wow-duration="1000ms">
                              <h3 class="count_h2"><b>ADDITIONAL</h3>
                                <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                                  <div class="contact-form col1" >
                                    <div class="table-responsive">
                                        <table width="100%" class="table table-striped table-hover table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Procie</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($intinerary->add as $val)
                                                <tr>
                                                    <td align="left">{{ $val->ma_name }}</td>
                                                    <td align="right">{{ number_format($val->ma_price, 0, ",", ".") }}</td>
                                                    <td></td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                  </div>
                            </fieldset>
                              <!-- Status-->
                            <fieldset class="scheduler-border col-sm-12 wow fadeInUp  animated" data-wow-duration="1000ms">
                              <h3 class="count_h2"><b>INVOICE</h3>
                                <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                                  <div class="contact-form col1" >
                                    <div class="table-responsive">
                                        <table width="100%" class="table table-striped table-hover table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Party Name</th>
                                                    <th>Total</th>
                                                    <th>Desc</th>
                                                    <th>Price</th>
                                                    <th>Term&Cond</th>
                                                    <th>Total Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Asep</td>
                                                    <td>2</td>
                                                    <td>Ga ada</td>
                                                    <td>Rp.1.0000.000,-</td>
                                                    <td>Tidak ada</td>
                                                    <td>Rp.2.0000.000,-</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Asep</td>
                                                    <td>2</td>
                                                    <td>Ga ada</td>
                                                    <td>Rp.1.0000.000,-</td>
                                                    <td>Tidak ada</td>
                                                    <td>Rp.2.0000.000,-</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="6">Total</td>
                                                    <td >Rp.4.0000.000,-</td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                  </div>
                            </fieldset>

                              <!-- Payment-->
                            <fieldset class="scheduler-border col-sm-12">
                              <legend class="scheduler-border">Payment</legend>
                                  <div class="contact-form col1" >
                                    <div style="min-height: 100px">
                                        <div class="table-responsive">
                                            <table width="100%" style="min-height: 100px" class="">
                                                <thead>
                                                    <tr>
                                                        <th width="25%">Down Payment</th>
                                                        <th width="25%">
                                                            <label class="radio-inline">
                                                              <input type="radio" name="optradio">Bayar Dp
                                                            </label>
                                                            
                                                        </th>
                                                        <th >Full Payment</th>
                                                        <th>
                                                            <label class="radio-inline">
                                                              <input type="radio" name="optradio">Bayar Fp
                                                            </label>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody align="left">
                                                    <tr height="40px">
                                                        <td colspan="2" valign="bottom">
                                                            <span style="color:red;background-color:#fdff6e;padding: 5px 5px 5px 5px"><b>*Dp Jatuh Tempo 21 Hari</b></span>
                                                        </td>
                                                        <td>
                                                            <span style="color:red;background-color:#fdff6e;padding: 5px 5px 5px 5px"><b>*Harap Telepon Administrasi Untuk Confirm</b></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span style="color:red;background-color:#fdff6e;padding: 5px 5px 5px 5px"><b>*Batas Pembayran Dilakukan 1x24 jam</b></span>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                  </div>
                            </fieldset>

                               <!-- Additional-->
                            <fieldset class="scheduler-border col-sm-12">
                              <legend class="scheduler-border">Remark</legend>
                              <div class="contact-form col1 col-sm-12" >
                                <div class="input-group margin-top-20px">
                                    <div>
                                        <textarea class="form-control" name="bk_remark" id="bk_remark" placeholder="Remark"></textarea>
                                    </div>
                                </div>
                              </div>
                            </fieldset>
                            <div class="contact-form col5 col-sm-5 col-sm-10 col-sm-12" >
                                <div class="input-group margin-top-20px">
                                    <div>
                                        <button type="button" class="bk_save btn btn-book btm-sm" onclick="save()"><i class="fa fa-share-square"></i> <b>Submit</b></button>
                                        <button type="button" class="bk_save btn btn-book btm-sm" onclick="save()"><i class="fa fa-share-square"></i> <b>Submit</b></button>
                                    </div>
                                </div>
                            </div>
                        </form>
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
            console.log(parent);
            $(parent).find('.output').attr('src',e.target.result);
        };
        // console.log(file[0].files[0]);
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
        
        $(par).last().clone(true, true).fadeIn().appendTo(".room_append");

        var satu = $('.all_room').last().find('.satu');
        var dua = $('.all_room').last().find('.dua');
        var tiga = $('.all_room').last().find('.tiga');
        var name_1 = $('.all_room').last().find('.name_1');
        var name_2 = $('.all_room').last().find('.name_2');
        var name_3 = $('.all_room').last().find('.name_3');

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
</script>
