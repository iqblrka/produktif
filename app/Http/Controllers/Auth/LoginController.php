<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // ❌ JANGAN PAKAI __construct() dengan middleware!
    
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // 1. Validasi input
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // 2. Deteksi otomatis apakah user mengetik Email atau Username
        $loginField = filter_var($credentials['username'], FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        // 3. Proses percubaan Login
        if (Auth::attempt([$loginField => $credentials['username'], 'password' => $credentials['password']], $request->boolean('remember'))) {
            $request->session()->regenerate();
            
            // PERBAIKAN: Hapus intended() dan gunakan redirect langsung.
            // Ini menjamin setiap sukses login PASTI dilempar ke Dashboard AdminLTE.
            return redirect()->route('backend.dashboard');
        }

        // Jika gagal, kembalikan dengan pesan error yang lebih jelas
        return back()->withErrors(['username' => 'Email/Username atau Password salah.'])->onlyInput('username');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        // Setelah logout, kembalikan ke halaman depan (Frontend Butterfly)
        return redirect()->route('home');
    }
}