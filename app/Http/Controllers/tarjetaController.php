<?php

namespace App\Http\Controllers;

use App\Models\tarjeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class tarjetaController extends Controller
{
    public function store(request $request){
        $id = Auth::id();

        if($request->mes == 0){
            echo '<script language="javascript">alert("Selecciona un mes");</script>';
            return view('usuarios.newCredito');
        }else{
            if($request->año == 0){
                echo '<script language="javascript">alert("Selecciona un año");</script>';
                return view('usuarios.newCredito');
            }else{
                $tarjeta = new tarjeta();
                $tarjeta->idUsuario=$id;
                $tarjeta->fecha_caducidad=$request->mes."/".$request->año;
                $tarjeta->numero_tarjeta=Hash::make($request->numero_tarjeta);
                $tarjeta->codigo_seguridad=Hash::make($request->cvv);
                $tarjeta->credito=11000;
                $tarjeta->save();
            
                return view('usuarios.obtenerCredito');
            }
        }
    }
}
