@extends('layouts.admin.app')

@section('title','Gallery')

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
                        <li class="breadcrumb-item active"><a href="{{route('gallery.index')}}">Gallery</a></li>
                    </ol>
                    <div>

                        <a style="margin: 19px;" href="{{ route('gallery.create')}}"
                           class="btn btn-primary float-right">Add Gallery</a>
                    </div>
                </div>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    {{ $message }}
                </div>
            @endif

            @if(sizeof($galleries) > 0)
                <table id="example" class="table table-striped table-bordered" style="width: 100%">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Photos</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($galleries as $gallery)
                        <tr>
                            <td>{{ ++$id }}</td>
                            <td><img src="{{ url('images/gallery/'.$gallery->image) }}"
                                     class="img-fluid" width="100" height="100"></td>
                            <td>
                                <form action="{{ route('gallery.destroy', $gallery->id) }}" method="POST"
                                      enctype="multipart/form-data">
                                    {{--<a class="btn btn-info" href="{{ route('category.show', $category->id) }}">Show</a>--}}
                                    {{--<a class="btn btn-primary"--}}
                                    {{--href="{{ route('gallery.edit',$gallery->id) }}">Edit</a>--}}

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
                        <th>Photos</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                </table>
            @else
                <div class="alert alert-alert">Start Adding to the Database.</div>
            @endif
            {{--            {!! $galleries->links() !!}--}}
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


@endsection