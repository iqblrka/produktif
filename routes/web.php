<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Controllers Import
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Backend\PengalamanKerjaController;
use App\Http\Controllers\Backend\PendidikanController;

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
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register')->middleware('guest');
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
| PROTECTED ROUTES (User Biasa)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home.index');
});

/*
|--------------------------------------------------------------------------
| ADMIN ROUTES (Dashboard & CRUD)
|--------------------------------------------------------------------------
*/
// KUNCI PERBAIKAN: Satukan semua rute backend ke dalam SATU grup utama
Route::middleware(['auth'])->prefix('admin')->name('backend.')->group(function () {
    
    // Dashboard - URL: /admin/dashboard | Name: backend.dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // Pengalaman Kerja CRUD - URL: /admin/pengalaman_kerja | Name: backend.pengalaman_kerja.index
    Route::resource('pengalaman_kerja', PengalamanKerjaController::class);

    // Pendidikan CRUD - URL: /admin/pendidikan | Name: backend.pendidikan.index
    Route::resource('pendidikan', PendidikanController::class);
    
});