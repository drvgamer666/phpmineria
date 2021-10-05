<?php

namespace model;

class ordenTrabajo
{
    private $idordenTrabajo;
    private $descripcion;
    private $fechaInicio;
    private $detalletrabajo;
    private $fechaCierre;
    private $tipoOrden_idtipoOrden;
    private $equipo_idequipo;
    private $usuario_idusuario;

    /**
     * @return mixed
     */
    public function getUsuarioIdusuario()
    {
        return $this->usuario_idusuario;
    }

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @return mixed
     */
    public function getDetalletrabajo()
    {
        return $this->detalletrabajo;
    }

    /**
     * @return mixed
     */
    public function getEquipoIdequipo()
    {
        return $this->equipo_idequipo;
    }

    /**
     * @return mixed
     */
    public function getFechaCierre()
    {
        return $this->fechaCierre;
    }

    /**
     * @return mixed
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * @return mixed
     */
    public function getIdordenTrabajo()
    {
        return $this->idordenTrabajo;
    }

    /**
     * @return mixed
     */
    public function getTipoOrdenIdtipoOrden()
    {
        return $this->tipoOrden_idtipoOrden;
    }

    /**
     * @param mixed $usuario_idusuario
     */
    public function setUsuarioIdusuario($usuario_idusuario): void
    {
        $this->usuario_idusuario = $usuario_idusuario;
    }

    /**
     * @param mixed $descripcion
     */
    public function setDescripcion($descripcion): void
    {
        $this->descripcion = $descripcion;
    }

    /**
     * @param mixed $detalletrabajo
     */
    public function setDetalletrabajo($detalletrabajo): void
    {
        $this->detalletrabajo = $detalletrabajo;
    }

    /**
     * @param mixed $equipo_idequipo
     */
    public function setEquipoIdequipo($equipo_idequipo): void
    {
        $this->equipo_idequipo = $equipo_idequipo;
    }

    /**
     * @param mixed $fechaCierre
     */
    public function setFechaCierre($fechaCierre): void
    {
        $this->fechaCierre = $fechaCierre;
    }

    /**
     * @param mixed $fechaInicio
     */
    public function setFechaInicio($fechaInicio): void
    {
        $this->fechaInicio = $fechaInicio;
    }

    /**
     * @param mixed $idordenTrabajo
     */
    public function setIdordenTrabajo($idordenTrabajo): void
    {
        $this->idordenTrabajo = $idordenTrabajo;
    }

    /**
     * @param mixed $tipoOrden_idtipoOrden
     */
    public function setTipoOrdenIdtipoOrden($tipoOrden_idtipoOrden): void
    {
        $this->tipoOrden_idtipoOrden = $tipoOrden_idtipoOrden;
    }

}