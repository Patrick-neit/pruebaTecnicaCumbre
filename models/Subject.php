<?php
    class Subject{
        private $Subject;
        private $db;
        private $datos;

        public function __construct(){
            $this->Subject = array();
            $this->db = new PDO('mysql:host=localhost;dbname=pt_cumbre',"root","");
        }

        public function insert($table,$data){
            
            $query="insert into ".$table." values(null,". $data .")";
            /* echo($query); */
            $result = $this->db->query($query);
            if ($result) {
                return true;
            }else{
                return false;
            }
        }

        public function show ($table,$condition){
            $query = "select * from ". $table ." where ".$condition.";";
            /* echo($query); */
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
        public function asignarMateria($table,$data){
            $query="insert into ".$table." values(null,". $data .")";
            /* echo($query); */
            $result = $this->db->query($query);
            if ($result) {
                return true;
            }else{
                return false;
            }

        }

        public function assignSubjects(){
            $query= "SELECT tutors.name as tutorName, subjects.name as subjectName, subjects.semester as semestre FROM `subjects_tutors` 
            JOIN tutors on tutors.id= subjects_tutors.tutor_id
            JOIN subjects on subjects.id= subjects_tutors.subject_id
            where tutors.state='A'";

            $result = $this->db->query($query);
            while ($filas = $result->fetchAll(PDO::FETCH_ASSOC)) {
                $this->datos[]=$filas;
            }
            return $this->datos;
        }

        public function filterAssignSubjects($id){

            $query= "SELECT tutors.name as tutorName, subjects.name as subjectName, subjects.semester as semestre FROM `subjects_tutors` 
            JOIN tutors on tutors.id= subjects_tutors.tutor_id
            JOIN subjects on subjects.id= subjects_tutors.subject_id
            where tutors.state='A' AND subjects_tutors.subject_id=$id;";

            $result = $this->db->query($query);
            while ($filas = $result->fetchAll(PDO::FETCH_ASSOC)) {
                $this->datos[]=$filas;
            }
            return $this->datos;
        }
    }
?>