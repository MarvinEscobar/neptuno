@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <b>Fechas de inventario</b>
                    {{-- @can('fechas.create')
                    <a href="{{ route('fechas.create') }}" 
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
                                <th colspan="3">    &nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                           {{--  @foreach($fechas as $fecha)
                            <tr>
                                <td>{{ $fecha->id }}</td>
                                <td>{{ $fecha->name }}</td>
                                @can('fechas.show')
                                <td width="10px">
                                    <a href="{{ route('fechas.show', $fecha->id) }}" 
                                    class="btn btn-sm btn-default">
                                        ver
                                    </a>
                                </td>
                                @endcan
                                @can('fechas.edit')
                                <td width="10px">
                                    <a href="{{ route('fechas.edit', $fecha->id) }}" 
                                    class="btn btn-sm btn-default">
                                        editar
                                    </a>
                                </td>
                                @endcan
                                @can('fechas.destroy')
                                <td width="10px">
                                    {!! Form::open(['route' => ['fechas.destroy', $fecha->id], 
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
                  {{--   {{ $fechas->render() }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection