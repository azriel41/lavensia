<!DOCTYPE html>
<html>
    <head>
        @include('layouts._head')
        @yield('extra_styles')
    </head>


    <body class="theme-red">
    @include('layouts._sidebar')
       <section class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </section>  
    </body>
    
</html>
@include('layouts._scripts')
@yield('extra_scripts')