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
                <h4 class="mt-5 mb-5">Rol Personas</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('rol_personas.rol_persona.create') }}" class="btn btn-success" title="Create New Rol Persona">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>

        @if(count($rolPersonas) == 0)
            <div class="panel-body text-center">
                <h4>No Rol Personas Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Gestiona Persona</th>
                            <th>Gestiona Representante</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($rolPersonas as $rolPersona)
                        <tr>
                            <td>{{ $rolPersona->GestionaPersona }}</td>
                            <td>{{ $rolPersona->GestionaRepresentante }}</td>

                            <td>

                                <form method="POST" action="{!! route('rol_personas.rol_persona.destroy', $rolPersona->RolID) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('rol_personas.rol_persona.show', $rolPersona->RolID ) }}" class="btn btn-info" title="Show Rol Persona">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('rol_personas.rol_persona.edit', $rolPersona->RolID ) }}" class="btn btn-primary" title="Edit Rol Persona">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Rol Persona" onclick="return confirm(&quot;Click Ok to delete Rol Persona.&quot;)">
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
            {!! $rolPersonas->render() !!}
        </div>

        @endif

    </div>
@endsection
