@extends('layouts.admin.app')

@section('title','Edit Dish')

@section('content')
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 offset-sm-1 mt-3">
                    <h1 class="display-4">Edit Dish</h1>
                </div>
            </div>

            @if($errors->any())
                <div class="alert alert-danger">
                    <strong>Oops!</strong> There were some problems with your input.<br/><br/>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                </div>
            @endif

            <form action="{{ route('dish.update',$dish->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row ml-lg-5">
                    <div class="col-xs-8 col-sm-8 col-md-8">
                        <div class="form-group">
                            <strong>Dish:</strong>
                            <input type="text" name="name" value="{{$dish->name}}" class="form-control"
                                   placeholder="Dish Name">
                        </div>
                    </div>
                    <div class="col-xs-8 col-sm-8 col-md-8">
                        <div class="form-group">
                            <label for="categories">Select Category:</label>
                            <select name="categories" id="categories" class="form-control">
                                <option value="">---Select Category ---</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ $category->name == $dish->category->name ? 'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('categories'))
                                <p class="error alert alert-danger">{{ $errors->first('categories') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-8 col-sm-8 col-md-8">
                        <div class="form-group">
                            <strong>Price:</strong>
                            <input type="text" name="price" value="{{$dish->price}}" class="form-control"
                                   placeholder="Price">
                        </div>
                    </div>
                    <div class="col-xs-8 col-sm-8 col-md-8">
                        <div class="form-group">
                            <strong>Description:</strong>
                            <textarea name="description" id="description" cols="100"
                                      rows="5" placeholder="">{{ $dish->description }}</textarea>
                        </div>
                    </div>
                    <div class="col-xs-8 col-sm-8 col-md-8">
                        <div class="form-group">
                            <label for="image">Choose Image</label>
                            <ul>
                                <li>{{ $dish->image }}</li>
                            </ul>
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    <div class="col-xs-8 col-sm-8 col-md-8 text-center">
                        <a style="margin: 20px;" href="{{ route('dish.index')}}" class="btn btn-primary">Back</a>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>

                </div>

            </form>
        </div>
    </div>

@endsection