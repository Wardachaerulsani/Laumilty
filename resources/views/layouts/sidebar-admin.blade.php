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
              <a class="nav-link" href="/laporan">
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
              <!-- <li class="nav-item">
              <a class="nav-link {{ request()->is('penjemputan') ? 'active' : '' }}" href="/penjemputan">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Penjemputan Laundry</span>
              </a>
            </li> -->
              <li class="nav-item">
              <a class="nav-link {{ request()->is('barang') ? 'active' : '' }}" href="/barang">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text"> Data Barang</span>
              </a>
            </li>
             <!-- <li class="nav-item">
              <a class="nav-link {{ request()->is('barang_inventaris') ? 'active' : '' }}" href="/barang_inventaris">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Barang Inventaris</span>
              </a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link {{ request()->is('data_karyawan') ? 'active' : '' }}" href="/data_karyawan">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Simulasi Transaksi Barang</span>
              </a>
            </li>
        </ul>
        </div>
      </div>
    </div>
  </nav>