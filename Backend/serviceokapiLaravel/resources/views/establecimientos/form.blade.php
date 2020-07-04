
<div class="form-group {{ $errors->has('ActividadID') ? 'has-error' : '' }}">
    <label for="ActividadID" class="col-md-2 control-label">Actividad I D</label>
    <div class="col-md-10">
        <select class="form-control" id="ActividadID" name="ActividadID" required="true">
        	    <option value="" style="display: none;" {{ old('ActividadID', optional($establecimiento)->ActividadID ?: '') == '' ? 'selected' : '' }} disabled selected>Enter actividad i d here...</option>
        	@foreach ($Actividads as $key => $Actividad)
			    <option value="{{ $key }}" {{ old('ActividadID', optional($establecimiento)->ActividadID) == $key ? 'selected' : '' }}>
			    	{{ $Actividad }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('ActividadID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('CoordenadaX') ? 'has-error' : '' }}">
    <label for="CoordenadaX" class="col-md-2 control-label">Coordenada X</label>
    <div class="col-md-10">
        <input class="form-control" name="CoordenadaX" type="text" id="CoordenadaX" value="{{ old('CoordenadaX', optional($establecimiento)->CoordenadaX) }}" minlength="1" maxlength="250" required="true" placeholder="Enter coordenada x here...">
        {!! $errors->first('CoordenadaX', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('CoordenadaY') ? 'has-error' : '' }}">
    <label for="CoordenadaY" class="col-md-2 control-label">Coordenada Y</label>
    <div class="col-md-10">
        <input class="form-control" name="CoordenadaY" type="text" id="CoordenadaY" value="{{ old('CoordenadaY', optional($establecimiento)->CoordenadaY) }}" minlength="1" maxlength="250" required="true" placeholder="Enter coordenada y here...">
        {!! $errors->first('CoordenadaY', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Delivery') ? 'has-error' : '' }}">
    <label for="Delivery" class="col-md-2 control-label">Delivery</label>
    <div class="col-md-10">
        <input class="form-control" name="Delivery" type="number" id="Delivery" value="{{ old('Delivery', optional($establecimiento)->Delivery) }}" min="-2147483648" max="2147483647" required="true" placeholder="Enter delivery here...">
        {!! $errors->first('Delivery', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('EntidadID') ? 'has-error' : '' }}">
    <label for="EntidadID" class="col-md-2 control-label">Entidad I D</label>
    <div class="col-md-10">
        <select class="form-control" id="EntidadID" name="EntidadID" required="true">
        	    <option value="" style="display: none;" {{ old('EntidadID', optional($establecimiento)->EntidadID ?: '') == '' ? 'selected' : '' }} disabled selected>Enter entidad i d here...</option>
        	@foreach ($Representantes as $key => $Representante)
			    <option value="{{ $key }}" {{ old('EntidadID', optional($establecimiento)->EntidadID) == $key ? 'selected' : '' }}>
			    	{{ $Representante }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('EntidadID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('FlagActivo') ? 'has-error' : '' }}">
    <label for="FlagActivo" class="col-md-2 control-label">Flag Activo</label>
    <div class="col-md-10">
        <input class="form-control" name="FlagActivo" type="number" id="FlagActivo" value="{{ old('FlagActivo', optional($establecimiento)->FlagActivo) }}" min="-2147483648" max="2147483647" required="true" placeholder="Enter flag activo here...">
        {!! $errors->first('FlagActivo', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Nombre') ? 'has-error' : '' }}">
    <label for="Nombre" class="col-md-2 control-label">Nombre</label>
    <div class="col-md-10">
        <input class="form-control" name="Nombre" type="text" id="Nombre" value="{{ old('Nombre', optional($establecimiento)->Nombre) }}" minlength="1" maxlength="250" required="true" placeholder="Enter nombre here...">
        {!! $errors->first('Nombre', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Permiso') ? 'has-error' : '' }}">
    <label for="Permiso" class="col-md-2 control-label">Permiso</label>
    <div class="col-md-10">
        <input class="form-control" name="Permiso" type="number" id="Permiso" value="{{ old('Permiso', optional($establecimiento)->Permiso) }}" min="-2147483648" max="2147483647" required="true" placeholder="Enter permiso here...">
        {!! $errors->first('Permiso', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('RUC') ? 'has-error' : '' }}">
    <label for="RUC" class="col-md-2 control-label">R U C</label>
    <div class="col-md-10">
        <input class="form-control" name="RUC" type="number" id="RUC" value="{{ old('RUC', optional($establecimiento)->RUC) }}" min="-2147483648" max="2147483647" required="true" placeholder="Enter r u c here...">
        {!! $errors->first('RUC', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Telefono') ? 'has-error' : '' }}">
    <label for="Telefono" class="col-md-2 control-label">Telefono</label>
    <div class="col-md-10">
        <input class="form-control" name="Telefono" type="number" id="Telefono" value="{{ old('Telefono', optional($establecimiento)->Telefono) }}" min="-2147483648" max="2147483647" required="true" placeholder="Enter telefono here...">
        {!! $errors->first('Telefono', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('WhatsappURL') ? 'has-error' : '' }}">
    <label for="WhatsappURL" class="col-md-2 control-label">Whatsapp U R L</label>
    <div class="col-md-10">
        <input class="form-control" name="WhatsappURL" type="text" id="WhatsappURL" value="{{ old('WhatsappURL', optional($establecimiento)->WhatsappURL) }}" minlength="1" maxlength="250" required="true" placeholder="Enter whatsapp u r l here...">
        {!! $errors->first('WhatsappURL', '<p class="help-block">:message</p>') !!}
    </div>
</div>

