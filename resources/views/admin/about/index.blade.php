@extends('layouts.dashboard_app')
@section('title')
    About detail | dashboard
@endsection
@section('about')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item active">About detail</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>About detail</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
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
                            <tr>
                                <td>{{ $detail->bradcrumb_title }}</td>
                                <td>{{ $detail->heading }}</td>
                                <td>{{ $detail->description }}</td>
                                <td>
                                    <img style="height: 100px; width: 100px;" src="{{ asset('uploads/about') }}/{{ $detail->thumbnail }}" alt="">
                                </td>
                                <td>
                                    <a href="{{ route('aboutdetailupdate', $detail->id) }}" class="btn btn-info">Update</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

</div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
@endsection