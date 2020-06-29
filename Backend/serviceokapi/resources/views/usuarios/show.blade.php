@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Usuario' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('usuarios.usuario.destroy', $usuario->EntidadID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('usuarios.usuario.index') }}" class="btn btn-primary" title="Show All Usuario">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('usuarios.usuario.create') }}" class="btn btn-success" title="Create New Usuario">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('usuarios.usuario.edit', $usuario->EntidadID ) }}" class="btn btn-primary" title="Edit Usuario">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Usuario" onclick="return confirm(&quot;Click Ok to delete Usuario.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Rol I D</dt>
            <dd>{{ optional($usuario->Rol)->id }}</dd>
            <dt>Secret</dt>
            <dd>{{ $usuario->Secret }}</dd>
            <dt>Usuario</dt>
            <dd>{{ $usuario->Usuario }}</dd>

        </dl>

    </div>
</div>

@endsection