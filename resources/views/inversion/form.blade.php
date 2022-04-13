<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group" style="display: none">
            {{ Form::label('idUser') }}
            {{ Form::number('idUser', $usuario, ['class' => 'form-control' . ($errors->has('idUser') ? ' is-invalid' : ''), 'placeholder' => 'Iduser']) }}
            {!! $errors->first('idUser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    {{ Form::label('Valor inversion') }}
                    {{ Form::number('valInversion', $inversion->valInversion, ['class' => 'form-control' . ($errors->has('valInversion') ? ' is-invalid' : ''), 'placeholder' => 'Valor inversion']) }}
                    {!! $errors->first('valInversion', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col">
                {{-- <div class="form-group">
                    {{ Form::label('Periodo inicial') }}
                    {{ Form::number('valInversion', $inversion->valInversion, ['class' => 'form-control' . ($errors->has('valInversion') ? ' is-invalid' : ''), 'placeholder' => 'Valor inversion']) }}
                    {!! $errors->first('valInversion', '<div class="invalid-feedback">:message</div>') !!}
                </div> --}}
            </div>
        </div>
        
        <div class="form-group" style="display: none">
            {{ Form::label('rentabilidad') }}
            {{ Form::number('rentabilidad', 1, ['class' => 'form-control' . ($errors->has('rentabilidad') ? ' is-invalid' : ''), 'placeholder' => 'Rentabilidad']) }}
            {!! $errors->first('rentabilidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group" style="display: none">
            {{ Form::label('numEstado') }}
            {{ Form::text('numEstado', $inversion->numEstado, ['class' => 'form-control' . ($errors->has('numEstado') ? ' is-invalid' : ''), 'placeholder' => 'Numestado']) }}
            {!! $errors->first('numEstado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>