@extends('layouts.admin.app')

@section('title', 'Create Category')

@section('content')
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 offset-sm-1 mt-3">
                    <h1 class="display-4">Add Category</h1>


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

            <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row ml-lg-5">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>Category Name:</strong>
                            <input type="text" name="name" class="form-control" placeholder="Category Name">
                            @if ($errors->has('name'))
                                <p class="error alert alert-danger">{{ $errors->first('name') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="image">Choose Image</label>
                            <input type="file" class="form-control-file" name="image">
                            @if ($errors->has('image'))
                                <p class="error alert-danger">{{ $errors->first('image') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 text-center">
                        <a style="margin: 20px;" href="{{ route('category.index')}}" class="btn btn-primary">Back</a>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>

                </div>

            </form>
        </div>
    </div>

@endsection