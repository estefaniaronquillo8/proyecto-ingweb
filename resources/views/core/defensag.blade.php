@extends('layouts.app')
@section('content')
<div class="container">
<h1>Ingresa el rango de fechas que quieres filtrar =)</h1><br>
<form action="{{ url('/core/defensag') }}" method="GET">
    <label for="fi" class="fi form-group"> Fecha inicio: </label>
    <input type="text" name="fi" id="fi" class="form-group">
    <label for="ff" class="ff" class="form-group"> Fecha fin: </label>
    <input type="text" name="ff" id="ff" class="form-group">
    <button type="submit" class="btn btn-primary sm-6" class="form-group">Filtrar</button>
</form>

<?php 

    $Ag = 0;
    $As = 0;

    $fi = isset($_GET["fi"]) ? $_GET["fi"] : "";
    $ff = isset($_GET["ff"]) ? $_GET["ff"] : "";
    
    $results = DB::select( DB::raw("SELECT * FROM tratamientos WHERE fechainicio >= '$fi' and fechafinal <= '$ff'") );
    foreach($results as $result){
        $Ag +=  $result->CitasAgendadas;
        $As +=  $result->CitasAsistidas;
    }

    $defensa = ($As * 100) / $Ag;
?>
<br><br>

<h3>Desde {{$fi}} hasta {{$ff}} el porcentaje de clientes que han cumplido con sus citas en este rango de fechas es del {{ $defensa }} %</h3>


</div>
@endsection