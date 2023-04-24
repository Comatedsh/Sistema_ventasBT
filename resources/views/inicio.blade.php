@extends('layouts.app')

@section('content')
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
    <p><i>Registrate para visualizar el producto</i></p>
    <a class="redic" href="{{ route('register') }}">{{ __('Registrate') }}</a>
  </div>
</div>
@endforeach
@endsection