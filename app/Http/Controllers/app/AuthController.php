<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function login_page()
    {
        return view('app/login');
    }
    public function register_page()
    {
        return view('app/register');
    }
}
