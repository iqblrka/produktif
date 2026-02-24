<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PengalamanKerja; // Pastikan model dipanggil

class PengalamanKerjaController extends Controller
{
    public function index()
    {
        $pengalaman_kerja = PengalamanKerja::all();
        return view('backend.pengalaman_kerja.index', compact('pengalaman_kerja'));
    }

    // --- FUNGSI UNTUK MENAMPILKAN FORM TAMBAH ---
    public function create()
    {
        // Karena View kamu dinamis, kita cukup panggil view-nya saja
        return view('backend.pengalaman_kerja.create');
    }

    public function store(Request $request)
    {
        PengalamanKerja::create($request->all());
        return redirect()->route('backend.pengalaman_kerja.index')
                         ->with('success', 'Data berhasil disimpan.');
    }

    // --- FUNGSI UNTUK MENAMPILKAN FORM EDIT ---
    public function edit($id)
    {
        $pengalaman_kerja = PengalamanKerja::find($id);
        // Menggunakan file yang sama dengan create karena kode kamu sudah dinamis
        return view('backend.pengalaman_kerja.create', compact('pengalaman_kerja'));
    }

    public function update(Request $request, $id)
    {
        $data = PengalamanKerja::find($id);
        $data->update($request->all());

        return redirect()->route('backend.pengalaman_kerja.index')
                         ->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        PengalamanKerja::destroy($id);
        return redirect()->route('backend.pengalaman_kerja.index')
                         ->with('success', 'Data berhasil dihapus.');
    }
}