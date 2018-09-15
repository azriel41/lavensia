@if (Route::has('login'))
        @if (Auth::check())
        <footer id="footer" class="footer">
            <div class="container">
                <div class="row">
                
                    <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms">
                        <div class="footer-single">
                            {{-- <img src="{{ asset ('assets_frontend/img/logo.png')}}" alt="" width="70%"> --}}
                            <h6>Contact Us </h6>

                            <table width="100%">
                                <tr>
                                    <td width="20%" valign="top"><i class="fa fa-map-marker"></i> Address</td>
                                    <td width="10%" valign="top">:</td>
                                    <td>Jl. Nginden Intan Raya No. 7 <br> Surabaya - 60118 Indonesia</td>
                                </tr>
                                    <td><i class="fa fa-phone-square"></i> Phone</td>
                                    <td>:</td>
                                    <td>62 31 5992855</td>
                                <tr>
                                    <tr>
                                    <td><i class="fa fa-fax"></i> Fax</td>
                                    <td>:</td>
                                    <td>62 31 5982855</td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-whatsapp"></i> HP / WA</td>
                                    <td>:</td>
                                    <td>081 2170 5888</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>0812 2164 8511</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>0878 7878 5394</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>0878 5520 8055</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                
                    <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="footer-single">
                            <h6>Contact Us </h6>
                            <table width="100%">
                                <tr>
                                    <td width="25%"><i class="fa fa-globe"></i> Web</td>
                                    <td width="10%">:</td>
                                    <td><a href="www.lavensia.com"></a>www.lavensia.com</td>
                                </tr>
                                    <td><i class="fa fa-envelope-o"></i> E-mail</td>
                                    <td>:</td>
                                    <td>lavensiatour@yahoo.com</td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-facebook-square"></i> Facebook</td>
                                    <td>:</td>
                                    <td>Lavensia Tour & Travel</td>
                                </tr>
                            </table>
                            </p>
                        </div>
                    </div>
                
                    <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="footer-single">
                            <h6>Bank Account </h6>
                            <table width="100%">
                                <tr>
                                    <td valign="top"> BCA</td>
                                    <td valign="top">:</td>
                                    <td>Threescia Irawan <br> 088 – 1573163</td>
                                </tr>
                                <tr>
                                    <td valign="top"> MANDIRI</td>
                                    <td valign="top">:</td>
                                    <td>Lukman Hartono <br> 088 – 1573163</td>
                                </tr>
                            </table>
                            
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="copyright text-center">
                            Copyright © 2018 <a href="http://lavensia.com/"><b style="color:yellow">LV Media</b></a>. All rights reserved. Designed & developed by <a href="http://esensicreative.com/"><b style="color:white">Esensi Creative</b></a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        @else
        
        @endif
@endif
