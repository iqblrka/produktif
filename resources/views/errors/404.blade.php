@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <h1 class="display-1">404</h1>
            <h2>Page Not Found</h2>
            <p>Halaman yang Anda cari tidak ditemukan.</p>
            <a href="{{ route('home') }}" class="btn btn-primary">Kembali ke Home</a>
        </div>
    </div>
</div>
@endsection