@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Rol Usuario' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('rol_usuarios.rol_usuario.destroy', $rolUsuario->RolID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('rol_usuarios.rol_usuario.index') }}" class="btn btn-primary" title="Show All Rol Usuario">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('rol_usuarios.rol_usuario.create') }}" class="btn btn-success" title="Create New Rol Usuario">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('rol_usuarios.rol_usuario.edit', $rolUsuario->RolID ) }}" class="btn btn-primary" title="Edit Rol Usuario">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Rol Usuario" onclick="return confirm(&quot;Click Ok to delete Rol Usuario.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Desactiva Usuario</dt>
            <dd>{{ $rolUsuario->DesactivaUsuario }}</dd>
            <dt>Gestiona Usuario</dt>
            <dd>{{ $rolUsuario->GestionaUsuario }}</dd>

        </dl>

    </div>
</div>

@endsection