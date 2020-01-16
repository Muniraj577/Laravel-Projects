@extends('frontend.layout.app')

@section('title','About-Us')

@section('content')
<section class="banner_area">
    <div class="container">
        <div class="banner_content">
            <h4>About Us</h4>
            <a href="{{ route('frontend.index') }}">Home</a>
            <a class="active" href="{{ route('frontend.about-us') }}">About Us</a>
        </div>
    </div>
</section>

<section class="about_us_content">
    <div class="container">
        <div class="row about_inner_item">
            @foreach($abouts as $about)
                <div class="col-md-6">
                    <div class="about_left_content">
                        <h4>{{ $about->title }}</h4>
                        <p>{{ $about->description }}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about_right_image">
                        <img src="{{ url('images/about/'.$about->image) }}"
                             alt="{{ $about->title }}">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

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
                                 alt="{{ $chef->name }}"
                                 class="img-fluid" width="369" height="300">
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


