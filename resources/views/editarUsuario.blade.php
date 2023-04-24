@extends('layouts.app2')
@section('contenido1')
<link rel="stylesheet" href="">
    <div class="row mt-3"> 
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    EDITAR PROVEDOR
                </div>
                    
                <div class="card-body">
                    <form  id="frmProvedor" method="POST" action="{{url("usuario", [$usuario])}}">
                        @method('PUT')
                        @csrf
                        <div class="input-group mb-3">
                            <span class="input-group-text"> <i class="fa-solid fa-mustache"></i> </span>
                            <input type="text" name="nombreUsuario" value="{{$usuario->nombreUsuario}}" class="form-control" maxlength="50" placeholder="Apodo" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"> <i class="fa-solid fa-mustache"></i> </span>
                            <input type="text" name="nombreCompleto" value="{{$usuario->nombreCompleto}}" class="form-control" maxlength="50" placeholder="Nombre" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"> <i class="fa-solid fa-mustache"></i> </span>
                            <input type="text" name="telefono" value="{{$usuario->telefono}}" class="form-control" maxlength="50" placeholder="Telefono" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"> <i class="fa-solid fa-mustache"></i> </span>
                            <input type="text" name="idRol" value="{{$usuario->idRol}}" class="form-control" maxlength="50" placeholder="ID Rol" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"> <i class="fa-solid fa-mustache"></i> </span>
                            <input type="email" name="correo" value="{{$usuario->correo}}" class="form-control" maxlength="50" placeholder="Correo" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"> <i class="fa-solid fa-mustache"></i> </span>
                            <input type="password" name="clave" value="{{$usuario->clave}}" class="form-control" maxlength="50" placeholder="Contraseña" required>
                        </div>
                        <div class="d-grid col-6 mx-auto">
                            <button class="btn btn-dark"><i class="fa-solid fa-floppy-disk"></i> GUARDAR </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection