@extends('adminlte::page')

@section('title', 'Detail Pengalaman Kerja')

@section('content_header')
    <h1><i class="fas fa-eye"></i> Detail Pengalaman Kerja</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th width="30%">Nama Perusahaan</th>
                    <td>{{ $pengalamanKerja->nama }}</td>
                </tr>
                <tr>
                    <th>Jabatan</th>
                    <td>{{ $pengalamanKerja->jabatan }}</td>
                </tr>
                <tr>
                    <th>Tahun Masuk</th>
                    <td>{{ $pengalamanKerja->tahun_masuk }}</td>
                </tr>
                <tr>
                    <th>Tahun Keluar</th>
                    <td>{{ $pengalamanKerja->tahun_keluar }}</td>
                </tr>
                <tr>
                    <th>Dibuat</th>
                    <td>{{ $pengalamanKerja->created_at->format('d M Y H:i') }}</td>
                </tr>
                <tr>
                    <th>Diupdate</th>
                    <td>{{ $pengalamanKerja->updated_at->format('d M Y H:i') }}</td>
                </tr>
            </table>
            
            <div class="mt-3">
                <a href="{{ route('backend.pengalaman_kerja.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
                <a href="{{ route('backend.pengalaman_kerja.edit', $pengalamanKerja->id) }}" class="btn btn-warning">
                    <i class="fas fa-edit"></i> Edit
                </a>
            </div>
        </div>
    </div>
@stop