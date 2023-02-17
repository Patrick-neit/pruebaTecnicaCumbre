<?php
    require_once("models/Subject.php");
    require_once("Conexion.php");
    
    class SubjectController{
        private $conexion;
        function __construct(){
            $this->conexion= new Conexion();    
        }

        static function index(){
            $subject = new Subject();
            $data = $subject->show("subjects","1");
            require_once("views/subjects/index.php");
        }
        
        static function nuevo(){
            
            require_once("views/subjects/create.php");
        }
        static function guardar(){
            $name = $_REQUEST['name'];
            $semester = $_REQUEST['semester'];
            $state = $_REQUEST['state'];
            
            $data       =   "'".$name."','".$semester."','".$state. "'";

            $subject= new Subject();
            $dato= $subject->insert("subjects",$data);
          
            header("location:".urlsite);
        }



        static function editar(){
            $id = $_REQUEST['id']; 
            $subject = new Subject();
            $dato= $subject->show("subjects","id=".$id);
            require_once("views/subjects/edit.php");
        }
        static function actualizar(){
            $id = $_REQUEST['id']; 
            $name = $_REQUEST['name'];
            $semester = $_REQUEST['semester'];
            $state = $_REQUEST['state'];
            
            $data       =   "name='".$name."',semester='".$semester."',state='".$state. "'";

            $subject= new Subject();
            $dato= $subject->updated("subjects",$data,"id=".$id);
          
            header("location:".urlsite);
        }

        static function eliminar(){
            $id = $_REQUEST['id']; 
            $subject = new Subject();
            $dato= $subject->delete("subjects","id=".$id);
            header("location:".urlsite);
        }

        static function asignarMaterias(){
            $subject_id = $_REQUEST['subject_id'];
            $tutor_id = $_REQUEST['tutor_id'];
            
            
            $data       =   "'".$subject_id."','".$tutor_id."'";

            $subject= new Subject();
            $dato= $subject->asignarMateria("subjects_tutors",$data);
          
            header("location:".urlsite);
        }

        static function asignarMateria(){
            require_once("views/subjects/asignarMateria.php");
        }

        static function materiasAsignados(){
            $subject = new Subject();
            $materias = $subject->assignSubjects();
            require_once("views/subjects/materiasAsignadas.php");

        }

        static function filterMateriasAsignados(){
            $subject_id = $_REQUEST['subject_id']; 
            $subject = new Subject();
            $materias = $subject->filterAssignSubjects($subject_id);
            require_once("views/subjects/materiasAsignadas.php");

        }




    }
?>