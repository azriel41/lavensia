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
                                            <input type="text" name="bk_name" id="bk_name" placeholder="Name" class="form-control">
                                         
                                            <input type="text" name="bk_add" id="bk_add" placeholder="Address" class="form-control">
                                        </div>
                                        <div class="input-field">
                                            <input type="text" name="bk_cp" id="bk_cp" placeholder="Contact Person" class="form-control">
                                        
                                            <input type="email" name="bk_email" id="bk_email" placeholder="E-mail" class="form-control">
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
                          <fieldset class="scheduler-border col-sm-12">
                              <legend class="scheduler-border">Room type</legend>                              
                                  <div class="contact-form col2" >
                                    <div class="input-group margin-top-20px">
                                            <table width="100%">
                                                <tbody>
                                                    <tr class="drop_here">
                                                        <td>
                                                            <div class="file-upload">
                                                                <label for="upload" class="file-upload__label">Upload <i class="fa fa-upload"></i></label>
                                                                <input id="upload" class="file-upload__input" type="file" name="file-upload">
                                                            </div>
                                                        </td>
                                                        <td class="drop_here"></td>
                                                        <td width="40%">
                                                            <select class="form-control bk_bed"  onchange="bed(this)">
                                                                <option value="single">Single</option>
                                                                <option value="double">Double</option>
                                                                <option value="triple">Triple</option>
                                                                <option value="twin">Twin</option>
                                                                <option value="doubletwin&cnb">Double/Twin + CNB</option>
                                                                <option value="doubletwin&invent">Double/Twin + Invent</option>
                                                            </select>
                                                        </td>
                                                        <td width="4%"><button class="btn btn-plus" type="button" onclick="add_room()" style="margin-bottom: 10px;"><i class="fa fa-plus"></i></button></td>
                                                        <td width="4%"><button class="btn btn-minus" type="button" onclick="remove_room(this)" style="margin-bottom: 10px;" ><i class="fa fa-times" style="color: white;"></i></button></td>
                                                    </tr>
                                                </tbody>
                                            </table> 
                                    </div>

                                    <div class="drop"></div>
                                  </div>
                          </fieldset>
                          <hr>
                          <!-- Additional-->
                          <fieldset class="scheduler-border col-sm-12">
                              <legend class="scheduler-border">Additional</legend>
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
                                                <tr>
                                                    <td>Isurance</td>
                                                    <td>Rp.3.000.000,-</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Optional Tour</td>
                                                    <td>Rp.3.000.000,-</td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                  </div>
                          </fieldset>

                          <!-- Status-->
                          <fieldset class="scheduler-border col-sm-12">
                              <legend class="scheduler-border">Invoice</legend>
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


                         <div class="contact-form col1 col-sm-1" >
                            <div class="input-group margin-top-20px">
                                <div>
                                    <button type="button" class="bk_save btn btn-book btm-sm"><i class="fa fa-share-square"></i> <b>Submit</b></button>
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
    

    function more(argument) {
        window.location=('{{ route('package') }}');
    }

    function add_room(argument) {

        $('.drop').append(
                        '<table width="100%">'+
                            '<tr>'+
                                '<td class="drop_here"></td>'+
                                '<td><input type="file" class="imgInp"/></td>'+
                                '<td width="">'+
                                    '<select class="form-control bk_bed"  onchange="bed(this)">'+
                                    '<option value="single">Single</option>'+
                                    '<option value="double">Double</option>'+
                                    '<option value="triple">Triple</option>'+
                                    '<option value="twin">Twin</option>'+
                                    '<option value="doubletwin&cnb">Double/Twin + CNB</option>'+
                                    '<option value="doubletwin&invent">Double/Twin + Invent</option>'+
                                '</select>'+
                                '</td>'+
                                '<td><button class="btn btn-minus" type="button" onclick="remove_room(this)" style="margin-bottom: 10px;" ><i class="fa fa-times" style="color: white;"></i></button></td>'+
                            '</tr>'+
                        '</table>'
                            );
        return false;
    }

    function remove_room (argument) {
        var par = $(argument).parents('tr');
        var remove = $(par).remove();

    }

    function bed(argument) {

        var par = $(argument).parents('tr');
        var bed = $(par).find(':selected').val();
        console.log(bed);
        if (bed == 'single') {
            var remove = $(par).find('.file-upload_append').remove();
        }else if(bed == 'double'){

            $(par).find('.drop_here').html(
                                                '<div class="file-upload file-upload_append">'+
                                                    '<label for="upload" class="file-upload__label">Css only file upload button</label>'+
                                                    '<input id="upload" class="file-upload__input" type="file" name="file-upload">'+
                                                '</div>');
            
            console.log('b');
        }else if (bed == 'triple') {
          

            $(par).find('.drop_here').html('<div class="file-upload file-upload_append">'+
                                                '<label for="upload" class="file-upload__label">Css only file upload button</label>'+
                                                '<input id="upload" class="file-upload__input" type="file" name="file-upload">'+
                                            '</div>');

            $(par).find('.drop_here').html('<div class="file-upload file-upload_append">'+
                                                '<label for="upload" class="file-upload__label">Css only file upload button</label>'+
                                                '<input id="upload" class="file-upload__input" type="file" name="file-upload">'+
                                            '</div>');


        }else if (bed == 'doubletwin&cnb') {
            console.log('e');
        }else if (bed == 'doubletwin&invent') {
            console.log('f');
        }
    }

        
</script>
