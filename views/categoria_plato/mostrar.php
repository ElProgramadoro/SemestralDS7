<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<!-- Banner Area Starts -->
<section class="banner-area banner-area2 blog-page text-center" style="background-image: url(<?php if (strlen($_SESSION["imagen_fondo"]) > 0) {
                                                                                                echo $_SESSION["imagen_fondo"];
                                                                                              } else {
                                                                                                echo "assets/images/about-bg.jpg";
                                                                                              } ?>); background-size: cover;">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1><i>Administrar Categoria</i></h1>
        <a href="index.php">Inicio</a>
        <span class="mx-2">/</span>
        <a href="#">Administrar Categoria</a> <br> <br>
        <?php
        if (strlen($_SESSION["logo_empresa"]) > 0) { ?>
          <img style="border-radius: 100px;" src="<?php echo $_SESSION["logo_empresa"] ?>" alt="" width="150px">
        <?php } ?>
      </div>
    </div>
  </div>
</section>
<!-- Banner Area End -->

<style>
  .afont {
    font-size: 20px;
  }
</style>

<section class="">
  <br><br><br>
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <div class="section-top">
          <h3><span class="style-change">Listado</span> <br> de Categorias</h3>
        </div>
      </div>
    </div>
    <?php if (isset($msg)) { ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Excelente</strong> <?php echo $msg ?>
      </div>
    <?php } ?>
    <div class="afont">
      <button class="genric-btn primary e-large" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Agregar Categoria</button>
    </div>
    <br><br>
    <table class="table" style=" margin: auto; width: 100%;text-align:center">
      <thead class="table-light" style="width: 100%;text-align:center">

        <tr>
          <th scope="col-5">Descripción</th>
          <th scope="col-5">Acciones</th>
        </tr>

      </thead>
      <tbody>
        <?php
        $i = 0;
        foreach ($resultado as $r) {
          $idarray[$i] = $r->_id;
          $nombrearray[$i] = $r->nombre_categoria;
          $i++;
        ?>

          <div class="modal fade" id="e<?php echo $r->_id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Actualizar Datos</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form method="POST" action="<?php echo "index.php?c=" . seg::codificar("categoria_plato") . "&m=" . seg::codificar("actualizar") ?>" enctype="multipart/form-data">
                    <div class="mb-3">
                      <label for="recipient-name" class="col-form-label">Descripcion</label>
                      <input type="text" class="form-control" placeholder="Descripción de Plato" name="txtDescripcion" value="<?php echo isset($r->nombre_categoria) ? $r->nombre_categoria : "" ?>">
                      <span class="text-danger"><?php echo isset($error[1]) ? $error[1] : "" ?></span>
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
            <td><?php echo $r->nombre_categoria ?></td>
            <td>
              <button class="genric-btn primary circle" type="submit" data-bs-toggle="modal" data-bs-target="#e<?php echo $r->_id; ?>" data-bs-whatever="@mdo">Modificar</button>
              <button type="button" class="genric-btn danger circle" data-bs-toggle="modal" data-bs-target="#exampleModal90<?php echo $i ?>">
                Eliminar
              </button>
            </td>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal90<?php echo $i ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog modal-sm">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Está seguro que desea eliminar la categoria? </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    Siempre puedes volver a agregarla en un futuro.
                  </div>
                  <div class="modal-footer">

                    <button type="button" class="genric-btn default" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
                    <a href="<?php echo "index.php?c=" . seg::codificar("categoria_plato") . "&m=" . seg::codificar("eliminar") . "&id=" . $r->_id ?>"><button type="button" class="genric-btn danger">Eliminar</button></a>

                  </div>
                </div>
              </div>
            </div>
          </tr>

          
        <?php } ?>
      </tbody>
    </table>


  </div>
</section>
<br><br><br><br><br><br>
<!-- Food Area End -->


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Plato</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form method="POST" action="<?php echo "index.php?c=" . seg::codificar("categoria_plato") . "&m=" . seg::codificar("insertar") ?>" enctype="multipart/form-data">

          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Descripcion</label>
            <input type="text" class="form-control" placeholder="Descripción de Plato" required name="txtDescripcion" value="<?php echo isset($precio) ? $precio : "" ?>">
            <span class="text-danger"><?php echo isset($error[1]) ? $error[1] : "" ?></span>
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