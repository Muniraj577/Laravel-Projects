@extends('layouts.admin.app')

@section('title','Table')

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
                        <li class="breadcrumb-item active"><a href="{{route('table.index')}}">Table</a></li>
                    </ol>
                    <div>

                        <a style="margin: 19px;" href="{{ route('table.create')}}"
                           class="btn btn-primary float-right">Add Table</a>
                    </div>
                </div>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    {{ $message }}
                </div>
            @endif

            @if(sizeof($tables) > 0)
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Table Name</th>
                        <th>Capacity</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tables as $table)
                        <tr>
                            <td>{{ ++$id }}</td>
                            <td>{{ $table->name}}</td>
                            <td>{{ $table->capacity }}</td>
                            <td>
                                <form action="{{ route('table.destroy', $table->id) }}" method="POST"
                                      enctype="multipart/form-data">
                                    {{--<a class="btn btn-info" href="{{ route('category.show', $category->id) }}">Show</a>--}}
                                    <a class="btn btn-primary"
                                       href="{{ route('table.edit',$table->id) }}">Edit</a>

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
                        <th>Table Name</th>
                        <th>Capacity</th>
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
