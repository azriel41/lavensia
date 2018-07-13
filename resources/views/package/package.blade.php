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
              text-align: left;
              vertical-align: middle;
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
                        <h2 class="count_h2">TOUR THE NEW BEIJING SHANGHAI HUANGSHAN</h2>
                        <h4 class="support">By : Singapore Airlines</h4>
                        <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                    </div>

                    <!-- Image--> 
                    <div class="sec-sub-title text-center wow fadeInUp  animated" data-wow-duration="1000ms">
                        <img src="{{ asset ('assets_frontend/img/11.png')}}" alt="">
                    </div>

                    <!-- Hightlight--> 
                    <div class="sec-sub-title text-center wow fadeInUp  animated" data-wow-duration="1000ms">
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
                            <tr>
                                <td align="left" valign="top"><h4>SEAT REMAIN</h4></td>
                                <td valign="top">:</td>
                                <td align="left" style="padding-left: 30px;"><h4>40</h4></td>
                            </tr>
                        </table>
                      </div>
                    </div>
                    
                    <div class="sec-sub-title text-center wow fadeInUp  animated" data-wow-duration="1000ms">
                            <div class="container">
                                <button class="btn btn-small btn-book" onclick="keranjang()"><b><i class="fa fa-shopping-cart"></i> Masuk Keranjang !</b></button>
                                <button class="btn btn-small btn-book" onclick="book()" data-toggle="modal" data-target="#myModal"><b><i class="fa fa-share-square-o"></i> Book Now!</b></button>
                            </div>
                    </div>

                    <!-- Tabs--> 
                    <div class="sec-sub-title text-center wow fadeInUp  animated" data-wow-duration="1000ms">
                      <div class="container">
                        <ul class="nav nav-tabs ">
                            <li class="active"><a data-toggle="tab" href="#home"><i class="fa fa-plus-square-o"></i> Tour Detail</a></li>
                            <li><a data-toggle="tab" href="#menu1"><i class="fa fa-money"></i> Price</a></li>
                            <li><a data-toggle="tab" href="#menu2"><i class="fa fa-heart"></i> Agent Price</a></li> 
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
                                <table width="100%" class="kiri">
                                    <tr>
                                        <th><b>PERIODE</b></th>
                                        <th><b>Dewasa</b></th>
                                        <th><b>Single Sup</b></th>
                                    </tr>
                                    <tr>
                                        <th><b>8 Sep 2018</b></th>
                                        <th><b>Rp 12.599.000,-</b></th>
                                        <th><b>Rp 1.500.000,-</b></th>
                                    </tr>
                                    
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                </table>
                                <table width="100%" class="kiri">
                                    <tr>
                                        <td width="20%" valign="top">Harga Termasuk</td>
                                        <td width="2%" valign="top">:</td> 
                                        <td>SUDAH Tiket kelas Ekonomi Singapore Airlines sesuai rute diatas dengan bagasi 30 kgs per orang Akomodasi l l , Makan & Tour sesuai dengan jadwal acara Tiket masuk lokasi wisata sesuai yang tertera di jadwal acara Tiket masuk pertunjukan sesuai jadwal acara Tips Guide dan Dr l l iver.</td>
                                    </tr>

                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>

                                    <tr>
                                        <td valign="top">Harga Termasuk</td>
                                        <td valign="top">:</td> 
                                        <td>BELUM Biaya engurusan Visa China Rp. 600.000 Pengeluaran Pribadi seperti Mini Bar, Telepon, Laundry dll. Tips Porter di hotel Tour Tambahan di luar jadwal acara.</td>
                                    </tr>

                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>

                                    <tr>
                                        <td valign="top">Shopping Stops</td>
                                        <td valign="top">:</td> 
                                        <td>Lavensia Tour adalah shopping tour, harga tour disubsidi dari Shopping Stops. Setiap peserta diminta kerjasamanya untuk bisa mengunjungi Shopping Stops minimal selama 60 menit di setiap shopping stops untuk menghindari penalti dari subsidi yang telah di berikan.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>

                                    <tr>
                                        <td valign="top">Deposit, Pembayaran & Pembatalan</td>
                                        <td valign="top">:</td> 
                                        <td>Deposit Rp. 5,000,000 per orang, dibayarkan pada saat pemesanan Pelunasan harus dilakukan minimal 1 bulan sebelum keberangkatan Pembatalan setelah deposit tidak dapat dilakukan Pembatalan 1 bulan sebelum keberangkatan, deposit akan hangus Pembatalan 2 minggu / kurang sebelum keberangkatan, seluruh pembayaran hangus Daftar hotel dan jadwal tour dapat berubah tanpa mengurangi isi daripada tour Bila peserta kurang dari 15 orang, penyelenggara berhak membatalkan tour, dan seluruh pembayaran akan dikembalikan Peserta wajib mengikuti seluruh acara tour, apabila ada sebagian seluruh acara tour yang tidak diikuti, kemungkinan akan dikenakan penalti..</td>
                                    </tr>


                                </table>
                                
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                            </div>

                            <div id="menu2" class="tab-pane fade">
                                <table width="100%" class="kiri">
                                    <tr>
                                        <th><b>PERIODE</b></th>
                                        <th><b>Dewasa</b></th>
                                        <th><b>Single Sup</b></th>
                                    </tr>
                                    <tr>
                                        <th><b>8 Sep 2018</b></th>
                                        <th><b>Rp 12.599.000,-</b></th>
                                        <th><b>Rp 1.500.000,-</b></th>
                                    </tr>
                                    
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                </table>
                                <table width="100%" class="kiri">
                                    <tr>
                                        <td width="20%" valign="top">Harga Termasuk</td>
                                        <td width="2%" valign="top">:</td> 
                                        <td>SUDAH Tiket kelas Ekonomi Singapore Airlines sesuai rute diatas dengan bagasi 30 kgs per orang Akomodasi l l , Makan & Tour sesuai dengan jadwal acara Tiket masuk lokasi wisata sesuai yang tertera di jadwal acara Tiket masuk pertunjukan sesuai jadwal acara Tips Guide dan Dr l l iver.</td>
                                    </tr>

                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>

                                    <tr>
                                        <td valign="top">Harga Termasuk</td>
                                        <td valign="top">:</td> 
                                        <td>BELUM Biaya engurusan Visa China Rp. 600.000 Pengeluaran Pribadi seperti Mini Bar, Telepon, Laundry dll. Tips Porter di hotel Tour Tambahan di luar jadwal acara.</td>
                                    </tr>

                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>

                                    <tr>
                                        <td valign="top">Shopping Stops</td>
                                        <td valign="top">:</td> 
                                        <td>Lavensia Tour adalah shopping tour, harga tour disubsidi dari Shopping Stops. Setiap peserta diminta kerjasamanya untuk bisa mengunjungi Shopping Stops minimal selama 60 menit di setiap shopping stops untuk menghindari penalti dari subsidi yang telah di berikan.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>

                                    <tr>
                                        <td valign="top">Deposit, Pembayaran & Pembatalan</td>
                                        <td valign="top">:</td> 
                                        <td>Deposit Rp. 5,000,000 per orang, dibayarkan pada saat pemesanan Pelunasan harus dilakukan minimal 1 bulan sebelum keberangkatan Pembatalan setelah deposit tidak dapat dilakukan Pembatalan 1 bulan sebelum keberangkatan, deposit akan hangus Pembatalan 2 minggu / kurang sebelum keberangkatan, seluruh pembayaran hangus Daftar hotel dan jadwal tour dapat berubah tanpa mengurangi isi daripada tour Bila peserta kurang dari 15 orang, penyelenggara berhak membatalkan tour, dan seluruh pembayaran akan dikembalikan Peserta wajib mengikuti seluruh acara tour, apabila ada sebagian seluruh acara tour yang tidak diikuti, kemungkinan akan dikenakan penalti..</td>
                                    </tr>


                                </table>
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
