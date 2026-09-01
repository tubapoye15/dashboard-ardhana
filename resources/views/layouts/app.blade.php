<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title', 'Preorder System') - {{ config('app.name') }}</title>

  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  @stack('styles')
</head>
<body>
  <div id="global-loader">
    <div class="whirly-loader"></div>
  </div>

  <div class="main-wrapper">

    {{-- ===================== HEADER ===================== --}}
    <div class="header">
      <div class="header-left active">
        <a href="{{ route('dashboard') }}" class="logo">
          <img src="{{ asset('assets/img/logo.png') }}" alt="">
        </a>
        <a href="{{ route('dashboard') }}" class="logo-small">
          <img src="{{ asset('assets/img/logo-small.png') }}" alt="">
        </a>
        <a id="toggle_btn" href="javascript:void(0);"></a>
      </div>
      <a id="mobile_btn" class="mobile_btn" href="#sidebar">
        <span class="bar-icon"><span></span><span></span><span></span></span>
      </a>

      <ul class="nav user-menu">
        <li class="nav-item dropdown has-arrow main-drop">
          <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
            <span class="user-info">
              <span class="user-letter">
                <img src="{{ asset('assets/img/profiles/avatar-01.jpg') }}" alt="" class="img-fluid">
              </span>
              <span class="user-detail">
                <span class="user-name">{{ auth()->user()->name ?? 'Guest' }}</span>
                <span class="user-role">Staff</span>
              </span>
            </span>
          </a>
          <div class="dropdown-menu menu-drop-user">
            <div class="dropdown-item" style="cursor:default;">
              <div class="subdropdown-header">{{ auth()->user()->email ?? '' }}</div>
            </div>
            <a class="dropdown-item" href="#">My Profile</a>
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit" class="dropdown-item">Logout</button>
            </form>
          </div>
        </li>
      </ul>
    </div>
    {{-- ===================== /HEADER ===================== --}}

    {{-- ===================== SIDEBAR ===================== --}}
    <div class="sidebar" id="sidebar">
      <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
          <ul>
            <li class="submenu-open">
              <h6 class="submenu-hdr">Main</h6>
              <ul>
                <li class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
                  <a href="{{ route('dashboard') }}"><i class="fa fa-home"></i><span>Dashboard</span></a>
                </li>
              </ul>
            </li>

            {{--
              NOTE: These modules (Products, Preorders, Customers, Suppliers) don't exist
              yet — we're starting with just the layout + auth. Each item below links to '#'
              for now. As you build each module's routes, swap '#' for
              {{ route('module.index') }} the same way the Dashboard link above does.
            --}}
            <li class="submenu-open">
              <h6 class="submenu-hdr">Catalog</h6>
              <ul>
                <li><a href="#"><i class="fa fa-list"></i><span>Products</span></a></li>
                <li><a href="#"><i class="fa fa-tags"></i><span>Categories</span></a></li>
              </ul>
            </li>

            <li class="submenu-open">
              <h6 class="submenu-hdr">Preorders</h6>
              <ul>
                <li><a href="#"><i class="fa fa-shopping-basket"></i><span>Preorder List</span></a></li>
                <li><a href="#"><i class="fa fa-plus"></i><span>New Preorder</span></a></li>
              </ul>
            </li>

            <li class="submenu-open">
              <h6 class="submenu-hdr">People</h6>
              <ul>
                <li><a href="#"><i class="fa fa-users"></i><span>Customers</span></a></li>
                <li><a href="#"><i class="fa fa-truck"></i><span>Suppliers</span></a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
    {{-- ===================== /SIDEBAR ===================== --}}

    <div class="page-wrapper">
      <div class="content">
        @if (session('status'))
          <div class="alert alert-success">{{ session('status') }}</div>
        @endif

        @yield('content')
      </div>
    </div>
  </div>

  <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('assets/js/feather.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('assets/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/script.js') }}"></script>
  @stack('scripts')
</body>
</html>
