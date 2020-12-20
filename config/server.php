<?php
    // parametros de conexion a la base de datos
    const SERVER="localhost";
    const DB="prestamos";
    const USER="root";
    const PASS="";

    // SGBD sistema gestos de base de datos constante para la conexion con PDO
    const SGBD="mysql:host=".SERVER.";dbname=".DB;

    const METHOD="AES-256-CBC";

    // LLAVE SECRETA
    const SECRET_KEY='$PRESTAMOS@2020';
    const SECRET_ID="12345";