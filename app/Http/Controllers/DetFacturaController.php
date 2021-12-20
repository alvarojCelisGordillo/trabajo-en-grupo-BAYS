<?php

namespace App\Http\Controllers;
use App\Models\DetFactura;

use Illuminate\Http\Request;

class DetFacturaController extends Controller
{
    //
    public function index() {
        $detalle = DetFactura::all();
        return [
            'Detalle' => $detalle
        ];
    }

    public function update(Request $request) {
        $detalle = DetFactura::findOrFail($request->id);
        $detalle->id_consumible = $request->idConsumible;
        $detalle->cantidad = $request->cantidad;
        $detalle->precio = $request->precio;
        $detalle->total = $request->cantidad * $request->precio;
        $detalle->fecha_registro = $request->fechaRegistro;
        $detalle->descripcion = $request->descripcion;

        $detalle->save();
    }

    public function destroy(Request $request) {
        $detalle = DetFactura::findOrFail($request->id);
        $detalle->delete();
    }
}
