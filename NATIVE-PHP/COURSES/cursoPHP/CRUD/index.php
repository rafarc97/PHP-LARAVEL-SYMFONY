<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CRUD</title>
<link rel="stylesheet" type="text/css" href="hoja.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

</head>

<body>

<?php

  include("conexion.php");

  //PAGINACIÓN

  $tam_paginas = 3; //registros/pag

  if(isset($_GET["pagina"])){
      if($_GET["pagina"] == 1){
          header("location: index.php");
      }else{
          $pagina = $_GET["pagina"];
      }
  }else{
      $pagina = 1; //pag actual en la que nos encontramos
  }

  $empezar_desde = ($pagina - 1) * $tam_paginas; //al cargar calcula de x a y registros que carga

  $sql_total = "SELECT * FROM datos_usuarios"; 
  $resultado = $base->prepare($sql_total);
  $resultado->execute(array());

  $num_filas = $resultado->rowCount(); //filas que devuelve la inst sql
  $total_paginas = ceil($num_filas / $tam_paginas); //ceil redondea

  //FIN PAGINACIÓN

  $conexion = $base->prepare("SELECT * FROM datos_usuarios LIMIT $empezar_desde, $tam_paginas");
  $conexion->execute();

  if(isset($_POST["cr"])){
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $direccion = $_POST["direccion"];

    $sql = "INSERT INTO datos_usuarios (Nombre, Apellido, Direccion) VALUES(:nombre, :apellido, :direccion)";
    $resultado = $base->prepare($sql);
    $resultado->execute(array(":nombre"=>$nombre, ":apellido"=>$apellido, ":direccion"=>$direccion));

    header("location:index.php");
  }
?>


<h1>CRUD<span class="subtitulo">Create Read Update Delete</span></h1>
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
      while($registros = $users->fetch(PDO::FETCH_OBJ)) : ?>

      <tr>
        
        <td><?php echo $registros->id?></td>
        <td><?php echo $registros->Nombre?></td>
        <td><?php echo $registros->Apellido?></td>
        <td><?php echo $registros->Direccion?></td>
  
        <td class="bot"><a href="borrar.php?id=<?php echo $registros->id?>"><input type='button' name='del' id='del' value='Borrar'></a></td>

        <td class='bot'><a href="editar.php?id=<?php echo $registros->id?> & nombre=<?php echo $registros->Nombre?> & apellido=<?php echo $registros->Apellido?> & direccion=<?php echo $registros->Direccion?>"><input type='button' name='up' id='up' value='Actualizar'></a></td>
      </tr>     
    
    <?php
      endwhile;
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





<p>&nbsp;</p>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</body>
</html>