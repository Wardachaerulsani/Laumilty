<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Paket;
use App\Models\Transaksi;
use App\Models\DetailTransaksi;
use App\Http\Requests\StoreTransaksiRequest;
class TransaksiController extends Controller
{
    /**
     * menampilkan halaman utama untuk transaksi
     * dengan memberikan data untuk member dan paket untuk outlet
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['member'] = Member::get();
        $data['paket'] = Paket::where('id_outlet', auth()->user()->id_outlet)->get();
        $data['transaksi'] = Transaksi::all();
        $data['detail_transaksi'] = DetailTransaksi::all();
        return view('transaksi.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Menyimpan data transaksi ke table transaksi dan detail transaksi
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTransaksiRequest $request)
    {
        $request['id_outlet'] = auth()->user()->id_outlet;
        $request['id_member'] = ($request->id_member);
        $request['kode_invoice'] = $this->generateKodeInvoice();
        $request['tgl_bayar'] = ($request->bayar == 0?NULL:date('Y-m-d H:i:s'));
        $request['status'] = 'baru';
        $request['dibayar'] = ($request->bayar == 0?'belum_dibayar':'dibayar');
        $request['id_user'] = auth()->user()->id;
        $request['biaya_tambahan'] = ($request->biaya_tambahan);

        //input transaksi
        // dd($request->all());
        $input_transaksi = Transaksi::create($request->all());
        if($input_transaksi == null){
            return back()->withErrors([
                'transaksi' => 'Input transaksi gagal',
            ]);
        } 
        //input detail pembelian
        foreach ($request->id_paket as $i => $v) {
            $input_detail = DetailTransaksi::create([
                'id_transaksi' => $input_transaksi->id,
                'id_paket' => $request->id_paket[$i],
                'qty' => $request->qty[$i],
                'keterangan' => ''
            ]);
        }
        return redirect('transaksi')->with('success', 'input berhasil');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
     /**
     * Membuat kode invoice terbaru dengan  mengambil data transaksi terakhir
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    private function generateKodeInvoice(){
        $last = Transaksi::orderBy('id', 'desc')->first();
        $last = ($last == null?1:$last->id + 1);
        $kode = sprintf('TKI'.date('Ymd').'%06d', $last);

        return $kode;
    }
}
