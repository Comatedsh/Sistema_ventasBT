<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;
use App\Models\provedor;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $marca = Marca::select('marcas.id','marcas.nombre','marcas.origen','marcas.id_provedor','nombrep','correo')->join('provedors', 'provedors.id','=','marcas.id_provedor')->get();
        $provedor = Provedor::all();
        return view('marca',compact('marca','provedor'));
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
        $marca = new Marca( $request->input());
        $marca->saveOrFail();
       
        return redirect('marca');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $marca = Marca::find($id);
        $provedor = Provedor::all();
        return view('editarMarca',compact('provedor','marca'));
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
        $marca = marca::find($id);
        $marca->fill($request->input())->saveOrFail();
        return redirect('marca');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $marca = Marca::find($id);  
        $marca->delete();
        return redirect('marca');
    }
}
