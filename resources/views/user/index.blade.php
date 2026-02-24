@extends('backend.layouts.template') {{-- Atau layout frontend Anda --}}

@section('content')
<div class="container mt-4">
    <h1>Daftar Pengguna</h1>
    
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user['id'] }}</td>
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['email'] }}</td>
                <td>
                    <a href="{{ route('user.show', $user['id']) }}" class="btn btn-sm btn-info">Lihat Detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection