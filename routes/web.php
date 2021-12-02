<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\CreditoController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\DetFacturaController;

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

/* Rutas Factura */
Route::get('api/factura/', [FacturaController::class, 'index']);
Route::post('api/factura/registrar', [FacturaController::class, 'store']);
Route::put('api/factura/actualizar', [FacturaController::class, 'update']);
Route::delete('api/factura/eliminar', [FacturaController::class, 'destroy']);

/* Routes Detalle Factura */
Route::get('api/detFactura/', [DetFacturaController::class, 'index']);
Route::put('api/detFactura/actualizar', [DetFacturaController::class, 'update']);
Route::delete('api/detFactura/eliminar', [DetFacturaController::class, 'destroy']);


