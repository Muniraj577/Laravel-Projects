@extends('category.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Show Dish</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-primary" href="{{ route('dish.index') }}"> Back</a>
        </div>
    </div>
    @foreach($dishes as $dish)
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Dish Name:</strong>
                    {{ $dish->name }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image:</strong>
                    <img src="{{ url('images/dish/'.$dish->images) }}" alt="{{ $dish->name }}">
                </div>
            </div>
        </div>
    @endforeach
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Dish Name:</strong>
                {{ $dish->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <img src="{{ url('images/dish/'.$dish->images) }}" alt="{{ $dish->name }}">
            </div>
        </div>
    </div>
@endsection