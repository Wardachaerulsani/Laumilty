<div class="modal fade" id="formEditModal{{ $m->id }}" tabindex="-1" role="dialog" aria-labelleby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Data Member</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('member.update', $m->id) }}">
          @csrf @method('put')
          <div id="method"></div>
            <div class="card-body mt--4">
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control " value="{{ $m->nama }}" id="nama" placeholder="Nama" name="nama">
              </div>
                <div class="form-group ">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" value="{{ $m->alamat}}" id="alamat" placeholder="Alamat" name="alamat" >
              </div>
                <div class="form-group">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <div class="input-group m-1">
                        <select class="form-control form-select-lg mb-3" aria-Label=".form-select-lg example" id="jenis_kelamin" name="jenis_kelamin">
                            <option selected value="{{ $m->jenis_kelamin }}">{{ $m->jenis_kelamin }}</option>
                            <option class="jenis_kelamin" value="L">L</option>
                            <option class="jenis_kelamin" value="P">P</option>
                        </select>
                    </div>
                </div>   
              <div class="form-group">
                <label for="tlp">No. Telp</label>
                <input type="text" class="form-control" value="{{ $m->tlp}}" id="tlp" placeholder="No. Telp" name="tlp">
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

