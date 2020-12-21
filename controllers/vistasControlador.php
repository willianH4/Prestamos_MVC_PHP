<?php
    // incluimos el modelo
    require_once "./models/vistasModelo.php";

    class vistasControlador extends vistasModelo{
        // obtiene la plantilla
        public function obtener_Plantilla_Controlador(){
            return require_once
             "./views/plantilla.php";
        }

        // obtiene las vistas
        public function obtener_Vistas_Controlador()
        {
           if (isset($_GET['views'])) {
               $ruta = explode("/", $_GET['views']);
               $respuesta = vistasModelo::obtener_Vistas_Modelo($ruta[0]);
           } else {
               $respuesta="login";
           }
           return $respuesta;
        }
    }