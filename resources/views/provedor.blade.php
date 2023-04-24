@extends('layouts.app2')

@section('contenido1')

<link rel="stylesheet" href="">
<div class="row mt-3">
    <div class="col-md-4 offset-md-4">
    <div class="d-grid mx-auto">
     <button class="btn btn-dark"  data-bs-toggle="modal" data-bs-target="#modalProvedor">
        <i class="fa-solid fa-circle-plus"></i> AÑADIR
     </button>
    </div>
</div>
</div>
<div class="row mt-3">

 <div class="col-12 col-lg-8 offset-0 offset-lg-2">
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
         <thead>
          <th>N°</th>
          <th>Nombre</th>
          <th>Correo</th>
          <th>RFC</th>
          <th>Dirección</th>
          <th>Editar</th>
          <th>Eliminar</th>
        </thead>
        <tbody class="table-group-divider">
            @php
                $i=1 ;
            @endphp
            @foreach ($provedor as $row )
            <tr>
                <td>{{$i++}}</td>
                <td>{{$row->nombrep}}</td>
                <td>{{$row->correo}}</td>
                <td>{{$row->rfc}}</td>
                <td>{{$row->direccion}}</td>
                <td>
                    <a href="{{url( 'provedor',[$row]) }}" class="btn btn-warning"> <i class="fa-solid fa-edit"></i></a>
                </td>
                <td>
                    <form method="POST" action="{{ url('provedor',[$row]) }}">
                        @method("delete")
                        @csrf
                        <button class="btn btn-danger"> <i class="fa-solid fa-trash"></i></button>

                    </form>

                </td>
            </tr>
                
            @endforeach
        </tbody>
        </table>
    </div>

  </div>
</div>

<div class="modal fade" id="modalProvedor" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <label class="h5" id="titulo_modal ">AÑADIR PROVEDOR</label>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

            <form  id="frmProvedor" method="POST" action="{{url("provedor")}}">
                @csrf
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-user"> </i></span>
                    <input type="text" name="nombrep" class="form-control" maxlength="50" placeholder="Nombre" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-user"> </i></span>
                    <input type="email" name="correo" class="form-control" maxlength="50" placeholder="Correo" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text"> <i class="fa-solid fa-user"></i></span>
                    <input type="text" name="rfc" class="form-control" maxlength="50" placeholder="RFC" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text"> <i class="fa-solid fa-user"></i></span>
                    <input type="text" name="direccion" class="form-control" maxlength="50" placeholder="Dirección" required>
                </div>
                <div class="d-grid col-6 mx-auto">
                    <button class="btn btn-dark"><i class="fa-solid fa-floppy-disk"></i> GUARDAR </button>
                </div>
            </form>
            </div>
        

              <div class="modal-footer">
                <button type="button" id="btnCerrar" class="btn btn-dark" data-bs-dismiss="modal">CERRAR</button>


       </div>

    </div>
</div>

</div>

    
@endsection