@extends('layouts.dashboard_app')
@section('title')
   Update | Opening Hour | dashboard
@endsection
@section('hour')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item" href="{{ route('hour.index') }}">Opening Hour</a>
        <a class="breadcrumb-item active">Updte Opening Hour</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Updte Opening Hour</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    @if (session('update_schedule'))
                    <div class="alert alert-success">{{ session('update_schedule') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">Update Opening hour</div>
                        <div class="card-body">
                    <form method="POST" action="{{ route('hour.update', $info->id) }}">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                          <label for="exampleInputEmail1">Opening Schedule</label>
                          <input type="text" class="form-control" name="opening_schedule" value="{{ $info->opening_schedule }}">
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