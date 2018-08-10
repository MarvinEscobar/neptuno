@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <b>PLUS</b>
               {{--      @can('plus.create')
                    <a href="{{ route('plus.create') }}" 
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
                            {{-- @foreach($plus as $plu)
                            <tr>
                                <td>{{ $plu->id }}</td>
                                <td>{{ $plu->name }}</td>
                                @can('plus.show')
                                <td width="10px">
                                    <a href="{{ route('plus.show', $plu->id) }}" 
                                    class="btn btn-sm btn-default">
                                        ver
                                    </a>
                                </td>
                                @endcan
                                @can('plus.edit')
                                <td width="10px">
                                    <a href="{{ route('plus.edit', $plu->id) }}" 
                                    class="btn btn-sm btn-default">
                                        editar
                                    </a>
                                </td>
                                @endcan
                                @can('plus.destroy')
                                <td width="10px">
                                    {!! Form::open(['route' => ['plus.destroy', $plu->id], 
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
                   {{--  {{ $plus->render() }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection