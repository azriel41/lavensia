  <div class="container-fluid">
    @foreach ($intinerary as $index => $iti)
    <div class="col-md-3 col-md-6 col-m-12 ftco-animate">
        <div class="destination">
            <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="border: 1px solid #e6e6e6;background-image: url({{  asset('storage/app/'.$iti->mi_image)  }}?{{ time() }});">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search2"></span>
                </div>
            </a>
            <div class="text p-3">
                <div class="d-flex">
                    <div>
                        <span class="price" style="color: #1872bf"><b>{{ $iti->mi_name }}</b></span>
                    </div>
                </div>
                <br>
                <p>{{ $iti->mi_highlight }}</p>
                {{-- <p class="days"><span>2 days 3 nights</span></p> --}}
                <hr>
                <p class="bottom-area d-flex">
                    <span><i class="icon-map-o"></i> San Franciso, CA</span> 
                    <span class="ml-auto"><button class="btn btn-small btn-book" data-id="{{ $iti->mi_id }}" onclick="more(this)"><b>See More!</b></button></span>
                </p>
            </div>
        </div>
    </div>
    @endforeach
</div>