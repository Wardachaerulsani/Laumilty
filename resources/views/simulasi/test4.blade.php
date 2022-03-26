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
              <h3>Simulasi  Barang</h3>
              </div>
              <div class="card-body">
            <form id="formBarang">
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="id">ID Karyawan</label>
                        <input type="text" class="form-control " id="id" placeholder="ID" name="id" required>
                      </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="tgl">Tanggal Beli</label>
                      <input type="date" class="form-control " id="tgl" placeholder="Tanggal Beli" name="tgl" required>
                    </div>
                  </div>
                   <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="nama">Nama Barang</label>
                          <select class="form-control form-select-lg mb-3" aria-Label=".form-select-lg example" id="nama" name="nama">
                            <option class="nama" value="Detergen">Detergen</option>
                            <option class="nama" value="Pewangi">Pewangi</option>
                            <option class="nama" value="Detergen Sepatu">Detergen Sepatu</option>
                        </select>
                      </div>
                    </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <div class="col-lg-6">
                    <label class="form-control-label" for="harga">Harga Barang</label>
                     <input type="number" class="form-control" name="harga" id="harga" placeholder="Harga Barang" readonly>
                     </div>
                   
                  </div>
                </div>
                 <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="qty">Jumlah</label>
                    <input type="number" class="form-control " id="qty" placeholder="Jumlah" name="qty" required>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                      <label for="jb" class="form-control-label"> Jenis Pembayaran</label>
                      <div class="form-check col-sm-3 m-2">
                          <input class="form-check-input" type="radio" value="Cash" name="jb" id="jb">
                          <label class="form-check-label">Cash</label>
                      </div>
                      <div class="form-check col-sm-2 m-2">
                          <input class="form-check-input" type="radio" value="Transfer" name="jb" id="jb">
                          <label class="form-check-label">Transfer</label>
                      </div>
                  </div>
                <!-- <input type="hidden" class="form-control" value="" name="gaji_awal" id="gaji_awal" placeholder="Gaji Awal" required> -->
            <div class="modal-footer mt--3">
              <button class="btn btn-outline-primary" id="btnSimpan" type="submit">Input</button>
            </div>
              <!-- <input type="hidden" id="tunjangan" name="tunjangan" value="">
              <input type="hidden" id="total" name="total" value=""> -->
              </form>
          <!-- end of form-->
          </div>
      </div>
      </div>
        <!-- data-->
      <div class="card">
          <div class="card-header">
              <h3>Data Simulasi  Barang</h3>
              </div>
              <div class="card-body">
                <div class="card-box table-responsive">

                      <div class="form-group row">
                        <div class="col-sm-2">
                          <button class="btn btn-outline-success" type="button" id="sorting">Urutkan</button>
                        </div>
                          <input type="search" class="form-control col-sm-2" name="search" id="search">
                          <button class="btn btn-outline-primary" type="button" id="btnSearch">Cari</button>
                      </div>
                        <table id="tblBarang" class="table align-items-center table-flush" >
                            <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">ID</th>
                                <th scope="col" class="sort" data-sort="name">Tanggal Beli</th>
                                <th scope="col" class="sort" data-sort="name">Nama Barang</th>
                                <th scope="col" class="sort" data-sort="name">Harga</th>
                                <th scope="col" class="sort" data-sort="name">Qty</th>
                                <th scope="col" class="sort" data-sort="name">Diskon</th>
                                <th scope="col" class="sort" data-sort="name">Total Harga</th>
                                <th scope="col" class="sort" data-sort="name">Jenis Bayar</th>
                            </tr>
                            </thead>
                            <tbody>   
                            </tbody>
                          <tfoot>
                            <tr>
                              <td colspan="3" align="right"><b>TOTAL</b></td>
                              <td id="totalBayar"></td>
                              <td id="totalQty"></td>
                              <td id="totalDiskon"></td>
                              <td id="totalAkhir"></td>
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
    //method
    function insert(){
        const data = $('#formBarang').serializeArray()
        console.log(data)
        let newData = {}
        let dataBarang = JSON.parse(localStorage.getItem('dataBarang')) || []
        data.forEach(function(item,index){
            let name = item ['name']
            let value = (name === 'id'||
                        name === 'harga' ||
                        name === 'qty' ||
                        name === 'diskon' ||
                        name === 'total'
                         ?  Number(item['value']) : item['value'])
            newData[name] = value
        })
        console.log(newData)
        localStorage.setItem('dataBarang', JSON.stringify([... dataBarang, newData]))
        return newData
    }
    
    function showData(dataBarang){
        let row = ''
        let totalBayar = 0
        let totalQty = 0
        let totalDiskon = 0
        let totalAkhir = 0

        if(dataBarang.length == 0){
            return row = `<tr><td colspan="8" align="center"> Belum Ada Data</td></tr>`
        }
        dataBarang.forEach(function(item,index){
            let diskon = 0
            let subTotal = item['harga'] * item['qty']
            if (subTotal > 50000){
                diskon = 15/100 * subTotal
            }
            let totalHarga = subTotal - diskon
            row += `<tr>`
            row += `<td>${item['id']}</td>`
            row += `<td>${item['tgl']}</td>`
            row += `<td>${item['nama']}</td>`
            row += `<td>${item['harga']}</td>`
            row += `<td>${item['qty']}</td>`
            row += `<td>${diskon}</td>`
            row += `<td>${totalHarga}</td>`
            row += `<td>${item['jb']}</td>`
            row += `</tr>`;

            totalBayar += item.harga;
            totalQty += item.qty;
            totalDiskon += diskon;
            totalAkhir += totalHarga;
        })
        // console.log(row);
        $('#tblBarang tbody').html(row);
        $('#totalBayar').html(totalBayar);
        $('#totalQty').html(totalQty);
        $('#totalDiskon').html(totalDiskon)
        $('#totalAkhir').html(totalAkhir)
        return row
    }

    $('#nama').on('change', function() {
            let value = $('#nama').val()
            console.log(value)
            if (value === 'Detergen') {
                $('#harga').val(15000)
            }
            else if(value === 'Pewangi') {
                $('#harga').val(10000)
            }
            else {
                $('#harga').val(25000)
            }
    })

    function searching(arr,key,teks){
        for(let i = 0; i < arr.length; i++){
            if(arr[i] [key] == teks)
            return i
        }
        return -1
    }

    //after load
    $(function(){ //namanya dokumen ready function
        //initialize
        let dataBarang = JSON.parse(localStorage.getItem('dataBarang')) || [] //pilih local storage(localStorage) atau (||) array([]) kosong
        // console.log(dataBarang) //console log adalah perintah untuk menampilkan data di console
        console.log(dataBarang)
        console.log(dataBarang[0]['id'])

        $('#tblBarang tbody').html(showData(dataBarang))

        //$() = element
        // # = id
        //events
        $('#formBarang').on('submit', function(e){
            e.preventDefault();
            // insert()
            dataBarang.push(insert())
            $('#tblBarang tbody').html(showData(dataBarang))
        })

        //event sorting
        $('#sorting').on('click',function(){
        dataBarang = insertionSort (dataBarang, "id")
        $('#tblBarang tbody').html(showData(dataBarang))
        console.log(dataBarang)
        })
        //end event

        //event searching
        $('#btnSearch').on('click',function(e){
            let teksSearch = $('#search').val()
            let id = searching (dataBarang, 'id', teksSearch)
            let data = []
            if (id>=0)
            data.push(dataBarang[id])
            // console.log(id)
            // console.log(data)
            $('#tblBarang tbody').html(showData(data))
        })
    })

    function insertionSort(arr,key){
        let i,j,id,value;

        for (i=1; i < arr.length; i++)
        {
            value = arr[i]; //data ke-2
            id = arr[i][key] // =2
            j = i - 1; // =0
            while (j >= 0 && arr [j][key] > id) // 1 < 2
            {
                arr[j+1] = arr[j]; //data ke 2 = data ke 1, jadi di balikin
                j--; // -1
            }
            arr[j+1] = value; //data ke 1 = data ke 2
        }
        return arr
    }
</script>
@endpush