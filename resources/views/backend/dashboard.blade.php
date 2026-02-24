@extends('backend.layouts.template')

@section('title', 'Dashboard')

@section('content')
<!-- Info boxes -->
<div class="row">
    <div class="col-lg-3 col-6">
        <div class="small-box text-bg-primary">
            <div class="inner">
                <h3>{{ $totalPengalamanKerja ?? 0 }}</h3>
                <p>Pengalaman Kerja</p>
            </div>
            <div class="icon">
                <i class="bi bi-briefcase"></i>
            </div>
            <a href="{{ route('backend.pengalaman_kerja.index') }}" class="small-box-footer">
                More info <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box text-bg-success">
            <div class="inner">
                <h3>{{ $totalUsers ?? 0 }}</h3>
                <p>Total Users</p>
            </div>
            <div class="icon">
                <i class="bi bi-people"></i>
            </div>
            <a href="#" class="small-box-footer">
                More info <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box text-bg-warning">
            <div class="inner">
                <h3>{{ $totalPendidikan ?? 0 }}</h3>
                <p>Pendidikan</p>
            </div>
            <div class="icon">
                <i class="bi bi-mortarboard"></i>
            </div>
            <a href="#" class="small-box-footer">
                More info <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
</div>
@endsection