<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index()
    {
        $result = Product::all();
        return view("app/index", ['data' => $result]);
    }

    public function show($id)
    {
        return view("app/product_details");
    }
}
