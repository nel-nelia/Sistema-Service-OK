@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Actividad Tipo' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('actividad_tipos.actividad_tipo.destroy', $actividadTipo->ActividadTipoID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('actividad_tipos.actividad_tipo.index') }}" class="btn btn-primary" title="Show All Actividad Tipo">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('actividad_tipos.actividad_tipo.create') }}" class="btn btn-success" title="Create New Actividad Tipo">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('actividad_tipos.actividad_tipo.edit', $actividadTipo->ActividadTipoID ) }}" class="btn btn-primary" title="Edit Actividad Tipo">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Actividad Tipo" onclick="return confirm(&quot;Click Ok to delete Actividad Tipo.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Flag Activo</dt>
            <dd>{{ $actividadTipo->FlagActivo }}</dd>
            <dt>Nombre</dt>
            <dd>{{ $actividadTipo->Nombre }}</dd>

        </dl>

    </div>
</div>

@endsection