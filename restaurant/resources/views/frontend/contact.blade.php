<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('img/express-favicon.png')}}" type="image/x-icon"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Hungry Eye Contact</title>

    <!-- Icon css link -->
    <link href="{{asset('vendors/material-icon/css/materialdesignicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/linears-icon/style.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Extra plugin css -->
    <link href="{{asset('vendors/bootstrap-selector/bootstrap-select.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/bootatrap-date-time/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/owl-carousel/assets/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/js-calender/zabuto_calendar.min.css')}}" rel="stylesheet">

    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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

<!--================Banner Area =================-->
<section class="banner_area">
    <div class="container">
        <div class="banner_content">
            <h4>Contact Us</h4>
            <a href="{{ route('frontend.index') }}">Home</a>
            <a class="active" href="{{ route('frontend.contact') }}">Contat Us</a>
        </div>
    </div>
</section>
<!--================End Banner Area =================-->

<!--================Contact Area =================-->
<section class="contact_area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact_details">
                    <h3 class="contact_title">Contact Info</h3>
                    {{--<p>There are many variations of passages of Lorem Ipsum available, but the majori have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a pas of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>--}}
                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>--}}
                    <div class="media">
                        <div class="media-left">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="media-body">
                            <h4>Address</h4>
                            <h5>Kanya Marga, Biratnagar</h5>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h4>Phone</h4>
                            <h5>021568976</h5>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="media-body">
                            <h4>Email</h4>
                            <h5>pu@gmail.com</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row contact_form_area">
                    <h3 class="contact_title">Send Message</h3>
                    <form action="{{ route('contact.send') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group col-md-12">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name*">
                        </div>
                        <div class="form-group col-md-12">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email*">
                        </div>
                        <div class="form-group col-md-12">
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                        </div>
                        <div class="form-group col-md-12">
                            <textarea class="form-control" id="message" name="message"
                                      placeholder="Write Message"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <button class="btn btn-default submit_btn" type="submit" name="submit" id="submit">Send
                                Message
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Contact Area =================-->

<!--================Map Area =================-->
{{--<div id="mapBox" class="mapBox row m0"--}}
{{--data-lat="26.4667"--}}
{{--data-lon="82.2667"--}}
{{--data-zoom="10"></div>--}}
<div class="mapouter">
    <div class="gmap_canvas">
        <iframe width="1500" height="500" id="gmap_canvas"
                src="https://maps.google.com/maps?q=Kanya%20marga&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                scrolling="no" marginheight="0" marginwidth="0"></iframe>
        <a href="https://www.maps-erstellen.de"></a>
    </div>
    <style>.mapouter {
            position: relative;
            text-align: right;
            height: 500px;
            width: 1500px;
        }

        .gmap_canvas {
            overflow: hidden;
            background: none !important;
            height: 500px;
            width: 1500px;
        }</style>
</div>
<!--================End Map Area =================-->

<!--================End Recent Blog Area =================-->
@include('frontend.layout.footer')
<!--================End Recent Blog Area =================-->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- Extra plugin js -->
<script src="{{asset('vendors/bootstrap-selector/bootstrap-select.js')}}"></script>
<script src="{{asset('vendors/bootatrap-date-time/bootstrap-datetimepicker.min.js')}}"></script>
<script src="{{asset('vendors/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('vendors/isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('vendors/countdown/jquery.countdown.js')}}"></script>
<script src="{{asset('vendors/js-calender/zabuto_calendar.min.js')}}"></script>
<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="{{asset('js/gmaps.min.js')}}"></script>

<!-- contact js -->
<script src="{{asset('js/jquery.form.js')}}"></script>
<script src="{{asset('js/jquery.validate.min.js')}}"></script>
<script src="{{asset('js/contact.js')}}"></script>

<script src="{{asset('js/video_player.js')}}"></script>
<script src="{{asset('js/theme.js')}}"></script>
</body>
</html>