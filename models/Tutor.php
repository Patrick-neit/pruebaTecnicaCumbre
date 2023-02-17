<?php
    class Tutor{
        private $Tutor;
        private $db;
        private $datos;

        public function __construct(){
            $this->Tutor = array();
            $this->db = new PDO('mysql:host=localhost;dbname=pt_cumbre',"root","");
        }

        public function insert($table,$data){
            
            $query="insert into ".$table." values(null,". $data .")";
            echo($query);
            $result = $this->db->query($query);
            if ($result) {
                return true;
            }else{
                return false;
            }
        }

        public function show ($table,$condition){
            $query = "select * from ". $table ." where ".$condition.";";
            $result = $this->db->query($query);
           
            while ($filas = $result->fetchAll(PDO::FETCH_ASSOC)) {
                $this->datos[]=$filas;
            }
            return $this->datos;
        }

        public function updated($table,$data,$condition){
            
            $query="update ".$table." set ". $data ." where ".$condition;
            $result = $this->db->query($query);
            if ($result) {
                return true;
            }else{
                return false;
            }
        }

        public function delete($table,$condition){
            
            $query="delete from ".$table." where ".$condition;
            $result = $this->db->query($query);
            if ($result) {
                return true;
            }else{
                return false;
            }

        }
    }
?>