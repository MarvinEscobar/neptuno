@extends('layouts.app')

@section('content')
	<div class="container box">
		{{ Form::open(['route' => 'products.store','method' => 'POST']) }}
    		<div class="form-group">    	
				{{ Form::label('Descripcion', 'Descripcion del producto') }}
				{{ Form::text('Descripcion', null, ['class' => 'form-control','placeholder' => 'Ingrese nombre del producto']) }}
				<div id="materialList">
				</div>			
			</div>
		 {!! Form::close() !!}
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
@endsection