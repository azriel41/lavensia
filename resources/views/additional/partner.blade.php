@extends('layouts_frontend_2._main')  

@section('content')
    <div class="breadcumb-area bg-img bg-overlay" style="height: 400px !important;background-image: url({{ asset('storage/app/company/bg-9.jpg') }})">
    </div>
    <section class="dorne-listing-destinations-area section-padding-100-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading dark text-center">
                        <span></span>
                        <h4>Meet Our Agent</h4>
                        <p>Best Agent</p>
                    </div>
                </div>
            </div>
          
            <div class="row">
                <div class="col-sm-12 d-flex justify-content-around" style="margin-bottom: 20px;">
                    <select class="form-control city select2" style="width: 35%;margin-top: 5px;" onchange="changeCity()">
                        <option selected="" value="">Search Area</option>
                        @foreach ($city as $c => $d)
                            <option value="{{ $d->id }}">{{ $d->city}}</option>
                        @endforeach
                    </select>
                </div>
                <!-- Single Features Area -->
                <div class="appendPartner" style="width: 100%">
                    @foreach ($data as $e)
                    <div class="col-sm-4">
                        <div class="single-features-area mb-50">
                            @if ($e->image != null)
                                <img src="{{ asset('storage/app/agent/agent-'.$e->image) }}" alt="Team Member" style="height: 40% !important" class="agent">
                            @else
                                <img src="{{ asset('storage/app/NoImage'.'.png') }}" alt="Team Member" style="height: 40% !important" class="agent">
                            @endif
                            <!-- Price -->
                            <div class="feature-content d-flex align-items-center justify-content-between">
                                <div class="feature-title">
                                    @if ($e->co_name != null)
                                        <h5>{{$e->co_name }}</h5>
                                    @else
                                        <h5> - </h5>
                                    @endif
                                    <br>

                                    <p>
                                    {{ $e->co_address }}
                                        <br>
                                    {{ $e->co_phone }}
                                    </p>
                                </div>
                                <div class="feature-favourite">
                                    {{-- <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


                        <!-- Single Features Area -->

@endsection

@section('extra_scripts')
    <script type="text/javascript">
        $('.select2').select2();

        function changeCity() {
            $.ajax({
                url:'{{ route('partner_data') }}',
                data:{city: function() { return $('.city').val()}},
                success:function(data){
                    $('.appendPartner').html(data);
                },error:function(){
                    changeCity();
                }
            })
        }

    </script>
@endsection 
