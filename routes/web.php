<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('products/all', [ProductController::class, 'get_products']);

//Authentication
Route::get('register', [RegisterController::class, 'register']);
Route::post('handle_register', [RegisterController::class, 'handle_register']);

Route::get('login', [LoginController::class, 'login']);
Route::post('handle_login', [LoginController::class, 'handle_login']);

Route::get('logout', [LogoutController::class, 'logout']);


Route::middleware(['IsAdmin'])->group(function () { 
    Route::get('products/create', [ProductController::class, 'create']);
    Route::post('product/store', [ProductController::class, 'store']);
    Route::get('product/delete/{id}', [ProductController::class, 'delete']);
});


Route::get('product/{id}', [ProductController::class, 'get_prod']);


Route::get('charts', [HomeController::class, 'chart']);



