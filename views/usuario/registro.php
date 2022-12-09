<br><br><br><br>
<section class="hero-wrap hero-wrap-2" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row no-gutters slider-text align-items-end justify-content-center">
			<div class="col-md-8 ftco-animate text-center">
				<h1 class="mb-2 bread">Registro</h1>
				<br>
			</div>
		</div>
	</div>
</section>
<style>
	input:focus {
		outline: none;
		border-color: #ffb606;
		box-shadow: 0 0 10px #ffb606;
	}

	#test {
		background: rgba(0, 0, 0, .75);
		border-radius: 20px;
		margin: 0 auto !important;
		padding: 20px;
	}

	video {
		position: fixed;
		right: 0;
		bottom: 0;
		min-width: 100%;
		min-height: 100%;
		transform: translateX(calc((100% - 100vw) / 2));
		z-index: -2;
	}

	label {
		color: #f9f9ff;
	}
</style>
<section class="">
	<div class="container">
		<div class="py-md-2 text-center">
			<!--aqui se centra el boton y el ingrese los datos-->
			<div class="form-group justify-content-center" style="text-align: center;">
				<div id="test">
					<div class="heading-section ftco-animate mb-4 mt-3">
						<h2 class="mb-4" style="color: #f9f9ff;">Ingresa tus datos aquí</h2>
					</div>
					<div class="py-md-2 text-center">
						<div style="color: #f9f9ff;" class="row-md-8">Los campos que contengan <span class="text-danger">(*) Obligatorio</span> son necesarios para el registro.</div>
						<br>
					</div>

					<form method="POST" action="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("insertar") ?>">
						<div class="section">
							<div class="row">
								<div class="col-md-6">
									<div class="mt-10" style="padding-bottom: 20px;">

										<label for="">Nombre de usuario: <span class="text-danger">(*)</span></label>
										<input type="text" placeholder="Usuario" name="txtUsuario" value="<?php echo isset($usuario) ? $usuario : "" ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Usuario'" required class="single-input-primary" style="padding-right: 240px;">
										<span class="text-danger"><?php echo isset($error[0]) ? $error[0] : "" ?></span>

									</div>
									<div class="mt-10" style="padding-bottom: 20px;">

										<label for="">Email: <span class="text-danger">(*)</span></label>
										<input type="email" placeholder="Email" name="txtCorreo" value="<?php echo isset($correo) ? $correo : "" ?>" require onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required class="single-input-primary" style="padding-right: 240px;">
										<span class="text-danger"><?php echo isset($error[1]) ? $error[1] : "" ?></span>
									</div>
									<div class="mt-10" style="padding-bottom: 20px;">

										<label for="">Password: <span class="text-danger">(*)</span></label>
										<input type="password" placeholder="Password" name="txtPassword" value="<?php echo isset($password) ? $password : "" ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required class="single-input-primary">
										<span class="text-danger"><?php echo isset($error[2]) ? $error[2] : "" ?></span>

									</div>
									<div class="mt-10" style="padding-bottom: 20px;">

										<label for="">Repetir Password: <span class="text-danger">(*)</span></label>
										<input type="password" placeholder="Repetir Password" name="txtPassword2" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Repetir Password'" required class="single-input-primary" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Primary color'" required class="single-input-primary">
										<span class="text-danger"><?php echo isset($error[3]) ? $error[3] : "" ?></span>

									</div>
								</div>
								<div class="col-md-6">
									<div class="mt-10" style="padding-bottom: 20px;">

										<label for="">Nombre del Contacto: </label>
										<input type="text" placeholder="Nombre del Contacto" name="txtNombre" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nombre del Contacto'" class="single-input-primary" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Primary color'" class="single-input-primary">

									</div>
									<div class="mt-10" style="padding-bottom: 20px;">

										<label for="">Nombre del Restaurante: </label>
										<input type="text" placeholder="Nombre del Restaurante" name="txtNombreEmpresa" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nombre del Restaurante'" class="single-input-primary" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Primary color'" class="single-input-primary">

									</div>
									<div class="mt-10" style="padding-bottom: 20px;">

										<label for="">Cuenta Paypal <span class="text-danger">(*)</span></label>
										<input type="text" placeholder="Cuenta Paypal" name="txtCuentaPaypal" value="<?php echo isset($cuenta_paypal) ? $cuenta_paypal : "" ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Cuenta Paypal'" required class="single-input-primary">
										<span class="text-danger"><?php echo isset($error[4]) ? $error[1] : "" ?></span>
									</div>
								</div>
								
								<div class="col-md-12 mt-12">
									<input type="hidden" name="token" value="<?php echo seg::getToken() ?>">
									<br>
									<div class="form-group">
										<input type="submit" value="Registrar" class="genric-btn primary circle" style="font-size: 15px;">
									</div>
								</div>

					</form>

					<br><br><br>
				</div>
			</div>
		</div>
	</div>
	<!--Aqui cierra el justify content-->
	</div>
	<!--Aqui cierra el test-->
	</div>
</section>
<video src="assets/images/videotest.mp4" autoplay="true" muted="true" loop="true"></video>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>