@extends('table.layout')

@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Edit Table</h1>


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

    <form action="{{ route('table.update',$table->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Table Name:</strong>
                    <input type="text" name="name" value="{{$table->name}}" class="form-control" placeholder="Table Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Capacity:</strong>
                    <input type="text" name="capacity" value="{{$table->capacity}}" class="form-control" placeholder="">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <a style="margin: 20px;" href="{{ route('table.index')}}" class="btn btn-primary">Back</a>
                <button type="submit" class="btn btn-primary">Add</button>
            </div>

        </div>

    </form>

@endsection