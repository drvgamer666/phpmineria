<?php
namespace model;

class tipoDocumento
{
private $idtipoDocumento;
private $nombreTipo;

    /**
     * @return mixed
     */
    public function getIdtipoDocumento()
    {
        return $this->idtipoDocumento;
    }

    /**
     * @param mixed $idtipoDocumento
     */
    public function setIdtipoDocumento($idtipoDocumento): void
    {
        $this->idtipoDocumento = $idtipoDocumento;
    }

    /**
     * @return mixed
     */
    public function getNombreTipo()
    {
        return $this->nombreTipo;
    }

    /**
     * @param mixed $nombreTipo
     */
    public function setNombreTipo($nombreTipo): void
    {
        $this->nombreTipo = $nombreTipo;
    }

}