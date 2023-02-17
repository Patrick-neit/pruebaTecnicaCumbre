<?php require "views/layout/header.php" ?>
<h1>Registrar nuevo Tutor</h1>
<hr>
<form action="" method="get">
	<input type="text" placeholder="Nombre Tutor:" name="name"><br>
    
	
    <select name="state">
      <option value="A">Activo</option>
      <option value="D">De Baja</option>
    </select>
    
	<input type="submit" class="btn" name="btn" value="GUARDAR"><br>
	<input type="hidden" name="m" value="guardar">
</form>
<?php require "views/layout/footer.php" ?>