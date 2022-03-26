<div class="modal fade" id="formEditModal{{ $b->id }}" tabindex="-1" role="dialog" aria-labelleby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Data Penjemputan Laundry</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
    <form method="POST" action="{{ route('barang.update', $b->id) }}">
          @csrf @method('put')
          <div id="method"></div>
            <div class="card-body mt--4">
              <div class="form-group ">
                <label for="nama">Nama Barang</label>
                <input type="text" class="form-control" id="nama" value="{{ $b->nama }}" placeholder="Nama Barang" name="nama" >
              </div>
            <div class="form-group ">
                <label for="qty">Qty</label>
                <input type="number" class="form-control" id="qty" value="{{ $b->qty }}" placeholder="Jumlah Barang" name="qty" >
              </div>
               <div class="form-group ">
                <label for="harga">Harga</label>
                <input type="number" class="form-control" id="harga" value="{{ $b->harga }}" placeholder="Harga Barang" name="harga" >
              </div>
            <div class="form-group ">
                <label for="supplier">Supplier</label>
                <input type="text" class="form-control" id="supplier" value="{{ $b->supplier }}" placeholder="Supplier" name="supplier" >
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

