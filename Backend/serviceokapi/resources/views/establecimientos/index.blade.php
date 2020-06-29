{{--@extends('layouts.app')--}}

@section('content')

    @if(Session::has('success_message'))
        <div class="alert alert-success">
            <span class="glyphicon glyphicon-ok"></span>
            {!! session('success_message') !!}

            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    @endif

    <div class="panel panel-default">

        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5">Establecimientos</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('establecimientos.establecimiento.create') }}" class="btn btn-success" title="Create New Establecimiento">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>

        @if(count($establecimientos) == 0)
            <div class="panel-body text-center">
                <h4>No Establecimientos Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Actividad I D</th>
                            <th>Coordenada X</th>
                            <th>Coordenada Y</th>
                            <th>Delivery</th>
                            <th>Entidad I D</th>
                            <th>Flag Activo</th>
                            <th>Nombre</th>
                            <th>Permiso</th>
                            <th>R U C</th>
                            <th>Telefono</th>
                            <th>Whatsapp U R L</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($establecimientos as $establecimiento)
                        <tr>
                            <td>{{ optional($establecimiento->Actividad)->ActividadTipoID }}</td>
                            <td>{{ $establecimiento->CoordenadaX }}</td>
                            <td>{{ $establecimiento->CoordenadaY }}</td>
                            <td>{{ $establecimiento->Delivery }}</td>
                            <td>{{ optional($establecimiento->Representante)->CorreoEmpresarial }}</td>
                            <td>{{ $establecimiento->FlagActivo }}</td>
                            <td>{{ $establecimiento->Nombre }}</td>
                            <td>{{ $establecimiento->Permiso }}</td>
                            <td>{{ $establecimiento->RUC }}</td>
                            <td>{{ $establecimiento->Telefono }}</td>
                            <td>{{ $establecimiento->WhatsappURL }}</td>

                            <td>

                                <form method="POST" action="{!! route('establecimientos.establecimiento.destroy', $establecimiento->EstablecimientoID) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('establecimientos.establecimiento.show', $establecimiento->EstablecimientoID ) }}" class="btn btn-info" title="Show Establecimiento">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('establecimientos.establecimiento.edit', $establecimiento->EstablecimientoID ) }}" class="btn btn-primary" title="Edit Establecimiento">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Establecimiento" onclick="return confirm(&quot;Click Ok to delete Establecimiento.&quot;)">
                                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                        </button>
                                    </div>

                                </form>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

        <div class="panel-footer">
            {!! $establecimientos->render() !!}
        </div>

        @endif

    </div>
@endsection
