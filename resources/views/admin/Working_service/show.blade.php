@extends('layouts.dashboard_app')
@section('title')
    Update | Working service | dashboard
@endsection
@section('service')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item" href="{{ route('service.index') }}">Working service</a>
        <a class="breadcrumb-item active">Update working service</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Update working service</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    @if (session('update_service'))
                    <div class="alert alert-success">{{ session('update_service') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">Update working service</div>
                        <div class="card-body">
                    <form method="POST" action="{{ route('service.update', $info->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                          <label for="exampleInputEmail1">Title</label>
                          <input type="text" class="form-control" name="title" value="{{ $info->title }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Link title</label>
                          <input type="text" class="form-control" name="link_title" value="{{ $info->link_title }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Link url</label>
                          <input type="text" class="form-control" name="link_url" value="{{ $info->link_url }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Thumbnail</label>
                          <input type="file" class="form-control" name="thumbnail">
                        </div>
                        <img style="height: 50px; width: 100px;" src="{{ asset('uploads/service') }}/{{ $info->thumbnail }}" alt="">
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