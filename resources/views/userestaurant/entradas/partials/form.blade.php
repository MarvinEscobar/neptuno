<div class="panel-body">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>{{ Form::label('Descripcion', 'Descripcion') }}</th>
                        <th>{{ Form::label('Cantidad', 'Cantidad') }}</br></th>
                        <th>{{ Form::label('NumDoc', 'Numero de factura') }}</th>
                        <th colspan="5">    &nbsp;</th>
				<tbody>
					<tr>
						<td>{{ Form::text('Descripcion', null, ['class' => 'form-control']) }}</td>
						<td>{{ Form::text('Cantidad', null, ['class' => 'form-control']) }}	</td>
						<td>{{ Form::text('NumDoc', null, ['class' => 'form-control']) }}</td>
						<td>{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}</td>             
				</tbody>
                    </tr>
                </thead>
            </table>
    <div id="materialList">
    </div>  	
</div>
<script>
$(document).ready(function(){

 $('#Descripcion').keyup(function(){ 
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('autocomplete.fetch') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
           $('#materialList').fadeIn();  
                    $('#materialList').html(data);
          }
         });
        }
    });

    $(document).on('click', 'li', function(){  
        $('#Descripcion').val($(this).text());  
        $('#materialList').fadeOut();  
    });  
});
</script>
