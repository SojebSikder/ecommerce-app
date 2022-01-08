<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index()
    {
        $result = Product::all();
        return view("admin/index", ['data' => $result]);
    }
}
