@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Establecimiento' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('establecimientos.establecimiento.destroy', $establecimiento->EstablecimientoID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('establecimientos.establecimiento.index') }}" class="btn btn-primary" title="Show All Establecimiento">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('establecimientos.establecimiento.create') }}" class="btn btn-success" title="Create New Establecimiento">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('establecimientos.establecimiento.edit', $establecimiento->EstablecimientoID ) }}" class="btn btn-primary" title="Edit Establecimiento">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Establecimiento" onclick="return confirm(&quot;Click Ok to delete Establecimiento.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Actividad I D</dt>
            <dd>{{ optional($establecimiento->Actividad)->ActividadTipoID }}</dd>
            <dt>Coordenada X</dt>
            <dd>{{ $establecimiento->CoordenadaX }}</dd>
            <dt>Coordenada Y</dt>
            <dd>{{ $establecimiento->CoordenadaY }}</dd>
            <dt>Delivery</dt>
            <dd>{{ $establecimiento->Delivery }}</dd>
            <dt>Entidad I D</dt>
            <dd>{{ optional($establecimiento->Representante)->CorreoEmpresarial }}</dd>
            <dt>Flag Activo</dt>
            <dd>{{ $establecimiento->FlagActivo }}</dd>
            <dt>Nombre</dt>
            <dd>{{ $establecimiento->Nombre }}</dd>
            <dt>Permiso</dt>
            <dd>{{ $establecimiento->Permiso }}</dd>
            <dt>R U C</dt>
            <dd>{{ $establecimiento->RUC }}</dd>
            <dt>Telefono</dt>
            <dd>{{ $establecimiento->Telefono }}</dd>
            <dt>Whatsapp U R L</dt>
            <dd>{{ $establecimiento->WhatsappURL }}</dd>

        </dl>

    </div>
</div>

@endsection