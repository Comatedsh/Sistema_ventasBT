@extends('layouts.carrito')

@section('content')
<style>
  h1{
    margin-left: 50px;
  }
  .arriva{
    background-color: rgba(0, 0, 0, 0.71);
    color: white
  }
  table{
    margin-left: 82px;
    
  }
  td, th {
    border: black 1px solid;
    width: 198px;
    text-align: center;
    border-radius: 6px;
  }
  input{
    border-radius: 6px;
    border: solid 2px black;
    background-color: white;
    color: black;
  }
  input:hover{
    border: solid 2px black;
    background-color: rgb(32, 56, 238);
    color: rgb(255, 255, 255);
  }
</style>
<h1>
    Productos Comprados
</h1><br>



  <table>
      <tr class="arriva">
          <th>Imagen</th>
          <th>Producto</th>
          <th>Precio</th>
          <th>Cantidades Compradas</th>
          <th>Dirección de entrega</th>
          <th>Total que pago</th>
          <th>Acciones</th>
      </tr>
      @foreach ($compras as $compra)
      @foreach ($producto as $product)
      @foreach ($direccion as $direc)
      <tr>
          <td><img src="{{$product->imagen}}" alt="" width="100px"></td>
          <td>{{$product->nombre_producto}}</td>
          <td>{{$product->precio}}</td>

          <td>{{$compra->cantidades_compradas}}</td>
          <td>{{$direc->direccion}}</td>
          <td>{{$compra->pago}}</td>
          <td><input type="submit" value="Cancelar compra"></td>
      </tr>
      @endforeach
      @endforeach
      @endforeach
  </table>


@endsection