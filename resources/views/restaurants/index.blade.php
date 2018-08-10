@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <b>Restaurantes</b>
             {{--        @can('restaurants.create')
                    <a href="{{ route('restaurants.create') }}" 
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
                            {{-- @foreach($restaurants as $restaurant)
                            <tr>
                                <td>{{ $restaurant->id }}</td>
                                <td>{{ $restaurant->name }}</td>
                                @can('restaurants.show')
                                <td width="10px">
                                    <a href="{{ route('restaurants.show', $restaurant->id) }}" 
                                    class="btn btn-sm btn-default">
                                        ver
                                    </a>
                                </td>
                                @endcan
                                @can('restaurants.edit')
                                <td width="10px">
                                    <a href="{{ route('restaurants.edit', $restaurant->id) }}" 
                                    class="btn btn-sm btn-default">
                                        editar
                                    </a>
                                </td>
                                @endcan
                                @can('restaurants.destroy')
                                <td width="10px">
                                    {!! Form::open(['route' => ['restaurants.destroy', $restaurant->id], 
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
                    {{-- {{ $restaurants->render() }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection