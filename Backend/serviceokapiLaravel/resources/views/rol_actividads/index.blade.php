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
                <h4 class="mt-5 mb-5">Rol Actividads</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('rol_actividads.rol_actividad.create') }}" class="btn btn-success" title="Create New Rol Actividad">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>

        @if(count($rolActividads) == 0)
            <div class="panel-body text-center">
                <h4>No Rol Actividads Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Desactivar Actividad</th>
                            <th>Desactivar Actividad Tipo</th>
                            <th>Gestionar Actividad</th>
                            <th>Gestionar Actividad Tipo</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($rolActividads as $rolActividad)
                        <tr>
                            <td>{{ $rolActividad->DesactivarActividad }}</td>
                            <td>{{ $rolActividad->DesactivarActividadTipo }}</td>
                            <td>{{ $rolActividad->GestionarActividad }}</td>
                            <td>{{ $rolActividad->GestionarActividadTipo }}</td>

                            <td>

                                <form method="POST" action="{!! route('rol_actividads.rol_actividad.destroy', $rolActividad->RolID) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('rol_actividads.rol_actividad.show', $rolActividad->RolID ) }}" class="btn btn-info" title="Show Rol Actividad">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('rol_actividads.rol_actividad.edit', $rolActividad->RolID ) }}" class="btn btn-primary" title="Edit Rol Actividad">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Rol Actividad" onclick="return confirm(&quot;Click Ok to delete Rol Actividad.&quot;)">
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
            {!! $rolActividads->render() !!}
        </div>

        @endif

    </div>
@endsection
