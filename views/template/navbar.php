<body>
    <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->

    <!-- Header Area Starts -->
	<header class="header-area header-area2">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo-area">
                        <a href="index.php"><img src="assets/images/logo/logo2.png" alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="custom-navbar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>  
                    <div class="main-menu main-menu2">
                        <ul>
                            <li class="active"><a href="index.php">Inicio</a></li>
                            <?php if (!isset($_SESSION["id_usuario"])) { ?>
					<li class="nav-item"><a href="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("login") ?>" class="nav-link">Entrar</a></li>
					<li class="nav-item cta"><a href="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("registro") ?>" class="genric-btn primary small">Registro</a></li>
				<?php } else { ?>
					<li class="nav-item"><a href="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("cerrar_sesion") ?>" class="nav-link">Cerrar Sesion</a></li>
				<?php }  ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->