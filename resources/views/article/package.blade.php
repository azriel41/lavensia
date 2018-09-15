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
                color: black !important; 
                background: transparent !important; 
            }
            .nav-tabs > li > a::after {
                content: ""; 
                background: #1d42fc; 
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
                     <!-- Header--> 
                    @if (Session::has('message'))
                        <div class="col-md-12" style="min-height: 100px">
                                <div class="alert alert-danger alert-dismissable" style="animation: fadein 0.5s, fadeout 0.5s 2.5s;">
                                  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                  <h2 style="text-align:left"><h4 style="text-align:center">{{ Session::get('message') }}</h4>
                                </div>
                        </div>
                    @endif
                    <!-- Image--> 
                </div>
                <div class="row mb50 margin_top_-40px">
                    <div class="sec-sub-title text-center wow fadeInUp  animated" data-wow-duration="1000ms">
                      <div class="container">
                        <div class="col-md-12">
                             <p>
                                 Welcome to your blog post. Use this space to connect with your readers and potential customers in a way that’s current and interesting. Think of it as an ongoing conversation where you can share updates about business, trends, news, and more. 

                                Design with Ease
                                “Do you have a design in mind for your blog? Whether you prefer a trendy postcard look or you’re going for a more editorial style blog - there’s a stunning layout for everyone.” 
                                Every layout comes with the latest social features built in. Readers will be able to easily share posts on social networks like Facebook and Twitter, view how many people have liked a post, made comments and more. With the Wix, building your online community has never been easier.

                                Create Relevant Content
                                You’ll be posting loads of engaging content, so be sure to keep your blog organized with Categories that also allow readers to explore more of what interests them. Each category of your blog has its own page that’s fully customizable. Add a catchy title, a brief description and a beautiful image to the category page header to truly make it your own. You can also add tags (#vacation #dream #summer) throughout your posts to reach more people, and help readers search for relevant content. Using hashtags can expand your post reach and help people find the content that matters to them. Go ahead, #hashtag away.

                                Stun Your Readers 
                                “Be original, show off your style, and tell your story.”
                                Blogging gives your site a voice, so let your business’ personality shine through. Are you a creative agency? Go wild with original blog posts about recent projects, cool inspirational ideas, or what your company culture is like. Add images, and videos to really spice it up, and pepper it with slang to keep readers interested. Are you a programmer? Stay on the more technical side by offering weekly tips, tricks, and hacks that show off your knowledge of the industry. No matter what type of business you have, one thing is for sure - blogging gives your business the opportunity to be heard in a way in a different and unconventional way.  

                                Get Inspired
                                To keep up with all things Wix, including website building tips and interesting articles, head over to to the Wix Blog. You may even find yourself inspired to start crafting your own blog, adding unique content, and stunning images and videos. Start creating your own blog now. Good luck!
                             </p>
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
