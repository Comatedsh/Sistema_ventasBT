@extends('layouts.app2')
@section('contenido1')
<link rel="stylesheet" href="">
    <div class="row mt-3"> 
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    EDITAR PRODUCTO
                </div>
                    
                <div class="card-body">
                    <form  id="frmProvedor" method="POST" action="{{url("producto",[$producto])}}">
                        @method('PUT')
                        @csrf
                        <div class="input-group mb-3">
                            <span class="input-group-text"> <i class="fa-solid fa-user"></i> </span>
                            <input type="text" name="nombrepr" value="{{$producto->nombre_producto}}" class="form-control" maxlength="50" placeholder="Nombre" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"> <i class="fa-solid fa-user"></i> </span>
                            <input type="text" name="identificador" value="{{$producto->identificador}}" class="form-control" maxlength="50" placeholder="Identificador" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"> <i class="fa-solid fa-user"></i> </span>
                            <input type="text" name="descripcion" value="{{$producto->descripcion_producto}}" class="form-control" maxlength="50" placeholder="Descripcion" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-user"></i> </span>
                            <input type="text" name="precio" value="{{$producto->precio}}" class="form-control" maxlength="50" placeholder="Precio" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-user"></i> </span>
                            <input type="text" name="existentes" value="{{$producto->existentes}}" class="form-control" maxlength="50" placeholder="Existentes" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-user"></i> </span>
                            <input type="text" name="imagen" value="{{$producto->imagen}}" class="form-control" maxlength="50" placeholder="Imagen" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-user"></i> </span>
                            <input type="text" name="estado" value="{{$producto->estado_productos}}" class="form-control" maxlength="50" placeholder="Estado" required>
                        </div>
                        <div class="input-group mb-3" >
                            <span class="input-group-text"> <i class="fa-solid fa-user"></i> </span>
                            <select name="id_marca" class="form-select" required  >
                                <option value="" >Marca</option>
                                @foreach ($marca as $row )

                                @if ($row->id == $producto->id_marca)
                                    <option selected value="{{$row->id}}">{{$row->nombre}}</option>
                                @else
                                     <option value="{{$row->id}}">{{$row->nombre}}</option>
                                @endif
                                  
                                @endforeach
                            </select>
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