<section class="banner-area text-center" style="padding-top:200px; padding-bottom: 250px;">
	<div class="container-fluid px-0">
		<div class="row d-flex no-gutters">
			<div class="col-md-12 order-md-last ftco-animate makereservation p-4 p-md-5 pt-5">
				<div class="py-md-5">
					<div class="heading-section ftco-animate mb-5">
						<h1 class="mb-4">Ingresa tus datos aquí</h1>
					</div>

					<form method="POST" action="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("validar_usuario") ?>">

						<div class="row">
							<div class="col-md-6" style="margin: auto; text-align: center;">
								<div class="mt-10">
									<?php
									if (isset($_GET["msg"])) $msg = $_GET["msg"];
									if (isset($msg)) { ?>
										<div style="width: 55%; margin: auto; text-align: center;" class="alert alert-danger alert-dismissible fade show" role="alert">
											<strong> <?php echo $msg ?></strong>
										</div><br> <br>
									<?php } ?>
									<input style="width: 55%; margin: auto; text-align: center;" type="text" name="txtUsuario" placeholder="Usuario" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Usuario'" required class="single-input-primary" value="<?php echo isset($usuario) ? $usuario : "" ?>">
									<span class="text-danger"><?php echo isset($error[0]) ? $error[0] : "" ?></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6" style="margin: auto; text-align: center;">
								<div class="mt-10">
									<input style="width: 55%; margin: auto; text-align: center;" type="password" name="txtPassword" placeholder="Contraseña" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Contraseña'" required class="single-input-primary" value="<?php echo isset($password) ? $password : "" ?>">
									<span class="text-danger"><?php echo isset($error[2]) ? $error[2] : "" ?></span>
								</div>
							</div>
							<div class="col-md-12 mt-12">
								<input type="hidden" name="token" value="<?php echo seg::getToken() ?>">

								<div class="mt-10">
									<input type="submit" value="Entrar" class="genric-btn primary radius py-1 px-9">
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<br><br>
</section>