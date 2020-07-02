@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Calificacion' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('calificacions.calificacion.destroy', $calificacion->CalificacionID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('calificacions.calificacion.index') }}" class="btn btn-primary" title="Show All Calificacion">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('calificacions.calificacion.create') }}" class="btn btn-success" title="Create New Calificacion">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('calificacions.calificacion.edit', $calificacion->CalificacionID ) }}" class="btn btn-primary" title="Edit Calificacion">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Calificacion" onclick="return confirm(&quot;Click Ok to delete Calificacion.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Comentario</dt>
            <dd>{{ $calificacion->Comentario }}</dd>
            <dt>Establecimiento I D</dt>
            <dd>{{ optional($calificacion->Establecimiento)->id }}</dd>
            <dt>Numero Estrellas</dt>
            <dd>{{ $calificacion->NumeroEstrellas }}</dd>

        </dl>

    </div>
</div>

@endsection