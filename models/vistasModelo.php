<?php
// clase

class vistasModelo {
    // este modelo permitira mostrar las vistas que se iran mostrando
    protected static function obtener_Vistas_Modelo( $vistas ){
        // array de datos
        $listaBlanca=[];
        if (in_array($vistas, $listaBlanca)) {
            if (is_file("./views/contenido/".$vistas."-view.php")) {
                $contenido="./views/contenido/".$vistas."-view.php";
            } else {
                $contenido="404";
            }
            
        }elseif($vistas=="login" || $vistas=="index"){
            $contenido="login";
        }else {
            $contenido="404";
        }
        return $contenido;
    }
}