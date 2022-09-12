<?php
include('../../inc/functions.php');
include('./head.php');
$query = 'SELECT dp.doc, dp.nombres, dp.apellidos, s.sexo, dp.telefono, p.programa FROM datos_personales dp, usuario u, sexo s, programa p WHERE dp.doc=u.doc AND dp.id_sexo=s.id_sexo AND p.num_ficha=u.num_ficha AND u.nivel=1';



?>
<div class="container">
    <table class="table table-striped">
        
            <thead>
            <tr>
                <th>DOCUMENTO</th>
                <th>NOMBRES</th>
                <th>APELLIDOS</th>
                <th>SEXO</th>
                <th>TELEFONO</th>
                <th>PROGRAMA</th>
                <th>ACCION</th>
                
            </tr>
            </thead>
        <?php 
            $result = ejecutar($query);
            while ($row = mysqli_fetch_array($result)){
        ?>  
            <tr>
            <td>
                <?php echo $row['doc'] ?>
            </td>
            <td>
                <?php echo $row['nombres'] ?>
            </td>
            <td>
                <?php echo $row['apellidos'] ?>
            </td>
            <td>
                <?php echo $row['sexo'] ?>
            </td>
            <td>
                <?php echo $row['telefono'] ?>
            </td>
            <td>
                <?php echo $row['programa'] ?>
            </td>
            <td>
                <a class="text-danger" href="../../php/eliminar.php?doc=<?php echo $row['doc'] ?>">eliminar</a>
            </td>
            </tr>
            
        <?php } ?>
    </table>
</div>