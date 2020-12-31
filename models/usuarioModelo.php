<?php
// Modelo para agregar usuarios
require_once "mainModel.php";

class UsuarioModelo extends mainModel {
    
    protected static function agregar_usuario_modelo($datos)
    {
        $sql=mainModel::conectar()->prepare("INSERT INTO usuario(usuario_dni,usuario_nombre,usuario_apellido,usuario_telefono,usuario_direccion
        ,usuario_email,usuario_usuario,usuario_clave,usuario_estado,usuario_privilegio) 
        VALUES(:DNI,:Nombre,:Apellido,:Telefono,:Direccion,:Email,:Usuario,:Clave,:Estado,:Privilegio)");

        $sql->bindParam(":DNI",$datos['DNI']);
        $sql->bindParam(":Nombre",$datos['Nombre']);
        $sql->bindParam(":Apellido",$datos['Apellido']);
        $sql->bindParam(":DNI",$datos['Telefono']);
        $sql->bindParam(":DNI",$datos['Direccion']);
        $sql->bindParam(":DNI",$datos['Email']);
        $sql->bindParam(":DNI",$datos['Usuario']);
        $sql->bindParam(":DNI",$datos['Clave']);
        $sql->bindParam(":DNI",$datos['Estado']);
        $sql->bindParam(":DNI",$datos['Privilegio']);

        $sql->execute();
        
        return $sql;
    } 

}