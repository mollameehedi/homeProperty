<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>@yield('title')</title>

    <!-- vendor css -->
    <link href="{{ asset('dashboard_asset') }}/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="{{ asset('dashboard_asset') }}/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="{{ asset('dashboard_asset') }}/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">


    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard_asset') }}/css/starlight.css">
  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="sl-logo"><a href="{{ url('/home') }}"><i class="icon ion-android-star-outline"></i>{{ env('APP_NAME') }}</a></div>
    <div class="sl-sideleft">
      <div class="input-group input-group-search">
        <input type="search" name="search" class="form-control" placeholder="Search">
        <span class="input-group-btn">
          <button class="btn"><i class="fa fa-search"></i></button>
        </span><!-- input-group-btn -->
      </div><!-- input-group -->

      <label class="sidebar-label">Navigation</label>
      <div class="sl-sideleft-menu">
        <a href="{{ url('/home') }}" class="sl-menu-link @yield('dashboard')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="{{ route('social.index') }}" class="sl-menu-link @yield('social')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Social</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="{{ route('info.index') }}" class="sl-menu-link @yield('info')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Info</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="{{ route('hour.index') }}" class="sl-menu-link @yield('hour')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Opening Schedule</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="{{ route('homelogo') }}" class="sl-menu-link @yield('logo')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Logo</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="{{ route('banner.index') }}" class="sl-menu-link @yield('banner')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Banner</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="{{ route('link.index') }}" class="sl-menu-link @yield('link')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Youtube Link</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="{{ route('service.index') }}" class="sl-menu-link @yield('service')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Working service</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="{{ route('gallery.index') }}" class="sl-menu-link @yield('gallery')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Gallery</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="{{ route('testimonial.index') }}" class="sl-menu-link @yield('testimonial')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Testimonial</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="{{ route('aboutdetail') }}" class="sl-menu-link @yield('about')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">About Detail</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="{{ route('layout.index') }}" class="sl-menu-link @yield('layout')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Layouts</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="{{ route('housedetail') }}" class="sl-menu-link @yield('house')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">House Detail</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="{{ route('visitorschedule') }}" class="sl-menu-link @yield('schedule')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Visitor Schedule</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="{{ route('subscriber') }}" class="sl-menu-link @yield('subscriber')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Subscriber</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
      </div><!-- sl-sideleft-menu -->

      <br>
    </div><!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="sl-header">
      <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
      </div><!-- sl-header-left -->
      <div class="sl-header-right">
        <nav class="nav">
          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name">{{ user()->name }}</span>
              <img src="{{ asset('uploads/profile_photos') }}/{{ user()->profile_photo }}" class="wd-32 rounded-circle" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav">
                <li><a href="{{ route('editprofile') }}"><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
                <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icon ion-power"></i>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                     Sign Out</a></li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
      </div><!-- sl-header-right -->
    </div><!-- sl-header -->
    <!-- ########## END: HEAD PANEL ########## -->
    @yield('dashboard_content')


    <script src="{{ asset('dashboard_asset') }}/lib/jquery/jquery.js"></script>
    <script src="{{ asset('dashboard_asset') }}/lib/popper.js/popper.js"></script>
    <script src="{{ asset('dashboard_asset') }}/lib/bootstrap/bootstrap.js"></script>
    <script src="{{ asset('dashboard_asset') }}/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>

    <script src="{{ asset('dashboard_asset') }}/js/starlight.js"></script>

  </body>
</html>
