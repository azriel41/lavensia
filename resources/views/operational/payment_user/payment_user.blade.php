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
                        <h2 class="count_h2">Check Out</h2>
                        <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sec-sub-title text-center wow fadeInUp  animated" data-wow-duration="1000ms">

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
  

</script>
