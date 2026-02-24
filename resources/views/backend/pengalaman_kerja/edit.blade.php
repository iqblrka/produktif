@extends('adminlte::page')

@section('title', 'Edit Pengalaman Kerja')

@section('content_header')
    <h1><i class="fas fa-edit"></i> Edit Pengalaman Kerja</h1>
@stop

@section('content')
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Form Edit Data</h3>
        </div>
        <form action="{{ route('backend.pengalaman_kerja.update', $pengalamanKerja->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="nama">Nama Perusahaan</label>
                    <input type="text" name="nama" class="form-control" value="{{ $pengalamanKerja->nama }}" required>
                </div>
                <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <input type="text" name="jabatan" class="form-control" value="{{ $pengalamanKerja->jabatan }}" required>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tahun_masuk">Tahun Masuk</label>
                            <input type="number" name="tahun_masuk" class="form-control" value="{{ $pengalamanKerja->tahun_masuk }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tahun_keluar">Tahun Selesai</label>
                            <input type="number" name="tahun_keluar" class="form-control" value="{{ $pengalamanKerja->tahun_keluar }}" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-warning"><i class="fas fa-save"></i> Update</button>
                <a href="{{ route('backend.pengalaman_kerja.index') }}" class="btn btn-default">Cancel</a>
            </div>
        </form>
    </div>
@stop