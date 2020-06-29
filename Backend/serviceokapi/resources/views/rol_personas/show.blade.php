@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Rol Persona' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('rol_personas.rol_persona.destroy', $rolPersona->RolID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('rol_personas.rol_persona.index') }}" class="btn btn-primary" title="Show All Rol Persona">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('rol_personas.rol_persona.create') }}" class="btn btn-success" title="Create New Rol Persona">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('rol_personas.rol_persona.edit', $rolPersona->RolID ) }}" class="btn btn-primary" title="Edit Rol Persona">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Rol Persona" onclick="return confirm(&quot;Click Ok to delete Rol Persona.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Gestiona Persona</dt>
            <dd>{{ $rolPersona->GestionaPersona }}</dd>
            <dt>Gestiona Representante</dt>
            <dd>{{ $rolPersona->GestionaRepresentante }}</dd>

        </dl>

    </div>
</div>

@endsection