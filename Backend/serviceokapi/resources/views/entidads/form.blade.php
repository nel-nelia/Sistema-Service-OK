
<div class="form-group {{ $errors->has('FlagActivo') ? 'has-error' : '' }}">
    <label for="FlagActivo" class="col-md-2 control-label">Flag Activo</label>
    <div class="col-md-10">
        <input class="form-control" name="FlagActivo" type="number" id="FlagActivo" value="{{ old('FlagActivo', optional($entidad)->FlagActivo) }}" min="-2147483648" max="2147483647" required="true" placeholder="Enter flag activo here...">
        {!! $errors->first('FlagActivo', '<p class="help-block">:message</p>') !!}
    </div>
</div>

