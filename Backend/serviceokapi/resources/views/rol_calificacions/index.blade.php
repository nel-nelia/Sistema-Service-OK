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
                <h4 class="mt-5 mb-5">Rol Calificacions</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('rol_calificacions.rol_calificacion.create') }}" class="btn btn-success" title="Create New Rol Calificacion">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>

        @if(count($rolCalificacions) == 0)
            <div class="panel-body text-center">
                <h4>No Rol Calificacions Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Gestionar Calificacion</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($rolCalificacions as $rolCalificacion)
                        <tr>
                            <td>{{ $rolCalificacion->GestionarCalificacion }}</td>

                            <td>

                                <form method="POST" action="{!! route('rol_calificacions.rol_calificacion.destroy', $rolCalificacion->RolID) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('rol_calificacions.rol_calificacion.show', $rolCalificacion->RolID ) }}" class="btn btn-info" title="Show Rol Calificacion">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('rol_calificacions.rol_calificacion.edit', $rolCalificacion->RolID ) }}" class="btn btn-primary" title="Edit Rol Calificacion">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Rol Calificacion" onclick="return confirm(&quot;Click Ok to delete Rol Calificacion.&quot;)">
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
            {!! $rolCalificacions->render() !!}
        </div>

        @endif

    </div>
@endsection
