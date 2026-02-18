@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>6,674</h3>
                    <p>DOWNLOAD</p>
                </div>
                <div class="icon">
                    <i class="fas fa-cloud-download-alt"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>7,538</h3>
                    <p>PURCHASED</p>
                </div>
                <div class="icon">
                    <i class="fas fa-shopping-cart"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-dark">
                <div class="inner">
                    <h3>4,362</h3>
                    <p>ORDER</p>
                </div>
                <div class="icon">
                    <i class="fas fa-thumbs-up"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>1,426</h3>
                    <p>STOCK</p>
                </div>
                <div class="icon">
                    <i class="fas fa-cubes"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Countries</h3>
                </div>
           <div class="card-body" style="height: 300px; position: relative;">
    <img 
        src="{{ asset('backend/assets/images/dunia.jpg') }}" 
        alt="World Map"
        style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); max-width: 100%; max-height: 100%; object-fit: contain;"
    >
</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Analytics</h3>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <div class="d-flex justify-content-between mb-1">
                            <span>11,500 visitors/day</span>
                            <span class="text-success">📈 +12%</span>
                        </div>
                        <div class="progress" style="height: 6px;">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 75%"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between mb-1">
                            <span>15,000 Pageviews</span>
                            <span class="text-success">📈 +8%</span>
                        </div>
                        <div class="progress" style="height: 6px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 65%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="d-flex justify-content-between mb-1">
                            <span>30.55% Bounce Rate</span>
                            <span class="text-danger">📉 -2.1%</span>
                        </div>
                        <div class="progress" style="height: 6px;">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 45%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop