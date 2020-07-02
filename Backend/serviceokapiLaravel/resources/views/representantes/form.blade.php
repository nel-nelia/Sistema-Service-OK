
<div class="form-group {{ $errors->has('CorreoEmpresarial') ? 'has-error' : '' }}">
    <label for="CorreoEmpresarial" class="col-md-2 control-label">Correo Empresarial</label>
    <div class="col-md-10">
        <input class="form-control" name="CorreoEmpresarial" type="text" id="CorreoEmpresarial" value="{{ old('CorreoEmpresarial', optional($representante)->CorreoEmpresarial) }}" minlength="1" maxlength="250" required="true" placeholder="Enter correo empresarial here...">
        {!! $errors->first('CorreoEmpresarial', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('RUC') ? 'has-error' : '' }}">
    <label for="RUC" class="col-md-2 control-label">R U C</label>
    <div class="col-md-10">
        <input class="form-control" name="RUC" type="number" id="RUC" value="{{ old('RUC', optional($representante)->RUC) }}" min="-2147483648" max="2147483647" required="true" placeholder="Enter r u c here...">
        {!! $errors->first('RUC', '<p class="help-block">:message</p>') !!}
    </div>
</div>

