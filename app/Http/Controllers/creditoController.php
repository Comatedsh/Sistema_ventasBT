<?php

namespace App\Http\Controllers;

use App\Models\credito;
use App\Models\direcciones;
use App\Models\producto;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class creditoController extends Controller
{
    public function show(){
        $id = Auth::id();
        $creditos = credito::where('idUsuario',$id)->get();
        return view('usuarios.credito', compact('creditos'));
    }

    public function update(Request $request){
        $idUsuario = Auth::id();
        $creditos = DB::table('creditos')
        ->select('creditoActual')
        ->where('idUsuario',$idUsuario)->get();
        
        foreach($creditos as $c){
        $credito = $c -> creditoActual;
        }

        $tarjetas = DB::table('tarjetas')
        ->select('*')
        ->where('idUsuario',$idUsuario)->get();

        foreach($tarjetas as $t){
            $tarje = $t -> credito;
        }

        if($credito == $tarje){
            echo '<script language="javascript">alert("No se puede actualizar mas del saldo de tu tarjeta");</script>';
            $producto = producto::all();
            return view('/.home', compact('producto'));
        }else{

            $creditoNuevo = $credito + (int)$request->creditoActual;

            if($creditoNuevo > $tarje){
                echo '<script language="javascript">alert("La cantidad que desea sacar pasa el saldo de su tarjeta");</script>';
                $producto = producto::all();
                return view('/.home', compact('producto'));
            }else{
                $flight = credito::find($idUsuario);
     
                $flight->creditoActual = $creditoNuevo;
                $flight->creditoAnterior = $credito;
            
                $flight->save();
                
                $producto = producto::all();
                return view('/.home', compact('producto'));
            }           
        }
    }
    
    public function redic(){
        $id = Auth::id();
        $creditos = DB::table('creditos')
        ->select('id')
        ->where('idUsuario',$id)->get();

        if(count($creditos)>= 1){
            $creditos = credito::where('idUsuario',$id)->get();
            return view('usuarios.credito', compact('creditos'));
        }else{

            $tarjetas = DB::table('tarjetas')
            ->select('*')
            ->where('idUsuario',$id)->get();
    
            if(count($tarjetas)>=1){
                return view('usuarios.obtenerCredito');
            }else{
                return view('usuarios.newCredito');    
            }
        }
    }

    public function store(request $request){
        $id = Auth::id();
        $tarjetas = DB::table('tarjetas')
        ->select('*')
        ->where('idUsuario',$id)->get();

        foreach($tarjetas as $t){
            $tarje = $t -> credito;
        }

        if($request->creditoActual > $tarje){
            echo '<script language="javascript">alert("No hay saldo suficiente");</script>';
            $creditos = credito::where('idUsuario',$id)->get();
            $usuarios = User::where('id',$id)->get();
            $direcciones = direcciones::where('idUsuario',$id)->get();
            return view('usuarios.perfil', compact('usuarios','direcciones','creditos'));
        }else{
            $tarjeta = new credito();
            $tarjeta->idUsuario=$id;
            $tarjeta->creditoActual=$request->creditoActual;
            $tarjeta->creditoAnterior=0;
            $tarjeta->save();
        
            $creditos = credito::where('idUsuario',$id)->get();
            $usuarios = User::where('id',$id)->get();
            $direcciones = direcciones::where('idUsuario',$id)->get();
            return view('usuarios.perfil', compact('usuarios','direcciones','creditos'));
        }
    }
}
