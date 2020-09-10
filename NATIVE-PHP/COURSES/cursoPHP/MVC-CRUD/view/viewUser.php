<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        td{
            border: 2px solid red;
        }
    </style>
</head>
<body>

<?php

    require("model/paginacion.php");

?>
<table>

<form action="<?php echo $_SERVER['PHP_SELF']; ?> " method="post">
  <table width="50%" align="center">
    <tr >
      <td class="primera_fila">Id</td>
      <td class="primera_fila">Nombre</td>
      <td class="primera_fila">Apellido</td>
      <td class="primera_fila">Dirección</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
    </tr> 
   
    
    
    <?php
      //$registros es un array de objetos que tendrá tantos objetos como usuarios registrados en la BBDD
      foreach($matrizUsers as $user) :  ?>

      <tr>
        
        <td><?php echo $user['id']?></td>
        <td><?php echo $user['Nombre']?></td>
        <td><?php echo $user['Apellido']?></td>
        <td><?php echo $user['Direccion']?></td>
  
        <td class="bot"><a href="model/borrar.php?id=<?php echo $registro['id']?>"><input type='button' name='del' id='del' value='Borrar'></a></td>

        <td class='bot'><a href="model/editar.php?id=<?php echo $registros['id']?> & nombre=<?php echo $registros['Nombre']?> & apellido=<?php echo $registros['Apellido']?> & direccion=<?php echo $registros['Direccion']?>"><input type='button' name='up' id='up' value='Actualizar'></a></td>
      </tr>     
    
    <?php
      endforeach;
    ?>




	<tr>
	<td></td>
      <td><input type='text' name='nombre' size='10' class='centrado'></td>
      <td><input type='text' name='apellido' size='10' class='centrado'></td>
      <td><input type='text' name='direccion' size='10' class='centrado'></td>
      <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td></tr>   
      <tr><td>
      <?php
        for($i = 1; $i <= $total_paginas; $i++){
          echo "<a href='?pagina= " . $i . "'>" . $i . "</a> ";
        }
      ?>

      </td></tr> 
  </table>

</form>
</table>
    
</body>
</html>