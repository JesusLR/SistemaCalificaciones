<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('matricula') }}
            {{ Form::text('matricula', $materiauno->matricula, ['class' => 'form-control' . ($errors->has('matricula') ? ' is-invalid' : ''), 'placeholder' => 'Matricula']) }}
            {!! $errors->first('matricula', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('u1') }}
            {{ Form::text('u1', $materiauno->u1, ['class' => 'form-control' . ($errors->has('u1') ? ' is-invalid' : ''), 'placeholder' => 'U1']) }}
            {!! $errors->first('u1', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('u2') }}
            {{ Form::text('u2', $materiauno->u2, ['class' => 'form-control' . ($errors->has('u2') ? ' is-invalid' : ''), 'placeholder' => 'U2']) }}
            {!! $errors->first('u2', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('u3') }}
            {{ Form::text('u3', $materiauno->u3, ['class' => 'form-control' . ($errors->has('u3') ? ' is-invalid' : ''), 'placeholder' => 'U3']) }}
            {!! $errors->first('u3', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('u4') }}
            {{ Form::text('u4', $materiauno->u4, ['class' => 'form-control' . ($errors->has('u4') ? ' is-invalid' : ''), 'placeholder' => 'U4']) }}
            {!! $errors->first('u4', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </div>
</div>