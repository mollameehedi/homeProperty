@extends('layouts.dashboard_app')
@section('title')
    House detail | dashboard
@endsection
@section('house')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item active">House detail</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>House detail</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-bordered">
                        <thead class="thead-bordered">
                            <tr>
                                <th>Sub Heading</th>
                                <th>Heading</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $detail->house_sub_heading }}</td>
                                <td>{{ $detail->house_heading }}</td>
                                <td>{{ $detail->house_description }}</td>
                                <td>
                                    <a href="{{ route('housedetailupdate', $detail->id) }}" class="btn btn-info">Update</a>
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