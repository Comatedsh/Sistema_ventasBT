@extends('layouts.plantilla')

@section('content')
@foreach ($producto as $product)
<h2 style="margin-left: 80px">
    {{$product->nombre_producto}}
</h2><br>

    <img src="{{$product->imagen}}" alt="" width="550px" style="position: absolute">

    <div class="descripcion" style="
margin-left: 600px;
    margin-top: -60px;
    position: absolute;
    width: 597px;
    ">
        <label for="">{!! $product->descripcion_producto !!}</label>
    </div>

    <div class="compra" style="
    margin-left: 1210px;
    margin-top: -70px;
    width: 290px;
    border: solid 3px black;
    height: 200px;
    border-radius:12px;
    ">
    <form action="{{ url('Comprar') }}" method="post">
        @csrf
        @method('put')
        <input type="hidden" value="{{$product->id}}" name="id">
        <input type="hidden" value="{{$product->precio}}" name="precio">
        <input type="hidden" value="{{$product->existentes}}" name="existencias">
        <span style="margin-left: 20px;">Precio: ${{$product->precio}}.00</span>
        <p style="margin-left: 20px">Existentes: {{$product->existentes}}</p>
        <label for="" style="margin-left: 20px">¿Cuantos productos desea comprar?</label><br>
        <input type="number" min="1" name="cantidades_compradas" style="
        margin-left: 20px;
        border-radius:7px;
        background-color: rgb(175, 155, 155);
        ">



    @endforeach
        <br>

    <label for="" style="margin-left: 20px">Seleccione una direccion</label><br>

   
    <select id='select' name="id_direccion"  class="" style="
    margin-left: 20px;
    margin-left: 20px;
        border-radius:7px;
    ">
        <option selected disabled readonly value="0">Seleccione una opcion</option>
        @foreach ($direcciones as $direccion)
        <option value="{{$direccion['id']}}">{{$direccion['direccion']}}</option>
        @endforeach
    </select>


      <input type="submit" value="Realizar Compra">
    </form>
    </div>


@endsection
