@extends('invitado.master_invitado')

@section('content')
	<div class="padding color-verde">
		<div class="row">
			<div class="col-md-12">
				<h3>Login de Institución</h3>
				<h4 class="txt">Unete a nosotros</h4>
			</div>
		</div>
		<div class="ico-userInstituto-form animated bounceIn"></div>
	</div>
	<div class="container estilo-form animated fadeInUp">
			<div class="row">
					<div class="col-md-offset-3 col-md-6">
						<div>
		<form action="/login" method="post">
			{{ csrf_field() }}
			<label for="">Correo</label>
			<input class="control-form input" type="text" name="correo" >
			<label for="">Clave</label>
			<input class="control-form input" type="password" name="clave">
			<div class="row top">
				<div class="col-md-offset-3 col-md-6">
					<input class="btn btn-info input-btn" type="submit" value="Registrar">
				</div>
			</div>
		</form>
	</div>
					</div>
				
			

@endsection












	






