@extends('layouts.plantilla')

@section('content')
<style>
  .compra{
    border: solid 1px black;
    width: 66px;
    text-align: center;
    background-color: white;
    color: black;
    border-radius: 5px;
  }
  .compra:hover{
    border: solid 1px black;
    width: 66px;
    text-align: center;
    background-color: rgb(9, 86, 230);
    color: rgb(255, 255, 255);
    border-radius: 5px;
  }

  .list{
    border: solid 1px black;
    width: 127px;
    text-align: center;
    background-color: white;
    color: black;
    border-radius: 5px;
    margin-left: 91px;
    margin-top: -41px;
  }
  .list:hover{
    border: solid 1px black;
    width: 127px;
    text-align: center;
    background-color: rgb(9, 86, 230);
    color: rgb(255, 255, 255);
    border-radius: 5px;
  }
</style>
@foreach ($producto as $product)
<div class="caja">
  <div class="imagenen">
    <br>
    <img src="{{$product->imagen}}" alt="" class="imagen" width="190px">
  </div>
  <div class="content">
    <br>
    <p>{{$product->nombre_producto}}</p>
    <p>Precio: {{$product->precio}}</p>
    <p>Existentes: {{$product->existentes}}</p>
    <a class="redic" href="{{ url('/Compras-Producto',$product->id) }}">
      <p class="compra">Comprar</p>
    </a>
    <a class="redic" href="{{ url('/Agregar-carrito',$product->id) }}">
      <p class="list">Agregar a carrito</p>
    </a>
  </div>
</div>
@endforeach
@endsection
