<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;

Route::get('/', function () {
    return view('welcome');
});

// ✅ Route dengan nama 'home' — ini wajib ada!
Route::get('/home', [HomeController::class, 'index'])->name('home');

use App\Http\Controllers\Backend\DashboardController;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');