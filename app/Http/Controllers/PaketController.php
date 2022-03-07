<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paket;
use App\Models\Outlet;
use App\Exports\PaketExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PaketImport;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function export() 
    {
        return Excel::download(new PaketExport, 'paket.xlsx');
    }

    public function importData(){
        
        Excel::import(new PaketImport, request()->file('import'));

        return redirect('/paket')->with('success', 'Import data paket Berhasil');
    }
    public function index()
    {
        $data['paket'] = Paket::all();
        $data['outlet'] = Outlet::all();
        return view('paket/index', $data);
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
        //validasi
        $validate = $request->validate([
            'id_outlet' => 'required',
            'jenis' => 'required',
            'nama_paket' => 'required',
            'harga' => 'required'

        ]);
        $input = Paket::create($validate);

        if ($input) return redirect('paket')->with('success', 'Data paket Berhasil di Input');
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
    public function update(Request $request, Paket $paket)
    {
        $validatedData = $request->validate([
            'id_outlet' => 'required',
            'jenis' => 'required',
            'nama_paket' => 'required',
            'harga' => 'required'

        ]);

        paket::where('id', $paket->id)
            ->update($validatedData);

        return redirect('/paket')->with('success', 'Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paket $paket, $id)
    {
        $paket = Paket::find($id);
        $paket->delete();
        return redirect('paket');
    }
}
