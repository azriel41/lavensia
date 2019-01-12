@extends('layouts_frontend_2._main')  

@section('content')
    {{-- <div <center></center>lass="breadcumb-area bg-img bg-overlay" style="background-image: url(../assets/img/bg-img/hero-1.jpg)"> --}}
    <div class="breadcumb-area bg-img bg-overlay" style="height: 400px !important;background-image: url({{ asset('storage/app/company/bg-4.jpg') }})">
    </div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Contact Area Start ***** -->
    <div class="dorne-contact-area d-md-flex" id="contact">
        
        <div class="contact-form-area equal-height">
            <div class="text-center">
                <h2>About us</h2>   
            </div>
            <br>
            <div class="contact-text">
                <p><h4> {{  $contact[0]->mc_name }}</h4></p>
                <p>{!! $contact[0]->mc_isi !!} </p>
            </div> 
        </div>
    </div>
@endsection

@section('extra_scripts')

    <script type="text/javascript">
    </script>

    
@endsection 
