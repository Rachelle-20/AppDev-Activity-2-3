<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;


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


Route::middleware('token.check')->group(function () {
    // for ACT2
    Route::get('/test', [UserController::class, 'index']);
    Route::patch('/test/{tests}', [UserController::class, 'update'])->withoutMiddleware("token.check");
    Route::post('/run', [PostController::class, 'store']);
    Route::put('/run/{runs}', [PostController::class, 'update']);

    Route::delete('/run/{runs}', [PostController::class, 'destroy']);
});

// for ACT3
Route::apiResource('products', ProductController::class);
// Route::get('/products', [ProductController::class, 'index']);
// Route::get('/products/{product}', [ProductController::class, 'show']);
// Route::post('/products', [ProductController::class, 'store']);
// Route::put('/products/{product}', [ProductController::class, 'update']);
// Route::delete('/products/{product}', [ProductController::class, 'destroy']);