<?php

namespace services;

use model\TipoDocumento;
use \PDO;

class TipoDocumentoService
{


    public function consultarTodos() : array{
        $sql = "SELECT * FROM tipoDocumento";
        $conn = ConexionDB::getConn();
        $pdoStatement = $conn->prepare($sql);
        $tipoDocumentos = array();
        if($pdoStatement->execute()) {
            while($datoFila = $pdoStatement->fetch(PDO::FETCH_OBJ)){
                array_push($tipoDocumentos, $this->construirObjTipoDocumento($datoFila));
            }
        } else{
            print_r($pdoStatement->errorInfo());
        }
        ConexionDB::close();
        return $tipoDocumentos;
    }

    public function consultarPorId($idTipoDocumento) : array{
        $sql = "SELECT * FROM tipodocumento WHERE idtipoEmpleado = :idTipoDoc";
        $conn = ConexionDB::getConn();
        $pdoStatement = $conn->prepare($sql);
        $pdoStatement->bindValue(":idTipoDoc", $idTipoDocumento);
        $tipoDocumento = array();
        if($pdoStatement->execute()) {
            while($datoFila = $pdoStatement->fetch(PDO::FETCH_OBJ)){
                array_push($tipoDocumento, $this->construirObjTipoDocumento($datoFila));
            }
        } else{
            print_r($pdoStatement->errorInfo());
        }
        ConexionDB::close();
        return $tipoDocumento;
    }

    private function construirObjTipoDocumento($datoFila) : TipoDocumento{
        $tipoDocumento = new TipoDocumento();
        $tipoDocumento->setIdtipoDocumento($datoFila->idtipoDocumento);
        $tipoDocumento->setNombreTipo($datoFila->nombreTipo);
        return $tipoDocumento;
    }
}