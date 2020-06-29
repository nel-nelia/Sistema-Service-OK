
<div class="form-group {{ $errors->has('RolID') ? 'has-error' : '' }}">
    <label for="RolID" class="col-md-2 control-label">Rol I D</label>
    <div class="col-md-10">
        <select class="form-control" id="RolID" name="RolID" required="true">
        	    <option value="" style="display: none;" {{ old('RolID', optional($usuario)->RolID ?: '') == '' ? 'selected' : '' }} disabled selected>Enter rol i d here...</option>
        	@foreach ($Rols as $key => $Rol)
			    <option value="{{ $key }}" {{ old('RolID', optional($usuario)->RolID) == $key ? 'selected' : '' }}>
			    	{{ $Rol }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('RolID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Secret') ? 'has-error' : '' }}">
    <label for="Secret" class="col-md-2 control-label">Secret</label>
    <div class="col-md-10">
        <input class="form-control" name="Secret" type="text" id="Secret" value="{{ old('Secret', optional($usuario)->Secret) }}" minlength="1" maxlength="20" required="true" placeholder="Enter secret here...">
        {!! $errors->first('Secret', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Usuario') ? 'has-error' : '' }}">
    <label for="Usuario" class="col-md-2 control-label">Usuario</label>
    <div class="col-md-10">
        <input class="form-control" name="Usuario" type="text" id="Usuario" value="{{ old('Usuario', optional($usuario)->Usuario) }}" minlength="1" maxlength="20" required="true" placeholder="Enter usuario here...">
        {!! $errors->first('Usuario', '<p class="help-block">:message</p>') !!}
    </div>
</div>

