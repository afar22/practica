<?php
require_once "model/usuario.model.php";

class ajax_controlador{
    private $modelo;

    public function __construct(){
        $this->modelo = new Usuario();
    }

    public function Inicio(){
        require_once "view/ajax.php";
    }

    public function Lista(){
        sleep(1);
        require_once "ajax/lista.php";
    }
    public function Nuevo(){
        sleep(1);
        require_once "ajax/nuevo.php";
    }
    




}