@extends('layouts.dashboard_app')
@section('title')
    Banner | dashboard
@endsection
@section('banner')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item active">Banner</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Banner</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @if (session('delete_banner'))
                    <div class="alert alert-danger">{{ session('delete_banner') }}</div>
                    @endif
                    <table class="table table-bordered">
                        <thead class="thead-bordered">
                            <tr>
                                <th>No</th>
                                <th>Heading</th>
                                <th>Description</th>
                                <th>Thumbnail</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($banners as $banner)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $banner->heading }}</td>
                                <td>{{ $banner->description }}</td>
                                <td>
                                    <img style="height: 100px; width: 200px;" src="{{ asset('uploads/home_banner') }}/{{ $banner->thumbnail }}" alt="">
                                </td>
                                <td>
                                    <a href="{{ route('banner.show', $banner->id) }}" class="btn btn-info">Update</a>
                                    <form action="{{ route('banner.destroy', $banner->id) }}" method="post">
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
                    @if (session('add_banner'))
                    <div class="alert alert-success">{{ session('add_banner') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">Add Banner detail</div>
                        <div class="card-body">
                    <form method="POST" action="{{ route('banner.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Heading</label>
                          <input type="text" class="form-control" name="heading" placeholder="Enter banner heading">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Description</label>
                          <textarea name="description" rows="4" class="form-control" placeholder="Enter banner description"></textarea>
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