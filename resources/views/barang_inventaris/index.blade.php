@extends('layouts/header')
@section('content')
<!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form action="/barang_inventaris" method="GET" class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
       
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
          </ul>
                    <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              @auth
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="{{asset('assets')}}/img/theme/warda.jpg">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">{{ auth()->user()->nama }}</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <div class="dropdown-divider"></div>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item">
                     <i class="ni ni-user-run"></i>
                    <span>Logout</span>
                  </button>
                </form>
              </div>
              @endauth
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Barang Inventaris</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Barang</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Barang</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
            <button class="btn btn-sm btn-neutral" type="button" data-toggle="modal" data-target="#formInputModal">
            Tambah
          </button>
            </div>
          </div>
          <div class="row">
              @if(session('success'))
              <div class="alert alert-success" role="alert" id="success-alert">
              {{ session('success') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </div>
              @endif
              @if ($errors->any())
              <div class="alert alert-danger" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                  <ul>
                      @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
              @endif
          </div>
          <div class="container-fluid">
            <div class="row">
              <div class="col">
                <div class="card">
                  <!-- Card header -->
                  <div class="card-header border-0">
                    <h3 class="mb-0">Data Member</h3>
                  </div>
                  <!-- Light table -->
                  <div class="card-box table-responsive">
                      <!-- <div class="table-responsive px-10"> -->
                      <table id="barang-inventaris-table" class="table align-items-center table-flush">
                          <thead class="thead-light">
                          <tr>
                              <th>No</th>
                              <th scope="col" class="sort" data-sort="name"> Nama Barang</th>
                              <th scope="col" class="sort" data-sort="budget">Merk Barang</th>
                              <th scope="col" class="sort" data-sort="status">Qty</th>
                              <th scope="col" class="sort" data-sort="status">Kondisi</th>
                              <th scope="col" class="sort" data-sort="status">Tanggal Pengadaan</th>
                              <th scope="col" class="sort" data-sort="status">Action</th>
                          </tr>
                          </thead>
                          <tbody>
                        @foreach($barang_inventaris as $m)
                      <tr>
                        <td>{{ $i = (isset($i)?++$i:$i=1) }}</td>
                        <td>{{ $m->nama_barang}}</td>
                        <td>{{ $m->merk_barang}}</td>
                        <td>{{ $m->qty}}</td>
                        <td>{{ $m->kondisi}}</td>
                        <td>{{ $m->tanggal_pengadaan}}</td>     
                        <td>
                        <button type="submit" class="btn btn-outline-primary" data-toggle="modal" data-target="#formEditModal{{ $m->id }}">
                            Edit
                        </button>
                      
                        <form action="{{ url($m->id. '/barang_inventaris/delete')}}" method="POST">
                            @csrf
                            @method("delete")
                            <button type="submit" class="btn btn-outline-warning" onclick="return confirm('Apakah data mau dihapus')">Hapus</button>
                        </form>
                        </td>
                      </tr>
                      @include('barang_inventaris/edit')  
                      @endforeach
                    </tbody>
    
                      </table>
                      </div>
                      </div>
                  <!-- Card footer -->
                  <div class="card-footer py-4">
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('barang_inventaris/form')
@endsection
@push('script')
<script>
    $('#barang-inventaris-table').DataTable();

</script>
@endpush
