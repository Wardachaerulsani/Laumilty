<div class="modal fade" id="formInputModal" tabindex="-1" role="dialog" aria-labelleby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Paket</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
    <form method="POST" action="/paket">
          @csrf
          <div id="method"></div>
            <div class="card-body mt--4">
              <input type="hidden" id="id" name="id">
              <div class="form-group">
                <label for="id_outlet">Id Outlet</label>
                <select class="form-control form-select-lg mb-3" aria-Label=".form-select-lg example" id="id_outlet" name="id_outlet">
                <option selected>Pilih Option</option>
                @foreach  ($outlet as $o)
                <option value="{{ $o->id }}">{{ $o->nama }}</option>
                @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="jenis">Jenis Paket</label>
                <div>
                    <select class="form-control form-select-lg mb-3" aria-Label=".form-select-lg example" id="jenis" name="jenis">
                      <option>Pilih Jenis</option>
                        <option name="jenis" value="kiloan">Kiloan</option>
                        <option name="jenis" value="selimut">Selimut</option>
                        <option name="jenis" value="bed_cover">Bed Cover</option>
                        <option name="jenis" value="kaos">Kaos</option>
                        <option name="jenis" value="lain">Lain</option>
                    </select>
                </div>
              </div>
                <div class="form-group ">
                <label for="nama_paket">Nama Paket</label>
                <input type="text" class="form-control" id="nama_paket" placeholder="Nama Paket" name="nama_paket" >
              </div>
              <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" class="form-control" id="harga" placeholder="Harga" name="harga">
              </div>
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

