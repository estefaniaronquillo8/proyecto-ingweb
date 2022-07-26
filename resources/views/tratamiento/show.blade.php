@extends('layouts.app')

@section('template_title')
    {{ $tratamiento->name ?? 'Show Tratamiento' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tratamiento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tratamientos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Empleado Id:</strong>
                            {{ $tratamiento->empleado_id }}
                        </div>
                        <div class="form-group">
                            <strong>Medicamento Id:</strong>
                            {{ $tratamiento->medicamento_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $tratamiento->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $tratamiento->Descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Fechainicio:</strong>
                            {{ $tratamiento->FechaInicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fechafinal:</strong>
                            {{ $tratamiento->FechaFinal }}
                        </div>
                        <div class="form-group">
                            <strong>Citasagendadas:</strong>
                            {{ $tratamiento->CitasAgendadas }}
                        </div>
                        <div class="form-group">
                            <strong>Citasasistidas:</strong>
                            {{ $tratamiento->CitasAsistidas }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
