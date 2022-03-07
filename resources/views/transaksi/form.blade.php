<div class="collapse" id="formLaundry">
    <div class="card-body">
        <!-- data awal pelanggan -->
        <div class="card">
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label
                                    class="form-control-label"
                                    for="input-username"
                                    >Tanggal Transaksi</label
                                >
                                <input
                                    type="date"
                                    id="input-username"
                                    class="form-control"
                                    value="{{ date('Y-m-d') }}"
                                    name="tgl"
                                />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label
                                    class="form-control-label"
                                    for="input-email"
                                    >Estimasi Selesai</label
                                >
                                <input
                                    type="date"
                                    id="input-email"
                                    class="form-control"
                                    value="{{ date('Y-m-d', strtotime(date('Y-m-d'). '+3 day')) }}"
                                    name="batas_waktu"
                                />
                            </div>
                        </div>
                        <div class="row col-md-12">
                            <div class="form-group col-md-6">
                                <label class="form-control-label"
                                    ><button
                                        type="button"
                                        class="bt btn-primary btn-sm-4"
                                        data-toggle="modal"
                                        data-target="#modalMember"
                                    >
                                        <i class="fas fa-plus"></i>
                                    </button>
                                    Nama Pelanggan/JK</label
                                >
                                <p id="nama-pelanggan"></p>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-control-label" for=""
                                    >Biodata</label
                                >
                                <p id="biodata-pelanggan"></p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--end of data awal pelanggan -->

        <!-- data paket -->
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <button
                            type="button"
                            class="btn btn-primary"
                            id="tambahPaketBtn"
                            data-toggle="modal"
                            data-target="#modalPaket"
                        >
                            Tambah Cucian
                        </button>
                    </div>
                </div>
                <div class="clearfix">&nbsp;</div>
                <div class="row">
                    <table
                        id="tblTransaksi"
                        class="table align-items-center table-flush"
                    >
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">
                                    Nama Paket
                                </th>
                                <th scope="col" class="sort" data-sort="budget">
                                    Harga
                                </th>
                                <th scope="col" class="sort" data-sort="status">
                                    Qty
                                </th>
                                <th
                                    scope="col"
                                    class="sort"
                                    data-sort="completion"
                                >
                                    Total
                                </th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- <tr>
                                <td colspan="5" style="text-align:center;font-style:italic">Belum ada data</td>
                            </tr> -->
                        </tbody>
                        <tfoot>
                            <tr valign="bottom">
                                <td width="" colspan="3" align="right">
                                    Jumlah Bayar
                                </td>
                                <td><span id="subtotal">0</span></td>
                                <td rowspan="6">
                                    <label for="">Pembayaran</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="bayar"
                                        id=""
                                        style="width: 170px"
                                        value=""
                                        0
                                    />
                                    <div>
                                        <button
                                            class="btn btn-primary"
                                            style="
                                                margin-top: 10px;
                                                width: 170px;
                                            "
                                            type="submit"
                                        >
                                            Bayar
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" align="right">Diskon</td>
                                <td>
                                    <input
                                        type="number"
                                        value="0"
                                        id="diskon"
                                        name="diskon"
                                        style="width: 140px"
                                    />
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" align="right">
                                    Pajak &nbsp; &nbsp;<input
                                        type="number"
                                        value="0"
                                        min="0"
                                        class="qty"
                                        name="pajak"
                                        id="pajak-persen"
                                        size="2"
                                        style="width: 40px"
                                    />
                                </td>
                                <td><span id="pajak-harga">0</span></td>
                            </tr>
                            <tr>
                                <td colspan="3" align="right">
                                    Biaya Tambahan
                                </td>
                                <td>
                                    <input
                                        type="number"
                                        value="0"
                                        id="biaya_tambahan"
                                        name="biaya_tambahan"
                                        style="width: 140px"
                                    />
                                </td>
                            </tr>
                            <tr
                                style="
                                    background: navy;
                                    color: white;
                                    font-weight: bold;
                                    font-size: 1em;
                                "
                            >
                                <td colspan="3" align="right">
                                    Total Bayar Akhir
                                </td>
                                <td><span id="total">0</span></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <!--end of data paket -->

        <!-- pembayaran -->
        <div class="card"></div>
        <!--end of pembayaran -->
        <!--Modal member -->
        <div
            class="modal fade"
            id="modalMember"
            tabindex="-1"
            role="dialog"
            aria-labelleby="myModalLabel"
        >
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">
                            Pilih Pelanggan
                        </h4>
                        <button
                            type="button"
                            class="close"
                            data-dismis="modal"
                            aria-label="Close"
                        >
                            <span aria-hidden="true">&times;</span>
                        </button>
                       
                    </div>
                    <div class="modal-body">
                        <div class="table-responsive px-10">
                            <table
                                id="tblMember"
                                class="table align-items-center table-flush"
                            >
                                <thead class="thead-light">
                                    <tr>
                                        <th
                                            scope="col"
                                            class="sort"
                                            data-sort="name"
                                        >
                                            No
                                        </th>
                                        <th
                                            scope="col"
                                            class="sort"
                                            data-sort="budget"
                                        >
                                            Nama
                                        </th>
                                        <th
                                            scope="col"
                                            class="sort"
                                            data-sort="status"
                                        >
                                            JK
                                        </th>
                                        <th
                                            scope="col"
                                            class="sort"
                                            data-sort="status"
                                        >
                                            No.Hp
                                        </th>
                                        <th
                                            scope="col"
                                            class="sort"
                                            data-sort="completion"
                                        >
                                            Alamat
                                        </th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($member as $b)
                                    <tr>
                                        <td>
                                            {{ $i =(!isset($i)?1:++$i) }}
                                            <input
                                                type="hidden"
                                                class="idMember"
                                                name="id_member"
                                                value="{{  $b->id }}"
                                            />
                                        </td>
                                        <td>{{ $b->nama }}</td>
                                        <td>{{ $b->jenis_kelamin }}</td>
                                        <td>{{ $b->tlp }}</td>
                                        <td>{{ $b->alamat }}</td>
                                        <td>
                                            <button
                                                class="pilihMemberBtn"
                                                type="button"
                                            >
                                                Pilih
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default">
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end modal member-->

        <!--Modal Paket -->
        <div
            class="modal fade"
            id="modalPaket"
            tabindex="-1"
            role="dialog"
            aria-labelleby="myModalLabel"
        >
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Pilih Paket</h4>
                        <button
                            type="button"
                            class="close"
                            data-dismis="modal"
                            aria-label="Close"
                        >
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="table-responsive px-10">
                            <table
                                id="tblPaket"
                                class="table align-items-center table-flush"
                            >
                                <thead class="thead-light">
                                    <tr>
                                        <th
                                            scope="col"
                                            class="sort"
                                            data-sort="name"
                                        >
                                            No
                                        </th>
                                        <th
                                            scope="col"
                                            class="sort"
                                            data-sort="budget"
                                        >
                                            Nama Paket
                                        </th>
                                        <th
                                            scope="col"
                                            class="sort"
                                            data-sort="status"
                                        >
                                            Harga
                                        </th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($paket as $b)
                                    <tr>
                                        <td>
                                            {{ $j =(!isset($j)?1:++$j) }}
                                            <input
                                                type="hidden"
                                                class="idPaket"
                                                value="{{ $b->id }}"
                                            />
                                        </td>
                                        <td>{{ $b->nama_paket }}</td>
                                        <td>{{ $b->harga }}</td>
                                        <td>
                                            <button
                                                class="pilihPaketBtn"
                                                type="button"
                                            >
                                                Pilih
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button
                            type="button"
                            class="btn btn-default"
                            data-dismis="modal"
                        >
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end modal paket-->
    </div>
</div>
