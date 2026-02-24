<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

// Import Middleware buatanmu saja
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\CheckAge;
use App\Http\Middleware\CheckRole;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        
        // 🌟 INI KUNCI UTAMANYA 🌟
        // Jika user SUDAH LOGIN tapi mencoba buka halaman /login, 
        // usir mereka ke halaman Dashboard AdminLTE.
        $middleware->redirectUsersTo('/admin/dashboard');

        // 1. Daftarkan Alias Middleware buatanmu
        $middleware->alias([
            'is.admin' => IsAdmin::class,
            'check.age' => CheckAge::class,
            'check.role' => CheckRole::class,
        ]);
        
        // 2. Daftarkan Middleware Groups
        $middleware->group('admin.panel', [
            'auth',
            'is.admin',
            'verified',
        ]);
        
        $middleware->group('user.panel', [
            'auth',
            'verified',
        ]);
        
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();