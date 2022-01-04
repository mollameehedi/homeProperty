@extends('layouts.dashboard_app')
@section('title')
    Update | About detail | dashboard
@endsection
@section('about')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item" href="{{ route('aboutdetail') }}">About detail</a>
        <a class="breadcrumb-item active">Update About detail</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Update About detail</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    @if (session('update_detail'))
                    <div class="alert alert-success">{{ session('update_detail') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">Update about detail</div>
                        <div class="card-body">
                    <form method="POST" action="{{ route('aboutdetailupdatepost', $info->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Section title</label>
                          <input type="text" class="form-control" name="bradcrumb_title" value="{{ $info->bradcrumb_title }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Heading</label>
                          <input type="text" class="form-control" name="heading" value="{{ $info->heading }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Description</label>
                          <textarea  class="form-control" name="description"  rows="4">{{ $info->description }}</textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Thumbnail</label>
                          <input type="file" class="form-control" name="thumbnail">
                        </div>
                        <img style="height: 50px; width: 100px;" src="{{ asset('uploads/about') }}/{{ $info->thumbnail }}" alt="">
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