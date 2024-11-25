<?php
require_once "model/usuario.model.php";
require_once "model/imc.model.php";
class usuario_controlador{
    private $modelo;
    private $modeloIMC;

    public function __construct(){
        $this->modelo = new Usuario();
        $this->modeloIMC = new Imc();
    }

    public function Inicio(){
        require_once "view/lista_usuarios.php";
    }

    public function Nuevo(){
        require_once "view/nuevo_usuario.php";
    }

    public function imc(){
        $id =$_GET['id']; 
        require_once "view/imc.php";
    }

    public function guardar(){
        
        if(count($_POST)>0){
            
            $nombre = $_POST['nombre'];
            $celular = $_POST['celular'];
            $nacimiento = $_POST['nacimiento']; 
            $genero = $_POST['genero'];

            $user = new Usuario();
            $user->set_nombre($nombre);
            $user->set_celular($celular);
            $user->set_nacio($nacimiento);
            $user->set_genero($genero);
     

            $this->modelo->Insertar($user);
            
            header("location:?url=usuario");            

        }else{
            echo "no datos!!";
        }
        
    }

    public function guardarIMC(){
        
        if(count($_POST)>0){
            
            $peso = $_POST['peso'];
            $altura = $_POST['altura'];
            $id = $_POST['id'];
            $imc = ($peso /($altura * $altura));             
            if($imc < 18.5){
                $dia = "estas flaco come mas!!!";
            }else if($imc== 18.5 || $imc < 22.5){
                $dia = "estas ready";
            }else if($imc== 22.5 || $imc < 25.5){
                $dia = "madrugar con rigo al gym!!!";
            }else{
                $dia = "ve al medico!!!";
            }

            $this->modeloIMC->Insertar($altura,$peso,$imc,$dia,$id);
            header("location:?url=usuario");           

        }else{
            echo "no datos!!";
        }
        
    }

}