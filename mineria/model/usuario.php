<?php

namespace model;

class usuario
{
    private $idusuario;
    private $numDocumento;
    private $nombres;
    private $apellidos;
    private $correo;
    private $nombUsuario;
    private $clave;
    private $tipDocumento_idtipoDocumento;
    private $rol_idrol;
    private $tipoEmpleado_idtipoEmpleado;

    /**
     * @param mixed $apellidos
     */public function setApellidos($apellidos): void
{
    $this->apellidos = $apellidos;
}
/**
 * @param mixed $clave
 */public function setClave($clave): void
{
    $this->clave = $clave;
}/**
 * @param mixed $correo
 */public function setCorreo($correo): void
{
    $this->correo = $correo;
}/**
 * @param mixed $idusuario
 */public function setIdusuario($idusuario): void
{
    $this->idusuario = $idusuario;
}/**
 * @param mixed $nombres
 */public function setNombres($nombres): void
{
    $this->nombres = $nombres;
}/**
 * @param mixed $nombUsuario
 */public function setNombUsuario($nombUsuario): void
{
    $this->nombUsuario = $nombUsuario;
}/**
 * @param mixed $numDocumento
 */public function setNumDocumento($numDocumento): void
{
    $this->numDocumento = $numDocumento;
}/**
 * @param mixed $rol_idrol
 */public function setRolIdrol($rol_idrol): void
{
    $this->rol_idrol = $rol_idrol;
}/**
 * @param mixed $tipDocumento_idtipoDocumento
 */public function setTipDocumentoIdtipoDocumento($tipDocumento_idtipoDocumento): void
{
    $this->tipDocumento_idtipoDocumento = $tipDocumento_idtipoDocumento;
}
/**
 * @param mixed $tipoEmpleado_idtipoEmpleado
 */public function setTipoEmpleadoIdtipoEmpleado($tipoEmpleado_idtipoEmpleado): void
{
    $this->tipoEmpleado_idtipoEmpleado = $tipoEmpleado_idtipoEmpleado;
}

/**
 * @return mixed
 */public function getApellidos()
{
    return $this->apellidos;
}/**
 * @return mixed
 */public function getClave()
{
    return $this->clave;
}/**
 * @return mixed
 */public function getCorreo()
{
    return $this->correo;
}/**
 * @return mixed
 */public function getIdusuario()
{
    return $this->idusuario;
}/**
 * @return mixed
 */public function getNombres()
{
    return $this->nombres;
}/**
 * @return mixed
 */public function getNombUsuario()
{
    return $this->nombUsuario;
}/**
 * @return mixed
 */public function getNumDocumento()
{
    return $this->numDocumento;
}/**
 * @return mixed
 */public function getRolIdrol()
{
    return $this->rol_idrol;
}/**
 * @return mixed
 */public function getTipDocumentoIdtipoDocumento()
{
    return $this->tipDocumento_idtipoDocumento;
}/**
 * @return mixed
 */public function getTipoEmpleadoIdtipoEmpleado()
{
    return $this->tipoEmpleado_idtipoEmpleado;
}

}