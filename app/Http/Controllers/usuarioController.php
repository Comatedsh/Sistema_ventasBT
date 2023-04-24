<?php

namespace App\Http\Controllers;

use App\Models\credito;
use App\Models\direcciones;
use App\Models\rol;
use App\Models\User;
use App\Models\usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class usuarioController extends Controller
{

    public function index()
    {
       // $marca = Marca::select('marcas.id','marcas.nombre','marcas.origen','marcas.id_provedor','nombrep','correo')->join('provedors', 'provedors.id','=','marcas.id_provedor')->get();
        $usuario = usuario::all();
        return view('usuario',compact('usuario'));
        
    }

    public function showPerfil(){
        $id = Auth::id();
        $usuarios = User::where('id',$id)->get();
        $direcciones = direcciones::where('idUsuario',$id)->get();
        $creditos = credito::where('idUsuario',$id)->get();
        return view('usuarios.perfil', compact('usuarios','direcciones', 'creditos'));
    }
    public function show1(){
        $id = Auth::id();
        $usuarios = User::where('id',$id)->get();
        return view('usuarios.datos', compact('usuarios'));
    }

    public function show(string $id)
    {
        $usuario = usuario::find($id);
        return view('editarUsuario',compact('usuario'));
    }

    public function edit($id){
        $usuarios = User::where('id',$id)->get();
        return view('usuarios.datos', compact('usuarios'));
    }

    public function update1(request $request, User $id){
        $id->nombre_usuario = $request->nombre_usuario;
        $id->nombre_completo = $request->nombre_completo;
        $id->email = $request->email;

        $id->save();
        $idUsuario = Auth::id();
        $usuarios = User::where('id',$idUsuario)->get();
        $direcciones = direcciones::where('idUsuario',$idUsuario)->get();
        $creditos = credito::where('idUsuario',$idUsuario)->get();
        return view('usuarios.perfil', compact('id','usuarios','direcciones','creditos'));
    }

    public function update(Request $request, string $id)
    {
        $usuario = usuario::find($id);
        $usuario->fill($request->input())->saveOrFail();
        return redirect('usuario');
    }

    public function Usuarios_web(){
        $usuarios = DB::table('users')
        ->select('*')
        ->where('idRol',2)->get();
        return view('admin.UsuariosWeb', compact('usuarios'));
    }

    public function Usuarios_almacen(){
        $usuarios = DB::table('users')
        ->select('*')
        ->where('idRol',1)->get();
        return view('admin.UsuariosAlmacen', compact('usuarios'));
    }

    public function create(request $request){
        $usuario = new User();
        $usuario->nombre_usuario = $request->nombre_usuario;
        $usuario->nombre_completo = $request->nombre_completo;
        $usuario->idRol = $request->idRol;
        $usuario->telefono = $request->telefono;
        $usuario->email = $request->email;
        $usuario->password = $request->password;
        $usuario->save();

        $usuarios = DB::table('users')
        ->select('*')
        ->where('idRol',1)->get();
        return view('admin.UsuariosAlmacen', compact('usuarios'));
    }

    public function store(Request $request)
    {
        $usuario = new usuario( $request->input());
        $usuario->saveOrFail();
       
        return redirect('usuario');
    }

    public function showAlmacen($id){
        $usuarios = User::where('id',$id)->get();
        $roles = DB::table('rols')
        ->select('*')->get();
        return view('admin.editarUsuarioAlmacen', compact('usuarios','roles'));
    }

    public function editAlmacen(Request $request, $id){
        dd($request);
        $flight = User::find($id);
        $flight->nombre_usuario = $request->nombre_usuario;
        $flight->nombre_completo = $request->nombre_completo;
        $flight->telefono = $request->telefono;
        $flight->email = $request->email;
        $flight->password = $request->password;
        $flight->idRol = $request->idRol;
    
        $flight->save();
        return $flight;
    }

    public function destroy(string $id)
    {
        $usuario = usuario::find($id);  
        $usuario->delete();
        return redirect('usuario');
    }

}
