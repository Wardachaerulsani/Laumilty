<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        // $data['users'] = User::all();
        return view('login/index');
    }

    public function authenticate(Request $request)
    {
        // dd($request->all());
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
            'role' => 'required'

        ]);

        if (Auth::attempt($credentials)) {
            if (auth()->user()->role == 'admin') {
                $request->session()->regenerate();
                return redirect()->intended('/');
            } elseif (auth()->user()->role == 'kasir') {
                $request->session()->regenerate();
                return redirect()->intended('/homeKasir');
            } elseif (auth()->user()->role == 'owner') {
                $request->session()->regenerate();
                return redirect()->intended('/homeOwner');
            }
        }

        return back()->with('loginError', 'Login Failed');
    }
}
