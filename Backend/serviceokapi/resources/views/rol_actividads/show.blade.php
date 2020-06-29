@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Rol Actividad' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('rol_actividads.rol_actividad.destroy', $rolActividad->RolID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('rol_actividads.rol_actividad.index') }}" class="btn btn-primary" title="Show All Rol Actividad">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('rol_actividads.rol_actividad.create') }}" class="btn btn-success" title="Create New Rol Actividad">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('rol_actividads.rol_actividad.edit', $rolActividad->RolID ) }}" class="btn btn-primary" title="Edit Rol Actividad">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Rol Actividad" onclick="return confirm(&quot;Click Ok to delete Rol Actividad.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Desactivar Actividad</dt>
            <dd>{{ $rolActividad->DesactivarActividad }}</dd>
            <dt>Desactivar Actividad Tipo</dt>
            <dd>{{ $rolActividad->DesactivarActividadTipo }}</dd>
            <dt>Gestionar Actividad</dt>
            <dd>{{ $rolActividad->GestionarActividad }}</dd>
            <dt>Gestionar Actividad Tipo</dt>
            <dd>{{ $rolActividad->GestionarActividadTipo }}</dd>

        </dl>

    </div>
</div>

@endsection