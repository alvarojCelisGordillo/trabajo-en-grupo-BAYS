<?php

namespace App\Http\Controllers;
use App\Models\Cliente;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index (){

        $cliente = Cliente::select ('id','nombres','apellidos','email','telefono','fecha_nacimiento','horas_consumidas', 'id_rango')
        ->orderBy('nombres','asc')->get();

        return[
            'Cliente' => $cliente
        ];

    }
       //
    public function store (request $request){
        $cliente = new cliente();
        $cliente->nombres = $request->nombres;
        $cliente->apellidos = $request->apellidos;
        $cliente->email = $request->email;
        $cliente->telefono = $request->telefono;
        $cliente->fecha_nacimiento = $request->fechaNacimiento;
        $cliente->horas_consumidas = $request->horasConsumidas;
        $cliente->id_rango = $request->idRango;

        $cliente->save();
    }

    public function update (Request $request){
        $cliente = Cliente::findOrFail($request->id);
        $cliente->nombres = $request->nombres;
        $cliente->apellidos = $request->apellidos;
        $cliente->email = $request->email;
        $cliente->telefono = $request->telefono;
        $cliente->fecha_nacimiento = $request->fechaNacimiento;
        $cliente->horas_consumidas = $request->horasConsumidas;
        $cliente->id_rango = $request->idRango;

        $cliente ->save();
    }

   public function destroy (Request $request){
        $cliente = Cliente::findOrFail($request ->id);
        $cliente->delete();
    }

}

