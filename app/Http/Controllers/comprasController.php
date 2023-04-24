<?php

namespace App\Http\Controllers;

use App\Models\compra;
use App\Models\credito;
use App\Models\direcciones;
use App\Models\producto;
use App\Models\tarjeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class comprasController extends Controller
{

    public function showCompras(){
        $id = Auth::id();
        $compras = DB::table('compras')
        ->select('*')
        ->where('idUsuario',$id)->get();

        if(count($compras)>= 1){
            foreach($compras as $c){
                $compra = $c -> idProducto;
            }
            foreach($compras as $d){
                $direccion = $d -> idDireccion;
            }
            $direccion = direcciones::where('id',$direccion)->get();
            $producto = producto::where('id',$compra)->get();
            return view('usuarios.compras', compact('compras','producto','direccion'));
        }else{
            return view('usuarios.comprasnull');
        }
    }

    public function store(request $request){
        $id = Auth::id();

        $creditos = DB::table('creditos')
        ->select('*')
        ->where('idUsuario',$id)->get();

        foreach($creditos as $c){
            $credit = $c -> creditoActual;
        }

        $tarjetas = DB::table('tarjetas')
        ->select('*')
        ->where('idUsuario',$id)->get();

        foreach($tarjetas as $t){
            $tarje = $t -> credito;
        }


        if($request->cantidades_compradas == null){
            echo '<script language="javascript">alert("No dejes campos vacios");</script>';
            $producto = producto::all();
            return view('/.home', compact('producto'));
        }else{
            if($request->id_direccion == 0){
                echo '<script language="javascript">alert("Tiene que seleccionar una dirección");</script>';
                $producto = producto::all();
                return view('/.home', compact('producto'));
            }else{
                $credito = (int)$request->precio*(int)$request->cantidades_compradas;
                if($credito<=$credit){
                    if($request->cantidades_compradas <= $request->existencias){
                        //actualizaremos el credito de la tarjeta
                    $resta = $tarje-$credito;
                    $estadoTarjeta = tarjeta::find($id);
                    $estadoTarjeta->credito = $resta;
                    $estadoTarjeta->save();

                    //actualizaremos el credito
                    $resta = $credit-$credito;
                    $creditoNuevo = credito::find($id);
                    $creditoNuevo->creditoActual = $resta;
                    $creditoNuevo->creditoAnterior = $credit;
                    $creditoNuevo->save();

                    //actualizaremos existencias de productos
                    $resta2 = (int)$request->existencias - (int)$request->cantidades_compradas;
                    $existencianuevo = producto::find($request->id);
                    $existencianuevo->existentes = $resta2;
                    $existencianuevo->save();

                    //Agregamos la compra
                    $compras = new compra();
                    $compras->idUsuario=$id;
                    $compras->idProducto=$request->id;
                    $compras->precio_producto=$request->precio;
                    $compras->cantidades_compradas=$request->cantidades_compradas;
                    $compras->idDireccion=$request->id_direccion;
                    $compras->pago=$credito;
                    $compras->save();

                    echo '<script language="javascript">alert("Compra exitosa");</script>';

                    $producto = DB::table('productos')
                    ->select('*')
                    ->where('existentes','>',0)->get();

                    return view('/.home', compact('producto'));
                    }else{
                        echo '<script language="javascript">alert("No hay productos suficientes");</script>';
                        $producto = DB::table('productos')
                        ->select('*')
                        ->where('existentes','>',0)->get();
                        return view('/.home', compact('producto'));
                    }

                    
                }else{
                    echo '<script language="javascript">alert("No se pudo realizar la compra por falta de credito");</script>';
                    $producto = producto::all();
                    return view('/.home', compact('producto'));
                }
            }
        }
    }



}
