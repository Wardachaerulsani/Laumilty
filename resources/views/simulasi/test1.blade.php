@extends('layouts/header')
@section('content')
<div class="main-content" id="panel">
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
<!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
          <div class="card">
            <div class="card-body">
              <h3>Siimulasi</h3>
            </div>
          </div>
        </div>
        </div>
    </section>

<!-- Main content -->
<section class="content">
    <!-- form -->
    <div class="card">
        <div class="card-body">
        <div class="card-header">
            <h3>Form</h3>
            </div>
            <div class="card-body">
            <form id="formKaryawan">
            <div class="form-group row">
                <label for="id" class="col-sm-2 col-form-label">ID</label>
                 <div class="col-sm-10">
                <input type="text" class="form-control " id="id" placeholder="ID" name="id" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                <input type="text" class="form-control " id="nama" placeholder="Nama" name="nama" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="form-check col-sm-2">
                <input type="radio" class="form-check-input" value="L" name="jk" id="jk">
                <label for="form-check-label">Laki-Laki</label>
                </div>
                 <div class="form-check col-sm-2">
                <input type="radio" class="form-check-input" value="P" name="jk" id="jk">
                <label for="form-check-label">Perempuan</label>
                </div>
            </div>
              <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                <button class="btn btn-primary" id="btnSimpan" type="submit">Simpan</button>
                <button class="btn btn-default" id="btnReset" type="submit">Reset</button>
                </div>
            </div>
            </form>
         <!-- end of form-->
        </div>
    </div>
    </div>
    <!-- data-->
     <div class="card">
        <div class="card-header">
            <h3>Data</h3>
             </div>
            <div class="card-body">
               <div class="card-box table-responsive">
                    <div>
                       <button class="btn btn-success" type="button" id="sorting">Sorting</button>
                    </div>
                      <table id="" class="table align-items-center table-flush" >
                          <thead class="thead-light">
                          <tr>
                              <th scope="col" class="sort" data-sort="name">ID</th>
                              <th scope="col" class="sort" data-sort="budget">Nama</th>
                              <th scope="col" class="sort" data-sort="status">Jenis Kelamin</th>
                          </tr>
                          </thead>
                         <tbody>
                            <tr>
                                <td colspan="3" align="center">Belum ada data</td>
                            </tr>
                         </tbody>
                      </table>
                    </div>
            </div>
    </div>
</section>
 <!-- content-->
</div>
@push('script')
<script>
    function insert(){
        const data = $('#formKaryawan').serializeArray()
        let newData = {}
        data.forEach(function(item, index){
            let name = item['name']
            let value = (name == 'id'? Number(item['value']):item['value'])
            newData[name] = value
        })
        return newData
    }

    $(function(){
        //properti
        let dataKaryawan = []

        //events
        $('#formKaryawan').on('submit', function(e){
            e.preventDefault()
            dataKaryawan.push(insert())
            $('#tblKaryawan tbody').html(showData(dataKaryawan))
            console.log(dataKaryawan)
        })

        //event sorting
          $('sorting').on('click', function(){
          dataKaryawan = insertionSort(dataKaryawan, 'id')

          $('#tblKaryawan tbody').html(showData(dataKaryawan))
          console.log(data)
          })
        //end of event
              
    })

        function showData(arr){
          let row = ''
          if(arr.length == null){
            return row = `<tr><td colspan="3">Belum ada data</td></tr>`
          }
          arr.forEach(function(item, index){
            row += `<tr>`
            row += `<td>${item['id']}</td>`
            row += `<td>${item['nama']}</td>`
            row += `<td>${item['jk']}</td>`
            row += `<tr>`         
          })
          return row
        }

        //sorting
        function insertionSort(arr, key)
        {
          //pengulangan
          let i, j, id, value;
          for (i = 1; i < arr.length; i++)
          {
            value = arr[i];
            id = arr[i][key]
            j = i - 1;
            while (j >= 0 && arr[j] [key] > id) 
            {
              arr[j + 1] = arr[j];
              j--; 
            }
            arr[j + 1] = value;
          }
          return arr
        }
        function searching(arr, key, teks){
          for(let i= 0; i < arr.length; i++){
            if(arr[i] [key] == teks)
            return i
          } 
          return -1
        }
</script>
@endpush
@endsection