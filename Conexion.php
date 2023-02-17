<?php

    class Conexion{
        
        private $host= "localhost";
        private $user= "root"; 
        private $password= ""; 
        private $db= "pt_cumbre"; 
        private $conect;

    public function __construct(){
        $connectionString = "mysql:hos=".$this->host.";dbname=".$this->db.";charset=utf8";
        try{
            $this->conect= new PDO($connectionString,$this->user,$this->password);
            $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            /* echo "Succesfully Conexion"; */
        }catch(Exception $e){
            $this->conect ="Conexion Error";
            echo "Failure:".$e->getMessage();
        }
    }
    }
    define("urlsite",'http://localhost/PRUEBATECNICACUMBRE/');
    $conect=  new Conexion();

?>