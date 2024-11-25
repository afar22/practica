<?php
class Imc{
    private $pdo;    
    public function __construct(){
        $this->pdo = BaseDatos::Conectar();
    }
    public function listar($user){
        try{
            $sql="select * from tmedida where nUserFK = :user";				
            $sentencia =$this->pdo->prepare($sql);						
            $sentencia->bindParam(':user', $user);		
            $sentencia->execute();			
            $resultados = $sentencia->fetchAll(PDO::FETCH_ASSOC);					
            return $resultados;
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function Insertar($altura,$peso,$imc,$rta,$id){
        try{            
            $sql = "INSERT INTO tmedida(nAltura, nPeso, nImc, cRecomendacion, nUserFK) VALUES (:alt, :pes, :imc,:rta,:user)";
            $sentencia = $this->pdo->prepare($sql);	
            $sentencia->bindParam(':alt', $altura);		
            $sentencia->bindParam(':pes', $peso);				
            $sentencia->bindParam(':imc',  $imc);		            
            $sentencia->bindParam(':rta', $rta);		            
            $sentencia->bindParam(':user', $id);		            
            $sentencia->execute();
            $result = $this->pdo->lastInsertId();
            return $result;
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

}