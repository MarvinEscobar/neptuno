@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><B>Suministros Existentes</B></div>

                <div class="panel-body">                                        
                    <p><strong>Numero de factura:  </strong>  {{ $movdia->CODPRO}}</p>
                    <p><strong>Cantidad de producto:  </strong>  {{ $movdia->Cantidad}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection