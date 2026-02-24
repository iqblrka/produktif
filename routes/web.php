<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Controllers Import
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Backend\PengalamanKerjaController;

/*
|--------------------------------------------------------------------------
| PUBLIC ROUTES
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('frontend.home');
})->name('home');

Route::post('/contact', function () {
    return back()->with('success', 'Message sent successfully!');
})->name('contact.submit');

/*
|--------------------------------------------------------------------------
| AUTHENTICATION ROUTES
|--------------------------------------------------------------------------
*/
Route::get('/login', function () {
    return view('auth.login');
})->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', function () {
    return view('auth.register');
})->name('register')->middleware('guest');

Route::post('/register', [RegisterController::class, 'register'])->name('register.post');

Auth::routes([
    'register' => false,
    'reset' => true,
    'confirm' => false,
    'verify' => false,
    'login' => false,
]);

/*
|--------------------------------------------------------------------------
| PROTECTED ROUTES (Hanya bisa diakses jika sudah login)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home.index');
});

/*
|--------------------------------------------------------------------------
| ADMIN ROUTES (Tadinya BACKEND)
|--------------------------------------------------------------------------
*/
// FIX: Mengubah prefix 'backend' menjadi 'admin' agar tidak bentrok dengan folder public/backend
Route::prefix('admin')->name('backend.')->group(function () {
    
    // Dashboard - URL BARU: /admin/dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // Pengalaman Kerja CRUD - URL BARU: /admin/pengalaman_kerja
    Route::resource('pengalaman_kerja', PengalamanKerjaController::class);
    
});