@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <b>Unidad de venta</b>
               {{--      @can('unidades.create')
                    <a href="{{ route('unidades.create') }}" 
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
                           {{--  @foreach($unidades as $unidad)
                            <tr>
                                <td>{{ $unidad->id }}</td>
                                <td>{{ $unidad->name }}</td>
                                @can('unidades.show')
                                <td width="10px">
                                    <a href="{{ route('unidades.show', $unidad->id) }}" 
                                    class="btn btn-sm btn-default">
                                        ver
                                    </a>
                                </td>
                                @endcan
                                @can('unidades.edit')
                                <td width="10px">
                                    <a href="{{ route('unidades.edit', $unidad->id) }}" 
                                    class="btn btn-sm btn-default">
                                        editar
                                    </a>
                                </td>
                                @endcan
                                @can('unidades.destroy')
                                <td width="10px">
                                    {!! Form::open(['route' => ['unidades.destroy', $unidad->id], 
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
                {{--     {{ $unidades->render() }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection