<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($vehiculo->nombre) ? $vehiculo->nombre : ''}}" required>
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('modelo') ? 'has-error' : ''}}">
    <label for="modelo" class="control-label">{{ 'Modelo' }}</label>
    <input class="form-control" name="modelo" type="text" id="modelo" value="{{ isset($vehiculo->modelo) ? $vehiculo->modelo : ''}}" >
    {!! $errors->first('modelo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('matricula') ? 'has-error' : ''}}">
    <label for="matricula" class="control-label">{{ 'Matricula' }}</label>
    <input class="form-control" name="matricula" type="text" id="matricula" value="{{ isset($vehiculo->matricula) ? $vehiculo->matricula : ''}}" >
    {!! $errors->first('matricula', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('color') ? 'has-error' : ''}}">
    <label for="color" class="control-label">{{ 'Color' }}</label>
    <input class="form-control" name="color" type="text" id="color" value="{{ isset($vehiculo->color) ? $vehiculo->color : ''}}" >
    {!! $errors->first('color', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
