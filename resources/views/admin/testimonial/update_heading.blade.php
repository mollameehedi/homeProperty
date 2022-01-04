@extends('layouts.dashboard_app')
@section('title')
   Update | testimonial heading | dashboard
@endsection
@section('testimonial')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item" href="{{ route('testimonial.index') }}">testimonial</a>
        <a class="breadcrumb-item active">Updte testimonial heading</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Updte testimonial heading</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    @if (session('update_heading'))
                    <div class="alert alert-success">{{ session('update_heading') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">Update testimonial heading</div>
                        <div class="card-body">
                    <form method="POST" action="{{ route('testimonialheadingupdatepost', $info->id) }}">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Heading</label>
                          <input type="text" class="form-control" name="heading" value="{{ $info->heading }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Sub Heading</label>
                          <input type="text" class="form-control" name="sub_heading" value="{{ $info->sub_heading }}">
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