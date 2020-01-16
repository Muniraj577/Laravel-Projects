@extends('frontend.layout.app')

@section('title','Menu')

@section('content')
<section class="banner_area">
    <div class="container">
        <div class="banner_content">
            <h4>Menu Grid</h4>
            <a href="{{ route('frontend.index') }}">Home</a>
            <a class="active" href="{{ route('frontend.menu-grid') }}">Menu</a>
        </div>
    </div>
</section>

<section class="most_popular_item_area menu_list_page">
    <div class="container">
        <div class="popular_filter">
            <ul>
                <li class="active" data-filter="*"><a href="">All</a></li>
                @foreach($categories as $category)
                    <li class="filter-option" data-filter="#{{ $category->slug }}"><a
                                href="">{{ $category->name }}</a>
                @endforeach
            </ul>
        </div>
        <div class="p_recype_item_main">
            <div class="row p_recype_item_active">
                @foreach($dishes as $dish)
                    <div class="col-md-4 col-sm-6 break snacks" id="{{ $dish->category->slug }}">
                        <div class="feature_item">
                            <div class="feature_item_inner">
                                <img src="{{ asset('images/dish/'.$dish->image) }}"
                                     alt="{{ $dish->name }}" width="400" height="325">
                            </div>
                            <div class="title_text">
                                <div class="feature_left"><a href="#"><span>{{ $dish->name }}</span></a></div>
                                <div class="restaurant_feature_dots"></div>
                                <div class="feature_right">Rs.{{ $dish->price }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection
