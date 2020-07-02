
<div class="form-group {{ $errors->has('FlagActivo') ? 'has-error' : '' }}">
    <label for="FlagActivo" class="col-md-2 control-label">Flag Activo</label>
    <div class="col-md-10">
        <input class="form-control" name="FlagActivo" type="number" id="FlagActivo" value="{{ old('FlagActivo', optional($actividadTipo)->FlagActivo) }}" min="-2147483648" max="2147483647" required="true" placeholder="Enter flag activo here...">
        {!! $errors->first('FlagActivo', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Nombre') ? 'has-error' : '' }}">
    <label for="Nombre" class="col-md-2 control-label">Nombre</label>
    <div class="col-md-10">
        <input class="form-control" name="Nombre" type="text" id="Nombre" value="{{ old('Nombre', optional($actividadTipo)->Nombre) }}" minlength="1" maxlength="250" required="true" placeholder="Enter nombre here...">
        {!! $errors->first('Nombre', '<p class="help-block">:message</p>') !!}
    </div>
</div>

