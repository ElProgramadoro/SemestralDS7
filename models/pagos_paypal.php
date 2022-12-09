<?php
require_once("utils/bd.php");
require_once("models/usuario.php");

class pagos_paypal
{
    private $id;
    private $usuario;
    private $correo;
    private $nombre_contacto;
    private $monto_pago;
    private $cuenta_paypal;
    public function registrar($_peticion)
    {
        $conexion = bd::connection();
        $coleccion = $conexion->pagos_paypal;
        try {
            $resultados = $coleccion->insertOne($_peticion);
            $coleccion = $conexion->usuario;
            try {
                $resultados = $coleccion->updateOne(
                    ["cuenta_paypal" => $_peticion["payer_email"]],
                    ['$set' => [
                        "monto_pago" => $_peticion["payment_gross"]
                    ]]
                );
                $_SESSION["monto_pago"] = $_peticion["payment_gross"];
                return $resultados->getModifiedCount();
            } catch (Exception $e) {
                return 0;
            }
        } catch (Exception $e) {
        }
    }
    public function registrar2()
    {
        $conexion = bd::connection();
        $coleccion = $conexion->pagos_paypal2;
        try {
            $resultados = $coleccion->insertOne([
                "nombre_contacto" => $this->nombre_contacto,
                "usuario" => $this->usuario,
                "correo" => $this->correo,
                "id_usuario" => $this->id,
                "monto_pago" => $this->monto_pago,
                "cuenta_paypal" => $this->cuenta_paypal,
                "fecha_registro" => date("Y-m-d")
            ]);
        } catch (Exception $e) {
        }
        $coleccion = $conexion->usuario;
        try {
            $resultados = $coleccion->updateOne(
                ["_id" => new MongoDB\BSON\ObjectId($this->id)],
                ['$set' => [
                    "monto_pago" => "49.99"
                ]]
            );
            return $resultados->getModifiedCount();
        } catch (Exception $e) {
            return 0;
        }
    }

    public function mostrarpago()
    {
        $conexion = bd::connection();
        $coleccion = $conexion->pagos_paypal2;
        $resultado = $coleccion->find(["id_usuario" => $this->id]);
        return $resultado;
    }
    public function totales()
    {
        $conexion = bd::connection();
        $coleccion = $conexion->pagos_paypal2;
        $resultado = $coleccion->find();
        return $resultado;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set the value of usuario
     *
     * @return  self
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get the value of correo
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Set the value of correo
     *
     * @return  self
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }


    /**
     * Get the value of nombre_contacto
     */
    public function getNombre_contacto()
    {
        return $this->nombre_contacto;
    }

    /**
     * Set the value of nombre_contacto
     *
     * @return  self
     */
    public function setNombre_contacto($nombre_contacto)
    {
        $this->nombre_contacto = $nombre_contacto;

        return $this;
    }


    /**
     * Get the value of monto_pago
     */
    public function getMonto_pago()
    {
        return $this->monto_pago;
    }

    /**
     * Set the value of monto_pago
     *
     * @return  self
     */
    public function setMonto_pago($monto_pago)
    {
        $this->monto_pago = $monto_pago;

        return $this;
    }

    /**
     * Get the value of cuenta_paypal
     */
    public function getCuenta_paypal()
    {
        return $this->cuenta_paypal;
    }

    /**
     * Set the value of cuenta_paypal
     *
     * @return  self
     */
    public function setCuenta_paypal($cuenta_paypal)
    {
        $this->cuenta_paypal = $cuenta_paypal;

        return $this;
    }
}
