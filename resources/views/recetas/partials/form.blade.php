<div class="form-group">
	{{ Form::label('name', 'Nombre del receta') }}
	{{ Form::text('name', null, ['class' => 'form-control']) }}	
</div>

<div class="form-group">
	{{ Form::label('description', 'Descripción del receta') }}
	{{ Form::text('description', null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group">	
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
	</div>