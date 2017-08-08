@extends('invitado.master_invitado')

@section('content')
	<div class="padding color-verde">
		<div class="row">
			<div class="col-md-12">
				<h3>Registro de usuario</h3>
				<h4 class="txt">Registro de usuario individual o no perteneciente a una institución</h4>
			</div>
		</div>
		<div class="ico-user-form animated bounceIn"></div>
	</div>

	<form action="">
		<div class="container estilo-form animated fadeInUp ">
			<div class="row">
					<div class="col-md-offset-3 col-md-3">
						<p class="p-form">Rut</p>
						<input class="form-control input" type="text"/>
						<p class="p-form">Nombres</p>
						<input class="form-control input" type="text">
						<p class="p-form">Apellidos</p>
						<input class="form-control input" type="text">
						<p class="p-form">Fecha de Nacimiento</p>
						<input class="form-control input" type="text">
					</div>
					<div class="col-md-3">
						<p class="p-form">Nª telefono</p>
						<input class="form-control input" type="text">
						<p class="p-form">Correo</p>
						<input class="form-control input" type="text">
						<p class="p-form">Clave</p>
						<input class="form-control input" type="password">
						<p class="p-form">Repita Clave</p>
						<input class="form-control input" type="password">
					</div>
			</div>
			<div class="row top">
				<div class="col-md-offset-3 col-md-6">
					<input class="btn btn-success input-btn" type="submit" value="Registrar">
				</div>
			</div>
		</div>
		
	</form>	
@endsection