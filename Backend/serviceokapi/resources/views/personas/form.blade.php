
<div class="form-group {{ $errors->has('Apellido') ? 'has-error' : '' }}">
    <label for="Apellido" class="col-md-2 control-label">Apellido</label>
    <div class="col-md-10">
        <input class="form-control" name="Apellido" type="text" id="Apellido" value="{{ old('Apellido', optional($persona)->Apellido) }}" minlength="1" maxlength="250" required="true" placeholder="Enter apellido here...">
        {!! $errors->first('Apellido', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Direccion') ? 'has-error' : '' }}">
    <label for="Direccion" class="col-md-2 control-label">Direccion</label>
    <div class="col-md-10">
        <input class="form-control" name="Direccion" type="text" id="Direccion" value="{{ old('Direccion', optional($persona)->Direccion) }}" minlength="1" maxlength="400" required="true" placeholder="Enter direccion here...">
        {!! $errors->first('Direccion', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('DNI') ? 'has-error' : '' }}">
    <label for="DNI" class="col-md-2 control-label">D N I</label>
    <div class="col-md-10">
        <input class="form-control" name="DNI" type="number" id="DNI" value="{{ old('DNI', optional($persona)->DNI) }}" min="-2147483648" max="2147483647" required="true" placeholder="Enter d n i here...">
        {!! $errors->first('DNI', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Nombre') ? 'has-error' : '' }}">
    <label for="Nombre" class="col-md-2 control-label">Nombre</label>
    <div class="col-md-10">
        <input class="form-control" name="Nombre" type="text" id="Nombre" value="{{ old('Nombre', optional($persona)->Nombre) }}" minlength="1" maxlength="250" required="true" placeholder="Enter nombre here...">
        {!! $errors->first('Nombre', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Telefono') ? 'has-error' : '' }}">
    <label for="Telefono" class="col-md-2 control-label">Telefono</label>
    <div class="col-md-10">
        <input class="form-control" name="Telefono" type="number" id="Telefono" value="{{ old('Telefono', optional($persona)->Telefono) }}" min="-2147483648" max="2147483647" required="true" placeholder="Enter telefono here...">
        {!! $errors->first('Telefono', '<p class="help-block">:message</p>') !!}
    </div>
</div>

