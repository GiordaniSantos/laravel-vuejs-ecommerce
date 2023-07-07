<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum', 'admin'])->group(function () {
    Route::get('/user', [\App\Http\Controllers\Api\AuthController::class, 'getUser']);
    Route::post('/logout', [\App\Http\Controllers\Api\AuthController::class, 'logout']);

    Route::apiResource('products', \App\Http\Controllers\Api\ProductController::class);

    Route::get('orders', [\App\Http\Controllers\Api\OrderController::class, 'index']);
    Route::get('orders/statuses', [\App\Http\Controllers\Api\OrderController::class, 'getStatuses']);
    Route::post('orders/change-status/{order}/{status}', [\App\Http\Controllers\Api\OrderController::class, 'changeStatus']);
    Route::get('orders/{order}', [\App\Http\Controllers\Api\OrderController::class, 'view']);

    Route::apiResource('customers', \App\Http\Controllers\Api\CustomerController::class);
    Route::get('/countries', [\App\Http\Controllers\Api\CustomerController::class, 'countries']);
});

Route::post('/login', [\App\Http\Controllers\Api\AuthController::class, 'login']);