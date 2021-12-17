<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\CreditoController;
use App\Http\Controllers\PagoController;

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


///////////////rutas de bono//////////////////////////////////////
Route::get('/api/bono', [BonoController::class, 'index']);
Route::post('/api/bono/registrar', [BonoController::class, 'store']);
Route::put('/api/bono/actualizar', [BonoController::class, 'update']);
Route::delete('/api/bono/eliminar', [BonoController::class, 'delete']);
 
////////////////// rutas de rango//////////////////////////////////////

Route::get('/api/rango',[RangoController::class, 'index']);
Route::post('/api/rango/registrar',[RangoController::class, 'store']);
Route::post('/api/rango/actualizar',[RangoController::class, 'update']);
Route::post('/api/rango/eliminar',[RangoController::class, 'delete']);

