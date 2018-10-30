<html lang="en">
<head>
    @include('layouts_frontend_2._head')
    @yield('extra_style')
</head>
<body>
    <div id="preloader">
        <div class="dorne-load"></div>
    </div>  
    <header class="header_area" id="header">
        @include('layouts_frontend_2._nav')
    </header>
    @yield('content')
    <footer class="dorne-footer-area">
        @include('layouts_frontend_2._footer')
    </footer>
    @include('layouts_frontend_2._scripts')
    @yield('extra_scripts')
</body>
</html>