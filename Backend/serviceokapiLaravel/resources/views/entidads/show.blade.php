@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Entidad' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('entidads.entidad.destroy', $entidad->EntidadID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('entidads.entidad.index') }}" class="btn btn-primary" title="Show All Entidad">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('entidads.entidad.create') }}" class="btn btn-success" title="Create New Entidad">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('entidads.entidad.edit', $entidad->EntidadID ) }}" class="btn btn-primary" title="Edit Entidad">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Entidad" onclick="return confirm(&quot;Click Ok to delete Entidad.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Flag Activo</dt>
            <dd>{{ $entidad->FlagActivo }}</dd>

        </dl>

    </div>
</div>

@endsection