<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\VendedorController;
use App\Http\Controllers\VendasController;
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

// Public routes

Route::resource('vendedores', VendedorController::class);

Route::resource('vendas', VendasController::class);

Route::get('/vendas/search/{vendedor_id}', [VendasController::class, 'findVendasPorVendedor']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
