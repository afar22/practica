<?php
require_once "model/login.model.php";

class login_controlador{
    private $modelo;

    public function __construct(){
        $this->modelo = new Login();
    }

    public function Inicio(){        
        if(isset($_SESSION['session'])){
            header("location:?url=inicio");            
        }else{
            require_once "view/login.php";
        }        
    }

    public function register(){
        require_once "view/register.php";
    }

    public function logout(){
        session_destroy();
        echo "<script>";
        echo "MiFuncionJS();";
        echo "</script>";
        header("location:?url=login");            
    }
    

    public function guardar(){
        if(count($_POST)>0){
            
            $nick = $_POST['nick'];
            $pass = $_POST['pass1'];
            
            $pass_hash = password_hash($pass, PASSWORD_DEFAULT);

            $cta = new Login();
            $cta->set_nick($nick);
            $cta->set_password($pass_hash);
            $this->modelo->Insertar($cta);
            header("location:?url=login");            

        }else{
            echo "no datos!!";
        }        
    }

    public function validar(){
        if(count($_POST)>0){
            
            $nick = $_POST['nick'];
            $pass = $_POST['pass'];

            $cta = new Login();
            $rta = $cta->detalle($nick);

            if($rta){
                if($rta['cpassword']==$pass){
                    $_SESSION["session"] = $rta['nloginID'];
                   header("location:?url=inicio"); 
                   exit;
                }else{
                    echo'<script type="text/javascript">
                    alert("mal password");
                    window.location.href="?url=login";
                    </script>';
                    exit;
                 
                }                
            }else{
                echo'<script type="text/javascript">
                alert("Usuario no existe");
                window.location.href="?url=login";
                </script>';
                exit;                
            }
                            
        }else{
            echo'<script type="text/javascript">
            alert("No datos");
            window.location.href="?url=login";
            </script>';
            exit; 
        }        
    }

}
?>
