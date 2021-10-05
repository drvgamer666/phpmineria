<?php

namespace controller;


use \view\LoginTemplate;

class SessionController
{

    private $loginTemplate;

    public function __construct()
    {
        $this->loginTemplate = new LoginTemplate();
    }


    public static function validarSesion()
    {
        if (!isset($_SESSION["usuarioSesion"])) {
            header("Location: " . CONTEXT_PATH . "/Session/index");
            exit();
        }
    }

    public function index()
    {
        $this->loginTemplate->render();
    }

    public function iniciarSesion()
    {
        $accion = $_POST["btnIngreso"] ?? '';
        $tipoPersona = $_POST["tipoPersona"] ?? '';

        if ($accion === "ingresar") {

            $usuario = $_POST["usuario"] ?? '';
            $clave = $_POST["clave"] ?? '';

            if ($usuario != '' && $clave != '') {
                if ($usuario == 'drino' && $clave == 'drino') {
                    $_SESSION["usuarioSesion"] = "David";
                    $_SESSION["mensaje"] = "Bienvenido....";
                    header("Location: " . CONTEXT_PATH . "/usuario/Datos");
                    exit();
                } else {
                    $_SESSION["mensaje"] = "Credenciales invalidas";
                }

            } else {
                $_SESSION["mensaje"] = "Los campos de usuario y clave son obligatorios";
            }
        } else {
            $_SESSION["mensaje"] = "Acción no permitida";
        }

        $this->loginTemplate->render();
    }

    public function cerrarSesion()
    {
        $view = DIR_VIEW . "/login.php";
        session_destroy();

        $this->loginTemplate->render();
    }
}