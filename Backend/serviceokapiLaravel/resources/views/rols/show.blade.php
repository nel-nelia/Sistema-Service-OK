@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Rol' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('rols.rol.destroy', $rol->RolID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('rols.rol.index') }}" class="btn btn-primary" title="Show All Rol">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('rols.rol.create') }}" class="btn btn-success" title="Create New Rol">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('rols.rol.edit', $rol->RolID ) }}" class="btn btn-primary" title="Edit Rol">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Rol" onclick="return confirm(&quot;Click Ok to delete Rol.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Descripcion</dt>
            <dd>{{ $rol->Descripcion }}</dd>
            <dt>Nombre</dt>
            <dd>{{ $rol->Nombre }}</dd>

        </dl>

    </div>
</div>

@endsection