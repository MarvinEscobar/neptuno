@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <b>Recetas</b>
             {{--        @can('recetas.create')
                    <a href="{{ route('recetas.create') }}" 
                    class="btn btn-sm btn-primary pull-right">
                        Crear
                    </a>
                    @endcan --}}
                </div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">   ID</th>
                                <th>                Nombre</th>
                                <th>                Descripción</th>
                                <th colspan="3">    &nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach($recetas as $receta)
                            <tr>
                                <td>{{ $receta->id }}</td>
                                <td>{{ $receta->name }}</td>
                                @can('recetas.show')
                                <td width="10px">
                                    <a href="{{ route('recetas.show', $receta->id) }}" 
                                    class="btn btn-sm btn-default">
                                        ver
                                    </a>
                                </td>
                                @endcan
                                @can('recetas.edit')
                                <td width="10px">
                                    <a href="{{ route('recetas.edit', $receta->id) }}" 
                                    class="btn btn-sm btn-default">
                                        editar
                                    </a>
                                </td>
                                @endcan
                                @can('recetas.destroy')
                                <td width="10px">
                                    {!! Form::open(['route' => ['recetas.destroy', $receta->id], 
                                    'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>
                                    {!! Form::close() !!}
                                </td>
                                @endcan
                            </tr>
                            @endforeach --}}
                        </tbody>
                    </table>
                    {{-- {{ $recetas->render() }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection