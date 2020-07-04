
<div class="form-group {{ $errors->has('DesactivarEstablecimiento') ? 'has-error' : '' }}">
    <label for="DesactivarEstablecimiento" class="col-md-2 control-label">Desactivar Establecimiento</label>
    <div class="col-md-10">
        <input class="form-control" name="DesactivarEstablecimiento" type="number" id="DesactivarEstablecimiento" value="{{ old('DesactivarEstablecimiento', optional($rolEstablecimiento)->DesactivarEstablecimiento) }}" min="-2147483648" max="2147483647" required="true" placeholder="Enter desactivar establecimiento here...">
        {!! $errors->first('DesactivarEstablecimiento', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('GestionarEstablecimiento') ? 'has-error' : '' }}">
    <label for="GestionarEstablecimiento" class="col-md-2 control-label">Gestionar Establecimiento</label>
    <div class="col-md-10">
        <input class="form-control" name="GestionarEstablecimiento" type="number" id="GestionarEstablecimiento" value="{{ old('GestionarEstablecimiento', optional($rolEstablecimiento)->GestionarEstablecimiento) }}" min="-2147483648" max="2147483647" required="true" placeholder="Enter gestionar establecimiento here...">
        {!! $errors->first('GestionarEstablecimiento', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('GestionarUbicacion') ? 'has-error' : '' }}">
    <label for="GestionarUbicacion" class="col-md-2 control-label">Gestionar Ubicacion</label>
    <div class="col-md-10">
        <input class="form-control" name="GestionarUbicacion" type="number" id="GestionarUbicacion" value="{{ old('GestionarUbicacion', optional($rolEstablecimiento)->GestionarUbicacion) }}" min="-2147483648" max="2147483647" required="true" placeholder="Enter gestionar ubicacion here...">
        {!! $errors->first('GestionarUbicacion', '<p class="help-block">:message</p>') !!}
    </div>
</div>

