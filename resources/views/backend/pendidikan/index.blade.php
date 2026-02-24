@extends('backend.layouts.template')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Riwayat Pendidikan</h3>
            <div class="card-tools">
                <a href="{{ route('backend.pendidikan.create') }}" class="btn btn-primary btn-sm">
                    <i class="bi bi-plus"></i> Tambah Data
                </a>
            </div>
        </div>
        <div class="card-body p-0">
            @if(session('success'))
                <div class="alert alert-success m-2">
                    {{ session('success') }}
                </div>
            @endif

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 10px">No</th>
                        <th>Nama Sekolah</th>
                        <th>Tingkatan</th>
                        <th>Tahun Masuk</th>
                        <th>Tahun Selesai</th>
                        <th style="width: 100px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pendidikan as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>
                            @switch($item->tingkatan)
                                @case(1) TK @break
                                @case(2) SD @break
                                @case(3) SMP @break
                                @case(4) SMA/SMK @break
                                @case(5) D3 @break
                                @case(6) D4/S1 @break
                                @default Lainnya
                            @endswitch
                        </td>
                        <td>{{ $item->tahun_masuk }}</td>
                        <td>{{ $item->tahun_keluar }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('backend.pendidikan.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <form action="{{ route('backend.pendidikan.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection