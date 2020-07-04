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
                <h4 class="mt-5 mb-5">Rol Usuarios</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('rol_usuarios.rol_usuario.create') }}" class="btn btn-success" title="Create New Rol Usuario">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>

        @if(count($rolUsuarios) == 0)
            <div class="panel-body text-center">
                <h4>No Rol Usuarios Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Desactiva Usuario</th>
                            <th>Gestiona Usuario</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($rolUsuarios as $rolUsuario)
                        <tr>
                            <td>{{ $rolUsuario->DesactivaUsuario }}</td>
                            <td>{{ $rolUsuario->GestionaUsuario }}</td>

                            <td>

                                <form method="POST" action="{!! route('rol_usuarios.rol_usuario.destroy', $rolUsuario->RolID) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('rol_usuarios.rol_usuario.show', $rolUsuario->RolID ) }}" class="btn btn-info" title="Show Rol Usuario">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('rol_usuarios.rol_usuario.edit', $rolUsuario->RolID ) }}" class="btn btn-primary" title="Edit Rol Usuario">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Rol Usuario" onclick="return confirm(&quot;Click Ok to delete Rol Usuario.&quot;)">
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
            {!! $rolUsuarios->render() !!}
        </div>

        @endif

    </div>
@endsection
