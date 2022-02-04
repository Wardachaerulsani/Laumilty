<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Outlet;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        $data['outlet'] = Outlet::all();
        $data['users'] = User::all();
        return view('register.index', $data);
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|max:100',
            'username' => 'required', 'min:3', 'max:75', 'unique:users',
            'password' => 'required|min:3|max:25',
            'id_outlet' => 'required',
            'role' => 'required'
        ]);
        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);

        return redirect('/login')->with('success', 'Registration successfull please Login');
    }
}
