<div class="main-content" id="dataLaundry">
          <div class="row">
              <!-- @if(session('success'))
              <div class="alert alert-success" role="alert" id="success-alert">
              {{ session('success') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </div>
              @endif -->
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
                    <h3 class="mb-0">Data Transaksi</h3>
                  </div>
                  <!-- Light table -->
                  <div class="card-box table-responsive">
                      <!-- <div class="table-responsive px-10"> -->
                      <table id="laporan-table" class="table align-items-center table-flush">
                          <thead class="thead-light">
                          <tr>
                              <th>No</th>
                              <th scope="col" class="sort" data-sort="name">Kode Invoice</th>
                              <th scope="col" class="sort" data-sort="budget">Nama Paket</th>
                              <th scope="col" class="sort" data-sort="status">Status</th>
                              <th scope="col" class="sort" data-sort="status">Dibayar</th>
                              <th scope="col" class="sort" data-sort="status">Tanggal</th>
                              <th scope="col" class="sort" data-sort="status">Estimasi</th>
                              <th scope="col" class="sort" data-sort="status">Action</th>
                          </tr>
                          </thead>
                          <tbody>
                    </tbody>
                    @foreach ($detail_transaksi as $d)
                    <tr>
                        <td>{{ $i = (isset($i)?++$i:$i=1) }}</td>
                        <td>{{ $d->transaksi->kode_invoice }}</td>
                        <td>{{ $d->paket->nama_paket }}</td>
                        <td>{{ $d->transaksi->status }}</td>
                        <td>{{ $d->transaksi->dibayar }}</td>
                        <td>{{ $d->transaksi->tgl}}</td>
                        <td>{{ $d->transaksi->batas_waktu }}</td>
                        <td>
                             <button class="btn btn-outline-primary" type="button" data-toggle="modal" data-target="#Detail{{ $d->id }}">
                              <i class="ni ni-book-bookmark"></i>
                            </button>
                            <a href="{{ url($d->id. '/print')}}" class="btn btn-outline-success"><i class="ni ni-paper-diploma"></i></a>
                        </td>
                     </tr>
                    @include('transaksi/detail')
                    @endforeach
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