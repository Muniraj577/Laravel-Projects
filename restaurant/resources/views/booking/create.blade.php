@extends('layouts.admin.app')

@section('title','Booking')

@section('content')
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 offset-sm-1 mt-3">
                    <h1 class="display-4">Add Booking</h1>
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

            <form action="{{ route('booking.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row ml-lg-5">
                    <div class="col-xs-8 col-sm-8 col-md-8">
                        <div class="form-group">
                            <strong>User Name:</strong>
                            <input type="text" name="username" class="form-control" placeholder="Username">
                            @if ($errors->has('username'))
                                <p class="error alert alert-danger">{{ $errors->first('username') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-8 col-sm-8 col-md-8">
                        <div class="form-group">
                            <strong>Email Address:</strong>
                            <input type="text" name="email" class="form-control" placeholder="Email Address">
                            @if ($errors->has('email'))
                                <p class="error alert alert-danger">{{ $errors->first('email') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-8 col-sm-8 col-md-8">
                        <div class="form-group">
                            <label for="table_name">Select Table:</label>
                            <select name="table_name" id="table_name" class="form-control">
                                <option value="">---Select Table ---</option>
                                @foreach($tables as $table)
                                    <option value="{{ $table->name }}">{{ $table->name }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('table_name'))
                                <p class="error alert alert-danger">{{ $errors->first('table_name') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-8 col-sm-8 col-md-8">
                        <div class="form-group">
                            <label for="table_capacity">Select Table:</label>
                            <select name="table_capacity" id="table_capacity" class="form-control">
                                <option value="">---Select TableCapacity ---</option>
                                @foreach($tables as $table)
                                    <option value="{{ $table->id }}">{{ $table->capacity }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('table_capacity'))
                                <p class="error alert alert-danger">{{ $errors->first('table_capacity') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-8 col-sm-8 col-md-8">
                        <div class="form-group">
                            <strong>Phone:</strong>
                            <input type="text" name="phone" class="form-control" placeholder="">
                            @if ($errors->has('phone'))
                                <p class="error alert alert-danger">{{ $errors->first('phone') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-8 col-sm-8 col-md-8">
                        <div class="form-group">
                            <label for="date">Date:</label>
                            <input class="date form-control" type="text" name="date" id="date">
                        </div>
                    </div>

                    <div class="col-xs-8 col-sm-8 col-md-8 text-center">
                        <a style="margin: 20px;" href="{{ route('booking.index')}}" class="btn btn-primary">Back</a>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>

                </div>
                {{--</div>--}}

            </form>
        </div>
    </div>

@endsection