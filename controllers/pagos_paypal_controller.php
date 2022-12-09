<?php
require_once("utils/seg.php");
require_once("models/pagos_paypal.php");
class pagos_paypal_controller
{
    public static function registar_notificacion()
    {
        $pagos = new pagos_paypal();
        $pagos->registrar($_POST);
    }


    public static function retorno()
    {
        $nombre_contacto =  $_GET["n"];
        $usuario = $_GET["u"];
        $correo = $_GET["co"];
        $id_usuario = $_GET["id"];
        $monto_pago = $_GET["mo"];
        $cuenta_paypal = $_GET["cu"];
        //verifica plato
        $obj = new pagos_paypal();
        $obj->setNombre_contacto($nombre_contacto);
        $obj->setUsuario($usuario);
        $obj->setCorreo($correo);
        $obj->setId($id_usuario);
        $obj->setMonto_pago($monto_pago);
        $obj->setCuenta_paypal($cuenta_paypal);
        $resultado2 = $obj->registrar2();
        if(isset($resultado2)){
            header("location:" . "index.php?c=" . seg::codificar("principal") . "&m=" . seg::codificar("mensaje") . "&msg=Gracias por su pago, su cuenta se ha actualizado satisfactoriamente!!<br>Debes inicar sesion nuevamente para que los cambos sean aplicados");
        }else{
            header("location:" . "index.php?c=" . seg::codificar("principal") . "&m=" . seg::codificar("mensaje") . "&msg=Ups Hubo un error vuelva a intentarlo mas tarde");

        }


    }

    public static function cancelar()
    {
        header("location:" . "index.php?c=" . seg::codificar("principal") . "&m=" . seg::codificar("mensaje") . "&msg=Has cancelado tu compra!!");
    }
}
