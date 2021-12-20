<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Credito;

class CreditoController extends Controller
{
    //

    public function index() {
        $credito = Credito::get();

        return [
            'Creditos' => $credito
        ];
    }

    public function store(Request $request) {
        $credito = new Credito();
        $credito->valor_abonado = $request->valorAbonado;
        $credito->valor_deuda = $request->valorDeuda;
        $credito->saldo = $request->saldo;
        $credito->estado = $request->estado;

        $credito->id_factura = $request->idFactura;

        $credito->save();
    }

    public function update(Request $request) {
        $credito = Credito::findOrFail($request->id);
        $credito->valor_abonado = $request->valorAbonado;
        $credito->valor_deuda = $request->valorDeuda;
        $credito->saldo = $request->saldo;
        $credito->estado = $request->estado;

        $credito->id_factura = $request->idFactura;

        $credito->save();
    }

    public function destroy(Request $request) {
        $credito = Credito::findOrFail($request->id);
        $credito->delete();
    }

}
