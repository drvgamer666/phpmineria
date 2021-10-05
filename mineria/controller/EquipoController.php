<?php

namespace controller;

use model\equipo;
use view\MainTemplate;
use services\equipoService;

class EquipoController
{

    private $template;

    public function __construct()
    {
        $this->template = new MainTemplate();

    }

    public function verequipo(){
        SessionController::validarSesion();
        $data =[
            "titulo"=>"Informacion del equipo empresarial",
            "equipo"=> isset($_SESSION["equipoSesion"]) ? unserialize($_SESSION["equipoSesion"]):null
        ];
        $this->template->render("/equipo/index.php",[],[],$data);
    }

}