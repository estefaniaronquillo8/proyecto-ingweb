<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('empleado_id') }}
            {{ Form::select('empleado_id', $empleados , $tratamiento->empleado_id, ['class' => 'form-control' . ($errors->has('empleado_id') ? ' is-invalid' : ''), 'placeholder' => 'Empleado Id']) }}
            {!! $errors->first('empleado_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('medicamento_id') }}
            {{ Form::select('medicamento_id', $medicamentos , $tratamiento->medicamento_id, ['class' => 'form-control' . ($errors->has('medicamento_id') ? ' is-invalid' : ''), 'placeholder' => 'Medicamento Id']) }}
            {!! $errors->first('medicamento_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $tratamiento->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::text('Descripcion', $tratamiento->Descripcion, ['class' => 'form-control' . ($errors->has('Descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('Descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FechaInicio') }}
            {{ Form::text('FechaInicio', $tratamiento->FechaInicio, ['class' => 'form-control' . ($errors->has('FechaInicio') ? ' is-invalid' : ''), 'placeholder' => 'Fechainicio']) }}
            {!! $errors->first('FechaInicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FechaFinal') }}
            {{ Form::text('FechaFinal', $tratamiento->FechaFinal, ['class' => 'form-control' . ($errors->has('FechaFinal') ? ' is-invalid' : ''), 'placeholder' => 'Fechafinal']) }}
            {!! $errors->first('FechaFinal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('CitasAgendadas') }}
            {{ Form::text('CitasAgendadas', $tratamiento->CitasAgendadas, ['class' => 'form-control' . ($errors->has('CitasAgendadas') ? ' is-invalid' : ''), 'placeholder' => 'Citasagendadas']) }}
            {!! $errors->first('CitasAgendadas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('CitasAsistidas') }}
            {{ Form::text('CitasAsistidas', $tratamiento->CitasAsistidas, ['class' => 'form-control' . ($errors->has('CitasAsistidas') ? ' is-invalid' : ''), 'placeholder' => 'Citasasistidas']) }}
            {!! $errors->first('CitasAsistidas', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>