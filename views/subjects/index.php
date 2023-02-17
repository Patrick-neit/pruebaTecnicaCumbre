<?php
 require_once("views/layout/header.php"); 
include('controllers/TutorController.php');
/* include('views/tutors/index.php'); */

?>
<a href="index.php?m=nuevo" class="btn">Agregar Materia</a>
<a href="index.php?m=materiasAsignados" class="btn">Ver Materias Asignadas</a>
<h1>Listado de Materias Registradas</h1>
    <table>
        <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Semestre</td>
            <td>Estado</td>
            <td>Accion</td>

        </tr>

        <tbody>
            <?php 
            if(!empty($data)):
            foreach($data as $key =>$value) 
                foreach($value as $v):?>
                <tr>
                    <td> <?php echo $v['id'] ?> </td>
                    <td><?php echo $v['name'] ?> </td>
                    <td> <?php echo $v['semester'] ?></td>
                    <td>
                    <?php if($v['state']=='O')
                    echo('Ofertada');
                    else
                    echo('Invalido');
                    ?>
                    </td>
                     
                   

                    <td>
                        <a class="btn" href="index.php?m=editar&id=<?php echo $v['id']?>" class="btn">Editar Materia</a>
                        <a class="btn" href="index.php?m=eliminar&id=<?php echo $v['id']?>" onclick="return confirm('Are u Sure?');false" class="btn">Eliminar Materia</a>
                    </td>
                 </tr>

                <?php endforeach;?>
            <?php else: ?>
                <tr>
                    <td colspan="3">No Existen Materias Registradas</td>
                </tr>
            <?php endif?>
           
        </tbody>
        
        
    </table>
<?php
require_once("views/layout/footer.php");

?>