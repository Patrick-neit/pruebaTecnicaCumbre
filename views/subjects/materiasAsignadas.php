<?php
 require_once("views/layout/header.php"); 
include('controllers/TutorController.php');

/* include('views/tutors/index.php'); */

?>
<link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<a href="index.php?m=asignarMateria" class="btn">Asignar Materias</a>
<div>
    <h1>Listado de Materias Asignadas</h1>
<div class="card">
                <div class="card-header">
                  <h4>Seleccione la Materia a Filtrar</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive" style="overflow-x: hidden">
                    <form method="post" action="filterMateriasAsignados.php">
                    
                      <div class="row">
                
                        <div class="col-md-8">
                          <div class="input-group">
                            <span class="input-group-addon "><strong>Materia::</strong> </span>
                            <select name="subject_id" id="subject_id" class="form-control selectric">
                                <?php 
                                foreach ($subjects as $key => $subject) {
                                    echo($subject['id']);
                                }
                                ?>
                                
                             
                              
                             
                            </select>
                          </div>
                        </div>
                        <div class="col-md-4" style="margin: 0 auto;">
                          <input  class="form-control btn btn-secondary" type="submit" value="Filtrar" id="filtrar" name="filtrar">
                        </div>
                    </div>
                    <div class="card-footer">
                      </div>
                    </form>
                  </div>
                </div>
                
            </div>
</div>
<div class="table-responsive">
    <table class="table table-bordered" id="miTabla">
        <tr>
            
            <td>Nombre Tutor</td>
            <td>Nombre Materia</td>
            <td>Semestre</td>
            

        </tr>

        <tbody>
            <?php 
            if(!empty($materias)):
            foreach($materias as $key =>$value) 
                foreach($value as $v):?>
                <tr>
                    <td> <?php echo $v['tutorName'] ?> </td>
                    <td><?php echo $v['subjectName'] ?> </td>
                    <td> <?php echo $v['semestre'] ?> </td>
   
                 </tr>

                <?php endforeach;?>
            <?php else: ?>
                <tr>
                    <td colspan="3">No Existen Materias Asignadas</td>
                </tr>
            <?php endif?>
           
        </tbody>
        
        
    </table>
</div>
<?php
require_once("views/layout/footer.php");

?>
 <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"> </script>
 <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"> </script>
<script>
  $(document).ready(function() {
    $('#miTabla').DataTable();
  });
</script>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->