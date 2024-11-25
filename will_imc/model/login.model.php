<?php
class Login{
    private $pdo;
    private $id;
    private $nick;
    private $password;
    private $estado;

    
    public function __construct(){
        $this->pdo = BaseDatos::Conectar();
    }
    public function get_id(){
        return $this->id;
    }

    public function set_id($id){
        $this->id = $id;
    }

    public function get_nick(){
        return $this->nick;
    }
    public function set_nick($nick){
        $this->nick = $nick;
    }

    public function get_password(){
        return $this->password;
    }
    public function set_password($password){
        $this->password = $password;
    }

    public function get_estado(){
        return $this->estado;
    }
    public function set_estado($estado){
        $this->estado = $estado;
    }
    public function listar(){
        try{
            $sql="select * from tlogin";				
            $sentencia =$this->pdo->prepare($sql);						
            $sentencia->execute();			
            
            $resultados = $sentencia->fetchAll(PDO::FETCH_ASSOC);					
            return $resultados;
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function Insertar(Login $login){
        try{
            $nick = $login->get_nick();
            $pass = $login->get_password();
            
            $sql = "INSERT INTO tlogin (cnick, cpassword) VALUES (:nick, :pass)";            
            $sentencia = $this->pdo->prepare($sql);	
            $sentencia->bindParam(':nick', $nick);		
            $sentencia->bindParam(':pass', $pass);				   
            $sentencia->execute();
            $result = $this->pdo->lastInsertId();
            return $result;
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function detalle($id){
        try{
            $sql = "select * from tlogin where cnick = :nick";				
            $sentencia = $this->pdo->prepare($sql);
            $sentencia->bindParam(':nick', $id);						
            $sentencia->execute();			
            
            $resultado = $sentencia->fetch(PDO::FETCH_ASSOC);	
        
            return $resultado;

        }catch(Exception $e){
            die($e->getMessage());
        }
	}


}