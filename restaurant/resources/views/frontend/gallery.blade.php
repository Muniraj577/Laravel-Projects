@extends('frontend.layout.app')

@section('title','Gallery')

@section('content')
<section class="banner_area">
    <div class="container">
        <div class="banner_content">
            <h4>Our Gallery</h4>
            <a href="{{ route('frontend.index') }}">Home</a>
            <a class="active" href="{{ route('frontend.gallery') }}">Gallery</a>
        </div>
    </div>
</section>

<section class="our_gallery_area">
    <div class="container">
        <div class="row our_gallery_ms_inner">
            @foreach($galleries as $gallery)
                <div class="col-md-4 col-sm-6">
                    <div class="our_gallery_item">
                        <img class="img-rounded" src="{{ url('images/gallery/'.$gallery->image) }}" width="369px" height="300px">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
