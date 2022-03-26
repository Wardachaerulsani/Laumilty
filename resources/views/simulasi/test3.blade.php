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
              <h3>Simulasi Gaji Karyawan</h3>
              </div>
              <div class="card-body">
            <form id="formGaji">
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="id">ID</label>
                        <input type="text" class="form-control " id="id" placeholder="ID" name="id" required>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="nama">Nama karyawan</label>
                         <input type="text" class="form-control " id="nama"placeholder="Nama Karyawan" name="nama" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="jk">Jenis Kelamin</label>
                       <select class="form-control form-select-lg mb-3" aria-Label=".form-select-lg example" id="jk" name="jk">
                            <option class="jk" value="L">L</option>
                            <option class="jk" value="P">P</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="jenis">Status Menikah</label>
                          <select class="form-control form-select-lg mb-3" aria-Label=".form-select-lg example" id="jenis" name="jenis">
                            <option class="jenis" value="single">Single</option>
                            <option class="jenis" value="couple">Couple</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="ja">Jumlah Anak</label>
                       <input type="number" class="form-control " id="ja" placeholder="Jumlah" name="ja" required>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="mulai">Mulai Bekerja</label>
                        <input type="date" class="form-control " id="mulai" placeholder="Mulai Bekerja" name="mulai" required>
                      </div>
                    </div>
                  </div>
                </div>
                <input type="hidden" class="form-control" value="2000000" name="gaji_awal" id="gaji_awal" placeholder="Gaji Awal" required>
                <div class="form-group row">
                  <label for="nama" class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-20">
                  <button class="btn btn-outline-primary" id="btnSimpan" type="submit">Simpan</button>
                  </div>
              </div>
              <input type="hidden" id="tunjangan" name="tunjangan" value="">
              <input type="hidden" id="total" name="total" value="">
              </form>
          <!-- end of form-->
          </div>
      </div>
      </div>
        <!-- data-->
      <div class="card">
          <div class="card-header">
              <h3>Data Simulasi Gaji Karyawan</h3>
              </div>
              <div class="card-body">
                <div class="card-box table-responsive">
                      <!-- <div>
                        <button class="btn btn-success" type="button" id="sorting">Sorting</button>
                      </div> -->
                      <div class="form-group row">
                        <div class="col-sm-2">
                          <button class="btn btn-outline-success" type="button" id="sorting">Urutkan</button>
                        </div>
                          <input type="search" class="form-control col-sm-2" name="search" id="search">
                          <button class="btn btn-outline-primary" type="button" id="btnSearch">Cari</button>
                      </div>
                        <table id="tblGaji" class="table align-items-center table-flush" >
                            <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">ID</th>
                                <th scope="col" class="sort" data-sort="name">Nama</th>
                                <th scope="col" class="sort" data-sort="name">JK</th>
                                <th scope="col" class="sort" data-sort="name">Status</th>
                                <th scope="col" class="sort" data-sort="name">Jml Anak</th>
                                <th scope="col" class="sort" data-sort="name">Mulai Bekerja</th>
                                <th scope="col" class="sort" data-sort="name">Gaji Awal</th>
                                <th scope="col" class="sort" data-sort="name">Tunjangan</th>
                                <th scope="col" class="sort" data-sort="name">Total gaji</th>
                            </tr>
                            </thead>
                          <tbody>
                            {{-- <tr>
                            
                            </tr> --}}
                          </tbody>
                          <tfoot>
                            <tr>
                              <td colspan="6" align="right"><b>TOTAL</b></td>
                              <td id="totalAwal"></td>
                              <td id="totalTunjangan"></td>
                              <td id="totalTotal"></td>
                            </tr>
                          </tfoot>
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
        ta = tunjanganAnak($('#ja').val());
        tm = tunjanganMasaKerja(calculateTotalYear($('#mulai').val()));
        tc = tunjanganCouple($('#jenis').val());
        tt = ta+tm+tc;
        $('#tunjangan').val(tt);
        $('#total').val(tt + 2000000);

      const data = $('#formGaji').serializeArray()
      let newData = {}
      let dataGaji = JSON.parse(localStorage.getItem('dataGaji')) || []
      data.forEach(function(item, index){
          let name = item['name'] 
          let value = (name === 'id' ||
                        name === 'gaji_awal'||
                        name === 'total'||
                        name === 'tunjangan'
                        ? Number(item['value']):item['value'])
          newData[name] = value
        })
        
        
        // = ngisi data,
        //== perbandingan, (tidak memperhatikan tipe data jadi nilainya sama)
        //=== identik
        console.log(newData)
        localStorage.setItem('dataGaji', JSON.stringify([ ...dataGaji, newData])) //storage hanya bisa menggunakan string
      //...dataGaji = spread operator (copy data baru)
      return newData
    }
     function showData(dataGaji){
          let row = ''
          let totalAwal = 0
          let totalTunjangan = 0
          let totalTotal = 0
        //   let arr = JSON.parse( localStorage.getItem('dataGaji')) || []
          if(dataGaji.length == 0){
            return row = `<tr><td colspan="9" align="center">Belum ada data</td></tr>`
          }
          dataGaji.forEach(function(item, index){
            row += `<tr>`
            row += `<td>${item['id']}</td>`
            row += `<td>${item['nama']}</td>`
            row += `<td>${item['jk']}</td>`
            row += `<td>${item['jenis']}</td>`
            row += `<td>${item['ja']}</td>`
            row += `<td>${item['mulai']}</td>`
            row += `<td>${item['gaji_awal']}</td>`
            row += `<td>${item['tunjangan']}</td>`
            row += `<td>${item['total']}</td>`
            row += `</tr>`       
            
            totalAwal += item['gaji_awal'];
            totalTunjangan += item['tunjangan'];
            totalTotal += item['total'];
          });
          $('#tblGaji tbody').html(row);
          $('#totalAwal').html(totalAwal);
          $('#totalTunjangan').html(totalTunjangan);
          $('#totalTotal').html(totalTotal);
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
                while (j >= 0 && arr[j][key] > id) 
                {
                    arr[j + 1] = arr[j];
                    j = j - 1; 
                }
                arr[j + 1] = value;
                console.log(arr)
                console.log(key)
          }
          return arr
        }
         //searching
        function searching(arr, key, teks){
          for(let i= 0; i < arr.length; i++){
              //kenapa harus nol?
            if(arr[i][key] == teks)
            return i
          } 
          return -1
        }
            $('#jenis').on('change', function() {
            let value = $('#jenis').val()
            console.log(value)
            if (value == 'single') {
                $('#ja').val(0)
                $('#ja').attr('readonly', true)
            } else {
                $('#ja').attr('readonly', false)

            }
        })
        $(function(){
         //initialize
          let dataGaji = JSON.parse( localStorage.getItem('dataGaji')) || [] //pemilihan 
          $('#tblGaji tbody').html(showData(dataGaji))
          
          //events (trigger)
          $('#formGaji').on('submit', function(e){
              e.preventDefault();
              dataGaji.push(insert())
              $('#tblGaji tbody').html(showData(dataGaji))
              console.log(dataGaji)//perintah untuk menampilkan di console
          }) 
          //event sorting
          $('#sorting').on('click', function(){
              dataGaji = insertionSort(dataGaji, 'id')
              $('#tblGaji tbody').html(showData(dataGaji))
              console.log(dataGaji)
          })
        //event search
          $('#btnSearch').on('click', function(e){
            let teksSearch = $('#search').val()
            console.log(teksSearch)
            let id = searching(dataGaji,'id', teksSearch)
            let data = []
            if(id >= 0)
              data.push(dataGaji[id])
              $('#tblGaji tbody').html(showData(data))
          })
          //end of event
    })

            const calculateTotalYear = (tanggal_awal) => {
            tanggal_awal = new Date(tanggal_awal);
            let ageDifMs = Date.now() - tanggal_awal.getTime();
            if (ageDifMs > 0) {
                let ageDate = new Date(ageDifMs);
                return Math.abs(ageDate.getUTCFullYear() - 1970);
            }
            return 0;
            }

            function tunjanganMasaKerja(lama){
            tunjanganB = lama * 150000;
            return tunjanganB
            }

            function tunjanganAnak(anak){
            if(anak > 0){
                if(anak >= 2){
                    return 300000
                }else{
                    return 150000
                }
            }
            return 0
            }
            
            function tunjanganCouple(status){
            if(status == "couple"){
                return  250000
            }else{
                return 0
            }
            }

</script>
@endpush