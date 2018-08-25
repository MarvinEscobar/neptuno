@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Entrada de suministros</div>

                <div class="panel-body">                                        
                    <p><strong>Codigo: </strong>{{ $movdia->CODPRO }}</p>
                    <p><strong>Numero de factura: </strong>{{ $movdia->NumDoc }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection