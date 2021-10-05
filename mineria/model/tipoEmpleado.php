<?php

namespace model;

class tipoEmpleado
{
    private $idtipoEmpleado;
    private $tipoEmpleadocol;

    /**
     * @param mixed $idtipoEmpleado
     */
    public function setIdtipoEmpleado($idtipoEmpleado): void
    {
        $this->idtipoEmpleado = $idtipoEmpleado;
    }

    /**
     * @return mixed
     */
    public function getIdtipoEmpleado()
    {
        return $this->idtipoEmpleado;
    }

    /**
     * @param mixed $tipoEmpleadocol
     */
    public function setTipoEmpleadocol($tipoEmpleadocol): void
    {
        $this->tipoEmpleadocol = $tipoEmpleadocol;
    }

    /**
     * @return mixed
     */
    public function getTipoEmpleadocol()
    {
        return $this->tipoEmpleadocol;
    }

}