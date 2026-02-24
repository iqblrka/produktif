<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // 1. HITUNG DATA DARI DATABASE
        $totalUsers = DB::table('users')->count();
        $totalPengalamanKerja = DB::table('pengalaman_kerja')->count();
        $totalPendidikan = 0; // Sementara 0 jika belum ada tabel

        // 2. RETURN VIEW BACKEND
        // Perhatikan bagian 'backend.dashboard.index' di bawah ini!
        // Ini asusmsinya file kamu ada di resources/views/backend/dashboard/index.blade.php
        return view('backend.dashboard.index', compact(
            'totalUsers',
            'totalPengalamanKerja',
            'totalPendidikan'
        ));
    }
}