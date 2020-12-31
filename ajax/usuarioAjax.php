<?php

$peticionAjax = true;

require_once "../config/app.php";

if (isset($_POST['usuario_dni_reg'])) {
    // Instancia al controlador
    require_once "../controllers/usuarioControlador.php";
    $ins_usuario = new UsuarioControlador();

    if (isset($_POST['usuario_dni_reg']) && isset($_POST['usuario_nombre_reg'])) {
       echo $ins_usuario->agregar_usuario_controlador(); 
    }

} else {
    session_start(['name' => 'SPM']);
    session_unset();
    session_destroy();
    header("Location: ".SERVERURL."login/");
    exit();
}
