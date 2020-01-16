@extends('frontend.layout.app')

@section('title','Reservation')

@section('content')
    <section class="banner_area">
        <div class="container">
            <div class="banner_content">
                <h4>Make Your Reservation Now</h4>
                <a href="{{ route('frontend.index') }}">Home</a>
                <a class="active" href="{{ route('frontend.table') }}">Reservation</a>
            </div>
        </div>
    </section>
    <!--================End Banner Area =================-->

    <!--================Booking Table Area =================-->
    <section class="booking_table_area booking_area_white">
        <div class="container">
            <div class="s_black_title">
                <h3>Book a</h3>
                <h2>Table</h2>
                <p>Make Your Reservation Now.</p>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <form action="{{ route('reservation.reserve') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                                    @if ($errors->has('username'))
                                        <p class="error alert alert-danger">{{ $errors->first('username') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <strong>Email:</strong>
                                    <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                                    @if ($errors->has('email'))
                                        <p class="error alert alert-danger">{{ $errors->first('email') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <strong>Phone:</strong>
                                    <input type="text" name="phone" id="phone" class="form-control"
                                           placeholder="Phone no">
                                    @if ($errors->has('phone'))
                                        <p class="error alert alert-danger">{{ $errors->first('phone') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group input-append date form_datetime">
                                    <strong>Date:</strong>
                                    <input size="16" type="text" name="dateandtime" value="" readonly
                                           placeholder="Date">
                                    <span class="add-on"><i class="icon-th"></i></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <button type="submit" name="submit" id="submit" class="btn btn-default submit_btn">
                                    Reservation
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row map_contact">
                <div class="col-md-6">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe width="500" height="500" id="gmap_canvas"
                                    src="https://maps.google.com/maps?q=Kanya%20marga&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            <a href="https://www.maps-erstellen.de"></a>
                        </div>
                        <style>.mapouter {
                                position: relative;
                                text-align: right;
                                height: 500px;
                                width: 500px;
                            }

                            .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                height: 500px;
                                width: 500px;
                            }</style>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="map_contact_info">
                        <h3>Contact Information</h3>
                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor utim labore et--}}
                            {{--dolore magna aliqua. Ut enim ad minim veniam.</p>--}}
                        <ul>
                            <li><a href="#"><span>Address:</span>Hungry Eye Restaurant, Kanya Marga, Biratnagar</a></li>
                            <li><a href="#"><span>Phone:</span>021528692</a></li>
                            <li><a href="#"><span>Email:</span>anshumallik@gmail.com</a></li>
                        </ul>
                        <h4>Opening Times</h4>
                        <h5>Sunday - Thursday  9am - 10pm</h5>
                        <h5>Friday  2pm - 1am | Sunday  2pm - 1am</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection