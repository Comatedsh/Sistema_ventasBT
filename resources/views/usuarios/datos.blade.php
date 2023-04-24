@extends('layouts.plan')

@section('content')
<style>
    body{
        background-color: #141619;
    }

    .datos{
        width: 528px;
        height: 319px;
        background-color: #ffffff;
        margin-left: 500px;
        margin-top: 62px;
        border-radius: 12px;;
    }
    .perfil{
        display: contents
    }
    .perfil:hover{
        color: black;
    }
    .s, .campo, .cantidad{
        margin-left: 50px;
        font-size: 20px;
    }
    h1{
        margin-left: 50px;
    }
    .btn{
        margin-left: 184px;
        font-size: 17px;
        border: solid 2px black;
        margin-top: 20px;
    }
    .btn:hover{
        margin-left: 214px;
        font-size: 17px;
        border: solid 2px black;
        background-color: rgb(32, 32, 223);
        color: white;
    }
    .nombreU, .nombreC,.telefono,.email{
        border-radius: 12px;
        font-size: 17px;
    }
</style>
<div class="datos">
<h1>Datos de {{Auth::user()->nombre_usuario}}</h1><br>
@foreach ($usuarios as $usuario)
<form action="{{ url('update',$usuario->id) }}" method="POST">
@csrf
@method('put')
<label for="" class="campo">Nombre de usuario: <input type="text" class="nombreU" name="nombre_usuario" id="" value="{{$usuario->nombre_usuario}}" required></label><br>
<label for="" class="campo">Nombre completo: <input type="text" class="nombreC" name="nombre_completo" value="{{$usuario->nombre_completo}}" required></label><br>
<label for="" class="campo">Telefono: <input type="text" class="telefono" name="telefono" value="{{$usuario->telefono}}" required></label><br>
<label for="" class="campo">Correo: <input type="text" class="email" name="email" value="{{$usuario->email}}" required></label><br>
@endforeach
<input type="submit" value="Actualizar datos" class="btn">
</form>
</div>
@endsection