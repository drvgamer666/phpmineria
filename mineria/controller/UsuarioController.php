<?php
namespace controller;

use services\RolServices;
use services\TipoDocumentoService;
use services\TipoEmpleadoServices;
use services\UsuarioServices;
use model\usuario;
use view\MainTemplate;

class  usuarioController{
    private const TITULO_REGISTRO ="Registro Usuarios";
    private $template;

    public function __construct()
    {
        $this->template = new MainTemplate();
    }

    public function Datos()
    {
        SessionController::validarSesion();
        $tipoDocumentoService = new TipoDocumentoService();
        $tipoEmpleadoServices = new TipoEmpleadoServices();
        $rol = new RolServices();
        $data = [
            "titulo" => self::TITULO_REGISTRO,
            "tipoDocumento" => $tipoDocumentoService->consultarTodos(),
            "tipoEmpleado" => $tipoEmpleadoServices->consultarTodos(),
            "rol"=> $rol->consultarTodos(),
        ];
        $this->template->render("/admin/index.php", [], [],$data);

    }

    public function registrarUsuario(){
        SessionController::validarSesion();
        $accion = $_POST["btnRegistroPersona"] ?? '';
        $usuarioService = new UsuarioServices();

        if ($accion==="registrar"){
            $usuario = new usuario();
        $usuarioService->registrarUsuario($usuario);

        $_SESSION["mensaje"] = "Se guardo en la sesíón los cambios del equipo";
        }else{
            $_SESSION["mensaje"] = "Datos incompletos para realizar la acción";
        }

        $data = ["titulo"=>self::TITULO_REGISTRO];
        $this->template->render("admin/index.php",[],[],$data);
    }

    private function cargarDatosPersona(usuario $usuario)
    {
        $usuario->setTipDocumentoIdtipoDocumento($_POST["tipoDocumento"]);
        $usuario->setTipoEmpleadoIdtipoEmpleado($_POST["tipoEmpleado"]);
        $usuario->setRolIdrol($_POST["tipoRol"]);
        $usuario->setNumDocumento($_POST["numeroDocumento"]);
        $usuario->setNombres($_POST["nombres"]);
        $usuario->setApellidos($_POST["apellidos"]);
        $usuario->setCorreo($_POST["correo"]);
        $usuario->setNombUsuario($_POST["username"]);
        $usuario->setClave($_POST["clave"]);
    }

}
