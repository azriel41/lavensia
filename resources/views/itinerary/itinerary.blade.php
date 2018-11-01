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
                  <div class="col-12">
                    <div class="about-content text-center">
                        <h4>Itinerary<br><span>Detail</span></h4>
                        <br>
                        <br>
                        <br>
                    </div>
                </div>
                
                    <div class="container-fluid">
                        @foreach ($intinerary as $index => $iti)
                        <div class="col-md-3 col-md-6 col-m-12 ftco-animate">
                            <div class="destination">
                                <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="border: 1px solid #e6e6e6;background-image: url({{  asset('storage/app/'.$intinerary->mi_image)  }}?{{ time() }});">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                                <div class="text p-3">
                                    <div class="d-flex">
                                        <div>
                                            <span class="price" style="color: #1872bf"><b>{{ $intinerary[$index]['mi_name'] }}</b></span>
                                        </div>
                                    </div>
                                    <br>
                                    <p>{{ $intinerary[$index]['mi_highlight'] }}</p>
                                    {{-- <p class="days"><span>2 days 3 nights</span></p> --}}
                                    <hr>
                                    <p class="bottom-area d-flex">
                                        <span><i class="icon-map-o"></i> San Franciso, CA</span> 
                                        <span class="ml-auto"><button class="btn btn-small btn-book" data-id="{{ $intinerary[$index]['mi_id'] }}" onclick="more(this)"><b>See More!</b></button></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
            </div>          
        </div>
    </section>
</section>
@endsection

@section('extra_scripts')
<script src="{{ asset('js/main.js') }}"></script>

    
@endsection 


