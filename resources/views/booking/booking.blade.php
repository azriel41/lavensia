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
                width: 140px;
            }
            .support{
                margin-top: 10px;
            }
            .mb50{
                margin-top: 30px;
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
                background-color: #f6f6f695;
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
                        <h2 class="count_h2">BOOKING</h2>
                        <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sec-sub-title text-center wow fadeInUp  animated" data-wow-duration="1000ms">
                        <form action="#" id="contact-form">
                          <!-- Agent detail-->
                          <div class="contact-form col1 col-sm-6">
                            <label>Agent Detail</label>
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

                          <!-- Guest-->
                          <div class="contact-form col1 col-sm-6" >
                            <label>Guest</label>
                            <div class="input-group margin-top-20px">
                                <div>
                                    <input type="text" name="bk_partyname" id="bk_partyname" placeholder="Party Name" class="form-control">
                                 
                                    <input type="text" name="bk_totalpac" id="bk_totalpac" placeholder="Total Pax" class="form-control">
                                </div>
                            </div>
                          </div>

                          <!-- Room Type 1-->
                          <div class="contact-form col2 col-sm-6" >
                            <label>Room Type</label>
                            <div class="input-group margin-top-20px">
                                <div>
                                    KOSONG
                                </div>
                            </div>
                          </div>

                          <!-- Room type 2-->
                          <div class="contact-form col2 col-sm-6" >
                            <label>Room Type</label>
                            <div class="input-group margin-top-20px">
                                <div>
                                    KOSONG
                                </div>
                            </div>
                          </div>

                          <!-- Additional-->
                          <div class="contact-form col1 col-sm-12" >
                            <label>Guest</label>
                            <div class="input-group margin-top-20px">
                                <div>
                                    Additional
                                </div>

                            </div>
                          </div>

                          <!-- Status-->
                          <div class="contact-form col1 col-sm-12" >
                            <label>Status</label>
                            <div class="input-group margin-top-20px">
                                <div>
                                    STATUS
                                </div>
                            </div>
                          </div>


                          <!-- Payment-->
                          <div class="contact-form col2 col-sm-12" >
                            <label>Payment</label>

                            <div class="input-group margin-top-20px" style="margin-bottom: 10px">
                                <table width="100%">
                                    <tr >
                                        <th style="height: 200px" valign="top" width="50%">DP</th>
                                        <th valign="top" width="50%">FP</th>
                                    </tr>
                                    <tr>
                                        <td><b>Jatuh tempo -21 Hari</b></td>
                                        <td><b>Succes</b></td>
                                    </tr>
                                </table>
                            </div>
                           </div>

                           <!-- Additional-->
                          <div class="contact-form col1 col-sm-12" >
                            <div class="input-group margin-top-20px">
                                <div>
                                    <input type="text" name="bk_remark" id="bk_remark" placeholder="Remark" class="form-control">
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

    $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
</script>
