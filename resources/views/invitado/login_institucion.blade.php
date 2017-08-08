@extends('invitado.master_invitado')

@section('content')
		<div class="padding color-verde">
			<div class="row">
				<div class="col-md-12">
					<h3>Login de Instituciones</h3>
					<h4 class="txt">Unete a nosotros</h4>
				</div>
			</div>
			<div class="ico-userInstituto-form animated bounceIn"></div>
		</div>
			<form action="/login" method="post">
				<div class="padding container animated fadeInUp">
						<div class="row">
							<div class="col-md-offset-4 col-md-4">
						
								{{ csrf_field() }}
								<label for="">Correo</label>
								<input class="form-control input " type="text" name="correo" >
								<label for="">Clave</label>
								<input class="form-control input" type="password" name="clave">
							</div>
						</div>
						<div class="row top">
							<div class="col-md-offset-4 col-md-4">
								<input class="btn btn-info input-btn" type="submit" value="Registrar">
							</div>
						</div>
				</div>		
			</form>
@endsection











	






