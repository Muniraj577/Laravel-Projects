@extends('layouts.admin.app')

@section('title','Gallery')

@section('content')
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 offset-sm-1 mt-3">
                    <h1 class="display-4">Add Photos</h1>
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

            <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row ml-lg-5">
                    <div class="col-xs-8 col-sm-8 col-md-8">
                        <div class="form-group">
                            <label for="image">Choose Image</label>
                            <input type="file" class="form-control-file" name="image">
                            @if ($errors->has('image'))
                                <p class="error alert-danger">{{ $errors->first('image') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="col-xs-8 col-sm-8 col-md-8 text-center">
                        <a style="margin: 20px;" href="{{ route('gallery.index')}}" class="btn btn-primary">Back</a>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>

                </div>

            </form>
        </div>
    </div>

@endsection