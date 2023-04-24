@extends('layouts.plantilla')

@section('content')
<h1 style="
margin-left:50px;
">Perfil de {{Auth::user()->nombre_usuario}}</h1>
@foreach ($creditos as $credito)
<label for="" style="
    margin-left: 700px;
    font-size: 25px;
    margin-top: -52px;
    position: absolute;
">
Credito Disponible:$ {{$credito->creditoActual}}.00
</label><br>

@endforeach

@foreach ($usuarios as $usuario)
<div class="enlaces" style="margin-left: 50px">
    <a href="{{ url('/AcDatos',$usuario->id) }}" style="display:contents; font-size:20px;">Actualizar Datos</a><br>
    <a href="{{ url('/AcCredito') }}" style="display:contents; font-size:20px;">Agregar Credito</a>
</div>
<br><br>
<div class="datos" style="margin-left: 50px">
    <P style="font-size: 18px;">Datos Del Usuario:</P>
    <label for="" style="font-size: 18px;">Nombre de usuario: {{$usuario->nombre_usuario}}</label><br><br>
    <label for="" style="font-size: 18px;">Nombre completo: {{$usuario->nombre_completo}}</label><br><br>
    <label for="" style="font-size: 18px;">Telefono: {{$usuario->telefono}}</label><br><br>
    <label for="" style="font-size: 18px;">Correo: {{$usuario->email}}</label><br><br>
</div>
@endforeach
<br>
<p style="
    margin-left: 700px;
    margin-top: -299px;
    font-size: 18px;
">Direcciones Del Usuario:</p>
<table class="table" style="
    margin-left: 694px;
    max-width: 452px;
    margin-top: -15px;
">
    <thead>
      <tr>
        <th scope="col">Lugar de direccion</th>
        <th scope="col">Direccion</th>
      </tr>
    </thead>
    @foreach ($direcciones as $direccion)
    <tbody>
      <tr>
        <td>{{$direccion->tipo_direccion}}</td>
        <td>{{$direccion->direccion}}</td>
      </tr>
    </tbody>
    @endforeach
  </table>


@endsection