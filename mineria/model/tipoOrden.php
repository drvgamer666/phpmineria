<?php

namespace model;

class tipoOrden
{
    private $idtipoOrden;
    private $nombreOrden;

    /**
     * @param mixed $idtipoOrden
     */
    public function setIdtipoOrden($idtipoOrden): void
    {
        $this->idtipoOrden = $idtipoOrden;
    }

    /**
     * @param mixed $nombreOrden
     */
    public function setNombreOrden($nombreOrden): void
    {
        $this->nombreOrden = $nombreOrden;
    }

    /**
     * @return mixed
     */
    public function getIdtipoOrden()
    {
        return $this->idtipoOrden;
    }

    /**
     * @return mixed
     */
    public function getNombreOrden()
    {
        return $this->nombreOrden;
    }
}
