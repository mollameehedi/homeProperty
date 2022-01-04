@extends('layouts.dashboard_app')
@section('title')
    Visitor | Schedule | Dashboard
@endsection
@section('schedule')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item active">Visitor Schedule</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Visitor | Schedule</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                      @if (session('schedule_delete'))
                            <div class="alert alert-danger">{{ session('schedule_delete') }}</div>
                        @endif
                    <table class="table table-bordered">
                        <thead class="thead-bordered">
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Date</th>
                                <th>Phone no</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($visitors as $visitor)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $visitor->name }}</td>
                                <td>{{ $visitor->email }}</td>
                                <td>{{ $visitor->date }}</td>
                                <td>{{ $visitor->phone_no }}</td>
                                <td>{{ $visitor->message }}</td>
                                <td>
                                    <form action="{{ route('visitorscheduledelete', $visitor->id) }}" method="post">
                                        @csrf
                                        <button class="btn btn-danger">Delete</button>
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
            </div>
        </div>

</div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
@endsection