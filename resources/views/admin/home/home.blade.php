    @extends('layouts.dashboard_app')
    @section('title')
        Home | Dashboard
    @endsection
    @section('dashboard')
        active
    @endsection
    @section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item active" href="{{ url('/home') }}">Home</a>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h1>Admin Dashboard</h1>
        </div><!-- sl-page-title -->

      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
        
    @endsection