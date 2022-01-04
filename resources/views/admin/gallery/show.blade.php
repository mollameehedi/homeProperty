@extends('layouts.dashboard_app')
@section('title')
    Update | gallery | dashboard
@endsection
@section('gallery')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item" href="{{ route('gallery.index') }}">gallery</a>
        <a class="breadcrumb-item active">Update gallery</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Update gallery</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    @if (session('update_gallery'))
                    <div class="alert alert-success">{{ session('update_gallery') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">Update gallery</div>
                        <div class="card-body">
                    <form method="POST" action="{{ route('gallery.update', $info->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                          <label for="exampleInputEmail1">Gallery photo</label>
                          <input type="file" class="form-control" name="gallary_photo">
                        </div>
                        <img style="height: 50px; width: 100px;" src="{{ asset('uploads/gallery') }}/{{ $info->gallary_photo }}" alt="">
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