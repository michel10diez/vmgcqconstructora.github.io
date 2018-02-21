@extends('layouts/app')
@section('content')
	<div class="container">
		<div class="row">
		<section class="formulario col-md-8" >
			<h3>Contacto</h3>
			@if(Session::has('flash_message'))
				<div class="alert alert-success">
					{{ Session::get('flash_message') }}
				</div>
			@endif
			<form action="{{ route('contact.store') }}" method="post" class="form-group container">
				{{ csrf_field() }}
				<label for="nombre">Nombre:</label>
				<input class="form-control" aria-describedby="emailHelp" type="text" name="name" id="name" placeholder="Nombre y Apellido">
				@if($errors->has('name'))
					<small class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
				@endif
				<label for="email">Email:</label>
				<input class="form-control" type="text" id="email" name="email" placeholder="ejemplo@correo.com">
				@if($errors->has('email'))
					<small class="form-text invalid-feedback">{{ $errors->first('email') }}</small>
				@endif
				<label for="mensaje">Mensaje:</label>
				<textarea class="form-control" name="mensaje" >
				</textarea>
				@if($errors->has('mensaje'))
					<small id="emalHelp" class="form-text invalid-feedback">{{ $errors->first('mensaje') }}</small>
				@endif
				<input type="submit" id="submit" name="submit" value="Enviar" class="btn btn-primary">
			</form>
		</section>
	</div>
	</div>
@endsection