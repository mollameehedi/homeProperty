@extends('layouts.dashboard_app')
@section('title')
    Update | House detail | dashboard
@endsection
@section('house')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item" href="{{ route('housedetail') }}">House detail</a>
        <a class="breadcrumb-item active">Update House detail</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Update House detail</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    @if (session('update_detail'))
                    <div class="alert alert-success">{{ session('update_detail') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">Update house detail</div>
                        <div class="card-body">
                    <form method="POST" action="{{ route('housedetailupdatepost', $info->id) }}">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Sub Heading</label>
                          <input type="text" class="form-control" name="house_sub_heading" value="{{ $info->house_sub_heading }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Heading</label>
                          <input type="text" class="form-control" name="house_heading" value="{{ $info->house_heading }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Description</label>
                          <textarea  class="form-control" name="house_description"  rows="4">{{ $info->house_description }}</textarea>
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