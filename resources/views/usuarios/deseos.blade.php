@extends('layouts.carrito')

@section('content')
<style>
  h1{
    margin-left: 200px;
  }
  .arriva{
    background-color: rgba(0, 0, 0, 0.71);
    color: white
  }
  table{
    margin-left: 200px;
  }
  td, th {
    border: black 1px solid;
    width: 258px;
    text-align: center;
    border-radius: 6px;
  }
  input{
    border-radius: 6px;
    border: solid 2px black;
    background-color: white;
    color: black;
    margin-left: -19px;
    position: absolute;
    margin-top: -49px;
  }
  input:hover{
    border: solid 2px black;
    background-color: rgb(32, 56, 238);
    color: rgb(255, 255, 255);
  }
  .compra{
    border: solid 2px black;
    width: 66px;
    text-align: center;
    background-color: white;
    color: black;
    border-radius: 5px;
    display: inline-block;
    margin-left: -149px;
  }
  .compra:hover{
    border: solid 1px black;
    width: 66px;
    text-align: center;
    background-color: rgb(9, 86, 230);
    color: rgb(255, 255, 255);
    border-radius: 5px;
  }
</style>
<h1>
    Productos deseados
</h1><br>

<table>
  <tr class="arriva">
      <th>Imagen</th>
      <th>Producto</th>
      <th>Precio</th>
      <th>Acciones</th>
  </tr>
  @foreach ($deseos as $deseo)
  @foreach ($producto as $product)
  <tr>
      <td><img src="{{$product->imagen}}" alt="" width="100px"></td>
      <td>{{$product->nombre_producto}}</td>
      <td>{{$product->precio}}</td>
      <td>
        <div class="btn">
          <a class="redic" href="{{ url('/Compras-Producto',$deseo->idProducto) }}">
            <p class="compra">Comprar</p>
          </a>
        </div>
        <form action="{{url('eliminar_producto',$deseo->id)}}" method="POST">
          @csrf
          @method('delete')
          <input type="submit" value="Eliminar Direccion">
      </form>
      </td>
  </tr>
  @endforeach
  @endforeach
</table>
@endsection
