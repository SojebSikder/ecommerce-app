<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index()
    {
        return view("app/index");
    }
    
    public function show($id)
    {
        return view("app/product_details");
    }
}
