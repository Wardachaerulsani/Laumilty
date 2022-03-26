<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Laundry || Warda</title>
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap/bootstrap.min.css">
  <!-- Icons -->
  <link rel="stylesheet" href="{{asset('assets')}}/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="{{asset('assets')}}/vendor/sweetalert2/dist/sweetalert2.min.css" type="text/css">
  <link rel="stylesheet" href="{{asset('assets')}}/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{asset('assets')}}/css/argon.css?v=1.2.0" type="text/css">
  <!-- Datatables -->
    <link href="{{asset('vendors')}}/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('vendors')}}/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <!-- <link href="{{asset('vendors')}}/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet"> -->
    <link href="{{asset('vendors')}}/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <!-- <link href="{{asset('vendors')}}/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet"> -->
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="{{asset('assets')}}/img/brand/blue.png" class="navbar-brand-img" alt="{{asset('assets')}}.">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link {{ request()->is('outlet') ? 'active' : '' }}" href="/outlet">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Outlet</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request()->is('paket') ? 'active' : '' }}" href="/paket">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Paket</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link {{ request()->is('member') ? 'active' : '' }}" href="/member">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Member</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request()->is('transaksi') ? 'active' : '' }}" href="/transaksi">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Transaksi</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link{{ request()->is('transaksi') ? 'active' : '' }}" href="/laporan">
                <i class="ni ni-send text-dark"></i>
                <span class="nav-link-text">Laporan</span>
              </a>
            </li>
              <li class="nav-item">
              <a class="nav-link" href="/user">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">User</span>
              </a>
            </li>
        </ul>
        </div>
      </div>
    </div>
  </nav>
  @if(auth()->user()->role == 'admin')
  @include('layouts.sidebar-admin')
  @elseif (auth()->user()->role == 'kasir')
  @include('layouts.sidebar-kasir')
  @elseif (auth()->user()->role == 'kasir')
  @include('layouts.sidebar-owner')
  @endif
@yield('content')
@include('layouts/footer')