@extends('layouts.admin.app')

@section('title','Reservation')

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
                        <li class="breadcrumb-item active"><a href="{{route('reservation.index')}}">Reservation</a></li>
                    </ol>
                    <div>

                        {{--<a style="margin: 19px;" href="{{ route('category.create')}}"--}}
                        {{--class="btn btn-primary float-right">Add Category</a>--}}
                    </div>
                </div>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    {{ $message }}
                </div>
            @endif

            @if(sizeof($reservations) > 0)
                <table id="example" class="table table-striped table-bordered" style="width: 100%">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Time and Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($reservations as $reservation)
                        <tr>
                            <td>{{ ++$id }}</td>
                            <td>{{ $reservation->name }}</td>
                            <td>{{ $reservation->phone }}</td>
                            <td>{{ $reservation->email }}</td>
                            <td>{{ $reservation->date_and_time }}</td>
                            <th>
                                @if($reservation->status == true)
                                    <span class="label label-info">Confirmed</span>
                                @else
                                    <span class="label label-danger">Not Confirmed</span>
                                @endif
                            </th>
                            <td>
                                @if($reservation->status == false)
                                    <form action="{{ route('reservation.status',$reservation->id) }}"
                                          id="{{ $reservation->id }}" method="POST">
                                        @csrf
                                    </form>
                                    <button type="button" class="btn btn-info btn-sm"
                                            onclick="if (confirm('Are you sure you want to confirm the reservation?')){
                                                    event.preventDefault();
                                                    document.getElementById('{{ $reservation->id }}').submit();
                                                    }else {
                                                    event.preventDefault();
                                                    }"><i class="material-icons">Confirm</i></button>
                                @endif
                                <form action="{{ route('reservation.destroy', $reservation->id) }}" method="POST"
                                      enctype="multipart/form-data">
                                    {{--<a class="btn btn-info" href="{{ route('category.show', $category->id) }}">Show</a>--}}
                                    {{--<a class="btn btn-primary"--}}
                                    {{--href="{{ route('category.edit',$category->id) }}">Edit</a>--}}

                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                    {{--<button type="submit" class="btn btn-danger" onclick="if (confirm('Are you sure you want to delete this reservation?')){--}}
                                    {{--event.preventDefault();--}}
                                    {{--document.getElementById('{{ $reservation->id }}').submit();--}}
                                    {{--}else {--}}
                                    {{--event.preventDefault();--}}
                                    {{--}"><i class="material-icons">Delete</i></button>--}}
                                </form>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Time and Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                </table>
            @else
                <div class="alert alert-alert">Start Adding to the Database.</div>
            @endif
            {{--{!! $categories->links() !!}--}}
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
