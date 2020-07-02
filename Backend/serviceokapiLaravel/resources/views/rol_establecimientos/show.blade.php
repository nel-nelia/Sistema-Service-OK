@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Rol Establecimiento' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('rol_establecimientos.rol_establecimiento.destroy', $rolEstablecimiento->RolID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('rol_establecimientos.rol_establecimiento.index') }}" class="btn btn-primary" title="Show All Rol Establecimiento">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('rol_establecimientos.rol_establecimiento.create') }}" class="btn btn-success" title="Create New Rol Establecimiento">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('rol_establecimientos.rol_establecimiento.edit', $rolEstablecimiento->RolID ) }}" class="btn btn-primary" title="Edit Rol Establecimiento">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Rol Establecimiento" onclick="return confirm(&quot;Click Ok to delete Rol Establecimiento.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Desactivar Establecimiento</dt>
            <dd>{{ $rolEstablecimiento->DesactivarEstablecimiento }}</dd>
            <dt>Gestionar Establecimiento</dt>
            <dd>{{ $rolEstablecimiento->GestionarEstablecimiento }}</dd>
            <dt>Gestionar Ubicacion</dt>
            <dd>{{ $rolEstablecimiento->GestionarUbicacion }}</dd>

        </dl>

    </div>
</div>

@endsection