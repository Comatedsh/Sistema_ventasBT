@extends('layouts.app2')
@section('contenido1')
<link rel="stylesheet" href="">
<div class="row mt-1">
    <div class="col-md-4 offset-md-4">
    <div class="d-grid mx-auto">
     <button class="btn btn-dark"  data-bs-toggle="modal" data-bs-target="#modalProvedor">
        <i class="fa-solid fa-circle-plus"></i> AÑADIR
     </button>
    </div>
</div>
</div>
<div class="row mt-4">

 <div class="col-14 col-lg-14 offset-0 offset-lg-0">
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
         <thead>
          <th>N°</th>
          <th>Nombre</th>
          <th>Identificador</th>
          <th>Descripcion</th>
          <th>Precio</th>
          <th>Cantidad</th>
          <th>Imagen</th>
          <th>Estado</th>
          <th>Marca</th>
          <th>Editar</th>
          <th>Eliminar</th>
        </thead>
        <tbody class="table-group-divider">
            @php
                $i=1 ;
            @endphp
            @foreach ($producto as $row )
            <tr>
                <td>{{$i++}}</td>
                <td>{{$row->nombre_producto}}</td>
                <td>{{$row->identificador}}</td>
                <td>{{$row->descripcion_producto}}</td>
                <td>{{$row->precio}}</td>
                <td>{{$row->existentes}}</td>
                <td>{{$row->imagen}}</td>
                <td>{{$row->estado_prodcuto}}</td>
                <td>{{$row->nombre}}</td>
               
                <td>
                    <a href="{{url( 'producto',[$row]) }}" class="btn btn-warning"> <i class="fa-solid fa-edit"></i></a>
                </td>
                <td>
                    <form method="POST" action="{{ url('producto',[$row]) }}">
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
                <label class="h5" id="titulo_modal ">AÑADIR PRODUCTO</label>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

            <form  id="frmProvedor" method="POST" action="{{url("producto")}}">
                @csrf
                <div class="input-group mb-3">
                    <span class="input-group-text"> <i class="fa-solid fa-user"></i> </span>
                    <input type="text" name="nombre_producto" class="form-control" maxlength="50" placeholder="Nombre " required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text"> <i class="fa-solid fa-user"></i> </span>
                    <input type="text" name="identificador" class="form-control" maxlength="50" placeholder="Identificador " required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                    <input type="text" name="descripcion_producto" class="form-control" maxlength="50" placeholder="Descripcion" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text"> <i class="fa-solid fa-user"></i> </span>
                    <input type="text" name="precio" class="form-control" maxlength="50" placeholder="Precio " required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                    <input type="text" name="existentes" class="form-control" maxlength="50" placeholder="Cantidad" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                    <input type="text" name="imagen" class="form-control" maxlength="50" placeholder="Link de URL" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text"> <i class="fa-solid fa-user"></i> </span>
                    <input type="text" name="estado_producto" class="form-control" maxlength="50" placeholder="Estado " required>
                </div>
                <div class="input-group mb-3" >
                    <span class="input-group-text"> <i class="fa-solid fa-user"></i> </span>
                    <select name="id_marca" class="form-select" required  >
                        <option value="" >Marca</option>
                        @foreach ($marca as $row )
                        <option value="{{$row->id}}">{{$row->nombre}}</option>  
                        @endforeach
                    </select>
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