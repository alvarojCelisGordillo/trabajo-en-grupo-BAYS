<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\CreditoController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\ConsumibleController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\DetFacturaController;
use App\Http\Controllers\RangoController;
use App\Http\Controllers\BonoController;


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

// ::::::::::::::::::::::::::::::::::::: CREDITOS ROUTES ::::::::::::::::::::::::::::::::::::::::::::::::::: 
Route::get('/api/credito', [CreditoController::class, 'index']);
Route::post('/api/credito/registrar', [CreditoController::class, 'store']);
Route::put('/api/credito/actualizar', [CreditoController::class, 'update']);
Route::delete('/api/credito/eliminar', [CreditoController::class, 'destroy']);

//  ::::::::::::::::::::::::::::::::: PAGOS ROUTES ::::::::::::::::::::::::::::::::::::::::::::::::::::::::: 

Route::get('/api/pago', [PagoController::class, 'index']);
Route::post('/api/pago/registrar', [PagoController::class, 'store']);
Route::put('/api/pago/actualizar', [PagoController::class, 'update']);
Route::delete('/api/pago/eliminar', [PagoController::class, 'destroy']);

// ::::::::::::::::::::::::: CONSUMIBLES ROUTES ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
Route::get('/api/consumible', [ConsumibleController::class, 'index']);
Route::post('/api/consumible/registrar', [ConsumibleController::class, 'store']);
Route::put('/api/consumible/actualizar', [ConsumibleController::class, 'update']);
Route::delete('/api/consumible/eliminar', [ConsumibleController::class, 'destroy']);


// ::::::::::::::::::::::::::::::::::::::::::  CLIENTES ROUTES ::::::::::::::::::::::::::::::::::::::::::::::::::::
Route::get('/api/cliente', [ClienteController::class, 'index']);
Route::post('/api/cliente/registrar', [ClienteController::class, 'store']);
Route::put('/api/cliente/actualizar', [ClienteController::class, 'update']);
Route::delete('/api/cliente/eliminar', [ClienteController::class, 'destroy']);

// ::::::::::::::::::::::::::::::::::::::::::::: FACTURA ROUTES   :::::::::::::::::::::::::::::::::::::::::::::::::
Route::get('api/factura/', [FacturaController::class, 'index']);
Route::post('api/factura/registrar', [FacturaController::class, 'store']);
Route::put('api/factura/actualizar', [FacturaController::class, 'update']);
Route::delete('api/factura/eliminar', [FacturaController::class, 'destroy']);

// :::::::::::::::::::::::::::::::::::::::::::: DETALLE FACTURAS ROUTES  :::::::::::::::::::::::::::::::::::::::::::::::
Route::get('api/detFactura/', [DetFacturaController::class, 'index']);
Route::put('api/detFactura/actualizar', [DetFacturaController::class, 'update']);
Route::delete('api/detFactura/eliminar', [DetFacturaController::class, 'destroy']);

// :::::::::::::::::::::::::::::::::::::::: BONOS ROUTES ::::::::::::::::::::::::::::::::::::::::::::::::::::::
Route::get('/api/bono', [BonoController::class, 'index']);
Route::post('/api/bono/registrar', [BonoController::class, 'store']);
Route::put('/api/bono/actualizar', [BonoController::class, 'update']);
Route::delete('/api/bono/eliminar', [BonoController::class, 'delete']);
 
// :::::::::::::::::::::::::::::::::::::::: RANGOS ROUTES :::::::::::::::::::::::::::::::::::::::::::::::::::

Route::get('/api/rango',[RangoController::class, 'index']);
Route::post('/api/rango/registrar',[RangoController::class, 'store']);
Route::put('/api/rango/actualizar',[RangoController::class, 'update']);
Route::delete('/api/rango/eliminar',[RangoController::class, 'delete']);