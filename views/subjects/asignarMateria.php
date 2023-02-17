<?php require "views/layout/header.php" ?>
<h1>Asignar Tutor a Materia</h1>
<hr>


<form action="" method="get">
    
    
    <label for="">Seleccione la Materia</label> <br>
	<input type="text" placeholder="Nombre Materia:" name="subject_id"><br> <br>
    <label for="">Seleccione el Tutor</label> <br>
    <input type="text" placeholder="Nombre Tutor:" name="tutor_id"><br> <br>
	
   
    
	<input type="submit" class="btn" name="btn" value="Asignar"><br>
	<input type="hidden" name="m" value="asignarMaterias">
</form>
<?php require "views/layout/footer.php" ?>