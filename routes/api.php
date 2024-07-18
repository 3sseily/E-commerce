<?php

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PostsController;
use App\Http\Controllers\API\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('welcome' , function(){
    return Response()->json("welcome");
});

Route::get('allposts', [PostsController::class , 'get_posts']);
Route::get('selectedPost', [PostsController::class , 'selected_post']);
Route::get('allposts/{id}', [PostsController::class , 'show']);
Route::post('post/store', [PostsController::class , 'store']);

Route::get('products' , [ProductController::class , 'get_products']);
Route::get('selectedProducts' , [ProductController::class , 'selected_products']);
Route::post('products/store' , [ProductController::class , 'store']);
Route::get('products/{id}', [ProductController::class , 'show']);