
<div class="form-group {{ $errors->has('ActividadTipoID') ? 'has-error' : '' }}">
    <label for="ActividadTipoID" class="col-md-2 control-label">Actividad Tipo I D</label>
    <div class="col-md-10">
        <select class="form-control" id="ActividadTipoID" name="ActividadTipoID" required="true">
        	    <option value="" style="display: none;" {{ old('ActividadTipoID', optional($actividad)->ActividadTipoID ?: '') == '' ? 'selected' : '' }} disabled selected>Enter actividad tipo i d here...</option>
        	@foreach ($Actividadtipos as $key => $Actividadtipo)
			    <option value="{{ $key }}" {{ old('ActividadTipoID', optional($actividad)->ActividadTipoID) == $key ? 'selected' : '' }}>
			    	{{ $Actividadtipo }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('ActividadTipoID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Descripcion') ? 'has-error' : '' }}">
    <label for="Descripcion" class="col-md-2 control-label">Descripcion</label>
    <div class="col-md-10">
        <input class="form-control" name="Descripcion" type="text" id="Descripcion" value="{{ old('Descripcion', optional($actividad)->Descripcion) }}" minlength="1" maxlength="400" required="true" placeholder="Enter descripcion here...">
        {!! $errors->first('Descripcion', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('FlagActivo') ? 'has-error' : '' }}">
    <label for="FlagActivo" class="col-md-2 control-label">Flag Activo</label>
    <div class="col-md-10">
        <input class="form-control" name="FlagActivo" type="number" id="FlagActivo" value="{{ old('FlagActivo', optional($actividad)->FlagActivo) }}" min="-2147483648" max="2147483647" required="true" placeholder="Enter flag activo here...">
        {!! $errors->first('FlagActivo', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Nombre') ? 'has-error' : '' }}">
    <label for="Nombre" class="col-md-2 control-label">Nombre</label>
    <div class="col-md-10">
        <input class="form-control" name="Nombre" type="text" id="Nombre" value="{{ old('Nombre', optional($actividad)->Nombre) }}" minlength="1" maxlength="250" required="true" placeholder="Enter nombre here...">
        {!! $errors->first('Nombre', '<p class="help-block">:message</p>') !!}
    </div>
</div>

