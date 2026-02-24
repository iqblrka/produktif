<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // ❌ JANGAN PAKAI __construct() dengan middleware! (Sesuai catatanmu sebelumnya)
    
    public function index()
    {
        // PERBAIKAN: Beri tahu Laravel bahwa filenya ada di dalam folder frontend
        return view('frontend.home');
        
        // Catatan: Jika suatu saat kamu ingin setiap kali selesai Login 
        // langsung diarahkan ke halaman AdminLTE, kamu bisa mengganti baris di atas menjadi:
        // return redirect()->route('backend.dashboard');
    }
}