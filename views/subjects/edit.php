<?php require "views/layout/header.php" ?>
<h1>Editar</h1>
<hr>
<form action=""  method="get">
	<?php foreach ($dato as $value): ?>
		<?php  foreach ($value as $v ): ?>
		<label for="">NOMBRE</label> <br>
		<input type="text" name="name" value="<?php echo $v['name'] ?>"><br>
		<label for="">Semestre</label><br>
		<input type="text" name="semester" value="<?php echo $v['semester'] ?>"><br>
        <label for="">Estado</label><br>
		<select name="state">
            <option value="O">Ofertada</option>
            <option value="I">Invalida</option>
        </select>	
		<input type="hidden" name="id" value="<?php echo $v['id'] ?>">
		<input type="submit" class="btn" name="btn" value="ACTUALIZAR">
		<?php endforeach ?>
	<?php endforeach ?>
	<input type="hidden" name="m" value="actualizar">
</form>
<?php require "views/layout/footer.php" ?>