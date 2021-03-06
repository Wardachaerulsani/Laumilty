<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Exports\MemberExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\MemberImport;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function export() 
    {
        return Excel::download(new MemberExport, 'member.xlsx');
    }

     public function importData(){
         
        Excel::import(new MemberImport, request()->file('import'));

        return redirect('/member')->with('success', 'Import Data Member Berhasil');
    }
    public function index()
    {
        $data['member'] = Member::all();
        return view('member/index', $data);
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
            'nama' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'tlp' => 'required'

        ]);
        $input = Member::create($validate);

        if ($input) return redirect('member')->with('success', 'Data Member Berhasil di Input');
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
    public function update(Request $request, Member $member)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'tlp' => 'required'


        ]);

        member::where('id', $member->id)
            ->update($validatedData);

        return redirect('/member')->with('success', 'Data Member Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member, $id)
    {
        $member = Member::find($id);
        $member->delete();
        return redirect('member');
    }
}
