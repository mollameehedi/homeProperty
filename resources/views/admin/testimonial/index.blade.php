@extends('layouts.dashboard_app')
@section('title')
    Testimonial | dashboard
@endsection
@section('testimonial')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item active">Testimonial</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Testimonial</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <table class="table table-bordered">
                        <thead class="thead-bordered">
                            <tr>
                                <th>Heading</th>
                                <th>Sub Heading</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $heading->heading }}</td>
                                <td>{{ $heading->sub_heading }}</td>
                                <td>
                                    <a href="{{ route('testimonialheadingupdate', $heading->id) }}" class="btn btn-info">Update</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    @if (session('delete_testimonial'))
                    <div class="alert alert-danger">{{ session('delete_testimonial') }}</div>
                    @endif
                    <table class="table table-bordered">
                        <thead class="thead-bordered">
                            <tr>
                                <th>No</th>
                                <th>name</th>
                                <th>designation</th>
                                <th>description</th>
                                <th>thumbnail</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($testimonials as $testimonial)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $testimonial->name }}</td>
                                <td>{{ $testimonial->designtaion }}</td>
                                <td>{{ $testimonial->description }}</td>
                                <td>
                                    <img style="height: 50px; width: 50px;" src="{{ asset('uploads/testimonial') }}/{{ $testimonial->thumbnail }}" alt="">
                                </td>
                                <td>
                                    <a href="{{ route('testimonial.show', $testimonial->id) }}" class="btn btn-info">Update</a>
                                    <form action="{{ route('testimonial.destroy', $testimonial->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>

                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="50">
                                     <h4 class="text-danger text-center">No data to show!@!</h4>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-4">
                    @if (session('add_testimonial'))
                    <div class="alert alert-success">{{ session('add_testimonial') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">Add testimonial</div>
                        <div class="card-body">
                    <form method="POST" action="{{ route('testimonial.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Name</label>
                          <input type="text" class="form-control" name="name" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Designation</label>
                          <input type="text" class="form-control" name="designtaion" placeholder="Enter designation">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Description</label>
                          <textarea class="form-control" name="description" rows="4" placeholder="Enter description"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Thumbnail</label>
                          <input type="file" class="form-control" name="thumbnail">
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