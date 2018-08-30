@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                   <span id="movdias-total"> <b>{{ $movdias->total() }} 
                        registros | paginas
                        {{ $movdias->currentPage() }} de 
                        {{ $movdias->lastPage() }} Entrada de productos</b></span>
                    @can('userestaurant\entradas.create')
                    <a href="{{ route('entradas.create') }}" 
                    class="btn btn-sm btn-primary pull-right">
                        Crear
                    </a>
                    @endcan
                </div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">   Codigo</th>
                                <th>                Cantidad</th>
                                <th>                Numemero Doccumento</th>
                                <th colspan="3">    &nbsp;</th>
                            </tr>
                        </thead>
                         <tbody>
                            @foreach($movdias as $movdia)
                            <tr>
                                <td>{{ $movdia->CODPRO }}</td>
                                <td>{{ $movdia->Cantidad }}</td>
                                <td>{{ $movdia->NumDoc }}</td>

                                @can('userestaurant\entradas.show')
                                <td width="10px">
                                    <a href="{{ route('entradas.show', $movdia->NumDoc) }}" 
                                    class="btn btn-sm btn-default">
                                        Ver
                                    </a>
                                </td>
                                @endcan
                            @can('userestaurant\entradas.edit')
                                <td width="10px">
                                    <a href="{{ route('entradas.edit', $movdia->NumDoc) }}" 
                                    class="btn btn-sm btn-info">
                                        Editar
                                    </a>
                                </td>
                                @endcan
                           @can('userestaurant\entradas.destroy')
                                <td width="10px">
                                    {!!Form::open(['route' => ['entradas.destroy', $movdia->NumDoc], 
                                    'method' => 'DELETE'])!!}
                                        <button class="btn btn-delete btn-sm btn-danger">
                                            Eliminar
                                        </button>
                                    {!! Form::close() !!}
                                </td>
                                @endcan                          
                            </tr>                           
                            @endforeach
                        </tbody> 
                    </table>
                    {{ $movdias->render() }}
                </div>
            </div>
        </div>        
    </div>
</div>
@endsection