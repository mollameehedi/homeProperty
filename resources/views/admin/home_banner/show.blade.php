@extends('layouts.dashboard_app')
@section('title')
    Update | Banner | dashboard
@endsection
@section('banner')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item" href="{{ route('banner.index') }}">Banner</a>
        <a class="breadcrumb-item active">Updte banner</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Updte banner</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    @if (session('update_banner'))
                    <div class="alert alert-success">{{ session('update_banner') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">Update Banner detail</div>
                        <div class="card-body">
                    <form method="POST" action="{{ route('banner.update', $info->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                          <label for="exampleInputEmail1">Heading</label>
                          <input type="text" class="form-control" name="heading" value="{{ $info->heading }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Description</label>
                          <textarea name="description" rows="4" class="form-control">{{ $info->description }}</textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Thumbnail</label>
                          <input type="file" class="form-control" name="thumbnail">
                        </div>
                        <img style="height: 50px; width: 100px;" src="{{ asset('uploads/home_banner') }}/{{ $info->thumbnail }}" alt="">
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