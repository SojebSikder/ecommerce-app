<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Admin route
Route::group(['prefix' => 'admin'], function () {
    Route::get("/", function () {
        return "Hello admin";
    });
});

// App route
Route::get('/', [App\Http\Controllers\app\IndexController::class, 'index']);
Route::get('/product/{id}', [App\Http\Controllers\app\IndexController::class, 'show']);
// Auth
Route::get('/login', [App\Http\Controllers\app\AuthController::class, 'login_page']);
Route::get('/register', [App\Http\Controllers\app\AuthController::class, 'register_page']);
