<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Untuk helper auth

class AuthController extends Controller
{
    // Tampil form login
    public function showLogin()
    {
        return view('auth.login'); // nanti kita buat view ini
    }

    // Proses login
    public function login(Request $request)
    {
        // Validasi input form login
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Coba login pakai attempt Laravel
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // supaya aman

            return redirect()->intended('/dashboard'); // arahkan ke dashboard atau home
        }

        // Kalau gagal, kembali ke login dengan error
        return back()->withErrors([
            'email' => 'Email atau password salah!',
        ])->onlyInput('email');
    }

    // Logout user
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate(); // hapus session
        $request->session()->regenerateToken(); // token csrf baru

        return redirect('/login');
    }
}
