@extends('layouts.dashboard_app')
@section('title')
    Youtube link | dashboard
@endsection
@section('link')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item active">Youtube Link</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Youtube Link</h5>
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
                                    <a href="{{ route('youtubelinkheadingupdate', $heading->id) }}" class="btn btn-info">Update</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    @if (session('delete_link'))
                    <div class="alert alert-danger">{{ session('delete_link') }}</div>
                    @endif
                    <table class="table table-bordered">
                        <thead class="thead-bordered">
                            <tr>
                                <th>No</th>
                                <th>Link</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($links as $link)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $link->link }}</td>
                                <td>
                                    <img style="height: 75px; width: 150px;" src="{{ asset('uploads/youtube_thumbnail') }}/{{ $link->thumbnail }}" alt="">
                                </td>
                                <td>
                                    <a href="{{ route('link.show', $link->id) }}" class="btn btn-info">Update</a>
                                    <form action="{{ route('link.destroy', $link->id) }}" method="post">
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
                <div class="col-lg-1"></div>
                <div class="col-lg-4">
                    @if (session('add_link'))
                    <div class="alert alert-success">{{ session('add_link') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">Add Youtube link</div>
                        <div class="card-body">
                    <form method="POST" action="{{ route('link.store') }}">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Youtube link</label>
                          <textarea name="link" rows="4" class="form-control" placeholder="Enter youtube link"></textarea>
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