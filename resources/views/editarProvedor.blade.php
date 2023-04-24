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
                    <form  id="frmProvedor" method="POST" action="{{url("provedor", [$provedor])}}">
                        @method('PUT')
                        @csrf
                        <div class="input-group mb-3">
                            <span class="input-group-text"> <i class="fa-solid fa-mustache"></i> </span>
                            <input type="text" name="nombrep" value="{{$provedor->nombrep}}" class="form-control" maxlength="50" placeholder="Nombre" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"></i></span>
                            <input type="text" name="correo" value="{{$provedor->correo}}" class="form-control" maxlength="50" placeholder="Correo" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"> </i></span>
                            <input type="text" name="rfc" value="{{$provedor->rfc}}" class="form-control" maxlength="50" placeholder="RFC" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"> </i></span>
                            <input type="text" name="direccion" value="{{$provedor->direccion}}" class="form-control" maxlength="50" placeholder="Dirección" required>
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