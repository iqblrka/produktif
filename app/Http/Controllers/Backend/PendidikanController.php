<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pendidikan; // 1. Wajib tambahkan ini untuk memanggil model

class PendidikanController extends Controller
{
    public function index()
    {
        // Mengambil semua data pendidikan
        $pendidikan = Pendidikan::all(); 
        return view('backend.pendidikan.index', compact('pendidikan'));
    }

    public function create()
    {
        return view('backend.pendidikan.create');
    }

    public function store(Request $request)
    {
        // Menyimpan data baru menggunakan Eloquent
        Pendidikan::create($request->all());
        return redirect()->route('backend.pendidikan.index')
                         ->with('success', 'Data pendidikan berhasil disimpan.');
    }

    // --- BAGIAN UPDATE & DELETE (Fokus Acara 16) ---

    public function edit($id)
    {
        // Mencari data berdasarkan ID
        $pendidikan = Pendidikan::find($id); 
        return view('backend.pendidikan.edit', compact('pendidikan'));
    }

    public function update(Request $request, $id)
    {
        // Mencari data dan melakukan update sekaligus
        $pendidikan = Pendidikan::find($id);
        $pendidikan->update($request->all());

        return redirect()->route('backend.pendidikan.index')
                         ->with('success', 'Pendidikan berhasil diperbaharui.');
    }

    public function destroy($id)
    {
        // Mencari data dan menghapusnya
        $pendidikan = Pendidikan::find($id);
        $pendidikan->delete();

        return redirect()->route('backend.pendidikan.index')
                         ->with('success', 'Data Pendidikan berhasil dihapus');
    }
}