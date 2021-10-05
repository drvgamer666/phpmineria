<?php

namespace  services;

use PDO;
use model\rol;

class RolServices{

    public function consultarTodos():array{
        $sql ="SELECT * FROM rol;";
        $conn = ConexionDB::getConn();
        $pdoStatement = $conn->prepare($sql);
        $rol=array();
        if ($pdoStatement->execute()){
            while ($datoFila = $pdoStatement->fetch(PDO::FETCH_OBJ)){
                array_push($rol, $this->construirObjTipoDocumento($datoFila));
            }
        }else{
            print_r($pdoStatement->errorInfo());
        }
        ConexionDB::close();
        return $rol;
    }

    private function construirObjTipoDocumento($datoFila) : rol{
        $rol = new rol();
        $rol->setIdrol($datoFila->idrol);
        $rol->setNombreRol($datoFila->nombreRol);
        return $rol;
    }
}