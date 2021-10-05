<?php
namespace services;

use PDO;
use model\usuario;
class UsuarioServices
{

    public function registrarUsuario(usuario $usuario)
    {
        $sql = "INSERT INTO usuario (numDocumento,nombres,apellidos,correo,nombUsuario,clave,tipoDocumento_idtipoDocumento,rol_idrol,tipoEmpleado_idtipoEmpleado) VALUES (:NUM_DOC,:NOMB ,:APE ,:CORR ,:NOMB_USU ,:CLA, :TPD_ID,:ROL_ID ,:EMP_ID);";
        $conn = ConexionDB::getConn();
        $pdoStatement = $conn->prepare($sql);
        $transation = $conn->beginTransaction();
        $pdoStatement->bindValue(":NUM_DOC", $usuario->getNumDocumento());
        $pdoStatement->bindValue(":NOMB", $usuario->getNombres());
        $pdoStatement->bindValue(":APE", $usuario->getApellidos());
        $pdoStatement->bindValue(":CORR", $usuario->getCorreo());
        $pdoStatement->bindValue(":NOMB_USU", $usuario->getNombUsuario());
        $pdoStatement->bindValue(":CLA", $usuario->getClave());
        $pdoStatement->bindValue(":TPD_ID", $usuario->getTipDocumentoIdtipoDocumento());
        $pdoStatement->bindValue(":ROL_ID", $usuario->getRolIdrol());
        $pdoStatement->bindValue(":EMP_ID", $usuario->getTipoEmpleadoIdtipoEmpleado());

        if (!$transation->execute()) {
          print_r($transation->errorInfo());

        }
    }


}
