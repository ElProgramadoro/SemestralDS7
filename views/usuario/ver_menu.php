<section class="banner-area banner-area2 blog-page text-center" style="background-image: url(<?php if (strlen($imagen_fondo) > 0) { echo $imagen_fondo;}else {echo "assets/images/about-bg.jpg";}?>);  background-size: cover;">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-end justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<h1 class="mb-2 bread"><?php echo $nombre_empresa ?></h1>
				<?php
                    if (strlen($logo) > 0) { ?>
                        <img style="border-radius: 100px;" src="<?php echo $logo ?>" alt="" width="150px">
                    <?php } ?>
			</div>
		</div>
	</div>
</section>
<style>
	.food-area{

	}
	.row{
		
	}
</style>
<section class="food-area section-padding">
	<div class="container-fluid px-4">

		<div class="row">
			<?php
			foreach ($listaCat as $categoria) { ?>
				<div class="col-md-6 col-lg-4 menu-wrap" >
					<div class="heading-menu text-center ftco-animate">
						<h3><?php echo $categoria["nombre_categoria"] ?></h3>
					</div>
					<?php
					foreach ($listaPlat as $plato)
						if ((new MongoDB\BSON\ObjectId($plato->_id_categoria)) == $categoria["_id"]) { ?>

						<div class="col-md-6" style="background-color:white; border: 1px solid #ffb606; box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px; border-radius: 8px; padding: 30px 20px; width: 100%; margin:auto; ">

							<div class="single-food mt-6">
								<div class="food-img">
									<img src="<?php echo $plato["foto_plato"] ?>" class="img-fluid" alt="">
								</div>
								<div class="food-content">
									<div class="d-flex justify-content-between">
										<h5><?php echo $plato["nombre_plato"] ?></h5>
										<span class="style-change">$<?php echo $plato["precio_plato"] ?></span>
									</div>
									<p class="pt-3"><?php echo $plato["descripcion_plato"] ?></p>
								</div>
							</div>

						</div>
						<br>
					<?php } ?>
				</div>
			<?php } ?>
		</div>
</section>