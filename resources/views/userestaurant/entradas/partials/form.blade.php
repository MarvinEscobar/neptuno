<div class="form-group">
	{{ Form::label('Cantidad', 'Cantidad') }}
	{{ Form::text('Cantidad', null, ['class' => 'form-control']) }}	
</div>

{{-- <div class="form-group">
	{{ Form::label('description', 'Descripción') }}
	{{ Form::text('description', null, ['class' => 'form-control']) }}
</div> --}}

	<div class="form-group">	
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
	</div>