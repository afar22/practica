<?php 
// Start the session
session_start();
//conexion base de datos
require_once "model/basedatos.php";
if(isset($_GET['url'])){
    $url = $_GET['url']; 
   if(isset($_SESSION['session'])){
        $ruta = "control/$url.controlador.php";
        if (file_exists($ruta)){
            require_once $ruta;
            $controlador_class = $url."_controlador";
            $controlador = new $controlador_class;
            $accion = isset($_GET['accion']) ? $_GET['accion'] : "inicio";
            call_user_func(array($controlador,$accion));
        }else{
            echo "The file $url does not exist";
        }
    }else{
        require_once "control/login.controlador.php";
        $controlador =  new login_controlador();
        $accion = isset($_GET['accion']) ? $_GET['accion'] : "inicio";
        call_user_func(array($controlador,$accion));   
    }
}else{
   if(isset($_SESSION['session'])){
        $session  = $_SESSION['session'];
        require_once "control/inicio.controlador.php";
        $controlador =  new inicio_controlador();
        call_user_func(array($controlador,"inicio"));
    }else{
        require_once "control/login.controlador.php";
        $controlador =  new login_controlador();
        call_user_func(array($controlador,"inicio"));
    } 
}

?>

<script>
    function MiFuncionJS(){
        alert("salir");
    }
</script>
