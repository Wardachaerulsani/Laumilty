<div class="modal fade" id="formEditModal{{ $o->id }}" tabindex="-1" role="dialog" aria-labelleby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Data Outlet</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
    <form method="POST" action="{{ route('outlet.update', $o->id) }}">
          @csrf @method('put')
          <div id="method"></div>
          <div class="card-body">
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" value="{{ $o->nama }}" id="nama" placeholder="Nama" name="nama">
              </div>
                <div class="form-group ">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" value="{{ $o->alamat }}" id="alamat" placeholder="Alamat" name="alamat" >
              </div>
              <div class="form-group">
                <label for="tlp">No. Telp</label>
                <input type="text" class="form-control" value="{{ $o->tlp }}" id="tlp" placeholder="No Telephone" name="tlp">
              </div>
            </div>
          </div>
            <!-- /.card-body -->
            <div class="modal-footer">
              <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </div>
        </form>
  </div>
  </div>

