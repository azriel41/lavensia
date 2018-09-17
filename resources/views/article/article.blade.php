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
                                    <th><h2><b>{{ $data->da_header }}</b></h2></th>
                                 </tr>
                                 
                                 <tr>
                                    <th><h5>{{ date('d M Y',strtotime($data->da_created_at)) }} By {{ $data->da_created_by }}</h5></th>
                                 </tr>
                                 <tr>
                                    <th>&nbsp;</th>
                                 </tr>
                                 <tr>
                                     <td><img src="{{ asset('/storage/app/article/'.'article-'.$data->da_image) }}?{{ time() }}" class="img-responsive"></td>
                                 </tr>
                             </table>
                             <table width="95%">
                                 <tr>
                                    <th>&nbsp;</th>
                                 </tr>
                                 <tr>
                                     <td>
                                         {!! $data->da_desc !!}
                                     </td>
                                 </tr>
                             </table>
                        </div>
                        <div class="col-md-3">
                            <table width="100%">
                                <tr>
                                    <th> <h3>NEWS ARTICLE</h3> </th>
                                    <td><hr></td>
                                </tr>
                            </table>
                            @foreach ($news as $e)
                                <img src="{{ asset('/storage/app/article/'.'article-'.$e->da_image) }}?{{ time() }}" class="img-responsive">
                                 <b style="font-size: 13px;"><a href="{{ asset('/article/article/'.$e->da_show) }}">{{ substr(strip_tags($e->da_header), 0,30) }}{{ strlen($e->da_header) > 2 ?  ".." : "" }}</a></b>
                                <hr>
                                <br>
                            @endforeach
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
