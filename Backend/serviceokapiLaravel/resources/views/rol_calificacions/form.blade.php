
<div class="form-group {{ $errors->has('GestionarCalificacion') ? 'has-error' : '' }}">
    <label for="GestionarCalificacion" class="col-md-2 control-label">Gestionar Calificacion</label>
    <div class="col-md-10">
        <input class="form-control" name="GestionarCalificacion" type="number" id="GestionarCalificacion" value="{{ old('GestionarCalificacion', optional($rolCalificacion)->GestionarCalificacion) }}" min="-2147483648" max="2147483647" required="true" placeholder="Enter gestionar calificacion here...">
        {!! $errors->first('GestionarCalificacion', '<p class="help-block">:message</p>') !!}
    </div>
</div>

