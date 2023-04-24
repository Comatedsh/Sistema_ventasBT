@extends('layouts.plantilla')

@section('content')
<style>
    body{
        background-color: #141619;
    }

    .datos{
        width: 640px;
    height: 169px;
    background-color: #ffffff;
    margin-left: 444px;
    margin-top: 62px;
    border-radius: 12px;
    }

    .cantidad{
        font-size: 25px;
        margin-left: 100px;
        margin-top: 55px;
        position: absolute;
    }
    .credito{
        border-radius: 12px;
        font-size: 17px;
        margin-left: 20px;
    }
    p{
        font-size: 18px;
        margin-left: 140px;
        margin-top: 30px;
        position: absolute;
    }
    .btn{
        position: absolute;
        margin-top: 80px;
    }
</style>
<div class="datos">
    <form action="{{ url('createCredito') }}" method="POST">
        @csrf
        <p>Con un solo "click" tendras una aventura</p>
        <label for="" class="cantidad">Cantidad a retirar<input type="text" name="creditoActual" class="credito"></label><br>
        <input type="submit" value="confirmar" class="btn btn-primary" style="margin-left: 264px;"><br>
    </form>
</div>
@endsection