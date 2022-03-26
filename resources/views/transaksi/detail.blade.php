<div class="modal fade" id="Detail{{ $d->id }}" tabindex="-1" role="dialog" aria-labelleby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Detail Transaksi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
     <div class="main-content">
     <div class="container-fluid ">
    <div class="">
    <div class="row">
    <div class="nav-wrapper">
    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
        <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#transaksi{{ $d->id }}" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true">
                <i class="ni ni-single-copy-04 mr-3"></i>Data Transaksi</a>
        </li>
        <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#paket{{ $d->id }}" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false">
                <i class="ni ni-collection mr-3"></i>Paket</a>
        </li>
        <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#member{{ $d->id }}" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false">
                <i class="ni ni-single-02 mr-3"></i>Member</a>
        </li>
    </ul>
    <div class="tab-content">
         <div class="tab-pane show active" id="transaksi{{ $d->id }}">
             &nbsp;
            <h4>Keterangan</h4>
            <p class="my-auto"><small class="text-muted">Status transaksi : {{ $d->Transaksi->status }}</small></p>
            <p class="my-auto"><small class="text-muted">Status pembayaran : {{ $d->Transaksi->dibayar}}</small></p>
            <p class="my-auto"><small class="text-muted">Tanggal Masuk : {{ $d->Transaksi->tgl }}</small></p>
            <p class="my-auto"><small class="text-muted">Estimasi : {{ $d->Transaksi->batas_waktu }}</small></p>
            <p class="my-auto"><small class="text-muted">Nama member : {{ $d->Transaksi->member->nama }}</small></p>
            <p class="my-auto"><small class="text-muted">Nama paket: {{ $d->paket->nama_paket }}</small></p>
            <p class="my-auto"><small class="text-muted">Jenis paket : {{ $d->paket->jenis }}</small></p>
            <p class="my-auto"><small >Harga paket : {{ $d->paket->harga }}</small></p>
            <p class="my-auto"><small >Jumlah paket : {{ $d->qty }}</small></p>
            <p class="my-auto"><small >Diskon : {{ $d->Transaksi->diskon }}%</small></p>
            <p class="my-auto"><small >Pajak : {{ $d->Transaksi->pajak }}%</small></p>
            <p class="my-auto"><small >Biaya tambahan : {{ $d->Transaksi->biaya_tambahan }}</small></p>
            <p class="my-auto"><small >Total akhir : {{ $d->Transaksi->total }}</small></p>
            <p class="my-auto"><small>{{ $d->Transaksi->kode_invoice }}</small></p>
        </div>
        <div class="tab-pane show" id="paket{{ $d->id }}">
             &nbsp;
            <h4>Keterangan</h4>
            <p class="my-auto"><small class="text-muted">Nama paket : {{ $d->paket->nama_paket }}</small></p>
            <p class="my-auto"><small class="text-muted">Harga paket : {{ $d->paket->harga }}</small></p>
            <p class="my-auto"><small class="text-muted">Jumlah paket : {{ $d->qty }}</small></p>
            <p class="my-auto"><small class="text-muted">Jenis paket : {{ $d->paket->jenis }}</small></p>
            <p class="my-auto"><small class="text-muted">Outlet : {{ $d->paket->outlet->nama }}</small></p>
        </div>
         <div class="tab-pane show" id="member{{ $d->id }}">
             &nbsp;
            <h4>Keterangan</h4>
            <p class="my-auto"><small class="text-muted">Nama : {{ $d->Transaksi->member->nama }}</small></p>
            <p class="my-auto"><small class="text-muted">Alamat : {{ $d->Transaksi->member->alamat }}</small></p>
            <p class="my-auto"><small class="text-muted">Jenis Kelamin : {{ $d->Transaksi->member->jenis_kelamin }}</small></p>
            <p class="my-auto"><small class="text-muted">Telepon : {{ $d->Transaksi->member->tlp }}</small></p>
        </div>
    </div>
    </div>
        </div>
        </div>
        </div>
    </div>
  </div>
  </div>