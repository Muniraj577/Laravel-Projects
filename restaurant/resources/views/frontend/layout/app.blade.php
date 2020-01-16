<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('img/restaurant.png') }}" type="image/x-icon"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Hungry Eye @yield('title')</title>
    <!-- Icon css link -->
    <link href="{{asset('vendors/material-icon/css/materialdesignicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/linears-icon/style.css') }}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Rev slider css -->
    <link href="{{ asset('vendors/revolution/css/settings.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/revolution/css/layers.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/revolution/css/navigation.css') }}" rel="stylesheet">
    <!-- Extra plugin css -->
    <link href="{{ asset('vendors/bootstrap-selector/bootstrap-select.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/bootatrap-date-time/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/owl-carousel/assets/owl.carousel.css') }}" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    @stack('css')
</head>
<body>

<div id="preloader">
    <div class="loader absolute-center">
        <div class="loader__box"><b class="top"></b></div>
        <div class="loader__box"><b class="top"></b></div>
        <div class="loader__box"><b class="top"></b></div>
    </div>
</div>

@include('frontend.layout.header')
@yield('content')
@include('frontend.layout.footer')
<!--================End Recent Blog Area =================-->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- Rev slider js -->
<script src="{{ asset('vendors/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('vendors/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('vendors/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
<script src="{{ asset('vendors/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('vendors/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('vendors/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<!-- Extra plugin js -->
<script src="{{ asset('vendors/bootstrap-selector/bootstrap-select.js') }}"></script>
<script src="{{ asset('vendors/bootatrap-date-time/bootstrap-datetimepicker.min.js') }}"></script>
<script src="{{ asset('vendors/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('vendors/isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{asset('vendors/countdown/jquery.countdown.js')}}"></script>
<script src="{{ asset('vendors/js-calender/zabuto_calendar.min.js') }}"></script>

<script src="{{ asset('js/theme.js') }}"></script>
{!! Toastr::message() !!}
@stack('scripts')
</body>
</html>