@extends('layouts.dashboard_app')
@section('title')
   Update | info | dashboard
@endsection
@section('info')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item" href="{{ route('info.index') }}">info</a>
        <a class="breadcrumb-item active">Updte info</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Updte info</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    @if (session('update_info'))
                    <div class="alert alert-success">{{ session('update_info') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">Update info</div>
                        <div class="card-body">
                        <form method="POST" action="{{ route('info.update', $info->id) }}">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                          <label for="exampleInputEmail1">Icon class</label>
                          <input type="text" class="form-control" name="class" value="{{ $info->class }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Info</label>
                          <textarea name="info" rows="4" class="form-control">{{ $info->info }}</textarea>
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