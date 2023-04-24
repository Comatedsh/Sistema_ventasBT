<?php

namespace App\Http\Controllers;

use App\Models\direcciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class direccionesController extends Controller
{
    public function show(){
        $id = Auth::id();
        $direcciones = direcciones::where('idUsuario',$id)->get();
        return view('usuarios.direcciones', compact('direcciones'));
    }

    public function store(request $request){
        $id = Auth::id();

        $direccion = new direcciones();
        $direccion->idUsuario=$id;
        $direccion->tipo_direccion=$request->tipo_direccion;
        $direccion->direccion=$request->direccion;
        $direccion->save();

        $direcciones = direcciones::where('idUsuario',$id)->get();
        return view('usuarios.direcciones', compact('direcciones'));
    }

    public function delete(direcciones $id){
        $id->delete();
        $id = Auth::id();
        $direcciones = direcciones::where('idUsuario',$id)->get();
        return view('usuarios.direcciones', compact('direcciones'));
    }
}
