<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\CreditoController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\ConsumibleController;
use App\Http\Controllers\ClienteController;

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

Route::get('/', function () {
    return view('welcome');
});

// ::::::::::::::::::::::::::::::::::::: Creditos Routes :::::::::::::::::::::::::::::::::::::::::::::::::::
Route::get('/api/credito', [CreditoController::class, 'index']);
Route::post('/api/credito/registrar', [CreditoController::class, 'store']);
Route::put('/api/credito/actualizar', [CreditoController::class, 'update']);
Route::delete('/api/credito/eliminar', [CreditoController::class, 'destroy']);

//  ::::::::::::::::::::::::::::::::: Pagos Routes :::::::::::::::::::::::::::::::::::::::::::::::::::::::::

Route::get('/api/pago', [PagoController::class, 'index']);
Route::post('/api/pago/registrar', [PagoController::class, 'store']);
Route::put('/api/pago/actualizar', [PagoController::class, 'update']);
Route::delete('/api/pago/eliminar', [PagoController::class, 'destroy']);

// ROUTES CONSUMIBLES--
Route::get('/api/consumible', [ConsumibleController::class, 'index']);
Route::post('/api/consumible/registrar', [ConsumibleController::class, 'store']);
Route::put('/api/consumible/actualizar', [ConsumibleController::class, 'update']);
Route::post('/api/consumible/eliminar', [ConsumibleController::class, 'destroy']);



// ROUTES CLIENTE--
Route::get('/api/cliente', [ClienteController::class, 'index']);
Route::post('/api/cliente/registrar', [ClienteController::class, 'store']);
Route::put('/api/cliente/actualizar', [ClienteController::class, 'update']);
Route::post('/api/cliente/eliminar', [ClienteController::class, 'destroy']);


