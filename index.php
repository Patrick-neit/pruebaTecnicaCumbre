<?php
require_once("Conexion.php");
require_once("controllers/SubjectController.php");

if(isset($_GET['m'])):
    if (method_exists("SubjectController",$_GET['m'])):
    SubjectController::{$_GET['m']}();
    
    endif;
else:

SubjectController::index();
/* SubjectController::materiasAsignados(); */



endif;
