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
                width: 100px;
            }
            .support{
                margin-top: 10px;
            }
            .mb50{
                /*margin-top: 30px;*/
                background-color: white;
            }


            .nav-tabs { 
                border-bottom: 2px solid #DDD; 
            }
            .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover {
                border-width: 0; 
            }
            .nav-tabs > li > a {
                border: none; 
                color: #666; 
            }
            .nav-tabs > li.active > a, .nav-tabs > li > a:hover {
                border: none; 
                color: #630247 !important; 
                background: transparent !important; 
            }
            .nav-tabs > li > a::after {
                content: ""; 
                background: #dd0000; 
                height: 2px; position: absolute; 
                width: 100%; 
                left: 0px; 
                bottom: -1px; 
                transition: all 250ms ease 0s; 
                transform: scale(0); 
            }
            .nav-tabs > li.active > a::after, .nav-tabs > li:hover > a::after {
                transform: scale(1); 
            }
            .tab-nav > li > a::after {
                background: #21527d none repeat scroll 0% 0%; 
                color: #fff; 
            }

            .tab-pane {
                padding: 5px 0; 
                margin-left: 20px;
            }
            .tab-content {
                padding:5px;
                background-color:white;
                min-height: 400px;
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
                                       <th class="center-al">Code Tour</th>
                                       <th class="center-al">Date</th>
                                       <th class="center-al">Party Name</th>
                                       <th class="center-al">Dep Date</th>
                                       <th class="center-al">Group Name</th>
                                       <th class="center-al">Status</th>
                                       <th class="center-al">Book by</th>
                                       <th class="center-al">Procces By</th>
                                   </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $element => $el)
                                        <tr>
                                            <td>{{ $element+1 }}</td>
                                            <td>{{ $el->db_id }}</td>
                                            <td>{{ date('d-m-Y',strtotime($el->created_at)) }}</td>
                                            <td>{{ $el->db_name }}</td>
                                            <td>{{ $el->created_at }}</td>
                                            <td>{{ $el->mi_name }}</td>
                                            <td>{{ $el->db_status }}</td>
                                            <td>{{ $el->created_by }}</td>
                                            <td>-</td>
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
    

</script>
