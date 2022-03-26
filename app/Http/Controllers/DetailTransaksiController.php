<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paket;
use App\Models\Transaksi;
use App\Models\DetailTransaksi;
use App\Models\Member;
use PDF;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
class DetailTransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['member'] = Member::get();
        $data['paket'] = Paket::get();
        $data['transaksi'] = Transaksi::all();
        $data['detail_transaksi'] = DetailTransaksi::all();
        return view('transaksi.data')->with($data);
    }
    
    public function faktur(Request $request, $id) {
        $data ['transaksi'] = Transaksi::where('id', $id)->firstOrFail();

        $data ['detail_transaksi'] = DetailTransaksi::where('id_transaksi', $data['transaksi']->id)->get();
        $pdf = PDF::loadView('transaksi.faktur',  $data);
        return $pdf->stream();
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
}
