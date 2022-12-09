<?php if (!isset($_SESSION["id_usuario"])) { ?>
    <!-- Banner Area Starts -->
    <section class="banner-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6>La forma más sencilla de crear tu menú</h6>
                    <h1>Descubre <span class="prime-color">KingDom QR</span><br>
                        <span class="style-change">y <span class="prime-color">mejora tu </span>resturante</span>
                    </h1>
                    <a href="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("registro") ?>" class="genric-btn primary e-large">
                        <h3>$49.99</h3>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    <!-- Welcome Area Starts -->
    <section class="welcome-area section-padding2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <div class="welcome-img">
                        <img src="assets/images/welcome-bg.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-6 align-self-center">
                    <div class="welcome-text mt-5 mt-md-0">
                        <h3><span class="style-change">Bienvenido</span> <br>a KingDom QR</h3>
                        <p class="pt-3">Mejore la experiencia de sus huéspedes con las soluciones KingDom QR. Deje que sus clientes vean el menú digital de su marca. Su personal tendrá más tiempo para la hospitalidad. KingDom QR le da a sus clientes la visión de todo lo que usted puede ofrecer, con un solo clic en su dispositivo movil.</p>
                        <a href="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("registro") ?>" class="template-btn mt-3">Registrate Ya!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Welcome Area End -->

    <!-- Food Area starts -->
    <section class="food-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="section-top">
                        <h3><span class="style-change">Su menú</span> <br> Se verá asi</h3>
                        <p class="pt-3">Sus comensales verán una moderna interfaz desarrollada especificamente para mostrar el atractivo de sus platos y que el cliente experimente la facilidad de observar su menú.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="single-food">
                        <div class="food-img">
                            <img src="assets/images/food1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>Mexican Eggrolls</h5>
                                <span class="style-change">$14.50</span>
                            </div>
                            <p class="pt-3">Disfruta de un sabor ligero al igual que su contenido que acompaña perfectamente un ambiente sobrio. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-food mt-5 mt-sm-0">
                        <div class="food-img">
                            <img src="assets/images/food2.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>Chicken burger</h5>
                                <span class="style-change">$9.50</span>
                            </div>
                            <p class="pt-3">Una mezcla de sabores intensos y una jugosidad de la mejor calidad y precio en su maximo esplendor.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-food mt-5 mt-md-0">
                        <div class="food-img">
                            <img src="assets/images/food3.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>Topu lasange</h5>
                                <span class="style-change">$12.50</span>
                            </div>
                            <p class="pt-3">Cubierto de frutas a primera vista, esconde la mayor de las dulzuras, es asi como da la impresion este curioso postre.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-food mt-5">
                        <div class="food-img">
                            <img src="assets/images/food4.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>Pepper potatoas</h5>
                                <span class="style-change">$14.50</span>
                            </div>
                            <p class="pt-3">Con un leve sabor amargo y sus finos ingredientes cada bocado hara que se te deshaga la boca.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-food mt-5">
                        <div class="food-img">
                            <img src="assets/images/food5.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>Bean salad</h5>
                                <span class="style-change">$8.50</span>
                            </div>
                            <p class="pt-3">Una ensalada especial con distintiva variedad de nutrientes perfectas e ideal para ser un acompañamiento.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-food mt-5">
                        <div class="food-img">
                            <img src="assets/images/food6.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>Beatball hoagie</h5>
                                <span class="style-change">$11.50</span>
                            </div>
                            <p class="pt-3">Entre la variedad se encuentra una entrada especial un conjunto de albondigas y vegetales son la clave para ser una entrada.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Food Area End -->

    <!-- Reservation Area Starts -->
    <div class="reservation-area section-padding text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Ingredientes naturales y comida sabrosa</h2>
                    <h4 class="mt-4">Una manera muy convencional de administrar tus menus</h4>
                    <a href="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("registro") ?>" class="template-btn template-btn2 mt-4">Registrar</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Reservation Area End -->


    <!-- Testimonial Area Starts -->
    <section class="testimonial-area section-padding4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top2 text-center">
                        <h3>Los Clientes <span>dicen</span></h3>
                        <p><i>"Con la barriga vacia, ninguno muestra alegria."</i></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-slider owl-carousel">
                        <div class="single-slide d-sm-flex">
                            <div class="customer-img mr-4 mb-4 mb-sm-0">
                                <img src="assets/images/customer1.png" alt="">
                            </div>
                            <div class="customer-text">
                                <h5>Anthony Nesane</h5>
                                <span><i>Cliente Frecuente</i></span>
                                <p class="pt-3" style="text-align: justify;">KingDomQRm me ha ayudado a poder crear los menus del restaurante de una manera muy sencilla y eficaz facilitando la intereaccion entre el cliente y el restaurante.
                                    .</p>
                            </div>
                        </div>
                        <div class="single-slide d-sm-flex">
                            <div class="customer-img mr-4 mb-4 mb-sm-0">
                                <img src="assets/images/customer4.png" alt="">
                            </div>
                            <div class="customer-text">
                                <h5>Jacquelyn Kennedy</h5>
                                <span><i>Clienta Frecuente</i></span>
                                <p class="pt-3" style="text-align: justify;">Jamas pense que KingDomQR me facilitaria y ahorraria tanto trabajo al implementarlo en mi restaurante. No puedo expresar con palabras lo feliz que estoy de haberme registrado.</p>
                            </div>
                        </div>
                        <div class="single-slide d-sm-flex">
                            <div class="customer-img mr-4 mb-4 mb-sm-0">
                                <img src="assets/images/customer2.png" alt="">
                            </div>
                            <div class="customer-text">
                                <h5>Andres Nahan</h5>
                                <span><i>Cliente Frecuente</i></span>
                                <p class="pt-3" style="text-align: justify;">Antes de usar KingDomQR, sufria de mucho estres por la forma en que manejaba el menu de mi restaurante hasta tal punto que me quede calvo, pero, KingDomQR me ha aliviado ese estres por su increible logistica y sencillez.</p>
                            </div>
                        </div>
                        <div class="single-slide d-sm-flex">
                            <div class="customer-img mr-4 mb-4 mb-sm-0">
                                <img src="assets/images/customer33.png" alt="">
                            </div>
                            <div class="customer-text">
                                <h5>Esther Patinson</h5>
                                <span><i>Clienta Frecuente</i></span>
                                <p class="pt-3" style="text-align: justify;">Mi marido y yo no teniamos ni idea de como crear un menu para nuestro restaurante que esta iniciando, y por casualidad descubrimos KingDomQR y sentimos que ha sido la mejor decision que hemos tomado.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Area End -->



    <?php } else {
    if ($_SESSION["tipo_usuario"] == 1) {

    ?>

        <style>
            #link {
                color: black;
                text-decoration: none;
            }
        </style>
        <!-- Food Area starts -->
        <style>
            .food-img {
                -webkit-filter: grayscale(100%);
                filter: grayscale(90%);
            }
        </style>
        <!-- Banner Area Starts -->
        <section class="banner-area banner-area2 blog-page text-center" style=" background-image: url(assets/images/about-bg.jpg); background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1><i>Bienvenido Administrador <?php echo $_SESSION["usuario"] ?></i></h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner Area End -->
        <section class="food-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="section-top">
                            <h3><span class="style-change">Apartado</span> <br> de Administración</h3>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-4 col-sm-6">
                        <a id="link" href="<?php echo "index.php?c=" . seg::codificar("subscripcion") . "&m=" . seg::codificar("subscripciones") ?>">
                            <div class="single-food mt-5">
                                <div class="food-img">
                                    <img src="assets/images/programador.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="food-content">
                                    <div class="d-flex justify-content-between">
                                        <h5>Listado de Suscripciones</h5>

                                    </div>
                                    <p class="pt-3">Aquí podrás ver todas las sucripciones que han llegado, mostrando todos los correos y la fecha de creacion.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <a id="link" href="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("listados") ?>">
                            <div class="single-food mt-5">
                                <div class="food-img">
                                    <img src="assets/images/categoria.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="food-content">
                                    <div class="d-flex justify-content-between">
                                        <h5>Listado de Usuarios</h5>

                                    </div>
                                    <p class="pt-3">Aqui podras ver todos los usuarios con sus datos personales de forma ordenada y simple en una tabla.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <a id="link" href="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("totales") ?>">
                            <div class="single-food mt-5">
                                <div class="food-img">
                                    <img src="assets\images\tarjeta-de-debito.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="food-content">
                                    <div class="d-flex justify-content-between">
                                        <h5>Listado de Pagos</h5>
                                    </div>
                                    <p class="pt-3">Aqui podras ver todos los pagos de los usuarios con sus datos de forma ordenada y simple.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Food Area End -->

    <?php

    } else {


    ?>

        <?php if ($_SESSION["monto_pago"] == 0) { ?>
            <!-- Banner Area Starts -->
            <section class="banner-area banner-area2 blog-page text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1><i>Realiza el pago</i></h1>
                            <a href="index.php">Inicio</a>
                            <span class="mx-2">/</span>
                            <a href="#">Pagos</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Banner Area End -->
            <section class="food-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="section-top">
                                <h3><span class="style-change">Hola</span> <br><?php echo $_SESSION["nombre_contacto"] ?></h3>
                            </div>
                        </div>
                    </div>
                    <h3>Ya solo te falta un paso más, realiza el pago utilizando Paypal.</h3><br>
                    <form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_xclick">
                        <input type="hidden" name="business" value="sb-xqary15328486@business.example.com">
                        <input type="hidden" name="item_name" value="Suscripción Pago único de QRMEnus.com">
                        <input type="hidden" name="item_number" value="cod00001">
                        <input type="hidden" name="amount" value="49.99">
                        <input type="hidden" name="tax" value="0">
                        <input type="hidden" name="quantity" value="1">
                        <input type="hidden" name="currency_code" value="USD">
                        <input type="hidden" name="country" value="PA">
                        <input type="hidden" name="return" value="<?php echo  $_SERVER["REQUEST_SCHEME"] . "://" .
                                                                        $_SERVER["SERVER_NAME"] . "/index.php?c=" . seg::codificar("pagos_paypal") . "&m=" . seg::codificar("retorno") . "&n=" . $_SESSION["nombre_contacto"] . "&u=" . $_SESSION["usuario"] .
                                                                        "&co=" . $_SESSION["correo"] . "&id=" . $_SESSION["id_usuario"] . "&mo=49.99" . "&cu=" . $_SESSION["cuenta_paypal"] ?>">
                        <input type='hidden' name='notify_url' value="<?php echo  $_SERVER["REQUEST_SCHEME"] . "://" . $_SERVER["SERVER_NAME"] . "/index.php?c=" . seg::codificar("pagos_paypal") . "&m=" . seg::codificar("registar_notificacion") ?>">
                        <input type='hidden' name='cancel_return' value="<?php echo  $_SERVER["REQUEST_SCHEME"] . "://" . $_SERVER["SERVER_NAME"] . "/index.php?c=" . seg::codificar("pagos_paypal") . "&m=" . seg::codificar("cancelar") ?>">
                        <input type="submit" name="submit" value="Pagar con Paypal 49.99 " class="btn btn-warning text-light">
                    </form>

                    <br>
                    <p>(*) Al dar clic en el botón saldrás hacia el sitio de paypal, pero luego podras regresar y tu cuenta ya estará activa.</p><br>
                    <br>





                </div>
            </section>
        <?php } else { ?>

            <style>
                #link {
                    color: black;
                    text-decoration: none;
                }
            </style>
            <!-- Food Area starts -->
            <style>
                .food-img {
                    -webkit-filter: grayscale(100%);
                    filter: grayscale(90%);
                }
            </style>
            <!-- Banner Area Starts -->
            <section class="banner-area banner-area2 blog-page text-center" style=" background-image: url(<?php if (strlen($_SESSION["imagen_fondo"]) > 0) {
                                                                                                                echo $_SESSION["imagen_fondo"];
                                                                                                            } else {
                                                                                                                echo "assets/images/about-bg.jpg";
                                                                                                            } ?>); background-size: cover;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1><i>Bienvenido <?php echo $_SESSION["usuario"] ?></i></h1>
                            <?php
                            if (strlen($_SESSION["logo_empresa"]) > 0) { ?>
                                <img style="border-radius: 100px;" src="<?php echo $_SESSION["logo_empresa"] ?>" alt="" width="200px">
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </section>
            <!-- Banner Area End -->
            <section class="food-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="section-top">
                                <h3><span class="style-change">Administra</span> <br> tu cuenta</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-4 col-sm-6">
                            <a id="link" href="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("modificar_cuenta") ?>">
                                <div class="single-food mt-5">
                                    <div class="food-img">
                                        <img src="assets/images/programador.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="food-content">
                                        <div class="d-flex justify-content-between">
                                            <h5>Actualizar mis Datos</h5>

                                        </div>
                                        <p class="pt-3">Aquí podrás ver tu usuario, correo y demás información sobre tu cuenta, podrás cambiar tu contraseña, logo de restaurante y la imagen de fondo.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <a id="link" href="<?php echo "index.php?c=" . seg::codificar("categoria_plato") . "&m=" . seg::codificar("mostrar") ?>">
                                <div class="single-food mt-5">
                                    <div class="food-img">
                                        <img src="assets/images/categoria.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="food-content">
                                        <div class="d-flex justify-content-between">
                                            <h5>Categorías de Platos</h5>

                                        </div>
                                        <p class="pt-3">Personaliza el menú de tu restaurante a tu estilo, aquí podrás añadir y categorizar los platillos de tu restaurante de las maneras más cómodas.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php
                        if ($_SESSION["comprobar1"] ==  1) {
                        ?>
                            <div class="col-md-4 col-sm-6">
                                <a id="link" href="<?php echo "index.php?c=" . seg::codificar("plato") . "&m=" . seg::codificar("mostrar") ?>">
                                    <div class="single-food mt-5">
                                        <div class="food-img">
                                            <img src="assets/images/cordero.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="food-content">
                                            <div class="d-flex justify-content-between">
                                                <h5>Administrar Platos</h5>
                                            </div>
                                            <p class="pt-3">Agrega los platos de la carta de tu restaurante, establece los nombres, descripciones, precios e imagenes de todas las delicias que tienes para ofrecer.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php
                        }
                        ?>
                        <?php
                        if ($_SESSION["comprobar1"] ==  1 && $_SESSION["comprobar2"] ==  2) {
                        ?>
                            <div class="col-md-4 col-sm-6">
                                <a id="link" href="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("ver_menu") . "&id=" . $_SESSION["id_usuario"] ?>" target="_blank">
                                    <div class="single-food mt-5">
                                        <div class="food-img">
                                            <img src="assets/images/menu.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="food-content">
                                            <div class="d-flex justify-content-between">
                                                <h5>Ver Menú</h5>
                                            </div>
                                            <p class="pt-3">Ya categorizaste todo? Fantastico! Mira cómo se ven tus platillos en la plataforma, con un menú simple pero informativo, tus clientes quedarán encantados.</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4 col-sm-6">
                                <a id="link" href="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("vercodigoqr") ?>">
                                    <div class="single-food mt-5">
                                        <div class="food-img">
                                            <img src="assets/images/codigo-qr.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="food-content">
                                            <div class="d-flex justify-content-between">
                                                <h5>Ver Código QR</h5>
                                            </div>
                                            <p class="pt-3">Gracias a la tecnología de KingDomQR, podrás generar un código QR personalizado para ofrecerle a tus comensales para que puedan visualizar el menú de tu restaurante.</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php
                        }
                        ?>
                        <div class="col-md-4 col-sm-6">
                            <a id="link" href="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("pagos") ?>">
                                <div class="single-food mt-5">
                                    <div class="food-img">
                                        <img src="assets\images\tarjeta-de-debito.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="food-content">
                                        <div class="d-flex justify-content-between">
                                            <h5>Ver Pago</h5>
                                        </div>
                                        <p class="pt-3">Lleva la contabilidad de tu empresa gracias a los pagos que hagan mediante PayPal, podrás comparar los datos en nuestra pagina con las transacciones de PayPal.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Food Area End -->

<?php }
    }
} ?>