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
                background: #f8cd04 !important; 
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
                background-color:#f6f6f6;
                min-height: 400px;
            }
            .kiri{
                text-align:left;
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
                    <!-- Header--> 
                    <div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
                        <h2 class="count_h2">TOUR THE NEW BEIJING SHANGHAI HUANGSHAN</h2>
                        <h4 class="support">By : Singapore Airlines</h4>
                        <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                    </div>

                    <!-- Image--> 
                    <div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
                        <img src="{{ asset ('assets_frontend/img/11.png')}}" alt="">
                    </div>

                    <!-- Hightlight--> 
                    <div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
                      <div class="container">
                        <table width="100%"> 
                            <tr>
                                <td align="left" valign="top"><h4>HIGHLIGHT<h4></td>
                                <td valign="top">:</td>
                                <td align="left" style="padding-left: 30px;"><h4>Great Wall, Tian An Men, Forbidden City, Nanjing Road, Dll</h4></td>
                            </tr>
                            <tr>
                                <td align="left" valign="top"><h4>PERIODE</h4></td>
                                <td valign="top">:</td>
                                <td align="left" style="padding-left: 30px;"><h4>8 September 2018</h4></td>
                            </tr>
                        </table>
                      </div>
                    </div>
                    
                    <!-- Tabs--> 
                    <div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
                      <div class="container">
                        <ul class="nav nav-tabs ">
                            <li class="active"><a data-toggle="tab" href="#home"><i class="fa fa-plus-square-o"></i> Tour Detail</a></li>
                            <li><a data-toggle="tab" href="#menu1"><i class="fa fa-money"></i> Price</a></li>
                            <li><a data-toggle="tab" href="#menu2"><i class="fa fa-heart"></i> Page</a></li> 
                        </ul>

                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                                <table width="100%" class="kiri">
                                    <br>
                                    <!-- Day 1--> 
                                    <tr>
                                        <th><b>DAY 1 SURABAYA – SINGAPORE – SHANGHA  |   No Meal</b></th>
                                    </tr>

                                        <tr>
                                            <td>&nbsp;</td>
                                        </tr>
                                    
                                    <tr >
                                        <td>Berkumpul di Juanda Surabaya / Cengkareng Jakarta untuk penerbangan ke Beijing dengan transit terlebih dahulu di Singapore. Tiba di Beijing diantar ke hotel untuk istirahat.</td>
                                    </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                        </tr>

                                    <!-- Day 2-->   
                                    <tr>
                                        <th><b>DAY 2 BEIJING  |   B / L / D</b></th>
                                    </tr>

                                        <tr>
                                            <td>&nbsp;</td>
                                        </tr>
                                    
                                    <tr>
                                        <td>Tour mengunjungi Great Wall di pintu Joyungguan , Photo Stop di Bird Nest & Water Cube Building dan dilanjutkan makan malam Bebek Peking yang terkenal.</td>
                                    </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                        </tr>

                                    <!-- Day 3-->   
                                    <tr>
                                        <th><b>DAY 3 BEIJING   |  B / L / D</b></th>
                                    </tr>

                                        <tr>
                                            <td>&nbsp;</td>
                                        </tr>
                                    
                                    <tr>
                                        <td>Tour ke Tian An Men yang merupakan lapangan di pusat kota Beijing yang terkenal, kemudian ke Forbidden City yang merupakan pusat pemerintahan jaman kekaisaran, dilanjutkan ke WangFujing yang merupakan pusat pertokoan terkenal di Beijing.</td>
                                    </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                        </tr>

                                    <!-- Day 2-->   
                                    <tr>
                                        <th><b>DAY 4 BEIJING – HUANGSHAN  |  B / L / D</b></th>
                                    </tr>

                                        <tr>
                                            <td>&nbsp;</td>
                                        </tr>
                                    
                                    <tr>
                                        <td>Naik Bullet Train Ke Huangshan, tiba di Tunxi yang terletak di khaki Huangshan dan pegunungan dilanjutkan berjalan jalan di Tunxi Old Street yang merupakan pusat kota kuno di Tunxi.</td>
                                    </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                        </tr>

                                    <!-- Day 2-->   
                                    <tr>
                                        <th><b>DAY 5  HUANGSHAN |   B / L / D</b></th>
                                    </tr>

                                        <tr>
                                            <td>&nbsp;</td>
                                        </tr>
                                    
                                    <tr>
                                        <td>Menikmati keindahan Gunung Huangshan yang merupakan tempat pembuatan film Croaching Tiger Hidden Dragon yang dibintangi oleh Cho Yun Fat & Michelle Yeoh.</td>
                                    </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                        </tr>

                                    <!-- Day 2-->   
                                    <tr>
                                        <th><b>DAY 6  HUANGSHAN – SHANGHAI |   B / L / D</b></th>
                                    </tr>

                                        <tr>
                                            <td>&nbsp;</td>
                                        </tr>
                                    
                                    <tr>
                                        <td>Berkunjung ke Shanghai Fim Park yang merupakan replika Shanghai jaman kuno dan pusat pembuatan film.</td>
                                    </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                        </tr>

                                    <!-- Day 2-->   
                                    <tr>
                                        <th><b>DAY 7   SHANGHAI – SINGAPORE  |   B / L / D</b></th>
                                    </tr>

                                        <tr>
                                            <td>&nbsp;</td>
                                        </tr>
                                    
                                    <tr>
                                        <td>Tour ke The Bund-Pusat bisnis sejak jaman dulu, dilanjutkan ke Nanjing Road – Pusat Pertokoan terkemuka di Shanghai, dan Chenghuangmiao untuk melihat kota kuno Shanghai. Malam hari diantar ke Airport.</td>
                                    </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                        </tr>

                                    <!-- Day 2-->   
                                    <tr>
                                        <th><b>DAY 8 SINGAPORE – SURABAYA</b></th>
                                    </tr>

                                        <tr>
                                            <td>&nbsp;</td>
                                        </tr>
                                    
                                    <tr>
                                        <td>Transit di Singapore untuk penerbangan kembali ke Surabaya / Jakarta. Terima kasih atas kepercayaan yang diberikan kepada LAVENSIA.</td>
                                    </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                        </tr>

                                </table>
                            </div>

                            <div id="menu1" class="tab-pane fade">
                                <h3>All Auctions</h3>
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>

                            <div id="menu2" class="tab-pane fade">
                                <h3>My Saved Choices</h3>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                            </div>
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
    

    function more(argument) {
        window.location=('{{ route('package') }}');
    }

</script>
