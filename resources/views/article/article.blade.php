 <!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <!-- meta charec set -->
       
        @include('layouts_frontend._head')
       
        <style type="text/css">
            
            .mb50 .package{
                margin-top: 60px;
                background-color: white;
            }
            .gg {
                background-color: white;
            }
            .img-responsive {
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
        <div class="mb50"> 
        <section id="package" class="package background_page">
            <div class="container">
                <div class="row gg" >
                    <div class="sec-sub-title text-center wow fadeInUp  animated" data-wow-duration="1000ms">
                      <div class="container">
                        <div class="col-md-9" style="border-right: 1px solid #ddd;">
                             <table width="100%" >
                                 <tr>
                                    <th><h2><b>The Winning Team</b></h2></th>
                                 </tr>
                                 
                                 <tr>
                                    <th><h5>15 August 2018 By Asep Hidayat</h5></th>
                                 </tr>
                                 <tr>
                                    <th>&nbsp;</th>
                                 </tr>
                                 <tr>
                                     <td><img src="{{ asset('/assets_frontend/img/team/4.jpg') }}" class="img-responsive"></td>
                                 </tr>
                             </table>
                             <table width="95%">
                                 <tr>
                                    <th>&nbsp;</th>
                                 </tr>
                                 <tr>
                                     <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;Welcome to your blog post. Use this space to connect with your readers and potential customers in a way that’s current and interesting. Think of it as an ongoing conversation where you can share updates about business, trends, news, and more. </td>
                                 </tr>
                                 <tr>
                                     <td>&nbsp;</td>
                                 </tr>
                                 <tr>
                                     <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;Design with Ease
                                     “Do you have a design in mind for your blog? Whether you prefer a trendy postcard look or you’re going for a more editorial style blog - there’s a stunning layout for everyone.” 
                                     Every layout comes with the latest social features built in. Readers will be able to easily share posts on social networks like Facebook and Twitter, view how many people have liked a post, made comments and more. With the Wix, building your online community has never been easier.</td>
                                 </tr>
                                 <tr>
                                     <td>&nbsp;</td>
                                 </tr>
                                 <tr>
                                     <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;Create Relevant Content
                                    You’ll be posting loads of engaging content, so be sure to keep your blog organized with Categories that also allow readers to explore more of what interests them. Each category of your blog has its own page that’s fully customizable. Add a catchy title, a brief description and a beautiful image to the category page header to truly make it your own. You can also add tags (#vacation #dream #summer) throughout your posts to reach more people, and help readers search for relevant content. Using hashtags can expand your post reach and help people find the content that matters to them. Go ahead, #hashtag away.
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>&nbsp;</td>
                                 </tr>
                                 <tr>
                                     <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;Stun Your Readers 
                                    “Be original, show off your style, and tell your story.”
                                    Blogging gives your site a voice, so let your business’ personality shine through. Are you a creative agency? Go wild with original blog posts about recent projects, cool inspirational ideas, or what your company culture is like. Add images, and videos to really spice it up, and pepper it with slang to keep readers interested. Are you a programmer? Stay on the more technical side by offering weekly tips, tricks, and hacks that show off your knowledge of the industry. No matter what type of business you have, one thing is for sure - blogging gives your business the opportunity to be heard in a way in a different and unconventional way.  </td>
                                 </tr>
                             </table>
                        </div>
                        <div class="col-md-3">
                            <table width="100%">
                                <tr>
                                    <th> <h3>NEWS ARTICLE</h3> </th>
                                    <td><hr></td>
                                </tr>
                                <tr>
                                    <td>a</td>
                                </tr>
                            </table>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </section>
        </div>
        <!--
        End Contact Us
        ==================================== -->
        
        
        @include('layouts_frontend._footer')
        
        
        <a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>

        @include('layouts_frontend._scripts')
        
    </body>
</html>

<script type="text/javascript">
    

    
    function booking(id) {
        var rand1 = '{{ md5('Demi yang Maha Pengasih Lagi Maha Penyayang Bagi Sang Pencipta Alam Semesta').rand(1,1000000) }}';
        var rand2 = '{{ md5('Dengan Nama Allah Yang Maha Pengasih Lagi Maha Penyayang').rand(1,1000000) }}';
        var rand3 = '{{ md5('Segala Puji Bagi Allah Tuhan Seru Sekalian Alam').rand(1,1000000)}}';
        window.location=('{{ url('booking/booking') }}'+'?rand='+rand1+'&rand2='+rand2+'&rand3='+rand3+'&id='+id);
    }
    window.onload = function(){
       $('#pdf').click(function(){
            var parent = $(this).data('id');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                data : {id:parent},
                url  : ('{{ route('package_pdf') }}'),
                type : 'get',
                success: function (data) {
                    iziToast.success({
                        icon: 'fa fa-user',
                        title: 'Success!',
                        message: 'Downloaded!',
                    });
                },
                complete: function(data){
                    window.location.href = this.url;
                },
                error:function(){
                    iziToast.error({
                        icon: 'fas fa-times-circle',
                        title: 'Error!',
                        message: 'Something Wrong,Call Developer',
                    });
                }
            })
        })
       }
   
            
    
    
</script>
