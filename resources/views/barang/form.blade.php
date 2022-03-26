<div class="modal fade" id="formInputModal" tabindex="-1" role="dialog" aria-labelleby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Barang</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="/barang">
          @csrf
          <div id="method"></div>
            <div class="card-body mt--4">
               <div class="form-group ">
                <label for="nama">Nama Barang</label>
                <input type="text" class="form-control" id="nama" placeholder="Nama Barang" name="nama" >
              </div>
              <div class="form-group ">
                <label for="qty">Qty</label>
                <input type="number" class="form-control" id="qty" placeholder="Jumlah Barang" name="qty" >
              </div>
               <div class="form-group ">
                <label for="harga">Harga</label>
                <input type="number" class="form-control" id="harga" placeholder="Harga Barang" name="harga" >
              </div>
              <div class="form-group ">
                <label for="beli">Waktu Beli</label>
                <input type="date" class="form-control" id="beli" placeholder="Waktu Beli" name="beli" >
              </div>
               <div class="form-group ">
                <label for="supplier">Supplier</label>
                <input type="text" class="form-control" id="supplier" placeholder="Supplier" name="supplier" >
              </div>
                <div class="form-group">
                    <label for="status" class="form-label">Status Barang</label>
                    <div class="input-group m-1">
                        <select class="form-control form-select-lg mb-3" aria-Label=".form-select-lg example" id="status" name="status">
                        <option>Pilih Status</option>
                            <option class="status" value="diajukan_beli">Diajukan Beli</option>
                            <option class="status" value="habis">Habis</option>
                            <option class="status" value="tersedia">tersedia</option>
                        </select>
                    </div>
                </div>

                <input type="date"hidden class="form-control" id="update" placeholder="Waktu update" name="update" value="{{ date('Y-m-d') }}" >
            
            <!-- /.card-body -->
            <div class="modal-footer mt--5">
              <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </div>
        </form>
  </div>
  </div>
<!-- modal import -->
</div>
<div class="modal fade" id="formImport" tabindex="-1" role="dialog" aria-labelleby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
        <form action="barang/import" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Import Data </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <div class="card-body">
            <div class="form-group">
              <label for="jenis">File Excel</label>
              <input type="file" name="import" id="import">
            </div>
          </div>
        </div>
            <!-- /.card-body -->
        <div class="modal-footer mt--5">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" id="btn-submit">Upload</button>
        </div>
      </div>
    </form>
    </div>
  </div>

