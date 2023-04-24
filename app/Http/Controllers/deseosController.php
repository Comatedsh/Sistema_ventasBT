<?php

namespace App\Http\Controllers;

use App\Models\lista_deseos;
use App\Models\producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class deseosController extends Controller
{
    public function shoDeseos(){
        $id = Auth::id();
        $deseos = DB::table('lista_deseos')
        ->select('*')
        ->where('idUsuario',$id)->get();


        if(count($deseos)>= 1){
            foreach($deseos as $d){
                $deseo = $d -> idProducto;
            }
            $producto = producto::where('id',$deseo)->get();
            return view('usuarios.deseos', compact('deseos','producto'));
        }else{
            return view('usuarios.deseosnull');
        }
    }

    public function delete(lista_deseos $id){
        $id->delete();
        $id = Auth::id();
        $deseos = lista_deseos::where('idUsuario',$id)->get();
        return view('usuarios.deseos', compact('deseos'));
    }

    public function store($id){
        $idUsuario = Auth::id();
        $deseo = new lista_deseos();
        $deseo->idProducto=$id;
        $deseo->idUsuario=$idUsuario;
        $deseo->save();
        echo '<script language="javascript">alert("El producto se agrego a la lista de deseos");</script>';
        $producto = producto::all();
        return view('/.home', compact('producto'));
    }
}
