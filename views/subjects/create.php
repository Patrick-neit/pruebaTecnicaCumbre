<?php require "views/layout/header.php" ?>
<h1>Nueva Materia</h1>
<hr>
<form action="" method="get">
	<input type="text" placeholder="Nombre Materia:" name="name"><br>
    <input type="text" placeholder="Semestre Materia:" name="semester"><br>
	
    <select name="state">
      <option value="O">Ofertada</option>
      <option value="I">Invalida</option>
    </select>
    
	<input type="submit" class="btn" name="btn" value="GUARDAR"><br>
	<input type="hidden" name="m" value="guardar">
</form>
<?php require "views/layout/footer.php" ?>