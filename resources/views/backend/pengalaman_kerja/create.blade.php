@extends('backend.layouts.template')

@section('title', isset($pengalaman_kerja) ? 'Edit Pengalaman Kerja' : 'Tambah Pengalaman Kerja')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('backend.pengalaman_kerja.index') }}">Pengalaman Kerja</a></li>
    <li class="breadcrumb-item active">{{ isset($pengalaman_kerja) ? 'Edit' : 'Tambah' }}</li>
@endsection

@section('content')

<div class="row">
  <div class="col-md-6">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">{{ isset($pengalaman_kerja) ? 'Edit' : 'Tambah' }} Data</h3>
      </div>
      
      <form action="{{ isset($pengalaman_kerja) ? route('backend.pengalaman_kerja.update', $pengalaman_kerja->id) : route('backend.pengalaman_kerja.store') }}" method="POST">
        @csrf
        @if(isset($pengalaman_kerja))
          @method('PUT')
        @endif
        
        <div class="card-body">
          <div class="form-group mb-3">
            <label>Nama Perusahaan</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama', $pengalaman_kerja->nama ?? '') }}" required>
          </div>
          
          <div class="form-group mb-3">
            <label>Jabatan</label>
            <input type="text" name="jabatan" class="form-control" value="{{ old('jabatan', $pengalaman_kerja->jabatan ?? '') }}" required>
          </div>
          
          <div class="form-group mb-3">
            <label>Tahun Masuk</label>
            <input type="number" name="tahun_masuk" class="form-control" value="{{ old('tahun_masuk', $pengalaman_kerja->tahun_masuk ?? '') }}" required>
          </div>
          
          <div class="form-group mb-3">
            <label>Tahun Keluar</label>
            <input type="number" name="tahun_keluar" class="form-control" value="{{ old('tahun_keluar', $pengalaman_kerja->tahun_keluar ?? '') }}" required>
          </div>
        </div>
        
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
          <a href="{{ route('backend.pengalaman_kerja.index') }}" class="btn btn-secondary">Batal</a>
        </div>
      </form>
      
    </div>
  </div>
</div>

@endsection