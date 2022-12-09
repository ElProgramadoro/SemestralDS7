<!-- Banner Area Starts -->
<section class="banner-area banner-area2 blog-page text-center" style="background-image: url(assets/images/about-bg.jpg);  background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1><i>Usuarios</i></h1>
                <img src="" alt="">
                <a href="index.php">Inicio</a>
                <span class="mx-2">/</span>
                <a href="#">Usuarios</a> <br> <br>
            </div>
        </div>
    </div>
</section>
<!-- Banner Area End -->
<br><br><br><br>
<section class="">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="section-top">
                    <h3><span class="style-change">Ver lista de</span> <br> Usuarios</h3>
                </div>
            </div>

        </div>

        <table class="table table-bordered">
            <thead class="table-light" style="width: 100%;text-align:center;">
                <tr>
                    
                    <th scope="col">Usuario</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Contraseña</th>
                    <th scope="col">Contacto</th>
                    <th scope="col">Tipo Usuario</th>
                    <th scope="col">Fecha Registro</th>
                    <th scope="col">Monto Pago</th>
                    <th scope="col">Status</th>
                    <th scope="col">Cuenta Paypal</th>
                </tr>

            </thead>
            <tbody style="width: 100%;text-align:center">
                <div class="modal-body">
                    <?php
                    foreach ($resultado as $r) {
                    ?>
                        <tr>
                            <td><?php echo $r->usuario ?></td>
                            <td><?php echo $r->correo ?></td>
                            <td><?php echo $r->password ?></td>
                            <td><?php echo $r->nombre_contacto ?></td>
                            <td><?php echo $r->tipo_usuario ?></td>
                            <td><?php echo $r->fecha_registro ?></td>
                            <td><?php echo $r->monto_pago ?></td>
                            <td><?php echo $r->status ?></td>
                            <td><?php echo $r->cuenta_paypal ?></td>
                        </tr>
                    <?php } ?>
                </div>
            </tbody>

        </table>
    </div>
</section>
</body>
<br><br><br><br><br>