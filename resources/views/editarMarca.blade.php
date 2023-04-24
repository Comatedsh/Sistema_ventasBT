@extends('layouts.app2')
@section('contenido1')
<link rel="stylesheet" href="">
    <div class="row mt-3"> 
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    EDITAR MARCA
                </div>
                    
                <div class="card-body">
                    <form  id="frmProvedor" method="POST" action="{{url("marca",[$marca])}}">
                        @method('PUT')
                        @csrf
                        <div class="input-group mb-3">
                            <span class="input-group-text"> <i class="fa-solid fa-user"></i> </span>
                            <input type="text" name="nombre" value="{{$marca->nombre}}" class="form-control" maxlength="50" placeholder="Nombre" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-user"></i> </span>
                            <input type="text" name="origen" value="{{$marca->origen}}" class="form-control" maxlength="50" placeholder="Correo" required>
                        </div>
                        
                        
                        <div class="input-group mb-3" >
                            <span class="input-group-text"> <i class="fa-solid fa-user"></i> </span>
                            <select name="id_provedor" class="form-select" required  >
                                <option value="" >Provedor</option>
                                @foreach ($provedor as $row )

                                @if ($row->id == $marca->id_provedor)
                                    <option selected value="{{$row->id}}">{{$row->nombrep}}</option>
                                @else
                                     <option value="{{$row->id}}">{{$row->nombrep}}</option>
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