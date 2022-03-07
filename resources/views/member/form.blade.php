<div class="modal fade" id="formInputModal" tabindex="-1" role="dialog" aria-labelleby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Member</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="/member">
          @csrf
          <div id="method"></div>
            <div class="card-body mt--4">
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control " id="nama" placeholder="Nama" name="nama">
              </div>
                <div class="form-group ">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat" >
              </div>
                <div class="form-group">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <div class="input-group m-1">
                        <select class="form-control form-select-lg mb-3" aria-Label=".form-select-lg example" id="jenis_kelamin" name="jenis_kelamin">
                        <option>Pilih Jenis</option>
                            <option class="jenis_kelamin" value="L">L</option>
                            <option class="jenis_kelamin" value="P">P</option>
                        </select>
                    </div>
                </div>
                
              <div class="form-group">
                <label for="tlp">No. Telp</label>
                <input type="text" class="form-control" id="tlp" placeholder="No. Telp" name="tlp">
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
  <!-- modal import -->
<div class="modal fade" id="formImport" tabindex="-1" role="dialog" aria-labelleby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Import Data Member</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <form action="member/import" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="jenis">File Excel</label>
              <input type="file" name="import" id="import">
            </div>
          </div>
      </div>
            <div class="modal-footer mt--5">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" id="btn-submit">Upload</button>
            </div>
          </div>
        </div>
      </form>
  </div>
  </div>

