<?php
    require_once("models/Tutor.php");
    require_once("Conexion.php");
    
    class TutorController{
        private $conexion;
        function __construct(){
            $this->conexion= new Conexion();    
        }

        static function index(){
           $tutor = new Tutor();
            $data = $tutor->show("tutors","1");
            require_once("views/tutors/index.php");
        }
        
        static function nuevoTutor(){
            
            require_once("views/tutors/create.php");
        }
        static function guardar(){
            $name = $_REQUEST['name'];
            
            $state = $_REQUEST['state'];
            
            $data       =   "'".$name."','".$state. "'";

            $tutor= new Tutor();
            $dato= $tutor->insert("tutors",$data);
          
            header("location:".urlsite);
        }



        static function editar(){
            $id = $_REQUEST['id']; 
            $tutor = new Tutor();
            $dato= $tutor->show("tutors","id=".$id);
            require_once("views/tutors/edit.php");
        }
        static function actualizar(){
            $id = $_REQUEST['id']; 
            $name = $_REQUEST['name'];
            
            $state = $_REQUEST['state'];
            
            $data       =   "name='".$name."',state='".$state. "'";

            $tutor= new Tutor();
            $dato= $tutor->updated("tutors",$data,"id=".$id);
          
            header("location:".urlsite);
        }

        static function eliminar(){
            $id = $_REQUEST['id']; 
            $tutor = new Tutor();
            $dato= $tutor->delete("tutors","id=".$id);
            header("location:".urlsite);
        }

        




    }
?>