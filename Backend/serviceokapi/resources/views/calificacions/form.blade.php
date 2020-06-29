
<div class="form-group {{ $errors->has('Comentario') ? 'has-error' : '' }}">
    <label for="Comentario" class="col-md-2 control-label">Comentario</label>
    <div class="col-md-10">
        <input class="form-control" name="Comentario" type="text" id="Comentario" value="{{ old('Comentario', optional($calificacion)->Comentario) }}" minlength="1" maxlength="400" required="true" placeholder="Enter comentario here...">
        {!! $errors->first('Comentario', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('EstablecimientoID') ? 'has-error' : '' }}">
    <label for="EstablecimientoID" class="col-md-2 control-label">Establecimiento I D</label>
    <div class="col-md-10">
        <select class="form-control" id="EstablecimientoID" name="EstablecimientoID" required="true">
        	    <option value="" style="display: none;" {{ old('EstablecimientoID', optional($calificacion)->EstablecimientoID ?: '') == '' ? 'selected' : '' }} disabled selected>Enter establecimiento i d here...</option>
        	@foreach ($Establecimientos as $key => $Establecimiento)
			    <option value="{{ $key }}" {{ old('EstablecimientoID', optional($calificacion)->EstablecimientoID) == $key ? 'selected' : '' }}>
			    	{{ $Establecimiento }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('EstablecimientoID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('NumeroEstrellas') ? 'has-error' : '' }}">
    <label for="NumeroEstrellas" class="col-md-2 control-label">Numero Estrellas</label>
    <div class="col-md-10">
        <input class="form-control" name="NumeroEstrellas" type="number" id="NumeroEstrellas" value="{{ old('NumeroEstrellas', optional($calificacion)->NumeroEstrellas) }}" min="-2147483648" max="2147483647" required="true" placeholder="Enter numero estrellas here...">
        {!! $errors->first('NumeroEstrellas', '<p class="help-block">:message</p>') !!}
    </div>
</div>

