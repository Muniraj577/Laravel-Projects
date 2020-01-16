@extends('layouts.admin.app')

@section('title','Bookings')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12 mt-3">
                    {{--<h1 class="display-3">Add Category</h1>--}}
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="{{route('booking.index')}}">Booking</a></li>
                    </ol>
                    <div>

                        <a style="margin: 19px;" href="{{ route('booking.create')}}"
                           class="btn btn-primary float-right">Add Booking</a>
                    </div>
                </div>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    {{ $message }}
                </div>
            @endif

            @if(sizeof($bookings) > 0)
                <table id="example" class="table table-striped table-bordered" style="width: 100%">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Email Address</th>
                        <th>Table Name</th>
                        <th>Table Capacity</th>
                        <th>Phone</th>
                        <th>date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($bookings as $booking)
                        <tr>
                            <td>{{ ++$id }}</td>
                            <td>{{ $booking->username}}</td>
                            <td>{{ $booking->email }}</td>
                            <td>{{ $booking->table_name }}</td>
                            <td>{{ $booking->table_capacity }}</td>
                            <td>{{ $booking->phone }}</td>
                            <td>{{ $booking->date }}</td>
                            <td>
                                <form action="{{ route('booking.destroy', $booking->id) }}" method="POST"
                                      enctype="multipart/form-data">
                                    {{--<a class="btn btn-info" href="{{ route('category.show', $category->id) }}">Show</a>--}}
                                    {{--<a class="btn btn-primary"--}}
                                    {{--href="{{ route('booking.edit',$booking->id) }}">Edit</a>--}}

                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Email Address</th>
                        <th>Table Name</th>
                        <th>Table Capacity</th>
                        <th>Phone</th>
                        <th>date</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                </table>
            @else
                <div class="alert alert-alert">Start Adding to the Database.</div>
            @endif
            {{--{!! $bookings->links() !!}--}}
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


@endsection
