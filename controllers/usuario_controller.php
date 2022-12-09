<?php
require_once("utils/seg.php");
require_once("utils/utils.php");
require_once("models/usuario.php");
require_once("models/categoria_plato.php");
require_once("models/plato.php");
class usuario_controller
{

    public static function registro()
    {
        require_once("views/template/header.php");
        require_once("views/template/navbar.php");
        require_once("views/usuario/registro.php");
        require_once("views/template/footer.php");
    }

    public static function insertar()
    {
        if ($_POST) {
            if (!isset($_POST["token"]) ||  !seg::validaSession($_POST["token"])) {
                echo "Acceso restringido";
                exit();
            }

            empty($_POST["txtUsuario"]) ? $error[0] = "El nombre de usuario es necesario" : $usuario = $_POST["txtUsuario"];
            empty($_POST["txtCorreo"]) ? $error[1] = "El correo de contacto es necesario" : $correo = $_POST["txtCorreo"];
            empty($_POST["txtPassword"]) ? $error[2] = "El Password es obligatorio" : $password = $_POST["txtPassword"];
            !($_POST["txtPassword2"] == $_POST["txtPassword"]) ? $error[3] = "Los password no coinciden" : "";
            $nombre_contacto = $_POST["txtNombre"];
            $nombre_empresa = $_POST["txtNombreEmpresa"];
            empty($_POST["txtCuentaPaypal"]) ? $error[4] = "La cuenta de Paypal es obligatoria" : $cuenta_paypal = $_POST["txtCuentaPaypal"];


            $obj = new usuario();
            $obj->setUsuario($_POST["txtUsuario"]);
            $resultado = $obj->valida_usuario2();

            $obj = new usuario();
            $obj->setCorreo($_POST["txtCorreo"]);
            $resultado2 = $obj->valida_usuario3();

            if (count($resultado) > 0 && count($resultado2) > 0) {
                $error[0] = "El usuario ya existe";
                $error[1] = "El correo ya existe";
                $titulo = "Registro de Usuario";
                require_once("views/template/header.php");
                require_once("views/template/navbar.php");
                require_once("views/usuario/registro.php");
                require_once("views/template/footer.php");
            } elseif (count($resultado2) > 0) {
                $error[1] = "El correo ya existe";
                $titulo = "Registro de Usuario";
                require_once("views/template/header.php");
                require_once("views/template/navbar.php");
                require_once("views/usuario/registro.php");
                require_once("views/template/footer.php");
            } elseif (count($resultado) > 0) {
                $error[0] = "El usaurio ya existe";
                $titulo = "Registro de Usuario";
                require_once("views/template/header.php");
                require_once("views/template/navbar.php");
                require_once("views/usuario/registro.php");
                require_once("views/template/footer.php");
            } else {


                if (isset($error)) {
                    $titulo = "Registro de Usuario";
                    require_once("views/template/header.php");
                    require_once("views/template/navbar.php");
                    require_once("views/usuario/registro.php");
                    require_once("views/template/footer.php");
                } else {
                    $usuario = filter_var($usuario, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    $correo = filter_var($correo, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    $password = filter_var($password, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    $nombre_contacto = filter_var($nombre_contacto, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    $nombre_empresa = filter_var($nombre_empresa, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    $cuenta_paypal = filter_var($cuenta_paypal, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    $obj = new usuario();
                    $obj->setUsuario($usuario);
                    $obj->setCorreo($correo);
                    $obj->setPassword($password);
                    $obj->setNombre_contacto($nombre_contacto);
                    $obj->setNombre_restaurante($nombre_empresa);
                    $obj->setCuenta_paypal($cuenta_paypal);
                    $resultados = $obj->insertar();
                    if (isset($resultados)) {
                        utils::enviarcorreo($resultados->getCorreo(), $resultados->getId());
                        header("location:" . "index.php?c=" . seg::codificar("principal") . "&m=" . seg::codificar("mensaje") . "&msg=Se ha registrado satisfactoriamente <br>Revise su correo para activar la cuenta y continuar con el pago. <br><br>Gracias");
                    } else
                        header("location:" . "index.php?c=" . seg::codificar("principal") . "&m=" . seg::codificar("mensaje") . "&msg=No se pudo registrar, intentelo nuevamente!");
                }
            }
        }
    }

    public static function modificar()
    {
        if ($_POST) {
            if (!isset($_POST["token"]) ||  !seg::validaSession($_POST["token"])) {
                echo "Acceso restringido";
                exit();
            }

            empty($_POST["txtCorreo"]) ? $error[1] = "Ups Error" : $correo = $_POST["txtCorreo"];
            $nombre_contacto = $_POST["txtNombre"];
            $nombre_empresa = $_POST["txtNombreEmpresa"];
            empty($_POST["txtCuentaPaypal"]) ? $error[1] = "Ups Error" : $cuenta_paypal = $_POST["txtCuentaPaypal"];

            if ($_POST["txtcontranueva"] == $_POST["txtrepetircontra"]) {
            } else {
                $error[1] = "";
                $error[2] = "La contraseña no es igual";
            }

            if (empty($_POST["txtcontravieja"])) {
                $obj = new usuario();
                $obj->setUsuario($_SESSION["usuario"]);
                $resultado2 = $obj->valida_usuario2();
                $salt = $resultado2["salt"];
                $password = $resultado2["password"];
            } else {

                $obj = new usuario();
                $obj->setUsuario($_SESSION["usuario"]);
                $obj->setPassword($_POST["txtcontravieja"]);
                $resultado = $obj->valida_usuario();
                if (count($resultado) > 0) {
                    $salt = sha1(random_bytes(10));
                    $password = sha1($_POST["txtcontranueva"] . "|" . $salt);
                } else {
                    $error[1] = "Contraseña incorrecta";
                    $error[2] = "";
                }
            }


            if (isset($error)) {
                $titulo = "Registro de Usuario";
                header("location:" . "index.php?c=" . seg::codificar("principal") . "&m=" . seg::codificar("mensaje") . "&msg=" . $error[1] . $error[2]);
            } else {
                $correo = filter_var($correo, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $nombre_contacto = filter_var($nombre_contacto, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $password = filter_var($password, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $nombre_empresa = filter_var($nombre_empresa, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $cuenta_paypal = filter_var($cuenta_paypal, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                ($_FILES["imgLogo"]["size"] == 0) ?  $logo_restaurante = $_SESSION["logo_empresa"]  : $logo_restaurante = utils::subir_archivo($_FILES["imgLogo"]["tmp_name"], $_FILES["imgLogo"]["name"], "uploads");
                ($_FILES["imgFondo"]["size"] == 0) ?  $imagen_fondo = $_SESSION["imagen_fondo"]  : $imagen_fondo = utils::subir_archivo($_FILES["imgFondo"]["tmp_name"], $_FILES["imgFondo"]["name"], "uploads");

                $obj = new usuario();
                $obj->setId($_SESSION["id_usuario"]);
                $obj->setCorreo($correo);
                $obj->setPassword($password);
                $obj->setNombre_contacto($nombre_contacto);
                $obj->setSalt($salt);
                $obj->setNombre_restaurante($nombre_empresa);
                $obj->setCuenta_paypal($cuenta_paypal);
                $obj->setLogo_empresa($logo_restaurante);
                $obj->setImagen_fondo($imagen_fondo);

                $resultados = $obj->actualizar_datos_generales();

                //imagen de fondo y logo
                $id_usuario = $_SESSION["id_usuario"];
                $objUsuario  = new usuario();
                $objUsuario->setId($id_usuario);

                $datos_usuario = $objUsuario->ver_mis_datos();
                $_SESSION["logo_empresa"] = $datos_usuario["logo_empresa"];
                $_SESSION["imagen_fondo"] = $datos_usuario["imagen_fondo"];

                if (isset($resultados)) {

                    header("location:" . "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("modificar_cuenta") . "&msg=Se ha modificado satisfactoriamente su cuenta");
                } else
                    header("location:" . "index.php?c=" . seg::codificar("principal") . "&m=" . seg::codificar("mensaje") . "&msg=No se pudo actualizar, intentelo nuevamente!");
            }
        }
    }

    public static function activar()
    {
        $obj = new usuario();
        $obj->setId($_GET["s"]);
        $resultado = $obj->activar_usuario();
        if ($resultado == 1) {
            header("location:" . "index.php?c=" . seg::codificar("principal") . "&m=" . seg::codificar("mensaje") . "&msg=Ya has activado tu cuenta, puedes entrar");
        } else
            header("location:" . "index.php?c=" . seg::codificar("principal") . "&m=" . seg::codificar("mensaje") . "&msg=No se pudo activar su cuenta. Intenta más tarde");
    }

    public static function login()
    {
        require_once("views/template/header.php");
        require_once("views/template/navbar.php");
        require_once("views/usuario/login.php");
        require_once("views/template/footer.php");
    }

    public static function modificar_cuenta()
    {
        if (!isset($_SESSION["id_usuario"])) {
            header("location:" . "index.php?c=" . seg::codificar("principal") . "&m=" . seg::codificar("mensaje") . "&msg=Notiene acceso a esta pantalla, debe acceder para continuar");
            exit();
        }
        if (isset($_GET["msg"])) $msg = $_GET["msg"];
        $obj = new usuario();
        $obj->setId($_SESSION["id_usuario"]);
        $resultados = $obj->ver_mis_datos();
        require_once("views/template/header.php");
        require_once("views/template/navbar.php");
        require_once("views/usuario/modificar_cuenta.php");
        require_once("views/template/footer.php");
    }

    public static function vercodigoqr()
    {
        if (!isset($_SESSION["id_usuario"])) {
            header("location:" . "index.php?c=" . seg::codificar("principal") . "&m=" . seg::codificar("mensaje") . "&msg=Notiene acceso a esta pantalla, debe acceder para continuar");
            exit();
        }

        $url = $_SERVER["REQUEST_SCHEME"] . "://" . $_SERVER["SERVER_NAME"] . "/index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("ver_menu") . "&id=" . $_SESSION["id_usuario"];

        require_once("views/template/header.php");
        require_once("views/template/navbar.php");
        require_once("views/usuario/vercodigoqr.php");
        require_once("views/template/footer.php");
    }

    public static function pagos()
    {
        if (!isset($_SESSION["id_usuario"])) {
            header("location:" . "index.php?c=" . seg::codificar("principal") . "&m=" . seg::codificar("mensaje") . "&msg=Notiene acceso a esta pantalla, debe acceder para continuar");
            exit();
        }

        $obj = new pagos_paypal();
        $id = filter_var($_SESSION["id_usuario"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $obj->setId($id);
        $resultado = $obj->mostrarpago();

        require_once("views/template/header.php");
        require_once("views/template/navbar.php");
        require_once("views/usuario/pagos.php");
        require_once("views/template/footer.php");
    }

    public static function validar_usuario()
    {
        if ($_POST) {
            if (!isset($_POST["token"]) ||  !seg::validaSession($_POST["token"])) {
                echo "Acceso restringido";
                exit();
            }

            $obj = new usuario();
            $obj->setUsuario($_POST["txtUsuario"]);
            $obj->setPassword($_POST["txtPassword"]);
            $resultado = $obj->valida_usuario();


            if (count($resultado) > 0) {
                if ($resultado->status == "0") {
                    header("location:" . "index.php?c=" . seg::codificar("principal") . "&m=" . seg::codificar("mensaje") . "&msg=El usuario todavía no ha confirmado el correo");
                    exit();
                }

                $_SESSION["nombre_contacto"] =  $resultado["nombre_contacto"];
                $_SESSION["usuario"] = $resultado["usuario"];
                $_SESSION["correo"] = $resultado["correo"];
                $_SESSION["id_usuario"] = $resultado["_id"];
                $_SESSION["monto_pago"] = $resultado["monto_pago"];
                $_SESSION["cuenta_paypal"] = $resultado["cuenta_paypal"];
                $_SESSION["logo_empresa"] = $resultado["logo_empresa"];
                $_SESSION["imagen_fondo"] = $resultado["imagen_fondo"];
                $_SESSION["tipo_usuario"] = $resultado["tipo_usuario"];

                //Verifica Categoria
                $obj = new categoria_plato();
                $obj->set_id_usuario($_SESSION["id_usuario"]);
                $resultado1 = $obj->buscar_categoria2();

                //verifica plato
                $obj = new plato();
                $obj->set_id_usuario($_SESSION["id_usuario"]);
                $resultado2 = $obj->buscarplato();

                if (isset($resultado1)) {
                    if (count($resultado1) > 0) {
                        $_SESSION["comprobar1"] =  1;
                    } else {
                        $_SESSION["comprobar1"] =  0;
                    }
                } else {
                    $_SESSION["comprobar1"] =  0;
                }
                if (isset($resultado2["nombre_plato"])) {
                    if (count($resultado2) > 0) {
                        $_SESSION["comprobar2"] =  2;
                    } else {
                        $_SESSION["comprobar2"] =  0;
                    }
                } else {
                    $_SESSION["comprobar2"] =  0;
                }

                if (isset($_POST["chkRecordar"])) {
                    setcookie(seg::codificar("nombre"),  seg::codificar($resultado["nombre"]), time() + 40);
                    setcookie(seg::codificar("usuario"),  seg::codificar($resultado["usuario"]), time() + 40);
                }
                header("location:index.php");
            } else
                header("location:" . "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("login") . "&msg=Usuario o Contraseña Incorrectos");
        }
    }

    public static function cerrar_sesion()
    {
        session_destroy();
        header("location:index.php");
    }


    public static function ver_menu()
    {
        $id_usuario = $_GET["id"];
        $objUsuario  = new usuario();
        $objUsuario->setId($id_usuario);
        $datos_usuario = $objUsuario->ver_mis_datos();
        $nombre_empresa = $datos_usuario["nombre_restaurante"];
        $logo = $datos_usuario["logo_empresa"];
        $imagen_fondo = $datos_usuario["imagen_fondo"];
        $objcategorias = new categoria_plato();
        $objcategorias->set_id_usuario(new MongoDB\BSON\ObjectId($id_usuario));
        $lista_categoria = $objcategorias->listar_categorias();
        foreach ($lista_categoria as $l)
            $listaCat[] = $l;
        $objplatos = new plato();
        $objplatos->set_id_usuario(new MongoDB\BSON\ObjectId($id_usuario));
        $lista_plato = $objplatos->listar_platos();
        foreach ($lista_plato as $p)
            $listaPlat[] = $p;
        require_once("views/template/header.php");
        require_once("views/usuario/ver_menu.php");
        require_once("views/template/footer.php");
    }

    public static function listados()
    {
        if (!isset($_SESSION["id_usuario"])) {
            header("location:" . "index.php?c=" . seg::codificar("principal") . "&m=" . seg::codificar("mensaje") . "&msg=Notiene acceso a esta pantalla, debe acceder para continuar");
            exit();
        }

        $obj = new usuario();
        $resultado = $obj->listados();

        require_once("views/template/header.php");
        require_once("views/template/navbar.php");
        require_once("views/usuario/lista_usuario.php");
        require_once("views/template/footer.php");
    }

    public static function totales()
    {
        if (!isset($_SESSION["id_usuario"])) {
            header("location:" . "index.php?c=" . seg::codificar("principal") . "&m=" . seg::codificar("mensaje") . "&msg=Notiene acceso a esta pantalla, debe acceder para continuar");
            exit();
        }

        $obj = new pagos_paypal();
        $resultado = $obj->totales();

        require_once("views/template/header.php");
        require_once("views/template/navbar.php");
        require_once("views/usuario/pagostotal.php");
        require_once("views/template/footer.php");
    }
}
