<div class="modal fade" id="formEditModal{{ $pj->id }}" tabindex="-1" role="dialog" aria-labelleby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Data Penjemputan Laundry</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
    <form method="POST" action="{{ route('penjemputan.update', $pj->id) }}">
          @csrf @method('put')
          <div id="method"></div>
            <div class="card-body mt--4">
              <input type="hidden" id="id" name="id">
               <div class="form-group ">
                <label for="id_member">Nama Pelanggan</label>
                <select class="form-control form-select-lg mb-3" aria-Label=".form-select-lg example" id="id_member" name="id_member">
                <option selected value="{{ $pj->member ? $pj->member->nama : '' }}">{{  $pj->member ? $pj->member->nama : '' }}</option>
                @foreach  ($member as $m)
                <option value="{{ $m->id }}">{{ $m->nama }}</option>
                @endforeach
                </select>
              </div>
              <!-- <div class="form-group ">
                <label for="id_member">Alamat Pelanggan</label>
                <select class="form-control form-select-lg mb-3" aria-Label=".form-select-lg example" id="id_member" name="id_member">
                <option selected value="{{ $pj->id_member }}">{{  $pj->id_member }}</option>
                @foreach  ($member as $m)
                <option value="{{ $m->id }}">{{ $m->alamat }}</option>
                @endforeach
                </select>
              </div>
              <div class="form-group ">
                <label for="id_member">No.Hp Pelanggan</label>
                <select class="form-control form-select-lg mb-3" aria-Label=".form-select-lg example" id="id_member" name="id_member">
                <option selected value="{{ $pj->id_member }}">{{  $pj->id_member }}</option>
                @foreach  ($member as $m)
                <option value="{{ $m->id }}">{{ $m->tlp }}</option>
                @endforeach
                </select>
              </div> -->
              <div class="form-group ">
                <label for="petugas">Petugas Penjemputan</label>
                <input type="text" class="form-control" id="petugas" value="{{ $pj->petugas }}" placeholder="No.Hp Pelanggan" name="petugas" >
              </div>
              <div class="form-group">
                <label for="status">Status</label>
                <div>
                     <select class="form-control form-select-lg mb-3" aria-Label=".form-select-lg example" id="status" name="status">
                      <option value="{{ $pj->status }}">{{  $pj->status }}</option>
                        <option name="status" value="tercatat">Tercatat</option>
                        <option name="status" value="penjemputan">Penjemputan</option>
                        <option name="status" value="selesai">Selesai</option>
                    </select>
                </div>
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

