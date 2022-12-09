    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Banner Area Starts -->
    <section class="banner-area banner-area2 blog-page text-center" style="background-image: url(<?php if (strlen($_SESSION["imagen_fondo"]) > 0) { echo $_SESSION["imagen_fondo"];}else {echo "assets/images/about-bg.jpg";}?>);  background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1><i>Administrar Platos</i></h1>
                    <a href="index.php">Inicio</a>
                    <span class="mx-2">/</span>
                    <a href="#">Administrar Platos</a> <br><br>
                    <?php
                    if (strlen($_SESSION["logo_empresa"]) > 0) { ?>
                        <img style="border-radius: 100px;" src="<?php echo $_SESSION["logo_empresa"] ?>" alt="" width="150px">
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->
    <?php
    $i = 1;
    foreach ($lista_categoria as $r) {

        $idarray[$i] = $r->_id;
        $nombrearray[$i] = $r->nombre_categoria;
        $i = $i + 1;
    }
    ?>
    <!-- Food Area starts -->
    <br><br><br>
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="section-top">
                        <h3><span class="style-change">Listado de </span> <br> Platos</h3>
                    </div>
                </div>

            </div>

            <?php if (isset($msg)) { ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Excelente</strong> <?php echo $msg ?>
                </div>
            <?php } ?>
            <button class="genric-btn primary e-large" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Agregar Plato</button>
            <br><br>

            <table class="table">
                <thead class="table-light" style="width: 100%;text-align:center">

                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Fecha Creacion</th>
                        <th scope="col">Fecha Actualizacion</th>
                        <th scope="col">Acciones</th>
                    </tr>

                </thead>
                <tbody style="width: 100%;text-align:center">
                    <?php foreach ($resultado as $r) { ?>

                        <div class="modal fade" id="e<?php echo $r->_id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Actualizar Datos</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="<?php echo "index.php?c=" . seg::codificar("plato") . "&m=" . seg::codificar("actualizar") ?>" enctype="multipart/form-data">
                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Nombre</label>
                                                <input type="text" class="form-control" placeholder="Nombre de Plato" name="txtNombre" value="<?php echo isset($r->nombre_plato) ? $r->nombre_plato : "" ?>">
                                                <span class="text-danger"><?php echo isset($error[0]) ? $error[0] : "" ?></span>
                                            </div>
                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Descripcion</label>
                                                <input type="text" class="form-control" placeholder="Descripción de Plato" name="txtDescripcion" value="<?php echo isset($r->descripcion_plato) ? $r->descripcion_plato : "" ?>">
                                                <span class="text-danger"><?php echo isset($error[1]) ? $error[1] : "" ?></span>
                                            </div>
                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Precio</label>
                                                <input type="text" class="form-control" placeholder="Descripción de Plato" name="txtPrecio" value="<?php echo isset($r->precio_plato) ? $r->precio_plato : "" ?>">
                                                <span class="text-danger"><?php echo isset($error[1]) ? $error[1] : "" ?></span>
                                            </div>
                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Categoria <span class="text-danger">(*)</span></label>
                                                <select class="form-control" aria-label="Default select example" name="lstCategoria">
                                                    <?php
                                                    for ($i = 1; $i < count($nombrearray) + 1; $i++) {
                                                        echo $i;
                                                    ?>
                                                        <option value="<?php echo $idarray[$i] ?>"><?php echo $nombrearray[$i] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <input type="hidden" name="_id" value="<?php echo $r->_id; ?>">
                                                <input type="hidden" name="token" value="<?php echo seg::getToken() ?>">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="genric-btn default" data-bs-dismiss="modal">Salir</button>
                                                <button type="submit" class="genric-btn primary">Actualizar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <tr>
                            <td><?php echo $r->nombre_plato ?></td>
                            <td><?php echo $r->descripcion_plato ?></td>
                            <td>$<?php echo $r->precio_plato ?></td>
                            <td><img src="<?php echo $r->foto_plato ?>" alt="" style="width:100px"></td>
                            <td><?php echo $r->fecha_creacion ?></td>
                            <td><?php echo $r->fecha_actualizacion ?></td>

                            <td>
                                <button class="genric-btn primary circle" type="submit" data-bs-toggle="modal" data-bs-target="#e<?php echo $r->_id; ?>" data-bs-whatever="@mdo">Modificar</button>
                                <a href="<?php echo "index.php?c=" . seg::codificar("plato") . "&m=" . seg::codificar("eliminar") . "&id=" . $r->_id ?>" class="genric-btn danger circle">Eliminar</a>

                            </td>

                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>
    </section>
    <br><br><br><br><br><br>





    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Plato</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form method="POST" action="<?php echo "index.php?c=" . seg::codificar("plato") . "&m=" . seg::codificar("insertar") ?>" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nombre</label>
                            <input type="text" class="form-control" placeholder="Nombre de Plato" name="txtNombre" value="<?php echo isset($nombre) ? $nombre : "" ?>">
                            <span class="text-danger"><?php echo isset($error[0]) ? $error[0] : "" ?></span>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Descripcion</label>
                            <input type="text" class="form-control" placeholder="Descripción de Plato" name="txtDescripcion" value="<?php echo isset($precio) ? $precio : "" ?>">
                            <span class="text-danger"><?php echo isset($error[1]) ? $error[1] : "" ?></span>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Precio</label>
                            <input type="text" class="form-control" placeholder="Descripción de Plato" name="txtPrecio" value="<?php echo isset($precio) ? $precio : "" ?>">
                            <span class="text-danger"><?php echo isset($error[1]) ? $error[1] : "" ?></span>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Categoria <span class="text-danger">(*)</span></label>
                            <select class="form-control" aria-label="Default select example" name="lstCategoria">
                                <?php
                                for ($i = 1; $i < count($nombrearray) + 1; $i++) {
                                    echo $i;
                                ?>
                                    <option value="<?php echo $idarray[$i] ?>"><?php echo $nombrearray[$i] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Foto <span class="text-danger">(*)</span></label>
                            <input type="file" class="form-control" placeholder="Foto de Plato" name="txtFoto" accept="image/*">
                        </div>
                        <div class="mb-3">
                            <input type="hidden" name="token" value="<?php echo seg::getToken() ?>">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Salir</button>
                            <button type="submit" class="genric-btn primary">Agregar</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>

    <!-- Food Area End -->