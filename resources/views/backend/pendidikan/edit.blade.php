@extends('backend.layouts.template')

@section('content')
<div class="container-fluid">
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Edit Riwayat Pendidikan</h3>
        </div>
        <form action="{{ route('backend.pendidikan.update', $pendidikan->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group mb-3">
                    <label>Nama Sekolah / Kampus</label>
                    <input type="text" name="nama" class="form-control" value="{{ $pendidikan->nama }}" required>
                </div>
                <div class="form-group mb-3">
                    <label>Tingkat Pendidikan</label>
                    <select name="tingkat" class="form-control" required>
                        <option value="1" {{ $pendidikan->tingkat == 1 ? 'selected' : '' }}>TK</option>
                        <option value="2" {{ $pendidikan->tingkat == 2 ? 'selected' : '' }}>SD</option>
                        <option value="3" {{ $pendidikan->tingkat == 3 ? 'selected' : '' }}>SMP</option>
                        <option value="4" {{ $pendidikan->tingkat == 4 ? 'selected' : '' }}>SMA</option>
                        <option value="5" {{ $pendidikan->tingkat == 5 ? 'selected' : '' }}>Kuliah</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label>Tahun Lulus</label>
                    <input type="number" name="tahun_keluar" class="form-control" value="{{ $pendidikan->tahun_keluar }}" required>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-warning">Perbarui</button>
                <a href="{{ route('backend.pendidikan.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection