
<div class="form-group {{ $errors->has('DesactivarActividad') ? 'has-error' : '' }}">
    <label for="DesactivarActividad" class="col-md-2 control-label">Desactivar Actividad</label>
    <div class="col-md-10">
        <input class="form-control" name="DesactivarActividad" type="number" id="DesactivarActividad" value="{{ old('DesactivarActividad', optional($rolActividad)->DesactivarActividad) }}" min="-2147483648" max="2147483647" required="true" placeholder="Enter desactivar actividad here...">
        {!! $errors->first('DesactivarActividad', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('DesactivarActividadTipo') ? 'has-error' : '' }}">
    <label for="DesactivarActividadTipo" class="col-md-2 control-label">Desactivar Actividad Tipo</label>
    <div class="col-md-10">
        <input class="form-control" name="DesactivarActividadTipo" type="number" id="DesactivarActividadTipo" value="{{ old('DesactivarActividadTipo', optional($rolActividad)->DesactivarActividadTipo) }}" min="-2147483648" max="2147483647" required="true" placeholder="Enter desactivar actividad tipo here...">
        {!! $errors->first('DesactivarActividadTipo', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('GestionarActividad') ? 'has-error' : '' }}">
    <label for="GestionarActividad" class="col-md-2 control-label">Gestionar Actividad</label>
    <div class="col-md-10">
        <input class="form-control" name="GestionarActividad" type="number" id="GestionarActividad" value="{{ old('GestionarActividad', optional($rolActividad)->GestionarActividad) }}" min="-2147483648" max="2147483647" required="true" placeholder="Enter gestionar actividad here...">
        {!! $errors->first('GestionarActividad', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('GestionarActividadTipo') ? 'has-error' : '' }}">
    <label for="GestionarActividadTipo" class="col-md-2 control-label">Gestionar Actividad Tipo</label>
    <div class="col-md-10">
        <input class="form-control" name="GestionarActividadTipo" type="number" id="GestionarActividadTipo" value="{{ old('GestionarActividadTipo', optional($rolActividad)->GestionarActividadTipo) }}" min="-2147483648" max="2147483647" required="true" placeholder="Enter gestionar actividad tipo here...">
        {!! $errors->first('GestionarActividadTipo', '<p class="help-block">:message</p>') !!}
    </div>
</div>

