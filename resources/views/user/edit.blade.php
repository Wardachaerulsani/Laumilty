<div class="modal fade" id="formEditModal{{ $u->id }}" tabindex="-1" role="dialog" aria-labelleby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Data User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
    <form method="POST" action="{{ route('user.update', $u->id) }}">
          @csrf @method('put')
          <div id="method"></div>
            <div class="card-body mt--4">
              <input type="hidden" id="id" name="id">
            <div class="form-group ">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" value="{{ $u->nama }}" placeholder="Nama" name="nama" >
              </div>
               <div class="form-group ">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" value="{{ $u->username }}" placeholder="Username" name="username" >
              </div>
            <div class="form-group ">
                <label for="password">Password</label>
                <input type="text" class="form-control" id="password" placeholder="Password" name="password" >
              </div>
              <div class="form-group">
                <label for="id_outlet">Id Outlet</label>
                <select class="form-control form-select-lg mb-3" aria-Label=".form-select-lg example" id="id_outlet" name="id_outlet">
                <option selected value="{{ $u->id_outlet }}">{{  $u->id_outlet }}</option>
                @foreach  ($outlet as $o)
                <option value="{{ $o->id }}">{{ $o->nama }}</option>
                @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="role">Pilih Role</label>
                <div>
                     <select class="form-control form-select-lg mb-3" aria-Label=".form-select-lg example" id="role" name="role">
                      <option value="{{ $u->role }}">{{  $u->role }}</option>
                        <option>Pilih Role</option>
                        <option name="role" value="admin">Admin</option>
                        <option name="role" value="kasir">Kasir</option>
                        <option name="role" value="owner">Owner</option>
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

