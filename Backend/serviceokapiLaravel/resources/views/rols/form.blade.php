
<div class="form-group {{ $errors->has('Descripcion') ? 'has-error' : '' }}">
    <label for="Descripcion" class="col-md-2 control-label">Descripcion</label>
    <div class="col-md-10">
        <input class="form-control" name="Descripcion" type="text" id="Descripcion" value="{{ old('Descripcion', optional($rol)->Descripcion) }}" minlength="1" maxlength="400" required="true" placeholder="Enter descripcion here...">
        {!! $errors->first('Descripcion', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Nombre') ? 'has-error' : '' }}">
    <label for="Nombre" class="col-md-2 control-label">Nombre</label>
    <div class="col-md-10">
        <input class="form-control" name="Nombre" type="text" id="Nombre" value="{{ old('Nombre', optional($rol)->Nombre) }}" minlength="1" maxlength="250" required="true" placeholder="Enter nombre here...">
        {!! $errors->first('Nombre', '<p class="help-block">:message</p>') !!}
    </div>
</div>

