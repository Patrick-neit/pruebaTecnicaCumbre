<?php

 include $_SERVER['DOCUMENT_ROOT'].'/views/layout/header.php'; 

?>
<a href="index.php?m=nuevoTutor" class="btn">Agregar Tutor</a>
    <table>
        <tr>
            <td>ID</td>
            <td>Nombre</td>
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
                     <td> <?php echo $v['state'] ?></td>
                   

                    <td>
                        <a class="btn" href="index.php?m=editar&id=<?php echo $v['id']?>" class="btn">Editar Materia</a>
                        <a class="btn" href="index.php?m=eliminar&id=<?php echo $v['id']?>" onclick="return confirm('Are u Sure?');false" class="btn">Eliminar Materia</a>
                    </td>
                 </tr>

                <?php endforeach;?>
            <?php else: ?>
                <tr>
                    <td colspan="3">No Existen Tutores Registrados</td>
                </tr>
            <?php endif?>
           
        </tbody>
        
        
    </table>
<?php
require_once("views/layout/footer.php");

?>