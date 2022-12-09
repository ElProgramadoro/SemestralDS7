<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<!-- Banner Area Starts -->
<section class="banner-area banner-area2 blog-page text-center" style="background-image: url(<?php if (strlen($_SESSION["imagen_fondo"]) > 0) {
                                                                                                    echo $_SESSION["imagen_fondo"];
                                                                                                } else {
                                                                                                    echo "assets/images/about-bg.jpg";
                                                                                                } ?>);  background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1><i>Modificar Cuenta</i></h1>
                <img src="" alt="">
                <a href="index.php">Inicio</a>
                <span class="mx-2">/</span>
                <a href="#">Modificar Cuenta</a> <br> <br>
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
    input:focus {
        outline: none;
        border-color: rgb(19, 18, 48);
        box-shadow: 0 0 10px rgb(19, 18, 48);
    }

    label {
        font-size: 20px;
        color: rgb(19, 18, 48);
    }

    input {
        font-size: 18px;
        border-radius: 5px;
    }

    #test {
        background: rgb(0, 0, 0, 0.0);
        border-radius: 20px;
        padding: 20px;
        border: 1px solid rgb(255, 182, 6, 0.5);
        box-shadow: 0px 0px 100px 45px rgba(0, 0, 0, 0.1);

    }
</style>
<!-- Food Area starts -->

<section class="">
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="section-top">
                    <h3><span class="style-change">Modificar</span> <br> Cuenta</h3>
                </div>
            </div>
        </div>


        <form method="post" action="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("modificar") ?>" style="margin: auto; text-align: center;" enctype="multipart/form-data">

            <div id="test"> <br><br>
                <?php if (isset($msg)) { ?>

                    <div class="alert alert-success alert-dismissible fade show" role="alert" style=" margin: auto ;width: 65%;">
                        <strong></strong> <?php echo $msg ?>
                    </div>

                <?php } ?>
                <div class="section">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mt-10" style="padding-bottom: 20px;">
                                <label for="">Usuario <span class="text-danger">(*)</span></label>
                                <input style="text-align: left;" type="text" name="txtUsuario" placeholder="Usuario único"  onblur="this.placeholder = 'Usuario único'" value="<?php echo isset($resultados["usuario"]) ? $resultados["usuario"] : "" ?>" disabled class="single-input">
                            </div>
                            <div class="mt-10" style="padding-bottom: 20px;">
                                <label for="">Email <span class="text-danger">(*)</span></label>
                                <input style="text-align: left;" type="text" name="txtCorreo" placeholder="Su Email" required  onblur="this.placeholder = 'Su Email'" value="<?php echo isset($resultados["correo"]) ? $resultados["correo"] : "" ?>" class="single-input">
                            </div>
                            <div class="mt-10" style="padding-bottom: 20px;">
                                <label for="">Nombre Contacto</label>
                                <input style="text-align: left;" type="text" name="txtNombre" placeholder="Nombre de Contacto"  onblur="this.placeholder = 'Nombre de Contacto'" value="<?php echo isset($resultados["nombre_contacto"]) ? $resultados["nombre_contacto"] : "" ?>" class="single-input">
                            </div>
                            <div class="mt-10" style="padding-bottom: 20px;">
                                <label for="">Nombre Restaurante</label>
                                <input style="text-align: left;" type="text" name="txtNombreEmpresa" placeholder="Nombre Empresa"  onblur="this.placeholder = 'Nombre Empresa'" value="<?php echo isset($resultados["nombre_restaurante"]) ? $resultados["nombre_restaurante"] : "" ?>" class="single-input">
                            </div>
                            <div class="mt-10" style="padding-bottom: 20px;">
                                <label for="">Cuenta Paypal <span class="text-danger">(*)</span></label>
                                <input style="text-align: left;" type="text" name="txtCuentaPaypal" placeholder="Su Email" required onblur="this.placeholder = 'Su Email'" value="<?php echo isset($resultados["cuenta_paypal"]) ? $resultados["cuenta_paypal"] : "" ?>" class="single-input">
                                <span class="text-danger"><?php echo isset($error[4]) ? $error[1] : "" ?></span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            
                            <div class="mt-10" style="padding-bottom: 20px;">
                                <label for="">Contraseña Actual</label>
                                <input style="text-align: left;" type="text" name="txtcontravieja" placeholder="Contraseña Actual"  onblur="this.placeholder = 'Contraseña Actual'" value="" class="single-input">
                            </div>
                            <div class="mt-10" style="padding-bottom: 20px;">
                                <label for="">Contraseña Nueva</label>
                                <input style="text-align: left;" type="text" name="txtcontranueva" placeholder="Contraseña Nueva"  onblur="this.placeholder = 'Contraseña Nueva'" value="" class="single-input">
                            </div>
                            <div class="mt-10" style="padding-bottom: 20px;">
                                <label for="">Repetir Contreseña</label>
                                <input style="text-align: left;" type="text" name="txtrepetircontra" placeholder="Repetir Contreseña"  onblur="this.placeholder = 'Repetir Contreseña'" value="" class="single-input">
                            </div>
                            <div class="mt-10" style="padding-bottom: 20px;">
                                <label for="">Logo de Restaurante <span class="text-danger"></span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupFileAddon01">Subir</span>
                                    </div>
                                    <div class="custom-file">
                                        <input name="imgLogo" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" value="<?php echo isset($_SESSION["logo_empresa"]) ? $_SESSION["logo_empresa"] :  $_SESSION["logo_empresa"] ?>" accept="image/*">
                                        <label style="text-align: left;" class="custom-file-label" for="inputGroupFile01">Elije una imagen(200x200 px)</label>
                                        <span class="text-danger"><?php echo isset($error[4]) ? $error[1] : "" ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-10" style="padding-bottom: 20px;">
                                <label for="">Imagen de Fondo <span class="text-danger"></span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupFileAddon01">Subir</span>
                                    </div>
                                    <div class="custom-file">
                                        <input name="imgFondo" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" value="<?php echo isset($_SESSION["imagen_fondo"]) ? $_SESSION["imagen_fondo"] :  $_SESSION["imagen_fondo"] ?>" accept="image/*">
                                        <label style="text-align: left;" class="custom-file-label" for="inputGroupFile01">Elije una imagen(1920x480 px)</label>
                                        <span class="text-danger"><?php echo isset($error[4]) ? $error[1] : "" ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="token" value="<?php echo seg::getToken() ?>">
                <br><br>
                <button style="font-size: 20px;" class="genric-btn primary" type="submit">Actualizar</button>
                <br><br><br>
            </div>
        </form>




    </div>
</section>
<br><br><br><br><br><br><br><br><br>
<!-- Food Area End -->