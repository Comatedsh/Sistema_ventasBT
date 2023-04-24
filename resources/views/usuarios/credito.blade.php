@extends('layouts.plantilla')

@section('content')
<style>
    body{
        background-color: #141619;
    }

    .datos{
        width: 528px;
        height: 319px;
        background-color: #ffffff;
        margin-left: 500px;
        margin-top: 62px;
        border-radius: 12px;;
    }
    .perfil{
        display: contents
    }
    .perfil:hover{
        color: black;
    }
    .s, .frase, .campo, .cantidad{
        margin-left: 50px;
        font-size: 20px;
    }
    .btn{
        margin-left: 214px;
        font-size: 17px;
        border: solid 2px black;
        margin-top: 20px;
    }
    .btn:hover{
        margin-left: 214px;
        font-size: 17px;
        border: solid 2px black;
        background-color: rgb(32, 32, 223);
        color: white;
    }
    .credito{
        border-radius: 12px;
        font-size: 17px;
    }
</style>

<div class="datos">
    <div class="s">
        <a href="{{ url('/perfil') }}" class="perfil">Regresar</a><br>
    </div>
    <br>
    <p class="frase">Consigue tu nuevo credito con un 'click'</p><br>
    
    @foreach ($creditos as $credito)
    <label for="" class="campo">Credito Actual: ${{$credito->creditoActual}}.00</label><br>
    <label for="" class="campo">Credito Anterior: ${{$credito->creditoAnterior}}.00</label><br>
    <form action="{{ url('updateCredito',$credito->id) }}" method="POST">
    @csrf
    @method('put')
    
    @endforeach
    
    <label for="" class="cantidad">Cantidad a retirar <input type="number" min="1" name="creditoActual" class="credito" required ></label><br>
    <input type="submit" value="confirmar" class="btn"><br>
    </form>
</div>
@endsection