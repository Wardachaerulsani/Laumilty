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
  <link rel="stylesheet" href="{{asset('assets')}}/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{asset('assets')}}/css/argon.css?v=1.2.0" type="text/css">
  
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
              <a class="nav-link active" href="/home">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="/outlet">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Outlet</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/paket">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Paket</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="/member">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Member</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Transaksi</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="upgrade.html">
                <i class="ni ni-send text-dark"></i>
                <span class="nav-link-text">Laporan</span>
              </a>
            </li>
        </ul>
        </div>
      </div>
    </div>
  </nav>
@yield('content')
@include('layouts/footer')