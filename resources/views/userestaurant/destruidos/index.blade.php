@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <b>Destruidos</b>
                    {{-- @can('canales.create')
                    <a href="{{ route('canales.create') }}" 
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
                                <th>                Destruido</th>
                                <th colspan="3">    &nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach($canales as $canal)
                            <tr>
                                <td>{{ $canal->id }}</td>
                                <td>{{ $canal->name }}</td>
                                @can('canales.show')
                                <td width="10px">
                                    <a href="{{ route('canales.show', $canal->id) }}" 
                                    class="btn btn-sm btn-default">
                                        ver
                                    </a>
                                </td>
                                @endcan
                                @can('canales.edit')
                                <td width="10px">
                                    <a href="{{ route('canales.edit', $canal->id) }}" 
                                    class="btn btn-sm btn-default">
                                        editar
                                    </a>
                                </td>
                                @endcan
                                @can('canales.destroy')
                                <td width="10px">
                                    {!! Form::open(['route' => ['canales.destroy', $canal->id], 
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
                    {{-- {{ $canales->render() }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection