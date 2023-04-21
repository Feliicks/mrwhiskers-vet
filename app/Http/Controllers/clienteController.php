<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class clienteController extends Controller
{
    //  Index para mostrar elementos
    //store guardar
    //update actualizar
    //destroyz eliminar
    //edit modificiar
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required|min:3'
        ]);
        $cliente = new Cliente;
        $cliente->nombre = $request->nombre;
        $cliente->apellidos = $request->apellidos;
        $cliente->telefono = $request->telefono;
        $cliente->direccion = $request->direccion;
        $cliente->correo = $request->correo;
        $cliente->cedula_de_identidad = $request->cedula_de_identidad;
        $cliente->contrasenia=$request->contrasenia;
        //$cliente->save();
        return redirect()->route('registroSatisfactorio')->with([
            'success'=> 'nombre registrado Correctamnet',
            'nombre'=>$request->nombre,
            'apellidos'=>$request->apellidos,
            'pass'=>$request->contrasenia,
            'usuario'=>$request->cedula_de_identidad,
            'contrasenia'=>$request->contrasenia
        ]);
        /* return redirect()->route('registroCli')->with('success', 'nombre registrado Correctamnet'); */
    }

    public function index (){
        $cliente = Cliente::all();
        return view('');
    }
}