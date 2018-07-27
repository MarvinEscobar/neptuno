{{-- @extends("master")

@section('title','Pagina Registro')

@section("content")

<h1>Pagina Registro</h1>

@endsection --}}

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
					<h2>Formulario de Registro</h2>
					<form action="{{ route('contacto.store') }}" method="post">
						<div class="form-group">
							<input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" placeholder="Escriba Nombre" > {{ $errors->first('nombre') }}
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="usuario" value="{{ old('usuario') }}" placeholder="Escriba Usuario">	{{ $errors->first('usuario') }}
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="contrasena" value="{{ old('contrasena') }}" placeholder="Escriba contrasena">	{{ $errors->first('contrasena') }}
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="confirmarcontrasena" value="{{ old('confirmarcontrasena') }}" placeholder="Confirmar Contrasena">	{{ $errors->first('confirmarcontrasena') }}
						</div>
						<div class="form-group">
							<input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Escriba su Email">	{{ $errors->first('email') }}
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="idrol" value="{{ old('idrol') }}" placeholder="Escriba su ID_Rol">	{{ $errors->first('idrol') }}
						</div>
						<div class="form-group">
							<input type="submit" value="Registrar" class="btn btn-primary">
						</div>	
						{{ csrf_field() }}					
					</form>				
				</div>			
			</div>		
		</div>
		
	</body>
	</html>	