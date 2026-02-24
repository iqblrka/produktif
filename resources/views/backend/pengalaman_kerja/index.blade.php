@extends('backend.layouts.template')

@section('title', 'Pengalaman Kerja')

@section('breadcrumb')
    <li class="breadcrumb-item active">Pengalaman Kerja</li>
@endsection

@section('content')

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Data Pengalaman Kerja</h3>
        <div class="card-tools">
          <a href="{{ route('backend.pengalaman_kerja.create') }}" class="btn btn-primary btn-sm">
            <i class="bi bi-plus"></i> Tambah Data
          </a>
        </div>
      </div>
      
      <div class="card-body">
        @if(session('success'))
          <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Perusahaan</th>
              <th>Jabatan</th>
              <th>Tahun Masuk</th>
              <th>Tahun Keluar</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @forelse($pengalaman_kerja as $index => $item)
            <tr>
              <td>{{ $index + 1 }}</td>
              <td>{{ $item->nama }}</td>
              <td>{{ $item->jabatan }}</td>
              <td>{{ $item->tahun_masuk }}</td>
              <td>{{ $item->tahun_keluar }}</td>
              <td>
                <a href="{{ route('backend.pengalaman_kerja.edit', $item->id) }}" class="btn btn-warning btn-sm">
                  <i class="bi bi-pencil"></i>
                </a>
                <form action="{{ route('backend.pengalaman_kerja.destroy', $item->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin hapus?')">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm">
                    <i class="bi bi-trash"></i>
                  </button>
                </form>
              </td>
            </tr>
            @empty
            <tr>
              <td colspan="6" class="text-center">Tidak ada data</td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection