@extends('layouts.app')

@section('template_title')
    {{ $medicamento->name ?? 'Show Medicamento' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Medicamento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('medicamentos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $medicamento->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $medicamento->Descripcion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
