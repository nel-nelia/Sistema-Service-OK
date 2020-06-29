@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Actividad' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('actividads.actividad.destroy', $actividad->ActividadID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('actividads.actividad.index') }}" class="btn btn-primary" title="Show All Actividad">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('actividads.actividad.create') }}" class="btn btn-success" title="Create New Actividad">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('actividads.actividad.edit', $actividad->ActividadID ) }}" class="btn btn-primary" title="Edit Actividad">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Actividad" onclick="return confirm(&quot;Click Ok to delete Actividad.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Actividad Tipo I D</dt>
            <dd>{{ optional($actividad->Actividadtipo)->FlagActivo }}</dd>
            <dt>Descripcion</dt>
            <dd>{{ $actividad->Descripcion }}</dd>
            <dt>Flag Activo</dt>
            <dd>{{ $actividad->FlagActivo }}</dd>
            <dt>Nombre</dt>
            <dd>{{ $actividad->Nombre }}</dd>

        </dl>

    </div>
</div>

@endsection