<?php
require_once "model/usuario.model.php";

class inicio_controlador{
    private $modelo;

    public function __construct(){
        $this->modelo = new Usuario();
    }

    public function Inicio(){
        require_once "view/home.php";
    }

}