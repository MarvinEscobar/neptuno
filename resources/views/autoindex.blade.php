@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> 
                    <div class="panel-body">

                   <span id="movdias-total"> <b>{{ $materials->total() }} 
                        registros | paginas
                        {{ $materials->currentPage() }} de 
                        {{ $materials->lastPage() }} Entrada de productos</b></span>                     
                    
                    <a href="{{ route('autocomplete') }}" 
                    class="btn btn-sm btn-primary pull-right">
                        Crear
                    </a>
                 
                </div>                                 
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">   Codigo</th>
                                <th>                Descripocion</th>
                                <th colspan="3">    &nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($materials as $material)
                            <tr>
                                <td>{{ $material->CODPRO }}</td>
                                <td>{{ $material->Descripcion }}</td>
                                {{-- Mostrar productos --}}                                           
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $materials->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection