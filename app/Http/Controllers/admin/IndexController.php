<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function show_dashboard()
    {
        return view("admin/index");
    }
    public function index()
    {
        $data = Product::all();
        return view("admin/products", ['products' => $data]);
    }
}
