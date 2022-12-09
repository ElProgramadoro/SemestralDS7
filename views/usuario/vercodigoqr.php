   <!-- Banner Area Starts -->
   <section class="banner-area banner-area2 blog-page text-center" style="background-image: url(<?php if (strlen($_SESSION["imagen_fondo"]) > 0) {
																									echo $_SESSION["imagen_fondo"];
																								} else {
																									echo "assets/images/about-bg.jpg";
																								} ?>);  background-size: cover;">
   	<div class="container">
   		<div class="row">
   			<div class="col-lg-12">
   				<h1><i>Ver Código QR</i></h1>
   				<a href="index.html">Inicio</a>
   				<span class="mx-2">/</span>
   				<a href="elements.html">Ver Código QR</a> <br> <br>
   				<?php
					if (strlen($_SESSION["logo_empresa"]) > 0) { ?>
   					<img style="border-radius: 100px;" src="<?php echo $_SESSION["logo_empresa"] ?>" alt="" width="150px">
   				<?php } ?>
   			</div>
   		</div>
   	</div>
   </section>
   <!-- Banner Area End -->
   <br><br><br>
   <section class="">
   	<div class="container">
   		<div class="row">
   			<div class="col-md-5">
   				<div class="section-top">
   					<h3><span class="style-change">Tu QR KingDom es el siguiente,</span> <br> Disfrutalo!</h3>
   				</div>
   			</div>
   			<p><?php echo "<br>" ?></p>
   			<div class="container" style="text-align: center;">
   				<img src="<?php echo utils::generarqr($url) ?>" alt="">
   				<br><a href="<?php echo utils::generarqr($url) ?>" target="_blank"><button type="button" style="font-size: 20px;" class="genric-btn primary">Descargar</button></a>
   			</div>

   		</div>
   	</div>
   	</div>
   	</div>
   </section>
   <br><br>  <br><br>  <br><br>  <br><br>  <br><br>  <br><br>  <br><br>