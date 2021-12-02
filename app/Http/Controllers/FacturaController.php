<?php

namespace App\Http\Controllers;
use App\Models\Factura;
use App\Models\DetFactura;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FacturaController extends Controller
{
    //
    public function index() {
        $factura = Factura::all();
        return [
            'factura'=>$factura
        ];
    }

    public function store(Request $request){
        try{
            //Iniciamos la transacción de la base de datos
            DB::beginTransaction();
            $fecha = Carbon::now('America/Bogota');
            $factura = new Factura();
            //$factura -> id_cliente = $request -> idCliente;
            $factura -> fecha = $fecha;
            $factura -> forma_pago = $request -> formaPago;
            $factura -> total = $request -> total;
            $factura -> estado = $request -> estado;

            $factura->save();

            $detalles = $request -> data;
            foreach($detalles as $objeto=>$detalle_factura){
                $detalle = new DetFactura();
                $detalle -> id_factura = $factura -> id;
                //$detalle -> id_consumible = $detalle_factura['idConsumible'];
                $detalle -> cantidad = $detalle_factura['cantidad'];
                $detalle -> precio = $detalle_factura['precio'];
                $detalle -> total = $detalle_factura['precio']*$detalle_factura['cantidad'];
                $detalle -> fecha_registro = $detalle_factura['fechaRegistro'];
                $detalle -> descripcion = $detalle_factura['descripcion'];

                $detalle -> save();

            }

            DB::commit();
        }catch(Exception $e) {
            DB:rollback();            
            console.log($e);
        }
    }

    public function update(Request $request) {
        $fecha = Carbon::now('America/Bogota');
        $factura = Factura::findOrFail($request->id);
        //$factura -> id_cliente = $request -> idCliente;
        $factura -> fecha = $fecha;
        $factura -> forma_pago = $request -> formaPago;
        $factura -> total = $request -> total;
        $factura -> estado = $request -> estado;

        $factura->save();
    }

    public function destroy(Request $request) {
        $factura = Factura::findOrFail($request->id);        
        $factura->delete();
    }
}
