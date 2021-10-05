<?php

namespace model;

class rol{

    private $idrol;
    private $nombreRol;


    /**
     * @return mixed
     */
    public function getIdrol()
    {
        return $this->idrol;
    }

    /**
     * @param mixed $idrol
     */
    public function setIdrol($idrol): void
    {
        $this->idrol = $idrol;
    }

    /**
     * @return mixed
     */
    public function getNombreRol()
    {
        return $this->nombreRol;
    }

    /**
     * @param mixed $nombreRol
     */
    public function setNombreRol($nombreRol): void
    {
        $this->nombreRol = $nombreRol;
    }

}