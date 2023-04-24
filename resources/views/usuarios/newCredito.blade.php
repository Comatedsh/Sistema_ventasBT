@extends('layouts.plantilla')

@section('content')
    <style>
        body{
            background-color: #141619;
        }

        .datos{
            width: 640px;
            height: 369px;
            background-color: #ffffff;
            margin-left: 444px;
            margin-top: 62px;
            border-radius: 12px;;
        }
    </style>

    <form action="{{url('create')}}" method="POST">
        @csrf
    <div class="datos">
        <h1 style="
    margin-left:50px;
    ">Crea Tu nuevo credito</h1>

    <p style="
    margin-left: 50px;
    font-size: 25px;
    ">Fecha de caducidad</p>
    <select id='select'  class="" name="mes" required style="
    margin-left: 50px;
    border-radius: 5px;
    border: solid 3px #141619;
    color: #f8f9fa;
    background-color: #0060f0;
    ">
        <option value="0" selected disabled readonly>Seleccione un mes</option>
        <option value="enero">1</option>
        <option value="febrero">2</option>
        <option value="marzo">3</option>
        <option value="abril">4</option>
        <option value="mayo">5</option>
        <option value="junio">6</option>
        <option value="julio">7</option>
        <option value="agosto">8</option>
        <option value="septiembre">9</option>
        <option value="octubre">10</option>
        <option value="noviembre">11</option>
        <option value="diciembre">12</option>
    </select>
    
    <select id='select'  class="" name="año" required style="
    margin-left: 20px;
    border-radius: 5px;
    border: solid 3px #141619;
    color: #f8f9fa;
    background-color: #0060f0;
    ">
        <option value="0" selected disabled readonly>Seleccione un año</option>
        <option value="2024">2024</option>
        <option value="2025">2025</option>
        <option value="2026">2026</option>
        <option value="2027">2027</option>
        <option value="2028">2028</option>
        <option value="2029">2029</option>
        <option value="2030">2030</option>
        <option value="2031">2031</option>
        <option value="2032">2032</option>
        <option value="2033">2033</option>
        <option value="2034">2034</option>
        <option value="2035">2035</option>
    </select><br>

    <p style="
    margin-left: 50px;
    font-size: 25px;
    ">Numero de tarjeta <input type="text" name="numero_tarjeta" minlength="16" maxlength="16" pattern="[0-9]{16}" title="solo admitira numeros con un maximo de 16 digitos" style="  border-radius: 12px;
    font-size: 17px;"></p>
    
    <p style="
    margin-left: 50px;
    font-size: 25px;

    ">codigo de seguridad(CVV) <input type="text" name="cvv" minlength="3" maxlength="3" required pattern="[0-9]{3}" title="solo admitira numeros con un maximo de 3 digitos" style="  border-radius: 12px;
    font-size: 17px;"></p>
    <input type="submit" value="confirmar" style="margin-left:50px;" required class="btn btn-primary">
    </div>
    </form>
@endsection

