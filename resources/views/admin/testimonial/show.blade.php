@extends('layouts.dashboard_app')
@section('title')
    Update | Testimonial | dashboard
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
        <a class="breadcrumb-item active">Update testimonial</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Update testimonial</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    @if (session('update_testimonial'))
                    <div class="alert alert-success">{{ session('update_testimonial') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">Update testimonial</div>
                        <div class="card-body">
                    <form method="POST" action="{{ route('testimonial.update', $info->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                          <label for="exampleInputEmail1">Name</label>
                          <input type="text" class="form-control" name="name" value="{{ $info->name }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Designation</label>
                          <input type="text" class="form-control" name="designtaion" value="{{ $info->designtaion }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Description</label>
                          <textarea class="form-control" name="description" rows="4" >{{ $info->description }}</textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">testimonial photo</label>
                          <input type="file" class="form-control" name="thumbnail">
                        </div>
                        <img style="height: 50px; width: 50px;" src="{{ asset('uploads/testimonial') }}/{{ $info->thumbnail }}" alt="">
                        <br>
                        <br>
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