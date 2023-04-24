@extends('layouts.app2')

@section('contenido1')
<div class="col-14 col-lg-14 offset-0 offset-lg-0">
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
         <thead>
          <th>Nombre de Usuario</th>
          <th>Nombre Completo</th>
          <th>telefono</th>
          <th>Correo</th>
        </thead>
        <tbody class="table-group-divider">
            
            @foreach ($usuarios as $row )
            <tr>
                <td>{{$row->nombre_usuario}}</td>
                <td>{{$row->nombre_completo}}</td>
                <td>{{$row->telefono}}</td>
                <td>{{$row->email}}</td>
               
            </tr>
                
            @endforeach
        </tbody>
        </table>
    </div>

  </div>
@endsection
