<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>Pagina de contacto</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="container">	
		<div class="row justify-content-center">
			<div class="col-md-5">
				<h2>Enviar mensaje</h2>
				<form action="{{ route('contacto.store') }}" method="get">
					<div class="form-group">
						<input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" placeholder="Escriba su Nombre" > {{ $errors->first('nombre') }}
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Escriba su Email">	{{ $errors->first('email') }}
					</div>
					<div class="form-group">
						<textarea name="mensaje" class="form-control" placeholder="Escriba su mensaje">{{ old('mensaje') }}</textarea>	{{ $errors->first('mensaje') }}
					</div>
					<div class="form-group">
							<input type="text" class="form-control" name="idrol" value="{{ old('idrol') }}" placeholder="Escriba su ID_Rol">	{{ $errors->first('idrol') }}
						</div>	
					<div class="form-group">
						<input type="submit" value="Enviar mensaje" class="btn btn-primary">
					</div>	
					{{ csrf_field() }}					
				</form>				
			</div>			
		</div>		
	</div>
	
</body>
</html>