@extends('layouts/header')
@section('content')
<!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form action="/paket" method="GET" class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
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
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">PAKET CUCIAN</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Paket</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Paket</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
          <button class="btn btn-success" type="button" data-toggle="modal" data-target="#formInputModal">
            + Tambah
          </button>
            <a href="{{ route('export_paket') }}" class="btn btn-default"><i class="ni ni-single-copy-04"> Export </i></a>
            <button type="button" class="btn btn-warning"  data-toggle="modal" data-target="#formImport">
                <i class="ni ni-single-copy-04" > Import </i>
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
                    <h3 class="mb-0">Data Paket Cucian</h3>
                  </div>
                  <!-- Light table -->
                  <div class="card-box table-responsive">
                      <!-- <div class="table-responsive px-10"> -->
                      <table id="paket-table" class="table align-items-center table-flush" >
                          <thead class="thead-light">
                          <tr>
                              <th scope="col" class="sort" data-sort="name">Id Outlet</th>
                              <th scope="col" class="sort" data-sort="budget">Jenis</th>
                              <th scope="col" class="sort" data-sort="status">Nama Paket</th>
                              <th scope="col" class="sort" data-sort="completion">Harga</th>
                              <th scope="col">Action</th>
                          </tr>
                          </thead>
                      <tbody>
                      @foreach($paket as $pk)
                      <tr>
                        <td>{{ $pk->id_outlet}}</td>
                        <td>{{ $pk->jenis}}</td>
                        <td>{{ $pk->nama_paket}}</td>
                        <td>{{ $pk->harga}}</td>        
                        <td>
                        {{-- edit produk --}}
                        <button type="submit" class="btn btn-outline-primary" data-toggle="modal" data-target="#formEditModal{{ $pk->id }}">
                            Edit
                        </button>
                        {{-- delete-mobil --}}
                        <form action="{{ url($pk->id. '/paket/delete')}}" method="POST">
                            @csrf
                            @method("delete")
                            <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah data mau dihapus')">Hapus</button>
                        </form>
                        </td>
                      </tr>
                  @include('paket/edit')  
                  @endforeach
                    </tbody>
                      </table>
                      <!-- </div> -->
                      </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('paket/form')
@endsection
@push('script')
<script>
     $('#paket-table').DataTable();

     $('#btn-export-xls').on('click', function(e){
       window.location = '{{ url("paket/export/xls") }}';
     })
</script>
@endpush
