<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Rango; 

class RangoController extends Controller
{
    //
    public function index(){

        $rango = Rango::get();
        return[
            'Rangos' => $rango
        ];
    }



    public function store (Request $request){
         $rango = new Rango();
         $rango->nombre = $request->nombre;
        $rango->valor_para_cupo = $request->valorParaCupo;
        $rango->cantidad_horas = $request->cantidadHoras;
         $rango->save();

    }

    public function update (Request $request) {
        $rango = Rango::findOrFail($request->id);
        $rango->nombre = $request->nombre;
        $rango->valor_para_cupo = $request->valorParaCupo;
        $rango->cantidad_horas = $request->cantidadHoras;


        $rango->save();
        
    }

    public function delete (Request $request) {
        $rango = Rango::findOrFail($request->id);    
        $rango->delete();
    }
}
