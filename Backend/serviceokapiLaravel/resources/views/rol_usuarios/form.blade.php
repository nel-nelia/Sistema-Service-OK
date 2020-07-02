
<div class="form-group {{ $errors->has('DesactivaUsuario') ? 'has-error' : '' }}">
    <label for="DesactivaUsuario" class="col-md-2 control-label">Desactiva Usuario</label>
    <div class="col-md-10">
        <input class="form-control" name="DesactivaUsuario" type="number" id="DesactivaUsuario" value="{{ old('DesactivaUsuario', optional($rolUsuario)->DesactivaUsuario) }}" min="-2147483648" max="2147483647" required="true" placeholder="Enter desactiva usuario here...">
        {!! $errors->first('DesactivaUsuario', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('GestionaUsuario') ? 'has-error' : '' }}">
    <label for="GestionaUsuario" class="col-md-2 control-label">Gestiona Usuario</label>
    <div class="col-md-10">
        <input class="form-control" name="GestionaUsuario" type="number" id="GestionaUsuario" value="{{ old('GestionaUsuario', optional($rolUsuario)->GestionaUsuario) }}" min="-2147483648" max="2147483647" required="true" placeholder="Enter gestiona usuario here...">
        {!! $errors->first('GestionaUsuario', '<p class="help-block">:message</p>') !!}
    </div>
</div>

