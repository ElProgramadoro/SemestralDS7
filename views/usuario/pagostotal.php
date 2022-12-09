<!-- Banner Area Starts -->
<section class="banner-area banner-area2 blog-page text-center" style="background-image: url(assets/images/about-bg.jpg);  background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1><i>Pagos Totales</i></h1>
                <img src="" alt="">
                <a href="index.php">Inicio</a>
                <span class="mx-2">/</span>
                <a href="#">Pagos Totales</a> <br> <br>
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
                    <h3><span class="style-change">Ver lista de</span> <br> Pagos Totales</h3>
                </div>
            </div>

        </div>
        <?php
        $acumulado = 0;
        $acuimpu= 0;
        foreach ($resultado as $r) {
            $acumulado = $r->monto_pago + $acumulado;
            $nombres[] = $r->nombre_contacto;
            $usuarios[] = $r->usuario;
            $correo[] = $r->correo;
            $monto[] = $r->monto_pago;
            $cuenta_paypal[] = $r->cuenta_paypal;
            $fecha_registro[] = $r->fecha_registro;
            $impuesto[]=($r->monto_pago*0.07);
            $acuimpu= (($r->monto_pago)-($r->monto_pago*0.07))+$acuimpu;
        } ?>


        <table class="table table-bordered">
            <thead class="table-light" style="width: 100%;text-align:center;">
                <tr>

                    <th scope="col">Nombre Contacto</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Cuenta Paypal</th>
                    <th scope="col">Fecha de Pago</th>
                    <th scope="col">Monto</th>
                    <th scope="col">Impuesto</th>
                    <th scope="col">Ingresos</th>
                </tr>

            </thead>
            <tbody style="width: 100%;text-align:center">
                <div class="modal-body">
                    <?php
                    for ($i = 0; $i < count($nombres); $i++) {
                    ?>
                        <tr>
                            <td><?php echo $nombres[$i] ?></td>
                            <td><?php echo $usuarios[$i] ?></td>
                            <td><?php echo $correo[$i] ?></td>
                            <td><?php echo $cuenta_paypal[$i] ?></td>
                            <td><?php echo $fecha_registro[$i] ?></td>
                            <td><?php echo $monto[$i] ?></td>
                            <td><?php echo $impuesto[$i] ?></td>
                        </tr>
                    <?php } ?>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><?php echo $acuimpu ?></td>
                    </tr>
                </div>
            </tbody>

        </table>
    </div>
</section>
</body>
<br><br><br><br><br>