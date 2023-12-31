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

    // Dashboard Routes
    Route::get('/dashboard/customers-count', [\App\Http\Controllers\Api\DashboardController::class, 'activeCustomers']);
    Route::get('/dashboard/products-count', [\App\Http\Controllers\Api\DashboardController::class, 'activeProducts']);
    Route::get('/dashboard/orders-count', [\App\Http\Controllers\Api\DashboardController::class, 'paidOrders']);
    Route::get('/dashboard/income-amount', [\App\Http\Controllers\Api\DashboardController::class, 'totalIncome']);
    Route::get('/dashboard/orders-by-country', [\App\Http\Controllers\Api\DashboardController::class, 'ordersByCountry']);
    Route::get('/dashboard/latest-customers', [\App\Http\Controllers\Api\DashboardController::class, 'latestCustomers']);
    Route::get('/dashboard/latest-orders', [\App\Http\Controllers\Api\DashboardController::class, 'latestOrders']);

    Route::apiResource('customers', \App\Http\Controllers\Api\CustomerController::class);
    Route::get('/countries', [\App\Http\Controllers\Api\CustomerController::class, 'countries']);

    // Report routes
    Route::get('/report/orders', [\App\Http\Controllers\ReportController::class, 'orders']);
    Route::get('/report/customers', [\App\Http\Controllers\ReportController::class, 'customers']);
});

Route::post('/login', [\App\Http\Controllers\Api\AuthController::class, 'login']);