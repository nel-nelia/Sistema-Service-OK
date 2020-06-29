@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Representante' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('representantes.representante.destroy', $representante->EntidadID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('representantes.representante.index') }}" class="btn btn-primary" title="Show All Representante">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('representantes.representante.create') }}" class="btn btn-success" title="Create New Representante">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('representantes.representante.edit', $representante->EntidadID ) }}" class="btn btn-primary" title="Edit Representante">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Representante" onclick="return confirm(&quot;Click Ok to delete Representante.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Correo Empresarial</dt>
            <dd>{{ $representante->CorreoEmpresarial }}</dd>
            <dt>R U C</dt>
            <dd>{{ $representante->RUC }}</dd>

        </dl>

    </div>
</div>

@endsection