@extends('layouts.dashboard_app')
@section('title')
    Opening Hour | dashboard
@endsection
@section('hour')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item active">Opening Hour</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Opening Hour</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    @if (session('delete_schedule'))
                    <div class="alert alert-danger">{{ session('delete_schedule') }}</div>
                    @endif
                    <table class="table table-bordered">
                        <thead class="thead-bordered">
                            <tr>
                                <th>No</th>
                                <th>Schedule</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($houres as $hour)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $hour->opening_schedule }}</td>
                                <td>
                                    <a href="{{ route('hour.show', $hour->id) }}" class="btn btn-info">Update</a>
                                    <form action="{{ route('hour.destroy', $hour->id) }}" method="post">
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
                    @if (session('hour_add'))
                    <div class="alert alert-success">{{ session('hour_add') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">Add Opening Schedule</div>
                        <div class="card-body">
                    <form method="POST" action="{{ route('hour.store') }}">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Opening schedule</label>
                          <input type="text" class="form-control" name="opening_schedule" placeholder="Enter opeing schedule">
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