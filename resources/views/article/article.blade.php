@extends('layouts_frontend_2._main')  

@section('extra_style')
<link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}"/>
<style type="text/css">
    .sticky-shares a{
      border: none;
    }
    
</style>
@endsection

@section('content')
<section class="dorne-features-events-area bg-img bg-overlay-9 section-padding-100-50" style="background-image: url({{ asset('assets_frontend_2/img/bg-img/hero-3.jpg') }})">
        <section class="ftco-section bg-light">
        <div class="container-fluid">
                <div class="row justify-content-start mb-5 pb-3">
                    <div class="container-fluid">
                       <div class="col-md-8">
            <div class="section-row sticky-container">
              <div class="main-post">
                <h2>{{ $article[0]->da_header }}</h2>
                <p>{!! $article[0]->da_desc !!}</p>
              </div>
              <div class="post-shares sticky-shares">
                <a href="#" class="share-facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="share-twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="share-google-plus"><i class="fa fa-google-plus"></i></a>
                <a href="#" class="share-pinterest"><i class="fa fa-pinterest"></i></a>
                <a href="#" class="share-linkedin"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-envelope"></i></a>
              </div>
            </div>

            <!-- ad -->
            <div class="section-row text-center">
              <a href="#" style="display: inline-block;margin: auto;">
                <img class="img-responsive" src="./img/ad-2.jpg" alt="">
              </a>
            </div>
          </div>
          <!-- /Post content -->
          <!-- aside -->
          <div class="col-md-4">
            <!-- ad -->
            <div class="text-center">
              <a href="#" style="display: inline-block;margin: auto;">
                <img class="img-responsive" src="./img/ad-1.jpg" alt="">
              </a>
            </div>
         
            <div class="">
              <div class="section-title">
                <h2>Like us on Facebook</h2>
              </div>
              <div id="fb-root">
                                <div class="fb-page" data-href="https://www.facebook.com/Oke-Tripcom-233135077356613/?modal=admin_todo_tour" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/lavensiatourtravel" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/lavensiatourtravel">Lavensia Tour &amp; Travel</a></blockquote></div>
                            </div>
                            <br>
              <div class="section-title">
                <h2>Featured Posts</h2>
              </div>
             
             @foreach ($news as $e)
              <div class="post post-thumb">
                <a class="post-img" href="{{ asset('/article/article/'.$e->da_id) }}"><img src="{{ asset('/storage/app/article/'.'article-'.$e->da_image) }}?{{ time() }}" alt=""></a>
                <div class="post-body">
                  <div class="post-meta">
                    <a class="post-category cat-2" href="#">{{ date('d M y',strtotime($e->da_created_at)) }}</a>
                    {{-- <span class="post-date">{{ date('d-M-y',strtotime($e->da_created_at)) }}</span> --}}
                  </div>
                  <h3 class="post-title"><a href="{{ asset('/article/article/'.$e->da_id) }}">{{ $e->da_header }}</a></h3>
                </div>
              </div>
             @endforeach
            </div>
            <!-- /post widget -->
            
            <!-- catagories -->
           {{--  <div class="aside-widget">
              <div class="section-title">
                <h2>Catagories</h2>
              </div>
              <div class="category-widget">
                <ul>
                  <li><a href="#" class="cat-1">Web Design<span>340</span></a></li>
                  <li><a href="#" class="cat-2">JavaScript<span>74</span></a></li>
                  <li><a href="#" class="cat-4">JQuery<span>41</span></a></li>
                  <li><a href="#" class="cat-3">CSS<span>35</span></a></li>
                </ul>
              </div>
            </div>
            <!-- /catagories -->
            
            <!-- tags -->
            <div class="aside-widget">
              <div class="tags-widget">
                <ul>
                  <li><a href="#">Chrome</a></li>
                  <li><a href="#">CSS</a></li>
                  <li><a href="#">Tutorial</a></li>
                  <li><a href="#">Backend</a></li>
                  <li><a href="#">JQuery</a></li>
                  <li><a href="#">Design</a></li>
                  <li><a href="#">Development</a></li>
                  <li><a href="#">JavaScript</a></li>
                  <li><a href="#">Website</a></li>
                </ul>
              </div>
            </div>
            <!-- /tags -->
            
            <!-- archive -->
            <div class="aside-widget">
              <div class="section-title">
                <h2>Archive</h2>
              </div>
              <div class="archive-widget">
                <ul>
                  <li><a href="#">January 2018</a></li>
                  <li><a href="#">Febuary 2018</a></li>
                  <li><a href="#">March 2018</a></li>
                </ul>
              </div>
            </div> --}}
            <!-- /archive -->
          </div>
              </div>
            </div>          
        </div>
    </section>
</section>
@endsection

@section('extra_scripts')
 <script>(function(d, s, id) {
                              var js, fjs = d.getElementsByTagName(s)[0];
                              if (d.getElementById(id)) return;
                              js = d.createElement(s); js.id = id;
                              js.src = 'https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v3.2';
                              fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));</script>
<script src="{{ asset('js/main.js') }}"></script>

    
@endsection 


