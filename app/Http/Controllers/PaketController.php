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
        //method untuk menampilkan halaman utama
        $data['paket'] = Paket::all();
        $data['outlet'] = Outlet::all();
        return view('paket/index', $data);
    }

     public function store(Request $request)
    {
        //method untuk melakukan insert data ke database
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

    public function update(Request $request, Paket $paket)
    {
        //method untuk melakukan update data post ke database
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

    public function destroy(Paket $paket, $id)
    {
        //method untuk menghapus data post
        $paket = Paket::find($id);
        $paket->delete();
        return redirect('paket');
    }
}
