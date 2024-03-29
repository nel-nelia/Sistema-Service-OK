@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Persona' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('personas.persona.destroy', $persona->EntidadID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('personas.persona.index') }}" class="btn btn-primary" title="Show All Persona">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('personas.persona.create') }}" class="btn btn-success" title="Create New Persona">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('personas.persona.edit', $persona->EntidadID ) }}" class="btn btn-primary" title="Edit Persona">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Persona" onclick="return confirm(&quot;Click Ok to delete Persona.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Apellido</dt>
            <dd>{{ $persona->Apellido }}</dd>
            <dt>Direccion</dt>
            <dd>{{ $persona->Direccion }}</dd>
            <dt>D N I</dt>
            <dd>{{ $persona->DNI }}</dd>
            <dt>Nombre</dt>
            <dd>{{ $persona->Nombre }}</dd>
            <dt>Telefono</dt>
            <dd>{{ $persona->Telefono }}</dd>

        </dl>

    </div>
</div>

@endsection