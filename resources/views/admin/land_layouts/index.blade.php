@extends('layouts.dashboard_app')
@section('title')
    land | layouts | dashboard
@endsection
@section('layout')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item active">Layouts</a>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Layouts</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @if (session('delete_status'))
                        <div class="alert alert-danger">
                            {{ session('delete_status') }}
                        </div>
                    @endif
                    <table class="table table-bordered">
                        <thead class="thead-bordered">
                            <tr>
                                <th>Section Title</th>
                                <th>Heading</th>
                                <th>Description</th>
                                <th>Thumbnail</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($layouts as $layout)


                            <tr>
                                <td>{{ $layout->floor_name }}</td>
                                <td>{{ $layout->room }}</td>
                                <td>{{ $layout->description }}</td>
                                <td>
                                    <img style="height: 100px; width: 100px;" src="{{ asset('uploads/layout_photo') }}/{{ $layout->photo }}" alt="">
                                </td>
                                <td>
                                    <a href="{{ route('layout.delete', $layout->id) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-4">
                    @if (session('success_status'))
                    <div class="alert alert-success">{{ session('success_status') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">Add Property Layouts</div>
                        <div class="card-body">
                    <form method="POST" action="{{ route('layout.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Floor</label>
                          <input type="text" class="form-control" name="floor_name" placeholder="Enter Floor Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <textarea class="form-control" name="description" rows="4" placeholder="Enter description"></textarea>
                          </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Total Area</label>
                          <input type="text" class="form-control" name="total_area" placeholder="Enter Total Area">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Total Room</label>
                          <input type="text" class="form-control" name="room" placeholder="Enter Total room">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Total Bed</label>
                          <input type="text" class="form-control" name="bed" placeholder="Enter Total Bed">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Total Bath</label>
                          <input type="text" class="form-control" name="bath" placeholder="Enter Total Bath">
                        </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">Layout Thumbnail</label>
                          <input type="file" class="form-control" name="photo">
                        </div>
                        <button type="submit" class="btn btn-info">Submit</button>
                      </form>
                        </div>
                      </div>
                </div>
            </div>
        </div>

</div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
@endsection
