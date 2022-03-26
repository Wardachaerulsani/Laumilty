<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Exports\BarangExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\BarangImport;
class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['barang'] = Barang::all();
        return view('barang.index', $data);
    }
    public function store(Request $request)
    {
          $validate = $request->validate([
            'nama' => 'required',
            'qty' => 'required',
            'harga' => 'required',
            'beli' => 'required',
            'supplier' => 'required',
            'status' => 'required',
            'update' => 'required'
        ]);
        $input = Barang::create($validate);

        if ($input) return redirect('barang')->with('success', 'Data Barang Berhasil di Input');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
           $validate = $request->validate([
            'nama' => 'required',
            'qty' => 'required',
            'harga' => 'required',
            'supplier' => 'required'
        ]);
         Barang::where('id', $barang->id)
            ->update($validate);

        return redirect('/barang')->with('success', 'Data Barang Berhasil di Update');
    }
      public function status(request $request)
    {
        $data = Barang::where('id', $request->id)->first();
        $data->status = $request->status;
        $data->update = $request->update;
        $update = $data->save();

        return 'Data Gagal Ditarik';
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           //method untuk menghapus data post
        $barang = Barang::find($id);
        $barang->delete();
        return redirect('barang');
    }
     public function export() 
    {
        return Excel::download(new BarangExport, 'barang.xlsx');
    }
     public function importData(){
        
        Excel::import(new BarangImport, request()->file('import'));

        return redirect('/barang')->with('success', 'Import Data Barang Berhasil');
    }

}
