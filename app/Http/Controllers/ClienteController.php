<?php

namespace App\Http\Controllers;
use App\Models\Cliente;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index (){

        $cliente = Cliente::select ('id','nombres','apellidos','telefono','email','fecha_nacimiento','cupo')
        ->orderBy('nombres','asc')->get();

        return[
            'cliente'=>$cliente
        ];

    }
       //
    public function store (request $request){
        $cliente = new cliente();
        $cliente->email = $request->email;
        $cliente->nombres = $request->nombres;
        $cliente->apellidos = $request->apellidos;
        $cliente->telefono = $request->telefono;
        $cliente->fecha_nacimiento = $request->fechaNacimiento;
        $cliente->cupo = $request->cupo;

        $cliente->save();
    }

    public function update (Request $request){
        $cliente = Cliente::findOrFail($request->id);
        $cliente->email = $request->email;
        $cliente->nombres = $request->nombres;
        $cliente->apellidos = $request->apellidos;
        $cliente->telefono = $request->telefono;
        $cliente->fecha_nacimiento = $request->fechaNacimiento;
        $cliente->cupo = $request->cupo;

        $cliente ->save();
    }

   public function destroy (Request $request){
        $cliente = Cliente::findOrFail($request ->id);
        $cliente-> delete();

    }

}

