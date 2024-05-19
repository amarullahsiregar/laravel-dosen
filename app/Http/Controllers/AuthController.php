<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        if (auth()->guard('dosen')->attempt(['email' => $request->email, 'password' => $request->password])) {
            # code...
            $request->validate([
                'email' => 'required',
                'password' => 'required'
            ]);
            return redirect('dashboard/' . $request->email);
        }
        // $credentials = $request->only('email', 'password');
        // if (Auth::attempt($credentials)) {
        //     // User successfully authenticated
        //     return redirect(route('dashboard', $request->email));
        // } else {
        //     return redirect('https://cekdos.my.id')->withErrors(['message' => 'User Tidak Ditemukan']);
        // }
    }
    public function logout()
    {
        //delete login session current user
        Auth::logout();
        return redirect()->route('login');
    }
}
