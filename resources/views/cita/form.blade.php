<div class="form-group {{ $errors->has('fecha') ? 'has-error' : ''}}">
    <label for="fecha" class="control-label">{{ 'Fecha' }}</label>
    <input class="form-control" name="fecha" type="date" id="fecha" value="{{ isset($citum->fecha) ? $citum->fecha : ''}}" >
    {!! $errors->first('fecha', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('usuario_id') ? 'has-error' : ''}}">
    <label for="usuario_id" class="control-label">{{ 'Usuario Id' }}</label>
    <input class="form-control" name="usuario_id" type="number" id="usuario_id" value="{{ isset($citum->usuario_id) ? $citum->usuario_id : ''}}" >
    {!! $errors->first('usuario_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('vehiculo_id') ? 'has-error' : ''}}">
    <label for="vehiculo_id" class="control-label">{{ 'Vehiculo Id' }}</label>
    <input class="form-control" name="vehiculo_id" type="number" id="vehiculo_id" value="{{ isset($citum->vehiculo_id) ? $citum->vehiculo_id : ''}}" >
    {!! $errors->first('vehiculo_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('lugar') ? 'has-error' : ''}}">
    <label for="lugar" class="control-label">{{ 'Lugar' }}</label>
    <input class="form-control" name="lugar" type="text" id="lugar" value="{{ isset($citum->lugar) ? $citum->lugar : ''}}" >
    {!! $errors->first('lugar', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
