<?php

namespace App\Http\Controllers;

use App\Models\Consumible;

use Illuminate\Http\Request;

class ConsumibleController extends Controller
{
    public function index(){

        $consumible = Consumible:: select ('id','nombre','tipo_consumible','precio','cantidad')
        ->orderBy('id','asc')->get();

        return[
            'Consumibles'=>$consumible
        ];

    }
       //
    public function store (request $request){
        $consumible = new Consumible();
        $consumible->nombre = $request->nombre;
        $consumible->tipo_consumible = $request->tipoConsumible;
        $consumible->precio = $request->precio;
        $consumible->cantidad = $request->cantidad;

        $consumible->save();
    }

    public function update (Request $request){
        $consumible = Consumible::findOrFail($request->id);
        $consumible->nombre = $request->nombre;
        $consumible->tipo_consumible = $request->tipoConsumible;
        $consumible->precio = $request->precio;
        $consumible->cantidad = $request->cantidad;

        $consumible ->save();
    }

   public function destroy (Request $request){
        $consumible = Consumible::findOrFail($request ->id);
        $consumible-> delete();

    }

}

