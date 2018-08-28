<div class="panel-body">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>{{ Form::label('CODPRO', 'Codigo') }}</th>
                        <th>{{ Form::label('Cantidad', 'Cantidad') }}</br></th>
                        <th>{{ Form::label('NumDoc', 'Numero de factura') }}</th>
                        <th colspan="5">    &nbsp;</th>
				<tbody>
					<tr>
						<td>{{ Form::text('CODPRO', null, ['class' => 'form-control']) }}</td>
						<td>{{ Form::text('Cantidad', null, ['class' => 'form-control']) }}	</td>
						<td>{{ Form::text('NumDoc', null, ['class' => 'form-control']) }}</td>
						<td>{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}</td>	
				</tbody>
                    </tr>
                </thead>
            </table>	
</div>