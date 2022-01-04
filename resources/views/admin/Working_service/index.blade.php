@extends('layouts.dashboard_app')
@section('title')
    Working service | dashboard
@endsection
@section('service')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item active">Working service</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Working service</h5>
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
                                    <a href="{{ route('workingserviceheadingupdate', $heading->id) }}" class="btn btn-info">Update</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    @if (session('delete_service'))
                    <div class="alert alert-danger">{{ session('delete_service') }}</div>
                    @endif
                    <table class="table table-bordered">
                        <thead class="thead-bordered">
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Link title</th>
                                <th>Link url</th>
                                <th>Thumbnail</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($services as $service)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $service->title }}</td>
                                <td>{{ $service->link_title }}</td>
                                <td>{{ $service->link_url }}</td>
                                <td>
                                    <img style="height: 100px; width: 100px;" src="{{ asset('uploads/service') }}/{{ $service->thumbnail }}" alt="">
                                </td>
                                <td>
                                    <a href="{{ route('service.show', $service->id) }}" class="btn btn-info">Update</a>
                                    <form action="{{ route('service.destroy', $service->id) }}" method="post">
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
                    @if (session('add_service'))
                    <div class="alert alert-success">{{ session('add_service') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">Add Working service</div>
                        <div class="card-body">
                    <form method="POST" action="{{ route('service.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Title</label>
                          <input type="text" class="form-control" name="title" placeholder="Enter service title">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Link title</label>
                          <input type="text" class="form-control" name="link_title" placeholder="Enter link title">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Link url</label>
                          <input type="text" class="form-control" name="link_url" placeholder="Enter link url">
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