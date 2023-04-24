<?php

namespace App\Http\Controllers;

use App\Models\direcciones;
use App\Models\producto;
use App\Models\Marca;
use App\Models\provedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class productoController extends Controller
{
    public function index1(){
        $producto = DB::table('productos')
        ->select('*')
        ->where('existentes','>',0)->get();
        return view('/.inicio', compact('producto'));
    }

    public function index()
    {
        $producto = Producto::select('productos.id','productos.nombre_producto','productos.identificador','productos.descripcion_producto','productos.precio','productos.existentes','productos.imagen','productos.estado_producto','productos.id_marca','nombre')->join('marcas', 'marcas.id','=','productos.id_marca')->get();
        $marca = Marca::all();
        return view('producto',compact('producto','marca'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $producto = new Producto( $request->input());
        $producto->saveOrFail();
       
        return redirect('producto');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $producto = Producto::find($id);
        $marca = Marca::all();
        return view('editarProducto',compact('marca','producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $producto = producto::find($id);
        $producto->fill($request->input())->saveOrFail();
        return redirect('producto');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $producto = Producto::find($id);  
        $producto->delete();
        return redirect('producto');
    }

    public function inde(){
        $producto = DB::table('productos')
        ->select('*')
        ->where('existentes','>',0)->get();
        return view('/.home', compact('producto'));
    }

    public function oferta(){
        $producto = producto::where('estado_producto','Oferta')->get();
        return view('usuarios.oferta', compact('producto'));
    }

    public function moda(){
        $producto = producto::where('estado_producto','Moda')->get();
        return view('usuarios.moda', compact('producto'));
    }

    public function descuento(){
        $producto = producto::where('estado_producto','Descuento')->get();
        return view('usuarios.descuento', compact('producto'));
    }

    public function showProducto($id){
        $idUsuario = Auth::id();
        $producto = producto::where('id',$id)->get();
        $direcciones = direcciones::where('idUsuario',$idUsuario)->get();
        return view('usuarios.comprasp', compact('producto', 'direcciones'));
    }
}
