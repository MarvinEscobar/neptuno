@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><B>Ingresar suministros</B></div>
                <div class="panel-body">
   				{{ Form::open(['route' => 'entradas.store']) }}

                        @include('userestaurant\entradas.partials.form')
                        
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
