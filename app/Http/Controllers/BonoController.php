<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BonoController extends Controller
{
    //
    public function index(){
        
        $bono = Bono::get();
        return [
            'Bonos' => $bono
        ];
    }



    public function store (Request $request){
       $bono = new Bono();
       
       $bono->fecha_expedicion = $request->fechaExpedicion;
       $bono->fecha_vencimiento = $request->fechaVencimiento;
       $bono->monto = $request->monto;
       $bono->descripcion = $request->descripcion;
       $bono->estado = $request->estado;

    //    $bono->id_cliente = $request->idCliente;

       $bono->save();
    }

    public function update(Request $request) {
        $bono = Bono::findOrFail($request->id);
        $bono->fecha_expedicion = $request->fechaExpedicion;
        $bono->fecha_vencimiento = $request->fechaVencimiento;
        $bono->monto = $request->monto;
        $bono->descripcion = $request->descripcion;
        $bono->estado = $request->estado;


        $bono->save();
        
    }

    public function delete(Request $request) {
        $bono = Bono::findOrFail($request->id);    
        $bono->delete();
    }


}

