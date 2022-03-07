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
        <form method="POST" action="/barang_inventaris">
          @csrf
          <div id="method"></div>
            <div class="card-body mt--4">
              <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" class="form-control " id="nama_barang" placeholder="Nama Barang" name="nama_barang">
              </div>
            <div class="form-group ">
                <label for="merk_barang">Merk Barang</label>
                <input type="text" class="form-control" id="merk_barang" placeholder="Merk Barang" name="merk_barang" >
              </div>
               <div class="form-group ">
                <label for="qty">Qty</label>
                <input type="text" class="form-control" id="qty" placeholder="Merk Barang" name="qty" >
              </div>
                <div class="form-group">
                    <label for="kondisi" class="form-label">Kondisi</label>
                    <div class="input-group m-1">
                        <select class="form-control form-select-lg mb-3" aria-Label=".form-select-lg example" id="kondisi" name="kondisi">
                        <option>Pilih Kondisi</option>
                            <option class="kondisi" value="layak_pakai">Layak Pakai</option>
                            <option class="kondisi" value="rusak_ringan">Rusak Ringan</option>
                            <option class="kondisi" value="rusak_berat">Rusak Berat</option>
                        </select>
                    </div>
                </div>
                
              <div class="form-group">
                <label for="tanggal_pengadaan">Tanggal</label>
                <input type="date" class="form-control" id="tanggal_pengadaan" placeholder="Tanggal Pengadaan" name="tanggal_pengadaan">
              </div>
          </div>
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

