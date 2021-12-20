<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bono; 
use Carbon\Carbon;

class BonoController extends Controller
{
    //
    public function index(){
        
        $bono = Bono::get();
        return [
            'Bonos' => $bono
        ];
    }



    public function store (Request $request) {
       $fecha = Carbon::now('America/Bogota');
       $bono = new Bono();
       
       $bono->fecha_expedicion = $fecha;
       $bono->fecha_vencimiento = $request->fechaVencimiento;
       $bono->monto = $request->monto;
       $bono->descripcion = $request->descripcion;
       $bono->estado = $request->estado;

       $bono->id_cliente = $request->idCliente;

       $bono->save();
    }

    public function update(Request $request) {
        $bono = Bono::findOrFail($request->id);
        $bono->fecha_vencimiento = $request->fechaVencimiento;
        $bono->monto = $request->monto;
        $bono->descripcion = $request->descripcion;
        $bono->estado = $request->estado;
        $bono->id_cliente = $request->idCliente;

        $bono->save();
        
    }

    public function delete(Request $request) {
        $bono = Bono::findOrFail($request->id);    
        $bono->delete();
    }

}
