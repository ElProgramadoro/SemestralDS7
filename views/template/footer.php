<footer class="text-white text-center text-lg-start" style="background-color:#f9f9ff">
    <!-- Grid container -->
    <div class="container p-4">
        <!--Grid row-->
        <div class="row mt-4">
            <style>
                .custom-search {
                    position: relative;
                    width: 300px;
                }

                .custom-search-input {
                    width: 100%;
                    border: 1px solid #ccc;
                    border-radius: 10px;
                    padding: 10px 100px 10px 20px;
                    line-height: 1;
                    box-sizing: border-box;
                    outline: none;
                }

                .custom-search-botton {
                    position: absolute;
                    right: 3px;
                    top: 3px;
                    bottom: 3px;
                    border: 0;
                    background: #ffb606;
                    color: #fff;
                    outline: none;
                    margin: 0;
                    padding: 0 10px;
                    border-radius: 10px;
                    z-index: 2;
                }
            </style>
            <!--Grid column-->
            <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-4 " style="color:black; text-align:left">Acerca de nuestra Compañia</h5>

                <p style="color:black; text-align:justify">
                    KingDom Somos una empresa especializada en la creación de sistemas para oficinas o negocios, buscando siempre que nuestros clientes le saquen el maximo potencial a su negocios.
                </p>

                <p style="color:black; text-align:justify">
                    Es nuestra prioridad principal la conformidad de nuestros usuarios de cara al uso y manejo del sistema.
                </p>

                <div class="mt-4" style="padding-right: 10px">
                    <!-- Facebook -->
                    <a type="button" class="btn btn-floating btn-light btn-lg" style="background-color:black"><i class="bi bi-facebook"></i></a>
                    <!-- Whatsapp -->
                    <a type="button" class="btn btn-floating btn-light btn-lg" style="background-color:black"><i class="bi bi-whatsapp"></i></a>
                    <!-- Twitter -->
                    <a type="button" class="btn btn-floating btn-light btn-lg" style="background-color:black"><i class="bi bi-twitter"></i></a>
                    <!-- Instagram -->
                    <a type="button" class="btn btn-floating btn-light btn-lg" style="background-color:black"><i class="bi bi-instagram"></i></a>
                    <!-- TikTok -->
                    <a type="button" class="btn btn-floating btn-light btn-lg" style="background-color:black"><i class="bi bi-tiktok"></i></a>
                </div>
            </div>
            <!--Grid column-->



            <!--Grid column-->
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0" style="padding-left: 30px; ">
                <h5 class="text-uppercase mb-4 pb-1" style="color:black">Quieres darnos tu Opinión, escribenos un correo :3</h5>

                <div class="custom-search" style="margin: auto">

                    <form action="<?php echo "index.php?c=" . seg::codificar("subscripcion") . "&m=" . seg::codificar("registrar") ?>" class="subscribe-form" method="POST">
                        <input type="text" required class="custom-search-input" placeholder="Introduzca su correo" name="txtEmail">
                        <input type="hidden" name="token" value="<?php echo seg::getToken() ?>">
                        <button value="Suscribirse" class="custom-search-botton" type="submit">Contactanos</button>
                    </form>
                </div> <br>

                <ul class="fa-ul" style="padding-left:22px; margin: 15px; color:black; text-align:justify">
                    <li class="mb-3">
                        <span class="fa-li"><i class="bi bi-house-heart"></i></span><span class="ms-2">Campus Victor Levi Sasso,Ancón, Panamá., Vía Centenario, Panamá</span>
                    </li>
                    <li class="mb-3">
                        <span class="fa-li"><i class="bi bi-envelope-heart-fill"></i></span><span class="ms-2">contacto@kingdomqr.com</span>
                    </li>
                    <li class="mb-3">
                        <span class="fa-li"><i class="bi bi-telephone-fill"></i></span><span class="ms-2">+507 6161-6166</span>
                    </li>
                </ul>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-4" style="color:black">Horarios de atención</h5>

                <table class="table text-center text-white" style="color: black;">
                    <tbody class="fw-normal" style="color: black;">
                        <tr>
                            <td>Lunes - Martes:</td>
                            <td>8am - 9pm</td>
                        </tr>
                        <tr>
                            <td>Miercoles - Jueves:</td>
                            <td>8am - 1am</td>
                        </tr>
                        <tr>
                            <td>Viernes:</td>
                            <td>9am - 10pm</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/">KingDomQR.com</a>
    </div>
    <!-- Copyright -->
</footer>


<!-- End of .container -->

<!-- Javascript -->
<script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="assets/js/vendor/jquery-2.2.4.min.js"></script>

<script src="assets/js/vendor/wow.min.js"></script>
<script src="assets/js/vendor/owl-carousel.min.js"></script>
<script src="assets/js/vendor/jquery.nice-select.min.js"></script>
<script src="assets/js/main.js"></script>



</body>

</html>