@extends('layouts/header')
@section('content')
<!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form action="/barang" method="GET" class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
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
              <h6 class="h2 text-white d-inline-block mb-0">Data Barang</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
            <button class="btn btn-success" type="button" data-toggle="modal" data-target="#formInputModal">
            + Tambah
          </button>
            <a href="{{ route('export_barang') }}" class="btn btn-default"><i class="ni ni-single-copy-04"> Export </i></a>
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
                    <h3 class="mb-0">Data Barang </h3>
                  </div>
                  <!-- Light table -->
                  <div class="card-box table-responsive">
                      <!-- <div class="table-responsive px-10"> -->
                      <table id="tb-barang" class="table align-items-center table-flush">
                          <thead class="thead-light">
                          <tr>
                              <th>No</th>
                              <th scope="col" class="sort" data-sort="name">Nama
                                <br> Barang</th>
                                <th scope="col" class="sort" data-sort="name">Qty</th>
                              <th scope="col" class="sort" data-sort="name">Harga </th>
                              <th scope="col" class="sort" data-sort="name">Waktu Beli</th>
                              <th scope="col" class="sort" data-sort="name">Supplier</th>
                               <th scope="col" class="sort" data-sort="name">Status
                                  <br>Barang</th>
                              <th scope="col" class="sort" data-sort="name">Waktu Update 
                                  <br>Status</th>
                              <th scope="col" class="sort" data-sort="name">Stok
                                  <br>Action</th>
                          </tr>
                          </thead>
                          <tbody>
                        @foreach($barang as $b)
                        <tr>
                            <td>{{ $i = (isset($i)?++$i:$i=1) }}
                              <input type="hidden"class="id" value="{{ $b->id }}">
                            </td>
                            <td>{{ $b->nama}}</td>
                            <td>{{ $b->qty}}</td>
                            <td>{{ $b->harga}}</td>
                            <td>{{ $b->beli}}</td>
                            <td>{{ $b->supplier }}</td>
                           <td> <select name="status" class="status" id="one">
                                <option value="diajukan_beli"
                                    {{ $b->status == 'diajukan_beli' ? 'selected' : '' }}>
                                    Diajukan Beli</option>
                                <option value="habis"
                                    {{ $b->status == 'habis' ? 'selected' : '' }}>
                                    Habis</option>
                                <option value="tersedia"
                                    {{ $b->status == 'tersedia' ? 'selected' : '' }}>
                                    Tersedia</option>
                            </select>
                        </td>  
                        <td>
                            {{ $b->update }}
                            <input type="date" hidden class="update" value="{{ date('Y-m-d') }}">
                        </td>  
                          <td>
                            <button type="submit" class="btn btn-outline-primary" data-toggle="modal" data-target="#formEditModal{{ $b->id }}">
                                Edit
                            </button>
                        
                            <form action="{{ url($b->id. '/barang/delete')}}" method="POST">
                                @csrf
                                @method("delete")
                                <button type="submit" class="btn btn-outline-warning" onclick="return confirm('Apakah data mau dihapus')">Hapus</button>
                            </form>
                          </td>
                        </tr>
                        @include('barang/edit')  
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
  @include('barang/form')
@endsection
@push('script')
<script>
  $(function() {
     $('#tb-barang').DataTable();

      $('#btn-export-xls').on('click', function(e){
        window.location = '{{ url("barang/export/xls") }}';
      })
       $('#tb-barang').on('change', '.status', function() {
                let status = $(this).closest('tr').find('.status').val()
                let update = $(this).closest('tr').find('.update').val()
                let id = $(this).closest('tr').find('.id').val()
                let data = {
                    id: id,
                    status: status,
                    update: update,
                    _token: "{{ csrf_token() }}"
                };
                $.post('{{ route('status_barang') }}', data, function(msg) {
                })
                    Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Status Berhasil diubah',
                    showConfirmButton: false,
                    timer: 1500
                })
                 console.log(update);
                console.log(status);
                console.log(id);
            })
  
  })

</script>
@endpush
