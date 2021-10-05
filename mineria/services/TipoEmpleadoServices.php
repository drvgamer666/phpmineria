<?php

namespace services;

use model\tipoEmpleado;
use PDO;

class TipoEmpleadoServices{

    public function consultarTodos() :array{
        $sql = "SELECT * FROM tipoempleado;";
        $conn= ConexionDB::getConn();
        $pdoStatement = $conn->prepare($sql);
        $tipEmpleado = array();
        if ($pdoStatement->execute()){
            while ($datoFila =$pdoStatement->fetch(PDO::FETCH_OBJ)){
                array_push($tipEmpleado,$this->construirObjTipoDocumento($datoFila));
            }
        }else{
            print_r($pdoStatement->errorInfo());
        }
        ConexionDB::close();
        return $tipEmpleado;
    }

    public function consultarPorId($idtipoEmpleado):array{
        $sql ="SELECT * FROM tipoempleado WHERE id = :ID_EMP";
        $conn= ConexionDB::getConn();
        $pdoStatement=$conn->prepare($sql);
        $pdoStatement->bindValue(":ID_EMP",$idtipoEmpleado);
        $tipoEmpleado= array();
        if ($pdoStatement->execute()){
            while ($datoFila = $pdoStatement->fetch(PDO::FETCH_OBJ)){
                array_push($tipoEmpleado, $this->construirObjTipoDocumento($datoFila));
            }
        }else{
            print_r($pdoStatement->errorInfo());
        }
        ConexionDB::close();
        return $tipoEmpleado;
    }


    private function construirObjTipoDocumento($datoFila): tipoEmpleado{
        $tipoEmpleado = new tipoEmpleado();
        $tipoEmpleado->setIdtipoEmpleado($datoFila->idtipoEmpleado);
        $tipoEmpleado->setTipoEmpleadocol($datoFila->tipoEmpleadocol);
        return $tipoEmpleado;
    }



}
