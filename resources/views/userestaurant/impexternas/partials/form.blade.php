<div class="form-group">
	{{ Form::label('name', 'Importaciones Externas') }}
	{{ Form::text('name', null, ['class' => 'form-control']) }}	
</div>

<div class="form-group">
	{{ Form::label('description', 'Descripción') }}
	{{ Form::text('description', null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group">	
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
	</div>