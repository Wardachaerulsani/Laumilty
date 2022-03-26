<div class="modal fade" id="formInputModal" tabindex="-1" role="dialog" aria-labelleby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Penjemputan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="/penjemputan">
          @csrf
          <div id="method"></div>
            <div class="card-body mt--4">
              <div class="form-group">
                <label for="id_member">ID Member</label>
                 <select class="form-control" aria-Label=".form-select-lg example" id="id_member" name="id_member">
                <option selected>Pilih Member</option>
                @foreach  ($member as $m)
                <option value="{{ $m-> id }}">{{ $m->nama }}</option>
                @endforeach
                </select>
              </div>
               <div class="form-group ">
                <label for="petugas">Petugas Penjemputan</label>
                <input type="text" class="form-control" id="petugas" placeholder="Petugas Penjemputan" name="petugas" >
              </div>
                <div class="form-group">
                    <label for="status" class="form-label">Status</label>
                    <div class="input-group m-1">
                        <select class="form-control form-select-lg mb-3" aria-Label=".form-select-lg example" id="status" name="status">
                        <option>Pilih Status</option>
                            <option class="status" value="tercatat">Tercatat</option>
                            <option class="status" value="penjemputan">Penjemputan</option>
                            <option class="status" value="selesai">Selesai</option>
                        </select>
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
</div>
<div class="modal fade" id="formImport" tabindex="-1" role="dialog" aria-labelleby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
        <form action="penjemputan/import" method="POST" enctype="multipart/form-data">
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

