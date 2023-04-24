<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\provedor;

class ProvedorController extends Controller
{
    
    public function index()
    {
        $provedor = Provedor::all();
        return view('provedor',compact('provedor'));
    }

    
    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
        //$provedor = new Provedor($request->input());
        //$provedor->saveOrFail();
        $this->validate($request,[
            'nombrep'=> 'required',
            'correo'=>'required',
            'rfc'=>'required',
            'direccion'=>'required'
            
        ]);
        Provedor::create($request->input());
        return redirect('provedor');
    }

    public function show(string $id)
    {
        $provedor = Provedor::find($id);
        return view('editarProvedor',compact('provedor'));
    }

    
    public function edit(string $id)
    {
        //
    }

    
    public function update(Request $request, string $id)
    {
        $provedor = Provedor::find($id);
        $provedor->fill($request->input())->saveOrFail();
        return redirect('provedor');

    }

    public function destroy(string $id)
    {
        $provedor = Provedor::find($id);  
        $provedor->delete();
        return redirect('provedor');
    }
}
