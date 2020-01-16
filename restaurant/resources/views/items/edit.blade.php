@extends('layouts.admin.app')

@section('title','Edit Items')

@section('content')
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 offset-sm-1 mt-3">
                    <h1 class="display-4">Edit Items</h1>
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

            <form action="{{ route('items.update',$item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row ml-lg-5">
                    <div class="col-xs-8 col-sm-8 col-md-8">
                        <div class="form-group">
                            <strong>Title:</strong>
                            <input type="text" name="title" value="{{$item->title}}" class="form-control"
                                   placeholder="">
                        </div>
                    </div>
                    <div class="col-xs-8 col-sm-8 col-md-8">
                        <div class="form-group">
                            <strong>Description:</strong>
                            <textarea name="description" id="description" cols="100" rows="5" placeholder="">{{ $item->description }}</textarea>
                            @if ($errors->has('description'))
                                <p class="error alert alert-danger">{{ $errors->first('description') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-8 col-sm-8 col-md-8">
                        <div class="form-group">
                            <label for="image">Choose Image</label>
                            <ul>
                                <li>{{ $item->image }}</li>
                            </ul>
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    <div class="col-xs-8 col-sm-8 col-md-8 text-center">
                        <a style="margin: 20px;" href="{{ route('items.index')}}" class="btn btn-primary">Back</a>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>

                </div>

            </form>
        </div>
    </div>

@endsection