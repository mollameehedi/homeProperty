@extends('layouts.dashboard_app')
@section('title')
    Gallery | dashboard
@endsection
@section('gallery')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item active">Gallery</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Gallery</h5>
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
                                    <a href="{{ route('galleryheadingupdate', $heading->id) }}" class="btn btn-info">Update</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    @if (session('delete_gallery'))
                    <div class="alert alert-danger">{{ session('delete_gallery') }}</div>
                    @endif
                    <table class="table table-bordered">
                        <thead class="thead-bordered">
                            <tr>
                                <th>No</th>
                                <th>Gallery photo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($galleries as $gallery)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>
                                    <img style="height: 100px; width: 100px;" src="{{ asset('uploads/gallery') }}/{{ $gallery->gallary_photo }}" alt="">
                                </td>
                                <td>
                                    <a href="{{ route('gallery.show', $gallery->id) }}" class="btn btn-info">Update</a>
                                    <form action="{{ route('gallery.destroy', $gallery->id) }}" method="post">
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
                    @if (session('add_gallery'))
                    <div class="alert alert-success">{{ session('add_gallery') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">Add gallery photo</div>
                        <div class="card-body">
                    <form method="POST" action="{{ route('gallery.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Gallery photo</label>
                          <input type="file" class="form-control" name="gallary_photo">
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