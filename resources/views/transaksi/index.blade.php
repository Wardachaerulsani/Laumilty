@extends('layouts/header')
@section('content')
<!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
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
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-bell-55"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                <!-- Dropdown header -->
                <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</h6>
                </div>
                <!-- List group -->
                <div class="list-group list-group-flush">
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                </div>
                <!-- View all -->
                <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-ungroup"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default  dropdown-menu-right ">
                <div class="row shortcuts px-4">
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                      <i class="ni ni-calendar-grid-58"></i>
                    </span>
                    <small>Calendar</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                      <i class="ni ni-email-83"></i>
                    </span>
                    <small>Email</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                      <i class="ni ni-credit-card"></i>
                    </span>
                    <small>Payments</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                      <i class="ni ni-books"></i>
                    </span>
                    <small>Reports</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                      <i class="ni ni-pin-3"></i>
                    </span>
                    <small>Maps</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                      <i class="ni ni-basket"></i>
                    </span>
                    <small>Shop</small>
                  </a>
                </div>
              </div>
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
                    <span class="mb-0 text-sm  font-weight-bold"> {{ auth()->user()->nama }}</span>
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
<div class="main-content">
    <div class="container-fluid ">
        <div class="">
        <div class="row">
            <ul class="nav mt-3">
            <li class="nav-item">
                <a class="nav-link active" id="nav-data" href="#dataLaundry" data-toggle="collapse"  role="button" aria-expanded="false" aria-controls="collapseExample">Data Laundry </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" id="nav-form" href="#formLaundry" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">Cucian Baru</a>
            </li>
            </ul>
        </div>
        </div>
        <div class="card" style="border-top: 0px;">
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
        <form action="transaksi" method="post">
        @csrf
        @include('transaksi.form')
        @include('transaksi.data')
        <input type="hidden"  name="id_member" id="id_member">
        </form>
        </div>
    </div>

</div>


@endsection
@push('script')
<script>
//Script untuk menu data dan form transaksi
    $('#dataLaundry').collapse('show')

    $('#dataLaundry').on('show.bs.collapse', function(){
        $('#formLaundry').collapse('hide');
        $('#nav-from').removeClass('active');
        $('#nav-data').addClass('active');
    })
     $('#formLaundry').on('show.bs.collapse', function(){
        $('#dataLaundry').collapse('hide');
        $('#nav-data').removeClass('active');
        $('#nav-form').addClass('active');
    })
    //initialize
    let subtotal = total = 0;
    $(function(){
      $('#tblMember').DataTable();
    })
    //end of initialize

    //action
    //pemilihan member
    $('#tblMember').on('click', '.pilihMemberBtn', function(){
      pilihMember(this)
      $('#modalMember').modal('hide')
    })
    //

    //pemilihan paket
    $('#tblPaket').on('click', '.pilihPaketBtn', function(){
      pilihPaket(this)
      $('#modalPaket').modal('hide')
    })
    //

    //function pilihMember
    function pilihMember(x){
      const tr = $(x).closest('tr')
      const namaJK = tr.find('td:eq(1)').text()+"/"+tr.find('td:eq(2)').text()
      const biodata = tr.find('td:eq(4)').text()+"/"+tr.find('td:eq(3)').text()
      const idMember = tr.find('.idMember').val()
      $('#nama-pelanggan').text(namaJK)
      $('#biodata-pelanggan').text(biodata)
      $('#id_member').val(idMember)
    }

    //function pilihPaket
    function pilihPaket(x){
      const tr = $(x).closest('tr')
      const namaPaket = tr.find('td:eq(1)').text()
      const harga = tr.find('td:eq(2)').text()
      const idPaket = tr.find('.idPaket').val()

      let data = ''
      let tbody = $('#tblTransaksi tbody tr td').text()
      data += '<tr>'
      data += `<td> ${namaPaket} </td>`
      data += `<td> ${harga} </td>`;
      data += `<input type="hidden" name="id_paket[]" value="${idPaket}">`
      data += `<td><input type="number" value="1" min="1" class="qty" name="qty[]" size="2" style="width:40px"></td>`;
      data += `<td><label name="sub_total[]" class="subTotal">${harga}</label></td>`;
      data += `<td><button type="button" class="btnRemovePaket"><span class="fas fa-times-circle"></span></button></td>`;
      data += '</tr>';

      if(tbody == 'Belum ada data') $('#tblTransaksi tbody tr').remove();

      $('#tblTransaksi tbody').append(data);

      subtotal += Number(harga)
      total = subtotal - Number($('#diskon').val()) + Number($('#pajak-harga').val())
      $('#subtotal').text(subtotal)
      $('#total').text(total)
    }

    //function hitung total
    function hitungTotalAkhir(a){
      let qty = Number($(a).closest('tr').find('.qty').val());
      let harga = Number($(a).closest('tr').find('td:eq(1)').text());
      let subTotalAwal = Number($(a).closest('tr').find('.subTotal').text());
      let count = qty * harga;
      subtotal = subtotal - subTotalAwal + count
      total = subtotal - Number($('#diskon').val()) + Number($('#pajak-harga').val())
      $(a).closest('tr').find('.subTotal').text(count)
      $('#subtotal').text(subtotal)
      $('#total').text(total)
    }
    
    //onchage qty
    $('#tblTransaksi').on('change', '.qty', function(){
      hitungTotalAkhir(this)
    })

    //remove paket
    $('#tblTransaksi').on('click', '.btnRemovePaket', function(){
      let subTotalAwal = parseFloat($(this).closest('tr').find('.subTotal').text());
      subtotal -= subTotalAwal
      total -= subTotalAwal;

      $currentRow = $(this).closest('tr').remove();
      $('#subtotal').text(subtotal)
      $('#total').text(total)
    })
   
</script>
@endpush
