@extends('layouts.dashboard_app')
@section('title')
   Update | Youtube link | dashboard
@endsection
@section('link')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item" href="{{ route('link.index') }}">Youtube link</a>
        <a class="breadcrumb-item active">Updte youtube link</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Updte youtube link</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    @if (session('update_link'))
                    <div class="alert alert-success">{{ session('update_link') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">Update youtube link</div>
                        <div class="card-body">
                    <form method="POST" action="{{ route('link.update', $info->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                          <label for="exampleInputEmail1">Link</label>
                          <textarea name="link" rows="4" class="form-control">{{ $info->link }}</textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">thumbnail</label>
                          <input type="file" name="thumbnail" class="form-control">
                        </div>
                        <img style="height: 50px; width: 100px;" src="{{ asset('uploads/youtube_thumbnail') }}/{{ $info->thumbnail }}" alt="">
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