@extends('layouts/header')
@section('content')
  <div class="main-content">
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
  <!-- Main content -->
  <section class="content">
      <!-- form -->
      <div class="card">
          <div class="card-body">
          <div class="card-header">
              <h3>Form Simulasi Buku</h3>
              </div>
              <div class="card-body">
            <form id="formBuku">
              <div class="form-group row">
                  <label for="id_buku" class="col-sm-2 col-form-label">Id Buku</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control " id="id_buku" placeholder="ID" name="id_buku" required>
                  </div>
              </div>
              <div class="form-group row">
                  <label for="judul_buku" class="col-sm-2 col-form-label">Judul Buku</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control " id="judul_buku" placeholder="Judul" name="judul_buku" required>
                  </div>
              </div>
              <div class="form-group row">
                  <label for="pengarang" class="col-sm-2 col-form-label">Pengarang</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control " id="pengarang" placeholder="Pengarang" name="pengarang" required>
                  </div>
              </div>
                <div class="form-group row">
                  <label for="tahun_terbit" class="col-sm-2 col-form-label">Tahun Terbit</label>
                  <div class="col-sm-10">
                  <select name="tahun_terbit" id="tahun_terbit" class="form-control form-select-lg" aria-label="">
                    <option> Pilih </option>
                    @for ($i=date('Y'); $i > 1960; $i--)
                      <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                  </select>
                  </div>
              </div>
              <div class="form-group row">
                  <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                  <div class="col-sm-10">
                  <input type="number" class="form-control " id="harga" placeholder="Harga" name="harga" required>
                  </div>
              </div>
              <div class="form-group row">
                  <label for="qty" class="col-sm-2 col-form-label">Jumlah</label>
                  <div class="col-sm-10">
                  <input type="number" class="form-control " id="qty" placeholder="Jumlah" name="qty" required>
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
              <h3>Data Simulasi Buku</h3>
              </div>
              <div class="card-body">
                <div class="card-box table-responsive">
                      <!-- <div>
                        <button class="btn btn-success" type="button" id="sorting">Sorting</button>
                      </div> -->
                      <div class="form-group row">
                        <div class="col-sm-2">
                          <button class="btn btn-success" type="button" id="sorting">Sorting</button>
                        </div>
                          <input type="search" class="form-control col-sm-2" name="search" id="search">
                          <button class="btn btn-success" type="button" id="btnSearch">Cari</button>
                      </div>
                        <table id="tblBuku" class="table align-items-center table-flush" >
                            <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">Id Buku</th>
                                <th scope="col" class="sort" data-sort="budget">Judul Buku</th>
                                <th scope="col" class="sort" data-sort="status">Pengarang</th>
                                <th scope="col" class="sort" data-sort="status">Tahun Terbit</th>
                                <th scope="col" class="sort" data-sort="status">Harga Buku</th>
                                <th scope="col" class="sort" data-sort="status">Jumlah</th>
                            </tr>
                            </thead>
                          <tbody>
                              <!-- <tr>
                                  <td colspan="3" align="center">Belum ada data</td>
                              </tr> -->
                          </tbody>
                        </table>
                      </div>
              </div>
      </div>
  </section>
  </div>
@endsection
@push('script')
  <script>
    //methods
    function insert(){
      const data = $('#formBuku').serializeArray()
      let newData = {}
      let dataBuku = JSON.parse( localStorage.getItem('dataBuku')) || []
      data.forEach(function(item, index){
        let name = item['name']
        let value = (name === 'id_buku' ||
                      name === 'qty' ||
                      name === 'harga'
                     ? Number(item['value']):item['value'])
        newData[name] = value
      })

      
      // = ngisi data,
      //== perbandingan, (tidak memperhatikan tipe data jadi nilainya sama)
      //=== identik
      console.log(newData)
      localStorage.setItem('dataBuku', JSON.stringify([ ...dataBuku, newData])) //storage hanya bisa menggunakan string
      //...dataBuku = spread operator (copy data baru)
      return newData
    }
    function showData(dataBuku){
          let row = ''
          // let arr = JSON.parse( localStorage.getItem('dataBuku')) || []
          if(dataBuku.length == 0){
            return row = `<tr><td colspan="3" align="center">Belum ada data</td></tr>`
          }
          dataBuku.forEach(function(item, index){
            row += `<tr>`
            row += `<td>${item['id_buku']}</td>`
            row += `<td>${item['judul_buku']}</td>`
            row += `<td>${item['pengarang']}</td>`
            row += `<td>${item['tahun_terbit']}</td>`
            row += `<td>${item['harga']}</td>`
            row += `<td>${item['qty']}</td>`
            row += `<tr>`         
          })
          return row
        }
        //sorting
        function insertionSort(arr, key)
        {
          console.log(key)
          //pengulangan
          let i, j, id, value;
          for (i = 1; i < arr.length; i++)
          {
            value = arr[i];
            id = arr[i][key]
            j = i - 1;
            while (j >= 0 && arr[j][key] > id) 
            {
              arr[j + 1] = arr[j];
              j = j - 1; 
            }
            arr[j + 1] = value;
            console.log(arr)
          }
          return arr
        }

        //searching
        function searching(arr, key, teks){
          for(let i= 0; i < arr.length; i++){
            if(arr[i][key] == teks)
            return i
          } 
          return -1
        }
        //after load
        $(function(){
          //initialize
          let dataBuku = JSON.parse( localStorage.getItem('dataBuku')) || [] //pemilihan 
          // console.log(dataBuku)//perintah untuk menampilkan di console
          $('#tblBuku tbody').html(showData(dataBuku))

          //events (trigger)
          $('#formBuku').on('submit', function(e){
            e.preventDefault();
            dataBuku.push(insert())
            $('#tblBuku tbody').html(showData(dataBuku))
          }) 
          //event sorting
          $('#sorting').on('click', function(){
          dataBuku = insertionSort(dataBuku, 'id_buku')
          $('#tblBuku tbody').html(showData(dataBuku))
          // console.log(dataBuku)
          })
          //end of event
          //event search
          $('#btnSearch').on('click', function(e){
            let teksSearch = $('#search').val()
            let id = searching(dataBuku,'id_buku', teksSearch)
            let data = []
            if(id >= 0)
              data.push(dataBuku[id])
              console.log(id)
              console.log(data)
              $('#tblBuku tbody').html(showData(data))
          })
        })
  </script>
@endpush