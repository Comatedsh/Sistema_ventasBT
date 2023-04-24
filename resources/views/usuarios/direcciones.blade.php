@extends('layouts.plan')

@section('content')
<style>
    body{
        background-color: #141619;
    }

    .datos{
        width: 628px;
        height: 500px;
        background-color: #ffffff;
        margin-left: 500px;
        margin-top: 25px;
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
      border: solid 2px black;
    }
    .btn:hover{
      border: solid 2px black;
      background-color: blue;
      color: white;
    }
    .btn2{
      border: solid 2px black;
      margin-left: 230px;
      border-radius: 9px;
    }
    .btn2:hover{
      border: solid 2px black;
      background-color: blue;
      color: white;
    }
    .text{
      border-radius: 12px;
      font-size: 17px;
    }
</style>
<div class="datos">
  <form action="{{url('store')}}" method="POST">
    @csrf
<h1>Datos de {{Auth::user()->nombre_usuario}}</h1><br>
<label for="" class="campo">Lugar de direccion: <input type="text" name="tipo_direccion" class="text" required pattern="[a-z]{1,2000}" title="solo admitira letras en minisculas"></label><br>
<label for="" class="campo">Dirreccion: <input type="text" name="direccion" class="text" required ></label><br><br>
<input type="submit" class="btn2" value="Agregar Direccion"><br>
</form>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Lugar de direccion</th>
        <th scope="col">Direccion</th>
        <th scope="col">Acción</th>
      </tr>
    </thead>
    @foreach ($direcciones as $direccion)
    <tbody>
      <tr>
        <td>{{$direccion->tipo_direccion}}</td>
        <td>{{$direccion->direccion}}</td>
        <form action="{{url('eliminar',$direccion->id)}}" method="POST">
            @csrf
            @method('delete')
            <td><input type="submit" class="btn" value="Eliminar Direccion"></td>
        </form>
      </tr>
    </tbody>
    @endforeach
  </table>
</div>
@endsection