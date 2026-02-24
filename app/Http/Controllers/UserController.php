<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // app/Http/Controllers/UserController.php
public function dashboard()
{
    return view('user.dashboard');
}

public function profile()
{
    return view('user.profile');
}

public function show($id)
{
    return "Detail User dengan ID: " . $id;
}
    
}
