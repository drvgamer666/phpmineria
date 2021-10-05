<?php
namespace services;

use model\equipo;
use PDO;

class equipoService
{
    public function consultarTodosEquipo() :array{
    $sql= " SELECT * FROM equipo ";
    $conn = ConexionDB::getConn();
    $pdoStatement = $conn->prepare($sql);
    $equipo = array();
    if ($pdoStatement->execute()){
        while ($datoFila = $pdoStatement -> fetch(PDO::FETCH_OBJ)){
            array_push($equipo, $this->consultarTodosEquipo($datoFila));
        }
    }else{
        print_r($pdoStatement->errorInfo());
    }
    ConexionDB::close();
    return $equipo;
    }

    private function construirObjEquipo ($datoFila) :equipo{
    $equipo = new equipo();
    $equipo->setNombreEquipo($datoFila->nombre);
    $equipo->setIdequipo($datoFila->id);
    return $equipo;
    }

    public function registrarEquipo(equipo  $equipo){
    $sql = "INSERT INTO equipo (nombreEquipo, codigo, fecha, estado, usuario_idusuario) VALUES (:Nom_EQ,:COD , :FE, :EST, :USU_ID);";
    $conn = ConexionDB::getConn();
    $pdoStatement = $conn->prepare($sql);
    $pdoStatement->bindValue(":Nom_EQ", $equipo->getNombreEquipo());
    $pdoStatement->bindValue(":COD", $equipo->getCodigo());
    $pdoStatement->bindValue(":FE",$equipo->getFecha());
    $pdoStatement->bindValue(":EST",$equipo->getEstado());
    $pdoStatement->bindValue(":USU_ID",$equipo->getUsuarioIdusuario());
    if (!$pdoStatement->execute()){
        print_r($pdoStatement->errorInfo());
        return null;
    }
    return $conn->lastInsertId();
    }

    public function actualizarEquipo($idequipo)
    {
        $sql ="UPDATE equipo SET nombreEquipo = :NOMB_EQ , codigo = :COD_EQ, fecha =FEC , estado = :EST WHERE (idequipo = ID_EQ );";
        $conn = ConexionDB::getConn();
        $pdoStatement = $conn->prepare($sql);
        $pdoStatement->bindValue(":NOMB_EQ",$idequipo);
        $pdoStatement->bindValue(":COD_EQ",$idequipo);
        $pdoStatement->bindValue(":FEC", $idequipo);
        $pdoStatement->bindValue(":EST",$idequipo);
        $pdoStatement->bindValue(":ID_EQ",$idequipo);
        if (!$pdoStatement->execute()){
            print_r($pdoStatement->errorInfo());
            return null;
        }
    }

    public function eliminarEquipo($idEquipo){
        $sql="DELETE FROM equipo WHERE (idequipo = :ID_EQ);";
        $conn = ConexionDB::getConn();
        $pdoStatement = $conn->prepare($sql);
        $pdoStatement->bindValue(":ID_EQ",$idEquipo);
    }

}