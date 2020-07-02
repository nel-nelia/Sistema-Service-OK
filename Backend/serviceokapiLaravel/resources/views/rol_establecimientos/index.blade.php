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
                <h4 class="mt-5 mb-5">Rol Establecimientos</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('rol_establecimientos.rol_establecimiento.create') }}" class="btn btn-success" title="Create New Rol Establecimiento">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>

        @if(count($rolEstablecimientos) == 0)
            <div class="panel-body text-center">
                <h4>No Rol Establecimientos Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Desactivar Establecimiento</th>
                            <th>Gestionar Establecimiento</th>
                            <th>Gestionar Ubicacion</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($rolEstablecimientos as $rolEstablecimiento)
                        <tr>
                            <td>{{ $rolEstablecimiento->DesactivarEstablecimiento }}</td>
                            <td>{{ $rolEstablecimiento->GestionarEstablecimiento }}</td>
                            <td>{{ $rolEstablecimiento->GestionarUbicacion }}</td>

                            <td>

                                <form method="POST" action="{!! route('rol_establecimientos.rol_establecimiento.destroy', $rolEstablecimiento->RolID) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('rol_establecimientos.rol_establecimiento.show', $rolEstablecimiento->RolID ) }}" class="btn btn-info" title="Show Rol Establecimiento">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('rol_establecimientos.rol_establecimiento.edit', $rolEstablecimiento->RolID ) }}" class="btn btn-primary" title="Edit Rol Establecimiento">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Rol Establecimiento" onclick="return confirm(&quot;Click Ok to delete Rol Establecimiento.&quot;)">
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
            {!! $rolEstablecimientos->render() !!}
        </div>

        @endif

    </div>
@endsection
