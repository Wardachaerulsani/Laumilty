<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjemputan;
use App\Models\Member;
use App\Exports\PenjemputanExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PenjemputanImport;

class PenjemputanController extends Controller
{

    public function index()
    {
        //method untuk menampilkan halaman 
        $data['member'] = Member::all();
        $data['penjemputan3'] = Penjemputan::all();
        return view('penjemputan/index', $data);
    }
    public function export() 
    {
        return Excel::download(new PenjemputanExport, 'Penjemputan Laundry.xlsx');
    }
    public function importData(){
        
        Excel::import(new PenjemputanImport, request()->file('import'));

        return redirect('/penjemputan')->with('success', 'Import Data Penjeputan Berhasil');
    }
    
    public function store(Request $request)
    {
        //method untuk melakukan insert data ke database
          //validasi
        $validate = $request->validate([
            // 'nama_pelanggan' => 'required',
            // 'alamat' => 'required',
            // 'tlp' => 'required',
            'id_member' => 'required',
            'petugas' => 'required',
            'status' => 'required'
        ]);
        $input = Penjemputan::create($validate);

        if ($input) return redirect('penjemputan')->with('success', 'Data Penjemputan Laundry Berhasil di Input');
    }

    public function update(Request $request,Penjemputan $pj, $id)
    {
        //method untuk melakukan update data post ke database
        // $validatedData = $request->validate([
        //     'nama_pelanggan' => 'required',
        //     'alamat' => 'required',
        //     'tlp' => 'required',
        //     'petugas' => 'required',
        //     'status' => 'required'
        // ]);
        // $m = Penjemputan::find($id);
        // Penjemputan::where('id', $pj->id)
        //     ->update($validatedData);
        // return redirect('/penjemputan')->with('success', 'Data Penjemputan Laundry Berhasil di Update');
         $validatedData = $request->validate([
        //    'nama_pelanggan' => 'required',
        //     'alamat' => 'required',
        //     'tlp' => 'required',
            'id_member'=>'required',
            'petugas' => 'required',
            'status' => 'required'
        ]);
     $pj= Penjemputan::find($id);
        Penjemputan::where('id', $pj->id)
            ->update($validatedData);
        return redirect('/penjemputan')->with('success', 'Data Penjemputan Berhasil di Update');
        // penjemputan::where('id', $penjemputan3->id)
        //     ->update($validatedData);

        // return redirect('/penjemputan')->with('success', 'Data Berhasil di Update');
    }

   public function status(request $request)
    {
        $data = Penjemputan::where('id', $request->id)->first();
        $data->status = $request->status;
        $update = $data->save();

        return 'Data Gagal Ditarik';
    }
    
    public function destroy(Penjemputan $penjemputan3, $id)
    {
        //method untuk menghapus data post
        $penjemputan3 = Penjemputan::find($id);
        $penjemputan3->delete();
        return redirect('penjemputan');
    }
}
