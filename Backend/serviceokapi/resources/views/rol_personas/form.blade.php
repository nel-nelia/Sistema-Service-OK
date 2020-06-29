
<div class="form-group {{ $errors->has('GestionaPersona') ? 'has-error' : '' }}">
    <label for="GestionaPersona" class="col-md-2 control-label">Gestiona Persona</label>
    <div class="col-md-10">
        <input class="form-control" name="GestionaPersona" type="number" id="GestionaPersona" value="{{ old('GestionaPersona', optional($rolPersona)->GestionaPersona) }}" min="-2147483648" max="2147483647" required="true" placeholder="Enter gestiona persona here...">
        {!! $errors->first('GestionaPersona', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('GestionaRepresentante') ? 'has-error' : '' }}">
    <label for="GestionaRepresentante" class="col-md-2 control-label">Gestiona Representante</label>
    <div class="col-md-10">
        <input class="form-control" name="GestionaRepresentante" type="number" id="GestionaRepresentante" value="{{ old('GestionaRepresentante', optional($rolPersona)->GestionaRepresentante) }}" min="-2147483648" max="2147483647" required="true" placeholder="Enter gestiona representante here...">
        {!! $errors->first('GestionaRepresentante', '<p class="help-block">:message</p>') !!}
    </div>
</div>

