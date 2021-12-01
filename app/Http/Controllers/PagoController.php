<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pago; 
use Carbon\Carbon;

class PagoController extends Controller
{
    //

    public function index() {
        $pago = Pago::get();

        return [
            'Pagos'=> $pago
        ];
    }

    public function store(Request $request) {
        $pago = new Pago();

        $fecha = Carbon::now('america/bogota');

        $pago->fecha = $fecha;
        $pago->valor_pago = $request->valorPago;
        $pago->id_credito = $request->idCredito;

        $pago->save();
    }

    public function update(Request $request) {
        $pago = Pago::findOrFail($request->id);

        $fecha = Carbon::now('america/bogota');
        
        $pago->fecha = $fecha;
        $pago->valor_pago = $request->valorPago;
        $pago->id_credito = $request->idCredito;

        $pago->save();
    }

    public function destroy(Request $request) {
        $pago = Pago::findOrFail($request->id);
        $pago->delete();
    }
}
