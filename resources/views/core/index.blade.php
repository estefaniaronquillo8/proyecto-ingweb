@extends('layouts.app')

@php
    $porcentaje = 0;
    $porcentajeAg = 0;
    $porcentajeAs= 0;
    $arr = [
        1 => 0,
        2 => 0,
        3 => 0,
        4 => 0,
        5 => 0,
        6 => 0
    ];

    $arrAg = [
        1 => 0,
        2 => 0,
        3 => 0,
        4 => 0,
        5 => 0,
        6 => 0
    ];
    $arrAs = [
        1 => 0,
        2 => 0,
        3 => 0,
        4 => 0,
        5 => 0,
        6 => 0
    ];

    $cmf; #Cliente mas frecuente
    $pcc; #Peor cliente clinica

    $apcc; #Array de peores clientes clínica
    $pci = []; #Porcentaje de completitud individual
    foreach( $tratamientos as $tratamiento ){
        $porcentajeAg +=$tratamiento->CitasAgendadas;
        $porcentajeAs+= $tratamiento->CitasAsistidas;
        $arr[$tratamiento->empleado->id] += 1;
        $arrAg[$tratamiento->empleado->id] +=  $tratamiento->CitasAgendadas;
        $arrAs[$tratamiento->empleado->id] +=  $tratamiento->CitasAsistidas;
    }


    foreach ($arrAg as $key => $value) {
        if($value != 0){
            $pci[$key] = ($arrAs[$key] * 100) / $value;

            $apcc[$key] = $arrAs[$key];
        }else{
            $pci[$key] = 0;
        }

    }

    $porcentaje +=  ($porcentajeAs * 100) / $porcentajeAg;

    $key = array_search(max($arr), $arr );
    $cmf = $tratamientos[$key]->empleado->Nombre;
    $key1 = array_search(min($apcc), $apcc );
    $pcc = $empleados[$key1];

@endphp


@section('content')
<div class="container">
    <h1>Informe General de la Clínica</h1><br>
    
    <h3>Porcentaje de cumplimiento general de la clinica es de: {{ $porcentaje }}%</h3><br><br>
    
    <h3>El cliente mas frecuente es {{ $cmf }} </h3>
    <h3>El peor cliente de la clinica es {{$pcc}}</h3><br><br>
    
    <h2> El nivel de cumplimiento individual cada cliente: </h2>
    @foreach($pci as $key => $value)
        <h3> De {{$empleados[$key]}} es {{$value}}%</h3>
    @endforeach
</div>
@endsection