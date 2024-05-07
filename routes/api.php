<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route::get("posts",[\App\Http\Controllers\PostController::class,"index"]);
Route::apiResource("posts",\App\Http\Controllers\PostController::class);
Route::apiResource("categories",\App\Http\Controllers\CategoryController::class);
Route::get("category/{slug}/posts",[\App\Http\Controllers\PostController::class,"categoryPosts"]);
Route::get("search-posts/{query}",[\App\Http\Controllers\PostController::class,"SearchPosts"]);
