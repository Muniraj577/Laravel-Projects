@extends('frontend.layout.app')

@section('title','Home')

@section('content')
    <section class="slider_area">
        <div class=slider_inner>
            <div class="rev_slider fullwidthabanner" data-version="5.3.0.2" id="home-slider">
                <ul>
                    @foreach($sliders as $slider)
                        <li data-slotamount="7" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut"
                            data-masterspeed="600" data-rotate="0" data-saveperformance="off">
                            <!-- MAIN IMAGE -->
                            <img src="{{ url('images/slider/'.$slider->image) }}" alt=""
                                 data-bgposition="center center"
                                 data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg"
                                 data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="slider_text_box">
                                <div class="tp-caption bg_box"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-x="center"
                                     data-y="['350','350','300','250','0']"
                                     data-fontsize="['55']"
                                     data-lineheight="['60']"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:0px;"
                                     data-mask_out="x:inherit;y:inherit;"
                                     data-start="2000"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on">
                                </div>
                                <div class="tp-caption first_text"
                                     data-x="center"
                                     data-y="center"
                                     data-voffset="['-20']"
                                     data-Hoffset="['0']"
                                     data-fontsize="['42','42','42','42','25']"
                                     data-lineheight="['52','52','52','52','35']"
                                     data-width="none"
                                     data-height="none"
                                     data-transform_idle="o:1;"
                                     data-whitespace="nowrap"
                                     data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1000"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     data-elementdelay="0.05">Welcome To Our
                                </div>
                                <div class="tp-caption secand_text"
                                     data-x="center"
                                     data-y="center"
                                     data-voffset="['45']"
                                     data-Hoffset="['0']"
                                     data-fontsize="['36']"
                                     data-lineheight="['42']"
                                     data-width="none"
                                     data-height="none"
                                     data-transform_idle="o:1;"
                                     data-whitespace="nowrap"
                                     data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1000"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     data-elementdelay="0.05">Hungry Eye
                                </div>
                                <div class="tp-caption third_text"
                                     data-x="center"
                                     data-y="center"
                                     data-voffset="['100']"
                                     data-Hoffset="['0']"
                                     data-fontsize="['24','24','24','24','16']"
                                     data-lineheight="['34','34','34','34','26']"
                                     data-width="none"
                                     data-height="none"
                                     data-transform_idle="o:1;"
                                     data-whitespace="nowrap"
                                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1200"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     data-elementdelay="0.05">Restaurant
                                </div>
                                <div class="tp-caption btn_text"
                                     data-x="center"
                                     data-y="center"
                                     data-voffset="['180']"
                                     data-Hoffset="['0']"
                                     data-fontsize="['16.75']"
                                     data-lineheight="['26']"
                                     data-width="none"
                                     data-height="none"
                                     data-transform_idle="o:1;"
                                     data-whitespace="nowrap"
                                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1200"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     data-elementdelay="0.05"><a class="submit_btn_bg"
                                                                 href="{{ route('frontend.menu-grid') }}">Look Menu</a>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div><!-- END REVOLUTION SLIDER -->
        </div>
    </section>
    <!--================End Slider Area =================-->

    <!--================Service Area =================-->
    <section class="service_area">
        <div class="container">
            <div class="row">
                @foreach($items as $item)
                    <div class="col-md-3 col-sm-6">
                        <div class="service_item">
                            <img class="img-circle" src="{{ url('images/items/'.$item->image) }}"
                                 alt="{{ $item->title }}" width="128px" height="128px">
                            <h3>{{ $item->title}}</h3>
                            <p>{{ $item->description }}</p>
                            {{--<a class="read_mor_btn" href="#">Read More</a>--}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--================End Service Area =================-->

    <!--================Booking Table Area =================-->
    <section class="booking_table_area">
        <div class="container">
            <div class="s_white_title">
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
        </div>
    </section>
    <!--================End Booking Table Area =================-->

    <!--================Menus Area =================-->
    <section class="most_popular_item_area">
        <div class="container">
            <div class="s_white_title">
                <h2>Our Menus</h2>
            </div>
            <div class="popular_filter">
                <ul>
                    <li class="active" data-filter="*"><a href="">All</a></li>
                    @foreach($categories as $category)
                        <li data-filter="#{{ $category->slug }}"><a href="">{{ $category->name }}</a>
                            {{--<span class="badge">{{ $category->dishes->count() }}</span>--}}
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="p_recype_item_main">
                <div class="row p_recype_item_active">
                    @foreach($dishes as $dish)
                        <div class="col-md-6 break snacks" id="{{ $dish->category->slug }}">
                            <div class="media">
                                <div class="media-left">
                                    <img src="{{ asset('images/dish/'.$dish->image) }}"
                                         alt="{{ $dish->name }}"
                                         class="img-circle" width="100" height="100">
                                </div>
                                <div class="media-body">
                                    <h3>{{ $dish->name }}</h3>
                                    <h4>Rs.{{ $dish->price }}</h4>
                                    <p>{{ $dish->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--================End Our Menus Area =================-->

    <!--================Our Chefs Area =================-->
    <section class="our_chefs_area">
        <div class="container">
            <div class="s_black_title">
                <h3>Meet</h3>
                <h2>OUR CHEFS</h2>
            </div>
            <div class="chefs_slider_active">
                @foreach($chefs as $chef)
                    <div class="item">
                        <div class="chef_item_inner">
                            <div class="chef_img">
                                <img src="{{ url('images/chef/'.$chef->image) }}"
                                     alt="{{ $chef->name }}" width="263" height="320">
                            </div>
                            <div class="chef_name">
                                <div class="name_chef_text">
                                    <h3>{{ $chef->name }}</h3>
                                    <h4>Chef</h4>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

