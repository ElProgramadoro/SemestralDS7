<?php
require_once("utils/seg.php");
class utils
{
    public static function enviarcorreo($correo, $id)
    {
        $headers = "From: grupo@ddinnova.info\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=utf-8\r\n";
        $link = $_SERVER["REQUEST_SCHEME"] . "://" . $_SERVER["SERVER_NAME"] . "/index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("activar") . "&s=" . $id;
        $mensaje = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional //EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
        <html xmlns='http://www.w3.org/1999/xhtml' xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:v='urn:schemas-microsoft-com:vml' lang='en'>
        
        <head>
            <link rel='stylesheet' type='text/css' hs-webfonts='true' href='https://fonts.googleapis.com/css?family=Lato|Lato:i,b,bi'>
            <title>Email template</title>
            <meta property='og:title' content='Email template'>
        
            <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
        
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        
            <style type='text/css'>
                a {
                    text-decoration: underline;
                    color: inherit;
                    font-weight: bold;
                    color: #253342;
                }
        
                h1 {
                    font-size: 56px;
                }
        
                h2 {
                    font-size: 28px;
                    font-weight: 900;
                }
        
                p {
                    font-weight: 100;
                }
        
                td {
                    vertical-align: top;
                }
        
                #email {
                    margin: auto;
                    width: 600px;
                    background-color: white;
                }
        
                button {
                    font: inherit;
                    background-color: #FF7A59;
                    border: none;
                    padding: 10px;
                    text-transform: uppercase;
                    letter-spacing: 2px;
                    font-weight: 900;
                    color: white;
                    border-radius: 5px;
                    box-shadow: 3px 3px #d94c53;
                }
        
                .subtle-link {
                    font-size: 9px;
                    text-transform: uppercase;
                    letter-spacing: 1px;
                    color: #CBD6E2;
                }
            </style>
        
        </head>
        
        <body bgcolor='#F5F8FA' style='width: 100%; margin: auto 0; padding:0; font-family:Lato, sans-serif; font-size:18px; color:#33475B; word-break:break-word'>
        
            <! View in Browser Link -->
        
                <div id='email'>
        
        
                    <! Banner -->
                        <table role='presentation' width='100%'>
        
                            <tr>
        
                                <td bgcolor='#ffb606' align='center' style='color: white;'>
                                    <br><br>
                                    <img alt='Flower' src='https://i.ibb.co/jrPsPwS/codigo-qr.png' width='200px' align='middle'>
        
                                    <h1 style='font-size: 40px;'> Bienvenido a KingDom QR! </h1>
                                    <br>
                                </td>
                        </table>
        
        
        
        
                        <! First Row -->
        
                            <table role='presentation' border='0' cellpadding='0' cellspacing='10px' style='padding: 30px 30px 30px 60px;'>
                                <tr>
                                    <td>
                                        <h2> Solo un poco más...</h2>
                                        <p>
                                            Este correo signifca que ya está todo listo para que puedas disfrutar de la experiencia completa de nuestros servios y página web. ¡Gracias por preferirnos! </p>
                                        <br>
                                        <div style='text-align: center;'>
        
                                            <a href=" . $link . " style='text-decoration:none;'> <button> Activa tu cuenta </button></a>
        
        
                                        </div>
                                    </td>
                                </tr>
                            </table>
        
        
        
                </div>
        </body>
        
        </html>";
        echo mail($correo, "Activa tu cuenta", $mensaje, $headers);
    }

    public static function subir_archivo($archivo_temporal, $archivo, $destino)
    {
        $arreglo = explode(".", $archivo);
        $extension = $arreglo[count($arreglo) - 1];
        $archivo = md5(time() . $archivo) . "." . $extension;
        $destino = $destino . "/" . $archivo;
        if (move_uploaded_file($archivo_temporal, $destino))
            return $destino;
        else
            return null;
    }

    public static function generarqr($url)
    {
        require_once("libs/codigo_qr/qrlib.php");

        //Declaramos una carpeta temporal para guardar la imágenes generadas
        $dir = 'libs/temp/';
        
        //Si no existe la carpeta la creamos
        if (!file_exists($dir))
            mkdir($dir);
        
            //Declaramos la ruta y nombre del archivo a generar
        $filename = $dir.md5($url).'.png';
        
            //Parámetros de Configuración
        
        $tamaño = 10; //Tamaño de Pixel
        $level = 'L'; //Precisión Baja
        $framSize = 3; //Tamaño en blanco
        $contenido = $url; //Texto
        
            //Enviamos los parámetros a la Función para generar código QR 
        QRcode::png($contenido, $filename, $level, $tamaño, $framSize); 
        
            //Mostramos la imagen generada
        return $dir.basename($filename);  
    }
}
