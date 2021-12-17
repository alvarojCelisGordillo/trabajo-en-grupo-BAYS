<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RangoController extends Controller
{

    public function index(){

        $rango = rango::get();
        return[
            'Rangos'=> $rango
        ];
    }



    public function store (Request $request){
         $rango = new rango();
         $rango-> nombre = $request-> nombre;
         $rango-> cantidad = $request-> cantidad;
         $rango->save();

    }

    public function update(Request $request) {
        $rango = Rango::findOrFail($request->id);
        $rango->nombre = $request->nombre;
        $rango->cantidad = $request->cantidad;


        $rango->save();
        
    }

    public function delete(Request $request) {
        $rango = Rango::findOrFail($request->id);    
        $rango->delete();
    }

    //
}

