<?php

namespace model;

class equipo
{
    private $idequipo;
    private $nombreEquipo;
    private $codigo;
    private $fecha;
    private $estado;
    private $usuario_idusuario;


    /**
     * @return mixed
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @return mixed
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * @return mixed
     */
    public function getIdequipo()
    {
        return $this->idequipo;
    }

    /**
     * @return mixed
     */
    public function getNombreEquipo()
    {
        return $this->nombreEquipo;
    }

    /**
     * @return mixed
     */
    public function getUsuarioIdusuario()
    {
        return $this->usuario_idusuario;
    }

    /**
     * @param mixed $codigo
     */
    public function setCodigo($codigo): void
    {
        $this->codigo = $codigo;
    }

    /**
     * @param mixed $estado
     */
    public function setEstado($estado): void
    {
        $this->estado = $estado;
    }

    /**
     * @param mixed $fecha
     */
    public function setFecha($fecha): void
    {
        $this->fecha = $fecha;
    }

    /**
     * @param mixed $idequipo
     */
    public function setIdequipo($idequipo): void
    {
        $this->idequipo = $idequipo;
    }

    /**
     * @param mixed $nombreEquipo
     */
    public function setNombreEquipo($nombreEquipo): void
    {
        $this->nombreEquipo = $nombreEquipo;
    }

    /**
     * @param mixed $usuario_idusuario
     */
    public function setUsuarioIdusuario($usuario_idusuario): void
    {
        $this->usuario_idusuario = $usuario_idusuario;
    }

}