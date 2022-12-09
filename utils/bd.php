<?php
    class bd{
            public static function connection(){
                require_once("vendor/autoload.php");
                $cadena = "mongodb+srv://usuario:d123456@basedatos.tdcsrym.mongodb.net/?retryWrites=true&w=majority";
                $cliente = new MongoDB\Client($cadena);
                $conexion = $cliente->selectDataBase("basedatos2");
                return $conexion;
            }

    }